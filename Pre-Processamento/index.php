<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="cache-control" content="public" />
<meta http-equiv="content-language" content="pt-br" />
<meta http-equiv="expires" content = "0" />
<meta name="viewport" content="width=device-width">
<title>OUTPROMO - Agencia</title>
<link rel="shortcut icon" type="image/x-icon" href="../../images/favicon.ico">
<meta name="description" content="OUTPROMO">

<link rel="stylesheet" type="text/css" href="../css/default.css">
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/default_mobile.js"></script>
<script type="text/javascript" src="../../js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(window).scroll(function(){
	if ($(window).scrollTop() > 270){
		$('#navegacao').css({'top': 951, 'position' : 'absolute'});
	}
	else if ($(window).scrollTop() < 270){
		$('#navegacao').css({'top': 'auto', 'position' : 'fixed' });
	}
});
</script>
</head>

<body>
<div class="corpo_agencia_quemfaz">
<div class="facebook"> <span class="curta">CURTA A GENTE !</span>
  <div class="like">
    <iframe src="//www.facebook.com/plugins/like.php?href=https://www.facebook.com/outpromo&amp;send=false&amp;layout=button_count&amp;width=97&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:97px; height:21px;" allowTransparency="true"></iframe>
  </div>
</div>
<div class="cont">
<div class="titulo"> <a href="../inside" id="gotoInside"></a>
  <h3>QUEM<br>
    SOMOS</h3>
</div>
<div id="slider">
<div class="item">
  <div class="foto"> <img class="qfmais2" src="../../images/quem-faz/mau.png" alt=""/> </div>
  <div id="SM3" class="sobre bgqf_azul_escuro">
    <div id="S3" class="slides">
      <h4 class="tit_trabalho">SOBRE</h4>
      <ul>
        <li id="SS3">
          <h3 class="nome">MAUR&Iacute;CIO</br>
            GALLIAN</h3>
          <h4 class="cargo">CEO</h4>
        </li>
        <li><span class="txt_trabalho"> A vontade de trabalhar com eventos acompanha Maurício desde a adolescência, quando sonhava em ser músico. Tornou-se publicitário e um dos responsáveis pela fundação da OutPromo </span></li>
        <li><span class="txt_trabalho">e da holding Let’s Rock. É dele a responsabilidade de coordenar as áreas administrativa e de atendimento da empresa.               “Tenho o prazer de oferecer aos nossos colaboradores uma </span></li>
        <li><span class="txt_trabalho"> empresa na qual, sinceramente, eu gostaria de trabalhar, se não fosse um dos sócios.”
          Nas horas vagas é piloto de carro de corrida. A adrenalina é sua companheira diária, seja</span></li>
        <li><span class="txt_trabalho"> na agência ou no lazer.
          O maior objetivo de Maurício é fazer da OutPromo e do grupo Let’s Rock as maiores referências do marketing promocional no Brasil.</span></li>
      </ul>
    </div>
    <a id="sprev3" class="prev" href="javascript:void(0);"></a> <a id="snext3" class="next" href="javascript:void(0);"></a> 
    <script type="text/javascript">
			$(function() {
				$("#S3 ul").cycle({
					fx: 'scrollHorz',
					speed: 1000,
					prev: '#sprev3',
					next: '#snext3'
				}).cycle('pause');
				
				$("#sprev3, #snext3").click(function() {
					setTimeout(function(){
					liv = $("#S3 ul li:visible").attr("id");
					if(liv == "SS3"){
						$("#S3 .tit_trabalho").hide();
					} else {
						$("#S3 .tit_trabalho").show();
					}
					},1010);
				});
			})
        </script> 
  </div>
