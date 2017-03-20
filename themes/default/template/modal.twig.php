<!-- MODAL BOOTSTRAP -->
<div class="modal fade" id="popupreboot" tabindex="-1" role="dialog" aria-labelledby="target-rtorrent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/reboot-rtorrent" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="target-rtorrent">Avertissement</h4>
                </div>
                <div class="modal-body">
                    <p>&Ecirc;tes-vous sûr de vouloir redémarrer votre session rtorrent ?</p>
                    <label><input type="checkbox" name="irssi"> Redémarrer irssi avec rtorrent</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <input type="hidden" name="reboot" value="true">
                    <input type="submit" value="Redémarrer" class="btn btn-info">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- popup about us -->
<div class="modal fade" id="popupinfo" tabindex="-1" role="dialog" aria-labelledby="target-about-us" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="target-about-us">A propos</h4>
            </div>
            <div class="modal-body">
                <p class="textmodaleabout">Application web par Backtoback &amp; Magicalex &amp; hydrog3n</p>
                <p class="textmodaleabout">Contacter les développeurs sur github : <a href="https://github.com/Magicalex/seedbox-manager/issues" target="_blank">https://github.com/seedbox-manager</a></p>
                <p class="textmodaleabout"><strong>Version {{ serveur.version }}</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

{% if user.is_owner == true and get.admin is defined %}
<!-- popup delete user -->
<div class="modal fade" id="delete-user" tabindex="-1" role="dialog" aria-labelledby="target-delete-user" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="target-delete-user"></h4>
            </div>
            <div class="modal-body">
                <p>&Ecirc;tes-vous sûr de vouloir supprimer la configuration de cette utilisateur ?</p>
                <p>Cette action est réversible.<br>Dès que votre utilisateur va se connecter les fichiers de configuration seront généré automatiquement (avec une configuration par défaut).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <form action="index.php?admin" method="post">
                    <input type="hidden" name="deleteUserName" id="deleteUserName">
                    <input type="submit" value="Supprimer" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>
{% endif %}
