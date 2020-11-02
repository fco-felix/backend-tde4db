<div class="col-12 py-2">
    <table border="1">
        <tr>
            <th>Nome Produto</th>
        </tr>
        <?php
        //echo "<pre>".print_r($dados, true)."</pre>";
        foreach ($dadosView["produtos"] as $p):?>
            <tr>
                <td><?=$p?></td>
            </tr>
        <?php
        endforeach;?>
    </table>
</div>
<div class="col-12">
    <a href="<?=BASE_URL."/sair"?>" class="btn btn-danger">Sair</a>
</div>