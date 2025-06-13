@extends('layouts.master')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <div class='h-content'>
        <div class="position-relative">
            <div class="image-grid">
                @foreach ($files as $file)
                    <img data-src="{{ Vite::asset('resources/images/fotos/' . $file) }}" class="lazyload" alt="">
                @endforeach
            </div>
            <div class="position-absolute text-editable">
                <a class="link">
                    <h2 id="typed-output"></h2>
                </a>
            </div>
        </div>
    </div>

    <div style="background-image: url('{{ Vite::asset('resources/images/space.jpg') }}'); background-size: cover; background-position: center; color: white; font-family: 'Montserrat', sans-serif; min-height: 100vh; color: white; font-family: 'Montserrat', sans-serif;">

        <nav class="nav justify-content-center mb-4 pt-3">
            <a
                class="nav-link  custom"
                href="#"
                onclick="showPoem('chumbo'); return false;"
            >Chumbo</a>
            <a
                class="nav-link custom"
                href="#"
                onclick="showPoem('37'); return false;"
            >37 Km</a>
            <a
                class="nav-link custom"
                href="#"
                onclick="showPoem('praia-ti'); return false;"
            >Praia Ti</a>
            <a
                class="nav-link custom"
                href="#"
                onclick="showPoem('voce'); return false;"
            >Você</a>
        </nav>

        <div id="voce" class="poema">
            Quando me olho no espelho, vejo teu reflexo. <br>
            Meu amor por você não cabe em palavras, não pode.<br>
            É algo único, verdadeiro, que, de um encontro despretensioso,<br>
            me deu asas e me levou a um sentimento puro.<br><br>

            Com você, sei que posso ter altos e baixos,<br>
            tocar Apolo e as ondas borbulhantes do mar,<br>
            e ainda assim continuar a voar, livre.<br><br>

            Te amo a ponto de esquecer minhas raízes,<br>
            de me reinventar, me reconstruir, e desejar ser teu.<br>
            Quero te conter, sem te prender, te ter, sem possuir.<br>
            Quero você com um sentimento tão intenso quanto nunca antes.<br>
            E isso é tão novo para mim, como um livro que,<br>
            ao ser lido pela terceira vez, revela o real significado das palavras.<br><br>

            Escrevo sem pretensão, com sinceridade, apenas pensamento e escrita.<br>
            Quero que sinta a autenticidade do meu sentimento.<br>
            O meu amor por você me consome.<br>
            Penso em você a todo momento.<br>
            Por você, sinto que sou capaz de voltar a chorar e por você.<br><br>

            Eu, que já tinha aposentado meu coração,<br>
            que aceitara o niilismo da vida,<br>
            que desistira de sentir…<br>
            Espero por ti, amor, a cada instante.<br>
            Minha alma é tua, sem precisar pedir.<br><br>

            Te dedico todas as músicas de amor,<br>
            todos os poemas românticos.<br>
            Assim como te dedico este agora,<br>
            Lhe dou o que tenho de mais precioso:<br>
            Eu.
        </div>

        <div id="chumbo" class="poema show">
            <em>Do alto, te vejo — e te anseio.<br>
            Usa-me, como Álvaro.<br>
            Mas por favor… sem receio.</em><br><br>

            Do céu Apolo te baniu,<br>
            E nas águas retumbantes de Minos,<br>
            Teu coração se diluiu.<br><br>

            Sem asas,<br>
            Vulnerável,<br>
            E ainda assim… orgulhoso.<br><br>

            <em>Como flecha trincada<br>
            Sem destino certo<br>
            Mas que Aquiles feriu<br>
            Em seu ponto cego.</em><br><br>

            <em>Imploro-te...<br>
            Que tuas flechas de chumbo me alcancem —<br>
            Pois nelas repousam<br>
            Minha última esperança</em><br><br>

            “Fiquemos” — disseram.<br>
            "Demoremos mais um instante" - respoderam<br>
            Prosas se desmancharam.<br>
            E teus olhos se emanciparam.<br><br>

            Tua doença não tem cura.<br>
            Teu tempo já foi selado.<br>
            E aquilo que te corrói por dentro<br>
            Nenhuma flecha, ainda, tem alcançado.
        </div>

        <div id="praia-ti" class="poema">

            Teus olhos são como janelas abertas,<br>
            A paisagem é uma praia no verão.<br>
            A maresia balançando as palmeiras:<br>
            De peito aberto pulsa meu coração.<br><br>

            O azul do céu se confunde com o do mar.<br>
            Como a beleza do seu sorriso e do seu olhar.<br>
            Oh querida! As ondas rebentam na costa.<br>
            Quando minha alma com a tua se enrosca.<br><br>

            Me deleito com sua voz, seu sorriso<br>
            Ela soa como um horizonte, tão bonito.<br>
            Me alegro com o seu abraço, tão desejado<br>
            Ele me desfaz como um crochê errado.<br><br>

            Deixa-me derramar na tua alma<br>
            O doce suco do amor, com calma.<br>
            De tantas vidas que já vivi<br>
            É contigo que mais quero estar, aqui.
        </div>

        <div id="37" class="poema">
            Pacífica era a noite,<br>
            em que o Príncipe dos Encontros<br>
            soprava seus ecos suaves;<br>
            e seu reinado, sereno, se iniciava.<br><br>

            Mesmo exausto,<br>
            mesmo imerso,<br>
            mesmo perdido,<br>
            esperança ele trouxe.<br>
            Suas penas eram sonhos,<br>
            e seu canto, armadilha:<br><br>

            que seduzia o tempo,<br>
            que atraía almas errantes,<br>
            que traía as certezas antigas;<br>
            e, ainda assim, deleitava e acalentava,<br>
            mesmo diante da afronta<br>
            e da fugacidade dos dias.<br><br>

            Em paz, repouso,<br>
            envolto em pensamentos e expectativas.<br><br>

            Nosso encontro foi um acaso improvável,<br>
            um capricho doce do destino,<br>
            uma chance tênue,<br>
            que, contra tudo, se uniu e floresceu:<br>
            o passado e o futuro se entrelaçaram —<br>
            pois os Ecos da Noite ressoaram.
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
        lazyload();

        let names = ["Alice", "Amor", "Amizade", "Aconchego", "Alegria", "Afeto", "Admiração", "Abraço", "Alívio",
            "Aventura", "Arte",
        ]

        function comparaAleatoria() {
            return Math.random() - 0.5;
        }

        // Embaralha o array usando a função de comparação aleatória
        names.sort(comparaAleatoria);

        const options = {
            strings: names,
            typeSpeed: 100,
            backSpeed: 25,
            backDelay: 4000,
            showCursor: false,
            loop: true
        };

        const typed = new Typed("#typed-output", options);
    </script>

    <script>
        function showPoem(id) {
            const poems = document.querySelectorAll('.poema');
            poems.forEach(poem => {
                if (poem.id === id) {
                    poem.classList.add('show');
                } else {
                    poem.classList.remove('show');
                }
            });
        }
    </script>
@endsection
