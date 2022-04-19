<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/jpg" href="/images/oak/logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/oak.css')}}">
    <title>OAK - Tecnologia</title>

</head>

<body>
    <header class="header">
        <img src="/images/oak/logo.jpg" alt="logo">
        <div class="menu">
            <ul>
                <li><a href="https://www.instagram.com/oak.tecnologia/">Trabalhe Conosco</a></li>
                <li><a href="https://www.instagram.com/oak.tecnologia/">Sobre</a></li>
                <li><a href="https://www.instagram.com/oak.tecnologia/">Instagram</a></li>
                <li><a href="https://www.linkedin.com/company/oak-tecnologia/">Linkedin</a></li>
            </ul>
        </div>
    </header>

    @if(session('msgOk'))
    <div class="alert alert-success">
        <p>{{session('msgOk')}}</p>
    </div>
    @endif
    <div class="top-container">

        <img src="/images/oak/ReadingSideDoodle.gif" alt="Coffe">
        <div>
            <h1>Cansado de perder noites de sono resolvendo problemas?</h1>
            <p>Entendemos seu problema, todos já passamos por esse tipo de situação em algum momento da nossa vida, e é para isso que existimos, trazer a transformação digital de forma efetiva para você.</p>
            <p>Isso é possível graças ao nosso time, sua necessidade será tratada com exclusividade e suporte total, atuamos no desenvolvimento de software para todo tipo de comércio.</p>
        </div>
    </div>
    <div class="middle">
        <h1>Entre em contato</h1>
        <p>Preencha o formulário com as suas informações que entraremos em contato para agilizar seu atendimento, junte-se a nós e veja a transformação.</p>
    </div>
    <div id="modal"></div>
    <div class="mid-container">
        <div class="form" id="form">
            <form action="{{ route('oak-store') }}" method="POST">
                @csrf
                <label>Nome</label>
                <input type="text" name="name" id="nome">
                <label>Email</label>
                <input type="email" name="email" id="email">
                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone">
                <label>CPF/CNPJ</label>
                <input type="text" name="documento" id="documento">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <img src="/images/oak/meditating.png" />
    </div>
    <footer class="footer">
        <section class="missao">
            <h2>Invista em Tecnologia</h2>
            <p>Junte-se ao time OAK-Tecnologia e tenha uma experiência inédita para sua empresa</p>
            <nav>
                <span>Contato: (17) 99675-3089</span>
                <span>Email: contato@oaktecnologia.com</span>
            </nav>
        </section>
        <section class="copyright">
            <p>OAK-Tecnologia Todos os direitos reservados</p>
        </section>
    </footer>
</body>


</html>
