            </article>

            <!-- Panier (présente sur tout le site) -->
            <div class="cart">
                <div class="titre_card">
                    <img src="<?php echo($chemin);?>/img/site/caddie.gif"/>
                    <h2>Votre panier</h2>
                </div>
                <hr>
                <div class="panier">
                    <ul>
                        <?php afficher_panier();?>
                    </ul>
                </div>
                <hr>
                <form method="post" action="<?php /*flush_panier();*/ ?>">
                    <button class="bouton" type="submit">Vider le panier</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>