</div>
<!-- 2º -->
<div class="item">
  <div class="foto bgqf_verde_claro"> <img class="qfmais2" src="../../images/quem-faz/ricardo.png" alt=""/> </div>
  <div id="SM1" class="sobre bgqf_verde_escuro">
    <div id="S1" class="slides">
      <h4 class="tit_trabalho">SOBRE</h4>
      <ul>
        <li id="SS1">
          <h3 class="nome">RICARDO</br>
            FERRARI</h3>
          <h4 class="cargo">COO</h4>
        </li>
        <li><span class="txt_trabalho"> Ricardo sempre sonhou criar comerciais para TV. Na faculdade, pensava em ser redator, e adorava fazer os trabalhos em que tinha que exercitar a criatividade.
          Mas seu primeiro estágio foi como </span></li>
        <li><span class="txt_trabalho">atendimento em marketing direto em uma grande agência. Nem redator, nem propaganda, como sonhava. Porém, ali encontrou uma nova paixão, que era ser atendimento, e se sentia</span></li>
        <li><span class="txt_trabalho">estimulado ao se relacionar com os clientes e com as áreas internas da agência.  
          E foi assim que, junto com colegas da faculdade, resolveu montar sua primeira agência de </span></li>
        <li><span class="txt_trabalho">comunicação. Acabou seguindo os caminhos do Live Marketing, e hoje como COO, é responsável pelas operações da OutPromo.</span></li>
      </ul>
    </div>
    <a id="sprev1" class="prev" href="javascript:void(0);"></a> <a id="snext1" class="next" href="javascript:void(0);"></a> 
    <script type="text/javascript">
        $(function() {
            $("#S1 ul").cycle({
                fx: 'scrollHorz',
                speed: 1000,
                prev: '#sprev1',
                next: '#snext1'
            }).cycle('pause');
    
            $("#sprev1, #snext1").click(function() {
                setTimeout(function(){
                    liv = $("#S1 ul li:visible").attr("id");
                    if(liv == "SS1"){
                        $("#S1 .tit_trabalho").hide();
                    } else {
                        $("#S1 .tit_trabalho").show();
                    }
                },1010);
            });
    
        })
        </script> 
  </div>
</div>
<!-- 3º -->
<div class="item r2">
<div class="foto"> <img class="qfmais2" src="../../images/quem-faz/z.png" alt=""/> </div>
<div id="SM4" class="sobre bgqf_amarelo_escuro">
<div id="S4" class="slides">
<h4 class="tit_trabalho">SOBRE</h4>
<ul>
<li id="SS4">
  <h3 class="nome">RICARDO</br>
    FRANKEN "Z"</h3>
  <h4 class="cargo">CCO</h4>
</li>
<li><span class="txt_trabalho"> Formado pela ESPM e com MBA também pela ESPM, o foco do Z, como é conhecido por todos, sempre foi o relacionamento pessoal, seja com a equipe, colaboradores</span></li>
<li><span class="txt_trabalho">ou clientes.
  Hoje, na função de Diretor Comercial da agência, busca colocar em prática essa habilidade, com o objetivo de gerar resultados positivos e estabelecer relações de</span></li>
<li><span class="txt_trabalho">longo prazo.
  “ Procuro sempre estar o mais próximo possível de todos os nossos clientes, porque só assim conseguimos ter um verdadeiro entendimento do seu negócio para que </span></li>
<li><span class="txt_trabalho">possamos levar sempre propostas adequadas e relevantes. O segredo para obter bons resultados está em uma relação de confiança multilateral”. Fora da agência, é nos esportes e</span></li>
<li><span class="txt_trabalho">na moto que o Z procura aliviar as tensões do dia a dia nas áreas internas da agência.</span></li>
</div>
<a id="sprev4" class="prev" href="javascript:void(0);"></a> <a id="snext4" class="next" href="javascript:void(0);"></a> 
<script type="text/javascript">
$(function() {
	$("#S4 ul").cycle({
		fx: 'scrollHorz',
		speed: 1000,
		prev: '#sprev4',
		next: '#snext4'
	}).cycle('pause');

	$("#sprev4, #snext4").click(function() {
		setTimeout(function(){
			liv = $("#S4 ul li:visible").attr("id");
			if(liv == "SS4"){
				$("#S4 .tit_trabalho").hide();
			} else {
				$("#S4 .tit_trabalho").show();
			}
		},1010);
	});

})
</script>
</div>
</div>
<!-- 4º -->

