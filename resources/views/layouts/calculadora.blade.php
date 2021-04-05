
<form action="{{ route('index') }}" method="post">
    @csrf
    <label>
        <input name="fatura_mes" type="number" placeholder="Faturamento do mês" class="borda-branca texto-branco">
    </label>
    <br>
    <label>
        <input name="rbt12" type="number" placeholder="Média faturamento (últimos 12 meses):" class="borda-branca texto-branco">
    </label>
    <br>
    <label>
        <select name="anexo" class="borda-branca">
            <option value="none">Qual anexo sua empresa se encaixa?</option>
            <option value="2">Anexo I</option>
            <option value="1">Anexo II</option>
            <option value="2">Anexo III</option>
            <option value="3">Anexo VI</option>
            <option value="4">Anexo V</option>
        </select>
    </label>
    <br>
    <button type="submit" class="borda-branca">ENVIAR</button>
</form>
