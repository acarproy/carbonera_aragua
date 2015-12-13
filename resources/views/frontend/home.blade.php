@extends('frontend.layouts.masterhome')


@section('content')

        <a name="top"></a>
        <div class="frontend-be-together-section mdl-typography--text-center">
          <div class="frontend-font frontend-slogan">Carbonera Aragua</div>
          <div class="frontend-font frontend-sub-slogan">Carbón 100% argueño</div>
          <div class="frontend-screens">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto1.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto2.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto3.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto4.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto5.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto6.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto7.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto8.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto9.jpg") }}">
            <img class="frontend-screen-image" data-src="{{ asset("public/assets/frontend/template/img/galeria/foto10.jpg") }}">
          </div>
        </div>

        <div class="frontend-more-section">
        <a name="nosotros"></a>
          <div class="frontend-section-title mdl-typography--display-1-color-contrast">Nosotros</div>
          <div class="frontend-card-container mdl-grid">

            <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="{{ asset("public/assets/frontend/template/img/front/mision.jpg") }}">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Misión</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <p class="mdl-typography--font-light mdl-typography--subhead">
                  Ofrecer productos y soluciones para el desarrollo de alimentos que garantice la satisfacción de nuestros clientes, siendo líderes en nuestro ramo, poniendo la disposición del cliente la más alta cálida, tecnología y métodos de trabajo, con la colaboración de gente capacitada para obtener los mejores resultados siempre en armonía con la naturaleza.
                </p>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="{{ asset("public/assets/frontend/template/img/front/vision.png") }}">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Visión</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <p class="mdl-typography--font-light mdl-typography--subhead">
                  Llega a ser la empresa venezolana de mayor tradición, líder en fabricación de productos de carbón para el asado de alimentos con personal altamente capacitado, que mantenga la excelencia de nuestros productos en los más altos estándares de calidad y productividad para a satisfacción de nuestros clientes más exigentes, atreves del esfuerzo, dedicación y trabajo en equipo de todos y cada uno de los que ahora formamos parte de la organización.
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="frontend-wear-section">
        <a name="producto"></a>
          <div class="frontend-wear-band">
            <div class="frontend-wear-band-text">
              <div class="mdl-typography--display-1 mdl-typography--font-thin">EL MEJOR CARBÓN DE ARAGUA</div>
              <p class="mdl-typography--headline mdl-typography--font-thin" style="text-align:justify;">
                Un carbón vegetal de larga duración para un proceso de cocción efectivo. 100% argueño elaborado con nuestra máxima dedicación y la mas fina leña lista para preparar alimentos, asados y parrillas.
              </p>
            </div>
          </div>
        </div>

        <div class="frontend-customized-section">
        <a name="contacto"></a>
          <div class="frontend-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Contáctenos</div>
            <form action="#" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="field1" pattern="[A-Z,a-z, ]*" />
                <label class="mdl-textfield__label" for="field1">Nombre</label>
                <span class="mdl-textfield__error">Ingrese su nombre. (Solo letras)</span>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="email" id="field2" />
                <label class="mdl-textfield__label" for="field2">Correo electrónico</label>
                <span class="mdl-textfield__error">Ingrese su correo</span>
              </div>
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea class="mdl-textfield__input" id="field3" cols="30" rows="5" pattern=".{20,}"></textarea>
                <label class="mdl-textfield__label" for="field3">Mensaje</label>
                <span class="mdl-textfield__error">Ingrese su Mensaje</span>
              </div><br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="margin-top:10px;" onclick="return false">
                Enviar
              </button>
            </form>
          </div>
          <div class="frontend-customized-section-image">
            <img src="{{ asset("public/assets/frontend/template/img/front/ubicacion.png") }}">
          </div>
        </div>

@endsection      