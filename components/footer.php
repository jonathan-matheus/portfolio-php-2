<?php
$redes = [
    [
        "nome" => "Linkedin",
        "icone" => "../img/linkedin.png"
    ],
    [
        "nome" => "GitHub",
        "icone" => "../img/github.png"
    ],
    [
        "nome" => "Instagram",
        "icone" => "../img/instagram.png"
    ],
    [
        "nome" => "E-mail",
        "icone" => "../img/email.png"
    ]
];
?>
<footer
    class="bg-[url('../img/bg-footer.png')] bg-cover bg-no-repeat pt-60 pb-30 flex flex-col items-center justify-center">
    <h3 class="text-red-800 text-xl">
        Contato
    </h3>
    <h2 class="text-white text-2xl">Gostou do meu trabalho</h2>
    <p class="text-gray-200">
        Entre em contato ou acompanhe as minhas redes sociais!
    </p>

    <div class="flex flex-col gap-2 w-1/3 mt-10">
        <?php foreach ($redes as $rede): ?>
            <div class="flex rounded-xl justify-between items-center bg-[#292C34] p-5">
                <div class="flex gap-2">
                    <div>
                        <img src="<?php echo $rede['icone']; ?>" alt="<?php echo strtolower($rede['nome']); ?>">
                    </div>
                    <div class="text-white">
                        <?php echo $rede['nome']; ?>
                    </div>
                </div>
                <div>
                    <img src="../img/arrowupright.png" alt="arrowup-right">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</footer>