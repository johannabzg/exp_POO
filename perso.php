
      <?php
        // creation d'une coquille vide (personnage)
        class Perso
        {
          private $_pv;
          private $_exp;
          private $_deg;
          private $_force;


          // // un constructeur permet d'initialiser les attribue de l'objet dès sa création.
          // public function __construct($force, $deg) // constructeur demandant 3 paramètres(ou plus)
          // {
          //     echo 'voici le constructeur'; // le message s'affiche une foi que tout objet et crée:
          //     $this->setForce($force); // initialisation de la force
          //     $this->setDegats($deg); // initialisation des degats
          //     $this->_exp = 5; // initialisation de l'experiance
          // }

          // mutateur qui modifie l'attribue $_force
          public function setForce($force)
          {
              if (!is_int($force)) // verifir que ce n'est pas un nombre entier;
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
          }

          // niveau de pv du perso
          public function pointVie()
          {
            $this->_pv = 200;
          }

          // action de frappe
          public function frap($persoAFrapper)
          {
            $persoAFrapper->_deg += $this->_force;
          }

          // renvoie le contenu de l'attribut $_deg.
          public function degats()
          {
            return $this->_deg;
          }

          // renvoie le contenu de l'attribut $_force.
          public function force()
          {
            return $this->_force;
          }

          //  renvoie le contenu de l'attribut $_experience.
          public function experience()
          {
            return $this->_exp;
          }

          // pareil pour les pv
          public function pv()
          {
            return $this->_pv;
          }
        }
        $Mario = new Perso;  // premier personnage crée
        $Luigi = new Perso;  // deuxieme

        // proprieté perso
        $Mario->setForce(25);
        $Mario->setPv(100);
        $Mario->setExp(5);

        $Luigi->setForce(17);
        $Luigi->setPv(100);
        $Luigi->setExp(5);

        // action perso
        $Mario->frap($Luigi);
        $Mario->setExp();

        $Luigi->frap($Mario);
        $Luigi->setExp();

        echo 'mario a ' , $Mario->force(), ' de force, contrairement a luigi qui a ' ,$Luigi->force(), ' de force. <br />';
      ?>
