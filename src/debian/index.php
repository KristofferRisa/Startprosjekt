<!doctype html>
<html lang="no">
<head>
    
    <?php
        include("../header-partial.html");
    ?>
    
    <title>Linux Debian</title>
    <meta name="description" content="Distro site for Linux Debian">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/debian.css">    
</head>
    <body>

    <?php
        /* Laster inn navgiasjons html kode  */
        include("../nav.html");
    ?>

    <main class="container">
        <head>
            <figure>
              <img src="../img/logo_debian.png" alt="Debian logo">
              <figcaption>Fig1. - The Lnux debian logo.</figcaption>
          </figure>
        </head>
        <!-- Wiki seksjon -->
        <aside id="wiki" class="wiki">
            <dl>
                <h3 class="wiki-header">Wiki</h3>
                <dt>Skaper</dt>
                <dd>Ian Murdock</dd>
                <dt>Utvikler</dt>
                <dd>Brukernettverk</dd>
                <dt>Utgitt</dt>
                <dd>16. august 1993</dd>
                <dt>Plattform</dt>
                <dd>i386, AMD64, PowerPC, UltraSPARC</dd>
                <dt>Skrivebordsmiljø</dt>
                <dd>GNOME, GNU Hurd, kFreeBSD[2], NetBSD[3]</dd>
                <dt>Lisens</dt>
                <dd>Fri programvare Nettside www.debian.org</dd>
            </dl>
        </aside>

        <!-- Om  -->
        <article id="om">
            <h2>Historien om Linux Debian</h2>
            <p>Debian GNU/Linux er basert på Linux-kjernen og bruker mange av programmene og verktøyene fra GNU-prosjektet. Debian ble grunnlagt i 1993 av Ian Murdock og er en av de eldre Linuxdistribusjonene. Den første stabile versjonen av Debian GNU/Linux, 1.1 kom i 1996.</p>
            <p>Den stabile distribusjonen er veldig ofte brukte på PC og nettverksservere, samt at den også er blitt brukt som base for flere andre Linux-distribusjoner.</p>
            <p></p>

            <p>Debian har mer enn 43000 pakker tilgjengelig, dette er ferdigbygde programmer pakket inn i et egnet format slik at man lettvint kan installere og oppgradere disse. Pakkebehandler for Debian heter <a href="https://en.wikipedia.org/wiki/Dpkg" target="_blank">dpgk</a>.</p>
            <p>For komplett prosjekt historikk, se <a href="https://www.debian.org/doc/manuals/project-history/" target="_blank">www.debian.org/doc/manuals/project-history/</a></p>
            <br/>

            <figure>
                <img src="http://www.linuxscreenshots.org/screenshots/960600/Debian%208.0.0%20GNOME/39.jpg" alt="Debian desktop environment">
                <figcaption>Fig2. Debian GNOME desktop skjermbilde hentet fra <a href="http://www.linuxscreenshots.org/?release=Debian%208.0.0%20GNOME" target="_blank">linuxscreenshots.org</a></figcaption>
                <p>Følg denne <a href="http://www.linuxscreenshots.org/?release=Debian%208.0.0%20GNOME" target="_blank" >linken</a> for flere skjermbilder.</p>
            </figure>
        </article>

        <!-- Liste over de forskjellige Debian utgavene -->
        <section id="Releaser">
            <h2>Releaser</h2>
            <ul>
                <li><strong>Debian 8 (jessie)</strong> — current stable release</li>
                <li><strong>Debian 7 (wheezy)</strong> — obsolete stable release</li>
                <li><strong>Debian 6.0 (squeeze)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 5.0 (lenny)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 4.0 (etch)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 3.1 (sarge)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 3.0 (woody)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 2.2 (potato)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 2.1 (slink)</strong> — obsolete stable release</li>
                <li><strong>Debian GNU/Linux 2.0 (hamm)</strong> — obsolete stable release</li>
            </ul>
        </section>
        <figure>
            <img src="https://upload.wikimedia.org/wikipedia/en/timeline/ce89cc1c1c85b0ea85fc1f29c14b563c.png" alt="Debian release timeline">
            <figcaption>Fig3. Debian release timeline hentet fra <a href="https://en.wikipedia.org/wiki/Debian#Release_timeline" target="_blank">wikipedia</a>.</figcaption>
        </figure>

        <section id="download">
            <p>
                Du kan laste ned en gratis versjon av Linux Debian <a href="http://cdimage.debian.org/debian-cd/8.1.0/multi-arch/iso-cd/debian-8.1.0-amd64-i386-netinst.iso">her</a>.
            </p>
        </section>

        <section id="kilder" class="kilder">
            <h2>Kilder:</h2>
            <ul>
                <li><a href="https://no.wikipedia.org/wiki/Debian" target="_blank">no.wikipedia.org</a>
                </li>
                <li><a href="https://en.wikipedia.org">en.wikipedia.org</a></li>
                <li><a href="https://wiki.debian.org/tasksel" target="_blank">wiki.debian.org</a>
                </li>
                <li><a href="https://www.debian.org/" target="_blank">debian.org</a>
                </li>
                <li><a href="http://www.linuxscreenshots.org/?release=Debian%208.0.0%20GNOME" target="_blank" >linuxscreenshots.org</a></li>
            </ul>
        </section>

    </main>

    <?php
        /* Laster inn fotter html kode  */
        include("../footer.html");
        /* Laster inn scripts */
        include("../scripts.html");
    ?>    
    </body>
</html>
