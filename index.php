<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PDF-GeneratorForm</title>
</head>
<body>
    <div class="row">
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">Simple header</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
            </ul>
            </header>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <hr>
                <h4 style="color:#44317c">LETTRE DE DÉMISSION DU SALARIÉ</h4>
                <hr>
                <p>Vérifié le 10 Décembre 2021 - Direction de l'information légale et administrative (Premier ministre)</p>
                <p>Ce simulateur vous permet de personnaliser le modèle de lettre de démission.Vous pouvez :
                    Soit copier le modèle pour le coller dans votre traitement de texte
                    Soit compléter le modèle en ligne et après l'étape 4/4, le télécharger au format PDF</p>
                <p>Pour plus d'informations sur la démission d'un salarié, consultez notre fiche d'information sur service-public.fr.
Comptez environ 4 minutes pour compléter cette attestation.</p>
<br>
<p>Les champs marqués d'un * sont obligatoires.</p>
                <form method="POST" action="#" id="sendData">
                        <div class="groupa">
                            <h5 class="heading"><span>Étape 1/4</span> Quelles sont vos coordonnées ?</h5>
                            <div class="row">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Votre prénom</label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="fname" id="fname" class="fname form-control" required>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Votre nom </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="lname" id="lname" class="lname form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="addressa">
                                <div class="row">
                                    <div class="col-md-6"><label><span style="color:#ff0000">*</span> Votre adresse</label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="paddress" id="paddress" class="paddress form-control" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-6"><label>Complément d'adresse </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="paddressAdd" id="paddressAdd" class="paddressAdd form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="postcode"><span style="color:#ff0000">*</span> Code postal (exemple : 19100) </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="number" min="1000" max="99000" name="pzipcode" id="pzipcode" class="pzipcode form-control" required>
                                        </div>
                                        <span class="errorPostCode">Cette valeur ne peut être inférieure à 1000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label><span style="color:#ff0000">*</span> Commune </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="pcommune" id="pcommune" class="pcommune form-control" required>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="groupb">
                            <h5 class="heading"><span>Étape 2/4<span> Quelles sont les coordonnées de votre employeur ? </h5>
                            <div class="row">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Nom de votre employeur</label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="emName" id="emName" class="emName form-control" required>
                                    </div>
                                </div>
                            </div> 
                            <div class="row emGender">
                                <div class="col-md-6">
                                    <label><span style="color:#ff0000">*</span> Genre du destinataire </label>
                                        <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="emGender" id="emGender1" class="emGender" value="Madame" required> Madame</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="emGender" id="emGender2" class="emGender" value="Monsieur" required> Monsieur</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="emGender" id="emGender3" class="emGender" value="Je ne connais pas le nom du destinataire" required> Je ne connais pas le nom du destinataire</label><br>
                                </div>
                            </div>
                            <div class="row emp">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Nom du destinataire </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="emReName" id="emReName" class="emReName form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row emp">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Fonction du destinataire </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="emRecFunc" id="emRecFunc" class="emRecFunc form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row empSer">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Service destinataire </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="emRecDep" id="emRecDep" class="emRecDep form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="addressb">
                                <div class="row">
                                    <div class="col-md-6"><label><span style="color:#ff0000">*</span> Adresse de votre employeur</label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="emAddress" id="emAddress" class="emAddress form-control" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-md-6"><label>Complément d'adresse </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="emAdAddi" id="emAdAddi" class="emAdAddi form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label class="emPostCodeTxt"><span style="color:#ff0000">*</span> Code postal (exemple : 12450) </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="number" name="emPostCode" min="1000" max="99000" id="emPostCode" class="emPostCode form-control" required>
                                        </div>
                                        <span class="errorPostCodeEmployee">Cette valeur ne peut être inférieure à 1000</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"><label><span style="color:#ff0000">*</span> Commune </label></div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="emCommune" id="emCommune" class="emCommune form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="groupc">
                            <h5 class="heading"><span>Étape 3/4<span> Quelles sont vos informations et demandes spécifiques ?  </h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><span style="color:#ff0000">*</span> Type de remise de la lettre </label>
                                    <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="ltrType" class="ltrType" value="Lettre recommandée avec accusé deréception" required> Lettre recommandée avec accusé deréception</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="ltrType" class="ltrType" value="Remise en main propre contre décharge" required> Remise en main propre contre décharge</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="ltrType" class="ltrType" value="Autre" required> Autre</label><br>
                                </div>
                            </div> 
                            <div class="row colc func">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Fonction occupée </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="ocFunc" id="ocFunc" class="ocFunc form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row colc func">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Date du début du contrat (format : JJ/MM/AAAA) </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="date" name="contractDate" id="contractDate" class="contractDate form-control" required><span class="fa fa-calendar datepicker"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row colc Redate">
                                <div class="col-md-6">
                                    <label><span style="color:#ff0000">*</span> Durée du préavis régie par :</label>
                                    <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="contract" class="contract" value="mon contrat de travail" required> mon contrat de travail</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="contract" class="contract" value="la convention collective" required> la convention collective</label> <br>
                                        &nbsp;&nbsp; <label><input type="radio" name="contract" class="contract" value="l'accord d'entreprise" required> l'accord d'entreprise</label><br>
                                </div>
                            </div>
                                <div class="row colc Redate">
                                    <div class="col-md-6">
                                        <label><span style="color:#ff0000">*</span> Durée du préavis (exemple : 2 mois)</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="durationCalender"  class="durationCalender form-control" required>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row colc Redate">
                                    <div class="col-md-6">
                                        <label><span style="color:#ff0000">*</span> Vous souhaitez : </label>
                                            <br>
                                            &nbsp;&nbsp; <label><input type="radio" name="youWant" class="youWant" value="effectuer ce préavis" required> effectuer ce préavis</label> <br>
                                            &nbsp;&nbsp; <label><input type="radio" name="youWant" class="youWant" value="être dispensé d'effectuer ce préavis" required> être dispensé d'effectuer ce préavis</label> <br>
                                    </div>
                                </div>
                        </div>
                        <div class="groupd">
                            <h5 class="heading"><span>Étape 4/4<span> Où et quand est rédigée la lettre ?  </h5>
                            <div class="row">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Rédigé à (nom de la commune) </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="redige" id="redige" class="redige form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-6"><label><span style="color:#ff0000">*</span> Date du début du contrat (format : JJ/MM/AAAA) </label></div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-sm">
                                        <input type="date" name="contractDate2" id="contractDate2" class="contractDate2 form-control"><span class="fa fa-calendar datepicker"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row final">
                                <div class="col-md-12">
                                    <div class="content-message">
                                        <h4>Votre lettre de démission est maintenant complète.</h4>
                                        <p>Veuillez la vérifier ci-dessous avant de la télécharger (bouton en bas).</p>
                                        <p>N'oubliez pas de la signer avant de l'envoyer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <h5 class="heading centerText headerContextComplete" >Aperçu de votre lettre de démission : </h5>
                <div class="layoutdisplay" id="layoutdisplay">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="display_name flexcolor">[prénom] </span> <span class="display_surname flexcolor">[Nom de l'expéditeur]</span> <br>
                            <span class="display_addressa flexcolor">[Adresse]</span> <span class="display_addressacomple flexcolor">[Adresse]</span>
                            <span class="display_addressacode flexcolor"><br/>[Code postal]</span> <span class="display_addressacommune flexcolor">[Commune]</span> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                        <span class="display_employeeName flexcolor">[Nom de l'employeur]</span>
                        <span class="display_employeeGender flexcolor">[title]</span> <span class="display_employeeatt flexcolor">[Attention]</span>
                         <span class="display_employeeposition flexcolor">[Position]<br></span>
                         <span class="display_employeeservice flexcolor">[service]<br></span> 
                        <span class="display_employeeAddress flexcolor">[ Adresse du destinataire ]<br></span> 
                        <span class="display_employeeAddressAdd flexcolor">[ Adresse du destinataire ]<br></span> 
                        <span class="display_employeeAddressCode flexcolor">[Code postal]</span> <span class="display_employeeAddressCommune flexcolor">[Commune]</span> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Objet : Démission</h5>
                            <p><span class="display_letr_type flexcolor">[Type de remise de la demande]</span> </p>

                            <p><span class="display_employeeGender displayME flexcolor">[Madame/Monsieur]</span>,<br>
                            Je vous informe par cette lettre de ma décision de démissionner de mes fonctions (<span class="display_PositionHeld flexcolor">[Fonction occupée]</span>) exercées depuis le <span class="display_contractdate flexcolor">[Date du début du contrat]</span> au sein de l'entreprise.</p>

                            <p>J'ai bien noté que les termes de <span class="display_contract flexcolor">[mon contrat de travail]</span> prévoient un préavis de <span class="display_contractMonth flexcolor">[2 mois]</span>.</p>
                            
                            <p class="firstParagraph">[Cependant, et par dérogation, je sollicite la possibilité de ne pas effectuer ce préavis et, par conséquent, de quitter l'entreprise à la date de la réception de ma lettre de démission, mettant ainsi fin à mon contrat de travail.]</p>
                            <p class="secondParagraph">[Je vous remercie de bien vouloir me confirmer votre accord concernant la dispense de préavis.]</p>

                            <p>Lors de mon dernier jour de travail dans l'entreprise, je vous demanderai de bien vouloir me transmettre un reçu pour solde de tout compte, un certificat de travail ainsi qu'une attestation Pôle emploi.</p>

                            <p>Je vous prie d'agréer, <span class="display_employeeGender displayME flexcolor">[Madame/Monsieur]</span>, l'expression de mes salutations distinguées.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <p><span class="display_redige">[Commune]</span> , le <span class="flexcolor display_redige_date"><?php echo date('d')." ";
                            switch(date("m")){
                                case "01": 
                                    echo "January";
                                break;
                                case "02": 
                                    echo "February";
                                break;
                                case "03": 
                                    echo "March";
                                break;
                                case "04": 
                                    echo "April";
                                break;
                                case "05": 
                                    echo "May";
                                break;
                                case "06": 
                                    echo "June";
                                break;
                                case "07": 
                                    echo "July";
                                break;
                                case "08": 
                                    echo "Aug";
                                break;
                                case "09": 
                                    echo "Septembre";
                                break;
                                case "10": 
                                    echo "October";
                                break;
                                case "11": 
                                    echo "November";
                                break;
                                default: 
                                echo "December";
                                }
                                echo " ".date("Y");?></span></p>
                            <p>[ Signez ici ]</p>
                            <p><span class="display_name flexcolor">[prénom] </span> <span class="display_surname flexcolor">[Nom de l'expéditeur]</span></p>
                        </div>
                    </div>
                </div>
                <div class="bottomButton">
                    <!-- <button class="buttona copytoCLipboard">Recommencer votre saisie</button> -->
                    <button class="buttonb pdfGenerate disabled">Téléchargez votre PDF</button>
                    <span class=".ErroSubmit"></span>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
<script src="assets/js/trigger.js"></script>
</html>