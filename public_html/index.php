<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server free01 - Ambiente de Estudos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-server"></i> Server free01</h1>
            <p>Ambiente de Estudos - Linux e Redes</p>
        </div>
    </header>

    <nav class="sidebar">
        <h3><i class="fas fa-book-open"></i> Tópicos</h3>
        <ul class="nav-list">
            <li class="nav-item"><i class="fas fa-folder-open"></i> Tópico 01</li>
            <li class="nav-item"><i class="fas fa-terminal"></i> Tópico 02</li>
            <li class="nav-item"><i class="fas fa-network-wired"></i> Tópico 03</li>
            <li class="nav-item"><i class="fas fa-shield-alt"></i> Tópico 04</li>
        </ul>
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
    </nav>

    <main class="main-content">
        <div class="container">
        <details>
<summary>Tópico 01</summary>
<ol>
<li> Estrutura de diretório</li>
<ul>
<li>Função dos principais diretórios linux;</li>
<li>Ter noção de quais são, e principal função dos diretórios padrões;</li>
<li> Navegar sem problemas nos diretórios;                </li>
<li> Saber identificar diretórios de arquivos;            </li>
<li> Entender o conceito do user home.                    </li>
</ul>
<li> Edição/criação de arquivo e criação de diretórios    </li>
<ul>
<li> Criar diretórios e arquivos;                         </li>
<li> Ler e escrever dentro de arquivos.                   </li>
<li> Extra: Pesquisar como utilizar o vi / vim.            </li>
</ul>
<li> Layout de disco e partições</li>
<ul>
<li> Entender sobre consumo de disco</li><ul>
<li>Extra: Pesquisar sobre inodes.</li></ul>
<li> Identificar um ponto de montagem e entender como que isto fica dentro de uma estrutura de diretórios;  </li>
<li> Entender o processo de criação/formatação de um novo disco;                                            </li>
<li> Entender alocação de espaço raiz x alocação de espaço unidade montada;                                 </li>
<li> Compreender como que um disco é montado e como deixa-lo em caso de reboot.                             </li>
<li> Extra: Fazer o processo do disco com LVM.
</ul>                                                      </li>
<li>Adição de usuários/grupos                                           </li>
<ul>
<li>Ser apto a listar todos os usuários criados;                        </li>
<li>Criar e remover usuários;                                           </li>
<li>Consultar grupos pertencentes de um usuário;                        </li>
<li>Adicionar/remover um grupo de um usuário.                           </li>
</ul>
<li>Permissões de pastas (rwx)
<ul>
<li>Entendimento de permissão linux, significado e possíveis usos. (rwx)</li>
<li>Entender diferença do elemento "x" em pastas e arquivos.            </li>
</ul>
</ol>
<details>
<summary>DESAFIO 01</summary>
 <p><input type="checkbox" id="checkbox11">  Criar um novo disco com ao menos 10 MB. OPCIONAL: Criar um lvm chamado lv_disco; </p>
 <p><input type="checkbox" id="checkbox12">  Criar uma partição no novo disco, e formata-lo em ext4. Em seguida monta-lo em /mnt/teste_deu_boa. Este ponto de montagem deve ser iniciado após um reboot. </p>
 <p><input type="checkbox" id="checkbox13">  Criar um novo usuário chamado tux e um novo grupo chamado de linux. </p>
 <p><input type="checkbox" id="checkbox14">  Tux deve ser membro de linux. </p>
 <p><input type="checkbox" id="checkbox15">  Alterar o diretório /mnt/teste_deu_boa para que apenas o grupo linux possa ler e executar. O owner do deve ser root. Nenhum outro usuário deve ter acesso algum a esta pasta. </p>
 <p><input type="checkbox" id="checkbox16">  Criar as pastas dir1, dir2 e dir3 dentro de /mnt/teste_deu_boa </p>
 <p><input type="checkbox" id="checkbox17">  Estas pastas (/mnt/teste_deu_boa/dir1, [...]) além da permissão de grupo, devem ter como owner o user tux;  </p>
 <p><input type="checkbox" id="checkbox18">  Com o usuário tux crie um arquivo dentro de dir2 chamado de run.sh e neste arquivo deve constar o conteudo abaixo. OBS: Teste o script para garantir que ele está rodando e trazendo a informação "Uhuul deu boa".: </p>