<div class="item">
  <div class="foto"> <img class="qfmais2" src="../../images/quem-faz/ro.png" alt=""/> </div>
  <div id="SM2" class="sobre bgqf_lilas_escuro">
    <div id="S2" class="slides">
      <h4 class="tit_trabalho">SOBRE</h4>
      <ul>
        <li id="SS1" class="nome_cargo" valor="1">
          <h3 class="nome">ROSANA</br>
            CARVALHO</h3>
          <h4 class="cargo">DIRETORA ADMINISTRATIVA</h4>
        </li>
        <li><span class="txt_trabalho"> Os desafios de uma pequena empresa com vontade de ser o que é hoje ajudaram Rosana na escolha da própria formação profissional. Quando ela se uniu à equipe, há 13 anos, a</span></li>
        <li><span class="txt_trabalho">empresa ainda era Outlook Promoções.
          “A opção de ser administradora veio justamente do gosto pelos desafios que a gente tinha naquela época. Ver tudo como</span></li>
        <li><span class="txt_trabalho"> está hoje é um sonho realizado.”
          Rosana cresceu junto com o crescimento da agência. Ao longo dos anos dedicados à atual OutPromo, ela graduou-se, casou-se e teve dois</span></li>
        <li><span class="txt_trabalho">filhos. Gosta de andar de bicicleta com os filhos e tenta passar a eles o lema de sua vida: “Gentileza gera gentileza”.</span></li>
      </ul>
    </div>
    <a id="sprev2" class="prev" href="javascript:void(0);"></a> <a id="snext2" class="next" href="javascript:void(0);"></a> 
    <script type="text/javascript">
	$(function() {
		$("#S2 ul").cycle({
			fx: 'scrollHorz',
			speed: 1000,
			prev: '#sprev2',
			next: '#snext2'
		}).cycle('pause');
		
		$("#sprev2, #snext2").click(function() {
			setTimeout(function(){
				liv = $("#S2 ul li:visible").attr("id");
				if(liv == "SS1"){
					$("#S2 .tit_trabalho").hide();
				} else {
					$("#S2 .tit_trabalho").show();
				}
			},1050);
		});
		
	})
	</script> 
  </div>
</div>
<!-- 5º -->
<div class="item r3">
  <div class="foto"> <img class="qfmais2" src="../../images/quem-faz/saleide.png" alt=""/> </div>
  <div id="SM5" class="sobre bgqf_rosa_escuro">
    <div id="S5" class="slides">
      <h4 class="tit_trabalho">SOBRE</h4>
      <ul>
        <li id="SS5">
          <h3 class="nome">SALEIDE</br>
            MENDES</h3>
          <h4 class="cargo">DIRETORA OPERACIONAL</h4>
        </li>
        <li><span class="txt_trabalho"> Saleide tem de experiência em marketing promocional quase metade dos anos que tem de vida. Ela atribui seu maior aprendizado e crescimento profissional à agência, onde viveu grande parte desta</span></li>
        <li><span class="txt_trabalho"> trajetória. “Aqui eu pude aperfeiçoar e colocar em prática tudo que eu havia vivenciado antes. Hoje tenho a oportunidade de usar essa experiência para montar e preparar minha equipe, porque acho</span></li>
        <li><span class="txt_trabalho">difícil indicar uma receita sem conhecer o remédio e os seus efeitos”, resume a diretora. Saleide acredita que, além de muito trabalho, alguns lemas são fundamentais para o êxito profissional.</span></li>
        <li><span class="txt_trabalho">“Cumpra o seu papel, divida suas experiências e saiba aprender dos demais, lidere de perto e deixe que sua equipe brilhe, porque sozinho não se faz coisa alguma”, pontua.</span></li>
      </ul>
    </div>
    <a id="sprev5" class="prev" href="javascript:void(0);"></a> <a id="snext5" class="next" href="javascript:void(0);"></a> 
    <script type="text/javascript">
	$(function() {
		$("#S5 ul").cycle({
			fx: 'scrollHorz',
			speed: 1000,
			prev: '#sprev5',
			next: '#snext5',
			destroy : true								
		}).cycle('pause');

		$("#sprev5, #snext5").click(function() {
			setTimeout(function(){
				liv = $("#S5 ul li:visible").attr("id");
				if(liv == "SS5"){
					$("#S5 .tit_trabalho").hide();
				} else {
					$("#S5 .tit_trabalho").show();
				}
			},1050);
		});

	})
	</script> 
  </div>
