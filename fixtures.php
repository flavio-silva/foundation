<?php

$sql = 'drop table if exists paginas';
$db->query($sql);

#Criando tabela paginas
$sql = 'create table paginas
(
    id int unsigned auto_increment primary key,
    nome varchar(255) not null,
    conteudo text
)';
$db->query($sql);

#inserindo os registros
$sql = "insert into paginas (nome, conteudo) values
('home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque mi quis mauris elementum, viverra tincidunt tellus aliquam. Sed in felis nec velit facilisis congue. Nunc tincidunt ligula vel urna sagittis, vitae volutpat mi tempus. Donec vitae commodo metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus aliquet libero a erat dapibus tempor sit amet ut ligula. Vestibulum aliquam in sem sed varius. Proin sed urna a risus accumsan congue. Duis at sagittis nibh. Aliquam felis urna, iaculis et ultrices ac, varius eget erat. Morbi sodales sagittis ante, vitae dapibus arcu aliquet ac. Quisque sollicitudin scelerisque venenatis. Vivamus id ligula odio. Donec auctor egestas ante, at vehicula quam scelerisque ac. Sed vel neque vitae nibh iaculis venenatis vel at sem.'),
('empresa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque mi quis mauris elementum, viverra tincidunt tellus aliquam. Sed in felis nec velit facilisis congue. Nunc tincidunt ligula vel urna sagittis, vitae volutpat mi tempus. Donec vitae commodo metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus aliquet libero a erat dapibus tempor sit amet ut ligula. Vestibulum aliquam in sem sed varius. Proin sed urna a risus accumsan congue. Duis at sagittis nibh. Aliquam felis urna, iaculis et ultrices ac, varius eget erat. Morbi sodales sagittis ante, vitae dapibus arcu aliquet ac. Quisque sollicitudin scelerisque venenatis. Vivamus id ligula odio. Donec auctor egestas ante, at vehicula quam scelerisque ac. Sed vel neque vitae nibh iaculis venenatis vel at sem.'),
('produtos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque mi quis mauris elementum, viverra tincidunt tellus aliquam. Sed in felis nec velit facilisis congue. Nunc tincidunt ligula vel urna sagittis, vitae volutpat mi tempus. Donec vitae commodo metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus aliquet libero a erat dapibus tempor sit amet ut ligula. Vestibulum aliquam in sem sed varius. Proin sed urna a risus accumsan congue. Duis at sagittis nibh. Aliquam felis urna, iaculis et ultrices ac, varius eget erat. Morbi sodales sagittis ante, vitae dapibus arcu aliquet ac. Quisque sollicitudin scelerisque venenatis. Vivamus id ligula odio. Donec auctor egestas ante, at vehicula quam scelerisque ac. Sed vel neque vitae nibh iaculis venenatis vel at sem.'),
('servicos', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam scelerisque mi quis mauris elementum, viverra tincidunt tellus aliquam. Sed in felis nec velit facilisis congue. Nunc tincidunt ligula vel urna sagittis, vitae volutpat mi tempus. Donec vitae commodo metus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus aliquet libero a erat dapibus tempor sit amet ut ligula. Vestibulum aliquam in sem sed varius. Proin sed urna a risus accumsan congue. Duis at sagittis nibh. Aliquam felis urna, iaculis et ultrices ac, varius eget erat. Morbi sodales sagittis ante, vitae dapibus arcu aliquet ac. Quisque sollicitudin scelerisque venenatis. Vivamus id ligula odio. Donec auctor egestas ante, at vehicula quam scelerisque ac. Sed vel neque vitae nibh iaculis venenatis vel at sem.'),
('contato', ''),
('pesquisar','')";
$db->query($sql);