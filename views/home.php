<div class="home_sobre">
    <img src="" border="0" width="150" height="150" />
    <h4>Sobre</h4>
    é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
</div>
<div class="home_portfolio">
    <h4>Meu Portfolio recente</h4>
    <?php foreach ($portfolio as $item) : ?>
    <div class="portfolio_item">
        <img src="assets/portfolio/<?=$item['imagem'];?>" width="200" height="150" />
    </div>
    <?php endforeach;?>
        <div style="clear: both"></div>
</div>
    