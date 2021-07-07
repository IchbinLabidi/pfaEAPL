import { Component, OnInit } from '@angular/core';
import {OwlOptions} from 'ngx-owl-carousel-o';

@Component({
  selector: 'app-owlcarousel',
  templateUrl: './owlcarousel.component.html',
  styleUrls: ['./owlcarousel.component.css']
})
export class OwlcarouselComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }
  ItemsArray: any = [
    {
      imgName : '../../assets/Template/img/caroselEns/0.JPEG'
    },
    {
      imgName : '../../assets/Template/img/caroselEns/1.JPEG'
    },
    {
      imgName : '../../assets/Template/img/caroselEns/2.JPEG'
    }
  ];

  customOptions : OwlOptions = {
    loop: true,
    mouseDrag: true,
    touchDrag: true,
    pullDrag: true,
    dots: true,
    navSpeed: 900,
    navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      400: {
        items: 2
      },
      740: {
        items: 3
      } ,
      940: {
        items: 3
      }

    }

  };
}
