import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { FavoriteTracksPage } from './favorite-tracks.page';

const routes: Routes = [
  {
    path: '',
    component: FavoriteTracksPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class FavoriteTracksPageRoutingModule {}
