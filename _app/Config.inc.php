<?php

define('HOME', 'http://localhost/projeto_reppyday');
define('THEME', 'padrao');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

define('EMAIL', 'admin@fokusf5.com.br');
define('FONE', '(81) 9988.0118');
define('HORARIO', 'De Segunda à Sexta, das 9:00h às 21:00h');


$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'REPPY DAY  JEANS WEAR';
$pg_site = 'A REPPY DAY JEANS WEAR é uma realização ousada e com a proposta incrível: acreditar é mais do que desejar, é realizar!';
$pg_google_author = '103958419096641225872';
$pg_google_publisher = '107305124528362639842';
$pg_fb_app = '651784344936382';
$pg_fb_author = 'Marcos Aurélio';
$pg_fb_page = 'fokusf5';
$pg_twitter = '@FokusF5';
$pg_domain = 'www.fokusf5.com.br';
$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'E é com desejo e o anseio de toda uma geração e conquista para pouca marcas. E a REPPY DAY está entre elas para sua trajetória e evidência com sucesso.';
        $pg_image = $pg_sitekit . 'index.jpg';
        $pg_url = HOME;
        break;

    case 'sobre':
        $pg_title = 'Mais Sobre a Reppy Day';
        $pg_desc = 'Conheça um pouco sobre nossa empresa, quem está por trás e a capacitação profissional da equipe.';
        $pg_image = $pg_sitekit . 'sobre.jpg';
        $pg_url = HOME . '/sobre';
        break;
    case 'colecao':
        $pg_title = 'Conheça as nossas principais coleções, as todo genêro feminino.';
        $pg_desc = 'Aqui você irá conhecer as nossas principais coleções, moda infantil e casual.';
        $pg_image = $pg_sitekit . 'contato.jpg';
        $pg_url = HOME . '/colecao';
        break;

    case 'contato':
        $pg_title = 'Fale com a Reppy Day';
        $pg_desc = 'Fique a vontade para enviar um contato por um de nossos canais de atendimento.';
        $pg_image = $pg_sitekit . 'contato.jpg';
        $pg_url = HOME . '/contato';
        break;
    
     case 'midias':
        $pg_title = 'Reppy Day na Mídia.';
        $pg_desc = 'Reppy Day na mídia, principais noticias da empresa.';
        $pg_image = $pg_sitekit . 'midias.jpg';
        $pg_url = HOME . '/midias';
        break;

    default :
        $pg_title = 'Opss, desculpe não encontrado o conteúdo relacionado.';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b >' . $setUrl . '</b>, mas não saia ainda. Desfrute de algumas de nossas coleções!';
        $pg_image = $pg_sitekit . '404.jpg';
        $pg_url = HOME . '/404';
        break;
endswitch;





