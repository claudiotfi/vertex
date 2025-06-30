# Como sincronizar sua `main` com a `main` da `upstream`

Este guia mostra como configurar o repositório da principal como `upstream` e atualizar sua branch `main` com ele. Para ver o texto formatado no vscode, clique com o botão direito no arquivo **commands.md** e selecione a opção **Open Preview**.

---

## 1. Verificar os remotes configurados

Execute:

```bash
git remote -v
```

Você deve ver algo assim:

```bash
origin   https://github.com/seu-usuario/seu-fork.git (fetch)
origin   https://github.com/seu-usuario/seu-fork.git (push)
upstream https://github.com/empresa/repositorio-oficial.git (fetch)
upstream https://github.com/empresa/repositorio-oficial.git (push)
```

## 2. Adicionar o repositório da empresa como upstream (se ainda não estiver)

```bash
git remote add upstream https://github.com/empresa/repositorio-oficial.git
```

## 3. Atualizar a branch main com a main da empresa

```bash
git fetch upstream
git checkout main
git merge upstream/main
```

## 4. Atualizar o seu fork no GitHub com a nova main

```bash
git push origin main
```