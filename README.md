# Plugin open-AI pour Jeedom

## Swagger openAI 

Le fichier yaml dit `swagger` correspond aux spécifications de l'API openAI, 
au format open-API; cette API est cencée être générique et compatible avec d'autres modèles que ChatGPT.

https://github.com/openai/openai-openapi

Ce seul fichier yaml est ensuite utilisé pour générer un outil Frontend générique via l'outil swagger-ui:

https://pifou25.github.io/jeedom-openai/index.html#/

Cet outil permet de tester les appels à un modèle compatible openAI tel que ChatGPT, comme on pourrait le faire avec Postman par exemple.
Il suffit pour cela d'entrer sa clé API - le `token` - dans le bouton `authorize`

## Intégration dans le plugin

C'est une librairie php qui implémente cette interface, que l'on va utiliser ici, pour nous une simple dépendance que
 l'on peut ajouter avec Composer.

https://github.com/openai-php/client

