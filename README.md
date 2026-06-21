# Pokebeast Launcher

Launcher oficial do servidor Pokebeast, baseado no projeto Selvania Launcher.

## Creditos e Licenca

Este projeto e um fork/modificacao do **Selvania Launcher**, criado por **Luuxis**.

Repositorio original:
https://github.com/luuxis/Selvania-Launcher

Este fork mantem a licenca original em `LICENSE.md`, conforme exigido pela **Luuxis License v1.0**.

Ao usar, modificar ou redistribuir este projeto, voce deve respeitar os termos da licenca original:

- manter o codigo fonte publico e acessivel;
- manter o credito ao autor original, Luuxis;
- manter o arquivo `LICENSE.md` sem alteracoes;
- nao vender, alugar ou monetizar diretamente este codigo ou derivados;
- microtransacoes dentro do servidor sao permitidas, desde que o codigo continue publico e gratuito.

## Sobre

O Pokebeast Launcher foi preparado para baixar e iniciar o modpack do servidor Pokebeast com Minecraft `1.21.1` e Fabric.

Configuracao atual:

- Minecraft: `1.21.1`
- Fabric Loader: `0.16.10`
- Instancia: `Pokebeast`

## Configuracao

Os detalhes de hospedagem, endereco do servidor e arquivos do modpack sao mantidos fora deste repositorio publico.

Antes de compilar/publicar o launcher, configure a URL publica do backend privado em `package.json`.

## Mods

Os arquivos `.jar` do modpack nao sao enviados para o GitHub. Eles devem ser hospedados separadamente no backend privado do servidor.

## Desenvolvimento

Instalar dependencias:

```bash
npm install
```

Rodar em modo desenvolvimento:

```bash
npm run dev
```

Compilar:

```bash
npm run build
```

## Aviso

Este projeto e fornecido sem garantia, seguindo os termos do `LICENSE.md`.
