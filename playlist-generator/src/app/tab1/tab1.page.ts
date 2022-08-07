import { Component } from '@angular/core';
import { Router } from '@angular/router';
// import { responce } from '../mock';
import { TrackResponse } from '../interface';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss'],
})
export class Tab1Page {
  constructor(private router: Router) {}

  ngOnInit() {}
  ionViewWillEnter() {}
  onClick() {
    this.router.navigateByUrl('/favorite-tracks');
  }
}
