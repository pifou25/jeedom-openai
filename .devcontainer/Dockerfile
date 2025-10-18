# image officielle jeedom non fonctionnelle
# FROM jeedom/jeedom:latest
# image fonctionnelle
FROM ghcr.io/pifou25/jeedom:bookworm-8.2-dev

SHELL ["/bin/bash", "-c"]

ARG PLUGIN_NAME

USER root

# Créer les répertoires nécessaires pour VS Code
RUN mkdir -p "/var/www/html/plugins/${PLUGIN_NAME}" "/var/www/.vscode-server" \
    && chown -R www-data:www-data /var/www/html /var/www/.vscode-server \
    # copier le script init.sh à un endroit accessible de www-data \
    && cp /root/init.sh /usr/local/bin && chown www-data:www-data /usr/local/bin \
    && chmod +x /usr/local/bin/init.sh

# Copie des fichiers de dev
COPY --chown=www-data:www-data --chmod=770 .devcontainer/xdebug.conf /etc/php/*/apache2/conf.d/99-xdebug.ini
COPY --chown=www-data:www-data --chmod=770 .devcontainer/xdebug.conf /etc/php/*/cli/conf.d/99-xdebug.ini
COPY --chown=www-data:www-data --chmod=770 .devcontainer/entrypoint-dev.sh /usr/local/bin/entrypoint-dev.sh

# Installer Xdebug (si manquant)
# RUN apt-get update && apt-get install -y --no-install-recommends php-xdebug && \
#    rm -rf /var/lib/apt/lists/*

USER www-data
WORKDIR /var/www/html/plugins/${PLUGIN_NAME}

ENTRYPOINT ["/usr/local/bin/entrypoint-dev.sh"]
