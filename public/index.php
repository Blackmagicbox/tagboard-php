<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/yjz6tzu.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/flexboxgrid.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>The Great Shoutbox</title>
</head>
<body>
    <div class="main-app shout-theme">
        <header class="main-header shout-theme">
            <div class="main-header-wrapper row">
                <div class="col-md-3">
                    <img src="/img/logo.png" alt="Shout it logo">
                </div>
                <nav class="main-nav shout-theme col-md-5 col-md-offset-2">
                    <ul class="main-nav shout-theme">
                        <li class="nav-item shout-theme">Home</li>
                        <li class="nav-item shout-theme">About</li>
                        <li class="nav-item shout-theme">Jobs</li>
                        <li class="nav-item shout-theme">Panel</li>
                    </ul>
                </nav>
                <div class="login-area col-md-2">
                    <div role="button" tabindex="-1" class="login-btn shout-theme" id="login">
                        Login
                    </div>
                </div>
            </div>
        </header>
        <section class="main-container shout-theme row start-md">
            <div class="shout-box shout-theme col-lg-6 col-md-6">
                <div class="shout-box-heading shout-theme col-md-12">
                    <h2 class="shout-box-heading-title shout-theme">
                        Latest Messages
                    </h2>
                    <div id="input" class="shout-box-heading-input-group">
                        <form method="post" action="process.php">
                            <label for="user">User</label>
                            <input id="name" type="text" name="user" placeholder="Enter your name!" />

                            <label for="message">Message</label>
                            <input id="message" type="text" name="message" placeholder="Say something!!" />

                            <input type="submit" name="submit" value="You said what?">

                        </form>
                    </div>
                </div>
                <div class="shout-box-item shout-theme col-md-12">
                    <div class="avatar-container">
                        <div class="avatar"></div>
                    </div>
                    <div class="message-container">
                        <div class="message-author">
                            <span>Robert Malaghat</span>
                        </div>
                        <div class="message-box">
                            <p class="message">
                                Distinctio dolorum quos eveniet est consectetur aut.
                                Perspiciatis dolor sunt dolor molestiae optio dolorem nobis.
                            </p>
                        </div>
                        <div class="time-stamp">
                            <span class="date">mo. 12-02 18:00</span>
                        </div>
                    </div>
                </div>
                <div class="shout-box-item shout-theme col-md-12">
                    <div class="avatar-container">
                        <div class="avatar"></div>
                    </div>
                    <div class="message-container">
                        <div class="message-author">
                            <span>Robert Malaghat</span>
                        </div>
                        <div class="message-box">
                            <p class="message">
                                Distinctio dolorum quos eveniet est consectetur aut.
                                Perspiciatis dolor sunt dolor molestiae optio dolorem nobis.
                            </p>
                        </div>
                        <div class="time-stamp">
                            <span class="date">mo. 12-02 18:00</span>
                        </div>
                    </div>
                </div>
                <div class="shout-box-item shout-theme col-md-12">
                    <div class="avatar-container">
                        <div class="avatar"></div>
                    </div>
                    <div class="message-container">
                        <div class="message-author">
                            <span>Robert Malaghat</span>
                        </div>
                        <div class="message-box">
                            <p class="message">
                                Distinctio dolorum quos eveniet est consectetur aut.
                                Perspiciatis dolor sunt dolor molestiae optio dolorem nobis.
                            </p>
                        </div>
                        <div class="time-stamp">
                            <span class="date">mo. 12-02 18:00</span>
                        </div>
                    </div>
                </div>
                <div class="shout-box-item shout-theme col-md-12">
                    <div class="avatar-container">
                        <div class="avatar"></div>
                    </div>
                    <div class="message-container">
                        <div class="message-author">
                            <span>Robert Malaghat</span>
                        </div>
                        <div class="message-box">
                            <p class="message">
                                Distinctio dolorum quos eveniet est consectetur aut.
                                Perspiciatis dolor sunt dolor molestiae optio dolorem nobis.
                            </p>
                        </div>
                        <div class="time-stamp">
                            <span class="date">mo. 12-02 18:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>