import { Component, OnInit } from '@angular/core';
import { AnimationOptions } from 'ngx-lottie';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor() { }
  options: AnimationOptions = {path: 'https://assets8.lottiefiles.com/packages/lf20_hzfmxrr7.json', // download the JSON version of animation in your project directory and add the path to it like ./assets/animations/example.json
  };
  ngOnInit(): void {
  }

}
