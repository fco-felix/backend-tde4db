<div class="col-12 py-5 text-center">
    <form action="<?=BASE_URL."/entrar"?>" method="POST" class="col-6 mx-auto">
        
        <div class="form-group">
            <input type="text" name="usuario" value="rudolf" class="form-control my-2" autofocus placeholder="usuario">
            <input type="password" name="senha" value="123456" class="form-control my-2" placeholder="senha">
            <input type="submit" value="Entrar" class="btn btn-primary">
        </div>

        <span class="text-danger">
            <?php 
            echo $_SESSION["erro"] ?? ""
            // echo $dadosView['teste'];?>
        </span>

    </form>
</div>