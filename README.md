The english version of this file can be found below.

# Gerador de Histórico de Commits (Português)

## Sobre

Simula a criação de um histórico Git, gerando código PHP válido.

Foi desenvolvido para auxiliar na demonstração da ferramenta `git bisect`.

## Utilização

Para simular a criação de um histórico com, por exemplo, 10 commits, use

	./simularHistorico 10

Para começar um novo histórico do zero, use

	./simularHistorico

Que é equivalente a `./simularHistorico 0`.

Uma vez que você criou um histórico, use

	./testar

E você receberá uma mensagem de que está tudo ok.

## git bisect

Uma vez que você já gerou um histórico, se sua intenção é demonstrar/testar o `git bisect`, você pode entrar no repositório de teste (`cd repoTeste/`) e gerar um novo commit.

Depois, crie mais um número arbitrário de commits e comece a diversão :P

#### Como testar

O comando `./testar` pode te ajudar a determinar se um dado commit veio depois do que você criou manualmente, ou não.

As variáveis `$i` e `$j` deveriam sempre ter o mesmo valor. Se um determinado commit tem um bug (`$i != $j`), o comando `./testar` retornará um erro.

Esta é a maneira utilizada para simular um commit que gerou um bug. Observe que se um commit intruduziu um bug, todos que vierem depois dele vão ter o mesmo bug também.

---

# Commits History Generator (English version)

## About

This simple tool simulates a Git repository's history generation, by building valid PHP code.

It was developed to help demonstrations of the `git bisect` tool.

## Usage

To simulate the creation of a history with, for example, 10 commits, use

	./simularHistorico 10

To restart the history from scratch,

	./simularHistorico

That's the same as `./simularHistorico 0`.

Once you're created a fake history, use

	./testar

And you'll get a message that everything is ok.

## git bisect

Once you're already generated a test history, if you intent to demonstrate or test the `git bisect` tool, you can go to the test repo (`cd repoTeste/`) and create a new commit.

After it, start the simulator to create an arbitrary number of commits, and have fun :P

#### How to test

The command `./testar` can be useful to determinate if a specific commit was created after the yours (wich you created manually).

The vars `$i` and `$j` should ever have the same value. If a certain commit have the bug (`$i != $j`), the `./testar` command will return an error message.

This is the way used to simulate a commit that introduced a bug. Note that if a commit introduced a bug, all of them which become after it will have the same bug too.
