import { Component } from '@angular/core';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss'],
})
export class Tab2Page {
  public form = [{ val: 'Playlist1' }, { val: 'Playlist2' }, { val: 'Playlist3' }, { val: 'Playlist4' }];
  constructor() {}
}
