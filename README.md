# m2c-labels
Labels pour l'agence et copyright

## Usage des fichiers
Utilisation du code présent dans le fichier shortcode.php :
- Soit en le mettant directement dans le fichier functions.php du thème (ou thème enfant). Attention, penser à retirer la première balise d'ouverture de php "<?php"
- Soit en faisant un include du fichier shortcode.php placé dans le thème ou thème enfant

Utilisation du CSS :
- Placer le code CSS dans un dossier assets et dans un dossier css. Structure suivante /assets/css/m2c-labels.css
- Placer le dossier "fonts" dans le dossier assets, en gardant la structure de dossier et de fichier de fonts.
- Ajouter le fichier CSS à la file d'attente WordPress après la feuille de style du thème de la façon suivante :
  ```
  wp_enqueue_style('m2c-labels', get_stylesheet_directory_uri() . '/assets/css/m2c-labels.css', array(), '1.0', 'all');
  ```

## Exemple d'utilisation avec le shortcode pour l'eco label
```
<?= do_shortcode('[m2c-labels theme="#171B2D" lines="1,3" note="A" url="https://www.websitecarbon.com/website/my-website" border="light"]') ?>
```

## Exemple d'utilisation avec le shortcode pour le copyright
```
<?= do_shortcode('[m2c-copyright theme="dark"]') ?>
```
