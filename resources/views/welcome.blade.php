<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Publitorial: Book Editing and Ghostwriting Services</title>
        <meta name="description" content="Publitorial is a group of award-winning editors and ghostwriters who collaborate with authors on their dream manuscripts.">

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
        
        <div id="main">
            
            <h1 class="bgrose">Publitorial / Book Editing That Transforms</h1>

            <div class="boxes">
                <div class="box-column">
                    <div class="box-row-left">
                        <h1>Award-Winning Editors + Writers</h1>
                        <hr />
                        <p>
                            We've worked with award-winning and bestselling authors who have consistently made 
                            <i>USA Today</i> and <i>Wall Street Journal</i> lists. These authors have found 
                            incredible success from the work we've done together. Whether you're a CEO with a large 
                            catalog of books or a first-time fiction author, we'll work together closely to find your
                            path to success too.
                        </p>
                    </div>
                </div>
                <div class="box-column">
                    <div class="box-row-right">
                        <h1>Join a Community of Writers</h1>
                        <hr />
                        <p>
                            One of the things that sets us apart is that we aren't just your editors or your
                            ghostwriters—we are a part of a community that helps cultivate your growth as 
                            an author. We'll be there with you to tackle the challenges you face and 
                            celebrate all the wins throughout your career. Everyone 
                            learns and succeeds together; no one is left behind.
                        </p>
                    </div>
                </div>

                <div class="box-column">
                    <div class="box-row-left">
                        <h1>Editing Is a Collaboration</h1>
                        <hr />
                        <p>
                            Hiring an editor can be a stressful task, but it doesn't need to be. We want to assure you 
                            that the work we do is a collaboration, not a set of strict rules. Our role is to give you 
                            guidance so you can make the best choices for your manuscript. However, you are the one in 
                            the driver's seat. No changes are committed to your manuscript without your permission. Your 
                            story is important to us.
                        </p>
                    </div>
                </div>
                <div class="box-column">
                    <div class="box-row-right">
                        <h1>Publishing Experts</h1>
                        <hr />
                        <p>
                            From writing to book promotion, we've been through the entire publishing process dozens of 
                            times, and we're here to help you navigate that. Both self-publishing and traditionally 
                            publishing paths are complex, and we'll give you the resources and training to get through that with 
                            minimal confusion. We'll offer you assistance through in-depth guides, coaching, and more 
                            throughout our time together.
                        </p>
                    </div>
                </div>
                
                
            </div>
            <div>
                    <h2>Our editing services include the following:</h2>
                    <ul>
                        <li>
                            Onboarding document that guides you through the entire editing process.
                        </li>
                        <li>
                            Publishing guide customized for your specific publishing path.
                        </li>
                        <li>
                            Direct edits on your manuscript with explanations and links to resources.
                        </li>
                        <li>
                            Membership in an exclusive community with regular events and access to our courses.
                        </li>
                        <li>
                            Access to email support with a member of your editing team.
                        </li>
                        <li>
                            Feedback on your strengths as a writer and any areas that need improvement.
                        </li>
                        <li>
                            Access to a client portal with updates on the status of your project.
                        </li>
                        <li>
                            [Developmental Edits Only] Story blueprint that guides you through revising your manuscript.
                        </li>
                        <li>[Copy Edits Only] Style guide that explains what spelling, punctuation, formatting, and 
                            grammar conventions used in your edit.
                        </li>
                    </ul>
            </div>
            <div id="testimonials">
                <h2 style="text-align: center;">What Our Clients Say</h2>
                <div class="dark">
                    <h3>High Quality Work</h3>
                    <p>Publitorial did a fantastic job ghostwriting for us. They delivered high quality work 
                        on time. Very impressed with my ghostwriter's skills! I am looking forward to hiring 
                        them again for our next project.
                    </p>
                </div>
                <div class="medium">
                    <h3>Real Editing Heroes</h3>
                    <p>Publitorial is my go-to for all my editing needs. I noticed immediately how much they excelled 
                        in the publishing industry. They are real editing heroes.
                    </p>
                </div>
                <div class="dark">
                    <h3>Voice and Rhetoric Experts</h3>
                    <p>Their technical ability is excellent. Additionally, Publitorial understood the intangibles 
                        of voice and rhetoric that contribute to my message.
                    </p>
                </div>
            </div>
            <div>
                <h2>Want to get started today?</h2>
            </div>
        </div>
        <div id="footer">
            Publitorial — Book Editing and Ghostwriting Services
        </div>
    </body>
</html>
