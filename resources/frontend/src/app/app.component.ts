import { Component,OnInit } from '@angular/core';
import {NgxPaginationModule} from 'ngx-pagination';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})


export class AppComponent implements OnInit{
  //title:string = 'Todo App';

    constructor(private http: HttpClient)
    {
            
    }

    ngOnInit()
    {
         
         
    }

}
