import { PostsService } from './../posts.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-posts',
  templateUrl: './posts.component.html',
  styleUrls: ['./posts.component.css']
})
export class PostsComponent implements OnInit {


   public post:any;
  constructor(private PostsService: PostsService) 
  { 
          
  }

  ngOnInit(): void {
     this.PostsService.getAllPost().subscribe(data => {
             this.post= data;
     })
  }

}
