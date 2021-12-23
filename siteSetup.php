<?php

class siteSetup {

    private $additionalCSS;
    private $title;

    function __construct($title, $additionalCSS) {
        $this->title = $title;
        $this->additionalCSS = $additionalCSS;
        $this->printHeader();
    }
    
    private function printHeader() {
        echo <<<EOT
            <!DOCTYPE html>
            <html lang="de">
            <meta charset="utf-8"/>
            <html>
            <head>
            <link rel="shortcut icon" href=images/yakweide_logo_klein.png />
            <link rel="stylesheet" type="text/css" href=css/style.css>
            <link rel="stylesheet" type="text/css" href={$this->additionalCSS}>
            <title>{$this->title}</title>
            </head>
            <body>
            <nav>
            <div id="left">
                <img src=images/yakweide_logo_klein.png alt="Logo" height="50">
                </div>
                <div id="right">
                <button onclick="window.location.href = 'login.php';">Login/Register</button>
                <button onclick="window.location.href = 'account.php';">Account</button>
            </div>
            <div id="mid">
                <button onclick="window.location.href = 'https://yakweide.de/mail';">Mail</button>
                <button onclick="window.location.href = 'https://discord.yakweide.de/';">Discord Server</button>
                <button onclick="window.location.href = 'https://steam.yakweide.de/';">Steam Gruppe</button>
                <button onclick="window.location.href = 'https://watch2gether.yakweide.de/';">Watch2Gether</button>
                <button onclick="window.location.href = 'https://Thomas.yakweide.de/';">Thomas</button>
                <button onclick="window.location.href = 'https://Tonk.yakweide.de/';">Tonk</button>
                <button onclick="window.location.href = 'https://github.yakweide.de/';">Github</button>
            </div>
            </nav>
            <div id="page">  
        EOT;
    }

    

    public function printFooter() {
        echo <<<EOT
                    </div>
                </body>
            </html>	
        EOT;
    }

}

?>