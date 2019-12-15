<!doctype html>
<html lang="en">
<head>
<?php include('head.php'); ?>

</head>

<body>

    <header class="pb-md-4">
        <div class="container pl-4 pl-sm-3">
        <?php include('header.php'); ?>
            <div class="d-none d-md-block">
                <div class="d-flex justify-content-start align-items-center mt-md-5 animated fadeInUp ">
                    <div class="avatar rounded-circle animated bounceIn mr-3">
                        
                    </div>
                    <div>
                        <h2 class="m-0 ">Louis-Laurent</h2>
                        <h3 class="text-secondary m-0">Product designer</h2>
                    </div>
                </div>
            </div>
            <div class="d-md-none d-block">
                <div class="d-flex justify-content-start align-items-center my-3 animated fadeInUp ">
                    <div class="avatar2 rounded-circle animated bounceIn mr-3">
                        
                    </div>
                    <div>
                        <h5 class="m-0 ">louilo</h5>
                        <p class="text-secondary m-0">Product designer</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container mt-3 mt-sm-5">
            <div class="row">
                <div class="col p-0">
                    <div id="chat" class="conv-form-wrapper px-lg-5">
                    <?php
$action=$_REQUEST['action'];
?>
                        <form action="" method="POST" enctype="multipart/form-data" class="d-none">


                            <input type="text" conv-question="Bonjour! 👋" no-answer="true">
                            <input type="text" conv-question="My name is Louis-Laurent but you can call me louilo, I'm a UX/UI Engineer based in London." no-answer="true">
                            <select name="intro" conv-question="Have you ever heard about User Experience?">
                                <option value="no">What's that?</option>
                                <option value="yes">Yes of course!</option>
                                
                            </select>
                            <div conv-fork="intro">
                                <div conv-case="no">
                                    <input type="text" conv-question="Don't worry and take a seat! 😂" no-answer="true">
                                    <input type="text" conv-question="User experience encompasses the emotions and attitudes that users feel and adopt when using a particular product or service. Let me show you!" no-answer="true">
                                    <select name="subject" conv-question="The Ux designer is the person who understands the pinciples of human–computer interaction and product ownership.">
                                        <option value="next">hum... it's interesting.</option>
                                        <option value="next">🤔 blablabla... </option>
                                    </select>
                                    <input type="text" name="name" conv-question="Well... can you tell me your name?">
                                    <input type="text" conv-question="Thanks {name}:0! So the UX designer brings simple solutions to complex problems. Let me show you!" no-answer="true">
                                    <input type="text" conv-question="On booking.com" no-answer="true">
                                    <input type="text" conv-question="<img src='assets/booking.gif'/>" no-answer="true">
                                    <select name="ux_examples" conv-question="The booking widget is the most important element for a travel website. On booking, if you scroll down to browse the different travel deals, the booking form will appear as a fixed element at the top of the page.">
                                        <option value="next">well I understood!</option>
                                        <option value="next_ex1">What else?</option>
                                    </select>
                                    <div conv-fork="ux_examples">
                                        <div conv-case="next_ex1">
                                            <input type="text" conv-question="On lush.com" no-answer="true">
                                            <input type="text" conv-question="<img width='300' src='assets/menu_lush.png'/>" no-answer="true">
                                            <select name="ux_examples2" conv-question="Display a large amount of navigation links is never the best way to guide your users but sometime you have no choice so Lush provides an immersive menu to keep users' attention.">
                                                <option value="next">Now, I understood!</option>
                                                <option value="next_ex2">Ok, anything else?</option>
                                            </select>
                                        </div>
                                        <div conv-fork="ux_examples2">
                                            <div conv-case="next_ex2">
                                                <input type="text" conv-question="On Asos.com" no-answer="true">
                                                <input type="text" conv-question="<img width='300' src='assets/asos.jpg'/>" no-answer="true">
                                                <input type="text" conv-question="<img width='300' src='assets/asos2.png'/>" no-answer="true">
                                                <select name="ux_examples" conv-question="It happens that you wish/like to buy the exact same outfit as presented on the picture. Asos allows it by creating a feature to buy all the items in one click.">
                                                    <option value="">Hm... probably.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div conv-case="yes">
                                    <input type="text" conv-question="Awesome!" no-answer="true">
                                    <input type="text" conv-question="I love to meet design lovers 😍!" no-answer="true">
                                    <input type="text" name="name" conv-question="Ok first can you tell me your name?">
                                    <input type="text" conv-question="Cool {name}:0! It's a pleasure to meet you." no-answer="true">
                                    <select name="subject" conv-question="Well, what do you want to speak about?">
                                        <option value="more">Tell me more about you?</option>
                                        <option value="chill">Nothing ! I'm just chilling.</option>
                                    </select>
                                    <div conv-fork="subject">
                                        <div conv-case="chill">
                                            <input type="text" conv-question="I see! I love spending time on the web to discover new trends and get some inspiration." no-answer="true">
                                            <input type="text" conv-question="<img width='300' src='assets/chill.webp' /> " no-answer="true">
                                            <input type="text" conv-question="Did you find something interesting? ">
                                            <input type="text" conv-question="Sounds good!" no-answer="true">
                                        </div>
                                        <div conv-case="more">
                                            <input type="text" conv-question="👍" no-answer="true">
                                            <input type="text" conv-question="I'm a designer with 8 years of experience. I'm specialised in User Experience and User Interface for the last 5 years."
                                                no-answer="true">
                                            <select name="project" conv-question="At the moment, I work in financial web services for the SGCIB. I am developing a suite of tools to facilitate trades internationally : SGMarkets.com">
                                                <option value="sgmarkets">What do you do for SG Markets?</option>
                                                <option value="whatelse">What else?</option>
                                            </select>
                                            <div conv-fork="project">
                                                <div conv-case="whatelse">
                                                    <input type="text" conv-question="For the last 5 years, I have worked for a few companies across different industries as a freelancer or/and in a permanent position." no-answer="true">
                                                    <select name="project2" conv-question="A few of them : <li>Harrods</li><li>KurtGeiger</li><li>laQuinzaine.fr</li>">
                                                        <option value="whatelse2">Let me see some projects?</option>
                                                        <option>What did you do for them?</option>
                                                    </select>
                                                    <div conv-fork="project2">
                                                        <div conv-case="whatelse2">
                                                            <input type="text" conv-question="You can see a few projects <a href='project.php'>here.</a>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div conv-case="sgmarkets">
                                                    <input type="text" conv-question="My speciality lies in the trading research, all services or apps to prepare a deal." no-answer="true">
                                                    <input type="text" conv-question="These are a few examples illustrating my daily tasks :" no-answer="true">
                                                    <input type="text" conv-question="<li>translate feature on detailled scenarios and use-cases</li>
                                                    <li> Design architecture of services as site map</li>
                                                    <li>Prototyping as wireframe or dynamic</li>
                                                    <li>usability test</li>
                                                    <li>Analysis of users behaviour</li>
                                                    <li>preparation of specs folders</li> " no-answer="true">
                                                    <select name="converted" conv-question="Also since few months I'm in charge of the new design system for all services.">
                                                        <option value="contact">Nice! I want to know more!</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <select name="converted2" conv-question="{name}:0! I would be happy to grab a coffee with you to talk.">
                                <option value="contactyes">Good idea!</option>
                                <option value="contactno">I don't like coffee...</option>
                            </select>
                            <div conv-fork="converted2">
                                <div conv-case="contactno">
                                        <input type="text" conv-question="<img src='https://media3.giphy.com/media/oZEBLugoTthxS/giphy.gif'/>" no-answer="true">
                                        <select name="converted3" conv-question="NP! let me know if you want to meet">
                                                <option value="go">Get in touch!</option>
                                                <option value="no">I will let you know.</option>
                                            </select>
                                            <div conv-fork="converted3">
                                                
                                                    <div conv-case="go">
                                                            <input type="text" conv-question="Alright!" no-answer="true">
                                                    </div>
                                                    <div conv-case="no">
                                                            <input type="text" conv-question="That's fine" no-answer="true">
                                                            <select conv-question="Thanks for this conversation. Feel free to have a look at my website and to send me some feedback 😁!">
                                                                    <option value="google" callback="google">See projects.</option>
                                                                    <option value="bing" callback="bing">See resume.</option>
                                                            </select>
                                                    </div>
                                                    
                                                </div>
                                                    
                                    </div>
                                    </div>
                            <input type="text" name="message" conv-question="Please tell me a few words about what you would like to speak about.">
                            <input type="text" conv-question="Sounds good. I will have a look at it and will get back to you asap." no-answer="true">
                            <input conv-question="May I ask for your email adress?" callback="sendEmailCallback" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                                id="email" type="email" name="email" required placeholder="What's your e-mail?">
                            <input type="text" conv-question="Thank you for sharing your contact details and feel free to add me on LinkedIn!" no-answer="true">
                            <input type="text" conv-question="Now you can visit my website." no-answer="true">
                            <input type="text" conv-question="I hope to see you soon." no-answer="true">
                            <input type="text" conv-question="@+">




                    </div>
                    
                    
                    </form>
	
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="dist/autosize.min.js"></script>
    <script type="text/javascript" src="dist/jquery.convform.js"></script>

    <script>
        function sendEmailCallback(convState) {
            var formData = new FormData();
            formData.append('name', convState.answers.name.text)
            formData.append('email', convState.answers.email.text)
            formData.append('message', convState.answers.message.text)
            fetch("/send_email.php", {
                method: "POST",
                body: formData
            })
        }
        function google() {
            window.open("project.php");
        }
        function bing() {
            window.open("resum.php");
        }
        var rollbackTo = false;
        var originalState = false;
        function storeState(stateWrapper) {
            rollbackTo = stateWrapper.current;
            console.log("storeState called: ", rollbackTo);
        }
        function rollback(stateWrapper) {
            console.log("rollback called: ", rollbackTo, originalState);
            console.log("answers at the time of user input: ", stateWrapper.answers);
            if (rollbackTo != false) {
                if (originalState == false) {
                    originalState = stateWrapper.current.next;
                    console.log('stored original state');
                }
                stateWrapper.current.next = rollbackTo;
                console.log('changed current.next to rollbackTo');
            }
        }
        function restore(stateWrapper) {
            if (originalState != false) {
                stateWrapper.current.next = originalState;
                console.log('changed current.next to originalState');
            }
        }
    </script>


</body>

</html>