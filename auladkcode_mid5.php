<?php
    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porttitor, purus eget rhoncus hendrerit, metus nisl placerat risus, eu pellentesque velit leo vel tortor. Ut hendrerit mi ligula. Integer luctus dictum tortor. Etiam varius dui ac justo aliquam, nec pulvinar ante ornare. Vestibulum accumsan tortor dictum finibus pellentesque. Suspendisse diam velit, varius vel tempor a, fringilla et orci. Donec a ipsum turpis. In condimentum turpis turpis, a tincidunt lorem fringilla nec. Praesent nec venenatis sem. Ut volutpat nisi ex, et ultrices mi mollis at.

    Mauris ut feugiat velit. Sed sit amet tincidunt diam. Phasellus eu leo leo. Mauris hendrerit dolor at nulla luctus efficitur. Vivamus vel lacus sagittis, aliquet sem eu, eleifend ligula. Proin auctor ipsum vel felis tristique pellentesque. Curabitur eu purus vitae nisi posuere pellentesque. Quisque varius diam non tristique porttitor. Integer interdum turpis vel enim vulputate, quis bibendum libero molestie. Integer a auctor elit, non efficitur sapien. Curabitur laoreet, sem ut tincidunt feugiat, nunc felis pharetra enim, et viverra neque diam id diam. Praesent velit felis, iaculis id mattis ut, aliquam vitae dui. Vivamus euismod tincidunt blandit. Quisque consectetur metus eget mauris tincidunt, a hendrerit nulla porta. Aliquam pulvinar venenatis justo.
    
    Sed justo leo, facilisis vel arcu ultricies, feugiat accumsan nunc. Praesent laoreet mauris a maximus interdum. Nam ultrices mauris velit, pellentesque convallis orci suscipit id. Suspendisse malesuada eros at dui porta, ac ullamcorper eros accumsan. Vestibulum interdum dui nibh, sit amet venenatis lacus iaculis et. Aenean ante massa, lacinia eget luctus ac, elementum ac nulla. Cras quis hendrerit urna. In in velit enim. Quisque a tristique sapien, id dictum eros. Aenean dapibus ante mauris, nec commodo libero consectetur vel. Etiam a lorem blandit, dignissim diam ac, aliquet odio.
    
    Sed non justo id nisi feugiat porttitor ac quis nibh. Quisque viverra, nunc et congue viverra, ipsum neque scelerisque ipsum, in facilisis lectus nunc ut risus. Nulla vestibulum lacinia turpis sed blandit. Pellentesque lacinia, arcu at ullamcorper posuere, massa leo gravida ex, ut efficitur leo nisi et massa. Curabitur augue erat, blandit ac cursus sit amet, euismod vitae tellus. Duis sit amet maximus tellus. Proin egestas est fermentum dictum pulvinar. Sed sit amet nisl posuere, pretium ante eu, pharetra neque.
    
    Vestibulum at finibus sem. Donec porttitor id neque quis scelerisque. Cras nec nisi quis lorem vestibulum porttitor sed id sem. Maecenas quis risus commodo justo volutpat pulvinar a eu augue. Praesent ac mi sem. Donec lobortis sed mi vel tincidunt. Proin gravida fermentum mi quis venenatis.
    
    Generated 5 pa';


    echo substr($conteudo,0,20);

    $nome = 'Gabriel Oliveira Cardoso Ferreira';
    
    $nome = explode (' ',$nome);

    print_r($nome);

    $nomes = implode (' ',$nomes);

    echo $nomes;


?>