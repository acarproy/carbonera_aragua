	<script src="{{ asset("public/assets/frontend/template/js/material.min.js") }}"></script>
    <script src="{{ asset("public/assets/frontend/template/js/jquery.min.js") }}"></script>
    <script src="{{ asset("public/assets/frontend/template/js/portfolio.pack.min.js") }}"></script>
    <script>
      $(document).ready(function(){
        var port = $(".frontend-screens").portfolio({
            loop: false,
            height: '400px',
            width: '95%',
            lightbox: false,
            logger: false
        }); 
        port.init();
      });
    </script>