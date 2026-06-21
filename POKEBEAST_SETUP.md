# Pokebeast Launcher

Baseado no Selvania Launcher, criado por Luuxis. Mantenha o `LICENSE.md` original no repositorio publico.

## O que ja esta preparado

- Nome do app: `Pokebeast Launcher`
- Repositorio de update: `https://github.com/Mift777/Pokebeast-launcher`
- Backend web em `web-pokebeast`
- Instancia unica: `Pokebeast`
- Minecraft: `1.21.1`
- Fabric loader: `0.16.10`
- Mods copiados de `C:\Users\leozi\AppData\Roaming\.minecraft\mods`

## Antes de publicar

Edite estes campos:

- `package.json`
  - Troque `https://SEU-DOMINIO-AQUI/launcher` pela URL publica da pasta `web-pokebeast/launcher`.

- `web-pokebeast/instances/php/instances.php`
  - Troque `SEU-IP-AQUI` pelo IP ou dominio do servidor.

## Hospedagem

Suba o conteudo da pasta `web-pokebeast` para um host com PHP.

As URLs precisam responder assim:

- `/launcher/config`
- `/launcher/articles`
- `/instances`
- `/instances?instance=Pokebeast`

O mod `shinycharm-1.0.0.jar` nao precisa existir na internet publica. Ele ja foi copiado como arquivo local do modpack e sera baixado do seu proprio host junto com os outros mods.
