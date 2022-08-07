export interface TrackResponse {
  items: {
    track: Track;
  }[];
}

export interface Track {
  id: string;
  name: string;
}

// export interface TagsAttributes {
//   name: string;
// }

// export interface RoomInfoResponse {
//   data: {
//     id: string;
//     type: string;
//     attributes: {
//       id: string;
//       name: string;
//       description: string;
//       start_at: string;
//       duration: number;
//       tags: {
//         id: string;
//         room_id: string;
//         name: string;
//       }[];
//       participants_count: number;
//       thumbnail_path: string;
//       zoom_meeting_id: string;
//     };
//   };
// }

// export interface RoomsResponse {
//   data: {
//     id: string;
//     type: string;
//     attributes: {
//       id: string;
//       name: string;
//       description: string;
//       start_at: string;
//       tags: {
//         id: string;
//         room_id: string;
//         name: string;
//       }[];
//       participants_count: number;
//       thumbnail_path: string;
//     };
//   }[];
// }
