<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="css.css" />
    <title>Mon profil entreprise</title>
  </head>
  <body style="background-color: #203454">
    <form action="traitement.php" method="post" enctype="multipart/form-data">
      <!-- HEADER-->
      <nav
        class="navbar navbar-expand-sm"
        style="
          background-color: #a5abbd;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;
          box-shadow: 5px 3px 10px black;
          margin-bottom: 20px;
        "
      >
        <a href="#"
          ><img
            id="logo"
            src="logo.jpg"
            alt="logo"
            width="50px"
            height="50px"
            class="d-inline-block align-top"
        /></a>
        <a
          href="#"
          class="navbar-brand mb-0 h1"
          style="
            font-size: 30px;
            font-weight: 900;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #516286;
            margin-left: 20px;
            margin-right: 20px;
          "
        >
          Find a Work
        </a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="#" class="nav-link navOptions">Home</a>
            </li>
            <li class="nav-item active navOptions">
              <a href="#" class="nav-link navOptions">Contact</a>
            </li>
            <li class="nav-item active navOptions">
              <a href="#" class="nav-link navOptions">Profil</a>
            </li>
          </ul>
        </div>
      </nav>
      <div style="background-color: #f5f9ff" class="centrer">
        <h1 style="color: black"><strong>Mon espace recruteur</strong></h1>
      </div>
      <br />
      <div style="margin-left: 180px; margin-right: 180px" class="sizepage">
        <h2 align="center"><strong>Mes coordonnées de contact</strong></h2>
        <hr />
        <br />
        <table width="100%">
          <tr>
            <td colspan="2">
              <select
                class="case1"
                style="width: 20%"
                name="Civilité"
                id="Civilité"
              >
                <option value="">Civilité</option>
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
              </select>
              <input
                class="case"
                style="width: 39%"
                type="text"
                name="Prenom"
                id="Prenom"
                placeholder="Prenom"
              />
              <input
                class="case"
                style="width: 40%"
                type="text"
                name="Nom"
                id="Nom"
                placeholder="Nom"
              />
            </td>
          </tr>
          <tr>
            <td width="50%">
              <select
                name="fonction"
                style="width: 100%"
                id="fonction"
                class="case"
              >
                <option value="">Quelle est votre fonction ?</option>
                <option value="Directeur_Général_/_CEO">
                  Directeur Général / CEO
                </option>
                <option value="Directeur_des_Ressources_Humaines">
                  Directeur des Ressources Humaines
                </option>
                <option value="Responsable_des_Ressources_Humaines">
                  Responsable des Ressources Humaines
                </option>
                <option value="Chargé_de_Recrutement">
                  Chargé(e) de Recrutement
                </option>
                <option value="Responsable_des_Achats">
                  Responsable des Achats
                </option>
                <option value="Responsable_des_Opérations">
                  Responsable des Opérations
                </option>
                <option value="Chargé_des_Achats">Chargé(e) des Achats</option>
                <option value="Chef_de_Projet">Chef de Projet</option>
                <option value="Assistant">Assistant(e)</option>
                <option value="Autre">Autre</option>
              </select>
            </td>
            <td>
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="linkedin"
                id="linkedin"
                placeholder="LinkedIn"
              />
            </td>
          </tr>
          <tr>
            <td>
              <input
                class="case"
                type="number"
                style="width: 100%"
                name="Téléphone1"
                id="Téléphone1"
                placeholder="Téléphone 1"
              />
            </td>
            <td>
              <input
                class="case"
                type="number"
                style="width: 100%"
                name="Téléphone2"
                id="Téléphone2"
                placeholder="Téléphone 2"
              />
            </td>
          </tr>
        </table>
      </div>
      <br />
      <div style="margin-left: 180px; margin-right: 180px" class="sizepage">
        <h2 align="center"><strong>Mon entreprise</strong></h2>
        <hr />
        <br />
        <table width="100%">
          <tr>
            <td width="50%">
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="nom_entrprise"
                id="nom_entrprise"
                placeholder="Nom de l'entreprise"
              />
            </td>
            <td>
              <input
                class="case"
                type="text"
                style="width: 100%"
                name="Site_Internet"
                id="Site_Internet"
                placeholder="Site Internet de l'entreprise"
              />
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input
                class="case"
                type="text"
                style="width: 50%"
                name="Adresse"
                id="Adresse"
                placeholder="Adresse"
              />
              <select class="case1" style="width: 24%" name="Ville" id="Ville">
                <option value="">Ville</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Salé">Salé</option>
                <option value="Tanger">Tanger</option>
                <option value="Fès">Fès</option>
                <option value="Marrakech">Marrakech</option>
                <option value="Safi">Safi</option>
                <option value="Meknès">Meknès</option>
                <option value="Oujda">Oujda</option>
                <option value="Rabat">Rabat</option>
                <option value="Témara">Témara</option>
                <option value="Agadir">Agadir</option>
                <option value="Kénitra">Kénitra</option>
                <option value="Tétouan">Tétouan</option>
                <option value="Laayoune">Laayoune</option>
                <option value="Mohammédia">Mohammédia</option>
                <option value="El Jadida">El Jadida</option>
                <option value="Khouribga">Khouribga</option>
                <option value="Béni Mellal">Béni Mellal</option>
                <option value="Khémisset">Khémisset</option>
                <option value="Nador">Nador</option>
                <option value="Taza">Taza</option>
                <option value="Berkane">Berkane</option>
                <option value="Settat">Settat</option>
              </select>
              <select class="case" style="width: 25%" name="pays" id="pays">
                <option value="">Pays</option>
                <option value="Maroc">Maroc</option>
                <option value="France">France</option>
                <option value="Belgique">Belgique</option>
                <option value="États_Unis">États-Unis</option>
                <option value="Canada">Canada</option>
              </select>
            </td>
          </tr>
        </table>
      </div>
      <br />
      <div>
        <table class="marge" cellspacing="50">
          <tr>
            <td>
              <input
                type="submit"
                value="Enregistrer et continuer"
                name="soumission"
                class="submitbutton"
              />
            </td>
            <td>
              <input type="reset" value="Effacer tout" class="resetbutton" />
            </td>
          </tr>
        </table>
      </div>
    </form>
  </body>
</html>
