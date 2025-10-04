<?php
$projetos = [
    [
        "nome" => "Travelgram",
        "descricao" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
        "tecnologias" => ["React", "Node.js", "Express", "MongoDB"],
        "imagem" => "../img/p0.png"
    ],
    [
        "nome" => "Foodie",
        "descricao" => "Aplicativo de entrega de comida com interface amigável e diversas opções de restaurantes",
        "tecnologias" => ["Vue.js", "Firebase", "Tailwind CSS"],
        "imagem" => "../img/p0.png"
    ],
    [
        "nome" => "TaskMaster",
        "descricao" => "Gerenciador de tarefas para aumentar a produtividade com funcionalidades de colaboração",
        "tecnologias" => ["Angular", "Django", "PostgreSQL"],
        "imagem" => "../img/p0.png"
    ],
];

function color()
{
    $colors = ["bg-red-800", "bg-blue-800", "bg-green-800", "bg-yellow-800", "bg-purple-800", "bg-pink-800", "bg-indigo-800", "bg-gray-800"];
    return $colors[array_rand($colors)];
}
?>
<main class="flex flex-col text-center bg-[#16181D]">
    <p class="text-red-500 text-xl">Meu trabalho</p>
    <h1 class="text-white text-3xl">Veja os projetos em destaque</h1>
    <div class="container mx-auto grid grid-cols-2 gap-10 pt-10">

        <?php foreach ($projetos as $projeto): ?>

            <div class="grid grid-cols-2 bg-[#292C34] p-5 rounded-4xl">
                <div class="col-span-1">
                    <img src="<?php echo $projeto['imagem']; ?>" alt="projeto" />
                </div>
                <div class="text-left col-span-1">
                    <h2 class="text-gray-100 text-2xl"><?php echo $projeto['nome']; ?></h2>
                    <p class="pt-2 text-white">
                        <?php echo $projeto['descricao']; ?>
                    </p>
                    <ul class="flex gap-2 justify-start pt-10">
                        <?php foreach ($projeto['tecnologias'] as $tecnologia): ?>
                            <li class="<?php echo color(); ?> py-1 px-2 rounded-full"><?php echo $tecnologia; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>


        <div class="grid grid-cols-2 bg-[#292C34] p-5 rounded-4xl">
            <div class="col-span-1">
                <img src="../img/p0.png" alt="projeto 0" />
            </div>
            <div class="text-left col-span-1">
                <h2 class="text-gray-100 text-2xl">Travelgram</h2>
                <p class="pt-2 text-white">
                    Rede social onde as pessoas mostram os registros de suas
                    viagens pelo mundo
                </p>
                <ul class="flex gap-2 justify-start pt-10">
                    <li class="bg-gray-800 py-1 px-2 rounded-full">React</li>
                    <li class="bg-purple-800 py-1 px-2 rounded-full">Node.js</li>
                    <li class="bg-blue-800 py-1 px-2 rounded-full">Express</li>
                    <li class="bg-red-800 py-1 px-2 rounded-full">MongoDB</li>
                </ul>
            </div>
        </div>
    </div>
</main>