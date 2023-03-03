Trang chủ : Sản phẩm mới/ Bán chạy/ Hàng Second Hand/ Điện thoại / Máy tính
Trang danh mục: Lấy đc sản phẩm theo danh mục (có thể lấy theo danh mục con)
Trang chi tiết sản phẩm: Lấy đc thông tin sản phẩm
Trang giỏ hàng: Lấy đc thông tin giỏ hàng
Trang thanh toán: Lấy đc thông tin thanh toán (Tích hợp thanh toán Stripe)
Trang đơn hàng: Lấy đc thông tin đơn hàng của khách 
Trang tìm kiếm: Lấy đc thông tin sản phẩm theo từ khóa tìm kiếm
Trang hồ sơ: Lấy đc thông tin hồ sơ của khách hàng

User:
    -id
    -name
    -email
    -password
    -phone
    -address
    -avatar

Product:
    -id
    -name
    -price
    -description
    -short_description
    -category_id
    -price_discount(0)
    -review_count(0)
    -review_avg(0)-> 1/5
    -views(0)
    -total_sold(0)
    -is_secondhand
    -status

Attribute:
    -id
    -name

Attribute_value:
    -id
    -value
    -attribute_id

Product_attribute_value:
    -id
    -product_id
    -attribute_value_id

Category:
    -id
    -name
    -parent_id

Order:
    -id
    -user_id
    -full_name
    -note
    -phone
    -address
    -sub_total
    -tax
    -total
    -status
`
Order_detail:
    -id
    -order_id
    -product_id
    -quantity
    -price
    -discount_price(0)
    -total
    -name
    -attributes

Image:
    -id
    -name
    -path
    -product_id
    -is_thumbnail(0)-> 1 ảnh đại diện, 0 là ảnh bt

Review:
    -id
    -user_id
    -product_id
    -content
    -rating(1-5)
    -status
