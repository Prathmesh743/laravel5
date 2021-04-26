import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError, retry } from 'rxjs/operators';
@Injectable({
  providedIn: 'root'
})
export class WorkService {

     url:string=''
  constructor(private http: HttpClient) { }


  getCustomerList()
  {
          this.url = 'http://127.0.0.1:8000/api/tasks';
          return this.http.get(this.url);
  }
}
