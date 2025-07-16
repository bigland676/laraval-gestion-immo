<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Afficher le formulaire de contact
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Traiter l'envoi du formulaire de contact
     */
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10|max:1000',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 1000 caractères.',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Ici vous pouvez sauvegarder en base de données
            // ou envoyer un email

            // Exemple d'envoi d'email (nécessite la configuration MAIL dans .env)
            /*
            Mail::send('emails.contact', $request->all(), function ($message) use ($request) {
                $message->to('contact@senimmo.com')
                       ->subject('Nouveau message de contact - ' . ($request->subject ?: 'Sans sujet'))
                       ->replyTo($request->email, $request->name);
            });
            */

            // Pour l'instant, on simule juste un succès
            return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');

        } catch (\Exception $e) {
            return back()
                ->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.')
                ->withInput();
        }
    }
}
