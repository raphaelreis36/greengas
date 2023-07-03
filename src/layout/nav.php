<?php 
$pageTokens = explode('/', $_SERVER['REQUEST_URI']);
$currentPage = $pageTokens[count($pageTokens)-2]; 
?>
<nav id="nav">
    <ul>
        <li><img src="/images/logos/PNG_horizontal_simbolo_meio_verde.png" alt="Resíduos e Bioenergia" width="200" style="vertical-align:middle;margin-top: -20px;" /></li>
        <li class="<?php echo $currentPage === '' ? 'current' : ''; ?>"><a href="/">Home</a></li>
        <li class="<?php echo $currentPage === 'sobre' ? 'current' : ''; ?>"><a href="/src/pages/sobre">Sobre Nós</a></li>
        <li class="<?php echo $currentPage === 'servicos' ? 'current' : ''; ?>"><a href="/src/pages/servicos">Produtos e Serviços</a></li>
        <li class="<?php echo $currentPage === 'blog' ? 'current' : ''; ?>"><a href="/src/pages/blog">Blog</a></li>
        <li class="<?php echo $currentPage === 'contato' ? 'current' : ''; ?>"><a href="contato.html">Contato</a></li>
    </ul>
</nav>