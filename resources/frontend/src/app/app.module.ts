import { WorkService } from './work.service';
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { WorkComponent } from './work/work.component';
import { NgxPaginationModule } from 'ngx-pagination';
import { PostsComponent } from './posts/posts.component';

@NgModule({

  declarations: [
    AppComponent,
    WorkComponent,
    PostsComponent,
    //FormsModule,
   // CoursesComponent,
    //ListComponent,
    //TodosComponent,
    //TodoItemComponent,
  ],


  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    NgxPaginationModule
  ],
  providers: [
    //CoursesService
    WorkService
    
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
