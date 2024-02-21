<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        Session::put('page','update_user');
        return view('profile.edit_user', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
          // Validate the request
    $validatedData = $request->validated();

    // Check if a new image has been uploaded
    if ($request->hasFile('image')) {
        // Get the uploaded file
        $image = $request->file('image');
        
        // Store the new image in storage and get the path
        $imagePath = $image->store('profile-images', 'public');
        
        // Delete the old image if it exists
        if ($request->user()->image) {
            Storage::disk('public')->delete($request->user()->image);
        }

        // Update the user's image path in the database
        $validatedData['image'] = $imagePath;
    }
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
        dd($request->user());
        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'تم تعديل بياناتك الشخصية بنجاح');
    }
   
}
