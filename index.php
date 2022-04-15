<!doctype html>
<html lang="pt-br">

<?php include './templates/head.php'; ?>

<body>

    <!-- ========================================Menu======================================== -->
    <?php include './templates/menu.php'; ?>
    <!-- ========================================End of Menu======================================== -->


    <!-- ========================================Home======================================== -->
    <?php include './templates/banner.php'; ?>

    <!-- ========================================End of Home======================================== -->

    <!-- ========================================Course======================================== -->

    <section class="course-content" id="course">
        <h2 class="text-center title-course">Nossos serviços</h2>

        <div class="container">
            <h3 class="course-item d-flex align-items-center"> <i class="material-icons marketing-icon me-2">campaign</i>
                Marketing Digital</h3>
            <div class="row d-flex justify-content-center items-box box-course">
                <div class="col-3 course-item-1">
                    <img class="icon-service mb-3 zoom" src="./img/list.svg">
                    <h4>PLANO DE MARKTING</h4>
                    <p>O Plano de Marketing é essencial para o sucesso da sua empresa. Nós criamos as estratégias de
                        marketing que farão a sua empresa alcançar os resultados que você está buscando.</p>
                </div>
                <div class="col-3 course-item-2">
                    <img class="icon-service mb-3 zoom" src="./img/social-media.svg">
                    <h4>REDES SOCIAIS</h4>
                    <p>As redes sociais são fundamentais para as ações de Marketing Digital, portanto, é preciso que
                        você saiba as usar com sabedoria. Deixe esse trabalho para quem sabe, nós podemos ajudar
                        você a mudar de nível.</p>
                </div>
                <div class="col-3 course-item-3">
                    <img class="icon-service mb-3 zoom" src="./img/ads.svg">
                    <h4>TRÁFEGO PAGO</h4>
                    <p>De que adianta ter um site ou perfil incrível, se ninguém visitar ele? O Tráfego Pago leva o
                        seu Público-Alvo diretamente para onde seu negócio estiver. Você está esperando o que para
                        mudar de vida? </p>
                </div>
            </div>
        </div>

        <div class="container">
            <h3 class="course-item d-flex align-items-center"> <i class="material-icons marketing-icon me-2">campaign</i>
                DESIGN</h3>
            <div class="row d-flex justify-content-center items-box box-course">
                <div class="col-3 course-item-1">
                    <img class="icon-service mb-3 zoom" src="./img/copy.svg">
                    <h4>COPYWRITING</h4>
                    <p>Nós fazemos você vender mais com apenas uma imagem. Deixe as vendas para quem sabe vender!</p>
                </div>
                <div class="col-3 course-item-2">
                    <img class="icon-service mb-3 zoom" src="./img/social-art.svg">
                    <h4>ARTE PARA SOCIAL MEDIA</h4>
                    <p>As páginas do seu negócio precisam se destacar não só no conteúdo, mas também pelo seu layout! Nós criamos a identidade visual que mais vai combinar com o feed das suas redes socias.</p>
                </div>
                <div class="col-3 course-item-3">
                    <img class="icon-service mb-3 zoom" src="./img/logo-maker.svg">
                    <h4 class="custom-title-design">CRIAÇÃO DE LOGOTIPO E LOGOMARCA</h4>
                    <p>A Logomarca e o Logotipo são a representação visual da sua empresa, então confie nos profissionais adequados para a criação daquilo que vai representar o seu negócio visualmente! </p>
                </div>
            </div>
        </div>


        <a href="#contact-us" class="btn subscribe-feature-show subscribe-link">Entre em contato</a>


    </section>

    <!-- ========================================End of Course======================================== -->

    <!-- ========================================About us======================================= -->

    <section class="aboutUs" id="about">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <h3 class="about-title">QUEM É BOÊMIA <br> SMARKETING?</h3>
                    <p class="about-text">A gente leva o seu empreendimento a sério!
                        <br>
                        <br>
                        Nós da Boêmia Smarketing somos uma empresa de marketing digital focada em desenvolver estratégias que inovem o processo de vendas pela internet. Com profissionais qualificados em diversos setores de marketing, traçamos metodologias modernas unindo duas das principais áreas do meio digital: Gestão de Marketing e Design Gráfico.
                        <br>
                        <br>
                        Acreditamos no potencial do seu negócio, conte com a nossa equipe para ajudar você a superar as
                        suas metas!
                    </p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <img class="about-logo" src="./img/novoicone.png">
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </section>


    <!-- ========================================End of About us======================================= -->
    <!-- ========================================Contact======================================= -->
    <section class="contact" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4 contact-text">
                    <h3>TIRE SUAS DÚVIDAS</h3>
                    <p>Se você ficou com alguma dúvida sobre, me chame no <a class="clean-font" href="https://api.whatsapp.com/send?phone=5551992042447&text=Ol%C3%A1%2C%20tudo%20bem%3F%20Gostaria%20de%20saber%20mais%20sobre%20os%20servi%C3%A7os%20da%20Boemia%20Smarketing" target="_blank">WhatsApp clicando aqui</a>, ou
                       me envie um email em <a class="clean-font" href="mailto:contato@boemiasmarketing.com.br
">contato@boemiasmarketing.com.br
</a>
                    </p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5 contact-field">
                    <h3 class="mb-3">Entre contato</h3>
                    <?php include './templates/form.php'; ?>
                </div>

            </div>
        </div>
    </section>
    <!-- ========================================End of Contact======================================= -->

    <!-- ========================================Footer======================================= -->
    <?php include './templates/footer.php'; ?>

    <!-- ========================================End of Footer======================================= -->


    <?php include './templates/scripts.php'; ?>
</body>

</html>
