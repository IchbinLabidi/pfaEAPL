import {NgModule} from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule} from '@angular/router';
import {NotFoundComponent} from './not-found/not-found.component';
import {BlogComponent} from "./blog/blog.component";
import {BlogDetailsComponent} from "./blog-details/blog-details.component";
const routes: Routes = [
  {path: '', redirectTo: '/home', pathMatch: 'full'},
  {path: 'blog', component: BlogComponent},
  {path: 'blogdetails', component: BlogDetailsComponent},
  {path: '**', component: NotFoundComponent}
];

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule]

})
export class AppRoutingModule {
}
