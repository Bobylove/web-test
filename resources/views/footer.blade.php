@extends('index')

@section('footer')
 <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->


        <!-- Footer Social Icons -->
        <div class="col-lg-12 mb-5  mb-lg-0">
          <h4 class="text-uppercase mb-4">autres contact</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/axel-bouillart-392963137/">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
        </div>

        <!-- Footer About Text -->

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Aetheyria design 2020 |<a href=""  data-toggle="modal" data-target="#exampleModalLong">
       Mentions légales
     </a> | <a href=""  data-toggle="modal" data-target="#exampleModalLong"> cookies</a></small>
   </div>
 </section>

 <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Mentions legal & cookies</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Le propriétaire de ce site est la <strong>Aetheyria (nc)</strong><br>
        <strong>SIEGE:</strong>Jersey<br>
        <strong>Tél.:</strong> (33)6 37 82 02 41 <br>
        <strong>EMail:</strong> Axel.bouillart@gmail.com <br>
        <strong>Numero siret/Siren: </strong> en attente <br>
        APE: - TVA intracommunautaire : en attente<br><br>
        Représenté par: Mr. bouillart.<br><br>

        <strong>Responsabilité:</strong>
        Malgré toutes les précautions prises et tous les efforts mis en oeuvre dans l'élaboration de ce site Web, nous ne pouvons pas garantir l'exactitude des informations y figurant. Nous ne pouvons être tenus responsables des dommages occasionnés directement ou indirectement par l'utilisation de ce site Internet, pour autant que ces derniers aient été occasionnés avec intention ou par négligence grossière. Notre site Internet peut proposer des liens vers d'autres sites, exploités par des tiers. Dès lors, Aetheyria.com ne saurait être responsable de leurs contenus.
        <br><br>

        <strong>Vie privée:</strong>
        Ce site internet, en conformité avec les dernières règlementations Européennes ne stocke aucune donnée personnelle. Les informations générales, professionnelles qui peuvent être laissées via le formulaire de contact sont stockées par défaut sur le serveur de messagerie de Aetheyria. Ces informations sont le nom/prénom, et adresse Email, ainsi que celles, aléatoires du message que peut laisser l'utilisateur.
        La société s'engage à ne jamais diffuser, transmettre ou revendre ces informations. Un droit de retrait immédiat est accordé en cas de demande. De même, aucune diffusion promotionnelle ou de type newsletter non sollicitée ne sera permise sans l'accord express préalable du receveur.
        <br /><br />
        Ce site utilise un outil de tracking pour l'analyse de son traffic, Google Analytics. Lors d'un première visite, une acceptation de tracking est expressément demandées par un message en base de page (acceptation des cookies), et un lien fourni vers plus d'explication sur la nature dont Google et ses partenaires utilisent ces données. Par défaut, les cookies expirent sous 30 jours. <a href="https://policies.google.com/technologies/partner-sites?hl=fr" target="_blank">Pour en savoir plus sur la manière dont Google inc. et ses partenaires utilisent ces données.</a>
        <br /><br />

        <strong>Copyright (c)2020 Aetheyria.</strong>
        Les photos, objets multimédia et informations contenues dans ce site Web sont protégés par copyright. En conséquence, toute utilisation de ceux-ci, totale ou partielle, en vue d'une publication dans des médias imprimés ou digitaux, sans notre accord exprès, préalable et écrit, est interdite. Si vous désirez utiliser des photos ou autres objets à des fins personnelles, veuillez contacter contact(arobase)Aetheyria.com.<br><br>
        Les informations presentes sur ce site peuvent contenir des erreurs, des omissions, des informations obsolètes ou fausses. Tout usage de ces informations se fait à vos propres risques.<br><br>

        Ce site est maintenu par Bouillart Axel,<br /><br />
        France - Axel.bouillart|gmail.com                                      
      </div>
       
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
@stop