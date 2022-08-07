import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-favorite-tracks',
  templateUrl: './favorite-tracks.page.html',
  styleUrls: ['./favorite-tracks.page.scss'],
})
export class FavoriteTracksPage implements OnInit {
  public form = [
    { val: 'Habit', isChecked: true },
    { val: 'ミックスナッツ', isChecked: false },
    { val: 'W / X / Y', isChecked: false },
    { val: 'シンデレラボーイ', isChecked: false },
  ];

  constructor(private router: Router) {}

  ngOnInit() {}
  ionViewWillEnter() {}
  onClick() {
    this.router.navigateByUrl('/tabs/tab1');
  }
}
