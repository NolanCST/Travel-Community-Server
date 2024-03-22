<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegislationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legislations')->insert([
            [
                'country' => 'États-Unis',
                'rules' => 'Mesures liées à la Covid-19
                Depuis le 12 mai 2023, l’obligation de vaccination contre le Covid-19 est supprimée pour les voyageurs se rendant aux États-Unis, que ce soit par voie aérienne, terrestre ou maritime.
                
                Formalités d’entrée et de séjour
                Il est vivement recommandé de consulter régulièrement le site de l’ambassade des États-Unis en France et de contacter la compagnie aérienne afin de vérifier les mesures qu’elle adopte à son niveau.
                
                En cas de doute sur sa situation, il est vivement conseillé de prendre l’attache des autorités consulaires américaines en France avant son départ, en écrivant à l’adresse suivante : ParisVisaInquiry@state.gov.
                
                Séjour sans visa
                Le programme d’exemption de visa : Visa Waiver Program (VWP)
                Depuis le 1er avril 2016, seules les personnes titulaires d’un passeport électronique ou biométrique peuvent bénéficier du programme d’exemption de visa (VWP) qui permet aux ressortissants français d’accéder au territoire américain sans visa, mais avec une autorisation électronique de voyage (ESTA), soit en transit, soit pour un séjour touristique ou d’affaires de 90 jours maximum (s’entendant par la possibilité de signer des contrats, de passer des commandes, de participer à des séminaires ou de rencontrer des clients).
                
                Les personnes titulaires d’autres passeports devront solliciter un visa auprès des autorités diplomatiques et consulaires américaines compétentes (cf. site de l’ambassade des États-Unis à Paris).
                
                NB  : le passeport d’urgence ne permet pas d’entrer aux États-Unis sans visa.
                Pour plus d’informations sur les types de passeport, il est recommandé de consulter le site Service-public.fr.
                
                L’autorisation électronique de voyage : ESTA
                Le ressortissant français qui se rend aux États-Unis par la voie aérienne, maritime ou terrestre et qui bénéficie du VWP doit obligatoirement solliciter, via Internet, une autorisation électronique de voyage avant le départ (Electronic System for Travel Authorization - ESTA), sauf s’il voyage par avion privé ou par bateau privé, auquel cas il doit obligatoirement demander un visa : cf. infra.
                
                L’ESTA peut être obtenue en répondant aux questions posées sur le site Internet (multilingue), seul site habilité par les autorités américaines et permettant un paiement en ligne par carte bancaire.
                Le formulaire est à renseigner en langue anglaise, mais les instructions sont disponibles en langue française.
                
                La demande d’autorisation peut être déposée à tout moment avant le voyage. Le ministère américain de la sécurité intérieure (Department of Homeland Security) recommande cependant d’effectuer cette formalité au moins 72 heures avant le départ.
                
                L’ESTA permet de voyager dans le cadre du VWP mais ne constitue pas un droit d’entrée sur le territoire américain, lequel reste accordé ou refusé à l’arrivée par l’officier d’immigration.
                
                L’autorisation est valable 2 ans à compter de la date de délivrance, mais doit être renouvelée en cas de changement de situation (nom, prénom, sexe, nationalité, passeport, réponses différentes aux questions posées, etc.), ou si la date de validité du passeport est inférieure à ce délai de 2 ans. Pour tout nouveau voyage pendant la période de validité de l’autorisation, il conviendra de mettre à jour via Internet certaines informations (numéro de vol et adresse de destination) dans son dossier ESTA et bien évidemment de voyager avec le passeport déclaré sur le formulaire ESTA.
                
                Exclusion du VWP de certaines catégories de voyageurs
                Les voyageurs qui se rendent aux États-Unis par avion privé ou par bateau privé (yachts ou voiliers à destination de Porto Rico ou des îles vierges américaines notamment) ne peuvent bénéficier du régime de l’ESTA et doivent obligatoirement faire une demande de visa auprès d’un consulat américain avant d’entreprendre un voyage aux États-Unis, et ce, même s’ils bénéficient d’un ESTA précédemment approuvé, sous peine de voir celui-ci annulé par les agents de la police aux frontières (Customs and Border Protection) lors de l’entrée sur le sol américain, de se voir infliger une forte amende et, le cas échéant, de risquer la confiscation de leur navire.
                
                Les voyageurs qui se sont rendus à Cuba depuis le 12 janvier 2021 ou qui désirent y voyager avant un séjour aux États-Unis ne peuvent pas bénéficier du régime de l’ESTA et doivent obligatoirement faire une demande de visa auprès d’un consulat américain avant d’entreprendre un voyage aux États-Unis, et ce, même s’ils bénéficient d’un ESTA précédemment approuvé, sous peine de voir celui-ci annulé par les agents de la police aux frontières (Customs and Border Protection) lors de l’entrée sur le sol américain, ou de faire l’objet une décision de refus d’embarquement. Pour plus d’informations (en anglais), consulter la FAQ sur le site de l’agence fédérale Customs and Border Protection.
                
                Les voyageurs qui se sont rendus en Iran, Irak, Syrie, Libye, Somalie, Yémen ou au Soudan depuis le 1er mars 2011 et les personnes ayant la nationalité iranienne, irakienne, soudanaise ou syrienne ne peuvent pas bénéficier du régime d’exemption de visa.
                Ces personnes doivent solliciter un visa B1/B2 valable, selon les cas, plusieurs années auprès des autorités diplomatiques et consulaires américaines.
                Compte tenu des délais de délivrance, il est recommandé d’anticiper ces démarches qui peuvent prendre plusieurs semaines.
                Selon l’administration américaine, les personnes ayant besoin d’un visa en urgence pour un voyage d’affaires ou des raisons médicales ou humanitaires pourront bénéficier d’un traitement accéléré de leur demande de visa.
                
                Une exception permanente pour les agents à temps plein des administrations d’État civiles ou militaires en mission officielle est mise en œuvre. Ces agents continuent de bénéficier de l’exemption de visa pour se rendre aux États-Unis. L’administration a par ailleurs défini cinq autres situations dans lesquelles les voyageurs s’étant rendus dans les quatre pays visés pourront éventuellement continuer à bénéficier de l’exemption de visa.
                
                Ces situations concernent les déplacements :
                
                en mission officielle au nom d’une organisation internationale, régionale ou infranationale ;
                en mission officielle au nom d’une organisation humanitaire ;
                en tant que journaliste ;
                pour l’Iran, pour des raisons d’affaires légitimes, si le déplacement a eu lieu après le 14 juillet 2015 ;
                pour l’Irak, pour des raisons d’affaires légitimes.
                Pour ces situations, le maintien de l’exemption de visa sera décidé au cas par cas. Compte tenu des délais d’obtention de cette exemption, il est recommandé d’entreprendre les démarches pour obtenir les garanties nécessaires des services consulaires américains au moins deux mois en avance.
                
                Selon les autorités américaines, les voyageurs ayant déclaré la nationalité d’un de ces sept pays et bénéficiant déjà d’une ESTA seront informés par courriel de sa révocation, et invités à solliciter un visa.
                
                Il est fortement recommandé aux autres personnes concernées par la réforme qui envisagent un déplacement à court terme aux États-Unis d’effectuer dès que possible une demande de visa. Pour les personnes bénéficiant actuellement d’une ESTA, il est possible de vérifier son statut à cette adresse (multilingue).
                
                Les voyageurs concernés par ces restrictions, envisageant un déplacement aux États-Unis à plus long terme sont invités à consulter, avant de réserver leur billet d’avion, le site Internet de l’ambassade des États-Unis pour se tenir informés des changements en cours.
                
                Restrictions du VWP
                Le moindre dépassement du délai de séjour autorisé au titre du VWP lors d’un voyage aux États-Unis entraîne le refoulement immédiat du territoire et, en général, l’interdiction d’entrer de nouveau sur le sol américain pour une durée pouvant être de plusieurs années. Un nouvel ESTA ne serait donc plus délivré. Les voyageurs ayant contrevenu à cette obligation et interdits d’ESTA devront demander un visa touristique s’ils souhaitent à nouveau se rendre aux États-Unis.
                
                Il ne permet pas l’exercice d’une activité professionnelle (rémunérée ou non). En effet, tout Français souhaitant travailler doit être muni, au départ de France, d’un visa l’autorisant à occuper un emploi défini.
                Les services d’immigration américains font preuve d’une très grande vigilance en ce qui concerne l’application de la réglementation qui interdit d’exercer une activité professionnelle, rémunérée ou non. Il est donc vivement recommandé aux ressortissants français entrant aux États-Unis à des fins touristiques ou linguistiques d’éviter de se munir ou de transporter tout ce qui pourrait créer un malentendu ou un soupçon sur les motifs de leur séjour, et qui pourrait laisser penser qu’ils viennent dans un autre but que celui déclaré.
                
                Le VWP ne permet en aucun cas de s’inscrire comme étudiant, sous peine de rétention administrative. Les questionnaires à remplir avant d’entrer sur le territoire américain doivent être renseignés avec précision.
                
                Toute violation de la législation en vigueur expose son auteur à une expulsion et à une interdiction d’accès au territoire américain pendant plusieurs années.
                
                Il ne permet pas de changement de statut sur place (exemple : obtention d’un visa pour poursuivre des études ou exercer une activité professionnelle).
                
                Séjour avec visa
                Un voyageur n’entrant pas strictement dans le cadre du VWP ou n’ayant pu obtenir l’ESTA doit solliciter un visa. Il est recommandé de déposer sa demande plusieurs mois avant la date de départ, compte tenu des délais de traitement.
                
                Aux États-Unis, la famille pouvant accompagner un détenteur de visa s’entend uniquement comme le conjoint marié et les enfants célibataires. Le conjoint de fait, y compris pacsé, n’est pas reconnu par les services d’immigration américains et doit soit voyager dans le cadre du VWP dans les conditions mentionnées ci-dessus, soit faire une demande de visa qui sera traitée individuellement.
                
                Les Français doivent donc obtenir un visa de la part des autorités consulaires américaines pour se rendre aux États-Unis :
                
                pour un transit ou un séjour inférieur à 90 jours dès lors que l’on ne dispose pas du type de passeport exigé dans le cadre du VWP ;
                pour un séjour d’une durée supérieure à 90 jours ;
                pour des séjours dont l’objet n’est ni touristique ni d’affaires, mais correspond à l’exercice d’une activité professionnelle, d’un stage ou d’études.
                NB  : une visite médicale est obligatoire pour les étrangers qui sollicitent un visa de long séjour aux États-Unis. Toute personne atteinte d’une maladie contagieuse induisant une menace pour la santé publique peut se voir refuser le visa.
                
                Recommandations
                Selon la loi américaine, la validité du passeport d’un ressortissant étranger doit couvrir une période de six mois au-delà de la date prévue pour son départ des États-Unis.
                
                Cependant, les États-Unis ont signé des accords avec plusieurs pays, dont la France, aux termes desquels leurs ressortissants sont exempts de l’obligation des 6 mois et doivent uniquement présenter un passeport valide couvrant la durée de leur séjour aux États-Unis.
                Plus d’informations sur le site de l’ambassade des États-Unis à Paris.
                Toutefois pour éviter toute complication, il est conseillé, à titre de précaution, de disposer d’un passeport présentant une validité d’au moins 6 mois à la date prévue pour son départ des États-Unis, même pour les détenteurs de visa de longue durée en cours de validité : de fortes amendes ont déjà été constatées (supérieures à 500 USD).
                
                Il convient de ne pas plaisanter avec les officiers de CBP (Customs and Border Protection, service des douanes et de la protection des frontières) ou les policiers. Des propos, attitudes ou plaisanteries qui pourraient sembler anodins dans certains pays peuvent conduire aux États-Unis à l’arrestation immédiate et à des poursuites en justice.
                
                Refus d’admission ou de visa
                En cas de refus d’admission ou de visa, le Department of Homeland Security invite les voyageurs estimant avoir été injustement traités à introduire une réclamation en ligne sur le site du DHS (procédure TRIP : Travelers Redress Inquiry Program, en anglais).
                
                Travail contre hébergement ou « Wwoofing »
                Il n’est pas possible de se rendre aux États-Unis avec un Esta ou un visa touristique pour travailler contre un hébergement (faire du « wwoofing »). Même si cette activité n’est pas rémunérée, elle est malgré tout considérée comme un emploi et requiert par conséquent l’obtention d’un visa de travail. Exercer cette activité sans autorisation de travail expose à un refus d’admission par les services d’immigration américains et à un refus d’Esta pour des séjours ultérieurs.
                
                Règlementation douanière
                Les sommes supérieures à 10 000 USD doivent être déclarées à la douane.
                
                La douane américaine est très vigilante sur les produits alimentaires : l’entrée avec des produits non stérilisés (tels que fromages ou charcuterie) des fruits ou des plantes vertes est rigoureusement interdite.
                En savoir plus sur le site Internet des Douanes américaines et du Ministère de l’Agriculture américain (USDA APHIS | Information for International Travelers).
                
                Les contraintes liées à la possession d’un animal domestique étant rigoureuses, il est préférable de consulter l’ambassade des États-Unis d’Amérique avant tout projet de voyage ou de séjour accompagné d’un animal domestique.
                En savoir plus sur le site Internet du ministère américain de l’agriculture.
                
                Plus d’informations sur le site Internet des douanes américaines.',
            ],
            [
                'country' => 'Royaume-Unis',
                'rules' => 'Formalités d’entrée et de séjour
                SIGNALÉ : Les voyageurs français et européens doivent disposer d’un passeport valide pour entrer au Royaume-Uni. Seuls les résidents bénéficiaires de l’Accord de retrait du Royaume-Uni de l’Union européenne, éligibles au (pre)settled status, peuvent continuer à utiliser une carte d’identité, au moins jusqu’en 2025.
                
                Documents de voyage
                Depuis le 31 janvier 2020, le Royaume-Uni ne fait plus partie de l’Union Européenne.
                
                Pour entrer au Royaume-Uni, le voyageur européen doit comme auparavant être muni d’un passeport ou d’une carte nationale d’identité (à condition de bénéficier du statut de résident européen au Royaume-Uni) en cours de validité.
                
                Important : les voyageurs munis de titres d’identité et de voyage qui auraient été déclarés perdus ou volés se voient systématiquement retirer le document par les autorités britanniques en charge du contrôle des frontières (Border Force). Il est impératif de ne pas tenter de circuler entre la France et le Royaume-Uni avec un titre de voyage déclaré perdu ou volé (et donc invalidé).
                
                Depuis le 1er janvier 2021, fin de la période de transition, il est toujours possible d’entrer sur le territoire britannique sans visa, pour une durée de six mois maximum, dans le cadre d’un séjour touristique ou d’une visite à des parents ou amis, ou pour la plupart des déplacements ponctuels dans le cadre d’une activité professionnelle.
                
                Davantage de précisions sont disponibles sur cette page (en anglais)
                
                En revanche, un visa de long séjour est nécessaire si l’on souhaite se rendre au Royaume-Uni pour y travailler, y étudier, ou s’y installer.
                
                Afin de vérifier si la nature du séjour nécessite un visa, il convient de consulter : https://www.gov.uk/check-uk-visa (en anglais)
                
                Pour les ressortissants européens déjà résidents au Royaume-Uni avant le 31 décembre 2020, éligibles au statut de résident européen (« settled status »), les règles de circulation entre la France et le Royaume-Uni restent inchangées après le 31 décembre 2020.
                
                En savoir plus :
                
                Brexit en pratique
                Validité de la carte nationale d’identité
                Pour les ressortissants européens non-résidents au Royaume-Uni au 31 décembre 2020, il n‘est plus possible d’entrer sur le territoire britannique avec une carte d’identité, même valide, depuis le 1er octobre 2021. En revanche, les Français résidents au Royaume-Uni avant le 31 décembre 2020, et à condition qu’ils aient obtenu le statut de résident européen, peuvent continuer à circuler avec une CNI valide jusqu’au 31 décembre 2025 au moins. Dans la perspective des contrôles automatisés, il est vivement recommandé aux résidents détenteurs du (pre-)settled status, de voyager avec celui de leurs documents de voyage qui est lié à ce statut.
                
                Facilitation des voyages scolaires entre la France et le Royaume-Uni
                A compter du 28 décembre 2023, les élèves jusqu’à 18 ans inclus scolarisés dans un établissement reconnu par l’Education nationale pourront voyager au Royaume-Uni dans les conditions suivantes, dès lors qu’ils participent à un voyage scolaire (durée inférieure à 6 mois) :
                
                Munis d’une carte nationale d’identité, dont la validité couvre la durée du séjour, s’ils sont de nationalité française ou ressortissants d’un autre pays de l’Union européenne, de l’Espace économique européen ou de Suisse ;
                Munis de leur passeport, dont la validité couvre la durée du séjour, s’ils sont ressortissants de pays tiers, mais désormais dispensés de visa si leur nationalité les soumet à cette obligation.
                Les établissements sont dorénavant tenus de dresser la liste des élèves participant à un voyage scolaire au Royaume-Uni via ce formulaire.
                
                En savoir plus :
                
                https://www.gov.uk/guidance/visit-the-uk-as-part-of-a-french-school-trip (en anglais)
                Académie de Paris : Voyages scolaires
                Ministère de l’éducation nationale : Transport et encadrement des élèves dans le cadre des sorties et voyages scolaires dans les premier et second degrés
                Mesures liées au Covid-19
                Toutes les mesures de restrictions sanitaires pour l’entrée sur le territoire ont été levées.
                
                Règlementation douanière
                A l’arrivée en Grande Bretagne, des franchises douanières et fiscales en quantités et en valeurs sont applicables selon les catégories de marchandises transportées.
                
                Ces franchises signifient que l’on peut faire entrer en Grande-Bretagne (Angleterre, Écosse et Pays de Galles) une certaine quantité de marchandises pour son propre usage en provenance de l’étranger sans payer de droits ou de taxes. Attention, des règles spécifiques peuvent s’appliquer à l’Irlande du Nord.
                
                Pour cela, il faut :
                
                transporter ces marchandises soi-même ;
                utiliser soi-même ces marchandises ou les offrir en cadeau.
                Ces franchises ne peuvent pas être ajoutées à celles d’autres personnes pour apporter plus que l’allocation individuelle.
                
                En cas de dépassement des limites de la franchise, il convient de faire une déclaration en douane pour toutes les marchandises de cette catégorie. Les marchandises pourraient être saisies si elles ne sont pas déclarées.
                
                Pour les boissons alcoolisées
                La quantité maximum qui peut être apportée en franchise dépend du type de boisson :
                
                bière - 42 litres ;
                vin (non pétillant) - 18 litres.
                Peuvent également être apportés :
                
                soit des spiritueux et autres boissons alcoolisées à plus de 22 % d’alcool - 4 litres ;
                soit un vin fortifié (par exemple porto, sherry), vin mousseux et boissons alcoolisées jusqu’à 22% d’alcool - 9 litres.
                Cette dernière franchise peut être partagée, par exemple 4,5 litres de vin fortifié et 2 litres de spiritueux (la moitié de l’allocation dans les deux cas).
                
                Au-delà de ces quantités, des droits d’accises, la TVA et les droits de douane sur l’alcool déclaré s’appliquent.
                
                Pour le tabac
                La quantité maximum qui peut être apportée en franchise est la suivante :
                
                200 cigarettes
                ou
                100 cigarillos
                ou
                50 cigares
                ou
                250g de tabac
                ou
                200 bâtonnets de tabac à chauffer
                Cette franchise peut être partagée - par exemple, 100 cigarettes et 25 cigares (la moitié de l’allocation dans les deux cas).
                
                Au-delà de ces quantités, des droits d’accises, la TVA et les droits de douane sur le tabac déclarés s’appliquent.
                
                Pas de franchises pour les boissons alcooliques et le tabac pour les personnes de moins de 17 ans
                
                Il n’y a pas de franchises pour le tabac et les boissons alcooliques pour les personnes de moins de 17 ans.
                
                Il peut être apporté de l’alcool et du tabac au Royaume-Uni pour son propre usage, mais en payant des droits ou des taxes sur ces produits en utilisant un service en ligne (en anglais) pour les passagers.
                
                Pour les autres marchandises / franchise en valeur
                Des franchises en valeur sont possibles, si les marchandises achetées ou offertes sont transportées avec soi, sans avoir ni de déclaration à effectuer ni de droits et taxes à payer. En effet, les marchandises (y compris les cadeaux) ne doivent pas être déclarées si leur valeur totale ou si leur quantité ne dépasse pas les franchises autorisées.
                
                La valeur marchande globale des biens ne doit cependant pas excéder le montant maximum de 390 £ (ou jusqu’à 270 £ pour une arrivée par avion ou bateau privé). Si les franchises sont dépassées, dans ce cas des droits et taxes sont potentiellement exigibles sur la valeur totale des biens (et non pas seulement sur la valeur excédant la franchise).
                
                Il est possible de vérifier les franchises, simuler les droits et taxes exigibles, faire une déclaration en douane et payer les droits et taxes en utilisant un service en ligne (en anglais) pour les passagers.
                
                Pour plus d’informations (en anglais) : Bringing goods into the UK for personal use
                
                Attention, des règles spécifiques peuvent trouver à s’appliquer pour l’Irlande du Nord. Pour plus d’informations (en anglais) : Bringing goods into the UK for personal use : Arriving in Northern Ireland
                
                L’attention des voyageurs est appelée sur leur retour de voyage, des franchises étant également applicables à l’entrée dans l’Union Européenne. Pour plus d’informations, consulter le site Internet de la douane
                
                Marchandises prohibées
                Certains produits ne peuvent pas être importés sur le territoire britannique :
                
                les drogues illicites ;
                les armes offensives, y compris les armes blanches (la violation des dispositions légales applicables peut justifier le prononcé de sanctions pouvant aller jusqu’à 10 ans d’emprisonnement) ;
                les sprays d’autodéfense ;
                les espèces animales et végétales menacées ;
                les diamants bruts ;
                les matériaux indécents et obscènes ;
                les importations personnelles de viande et de produits laitiers en provenance de la plupart des pays non membres de l’UE.
                Certaines autres marchandises sont très strictement contrôlées (armes à feu, explosifs et munitions) et une licence spéciale pour les amener au Royaume-Uni devra être présentée.
                
                Pour plus d’informations (en anglais).
                
                Médicaments
                Les voyageurs doivent être en mesure de présenter la prescription de tout médicament, particulièrement s’ils contiennent une substance contrôlée. Une autorisation peut également être nécessaire.
                
                Pour plus d’informations (en anglais).
                
                Animaux de compagnie
                L’entrée au Royaume-Uni des chats, chiens ou furets est autorisée, dans la limite de 5 animaux, sous certaines conditions :
                
                ils doivent être identifiés à l’aide d’une puce électronique ;
                ils doivent posséder un passeport britannique ou européen pour animaux de compagnie ou un certificat vétérinaire officiel si l’animal provient d’un pays tiers (hors Union européenne, Suisse, Norvège et Liechtenstein) ;
                leur vaccination contre la rage doit être à jour ;
                les chiens doivent également être traités contre le ténia, entre 24h et 5 jours avant l’entrée au Royaume-Uni. Le traitement doit être administré par un vétérinaire et attesté dans le passeport ou le certificat vétérinaire de l’animal.
                Attention : les animaux de compagnie peuvent être mis en quarantaine jusqu’à 4 mois, à la charge de leur propriétaire, en cas du non-respect de l’ensemble des règles en vigueur.
                
                En revanche, pour revenir en France avec un animal de compagnie, les règles sont différentes. Seul un passeport délivré par un pays de l’Union européenne est accepté.
                
                Si l’animal dispose bien d’un passeport délivré dans un État membre de l’Union européenne et que la vaccination contre la rage a bien été effectuée dans un État membre de l’Union européenne, il n’y a pas d’autre formalité à effectuer.
                
                Le passeport délivré par un vétérinaire britannique n’est pas suffisant pour revenir dans l’Union européenne. Dans ce cas il faut également se procurer un certificat sanitaire pour chaque animal de compagnie, délivré par un vétérinaire officiel établi au Royaume-Uni. Le certificat sanitaire doit être accompagné du justificatif de vaccination contre la rage ainsi que d’un document attestant de l’identification de l’animal de compagnie. Le certificat sanitaire est valable pour une période de 10 jours à compter de sa date de délivrance et doit être présenté lors des contrôles aux frontières pendant cette période. Le certificat sanitaire est valable sur le territoire de l’UE et de l’Irlande du Nord pour une période de quatre mois.
                
                L’Eurostar n’accepte pas le transport des animaux vers le Royaume-Uni. Leur transport peut s’effectuer par un véhicule personnel ou avec certaines compagnies aériennes.
                
                Liste des compagnies aériennes et compagnies maritimes acceptant les animaux de compagnie (en anglais).
                
                Eurotunnel dispose également d’une page dédiée au transport des animaux de compagnie empruntant le Shuttle.',
            ],
            [
                'country' => 'Allemagne',
                'rules' => 'Formalités d’entrée
                L’Allemagne étant membre de l’Union européenne, les ressortissants français peuvent y entrer librement munis d’un passeport ou d’une carte nationale d’identité.
                
                Il est possible de voyager entre la France et l’Allemagne avec une nouvelle carte d’identité (format carte bancaire) ou avec une ancienne carte (plastifiée bleue).
                
                Il est possible de voyager entre la France et l’Allemagne avec un passeport français valide ou périmé depuis moins de 5 ans (accord européen sur le régime de la circulation des personnes entre les pays membres du Conseil de l’Europe). Les voyageurs au départ ou en transit dans les aéroports allemands et notamment à Francfort, doivent être en possession de documents de voyage en cours de validité et autorisant l’entrée dans les pays de destination : carte nationale d’identité ou passeport, voire visa. Il convient de consulter les Conseils aux voyageurs du pays de destination. A défaut, les autorités de police n’autorisent pas les voyageurs à embarquer.
                
                Les autorités allemandes confisquent systématiquement les passeports et cartes d’identité qui auraient été déclarés perdus ou volés, puis retrouvés et utilisés pour voyager.
                
                Pour un séjour de plus de trois mois, les ressortissants européens peuvent prouver leur droit au séjour sur présentation d’une attestation de domicile (Anmeldebestätigung) et d’une carte nationale d’identité ou d’un passeport en cours de validité.
                
                Extension de la validité des CNI
                Les cartes nationales d’identité françaises (CNI) délivrées à des personnes majeures entre le 1er janvier 2004 et le 31 décembre 2013 sont encore valables 5 ans après la date de fin de validité indiquée au verso, mais aucune modification matérielle de la carte plastifiée n’atteste de cette prorogation.
                Les autorités allemandes ont accepté officiellement cette prorogation.
                Si vous voyagez uniquement avec votre ancienne carte d’identité automatiquement prolongée de 5 ans, vous pouvez télécharger et imprimer la notice multilingue (PDF, 81 ko) expliquant ces règles.
                
                Mesures liées au Covid
                Toutes les mesures de restrictions sanitaires pour l’entrée sur le territoire ont été levées.',
            ],
            [
                'country' => 'Pays-Bas',
                'rules' => 'Formalités d’entrée
                Les Pays-Bas étant membre de l’Union européenne, les ressortissants français peuvent y entrer librement munis d’un passeport ou d’une carte nationale d’identité en cours de validité.
                
                Les cartes nationales d’identité (CNI) françaises délivrées entre le 1er janvier 2004 et le 31 décembre 2013 à des personnes majeures sont encore valables 5 ans après la date de fin de validité indiquée au verso, même si aucune modification matérielle de la carte plastifiée n’en atteste. Les CNI délivrées aux personnes mineures conservent, elles, une validité limitée à 10 ans, quelle que soit la date de délivrance.
                
                En conséquence, de façon à éviter tout désagrément pendant le voyage, il est recommandé de privilégier l’utilisation d’un passeport ou d’une CNI valides à celle d’une CNI portant une date de fin de validité dépassée, même si elle est considérée par les autorités françaises comme étant toujours en cours de validité.
                
                En cas de contrôle par les autorités néerlandaises pendant le séjour (contrôle de police de routine, interpellation), une CNI portant une date de fin de validité dépassée ne sera pas acceptée et le fait de ne pas avoir, sur soi, une pièce d’identité en cours de validité est passible d’une amende.
                
                En cas de voyage uniquement avec une carte nationale d’identité, télécharger et imprimer la notice multilingue (PDF - 81,9 Ko) expliquant ces nouvelles règles. Cette notice n’est cependant pas acceptée de manière systématique. La détention d’un passeport reste donc recommandée.
                
                Voyageurs en transit à l’aéroport d’Amsterdam-Schiphol
                Les voyageurs au départ ou en transit à l’aéroport d’Amsterdam-Schiphol doivent être en possession de documents de voyage en cours de validité et autorisant l’entrée dans les pays de destination : carte nationale d’identité ou passeport, voire visa et/ou document complémentaire, selon le cas. À défaut, les compagnies aériennes n’autorisent pas les voyageurs à embarquer. Aucune exception n’est tolérée, pour quelque motif que ce soit. Il convient de se renseigner auprès de la représentation diplomatique ou consulaire du pays de destination.
                
                Territoires néerlandais d’outre-mer
                Le passeport est obligatoire pour l’accès aux îles néerlandaises de Curaçao, Sint Maarten, Aruba (États du Royaume des Pays-Bas), Bonaire, Saba et Saint-Eustache (communes à statut particulier), qui ne relèvent pas de l’espace Schengen.
                
                Les ressortissants français qui se rendent à Saint-Martin par la voie aérienne doivent également être munis d’un passeport, l’aéroport international Princess Juliana qui dessert la collectivité d’outre-mer française étant situé côté néerlandais (Sint Maarten).
                Consultez la fiche Pays-Bas sur France-Visas pour plus d’informations sur les visas et sur le régime spécial applicable aux personnes se trouvant aux Pays-Bas outre-mer.
                
                Mesures liées au Covid
                Toutes les mesures de restrictions sanitaires pour l’entrée sur le territoire ont été levées.
                
                Pour la partie caribéenne du Royaume des Pays-Bas (Sint Maarten, Aruba, Curaçao)
                Les voyages depuis la France vers la partie caribéenne des Pays-Bas (Sint Maarten, Aruba, Curaçao) sont soumis aux mêmes règles que les voyages depuis la France métropolitaine vers un pays extérieur à l’Union européenne, ces territoires ne faisant pas partie de l’Union européenne. Il convient de consulter le site du ministère de l’Intérieur.
                
                a. Depuis le 01/11/2022, les autorités de Sint Maarten n’imposent plus aucune restriction ou condition en lien avec la Covid aux voyageurs arrivant sur le territoire.
                
                Le site du gouvernement de Sint Maarten fournit des précisions en anglais sur les mesures en vigueur sur le territoire de Sint Maarten.
                
                b. Les voyages depuis les Pays-Bas (partie européenne) vers Aruba imposent la fourniture d’une déclaration sur l’honneur sur l’état de santé du voyageur à compléter sous 7 jours avant l’arrivée à Aruba (quel que soit l’âge du voyageur) et par lequel le voyageur autorise le gouvernement d’Aruba par ailleurs à prendre certaines décisions dans le cadre de la Covid-19 (« consent to Aruba Government Mandates »).
                
                Le site du gouvernement d’Aruba fournit des précisions en anglais sur les mesures en vigueur sur le territoire d’Aruba.
                
                c. Les voyages depuis les Pays-Bas (partie européenne) vers Curaçao imposent la fourniture d’une carte d’immigration et de localisation des passagers pour la santé publique à compléter sous 7 jours avant l’arrivée à Curaçao (quel que soit l’âge du voyageur).
                
                Le site du gouvernement de Curaçao fournit des précisions en anglais sur les mesures en vigueur sur le territoire de Curaçao.
                
                Mesures et recommandations
                Le port du masque dans les aéroports néerlandais n’est pas obligatoire. L’obligation du port du masque à bord des avions dépend de la destination et est laissée à l’appréciation des compagnies aériennes.
                Dans les hôpitaux, Ehpads et établissements de santé, l’obligation du port du masque est également laissée à l’appréciation des établissements.
                
                Consulter le site du Consulat général de France à Amsterdam et le site du gouvernement néerlandais pour toutes les informations sur les mesures et recommandations valables à l’intérieur des Pays-Bas.
                
                FAQ du gouvernement néerlandais à l’attention des touristes.
                
                Il convient de s’informer sur l’évolution de la situation sanitaire et les consignes des autorités locales, notamment sur le site de l’institut national pour la santé publique et l’environnement avant d’envisager un déplacement dans le pays, notamment en consultant le site du consulat général de France à Amsterdam.',
            ],
            [
                'country' => 'Australie',
                'rules' => 'Mesures liées au Covid
                Toutes les mesures de restrictions sanitaires pour l’entrée sur le territoire ont été levées.
                
                Transit aéroportuaire :
                le transit de moins de 8 heures au sein de la zone internationale d’un aéroport australien ne nécessite pas de visa ni d’autorisation spécifique pour les ressortissants français ;
                pour les transits dont la durée est de 8 à 72 heures, il convient de demander un visa de transit 771 et de se référer aux consignes des autorités australiennes de l’immigration qui sont régulièrement actualisées ;
                Il est recommandé de suivre les consignes des autorités locales et de consulter le site internet du Consulat général de France à Sydney.
                
                Plus d’informations et recommandations sur la fiche Coronavirus et sur la page Risques sanitaires / Coronavirus.
                
                Formalités d’entrée
                Les ressortissants français doivent être en possession d’une autorisation électronique de voyage (eVisitor) ou d’un visa. Les autorités australiennes ont généralisé le visa électronique (e-visa). Aucune vignette n’est apposée dans le passeport, la délivrance du visa demandé étant notifiée par messagerie électronique (courriel précisant la date de délivrance ainsi que les caractéristiques du visa).
                
                Consulter la rubrique du site Internet du ministère australien de l’Immigration (en anglais) afin de prendre connaissance des conditions d’entrée et de séjour et d’effectuer une demande de visa ou d’autorisation de voyage.
                
                Important
                L’ambassade d’Australie à Paris ne traite plus les demandes de visa. Il est néanmoins possible de consulter son site Internet pour tout renseignement utile.
                
                Les conditions d’entrée et de séjour sur le territoire australien relevant de la compétence exclusive des autorités du pays, les représentations diplomatique et consulaire françaises en Australie ne se reconnaissent ni droit d’ingérence ni faculté d’intervention en ce domaine.
                
                Il est donc fortement recommandé d’anticiper sa demande de visa en fonction de ses dates de séjour.
                
                1/ eVisitor (subclass 651)
                Pour un séjour d’une durée maximale de 3 mois (tourisme, voyage d’affaires, visite privée ou familiale), le détenteur d’un passeport français doit être en possession d’une autorisation électronique de voyage (eVisitor).
                La demande s’effectue en ligne sur le site Internet du ministère australien de l’Immigration (en anglais).
                
                Aucune vignette n’est apposée dans le passeport mais un courriel de confirmation, précisant la date de délivrance et les conditions liées au visa, est transmis au demandeur.
                Une demande d’eVisitor doit être formulée pour chaque membre d’une famille, y compris les enfants, qu’ils disposent de leur propre passeport ou qu’ils figurent sur le passeport de l’un des parents.
                L’intéressé doit voyager avec le passeport déclaré lors de la demande d’eVisitor ; en cas de délivrance d’un nouveau titre de voyage, le détenteur doit en informer sans délai -et en tout état de cause avant la date de son voyage- les autorités australiennes.
                Pour un séjour touristique d’une durée supérieure à 3 mois, la demande d’un visa visitor (subclass 600) doit être privilégiée.
                
                2/ Working Holiday Visa / Visa vacances-travail (subclass 417)
                Se référer à la rubrique correspondante figurant sur le site du ministère australien de l’Immigration (en anglais).
                
                Depuis le 1er juillet 2019, l’âge limite de dépôt d’une demande de visa vacances-travail est passé de 30 à 35 ans (inclus) pour les ressortissants français.
                
                Important
                Il est fortement déconseillé de solliciter un deuxième ou troisième Working Holiday Visa (lesquels sont soumis à des conditions strictes d’éligibilité) sur la base de fausses déclarations. La coopération entre les différentes administrations australiennes étant particulièrement efficace, les personnes se risquant à frauder sont systématiquement appréhendées à leur arrivée en Australie et placées dans un vol retour sur la France dans les 72 heures.
                
                3/ Autres visas
                Se référer au site Internet du ministère australien de l’Immigration (en anglais).
                
                Réglementation douanière
                La politique des autorités australiennes en matière d’importation d’articles et de produits, notamment alimentaires, étant très stricte, il est fortement conseillé de prendre connaissance de la réglementation en vigueur avant son départ.
                
                La « carte passager »
                Lors de l’arrivée en Australie, tout passager doit renseigner la « carte passager » à l’arrivée (Incoming passenger card).
                Cette carte, généralement remise dans l’avion par le personnel navigant, doit être renseignée soigneusement, sans oubli et avec honnêteté ; dans le doute, il est fortement conseillé de déclarer.
                La « carte passager » est présentée avec le passeport aux autorités douanières.
                
                Franchises douanières
                Valeur maximale de 900 A$ (et 450 A$ pour une personne mineure) de marchandises courantes (souvenirs, appareil photo, équipement électronique, produits en cuir, parfum, bijoux, montre, équipements de sport).
                
                Uniquement autorisés aux personnes majeures :
                
                2,25 litres d’alcool ;
                25 grammes de tabac ou 25 cigarettes, et un paquet ouvert.
                Informations détaillées et actualisées sur le site du ministère australien de l’Intérieur (en anglais).
                
                Important
                En cas de dépassement des franchises douanières autorisées, les droits et taxes à acquitter portent sur la totalité des articles de la catégorie concernée (marchandises courantes, alcool, tabac, etc.) et non sur les articles excédant la franchise.
                
                Demande de remboursement
                Au départ de l’Australie, il est possible de faire une demande de remboursement de la taxe sur les biens et services (GST) et de la taxe sur les vins (WET) dans le cadre du TRS (Tourist Refund Scheme). Consulter la page dédiée du site Internet du ministère australien de l’Intérieur (en anglais).
                
                Plus d’informations sur le site Internet du ministère australien de l’Intérieur (en anglais).',
            ],
            [
                'country' => 'Brésil',
                'rules' => 'Mesures liées à la Covid-19
                Comme mentionné sur le site du Consulat général du Brésil à Paris, toutes les mesures de restriction sanitaire pour l’entrée sur le territoire ont été levées.
                
                Formalités d’entrée et séjour
                Les Français sont dispensés de visa pour tout séjour inférieur à 90 jours. Le passeport doit avoir une validité de six mois au minimum. Tout voyageur doit être muni d’un billet de retour ou de sortie du territoire brésilien.
                
                Depuis le 12 janvier 2024, le Brésil a modifié sa législation concernant le régime de séjour sur son territoire pour les étrangers.
                Un ressortissant français peut donc séjourner au Brésil au maximum 90 jours sur une période de 180 jours, sans possibilité de renouvellement.
                En cas de non-respect de ces dispositions, les voyageurs s’exposent à un refus d’entrée sur le territoire, ou à une obligation de quitter le territoire.
                
                Cas des doubles nationaux (franco-brésiliens)
                Les Franco-Brésiliens sont soumis à la loi brésilienne s’ils se trouvent sur le territoire brésilien. Ils doivent à ce titre entrer et ressortir du territoire munis d’un passeport brésilien.
                
                Les enfants et les adolescents franco-brésiliens titulaires du nouveau modèle de passeport brésilien pour mineurs avec filiation et autorisation de voyage imprimées sur la page d’identité, désormais en circulation, peuvent voyager avec un seul de leurs deux parents, sans distinction. Les titulaires de modèles antérieurs doivent être munis d’une autorisation de voyage signée par les parents ou le représentant légal. Avant le voyage, il est vivement conseillé de vérifier l’application de ces modalités auprès du consulat général du Brésil à Paris.
                
                Règlementation douanière
                Animaux de compagnie
                En cas de séjour au Brésil avec un animal de compagnie venant de France, afin de pouvoir assurer son retour sur le territoire de l’UE, un titrage sérique (prélèvement sanguin permettant de s’assurer de l’efficacité de la vaccination de l’animal contre la rage) devra être effectué dans un laboratoire agréé par l’Union européenne avant le départ. Il devra donner un résultat supérieur à 0,5 UI, attestant ainsi de la couverture vaccinale de l’animal. Le résultat du titrage sérique restera valide la vie de l’animal durant, sous réserve que la vaccination contre la rage reste toujours en cours de validité. Ce titrage qui n’est pas obligatoire pour rentrer sur le territoire brésilien, permettra le retour de l’animal en Europe sans délai.
                
                En l’absence de ce titrage, ou pour un animal adopté lors du voyage, le prélèvement de sang devra être fait au Brésil (après identification de l’animal par puce et vaccination rage) et analysé dans un laboratoire agréé par l’Union européenne au moins trois mois avant le retour de l’animal.
                
                [Pour de plus amples informations, il convient de prendre l’attache du consulat général du Brésil à Paris ou sur le site de l’ambassade de France au Brésil.',
            ],
            [
                'country' => 'Canada',
                'rules' => 'Formalités d’entrée
                Avant tout déplacement au Canada, il convient de déterminer le type de séjour envisagé, en consultant le site Internet du ministère canadien de l’Immigration, des réfugiés et de la citoyenneté.
                Les agents d’Immigration Canada font preuve d’une grande vigilance et refusent l’entrée sur le territoire en cas de doute sur le motif du séjour et la probité des voyageurs. Ils ont tout pouvoir pour décider d’un refoulement immédiat à la frontière, éventuellement pour infliger une interdiction de territoire pour une durée donnée.
                Les services consulaires français ne peuvent en aucun cas intervenir dans une procédure de reconduite à la frontière, cette décision relevant de la seule appréciation des autorités canadiennes. Les questions posées sont très précises et ciblent les tentatives de détournement du séjour touristique à des fins de prospection d’emploi, d’emplois temporaires, d’études ou d’installation hors procédure d’immigration.
                
                Séjour sans visa
                Pour un séjour touristique ou d’affaires de moins de six mois, il n’y a pas d’obligation de visa pour les ressortissants français. Toutefois, toute personne exemptée de visa doit demander, suffisamment à l’avance, une autorisation de voyage électronique (AVE) sur le site officiel du gouvernement du Canada. L’AVE est valable pendant cinq ans. Liée électroniquement au passeport, elle prend fin au terme de la validité du passeport.
                
                Les voyageurs se rendant au Canada par voie terrestre ou maritime, les binationaux franco-canadiens (qui doivent disposer impérativement d’un passeport canadien valide) et les résidents permanents du Canada (qui doivent détenir une carte de résident permanent valide) ne sont pas concernés par l’AVE.
                Il est conseillé aux voyageurs qui demandent une AVE de faire preuve de vigilance à l’égard des compagnies qui prétendent offrir une aide (payante) pour l’obtention de l’autorisation de voyage électronique.
                L’AVE ne vaut pas permis d’études ou de travail au Canada.
                
                Séjour avec visa
                Un permis de travail est requis pour :
                
                exercer une activité professionnelle (y compris garde d’enfants, vente, restauration, concerts ou autres activités artistiques) ;
                effectuer un stage, rémunéré ou non (le stage est assimilé à un travail).
                Un permis d’études est requis pour toute personne souhaitant suivre des études au Canada.
                
                Depuis le 31 juillet 2018, les personnes souhaitant un visa de visiteur, un permis d’études, un permis de travail ou la résidence permanente doivent fournir leurs données biométriques dans le cadre de la procédure de demande.
                
                Règlementation douanière
                Voyager avec des animaux de compagnie
                L’Agence canadienne d’inspection des aliments (ACIA) est chargée de déterminer les conditions d’importation des animaux et produits animaux entrant sur le territoire canadien, y compris les animaux de compagnie. Ces règles s’appliquent aux animaux entrant de façon permanente, pour une visite temporaire ou en transit.
                
                À leur entrée sur le territoire canadien, les voyageurs doivent déclarer l’ensemble des animaux qui les accompagnent et avoir en leur possession les certificats requis pour leur entrée.
                
                Il relève de la responsabilité des voyageurs de déterminer si leur animal de compagnie est visé par les contrôles prévus par la Convention sur le commerce international des espèces de faune et de flore sauvages menacées d’extinction et de s’assurer qu’ils possèdent les permis et certificats demandés.
                
                Les chiens et les chats doivent satisfaire aux conditions suivantes :
                
                Chiens domestiques
                Les chiens de compagnie peuvent être admis au Canada sans mise en quarantaine. L’identification par puce ou tatouage n’est pas exigée.
                Les chiens doivent répondre à toutes les exigences de vaccination selon leur âge.
                
                Chiens âgés de 3 mois ou moins : la vaccination contre la rage ou la présentation d’un certificat attestant que le chien provient d’un pays exempt de la rage n’est pas exigée. Cette dispense s’applique aussi au chien-guide, au chien pour malentendants et au chien d’assistance lorsque la personne qui l’importe en est l’utilisateur.
                Chiens âgés de plus de 3 mois : la France ne faisant pas partie des pays que le Canada reconnaît comme exempts de la rage, l’animal doit être en possession d’un certificat original de vaccination contre la rage en cours de validité et établi par un vétérinaire.
                Si le chien ne voyage pas avec soi et qu’il est âgé de moins de huit mois, il doit être muni d’un certificat zoosanitaire délivré au cours des 72 heures précédant son entrée au Canada. Ce document atteste que l’animal était âgé d’au moins six semaines au moment de sa vaccination contre la maladie de Carré, le parvovirus, le virus parainfluenza et l’hépatite.
                
                A noter que, depuis 2005, l’Ontario interdit l’importation de pit-bulls.
                
                Chats domestiques
                Les chats de compagnie peuvent être admis au Canada sans mise en quarantaine. L’identification par puce ou tatouage n’est pas exigée.
                
                Chats âgés de moins de 3 mois : la vaccination contre la rage et la présentation d’un certificat ne sont pas exigées.
                Chats âgés de 3 mois ou plus : la France ne faisant pas partie des pays que le Canada reconnaît comme exempts de la rage, un certificat original de vaccination contre la rage en cours de validité ou établi par un vétérinaire doit être présenté.
                Les chiens et chats domestiques en provenance d’un pays autre que les États-Unis présentés à la frontière canadienne font l’objet d’une inspection de l’ACIA, pour laquelle des frais sont appliqués. Leur certificat fait également l’objet d’un contrôle.
                
                Pour plus d’informations, consulter le site de l’ACIA.
                
                Voyager avec des médicaments
                Il est possible d’entrer au Canada avec un cycle de traitement ou une provision de 90 jours d’un médicament prescrit sur ordonnance ou en vente libre. L’usage du médicament doit être personnel, ou celui-ci doit être destiné à une personne dont le voyageur a la charge et qu’il accompagne. La plus faible des deux valeurs (cycle / 90 jours) sera retenue selon le mode d’usage du médicament.
                
                Il convient de transporter le médicament avec son emballage d’origine (incluant la notice), dans le contenant fourni par l’hôpital ou la pharmacie. L’étiquette renseignant le produit et ses composants doit être attachée. Il est recommandé de voyager avec l’ordonnance correspondant au traitement prescrit et de ne pas emporter de fortes quantités de médicaments au risque d’être interrogé par le service des douanes.
                
                Il est conseillé de consulter au préalable la liste des drogues sur ordonnance au Canada
                
                Franchises douanières
                Une carte de déclaration de l’Agence des services frontaliers (ASFC) est remise à bord de l’avion et doit être remplie par le voyageur avant l’arrivée. Les voyageurs sont tenus de se présenter à leur arrivée au Canada à un agent des services frontaliers et de déclarer, le cas échéant, les marchandises dont ils sont en possession. Une estimation du montant en dollars canadiens des marchandises importées peut être demandée.
                
                Boissons alcoolisées
                Les voyageurs bénéficient d’une exemption personnelle qui leur permet d’importer des marchandises d’une certaine valeur sans avoir à payer des droits et taxes.
                A ce titre, ils ne sont autorisés à importer qu’une seule des quantités de boissons alcoolisées suivantes :
                
                Produit	Système métrique	Système impérial
                Vin	1,5 L maximum	53 onces liquides maximum
                Boissons alcoolisées	1,14 L (total)	40 onces liquides (total)
                Bière ou ale	8,5 L (total)	287 onces liquides (total)
                Si la quantité d’alcool importée excède l’exemption personnelle, des taxes et droits fédéraux ainsi que des prélèvements provinciaux ou territoriaux peuvent s’appliquer. Le voyageur doit également satisfaire au critère d’âge établi dans la province ou le territoire d’entrée.
                
                Produits du tabac
                Les voyageurs peuvent importer en franchise de droits et de taxes les quantités suivantes de produits de tabac, à condition qu’ils portent l’estampille « duty paid Canada droit acquitté ». En général, les produits du tabac comportant cette estampille sont vendus dans des boutiques hors taxes / duty free.
                
                Produits du tabac estampillés
                Produit	Quantité
                Cigarettes	200 cigarettes
                Cigares	50 cigares
                Tabac fabriqué	200 grammes (7 onces) de tabac fabriqué
                Bâtonnets de tabac	200 bâtonnets de tabac
                Produits du tabac non estampillés
                Un taux de droit spécial s’applique aux cigarettes, au tabac fabriqué et aux bâtonnets de tabac qui ne portent pas l’estampille « duty paid Canada droit acquitté ».
                
                Il existe des limites d’importation, en plus des montants de l’exemption personnelle, pour les produits du tabac non estampillés. La limite est de cinq unités de produits du tabac.
                Si les produits de tabac importés (estampillés ou non) excèdent l’exemption personnelle, le voyageur doit s’acquitter de droits et taxes et de tout prélèvement provincial ou territorial. Le voyageur doit par ailleurs avoir 18 ans pour introduire ces produits au Canada en vertu de son exemption.
                
                L’importation de certaines marchandises est réglementée ou prohibée au Canada.
                Les montants égaux ou supérieurs à 10 000 dollars canadiens (ou l’équivalent en devises étrangères) doivent être déclarés à l’ASFC par le voyageur à son arrivée et à son départ du Canada.
                
                Pour plus d’informations, consulter : https://www.cbsa-asfc.gc.ca/travel-voyage/ivc-rnc-fra.html.',
            ],
            [
                'country' => 'France',
                'rules' => 'Comment préparer sa visite ?
                Pour préparer votre séjour, le site France.fr (accessible en 15 langues) vous permet de partir à la découverte des trésors de la France métropolitaine et outre-mer. Les informations sont classées par destinations, par thèmes de séjours et abordent également l’organisation pratique du voyage (visas, transports, climat..).
                Ce site est développé par Atout France, opérateur national en matière de tourisme sous la tutelle du ministère de l’Europe et des Affaires étrangères.)',
            ],
            [
                'country' => 'Italie',
                'rules' => 'Formalités d’entrée
                Pour un séjour de trois mois maximum, les ressortissants français doivent être en possession d’une pièce d’identité (carte nationale d’identité ou passeport, à l’exclusion de tout autre document) en cours de validité. Cela s’applique également aux mineurs, le livret de famille n’étant pas un document de voyage.
                
                Mesures liées au Covid
                Pour les voyageurs en provenance de France, l’entrée sur le territoire italien n’est pas soumise à la présentation d’une preuve de vaccination ou de guérison, ni d’un test.
                
                Pour les voyageurs en provenance d’un autre pays que la France, les conditions d’entrée en Italie sont consultables sur le site du ministère italien des Affaires étrangères.
                
                Extension de la validité des CNI
                Les cartes nationales d’identité françaises (CNI) délivrées à des personnes majeures entre le 1er janvier 2004 et le 31 décembre 2013 sont encore valables 5 ans après la date de fin de validité indiquée au verso, mais aucune modification matérielle de la carte plastifiée n’atteste de cette prorogation.
                Les autorités italiennes ont accepté officiellement cette prorogation. Toutefois, de façon à éviter tout désagrément pendant votre voyage, il est fortement recommandé de préférer l’utilisation d’un passeport valide à celle d’une CNI portant une date de fin de validité dépassée, même si elle est considérée par les autorités françaises comme étant toujours en cours de validité.
                Les voyageurs ne disposant que d’une CNI, peuvent télécharger et imprimer la notice multilingue (PDF - 81,2 Ko) expliquant ces règles.
                
                Sortie des mineurs
                Pour les mineurs résidant en France : les autorités françaises exigent qu’un enfant mineur qui vit en France et voyage à l’étranger sans être accompagné par l’un de ses parents soit muni d’une autorisation de sortie du territoire (AST). En revanche, les autorités italiennes n’exigent pas cette autorisation pour ressortir du territoire.
                Pour les mineurs résidant en Italie : un enfant français qui vit habituellement en Italie et qui séjourne en France n’a pas besoin de fournir une attestation de sortie du territoire lorsqu’il quitte l’Italie ou la France. En revanche, il doit présenter une carte d’identité ou un passeport valide, où figure son adresse à l’étranger. La seule présentation de son livret de famille ne suffit pas.
                
                Animaux de compagnie
                Tout chien ou chat voyageant dans l’Union européenne doit être identifié (puce et/ou tatouage), vacciné valablement contre la rage et être accompagné d’un passeport européen fourni et rempli par un vétérinaire avant d’être transporté depuis la France vers l’Italie ou depuis l’Italie vers la France.
                
                Pour plus d’informations, réglementation sur les animaux de compagnie.'
            ],
            [
                'country' => 'Inde',
                'rules' => 'Formalités d’entrée
                Mesures sanitaires applicables à l’arrivée
                A ce stade, les voyageurs en provenance de la France ne sont plus obligés de se soumettre à un test PCR avant leur départ, ni de justifier d’un statut vaccinal.
                A leur arrivée en Inde, les voyageurs peuvent être soumis à un test de façon aléatoire.
                Les voyageurs présentant des symptômes à l’arrivée (y compris les enfants de moins de 5 ans) seront isolés et orientés vers un centre médical pour être testés ; Les voyageurs doivent surveiller l’apparition de symptômes durant les 14 jours suivant leur arrivée en Inde. Les voyageurs testés positifs seront isolés et orientés vers des établissements dédiés.
                Des mesures spécifiques peuvent être imposées à l’entrée en Inde par l’aéroport international de Bombay. Les mesures applicables et la liste des pays à risque sont susceptibles d’être modifiées à tout moment. Il convient donc de consulter régulièrement :
                
                le site de l’aéroport international de Bombay ;
                le site du ministère indien de l’Intérieur ;
                le site de l’ambassade de l’Inde en France ;
                le site du Bureau de l’immigration ;
                la rubrique « Formalités à accomplir avant de prendre l’avion » sur le site de l’ambassade de France en Inde.
                Visas
                Rappel : les Français sont soumis à visa pour séjourner en Inde. Les personnes arrivant sans visa en cours de validité sont refoulées par les autorités indiennes.
                
                Les visas touristiques (e-visa ou vignette) délivrés pour une durée de 5 ans avant mars 2020 sont à nouveau valides. Veillez à bien être muni de l’impression papier du visa.
                
                La délivrance des visas touristiques valables 5 ans (pour une durée de séjour inférieure à 180 jours par an) a repris.
                
                L’attention des voyageurs est attirée sur le fait qu’à ce stade, les e-visas touristiques permettent permettent de quitter l’Inde par ses frontières terrestres, mais ne permettent pas d’y revenir de la même manière, leur validité étant limitée à l’entrée en Inde via les ports maritimes et aéroports.
                
                Les étrangers doivent remplir les conditions pour lesquelles un type de visa leur a été attribué. Tout étranger arrivant sous couvert d’un visa valable pour une période de six mois maximum est dispensé de s’enregistrer auprès des services de l’immigration. Aucun visa « touriste » ne peut être prorogé. Un visa est accordé pour le seul objet au titre duquel il a été requis. Les procédures de modification de type de visa, lorsqu’elles existent, sont complexes et nécessitent la plupart du temps un retour dans le pays de résidence habituelle. Pour obtenir un visa, la date d’expiration du passeport doit être postérieure d’au moins 6 mois à la date de fin de validité du visa et le passeport doit comporter au moins deux pages vierges.
                
                Depuis 2015, les autorités indiennes ont mis en place un dispositif de délivrance de visa à l’arrivée, appelé « e-visa ».
                
                Ce « e-visa » doit être sollicité en ligne après un enregistrement de la demande sur le site
                et le paiement des frais de dossier. L’accord se matérialise par la réception d’une autorisation de voyage sous forme électronique (ETA : Electronic Travel Authorization) qu’il conviendra de présenter à l’aéroport d’arrivée pour obtenir l’apposition d’un visa dans son passeport. Il n’est valable que pour les demandeurs de visa touristique/affaires/conférence/traitement médical de courte durée, titulaires d’un passeport français d’une durée de validité d’au moins 6 mois à la date d’arrivée en Inde.
                
                Depuis le 1er avril 2017, ce dispositif a été modifié comme suit :
                
                Le e-visa a été divisé en 5 catégories : e-Tourist, e-Business, e-Conference, e-Medical attendant et e-Medical visas.
                Il concerne 24 aéroports (dont Bangalore, Bombay, Calcutta, Chennai, Delhi, Goa, Hyderabad, Kochi et Trivandrum) et 3 ports (Cochin, Goa et Mangalore).
                Il est possible de déposer sa demande entre 4 et 120 jours avant le départ (contre 30 jours auparavant).
                La première arrivée en Inde doit avoir lieu entre la date de début et la date de fin de l’ETA.
                Pour le visa e-Tourist (30 jours), la validité est de 30 jours à compter de la date de votre première arrivée en Inde. Il peut être délivrés pour une seule entrée, deux entrées ou, plus rarement, multiples entrées.
                Les visas e-tourist ou e-business visa d’un an et de cinq ans sont généralement délivrés avec entrées multiples et le séjour maximum en Inde au cours d’une année civile ne doit pas dépasser 180 jours.
                Les titulaires de visas e-Business et e-Tourist d’un an et cinq ans qui envisagent de séjourner en Inde plus de 180 jours dans l’année civile doivent s’enregistrer auprès du Foreigners (Regional) Registration Office FRRO/FRO dans les deux semaines de leur arrivée en Inde.
                Le visa e-Conférence est à entrée unique et sa validité est de 30 jours à compter de la date d’arrivée en Inde.
                Pour tous les autres types de visas, il est nécessaire de déposer sa demande auprès du prestataire externalisé compétent pour traiter les demandes de visas instruites par l’ambassade de l’Inde à Paris.
                Pour s’enregistrer auprès du FRRO ou toute information sur la procédure d’enregistrement, il convient de consulter le site officiel.
                
                Pour toute information complémentaire concernant le « e-visa », la procédure d’obtention de l’autorisation de voyage électronique ou sur le visa à l’arrivée, il convient de consulter les sites officiels :
                
                de l’ambassade de l’Inde en France
                et/ou du ministère des Affaires intérieures indien.
                Si un ressortissant étranger dépose fréquemment des demandes de visa « touriste », c’est-à-dire moins d’un mois après l’expiration de son visa précédent, ou plus de quatre fois dans l’année, les missions diplomatiques indiennes doivent le signaler à la division des étrangers du ministère de l’Intérieur afin d’obtenir l’autorisation de délivrer un nouveau visa « touriste ».
                
                Permis spéciaux
                L’accès à certaines zones du territoire indien (Arunachal Pradesh, Sikkim, certaines zones des Etats de la région des « Seven Sisters », frontières du Cachemire, du Rajasthan, de l’Himachal Pradesh et de l’Uttarakhand) nécessite l’obtention de permis spéciaux. Les demandes pour ces permis se font auprès des services consulaires de l’ambassade de l’Inde à Paris. Une fois en Inde, l’obtention de ce document est très difficile (délai de 6 semaines minimum, présentation de nombreux justificatifs). Dans ce dernier cas, les demandes de permis spéciaux sont à adresser au ministère de l’Intérieur indien (Ministry of Home Affairs - Foreigners Division, Jaisalmer House, Mansing Road, New Delhi - Tél. : +91 11 23 38 13 74).
                
                L’accès à certaines des îles Andaman et Nicobar est conditionné à l’obtention d’une autorisation, délivrée par les services de l’immigration à Port Blair, des services consulaires de l’ambassade de l’Inde à Paris, ou les bureaux de l’immigration à Delhi, Bombay, Chennai et Calcutta. Plus d’informations sur le site du tourisme des îles Andaman et Nicobar.
                
                Pour votre sécurité, il est impératif de respecter ce régime d’autorisation.
                
                En cas de perte ou de vol du passeport
                En ce cas, il est impératif de se faire délivrer un visa de sortie. La démarche à suivre compte trois temps :
                
                1/ obtenir une déclaration de perte ou de vol auprès de la police locale de la ville où le titre a été perdu ;
                2/ se faire délivrer un passeport d’urgence ou un laissez-passer au consulat de France le plus proche (consulter la liste des documents à produire sur le site internet du consulat compétent) ;
                3/ enregistrer une demande de « Exit Permit for loss of passport » sur le site officiel : https://indianfrro.gov.in/eservices/home.jsp
                Le délai de délivrance de l’Exit Permit est généralement d’une semaine
                4/ en cas de difficulté, vous pouvez vous adresser au Foreigners Regional Registration Office (FRRO) du lieu de séjour en Inde, soit :
                pour New Delhi :
                East Block 8 - Sector I - R.K. Puram Near Hyatt Regency
                Tél. : +91 11 26 71 10 74 / +91 11 26 71 13 48
                pour Bombay/Mumbai :
                FRRO - CID SB-II - Immigration (annexe) – 3rd Flr, behind St. Xavier’s College, Badruddin Tayyabji Marg, Mumbai 400 001.
                Tél. : +91 22 22 62 11 69 ou +91 22 62 04 46 ou +91 22 62 04 55 / Courriel : frromum@nic.in
                Site web
                pour Madras/Chennai :
                Bureau of Immigration, Sastry Baven, Haddows Road, Nungampakam, Chennai (Madras)
                Tél. : +91 44 2827 82 10
                pour Calcutta :
                FRRO Kolkata, 237 A.J.C. Bose Road, Kolkata 700 020
                Tél. : +91 33 229 005 49 / +91 33 228 370 34
                Courriel : frrokolic.in
                pour Bangalore :
                FFRO 5th Floor, ’A’ Block, TTMC, BMTC Bus Stand Building, K.H. Road, Shantinagar, Bangalore - 560027
                Tél. : +91 80 22 21 81 95 – Courriel : frroblr-ka@nic.in
                pour Hyderabad :
                FRRO Bureau of Immigration (Ministry of Home Affairs), Old Airport R.G Terminal, Begumpet, Hyderabad - 500016
                Tél. : +91 40 27 90 02 11 – Courriel : frrohyd@nic.in
                pour Pondichéry, antenne régionale du bureau de l’immigration :
                Regional Registration Office, No. 1, Plot No. 23/6, 2nd Street, Navasakthi Nagar, Valuthavur Road, Near Rani Hospital, Aruthra Nagar, Puducherry, 605006, India
                Tél. / fax : +91 413-2275605
                Courriel : rro.pon@nic.in
                dans le Kerala :
                Kozhikode (Calicut)
                20/1305 Castle View, Thiruvannur Road, Panniyankara, Kallai P.O. Kozhikode- 673003
                Tél. : 0495-2323550
                Courriel : frrocal@nic.in
                Cochin (Kochi)
                2nd Floor, Airlines Building, Cochin International Airport Ltd., Airport P.O., Cochin- 683111, Kerala
                Tél. : 0484-2611277
                Courriel : frrococ@nic.in
                Trivandrum (Thiruvananthapuram)
                T.C. 14/1377, Vazhuthacaud, opposite Ganapati Temple, Thycaud P.O., Thiruvananthapuram – 14
                Tél. : 0471-2333515
                Courriel : frrotvm@nic.in
                De façon générale, il est fortement recommandé de toujours conserver avec soi une photocopie de son passeport, de son visa et du cachet d’entrée des services d’immigration : en cas de perte ou de vol de l’original, les démarches seront considérablement facilitées.',
            ],
        ]);
    }
}
