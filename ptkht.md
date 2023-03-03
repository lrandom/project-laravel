Trang chủ : Today List, Nhạc hot, Nhạc mới, Nhạc Việt
Danh mục nhạc: Rap/ Rock
Nghe nhạc : Bình luận, player chơi nhạc 
Tìm kiếm : Tìm kiếm theo tên bài hát, ca sĩ, album, playlist
Đăng nhập : Đăng nhập bằng tài khoản email/password
Đăng ký : Đăng ký bằng tài khoản email/password
Profile: cập nhật hồ sơ/ tạo list nhạc yêu thích/ tạo playlist


User:
    -id
    -name
    -email
    -password
    -phone
    -address
    -avatar

Song:
    -id
    -name
    -category_id
    -views(0)
    -path
    -image
    -lyric
    -album_id
    -playlist_id

Category:
    -id
    -name
    -parent_id

Singer:
    -id
    -name

Song_singer:
    -id
    -song_id
    -singer_id

Album:
   - id
   - name
   
Album_Singer:
    -id
    -album_id
    -singer_id

Playlist:
    -id
    -name
    -user_id
    -image

Comment:
    -id
    -user_id
    -content
    -song_id
