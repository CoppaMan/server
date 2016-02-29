<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="wrapper">
            <p>
                Hier sind alle notwendigen Datein für eine Verbindung über VPN auf Tritium.
                Dazu benötigt die OpenVPN-Installation das CA Zertifikat von Tritium,
                die Konfigurationsdatei (entsprechend des OS), Zertifikat und Key
                des Clients. Diese müssen bei Linux nach /etc/OpenVPN/ und bei Windows
                nach /Programme/OpenVPN/config/ kopiert werden.
            </p>
            <p>CA Zertifikat von Tritium: <a class="box" href="url">ca.crt</a></p>
            <p>OpenVPN Konfigurationsdateien:
            <a class="box" href="url">Linux</a>, 
            <a class="box" href="url">Windows/Android</a></p>
            <div class="clients">
                <a href="url">
                    <div class="key">
                        Client.key
                    </div></a>
                <a href="url">
                    <div class="crt">
                        Client.crt
                    </div></a>
                <a href="invalidateClient.html">
                    <div class="invalidate">
                        Client Invalidieren
                    </div></a>
            </div>
            <p><a href="createClient.html">Neuen Client anfordern</a></p>
        </div>
    </body>
</html>
