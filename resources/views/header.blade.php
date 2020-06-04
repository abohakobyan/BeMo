

@component('header')

<header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div id="headwrap">
                <div id="titlelogo">
                        <a href="/">
                        <div id="logo"><img src="{{asset('images').'/'.$logosrc }}" width="167" height="100" alt="Site logo"/></div>
                        <h1></h1></a>
                        <h2></h2>
                </div>
                <div id="mwrap">
                        <div id="lt"></div>
                        <div id="lm"></div>
                        <div id="lb"></div>
                    </div>


                    <div id="nwrap">
                        <div id="menuBtn"></div>
                        <nav>
                            <ul class="navigation">
                                <li><a href="index" rel="self">Main</a></li>
                                <li><a href="how-to-prepare-for-cda-interview" rel="self">How To Prepare</a></li>
                                <li><a href="sample-cda-interview-questions" rel="self">CDA Interview Questions</a></li>
                                <li><a href="contact-us" rel="self">Contact Us</a></li></ul></nav>

                    </div>
            </div>
</header>
