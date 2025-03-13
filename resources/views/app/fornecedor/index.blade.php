<h3> fornecedor </h3>

<?php echo 'pinto'?>

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h1> existe alguns fornecedores cadastrados</h1>
@elseif(count($fornecedores) > 10)
    <h1> existem varios fornecedores cadastrados</h1>
@else 
    <h1>nao existe nenhum fornecedor cadastrado </h1>
@endif

{{-- @unless retorna se o valor for falso--}}