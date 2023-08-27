<?php
// URL do vídeo do YouTube
$youtubeUrl = "https://www.youtube.com/watch?v=ORS5KJxkFPM&ab_channel=R%C3%A1dioCBN";

// Padrão de expressão regular para encontrar o ID do vídeo na URL
$pattern = '/(?:v=|\/)([0-9A-Za-z_-]{11})(?:\?|&|$)/';

// Encontra o ID do vídeo usando a expressão regular
if (preg_match($pattern, $youtubeUrl, $matches)) {
    $videoId = $matches[1]; // Captura o ID do vídeo
    echo "ID do vídeo: " . $videoId;
} else {
    echo "URL do YouTube inválida.";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./live-video.css" />
    <meta property="og:title" content="Título da Sua Notícia">
    <meta property="og:description" content="Descrição da Sua Notícia">
    <meta property="og:image" content="URL_da_sua_imagem">
    <meta property="og:url" content="URL_da_sua_página">
   
</head>
<body>
<main>
    <div class="content-video">
    <div class="video-stream">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $videoId; ?>?si=QhYUo50XsayrXM6m?&autoplay=1&mute=1&enablejsapi=1" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=18996640661" target="_blank">Link to whatsapp</a>
    <script>
        (function(d, s, id) {
            if (d.getElementById(id)) {
                if (window.__TOMORROW__) {
                    window.__TOMORROW__.renderWidget();
                }
                return;
            }
            const fjs = d.getElementsByTagName(s)[0];
            const js = d.createElement(s);
            js.id = id;
            js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";

            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'tomorrow-sdk');
        </script>

        <div class="tomorrow"
           data-location-id=""
           data-language="PT"
           data-unit-system="METRIC"
           data-skin="light"
           data-widget-type="upcoming"
           style="padding-bottom:22px;position:relative;"
        >
          <a
            href="https://www.tomorrow.io/weather-api/"
            rel="nofollow noopener noreferrer"
            target="_blank"
            style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
          >
            <img
              alt="Powered by the Tomorrow.io Weather API"
              src="https://weather-website-client.tomorrow.io/img/powered-by.svg"
              width="250"
              height="18"
            />
          </a>
        </div>
</main>
<a href="http://twitter.com/intent/tweet?text=Confira no site CBN Prudente&url=https://g1.globo.com/to/tocantins/noticia/2023/08/26/rato-escala-carro-em-movimento-e-assusta-ocupantes-de-carro-ele-que-se-segure-video.ghtml" target="_blank">Twitter</a>
<a href="https://wa.me?text=Confira no site CBN Prudente https://g1.globo.com/to/tocantins/noticia/2023/08/26/rato-escala-carro-em-movimento-e-assusta-ocupantes-de-carro-ele-que-se-segure-video.ghtml"  target="_blank">whatsapp!</a>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://portalcbncampinas.com.br/2023/08/policia-prende-homem-que-transportava-20-kg-de-pasta-base-de-cocaina/" target="_blank">Linkedin</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=https://portalcbncampinas.com.br/2023/08/policia-prende-homem-que-transportava-20-kg-de-pasta-base-de-cocaina/" target="_blank">Facebook</a>
</body>
</html>