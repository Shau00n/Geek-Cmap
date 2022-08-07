import { Component } from '@angular/core';
// import { responce } from '../mock';
import { TrackResponse } from '../interface';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss'],
})
export class Tab1Page {
  public form = [
    { val: 'Habit', isChecked: true },
    { val: 'ミックスナッツ', isChecked: false },
    { val: 'W / X / Y', isChecked: false },
    { val: 'シンデレラボーイ', isChecked: false },
  ];

  constructor() {}

  ngOnInit() {}
  ionViewWillEnter() {}
}
