import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import { WelcomeDashComponent } from './welcome-dash/welcome-dash.component';
import { LottieModule } from 'ngx-lottie';
import player from 'lottie-web';
import { EtudiantComponent } from './etudiant/etudiant.component';
import { EnseignantComponent } from './enseignant/enseignant.component';
import { CommentairesComponent } from './commentaires/commentaires.component';
import { PublicationsComponent } from './publications/publications.component';
import { AffectEtuGrpComponent } from './affect-etu-grp/affect-etu-grp.component';
import { AffectEnsGrpComponent } from './affect-ens-grp/affect-ens-grp.component';
import { GroupsComponent } from './groups/groups.component';
import { MatiereComponent } from './matiere/matiere.component';
import { PaiementComponent } from './paiement/paiement.component';
import { CaisseEnsComponent } from './caisse-ens/caisse-ens.component';
import { CaisseEliosComponent } from './caisse-elios/caisse-elios.component';
import { BlogComponent } from './blog/blog.component';

export function playerFactory() {
  return player;
}

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    DashboardComponent,
    WelcomeDashComponent,
    EtudiantComponent,
    EnseignantComponent,
    CommentairesComponent,
    PublicationsComponent,
    AffectEtuGrpComponent,
    AffectEnsGrpComponent,
    GroupsComponent,
    MatiereComponent,
    PaiementComponent,
    CaisseEnsComponent,
    CaisseEliosComponent,
    BlogComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    LottieModule.forRoot({ player: playerFactory })
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
