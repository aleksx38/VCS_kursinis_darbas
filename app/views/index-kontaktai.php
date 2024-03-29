<div class="main">
    <div class="container">
        <div class="intro">
            <div class="naming">
                <h1>UAB Žolės tvarkymas</h1>
                <h2>Kontaktai</h2>
            </div>
        </div>

        <!-- Informacijos panele, kuri rodo darbo laika, el. pasta, adresa bei tel numrei kreipimuisi -->
        <div class="information">
            <div class="laikas">
                <i class="fa-solid fa-clock"></i>
                <h4>Darbo laikas</h4>
                <p>Darbo dienomis</p>
                <p>09:00 - 18:00</p>
            </div>
            <div class="pastas">
                <i class="fa-solid fa-envelope"></i>
                <h4>El. paštas</h4>
                <p><a href="mailto: email@email.com">email@email.com</a></p>
                <p><a href="mailto: info@email.com">info@email.com</a></p>
            </div>
            <div class="numeris">
                <i class="fa-solid fa-phone"></i>
                <h4>Tel. numeris</h4>
                <p><a href="tel: +370000">+370000</a></p>
                <p><a href="tel: +370001">+370001</a></p>
            </div>
            <div class="adresas">
                <i class="fa-solid fa-location-dot"></i>
                <h4>Adresas</h4>
                <p>Adreso g. 0</p>
                <p>Vilnius, LT-00000</p>
            </div>

            <!-- kontaktine forma kreipimuisi -->
            <div class="contact-form">
                <form action="kontaktai.php" method="post">
                    <input type="text" name="fname" placeholder="Vardas" required autofocus><br>
                    <input type="text" name="lname" placeholder="Pavarde" required><br>
                    <input type="email" name="email" placeholder="Jusu el. pastas" required><br>
                    <input type="checkbox" name="paslauga1" value = 1>
                    <label for="paslauga1"> Bobcat paslauga</label><br>
                    <input type="checkbox" name="paslauga2" value = 1>
                    <label for="paslauga2"> Vejos paslauga</label><br>
                    <input type="checkbox" name="paslauga3" value = 1>
                    <label for="paslauga3"> Trinkeliu klojimo paslauga</label><br>
                    <textarea name="message" placeholder="Jūsų žinutė..." required></textarea><br>
                    <input type="submit" name="submit" id="contact-submit" value="pateikti">
                </form>
            </div>
        </div>

        <br>
        
        <!-- google maps integracija -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16439.999497571127!2d25.278716752365774!3d54.68042350875716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd944063dd09b7%3A0x6c230215080211a!2sGates%20of%20Dawn!5e0!3m2!1sen!2slt!4v1674983938295!5m2!1sen!2slt"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>