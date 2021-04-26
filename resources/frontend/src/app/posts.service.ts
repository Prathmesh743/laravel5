import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class PostsService {

  url:string='';
  constructor(private http: HttpClient) {
  
   }

     getAllPost()
     {
          this.url = '/product';
          return this.http.get(this.url);
     }
}
