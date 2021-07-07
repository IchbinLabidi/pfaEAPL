import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppComponent } from './app.component';
import {HttpClient, HttpClientModule} from '@angular/common/http';
import {RouterModule} from '@angular/router';
import { AppRoutingModule } from './app-routing.module';
import {FormsModule, ReactiveFormsModule} from '@angular/forms';
import { NotFoundComponent } from './not-found/not-found.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './home/home.component';
import { BrowserAnimationsModule} from '@angular/platform-browser/animations';
import {APP_BASE_HREF} from '@angular/common';
import { TranslateModule , TranslateLoader} from '@ngx-translate/core';
import { TranslateHttpLoader} from '@ngx-translate/http-loader';
import { LottieModule } from 'ngx-lottie';
import player from 'lottie-web';
import { OwlcarouselComponent } from './owlcarousel/owlcarousel.component';
import { CarouselModule } from 'ngx-owl-carousel-o';
import { CounterareaComponent } from './counterarea/counterarea.component';
import { JoinballouchiComponent } from './joinballouchi/joinballouchi.component';
import { BlogComponent } from './blog/blog.component';
import { BlogDetailsComponent } from './blog-details/blog-details.component';
export function playerFactory() {
  return player ;
}

@NgModule({
  declarations: [
    AppComponent,
    NotFoundComponent,
    HeaderComponent,
    FooterComponent,
    NavbarComponent,
    HomeComponent,
    OwlcarouselComponent,
    CounterareaComponent,
    JoinballouchiComponent,
    BlogComponent,
    BlogDetailsComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    HttpClientModule,
    RouterModule,
    FormsModule,
    AppRoutingModule,
    ReactiveFormsModule,
    TranslateModule.forRoot({
      defaultLanguage: 'fr',
      loader: {
          provide: TranslateLoader,
        useFactory : HttpLoaderFactory,
        deps : [HttpClient]
      }
    }),
    LottieModule.forRoot({player: playerFactory}),
    CarouselModule
  ],
  bootstrap: [AppComponent],
  providers: [{provide: APP_BASE_HREF, useValue: '/'}]
})
export class AppModule { }
export function  HttpLoaderFactory(http: HttpClient){
  return new TranslateHttpLoader(http, './assets/i18n/' , '.json');
}
