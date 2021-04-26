import { WorkService } from './../work.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-work',
  templateUrl: './work.component.html',
  styleUrls: ['./work.component.css']
})
export class WorkComponent implements OnInit {

  config: any;
   public work:any;
  constructor(private workdata: WorkService) { 
  
  }


  ngOnInit(): void {
   
     this.workdata.getCustomerList().subscribe(data =>{
      this.work= data;
      this.showData();
      this.config = {
        itemsPerPage: 10,
        currentPage: 1,
        totalItems: this.work.length
      };  
     })
    }


     pageChanged(event:number)
     {
        this.config.currentPage = event;
     }

     showData()
     {
         //console.log(this.work);
         //sort by title
         this.work.sort((c1:any,c2:any) => {
          
         })
     }


     
    
  }