</div>
<!-- 6º -->
<div class="item">
  <div class="foto"> <img class="qfmais2" src="../../images/quem-faz/neto.png" alt=""/> </div>
  <div id="SM6" class="sobre bgqf_laranja_escuro">
    <div id="S6" class="slides">
      <h4 class="tit_trabalho">SOBRE</h4>
      <ul>
        <li id="SS6">
          <h3 class="nome">ANT&Ocirc;NIO</br>
            NETO</h3>
          <h4 class="cargo">VP DE CRIA&Ccedil;&Atilde;O</h4>
        </li>
        <li><span class="txt_trabalho">Publicitário por formação Neto já cursou História e Artes Plásticas antes de iniciar sua carreira na Comunicação.
          A arte sempre esteve presente no seu trabalho e na sua vida. 
          “A OutPromo é um</span></li>
        <li><span class="txt_trabalho">lugar onde tive a oportunidade de desenvolver minhas habilidades em diferentes áreas, da gestão de projetos à gestão de pessoas. Estimular meu time a descobrir e</span></li>
        <li><span class="txt_trabalho">potencializar o talento que possuem, em um ambiente saudável e criativo é o meu objetivo.”</span></li>
      </ul>
    </div>
    <a id="sprev6" class="prev" href="javascript:void(0);"></a> <a id="snext6" class="next" href="javascript:void(0);"></a> 
    <script type="text/javascript">
                            $(function() {
                                $("#S6 ul").cycle({
                                    fx: 'scrollHorz',
                                    speed: 1000,
                                    prev: '#sprev6',
                                    next: '#snext6'
                                }).cycle('pause');
								
								$("#sprev6, #snext6").click(function() {
									setTimeout(function(){
										liv = $("#S6 ul li:visible").attr("id");
										if(liv == "SS6"){
											$("#S6 .tit_trabalho").hide();
										} else {
											$("#S6 .tit_trabalho").show();
										}
									},1050);
								});
								
                            })
                            </script> 
  </div>
</div>
</div>
<a id="prevpessoa" class="prev" href="javascript:void(0);"></a> <a id="nextpessoa" class="next" href="javascript:void(0);"></a>
</div>
<script type="text/javascript">
$(function() {
	$("#slider").cycle({
		fx: 'scrollHorz',
		speed: 1000,
		prev: '#prevpessoa',
		next: '#nextpessoa'
	}).cycle('pause');
})
</script>
<div id="rodape">
  <div class="center">
    <div class="boxes">
      <div class="box1">
        <h3>ONDE ESTAMOS</h3>
        <a class="endereco" target="_blank" href="https://maps.google.com/maps?q=R.+BAR%C3%83O+DE+SURU%C3%8D,+143+S%C3%83O+PAULO+-+SP+|+55.11.3305.6252&ie=UTF-8&ei=AOHqUtzYBIbMkAfyj4HYCw&ved=0CAcQ_AUoAQ">RUA BAR&Atilde;O DE SURU&Iacute;, 143 - S&Atilde;O PAULO - SP</a> <a class="endereco icone_map" target="_blank" href="https://maps.google.com/maps?q=R.+BAR%C3%83O+DE+SURU%C3%8D,+143+S%C3%83O+PAULO+-+SP+|+55.11.3305.6252&ie=UTF-8&ei=AOHqUtzYBIbMkAfyj4HYCw&ved=0CAcQ_AUoAQ"><strong>T: 55.11.3305.6252</strong> CEP: 09530-233</a>
        <div class="email"> <span>E-MAIL</span> <a href="mailto:in@outpromo.com.br">in@outpromo.com.br</a> </div>
      </div>
      <div class="box2">
        <h3>SIGA-NOS</h3>
        <div class="sociais"> <a target="_blank" href="https://www.facebook.com/outpromo" class="icon_facebook" title="Facebook"></a> <a target="_blank" href="https://twitter.com/OutPromo/" class="icon_twitter" title="Twitter"></a> <a target="_blank" href="#" class="icon_youtube" title="Youtube"></a> <a target="_blank" href="http://instagram.com/outpromo" class="icon_instagram" title="Instagram"></a> </div>
        <div class="casting"> <span>QUER INFORMA&Ccedil;&Otilde;ES SOBRE NOSSO CASTING?</span> <a href="https://www.facebook.com/castingoutpromo" target="_blank">VISITE A FANPAGE CASTING</a> </div>
      </div>
      <div class="box3">
        <h3>WE ROCK!</h3>
        <img src="../../images/selo_we-rock.png" alt="GREAT PLACE TO WORK 2012" class="selo" /> </div>
      <img class="robo" src="../../images/mobile/robo.png" alt="" /> </div>
  </div>
