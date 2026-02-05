
Link for deo video : https://drive.google.com/drive/folders/1A1XaZhPHX4EB8fl01jaCjezsBLmVPu9
link for a canva presentation : https://www.canva.com/design/DAG62TL5fSw/KVzC8zCixkes1ajGNMmjIw/view?utm_content=DAG62TL5fSw&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hd813294fef

#  Darija-English Translator (Quarkus)

Ce projet est une application Java moderne construite avec **Quarkus**. Elle permet de traduire du texte entre l'arabe dialectal marocain (**Darija**) et l'**Anglais**.

##  Fonctionnalités
- **Traduction bidirectionnelle** : Darija ⇄ English.
- **Architecture Quarkus** : Optimisé pour des performances ultra-rapides et une faible consommation de mémoire.
- **Extension Personnalisée** : Utilise une extension Quarkus dédiée pour la logique de traduction.
- **Interface Web** : Un frontend intégré pour tester les traductions en temps réel.

##  Structure du Projet
Le projet est organisé en plusieurs modules :
- `code-with-quarkus` : Le cœur de l'application (API REST).
- `darija-extension` : L'extension personnalisée gérant la logique métier.
- `frontend` : L'interface utilisateur.

##  Prérequis
- **Java 17+**
- **Maven 3.8.1+**
- **GraalVM** (optionnel, pour la compilation native)

## Lancement en mode Développement
Pour lancer l'application et voir les modifications en temps réel :

```bash
cd code-with-quarkus
./mvnw quarkus:dev







