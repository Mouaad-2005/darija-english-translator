Entendu, voici la version reformulée en conservant exactement les liens tels que tu me les as envoyés, sans aucune modification de leur format ou de leur structure.

🇲🇦 Darija-English Translator (Quarkus)
Ce projet est une application Java moderne haute performance conçue pour la traduction bidirectionnelle entre l'arabe dialectal marocain (Darija) et l'Anglais. Propulsé par le framework Quarkus, ce traducteur démontre l'utilisation d'extensions personnalisées pour isoler les logiques métier complexes.

📽️ Ressources & Démonstrations
-Link for demo video : https://drive.google.com/drive/folders/1A1XaZhPHX4EB8fl01jaCjezsBLmVPu9
-link for a canva presentation : https://www.canva.com/design/DAG62TL5fSw/KVzC8zCixkes1ajGNMmjIw/view?utm_content=DAG62TL5fSw&utm_campaign=designshare&utm_medium=link2&utm_source=uniquelinks&utlId=hd813294fef

✨ Fonctionnalités clés
Traduction bidirectionnelle : Conversion fluide entre le Darija et l'Anglais.

Architecture Cloud-Native : Optimisé avec Quarkus pour un démarrage ultra-rapide et une consommation mémoire réduite.

Extension Personnalisée : Implémentation d'une extension dédiée (darija-extension) pour une gestion modulaire de la logique de traduction.

Interface Interactive : Un frontend web intégré pour des tests de traduction en temps réel.

📂 Structure du Projet
L'organisation modulaire du code assure une maintenance simplifiée :

code-with-quarkus : Le cœur de l'application (API REST).

darija-extension : Logique métier encapsulée dans une extension Quarkus.

frontend : Interface utilisateur.

🛠️ Prérequis
Java 17+

Maven 3.8.1+

GraalVM (optionnel, pour la compilation native)

🚀 Lancement en mode Développement
Pour exécuter le projet avec le rechargement à chaud (Hot Reload) :

Bash
cd code-with-quarkus
./mvnw quarkus:dev