</div>
<div id="navegacao"> <a id="logo" href="../"></a>
  <ul id="submenu">
    <li><a href="../filosofia" title="Fillosofia">FILOSOFIA</a></li>
    <li><a href="../historia" title="Portfólio">HISTÓRIA</a></li>
    <li><a href="../agencia" itle="Quem Somos">QUEM SOMOS</a></li>
    <li><a href="../inside" title="Inside">INSIDE</a></li>
  </ul>
  <ul id="menu">
    <li><a id="page_agencia" valor="0" title="Agência">AGÊNCIA</a></li>
    <li><a href="../portfolio" id="page_portfolio" title="Portfólio">PORTFÓLIO</a></li>
    <li><a href="../premios" id="page_premios" title="Prêmios">PRÊMIOS</a></li>
    <li><a href="../clientes" id="page_clientes" title="Clientes">CLIENTES</a></li>
    <li><a href="http://www.outpromo.com.br/blog/" target="_blank" title="No OUT | Blog">NO <span class="minilogo"></span> BLOG </a></li>
  </ul>
  <div id="rampa_amarelo_rodape">
    <div class="centralizar"> <a class="fale_com_a" title="Fale com a OUTPROMO" valor="0">FALE COM A</a> </div>
    <div id="fale_conosco" style="display: none;">
      <div class="center">
        <h3>ENVIE SUA MENSAGEM PRA GENTE!</h3>
        <div class="fechar_fale_conosco"></div>
        <form id="form_fale_conosco">
          <input type="text" id="nome" class="nome" onfocus="if(this.value==this.defaultValue)value=''" onblur="if(this.value=='')value=this.defaultValue;" value="NOME">
          <input type="text" id="empresa" class="empresa" onfocus="if(this.value==this.defaultValue)value=''" onblur="if(this.value=='')value=this.defaultValue;" value="EMPRESA">
          <input type="text" id="telefone" class="telefone" onfocus="if(this.value==this.defaultValue)value=''" onblur="if(this.value=='')value=this.defaultValue;" value="TELEFONE">
          <input type="text" id="email_comercial" class="email_comercial" onfocus="if(this.value==this.defaultValue)value=''" onblur="if(this.value=='')value=this.defaultValue;" value="E-MAIL COMERCIAL">
          <div class="selectBox assunto">
            <div class="select-atual"><span class="text">ASSUNTO</span><span class="arrow">+</span></div>
            <ul>
              <li ref="comercial@outpromo.com.br">Comercial</li>
              <li ref="fornecedor@outpromo.com.br">Fornecedor</li>
              <li ref="in@outpromo.com.br">Outro</li>
            </ul>
            <input type="hidden" id="assunto" name="select" val="">
          </div>
          <textarea id="mensagem" class="mensagem"></textarea>
          <button type="button" id="ok" class="ok">OK!</button>
        </form>
        <div id="msg"></div>
      </div>
    </div>
  </div>
</div>
</body>
</html>