<textarea name="text" cols="25" rows="3">
#!/bin/bash
echo "Uhuul deu boa"
</textarea>
 <p><input type="checkbox" id="checkbox19">  Dentro de dir3 criar um arquivo chamado de lista_dir, com uma saida do comando ls /mnt/teste_deu_boa. OPCIONAL: Pesquisar sobre stdin, stdout, stderr. </p>
 <p><input type="checkbox" id="checkbox110">  Após ter rodado com sucesso remova o usuário tux do grupo linux. OBS: Garanta e entenda o motivo que o usuário tux não consegue mais entrar em /mnt/teste_deu_boa; </p>
</details>
</details>
 <details>
    <summary>Tópico 02</summary>
<ol>
<li>Processos/PID</li><ul>
<li>Entender como o linux organiza e identifica os processos;</li>
<li>Entender como encontrar o PID sobre um processo especifico;</li>
<li>Compreender como matar um processo;</li></ul>
<li>Gerenciador de pacotes</li><ul>
<li>Diferenciar arquivos .rpm e .deb e aonde são usados cada;</li>
<li>Entender como utilizar os gerenciadores de pacote para:</li>
<ul><li>Instalar determinado comando/serviço</li>
<li>Pesquisar qual é o pacote de determinado comando</li>
<li>Atualizar e voltar versão de determinado serviço/pacote</li></ul>
<li>Compreender como listar os pacotes e verificar se já possui instalado determinado pacote/serviço.</li></ul>
<li>Serviços</li><ul>
<li>Parar/inicar serviços</li>
<li>Analisar a porta que determinado serviço está utilizado (se o serviço possuir porta)</li>
<li>Ativar/desativar serviços no boot</li>
<li>Extra: Criar/personalizar um novo serviço com systemd.</li></ul>
<li>Localizando</li><ul>
<li>Como localizar o local de um arquivo que apenas possui o nome?</li>
<li>Como localizar um arquivo que você possui apenas ideia do que esteja escrito nele ?</li></ul>
<li>Análise de log</li><ul>
<li>Uso do journalctl para localizar logs de serviços</li>
<li>Identificar local padrão de logs do sistema operacional</li>
<li>Extra: Entendimento do serviço rsyslog</li></ul>
</ol>
<details>
<summary>DESAFIO 02</summary>
<p><input type="checkbox" id="checkbox21"> Instalar o pacote httpd; </p>
<p><input type="checkbox" id="checkbox22"> Iniciar o serviço (dexando ele ativo no boot); </p>
<p><input type="checkbox" id="checkbox23"> Verifique qual porta que o serviço iniciou; </p>
<p><input type="checkbox" id="checkbox24"> Realizar acesso no seu servidor e encontrar os logs de acesso; </p>
<p><input type="checkbox" id="checkbox25"> Force um restart do serviço e encontre dentro dos logs do sistema operacional este restart; </p>
<p><input type="checkbox" id="checkbox26"> Encontrar o arquivo de conf httpd.conf utilizando os comandos visto no topico 4; </p>
<p><input type="checkbox" id="checkbox27"> Verifique quais PIDs estão atrelados para o serviço httpd. Realize um stop, valide novamente, e por fim, um start no serviço e compare os PIDs nestes 3 momentos; </p>
<p><input type="checkbox" id="checkbox28"> Personalize a sua página web com um arquivo index.html com a informação: </p>
<textarea name="text" cols="25" rows="3">
Meu primeiro webserver, deu boa
</textarea>
</details>
</details>
<details>
<summary>Tópico 03</summary>
<ol>
<li>Endereço IP:</li><ul>
<li>    Entender a definição de mascara de rede;</li>
<li>    Entender padrões bloco de endereço privado, publico e reservado;</li>
<li>    Estudar sobre uso de VLSM;</li></ul>
<li>Serviços/conceitos de rede:</li><ul>
<li>    Gateway;</li>
<li>    DHCP;</li>
<li>    DNS;</li></ul>
<li>Ativos de rede:</li><ul>
<li>    Firewall;</li>
<li>    Switch;</li></ul>
<li>Conceitos de serviços de rede:</li><ul>
<li>    Modelo OSI;</li>
<li>    Diferença de TCP e UDP;</li>
<li>    Cabeçalho IP;</li></ul>
<li>Roteamento:</li><ul>
<li>    Explicar processo de roteamento;</li>
<li>    Dinifir principais papeis em um processo de roteamento;</li></ul>
<li>Comunicação local:</li><ul>
<li>    Compreender uso de VLAN;</li>
<li>    Entender quais são os pontos que VLAN pode ajudar em uma rede.</li></ul>
</ol>

