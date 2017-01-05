
      <?php
        // creation d'une coquille vide (personnage)
        class Perso
        {
          private $_pv;
          private $_exp;
          private $_deg;
          private $_force;
          private $_esquiv;


          // // un constructeur permet d'initialiser les attribue de l'objet dès sa création.
          // public function __construct($force, $deg) // constructeur demandant 3 paramètres(ou plus)
          // {
          //     echo 'voici le constructeur'; // le message s'affiche une foi que tout objet et crée:
          //     $this->setForce($force); // initialisation de la force
          //     $this->setDegats($deg); // initialisation des degats
          //     $this->_exp = 5; // initialisation de l'experiance
          // }

          // mutateur qui modifie l'attribue ($_force)
          public function setForce($force)
          {
              if (!is_int($force)) // verifie que ce n'est pas un nombre entier;
              {
                trigger_error('la force doit être un nombre entier !', E_USER_WARNING);
                return;
              }
              if ($force > 100)
              {
                trigger_error('la force ne doit pas depasser 100 points', E_USER_WARNING);
                return;
            }
              $this->_force = $force;
          }


          // mutateur charger de modifier l'attribue des degats ($deg);
          public function setDegats($deg)
          {
              if (!is_int($deg))
              {
                trigger_error(' le niveau de degat du joueur doit etre un nombre entier !', E_USER_WARNING);
                return;
              }
                $this->_deg = $deg;
          }

          // mutateur pour l'exp
          public function setPv($pv)
          {
              if (!is_int($pv))
              {
                trigger_error(' le niveau de point de vie doit seulement contenir un nombre entier !', E_USER_WARNING);
                return;
              }
              if ($pv > 100)
              {
                trigger_error('les PV ne peuvent pas depasser 100 points', E_USER_WARNING);
                return;
              }
              $this->_pv = $pv;
          }

          // augmentation de l'exp
          public function setExp()
          {
             $this->_exp = $this->_exp + 5;
             return $this->_exp;
          }

          // faire en sorte que quand lesquive et false alors les degat influ sur les pv de l'adversaire
          // action de frappe
          public function frap($persoAFrapper)
          {
            $persoAFrapper->_deg += $this->_force;
            return $this->_deg;
          }

          // propriete de l'esquive
          public function esquiv()
          {
            $nm = $this->_esquiv = rand(0, 100);

              if ( $nm > 50 ) {
                echo " esquive l'attaque ";

              }
              else {
                echo " prend des dégats ";
                // echo (Perso pv()) == $pv-$deg;
              }
           }


          // Methode degats() elle renvoie le contenu de l'attribut $_deg.
          public function degats()
          {
            return $this->_deg;
          }

          // renvoie le contenu de l'attribut $_force.
          public function force()
          {
            return $this->_force;
          }


          // pareil pour les pv
          public function pv()
          {
            return $this->_pv;
          }


              // -------- fonction pour la page test-jeux (bouton)------ //
          public function pvMario()
           {
             echo 'ok' ,$Mario->pv(), 'ok';
           }

        }
        $Mario = new Perso;  // premier personnage crée
        $Luigi = new Perso;  // deuxieme

        // creation proprieté perso
        $Mario->setForce(25);
        $Mario->setPv(100);
        $Mario->setExp();

        $Luigi->setForce(17);
        $Luigi->setPv(100);
        $Luigi->setExp();

        // champ d'action
        echo 'mario a ' , $Mario->force(), ' de force, contrairement à luigi qui a ' ,$Luigi->force(), ' de force. <br />';
        echo 'mario attaque luigi, ' ,$Mario->frap($Luigi), "<br />";
        echo 'luigi lance esquive ! ' ,$Luigi->esquiv(), '<br />';
        echo 'luigi à mal, il prend ' ,$Luigi->degats(),' de degats. <br />';
        echo 'luigi à ' ,$Luigi->pv(), ' points de vie.<br />';
        echo 'mario lance esquive ! mario ',$Mario->esquiv(), '<br />';
        echo 'luigi fait ' ,$Luigi->degats()," de degats.<br />";
        echo "luigi a ",$Luigi->setExp()," point d'exp <br />";
        echo "luigi a ",$Luigi->setExp()," point d'exp <br />";





      ?>
