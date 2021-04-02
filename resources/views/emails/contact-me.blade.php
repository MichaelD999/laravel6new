@component('mail::message')
    # A heading

    lorem ipsum dolor sit amet, consteri admins.

    - A list
    - goes
    - here

    lorem ipsum dolor sit amet, consteri admins.

    @component('mail::button' , ['url' => 'https://laracasts.com'])
        Visit Laracasts
    @endcomponent

@endcomponent