<details>
<summary>DESAFIO 03 - Fazer em Packet Tracert</summary>
<p><input type="checkbox" id="checkbox31"> Criação de 2 redes internas - 192.168.0.0/24 e 192.168.10.0/24</p>
<p><input type="checkbox" id="checkbox32"> Deixar a rede 192.168.10.0 como VLAN 10 no switch de acesso</p>
<p><input type="checkbox" id="checkbox33"> As duas redes devem conter o mesmo gateway, que será um roteador na rede. </p>
<p><input type="checkbox" id="checkbox34"> Este roteador terá uma ligação com um segundo roteador que está ligado por um link serial, que é 172.100.100.0/30. Deverá haver uma rota padrão destes dois roteadores </p>
<p><input type="checkbox" id="checkbox35"> O segundo roteador deve conter uma rede local 8.8.8.8/24 em sua fast.</p>
<p><input type="checkbox" id="checkbox36"> Na rede local, na rede 192.168.0.0 deve conter um servidor que será DHCP, DNS e WEB. Ele dará o endereço para 2 computadores.</p>
<p><input type="checkbox" id="checkbox37"> Deverão ter mais 2 computadores na rede 192.168.10.0 (na vlan 10).</p>
<p><input type="checkbox" id="checkbox38"> Todos os hosts devem se comunicar com todos. Interno com interno, interno com externos e assim por diante.</p>
<p><img src="network_challange4.png"></p>
</details>
</details>
<details>
    <summary>Tópico 04</summary>
<ol>
<li>Firewall linux básico</li>
<ul>
<li>Compreenda a função do Iptables nas tabelas input e output</li>
<li>Entender função do forward</li>
<li>Analisar comando iptables, e analisar exemplos de bloqueios baseado em:
<ul>
<li>Origem</li>
<li>Destino</li>
<li>Porta</li>
<li>Protocolo</li>
</ul>
</li>
<li>Extra: Pesquisar sobre tabelas iptables (filter, nat e mangle)</li>
</ul>
<li>Firewall Oracle Cloud</li>
<ul>
<li>Compreender liberação em Security List.</li>
<li>Extra: Entender diferença de Security List e Network Security Group, e quando usar cada um dos casos.</li>
</ul>
<li>Selinux</li>
<ul>
<li>Entender os diferentes estados de Selinux</li>
<li>Compreender como mudar a estado de Selinux</li>
</ul>
<li>Comunicação</li>
<ul>
<li>Entender como validar comunicação em uma porta TCP</li>
<li>Validar como verificar se uma porta UDP está ativa</li>
<li>Saber a diferença de TCP e UDP</li>
<li>Conhecer portas padrões de:
<ul>
<li>DNS</li>
<li>Email (SMTP/POP e Imap)</li>
<li>HTTP</li>
<li>HTTPS</li>
</ul>
</li>
<li>Compreender diferenças entre portas altas e portas baixas.</li>
<li>Encontrar no linux o local aonde existe a lista de portas conhecidas.</li>
</ul>
<li>Conf de Linux</li>
<ul>
<li>Saber validar e alterar o DNS do linux</li>
<li>Saber como testar a resolução de nomes</li>
<li>Alterar hostname</li>
<li>Saber ordem de resolução de nome no linux</li>
</ul>
</ol>
<details>
<summary>DESAFIO 04</summary>
<p><input type="checkbox" id="checkbox41"> Alterar o selinux para disabled</p>
<p><input type="checkbox" id="checkbox42"> Criar regra de INPUT que bloqueie a entrada da porta 80, de comunicação vinda do seu IP (acesse em seu computador o ip.me para validar)</p>
<p><input type="checkbox" id="checkbox43"> Verifique qual o endereço de DNS que seu computador está usando. </p>
<p><input type="checkbox" id="checkbox44"> Crie um bloqueio com destino aos DNSs (encontrados no topico anterior) com a porta do DNS;</p>
<li> Extra: Deixe esta regra ativa ao iniciar o servidor. OBS: Caso tenha algum problema de comunicação busque um novo DNS.</li>
<p><input type="checkbox" id="checkbox45"> Libere no Oracle Cloud a porta 81 para o seu IP Publico.</p>
<p><input type="checkbox" id="checkbox46"> Altere a porta do apache da 80 para a 81.</p>
<p><input type="checkbox" id="checkbox47"> Alterar o DNS do seu servidor para o 8.8.8.8 e valide a resolução de nomes.</p>
<p><input type="checkbox" id="checkbox48"> Dentro do seu servidor, faça com que o nome web-server seja resolvida com o ip interno. Em seguida para validar realize um curl para o nome web-server e garanta que houve o retorno correto.</p>
</details>
</details>
        </div>
    </main>

    <footer>
        <p>&copy; 2023 Felipe E. Ribeiro - Estudos Linux Base</p>
    </footer>

    <script src="./script.js"></script>
</body>
</html>
