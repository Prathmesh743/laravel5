import { PostsComponent } from './posts/posts.component';

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { WorkComponent } from './work/work.component';

const routes: Routes = [
  { path: 'work-list', component:  WorkComponent},
  { path: 'product-list', component: PostsComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
