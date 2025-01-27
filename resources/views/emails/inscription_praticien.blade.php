@component('mail::message')
# Bienvenue, {{ $user->name }} !

Nous sommes ravis de vous accueillir sur notre plateforme. Vous pouvez maintenant accéder à votre espace en ligne.

## Vos informations de connexion :
- **Email** : {{ $user->email }}
- **Mot de passe temporaire** : {{ $password }}

@component('mail::button', ['url' => url('/login')])
Se connecter
@endcomponent

Nous vous recommandons fortement de changer votre mot de passe dès que possible après vous être connecté.


Merci,<br>
L'équipe {{ config('app.name') }}
@endcomponent
