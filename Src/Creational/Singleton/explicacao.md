# Como funciona o singleton?

Garantir que uma classe, tenha somente uma instância no programa e fornecer um ponto de acesso global para a mesma.

## Aplicabilidade

1. Use o singleton quando uma classe precisa ter uma instância disponível em todo seu programa
2. Use o singleton quando perceber que está usando variáveis globais para manter partes importantes do programa, como variáveis de configuração  que são usadas em toda a aplicação

## Prós

1. Acesso a instância é controlado.
2. É facil permitir um número maior de instâncias, caso mude de ideia.
3. Usa lazy instantiation, o Singleton só é criado no momento do uso.
4. substitui variáveis globais.

## Contras

1. É mais dificil de testar.
2. Viola o princípio de responsabilidade única.
3. Requer tratamento especial em casos de concorrência.