<?php

/**
 * Laravel Usage Examples
 * 
 * These examples show how to use the Ascend SDK in a Laravel application.
 */

namespace App\Http\Controllers;

use AscendSDK\AscendClient;
use AscendSDK\Facades\Ascend;
use AscendSDK\Exceptions\AscendException;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    // Example 1: Using Dependency Injection
    public function __construct(private AscendClient $ascend)
    {
    }
    
    public function listPrograms()
    {
        try {
            $programs = $this->ascend->programs()->listPrograms([
                'page' => request('page', 1),
            ]);
            
            return view('insurance.programs', compact('programs'));
        } catch (AscendException $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    // Example 2: Using the Facade
    public function showProgram($id)
    {
        try {
            $program = Ascend::programs()->get($id);
            
            return view('insurance.program-details', compact('program'));
        } catch (AscendException $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    // Example 3: Creating Resources
    public function createContact(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
        ]);
        
        try {
            $contact = Ascend::contacts()->create($validated);
            
            return redirect()
                ->route('contacts.show', $contact['id'])
                ->with('success', 'Contact created successfully');
        } catch (AscendException $e) {
            return back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    // Example 4: Updating Resources
    public function updateInvoice(Request $request, $id)
    {
        $validated = $request->validate([
            'amount' => 'required|integer|min:0',
            'due_date' => 'required|date',
        ]);
        
        try {
            $invoice = Ascend::invoices()->updateInvoice($id, $validated);
            
            return redirect()
                ->route('invoices.show', $id)
                ->with('success', 'Invoice updated successfully');
        } catch (AscendException $e) {
            return back()
                ->withInput()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    // Example 5: Pagination
    public function listInvoices(Request $request)
    {
        try {
            $page = $request->get('page', 1);
            
            $result = Ascend::invoices()->listInvoices([
                'page' => $page,
                'limit' => 20,
            ]);
            
            return view('insurance.invoices', [
                'invoices' => $result['data'] ?? [],
                'pagination' => [
                    'current_page' => $page,
                    'has_more' => $result['has_more'] ?? false,
                ],
            ]);
        } catch (AscendException $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
    // Example 6: Handling Multiple Resources
    public function createProgramWithInvoices(Request $request)
    {
        try {
            // Create the program first
            $program = Ascend::programs()->createProgram([
                'insured_id' => $request->insured_id,
                'carrier_id' => $request->carrier_id,
                'policy_number' => $request->policy_number,
            ]);
            
            // Then create invoices for the program
            foreach ($request->invoices as $invoiceData) {
                Ascend::invoices()->createInvoice([
                    'program_id' => $program['id'],
                    'amount' => $invoiceData['amount'],
                    'due_date' => $invoiceData['due_date'],
                ]);
            }
            
            return redirect()
                ->route('programs.show', $program['id'])
                ->with('success', 'Program and invoices created successfully');
        } catch (AscendException $e) {
            return back()
                ->withInput()
                ->withErrors(['error' => 'Failed to create program: ' . $e->getMessage()]);
        }
    }
}
