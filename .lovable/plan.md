

## Plano: Migrar endpoint Atito para o novo servidor

### O que sera feito

1. **Criar pasta `api/agentedeia/`** com um `.gitkeep` para que voce copie o `index.php` do servidor antigo para la.

2. **Atualizar URL no servico** `src/services/atitoConsultaCpfService.ts` — trocar:
   - De: `https://apipainel.atito.com.br/index.php?cpf=...`
   - Para: `https://api.apipainel.com.br/agentedeia/index.php?cpf=...`

Apenas esses 2 arquivos serao alterados. As 4 paginas que usam o servico (PuxaTudo, Completo, Simples, Basico) nao precisam de alteracao pois todas importam `atitoConsultaCpfService`.

### Acao do usuario

Apos a implementacao, voce precisara copiar o `index.php` do servidor antigo para a pasta `agentedeia/` na nova VPS em `api.apipainel.com.br`.

