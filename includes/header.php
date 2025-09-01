<header>
    <h1>Plataforma de Cursos</h1>
    <nav>
        <a href="index.php">Início</a>

        <?php if (isset($_SESSION['usuario_id'])): ?>
            <a href="logout.php">Sair</a>

            <?php if ($_SESSION['tipo_usuario'] == 'aluno'): ?>
                <a href="painel_aluno.php" class="btn-primary">Meu Painel</a>
            <?php elseif ($_SESSION['tipo_usuario'] == 'educador'): ?>
                <a href="painel_educador.php" class="btn-primary">Meu Painel</a>
            <?php endif; ?>

        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="registrar.php">Cadastro</a>
        <?php endif; ?>
    </nav>

</header>
