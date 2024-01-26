!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Publitorial: New Editing Client Information</title>
        <meta name="description" content="Submit your information to receive Publitorial's new client package.">

        <link rel="icon" type="image/png" href="{{ asset('/images/icon.png') }}" />
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('/css/publitorial.css') }}" rel="stylesheet" />

       
    </head>
    <body>
        <div id="authBar">
            <img src="{{ asset('/images/publitorial-dark.jpg') }}" class="logo" style="float:left"/>
            @if (Route::has('login'))
                <div style="float:clear">
                
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
                <hr />
            @endif

        </div>
        <div id="main" class="centered">

            @if(session()->has('success'))
                <p>
                    {{ session()->get('success') }}
                </p>
            @endif

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ route('newclient.store') }}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="first_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="last_name" value=""></td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td><input type="text" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Tell Us about Your Book</td>
                        <td><textarea name="message"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="footer">
            Publitorial — Book Editing and Ghostwriting Services
        </div>