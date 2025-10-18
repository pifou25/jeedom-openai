#!/bin/bash
set -e

PLUGIN_DIR="/var/www/html/plugins/${PLUGIN_NAME}"

# Crée le répertoire du plugin s’il n’existe pas
if [ ! -d "$PLUGIN_DIR" ]; then
  echo "📁 Création du répertoire plugin : $PLUGIN_DIR"
  mkdir -p "$PLUGIN_DIR"
  chown -R www-data:www-data "$PLUGIN_DIR"
fi

# Affiche la version de Xdebug pour vérification
php -v | grep -i xdebug || echo "⚠️ Xdebug non détecté (php-xdebug peut être manquant)"

# Appel du CMD original (lancement Jeedom)
# exec bash /usr/local/bin/init.sh
# appel du CMD original de l'image pifou25/jeedom
exec bash /usr/bin/supervisord -n -c /etc/supervisor/supervisord.conf
