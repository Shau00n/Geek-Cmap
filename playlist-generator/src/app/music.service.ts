import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { TrackResponse } from './interface';

@Injectable({
  providedIn: 'root',
})
export class MusicService {
  baseurl: string = 'https://api.spotify.com/v1/';

  constructor(private http: HttpClient) {}

  createPlaylist(id: string, body) {
    this.http.post(`${this.baseurl}/users/${id}`, body).subscribe((data) => {
      console.log(data);
    }),
      (error) => {
        console.log(error);
      };
  }

  getUsersSavedTracks() {
    return this.http.get<TrackResponse>(`${this.baseurl}/me/tracks`);
  }
}
