Use btth01_cse485;
/* 3.Truy vấn dữ liệu
a.Liệt kê các bài viết về các bài hát thuộc thể loại nhạc trữ tình */
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.ma_tloai,theloai.ten_tloai,baiviet.tomtat,baiviet.noidung,baiviet.ma_tgia
FROM baiviet 
INNER JOIN theloai ON theloai.ten_tloai = 'Nhạc trữ tình' AND baiviet.ma_tloai = theloai.ma_tloai; 

/*b.Liệt kê các bài viết của tác giả “Nhacvietplus” */
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,baiviet.ma_tloai,baiviet.tomtat,baiviet.noidung,baiviet.ma_tgia,tacgia.ten_tgia
FROM baiviet 
INNER JOIN tacgia ON tacgia.ten_tgia = 'Nhacvietplus' AND baiviet.ma_tgia = tacgia.ma_tgia;

/*c.Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào.*/
SELECT theloai.ma_tloai, theloai.ten_tloai
FROM theloai
LEFT JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
WHERE baiviet.ma_tloai IS NULL;

/*d.Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết*/
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,tacgia.ten_tgia,theloai.ten_tloai,baiviet.ngayviet
FROM baiviet,tacgia,theloai
WHERE baiviet.ma_tloai = theloai.ma_tloai AND baiviet.ma_tgia = tacgia.ma_tgia;

/*e.Tìm thể loại có số bài viết nhiều nhất*/
SELECT baiviet.ma_tloai,theloai.ten_tloai,COUNT(baiviet.ma_tloai)
FROM baiviet,theloai WHERE baiviet.ma_tloai = theloai.ma_tloai
GROUP BY baiviet.ma_tloai,theloai.ten_tloai
ORDER BY COUNT(baiviet.ma_tloai) DESC LIMIT 1;

/*f.Liệt kê 2 tác giả có số bài viết nhiều nhất*/
SELECT baiviet.ma_tgia,tacgia.ten_tgia,count(baiviet.ma_bviet) 
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
GROUP BY baiviet.ma_tgia,tacgia.ten_tgia
ORDER BY count(baiviet.ma_bviet) DESC LIMIT 2;

/*g.Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ "yêu","thương","anh","em" */
SELECT * FROM baiviet
WHERE ten_bhat LIKE '%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%' OR ten_bhat LIKE '%em%' ;

/*Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
“yêu”, “thương”, “anh”, “em” */
SELECT * FROM baiviet
WHERE (tieude LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%') or ten_bhat REGEXP '(yêu|thương|anh|em)';