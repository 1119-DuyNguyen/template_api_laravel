<?php

namespace Database\Seeders;

use App\Models\WasteDictionary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WasteDictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // WasteDictionary::factory()->count(5)->create();
        $data=[
            [
                'name'=> "Aluminum Foil (Foil nhôm)",
                'description'=> "Aluminum Foil là một loại lá nhôm mỏng, linh hoạt và dễ uốn cong thường được sử dụng để bọc thức ăn hoặc nấu ăn.",
                'img_url'=> "https://4.imimg.com/data4/BI/XM/MY-26110104/aluminium-foil-paper-250x250.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Nén và Gom lại: Sau khi sử dụng, hãy gom lại Aluminum Foil thành một viên nhỏ. Bạn có thể sử dụng các dụng cụ như bàn chải hoặc tay để nén nó lại.
                Tách nhựa (nếu có): Nếu Aluminum Foil bị phủ lớp nhựa hoặc các chất phủ khác, hãy cố gắng tách lớp nhựa ra khỏi lớp nhôm. Điều này giúp cho quá trình tái chế trở nên hiệu quả hơn.
                Đưa vào thùng tái chế: Sau khi đã nén và tách nhựa (nếu cần), đặt Aluminum Foil vào thùng tái chế nhôm. Các cơ sở tái chế nhôm thường sẽ chấp nhận Aluminum Foil cùng với các sản phẩm nhôm khác để tái chế.
                ",
            ],
            [
                'name'=> "Chai (Bottle)",
                'description'=> "Plastic bottle là một loại đồ đựng phổ biến được sản xuất từ nhựa polyethylene terephthalate (PET) hoặc polyethylene (PE). Chúng được sử dụng rộng rãi trong đời sống hàng ngày để đựng nước uống, nước ngọt, nước đóng chai, dầu, sữa, và nhiều sản phẩm khác.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ69TL32isSyDFRGDMS74wZLOmIBd7pazqL-Q&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Chai Nhựa:
                Trồng Cây Nội Thất: Sử dụng chai nhựa nhỏ để trồng cây nội thất nhỏ, như cây xanh mini, làm điểm nhấn xanh trong nhà.
                Bình Nước Di Động: Cắt đáy của chai nhựa và sử dụng phần trên làm bình nước di động khi đi dã ngoại hoặc tập thể dục.
                Bộ Sưu Tập Đồ Chơi: Tái sử dụng các chai nhựa để làm bộ sưu tập đồ chơi cho trẻ em, chẳng hạn như đựng viên bi, mảnh ghép hoặc các vật dụng sáng tạo khác.
                Đèn Trang Trí DIY: Cắt các chai nhựa thành các hình dạng khác nhau và thêm đèn LED vào bên trong để tạo ra đèn trang trí độc đáo.
                Tạo Nút Môi Cho Dây Giày: Cắt phần đỉnh của chai nhựa thành các miếng nhỏ và sơn chúng theo màu sắc khác nhau để tạo ra các nút môi cho dây giày.
                Đựng Dây Điện: Sử dụng các chai nhựa để đựng dây điện, dây sạc hoặc dây cáp để giữ chúng gọn gàng và tránh rối khi không sử dụng.
                Chai Thuỷ Tinh:
                Hũ Đựng Thực Phẩm: Rửa sạch chai thuỷ tinh và tái sử dụng chúng để đựng thực phẩm khô như gạo, hạt, hoặc gia vị.
                Đèn Hồng Ngoại DIY: Làm đèn hồng ngoại bằng cách đặt nến hoặc đèn LED vào chai thuỷ tinh và sử dụng nó để tạo ra ánh sáng mềm và ấm áp.
                Nến Chai: Đổ sáp nến vào chai thuỷ tinh và thêm ngọn lửa, tạo ra nến chai thú vị và thơm phức.
                Làm Chậu Trồng Cây: Sử dụng chai thuỷ tinh lớn để trồng cây hoặc làm vật trang trí cho sân vườn hoặc ban công.
                Chai Kim Loại:
                Bình Đựng Nước: Tái sử dụng chai kim loại để đựng nước hoặc đồ uống khi đi ra ngoài hoặc tập thể dục.
                Đựng Bút Viết: Sơn hoặc trang trí chai kim loại và sử dụng chúng để đựng bút viết hoặc cây viết.
                Tạo Đồ Trang Trí: Sử dụng chai kim loại để tạo ra các vật trang trí như đèn treo, móc treo quần áo, hoặc vật trang trí tường.
                Làm Chân Đế cho Đèn Bàn: Sử dụng chai kim loại lớn và cứng để làm chân đế cho đèn bàn, tạo điểm nhấn thú vị cho nội thất.",
            ],
            [
                'name'=> "Nắp Chai (Bottle Cap)",
                'description'=> "Nắp Chai là phần đậy của chai, thường được làm từ nhựa, kim loại hoặc cao su.",
                'img_url'=> "https://abvbeershop.com/wp-content/uploads/2022/03/1.06.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Tách phần nhựa và kim loại: Nếu nắp chai có cấu trúc phức tạp gồm cả phần nhựa và kim loại, hãy tách chúng ra khỏi nhau. Nhưng đừng lo lắng, có một số how_to_recycle sáng tạo cho cả hai loại này.
                Tái chế thành hạt nhựa: Nắp chai nhựa có thể được chuyển đổi thành hạt nhựa tái chế, được sử dụng cho nhiều mục đích khác nhau như sản xuất đồ chơi, băng keo hoặc sản phẩm nhựa khác.
                Sử dụng làm nút bấm: Nếu bạn là người thợ thủ công, bạn có thể sử dụng nắp chai nhựa làm nút bấm cho các dự án may mặc hoặc sửa chữa.
                Làm đồ chơi cho trẻ em: Nắp chai có thể được sử dụng để làm đồ chơi nhỏ cho trẻ em như trò chơi xếp hình, đồ chơi thuyền hoặc đồ chơi xây dựng.
                Đưa vào thùng tái chế: Nếu không có kế hoạch tái chế cụ thể, đơn giản là đặt nắp chai vào thùng tái chế để chúng được tái chế hoặc tái sử dụng theo cách thích hợp.
                ",
            ],
            [
                'name'=> "Kính Vỡ (Broken Glass):",
                'description'=> "Kính Vỡ là các mảnh kính hoặc thủy tinh đã bị vỡ hoặc gãy thành các mảnh nhỏ.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3ssk0DMZOZK61bq0J48zj3J7QAdEmVj_dNA&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "An toàn vứt bỏ: Đầu tiên và quan trọng nhất, đảm bảo an toàn khi xử lý Kính Vỡ. Sử dụng găng tay và bảo vệ mắt để tránh bị cắt hoặc bị thương.
                Tái sử dụng cho nghệ thuật: Một cách sáng tạo để tái sử dụng Kính Vỡ là sử dụng chúng cho các dự án nghệ thuật. Bạn có thể tạo ra các mảnh tranh, hình vẽ, hoặc trang trí đồ handmade với những mảnh kính vỡ này.
                Nghiền và tái chế: Nếu có cơ hội, bạn có thể nghiền Kính Vỡ thành bột thủy tinh và sử dụng lại cho các mục đích như làm vật liệu xây dựng hoặc làm gốm sứ.
                Tái sử dụng trong vườn hoặc cảnh quan: Một số người sử dụng mảnh kính vỡ như một phần của vườn hoặc cảnh quan để tạo ra hiệu ứng ánh sáng hoặc thẩm mỹ độc đáo.
                Xử lý đúng cách: Nếu không thể tái chế hoặc tái sử dụng, đảm bảo bạn xử lý Kính Vỡ một cách an toàn. Đặt chúng vào một túi chắc chắn và đánh dấu Kính Vỡ để người khác biết và tránh gặp phải. Đừng bao giờ vứt bỏ Kính Vỡ trực tiếp vào thùng rác mà không được bảo vệ.
                ",
            ],
            [
                'name'=> "Lon (Can):",
                'description'=> "Lon là một loại đồ đựng chất lỏng hoặc chất rắn, thường được làm từ kim loại như nhôm hoặc thép.",
                'img_url'=> "https://unblast.com/wp-content/uploads/2020/06/3D-Bottle-Can-Mockup-2.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Nén và Gom lại: Sau khi sử dụng, hãy nén và gom lại lon để tiết kiệm không gian và thuận tiện cho việc vận chuyển đến cơ sở tái chế.
                Tách nhựa (nếu có): Nếu lon có phần nhựa, như nắp hoặc ổ đậy, hãy tách chúng ra khỏi phần kim loại. Nhưng đừng lo lắng, có một số how_to_recycle cho cả hai loại này.
                Tái chế thành vật dụng mới: Một cách sáng tạo để tái chế lon là biến chúng thành các vật dụng mới như đồ trang trí, đồ chơi, hoặc các sản phẩm handmade khác.
                Tái chế thành tác phẩm nghệ thuật: Sử dụng lon làm nguyên liệu cho các dự án nghệ thuật như tác phẩm điêu khắc hoặc tranh ảnh. Bạn có thể cắt, nếm và ghép nối các mảnh lon để tạo ra các tác phẩm sáng tạo.
                Sử dụng làm vật liệu xây dựng: Nếu có cơ hội, bạn có thể tái chế lon thành vật liệu xây dựng như thép tái chế cho các công trình xây dựng.
                Đưa vào thùng tái chế: Cuối cùng, sau khi đã tách phần nhựa (nếu có) và chuẩn bị lon, đặt chúng vào thùng tái chế phù hợp để chúng được tái chế hoặc tái sử dụng theo cách thích hợp.
                ",
            ],
            [
                'name'=> "Hộp Carton (Carton)",
                'description'=> "Hộp Carton là loại bao bì đa dạng, thường được làm từ giấy hoặc bìa.",
                'img_url'=> "https://hupuna.com/wp-content/uploads/2023/02/10x10x10-7.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Rửa sạch: Trước khi tái chế, hãy rửa sạch hộp carton để loại bỏ bất kỳ chất còn lại bên trong và tránh ô nhiễm cho quá trình tái chế.
                Làm phẳng và nén: Sau khi rửa sạch, bạn có thể làm phẳng và nén hộp carton để tiết kiệm không gian trong thùng tái chế và vận chuyển.
                Tách phần nhựa (nếu có): Nếu hộp carton có phần nhựa như nắp hoặc bao bì, hãy tách chúng ra khỏi phần giấy để tái chế hoặc xử lý riêng biệt.
                Tái chế thành vật dụng mới: Một cách sáng tạo để tái chế hộp carton là biến chúng thành các vật dụng mới như hộp đựng đồ chơi, hộp đựng quà hoặc cảnh quan cho mô hình.
                Sử dụng làm vật liệu xây dựng: Nếu có cơ hội, bạn có thể tái chế hộp carton thành vật liệu xây dựng cho các dự án như làm gốm sứ hoặc làm đồ chơi xây dựng cho trẻ em.
                Tạo ra nghệ thuật từ hộp carton: Sử dụng hộp carton làm nguyên liệu cho các dự án nghệ thuật như làm tác phẩm tranh ảnh hoặc điêu khắc.
                ",
            ],
            [
                'name'=> "Cốc (Cup)",
                'description'=> "Cốc là một loại đồ đựng chất lỏng hoặc chất rắn, thường được làm từ nhựa, giấy hoặc polystyrene.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzqPP-D5FYSPxx3O42rGPfh952umykHat8Mw&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Rửa sạch: Trước khi tái chế, hãy rửa sạch cốc để loại bỏ bất kỳ chất còn lại bên trong và tránh ô nhiễm cho quá trình tái chế.
                Làm phẳng và nén (đối với cốc giấy): Nếu cốc làm từ giấy, bạn có thể làm phẳng và nén chúng để tiết kiệm không gian trong thùng tái chế và vận chuyển.
                Tách phần nhựa (nếu có): Nếu cốc có phần nhựa như nắp hoặc ổ đậy, hãy tách chúng ra khỏi phần giấy để tái chế hoặc xử lý riêng biệt.
                Tái chế thành vật dụng mới: Một cách sáng tạo để tái chế cốc là biến chúng thành các vật dụng mới như đồ trang trí, hộp đựng vật dụng nhỏ hoặc đồ chơi cho trẻ em.
                Sử dụng làm vật liệu xây dựng (đối với cốc polystyrene): Nếu cốc làm từ polystyrene, bạn có thể tái chế chúng thành vật liệu xây dựng cho các dự án như làm bảng cách âm hoặc làm vật liệu cách nhiệt.
                Tạo ra nghệ thuật từ cốc: Sử dụng cốc làm nguyên liệu cho các dự án nghệ thuật như làm tác phẩm tranh ảnh hoặc điêu khắc.
                ",
            ],
            [
                'name'=> "Nắp (Lid):",
                'description'=> "Nắp là phần đậy của các đồ đựng như chai, hộp, hoặc cốc, thường được làm từ nhựa, kim loại hoặc cao su.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuVt26Z7bPNWwiG5AHnhI8GMS_CeqRrBWjuuC3EbeYjL1fAgkst2WB9dF3H-RGWe03g2w&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Tách phần nhựa và kim loại: Nếu nắp có cấu trúc phức tạp gồm cả phần nhựa và kim loại, hãy tách chúng ra khỏi nhau. Nhưng đừng lo lắng, có một số how_to_recycle cho cả hai loại này.
                Tái chế thành hạt nhựa: Nắp nhựa có thể được chuyển đổi thành hạt nhựa tái chế, được sử dụng cho nhiều mục đích khác nhau như sản xuất đồ chơi, băng keo hoặc sản phẩm nhựa khác.
                Sử dụng làm vật liệu xây dựng: Nắp kim loại có thể được tái chế thành vật liệu xây dựng cho các dự án như làm gốm sứ hoặc làm đồ chơi xây dựng cho trẻ em.
                Tái chế thành nghệ thuật: Sử dụng nắp làm nguyên liệu cho các dự án nghệ thuật như làm tác phẩm tranh ảnh hoặc điêu khắc.
                Tạo ra nút bấm hoặc trang trí: Nếu bạn là người thợ thủ công, bạn có thể sử dụng nắp làm nút bấm cho các dự án may mặc hoặc sửa chữa, hoặc sử dụng làm trang trí cho các đồ handmade.
                ",
            ],
            [
                'name'=> "Rác Khác (Other litter):",
                'description'=> "Rác Khác là các vật liệu không thuộc vào các loại rác cụ thể như nhựa, thủy tinh, hay kim loại.",
                'img_url'=> "https://e7.pngegg.com/pngimages/459/226/png-clipart-brown-cardboard-boxes-with-black-trash-bags-and-garbage-waste-collection-household-hazardous-waste-house-clearance-waste-management-others-miscellaneous-recycling.png",
                'is_recycle'=>true,
                'how_to_recycle'=> "Phân loại và xác định vật liệu: Đầu tiên, phải phân loại và xác định loại vật liệu của rác khác. Điều này có thể bao gồm các vật liệu như vải, cao su, gỗ, và nhiều loại vật liệu khác.
                Tái chế thành sản phẩm mới: Dựa trên loại vật liệu, bạn có thể tái chế rác khác thành các sản phẩm mới. Ví dụ, vải có thể được tái chế thành túi mua sắm hoặc đồ trang trí, còn gỗ có thể được tái chế thành đồ nội thất hoặc nghệ thuật.
                Sử dụng làm nguyên liệu cho nghệ thuật: Nếu bạn là một người làm nghệ thuật, bạn có thể sử dụng các vật liệu từ rác khác để tạo ra các tác phẩm nghệ thuật độc đáo.
                Tái sử dụng cho mục đích khác: Hãy tìm cách sáng tạo để tái sử dụng các vật liệu từ rác khác cho các mục đích khác nhau trong cuộc sống hàng ngày, chẳng hạn như sử dụng các đồ vật làm đồ chơi cho trẻ em hoặc đồ dùng gia đình.
                ",
            ],
            [
                'name'=> "Nhựa Khác (Other plastic)",
                'description'=> "Nhựa Khác là các vật liệu nhựa không thuộc vào các loại nhựa cụ thể như PET, HDPE, PVC, hay PP.",
                'img_url'=> "https://hq2.recyclist.co/wp-content/uploads/sites/2/2015/02/no7plastic1-300x300.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Phân loại và xác định loại nhựa: Trước tiên, phải phân loại và xác định loại nhựa của vật liệu Nhựa Khác. Điều này giúp xác định phương pháp tái chế phù hợp.
                Tái chế thành sản phẩm mới: Dựa trên loại nhựa, bạn có thể tái chế Nhựa Khác thành các sản phẩm mới như đồ chơi, đồ nội thất, hoặc vật dụng gia đình.
                Sử dụng làm nguyên liệu cho nghệ thuật: Sử dụng Nhựa Khác làm nguyên liệu cho các dự án nghệ thuật, ví dụ như làm tác phẩm tranh ảnh hoặc điêu khắc.
                Tái sử dụng cho mục đích khác: Hãy tìm cách sáng tạo để tái sử dụng các vật liệu từ Nhựa Khác cho các mục đích khác nhau trong cuộc sống hàng ngày, chẳng hạn như sử dụng làm vật liệu xây dựng hoặc đồ dùng gia đình.
                Tái chế thành nhiều vật liệu khác nhau: Một số loại Nhựa Khác có thể được tái chế thành các vật liệu khác như xốp, sợi vải, hoặc các sản phẩm composite.
                ",
            ],
            [
                'name'=> "Giấy (Paper)",
                'description'=> "Giấy là một loại vật liệu được làm từ sợi cellulose chủ yếu từ gỗ hoặc cây khác nhau.",
                'img_url'=> "https://product.hstatic.net/1000332761/product/o_8cc3b006fd0f4a7d81fff3bdbd4dcc8d_master.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Tách ra và nén lại: Sau khi sử dụng, hãy tách giấy ra khỏi bất kỳ chất còn lại và nén chúng lại để tiết kiệm không gian và thuận tiện cho việc vận chuyển đến cơ sở tái chế.
                Tái chế thành giấy tái chế: Giấy có thể được tái chế thành giấy tái chế mới để sử dụng cho các mục đích như in ấn, bao bì hoặc sản phẩm giấy khác.
                Tái chế thành sản phẩm khác: Sử dụng giấy tái chế để tạo ra các sản phẩm khác như hộp quà, túi xách giấy, hoặc sản phẩm nghệ thuật.
                Sử dụng làm vật liệu đóng gói hoặc đệm: Giấy có thể được tái chế để sử dụng làm vật liệu đóng gói hoặc đệm cho việc bảo vệ hàng hóa trong quá trình vận chuyển.
                Tái chế thành vật liệu xây dựng: Giấy tái chế có thể được sử dụng làm vật liệu xây dựng cho các dự án như làm tường hoặc sàn.
                .",
            ],
            [
                'name'=> "Đồ Đựng Nhựa (Plastic container)",
                'description'=> "",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKzgqDvksOEeKbRIMTTu0vSkDBZZTZDNzWxg&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Rửa sạch: Trước khi tái chế, hãy rửa sạch đồ đựng nhựa để loại bỏ bất kỳ chất còn lại bên trong và tránh ô nhiễm cho quá trình tái chế.
                Tách phần nhựa và phần nhựa cứng (nếu có): Nếu đồ đựng nhựa có phần nhựa và phần nhựa cứng như nắp hoặc ổ đậy, hãy tách chúng ra khỏi nhau để tái chế hoặc xử lý riêng biệt.
                Tái chế thành sản phẩm mới: Dựa trên loại nhựa, bạn có thể tái chế đồ đựng nhựa thành các sản phẩm mới như đồ chơi, hộp đựng vật dụng, hoặc vật liệu xây dựng nhỏ.
                Sử dụng lại trong ngành nghề khác: Đồ đựng nhựa có thể được tái chế để sử dụng trong ngành nghề khác như đóng gói, sản xuất, hoặc chế biến.
                Sử dụng làm vật liệu xây dựng: Nếu có cơ hội, bạn có thể tái chế đồ đựng nhựa thành vật liệu xây dựng cho các dự án như làm gốm sứ hoặc làm đồ chơi xây dựng cho trẻ em.
                Tạo ra sản phẩm nghệ thuật từ nhựa tái chế: Sử dụng nhựa tái chế để tạo ra các sản phẩm nghệ thuật hoặc trang trí nội thất.
                ",
            ],
            [
                'name'=> "Nắp Lật Nhanh (Pop tab):",
                'description'=> "Nắp Lật Nhanh là phần nắp mở chai có thể lật ra nhanh chóng, thường được làm từ nhôm hoặc kim loại.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx5jHFg-7eIDuUTfGrCr88FQs90CmSzhw5qg&usqp=CAUName: Nắp Lật Nhanh (Pop tab)",
                'is_recycle'=>true,
                'how_to_recycle'=> "Tách ra và làm sạch: Trước khi tái chế, hãy tách ra và làm sạch Nắp Lật Nhanh để loại bỏ bất kỳ bụi bẩn hoặc chất cặn còn lại.
                Tái chế thành vật dụng mới: Bạn có thể tái chế Nắp Lật Nhanh để tạo ra các vật dụng mới như vòng cổ, vòng tay, hoặc phụ kiện trang sức khác.
                Sử dụng làm vật liệu nghệ thuật: Sử dụng Nắp Lật Nhanh làm vật liệu cho các dự án nghệ thuật như làm lụa hoặc lá nhôm để tạo ra các tác phẩm nghệ thuật sáng tạo.
                Tái chế thành phụ kiện hoặc trang trí: Tái chế Nắp Lật Nhanh để tạo ra các phụ kiện hoặc trang trí như móc chìa khóa, màn chắn ánh sáng, hoặc các loại đồ trang trí khác.
                Tái chế thành một phần của sản phẩm mới: Nắp Lật Nhanh có thể được sử dụng như một phần của sản phẩm mới như trang trí trên các túi xách, quần áo hoặc giày dép.
                ",
            ],
            [
                'name'=> "Ống Hút (Straw)",
                'description'=> "Ống Hút là vật dụng nhỏ, thường làm từ nhựa hoặc giấy, được sử dụng để hút chất lỏng từ các đồ uống.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMdIGtwjfvL2dzrAx1v8Xn4JjNPTKkzfZpuA&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Ống Hút Kim Loại:
                Tạo Đồ Trang Trí: Sơn hoặc trang trí các ống hút kim loại để tạo ra các vật trang trí như móc treo quần áo, móc chìa khóa hoặc trang trí tường.
                Đóng Gói Quà: Sử dụng ống hút kim loại làm phần trang trí cho gói quà, tạo ra một bước đột phá và sáng tạo.
                Tạo Đồ Chơi DIY: Tái sử dụng các ống hút kim loại để tạo ra các đồ chơi DIY như xe đua nhỏ hoặc cây sáo.
                Đồ Trang Trí Thời Trang: Sử dụng ống hút kim loại làm phụ kiện trang trí cho trang phục, chẳng hạn như làm dây đeo cho kính hoặc làm vòng cổ.
                Dụng Cụ Nghệ Thuật: Sử dụng ống hút kim loại như là dụng cụ vẽ để tạo ra các nét vẽ độc đáo và sáng tạo trên giấy hoặc vật liệu khác.
                Ống Hút Nhựa:
                Tạo Đồ Chơi cho Trẻ Em: Sử dụng ống hút nhựa để tạo ra các đồ chơi cho trẻ em như sáo nhỏ, các đồ chơi xếp hình hoặc đồ chơi thủ công DIY.
                Đóng Gói Đồ Bảo Quản: Sử dụng các ống hút nhựa làm phần trang trí cho gói đồ bảo quản, giúp làm cho gói đồ trở nên độc đáo và hấp dẫn.
                Đồ Trang Trí Nội Thất: Sử dụng ống hút nhựa làm vật liệu trang trí cho nội thất, chẳng hạn như làm móc treo để treo đèn, chân đế cho đồ trang trí hoặc vật liệu làm tranh 3D.
                Dụng Cụ Làm Mô Hình: Sử dụng ống hút nhựa làm dụng cụ làm mô hình để tạo ra các mô hình nhỏ hoặc các tác phẩm nghệ thuật sáng tạo.
                Ống Hút Tre:
                Làm Đồ Chơi Cho Thú Cưng: Sử dụng các ống hút tre để tạo ra các đồ chơi cho thú cưng như những chiếc túi chứa thức ăn hoặc đồ chơi cắn.
                Tạo Đồ Trang Trí Ngoại Thất: Sử dụng ống hút tre làm phần trang trí cho vườn hoặc sân vườn, chẳng hạn như làm giàn treo đồ trang trí hoặc làm vật liệu trang trí cho hòn non bộ.
                Đồ Trang Trí Nội Thất: Sử dụng ống hút tre làm vật liệu trang trí cho nội thất, chẳng hạn như làm màn treo cửa, đèn trang trí hoặc đồ trang trí tường.
                Dụng Cụ Trang Trí Bánh: Sử dụng các ống hút tre như dụng cụ để trang trí bánh, tạo ra các hình dáng và hoa văn độc đáo trên bề mặt bánh.",
            ],
            [
                'name'=> "Miếng Xốp (Styrofoam piece)",
                'description'=> "Miếng Xốp là một loại vật liệu xốp nhẹ, thường được sử dụng cho đóng gói, cách âm hoặc cách nhiệt.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLbTyISyEYJhtgZ0ASW_ASQORTxuxZSSkLSg&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Phân loại và xử lý đúng: Phải chắc chắn phân loại và xử lý đúng Miếng Xốp để tái chế. Styrofoam thường không phân hủy tự nhiên và cần được xử lý đúng cách.
                Tái chế thành vật liệu xây dựng: Miếng Xốp có thể được tái chế thành vật liệu xây dựng cho các dự án nhỏ như làm tường cách âm hoặc làm vật liệu cách nhiệt cho nhà ở.
                Sử dụng làm phụ kiện hoặc đồ trang trí: Tái chế Miếng Xốp để tạo ra các phụ kiện hoặc đồ trang trí như làm móc chìa khóa, hoặc làm img_url trang trí.
                Tái chế thành vật liệu cho nghệ thuật: Sử dụng Miếng Xốp làm vật liệu cho các dự án nghệ thuật như làm bức tranh ảnh hoặc điêu khắc.
                Sử dụng làm vật liệu cho dự án DIY: Bạn có thể sử dụng Miếng Xốp để làm các dự án DIY như làm đồ chơi cho trẻ em hoặc làm đồ trang trí cho nhà cửa.
                ",
            ],
            [
                'name'=> "Rác không được ghi nhãn (Unlabeled litter)",
                'description'=> "Rác không được ghi nhãn là các vật liệu rác không có nhãn hiệu hoặc không thuộc vào các loại rác cụ thể được phân loại.",
                'img_url'=> "https://thumbs.dreamstime.com/b/smiling-green-recycle-bin-cartoon-mascot-character-holding-blank-sign-illustration-isolated-white-background-smiling-green-120320519.jpg",
                'is_recycle'=>true,
                'how_to_recycle'=> "Phân loại và xác định vật liệu: Đầu tiên, phải phân loại và xác định loại vật liệu của Rác không được ghi nhãn. Điều này giúp xác định phương pháp tái chế phù hợp.
                Tái chế thành sản phẩm mới: Dựa trên loại vật liệu, bạn có thể tái chế Rác không được ghi nhãn thành các sản phẩm mới như đồ chơi, đồ nội thất, hoặc vật dụng gia đình.
                Sử dụng làm vật liệu cho nghệ thuật: Sử dụng Rác không được ghi nhãn làm vật liệu cho các dự án nghệ thuật như làm tác phẩm tranh ảnh hoặc điêu khắc.
                Tái sử dụng cho mục đích khác: Hãy tìm cách sáng tạo để tái sử dụng các vật liệu từ Rác không được ghi nhãn cho các mục đích khác nhau trong cuộc sống hàng ngày, chẳng hạn như sử dụng làm đồ chơi cho trẻ em hoặc đồ dùng gia đình.
                Tái chế thành nhiều vật liệu khác nhau: Một số loại Rác không được ghi nhãn có thể được tái chế thành các vật liệu khác như xốp, sợi vải, hoặc các sản phẩm composite.
                ",
            ],
            [
                'name'=> "Điếu thuốc lá (Cigarette)",
                'description'=> "Điếu Cigarette là sản phẩm thải gồm lá thuốc cuốn lại trong giấy cuốn.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaKqMyJ_Kx3OWnSOjy3U9mJOn3uphUrM6MRQ&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Thu gom và tái chế giấy cuốn: Giấy cuốn điếu cigarette có thể được thu gom và tái chế thành giấy tái chế hoặc giấy vệ sinh.
                Sử dụng tro Điếu Cigarette làm phân bón: Tro từ điếu cigarette có thể được sử dụng làm phân bón cho cây trồng trong vườn hoặc hộp cây cảnh.
                Sử dụng vỏ điếu cigarette cho nghệ thuật: Vỏ điếu có thể được sử dụng làm vật liệu cho các dự án nghệ thuật như làm tranh hoặc điêu khắc.
                Tạo ra sản phẩm nghệ thuật từ các thành phần điếu cigarette: Sử dụng các thành phần như lá thuốc hoặc giấy cuốn để tạo ra các tác phẩm nghệ thuật sáng tạo như img_url hoặc điêu khắc.
                Tái chế bằng cách chế biến thành vật liệu khác: Một số nhà nghiên cứu đã phát triển phương pháp chế biến điếu cigarette thành các vật liệu khác như nhựa đường, vật liệu xây dựng, hoặc vật liệu cho sản xuất bao bì.
                ",
            ],
            [
                'name'=> "Túi Nhựa và Bọc Nhựa (Plastic bag - wrapper)",
                'description'=> "Túi nhựa và bọc nhựa là sản phẩm nhựa mềm được sử dụng rộng rãi trong đóng gói hàng hoá và đựng sản phẩm.",
                'img_url'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXYfFmmf2yYk1rMjvj-McNVhkwakHiMdArFw&usqp=CAU",
                'is_recycle'=>true,
                'how_to_recycle'=> "Tái chế thành sản phẩm nhựa tái chế: Túi nhựa và bọc nhựa có thể được tái chế thành các sản phẩm nhựa tái chế như đồ chơi, hộp đựng, hoặc đồ nội thất nhỏ.
                Sử dụng làm vật liệu xây dựng: Túi nhựa và bọc nhựa có thể được tái chế thành vật liệu xây dựng cho các dự án nhỏ như làm gốm sứ hoặc làm vật liệu cách nhiệt cho nhà ở.
                Tái chế thành vật liệu cho nghệ thuật: Sử dụng túi nhựa và bọc nhựa làm vật liệu cho các dự án nghệ thuật như làm tranh hoặc điêu khắc.
                Sử dụng lại cho mục đích đóng gói: Túi nhựa và bọc nhựa sạch có thể được sử dụng lại cho mục đích đóng gói hoặc bọc hàng hóa khác.
                Tái chế bằng cách chế biến thành vật liệu khác: Một số cơ sở tái chế đã phát triển phương pháp chế biến túi nhựa và bọc nhựa thành các vật liệu khác như xốp, sợi vải, hoặc các sản phẩm composite.
                ",
            ],

        ];
        foreach($data as $d)
        {

            WasteDictionary::create($d);
        }
    }
}
