import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { FavoriteTracksPageRoutingModule } from './favorite-tracks-routing.module';

import { FavoriteTracksPage } from './favorite-tracks.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    FavoriteTracksPageRoutingModule
  ],
  declarations: [FavoriteTracksPage]
})
export class FavoriteTracksPageModule {}
