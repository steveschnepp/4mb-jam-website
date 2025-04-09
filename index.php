<?php
    include_once 'templates/section.php';
    $mainSectionData = [
        'items' => [
            [
                'id' => 'rules',
                'content' => <<< 'HTMLQUOTE'
                    <p>You can submit a Ubuntu or Windows desktop (x64) application which adheres to the following conditions:</p>

                    <ol>
                        <li>Excluding readme and copyright attribution, it is under 4 megabytes in size using the power of 2 system also known as <a href="https://en.wikipedia.org/wiki/Byte#Multiple-byte_units">Mebibytes (MiB)</a>.
                            <ul>
                                <li>It is the size of the unpacked project which is counted, not the compressed archive size.</li>
                            </ul>
                    </li>

                    <li>It doesn't contain anything that violates any Canadian federal law.</li>
                    <li>Isn't porn, doesn't have gratuitous nudity and explicit or implict sexual acts.</li>
                    <li>It is a video game.</li>
                    <li>You have a full month to do it, so it is expected it will be made during that month (may 2023).
                        <ul>
                            <li>Premade art, sound assets engine code are allowed.</li>
                        </ul>
                    </li>
                    <li>It isn't a game mod or hack.</li>
                    <li>It isn't an online multiplayer-only game.
                    <ul>
                        <li>Games with an online multiplayer component are fine as long as the main part of the game is entirely playable in solo. This is for judging reasons.</li>
                        <li>Excluding file size, Judges are free to not include the multiplayer part of the game in their evaluation.</li>
                        <li>If there's a dedicated server application, those files also count and must be included in the submission.</li>
                        </ul>
                    </li>
                    <li>It doesn't stream nor download content from the internet.</li>
                    <li>It is available for free for the duration of the judging period.</li>
                    <li>It can be downloaded for the duration of the judging period.</li>
                    <li>For clarification, a desktop application is an application that isn't a web application.
                    <ul>
                    <li>Something that embeds a web game into a binary desktop application, like electron or tauri is allowed. However, please keep in mind that some of these tools, like electron for example, will blow up the size of the executable way past the 4mb limit, so alternatives like tauri should be preferred.</li>
                    </ul>
                    </li>
                </ol>

                <a href="#">View Full Rules</a>
            HTMLQUOTE
                    ],
                    [
                        'id' => 'resources',
                        'content' => <<< 'HTMLQUOTE'
                <p>Check out the <a href="#">Resources</a> section for guidance on ways of making games that take up as little storage space as possible!</p>
            HTMLQUOTE
                    ],
                    [
                        'id' => 'community',
                        'content' => <<< 'HTMLQUOTE'
                <ul class="community-grid">
                    <li><a href="https://discord.gg/ge3YuJheBY">Discord</a></li>
                    <li><a href="https://mastodon.social/@4mbjam">Mastodon</a></li>
                </ul>
            HTMLQUOTE
                    ]
            ]
    ];


?>

<?php include 'partials/head.php'; ?>

    <body>
        <header class="fill-viewport home-top-header">
            <?php include 'partials/nav.php'; ?>

            <div class="whitespace-container">
                <img id="logo" src="assets/img/2025-logo.png" width="255" height="215" alt="4MB Jam 2025 Logo">
                <h1>4MB Game Jam<br>2025</h1>
                <p>Create a game that fits within 4MB!</p>
                <div class="stack">
                    <a class="cta-primary" href="#">Register</a>
                    <a class="cta-secondary" href="#main-content">Learn More</a>
                </div>
            </div>
        </header>

        <!-- TODO Use CSS Grid between floating register bar with button, main content and table of contents -->

        <div id="main-content" class="home-content-grid">
            <div class="sticky-action-bar">
                 <a class="cta-primary" href="#">Register</a>
            </div>

            <main>
                <?php
                    generateSections($mainSectionData);
                ?>
            </main>

            <aside class="table-of-contents">
                <nav>
                    <header>

                        <h2>Contents</h2>
                    </header>

                    <ul>
                        <li>
                            <a href="#rules">Rules</a>
                        </li>

                        <li>
                            <a href="#resources">Resources</a>
                        </li>

                        <li>
                            <a href="#community">Community</a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>
    </body>
</html>
