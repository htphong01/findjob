-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 11:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `images` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `slug`, `description`, `author_id`, `images`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, '5 điều ứng viên nên làm trong 15 phút trước phỏng vấn', '5-dieu-ung-vien-nen-lam-trong-15-phut-truoc-phong-van-1', '    Chúng ta thường xuyên được nghe một số lời khuyên về việc hãy đến sớm trước thời gian được hẹn khoảng 15 phút, tuy nhiên, bạn có tận dụng khoảng thời gian này thật sự hữu ích hay chưa? Vì vậy, hãy theo dõi bài viết dưới đây để “quản lý” khoảng thời gian này một cách hiệu quả và áp dụng cho các cuộc phỏng vấn sắp tới nhé!\r\n\r\n<b>1. Đến sớm là cần thiết, tuy nhiên đừng trực tiếp vào trong</b>\r\n    Việc đến sớm giúp bạn hạn chế một số yếu tố bất ngờ có thể xảy ra ảnh hưởng đến lộ trình khiến bạn bị trễ cuộc hẹn, đồng thời, nhiều ứng viên cũng cho rằng đến càng sớm sẽ càng thể hiện sự chuyên nghiệp, đúng giờ. Tuy nhiên, thực tế, thời gian người phỏng vấn hẹn bạn là khoảng thời gian phù hợp để họ có thể chuẩn bị đầy đủ các giấy tờ, hồ sơ cho cuộc phỏng vấn cũng như sắp xếp các công việc khác của họ. Do đó, hãy đến đúng giờ, nhưng đừng vội vào phỏng vấn ngay mà hãy dành thời gian cho một số việc sẽ đề cập dưới đây nhé!\r\n\r\n<b>2. Điều chỉnh tác phong, trang phục</b>\r\n    Sau khi đến địa điểm được hẹn, đừng quên điều chỉnh trang phục, tác phong cẩn thận một lần nữa. Những yếu tố tác động trong quá trình di chuyển sẽ khiến bạn trở nên kém chỉnh chu và mất điểm trước một số nhà tuyển dụng khó tính. Một tác phong nghiêm túc thể hiện một người chuyên nghiệp và có ý thức trong việc xây dựng hình ảnh cá nhân.\r\n\r\n<b>3. Giữ bình tĩnh</b>\r\n    Giữ bình tĩnh trong mọi trường hợp là vô cùng cần thiết, việc bạn đến sớm hơn 15 phút sẽ giúp bạn có thời gian để ổn định tâm lý trước khi bước vào cuộc phỏng vấn. Hít thở sâu, sau đó dần dần giữ hơi thở ổn định, suy nghĩ về những điều tích cực để bản thân được thư giãn và vui vẻ. Bên cạnh năng lực chuyên môn, thì nhà tuyển dụng cũng rất quan tâm đến việc ứng viên có tinh thần tích cực, lạc quan. Do đó, việc giữ cho bản thân bình tĩnh không những giúp bạn thể hiện sự tự tin, chuyên nghiệp mà còn giúp các bạn hạn chế sai sót do tâm lý và gia tăng lợi thế trong mắt nhà tuyển dụng nữa đấy.\r\n\r\n<b>4. Hạn chế tìm hiểu thêm các thông tin về công ty cũng như luyện tập về các câu trả lời</b>\r\n    Việc tìm hiểu về công ty, hiểu về vị trí ứng tuyển hay thử trả lời các câu hỏi có thể xảy ra là công việc bạn nên dành thời gian nghiên cứu thật nghiêm túc ở nhà. Trong khi cuộc phỏng vấn chỉ cách bạn vài phút, việc cố gắng nhớ các thông tin chỉ khiến bạn trở nên căng thẳng hơn, các thông tin có thể nhầm lẫn một cách đáng tiếc. Đối với các câu trả lời chuẩn bị trước phỏng vấn có thể trở nên cứng nhắc, thiếu tự nhiên và gây cảm giác không được chân thật. Một vài lời khuyên cho việc chuẩn bị câu trả lời ở nhà chính là: bạn hãy cố gắng rèn luyện cách trả lời chung nhất và từ đó triển khai ra chi tiết trong từng hoàn cảnh cụ thể để tránh yếu tố bất ngờ từ các câu hỏi nằm ngoài sự chuẩn bị của bản thân. Và việc giữ tinh thần thoải mái như đã đề cập ở trên sẽ giúp bạn làm chủ được tình huống, đưa ra câu trả lời phù hợp nhất.\r\n\r\n<b>5. Hãy thân thiện và giữ thái độ đúng mực đối với các nhân viên khác</b>\r\n    Nhân viên lễ tân, hành chính hay bảo vệ cũng là một bộ phận quan trọng của tổ chức, và quan điểm của họ cũng góp phần ảnh hưởng đến quyết định của nhà tuyển dụng. Đừng khiến họ cảm thấy “ác cảm” với bạn, hãy thể hiện bản thân là người tích cực, thân thiện và phù hợp với văn hóa tổ chức mà doanh nghiệp đang tìm kiếm.\r\n\r\nTrên đây là một số lưu ý giúp bạn sử dụng 15 phút “cam go” trước khi bước vào phỏng vấn. Hy vọng bài viết sẽ giúp bạn có sự chuẩn bị tốt nhất để có thể tự tin chinh phục mọi cuộc phỏng vấn trong tương lai.', 8, 'Job/images/article1.png', 1, 48, '2020-07-08 17:00:00', '2021-01-14 21:53:27'),
(2, 'Tuyển dụng kỹ thuật số: những điều NÊN & KHÔNG NÊN', 'tuyen-dung-ky-thuat-so-nhung-dieu-nen-&-khong-nen-2', '   Đại dịch Covid-19 đã làm đảo lộn thói quen làm việc và sinh hoạt của chúng ta. Trong đó, các lệnh giới nghiêm hay yêu cầu giãn cách xã hội buộc các doanh nghiệp và chuyên viên nhân sự phải chuyển đổi các hoạt động tuyển dụng từ các phương thức truyền thống sang áp dụng công nghệ bằng các công cụ kỹ thuật số.\r\n   Với bối cảnh kinh tế thay đổi đột ngột trong giai đoạn đại dịch Covid 19 vừa qua, sự thay đổi nhanh chóng và phù hợp chính là chìa khoá giúp doanh nghiệp thích ứng tốt với thị trường. Việc đảm bảo đáp ứng được nhu cầu về nhân lực nhưng vẫn giữ vững những tiêu chí an toàn trong đại dịch góp phần thúc đẩy nhanh việc ứng dụng công cụ kỹ thuật số trong các hoạt động của doanh nghiệp, trong đó có tuyển dụng kỹ thuật số. Sự thay đổi này được dự báo là không chỉ diễn ra trong mùa dịch những tháng vừa qua, mà còn ảnh hưởng đến thói quen tuyển dụng của ngành nhân sự nói chung trong tương lai.\r\n\r\n   Vậy, với các hoạt động tuyển dụng kỹ thuật số, các doanh nghiệp <b>NÊN & KHÔNG NÊN</b> làm gì? Dưới đây là một vài gợi ý từ chúng tôi.\r\n\r\n<b>NÊN xây dựng website của doanh nghiệp một cách chuyên nghiệp</b>\r\nHiện nay, việc các doanh nghiệp sử dụng các nền tảng tuyển dụng trực tuyến, điển hình như VietnamWorks, là rất phổ biến. Tuy nhiên, website của công ty là nơi doanh nghiệp có thể thể hiện rõ nét văn hóa của công ty mình và truyền tải nó đến với ứng viên tiềm năng. Trang website không nên được sử dụng chỉ để thu hút khách hàng; nếu muốn công ty phát triển, nhà tuyển dụng cũng cần thu hút nhân viên tương lai. Hãy viết câu chuyện lịch sử hình thành của doanh nghiệp, những lời nhắn nhủ của những thành viên trong ban lãnh đạo, hãy tạo một chuyên mục Sự nghiệp và con đường thăng tiến tại công ty và cho phép ứng viên gửi CV trực tiếp ở website.\r\n\r\nHãy chú ý đến trải nghiệm của ứng viên khi họ tìm kiếm thông tin về doanh nghiệp trên website chính thức: bố cục rõ ràng, thông tin dễ hiểu, làm nổi bật những điểm quan trọng muốn ứng viên chú ý (ví dụ như vị trí đang cần tuyển gấp với phúc lợi hấp dẫn). Ngoài ra, đừng quên để ý đến yếu tố hiển thị: dù là trên thiết bị máy tính, smartphone hay máy tính bảng, website của công ty đều hiển thị trơn tru và đẹp mắt!\r\n\r\n<b>NÊN tận dụng các nền tảng và công cụ video trực tuyến</b>\r\nNhững khó khăn do Covid-19 gây ra đòi hỏi chúng ta phải thích nghi, đồng thời, cho ta cơ hội để thử nghiệm và thay đổi. Phỏng vấn sử dụng phần mềm gọi video trực tuyến không còn mới lạ, tuy nhiên, có thể nói, chưa thực sự rộng rãi và phổ biến cho đến khi Covid-19 xuất hiện, trong khi những lợi ích rõ ràng có thể thấy được là tiết kiệm thời gian & chi phí. Chúng ta không cần phải mất thời gian cho việc di chuyển, ứng viên có thể ở một vùng khác, kể cả là ở một đất nước khác. Chúng ta không cần tốn công sức thực hiện các thủ tục và chi phí cho một nơi chốn vật lý để gặp mặt. Và điều này không chỉ thuận lợi cho doanh nghiệp mà còn có lợi cho cả ứng viên.\r\n\r\nPhỏng vấn trực tuyến có thể được thực hiện với Skype, Zoom hoặc những phần mềm khác tương tự. Hiện tại, có rất nhiều nền tảng và phần mềm không chỉ cung cấp dịch vụ gọi video trực tuyến mà còn tích hợp công cụ giúp quản lý, đánh giá online, hoặc tích hợp AI để hỗ trợ doanh nghiệp trong quy trình tuyển dụng.\r\n\r\n<b>NÊN khai thác sức mạnh của mạng xã hội</b>\r\nSẽ là một thiếu sót lớn nếu nhắc đến tuyển dụng kỹ thuật số mà không nhắc đến mạng xã hội. Mạng xã hội là một trong những công cụ tiết kiệm chi phí nhất để xây dựng và quảng bá thương hiệu nhà tuyển dụng cũng như tiếp cận trực tiếp đến ứng viên tiềm năng.\r\n\r\nFacebook, Linkedin hay Instagram đều có những gói chạy quảng cáo tùy theo ngân sách của doanh nghiệp, mà chắc chắn là tiết kiệm hơn so với các hoạt động quảng cáo truyền thống qua TV, bảng hiệu hay báo chí. Không những vậy, các mạng xã hội còn cung cấp báo cáo insight chi tiết, hoặc nhà tuyển dụng cũng có thể tự mình tìm hiểu được nhiều khía cạnh của ứng viên tiềm năng thông qua trang cá nhân của họ.\r\n\r\n<b>NÊN sử dụng công cụ đánh giá online (pre-employment assessment)</b>\r\nNhững công cụ đánh giá có rất nhiều loại, chúng cung cấp những đánh giá khách quan cùng nhiều thông tin “ẩn” về ứng viên, hỗ trợ nhà tuyển dụng đưa ra những quyết định chính xác hơn và trong một thời gian ngắn hơn, nhất là khi nhà tuyển dụng không thể gặp trực tiếp ứng viên. Hãy nhớ rằng, những công cụ này hỗ trợ chứ không thay thế nhà tuyển dụng để đưa ra quyết định.\r\n\r\nNhững công cụ đánh giá doanh nghiệp có thể cân nhắc sử dụng như: năng lực tư duy để đánh giá mức độ nhanh nhạy, kiểm tra tính cách để đánh giá mức độ phù hợp với văn hóa của đội nhóm và công ty, mô phỏng công việc để đánh giá khả năng giải quyết vấn đề, v.v…\r\n\r\nNgoài ra, nếu doanh nghiệp sử dụng công cụ đánh giá từ một bên thứ ba, bên cạnh tính chính xác cũng như ngân sách, hãy cân nhắc về mặt bảo hành hệ thống và các dịch vụ tư vấn, hỗ trợ đi kèm. Điều này nên được cân nhắc đối với cả việc phỏng vấn trực tiếp hay trực tuyến.\r\n\r\n<b>KHÔNG NÊN spam</b>\r\nHãy chọn lọc những kênh quảng bá phù hợp với doanh nghiệp và xây dựng chiến lược, đầu tư về hình thức lẫn nội dung, làm đẹp thương hiệu nhà tuyển dụng của doanh nghiệp. Khi kết nối với một người nào đó, hãy nhớ sự chân thành và cá nhân hóa, đừng để họ cảm thấy phiền và nghĩ mình đang bị spam.\r\n\r\n<b>KHÔNG NÊN lãng quên yếu tố con người</b>\r\nKhi mà quy trình tuyển dụng của doanh nghiệp có thể hoàn toàn được thực hiện trực tuyến, từ bước tiếp nhận CV, phỏng vấn và đánh giá, đến cả bước onboarding (hiện tại đã có nhiều công cụ và các hoạt động onboarding trực tuyến), chúng ta phụ thuộc và tiếp cận nhiều hơn với các thiết bị công nghệ. Đôi khi, chúng ta sẽ quên đi khía cạnh con người trong toàn bộ quy trình này.\r\n\r\nĐừng im lặng hay bặt tăm sau khi phỏng vấn, hãy đưa feedback cho ứng viên và phản hồi thông tin một cách rõ ràng về thời gian cũng như kết quả. Ứng viên sẽ có trải nghiệm tốt hơn với doanh nghiệp, kể cả khi họ gia nhập công ty hay không.        \r\n\r\n<b>KHÔNG NÊN bỏ qua những rủi ro có thể xảy ra</b>\r\nKhông phải ứng viên nào cũng thực sự có mong muốn được làm việc tại doanh nghiệp. Việc làm giả những thông tin trên CV cũng rất có khả năng xảy ra.\r\n\r\n   Ngoài ra, website cũng như những truy cập vào các thông tin công khai của doanh nghiệp cần được an toàn trước những kẻ xấu hay hacker, nên cũng cần lưu tâm đến vấn đề bảo mật này.', 13, 'Job/images/article2.png', 1, 35, '2020-07-09 17:00:00', '2020-07-14 09:14:32'),
(3, 'Những điều nhà tuyển dụng cần lưu ý khi sàng lọc CV', 'nhung-dieu-nha-tuyen-dung-can-luu-y-khi-sang-loc-cv-3', 'Sàng lọc CV là công đoạn quan trọng của các nhà tuyển dụng sau khi đăng tải thông tin tuyển dụng. Nếu cẩn thận và chăm chút kỹ lưỡng ở bước này, bạn sẽ tìm ra được những CV chất lượng. Điều này đồng nghĩa với việc ứng viên mà bạn muốn phỏng vấn sẽ có mức độ phù hợp với công ty cao hơn. Để làm được điều này, trong quá trình sàng lọc CV, nhà tuyển dụng cần lưu ý những vấn đề sau.\r\n\r\n<b>CV trình bày cẩu thả, sai chính tả</b>\r\n    Trình bày CV cẩu thả và sai lỗi chính tả là lỗi thường gặp ở nhiều ứng viên, và đây là một trong những yếu tố quan trọng để nhà tuyển dụng đánh giá ứng viên. Thực tế một người nếu mắc phải những lỗi cơ bản trên thường thiếu sự cẩn thận hoặc họ không quan trọng với vị trí công việc này. Ngược lại, một ứng viên chuyên nghiệp sẽ chú ý nhiều đến các chi tiết như chính tả, dấu câu, ngữ pháp,…\r\n\r\n<b>1. Khoảng cách giữa các công việc đã làm quá xa</b>\r\n    Một điều tiếp theo nhà tuyển dụng cần lưu ý khi xem xét CV của ứng viên chính là lịch sử việc làm của họ. Nếu khoảng cách giữa mỗi lần làm việc của ứng viên cách nhau quá xa, bạn nên đặt câu hỏi rằng họ đã làm gì trong khoảng thời gian này. Tuy nhiên đây không phải là điều kiện để bạn loại bỏ CV ngay lập tức. Nếu bạn không lý giải được điều này mà CV có vẻ phù hợp với công việc, hãy hỏi ứng viên trong lần phỏng vấn. Có thể ứng viên sẽ đưa ra một số lý do mà bạn hoàn toàn chấp nhận được như bệnh tật, công việc gia đình, học các chương trình bổ sung,…\r\n\r\n<b>2. CV có nội dung không rõ ràng</b>\r\n    Các nhà tuyển dụng đều biết rằng hầu hết ứng viên thường nộp đơn và nhiều vị trí cùng lúc mỗi khi tìm việc. Điều này đồng nghĩa với việc không chỉ bạn mà còn nhiều nhà tuyển dụng khác nữa cũng sẽ nhận được CV này. Tuy nhiên, nếu nhận thấy CV của ứng viên có vẻ “chung chung”, nội dung không rõ ràng thì có thể họ chỉ dùng một mẫu CV để gửi chung cho nhiều vị trí. Việc không tùy chỉnh CV theo nội dung mô tả công việc cho thấy ứng viên không thật sự tâm huyết với vị trí công việc này. Ngược lại nếu một CV được tùy chỉnh nội dung phù hợp, cho thấy ứng viên đã có nghiên cứu và tìm hiểu về công ty. Đồng thời họ sẽ liên kết được những kỹ năng của bản thân đáp ứng được với yêu cầu của công việc đã đề ra.\r\n\r\n<b>3. Không thực hiện theo các chỉ dẫn</b>\r\n    Trong một số trường hợp, nhà tuyển dụng sẽ đưa ra các yêu cầu về việc nộp CV như: Không gửi tin nhắn riêng mà gửi qua email, cấu trúc đặt tiêu đề email, tài liệu đính kèm,… Nếu ứng viên cố tình không tuân thủ, nhà tuyển dụng có khả năng loại bỏ CV của họ. Một ứng viên được xem là phù hợp đầu tiên cần đọc, hiểu các yêu cầu cơ bản và nghiêm túc thực hiện chúng. Điều này không chỉ thể hiện sự tôn trọng dành cho nhà tuyển dụng mà còn thể hiện tính chuyên nghiệp của ứng viên.\r\n\r\n    Dù phỏng vấn trực tiếp hay viết CV thì ứng viên cũng phần nào thể hiện được tính cách của họ. Nhà tuyển dụng cần khéo léo nhận ra những dấu hiệu trên để đưa ra các lựa chọn sáng suốt cho mình nhé.', 8, 'articleImages\\Những-điều-nhà-tuyển-dụng-cần-lưu-ý-khi-sàng-lọc-CV.jpg', 1, 26, '2020-07-14 04:03:00', '2021-01-15 09:39:07'),
(7, 'Nhảy việc và những con số bạn cần phải lưu tâm', 'nhay-viec-va-nhung-con-so-ban-can-phai-luu-tam-7', 'Dù bạn nhảy việc vì lý do gì cũng hãy cân nhắc đến những “con số” sau đây nhé!\r\n\r\nLương thưởng không như mong đợi – nhảy việc!\r\nMâu thuẫn với cấp trên – nhảy việc!\r\nKhông hòa nhập được với đồng nghiệp – nhảy việc!\r\nTự nhiên chán công việc hiện tại – nhảy việc!\r\n…\r\n\r\nNhảy việc dường như là giải pháp <i>“tuyệt vời”</i> cho hầu hết các vấn đề khó khăn mà chúng ta gặp phải khi đi làm. Nhưng bạn có từng tự hỏi bản thân rằng: <i>“Khi nào thì nên nhảy việc và nhảy việc liên tục có ảnh hưởng gì đến sự nghiệp lâu dài không?”</i> Hãy cùng HR Insider tham khảo những “con số” sau để tìm ra câu trả lời phù hợp với bản thân nhé!\r\n\r\n<b>3 – 4 năm: Khoảng cách an toàn giữa các lần nhảy việc</b>\r\nCon số này được cho là vừa vặn và đủ “sức nặng” để thuyết phục nhà tuyển dụng rằng, bạn đã tích lũy nhiều kinh nghiệm, kỹ năng ở công việc cũ, sẵn sàng cho những thử thách và cơ hội mới. Đồng thời, con số này cũng khiến nhà tuyển dụng cảm thấy yên tâm hơn về thái độ nghiêm túc cũng như mức độ chung thủy của bạn đối với một doanh nghiệp. Nhiều quản lý cấp cao còn đưa ra lời khuyên rằng, các bạn trẻ nên cố gắng không nhảy việc trong 3 năm đầu mới ra trường. Bởi đó là “thời điểm vàng” để bạn học hỏi, trau dồi kiến thức, kỹ năng, thích nghi với môi trường làm việc chuyên nghiệp.\r\n\r\nBên cạnh đó, nhiều khảo sát đã cho thấy rằng, một người nhảy việc quá nhiều thường có xu hướng khó cảm thấy hài lòng và chịu ổn định với một công việc lâu dài. Vì lúc này, nhảy việc trở thành một thói quen, một giải pháp cho bất kỳ trở ngại nào mà họ gặp phải trong công việc hiện tại. Và đương nhiên, khi nhìn một CV với số lần nhảy việc nhiều, nhà tuyển dụng sẽ ngay lập tức đặt dấu chấm hỏi về năng lực, trình độ cũng như sự chuyên nghiệp của ứng viên.\r\n\r\n<b>6 – 11 tuần: Khoảng thời gian trung bình để tìm kiếm công việc mới</b>\r\nKhi nhảy việc, một người lao động bình thường sẽ mất trung bình khoảng 8 tuần để chuẩn bị. Trong đó, 2 tuần sẽ dành cho việc suy nghĩ và cân nhắc về vấn đề nhảy việc. 6 tuần tiếp theo là thời gian để chuẩn bị hồ sơ, tìm kiếm công việc mới cũng như ứng tuyển, tham gia phỏng vấn. Tuy nhiên, con số này sẽ tăng lên khoảng 10 – 11 tuần đối với cấp quản lý.\r\n\r\nBên cạnh đó, trung bình một người người lao động bình thường sẽ mất khoảng 2 tháng để chấp nhận lời đề nghị mới. Nhưng có không ít người phải mất tới 35 tuần (gần 9 tháng) để đạt được thỏa thuận hợp ý. Nghĩa là, khoảng thời gian tìm kiếm “bến đỗ” mới liên quan mật thiết đến chức vụ và kinh nghiệm làm việc.\r\n\r\n<b>3 câu hỏi cần tự vấn trước khi quyết định nhảy việc</b>\r\n<b>Câu 1: Tại sao bản thân nên nhảy việc vào thời điểm này?</b>\r\nKhi đã trưởng thành, bạn không thể quyết định một vấn đề chỉ bằng cảm tính mà thiếu đi sự suy xét, nhảy việc cũng vậy. Bạn đừng vì chỉ “không ưa cấp trên, ghét đồng nghiệp” hay “chán việc, tự nhiên thấy lương ở đây thấp” mà lựa chọn nhảy việc để rồi không biết bản thân sẽ phải làm gì tiếp theo. Hãy tự hỏi chính mình rằng, nếu nhảy việc vào thời điểm này, bản thân sẽ được gì, có lợi ích gì? Liệu sự ra đi này có giúp bạn đạt được mục tiêu của mình hay không? Bạn có được thăng chức – tăng lương hay được học hỏi nhiều hơn, phát triển trong lĩnh vực mình muốn hay không? Nếu câu trả lời là có, bạn có thể tự tin hơn với quyết định của bản thân.\r\n\r\nNhưng nếu câu trả lời của bạn là không hay thậm chí bạn còn chưa biết bản thân sẽ làm gì tiếp theo thì bạn hãy khoan nghĩ đến chuyện nhảy việc. Vì một khi không chuẩn bị trước, bạn hoàn toàn có thể rơi vào trạng thái thất nghiệp lâu dài và khiến sự nghiệp bản thân có một khoảng trống vô nghĩa.\r\n\r\n<b>Câu 2: Thời gian qua, bản thân đã học hỏi được những gì?</b>\r\nMột điều mà bạn cần cân nhắc trước khi nhảy việc chính là bản thân đã tích lũy được kinh nghiệm, kiến thức gì trong thời gian làm việc vừa qua. Những điều bạn học có giúp ích gì cho việc bạn thăng tiến trong tương lai hay không? Hãy liệt kê những điều này ra giấy và cân nhắc lại một lần nữa, liệu những kiến thức, kinh nghiệm này có đủ để bạn tìm được công việc mới tốt hơn hay không?\r\n\r\nVà đừng quên hỏi bản thân rằng, tại sao lúc ban đầu mình lại chọn công việc này? Liệu những gì bản thân mong muốn trước lúc làm việc tại đây đã đạt được chưa? Nếu chưa đạt thì nguyên nhân là do đâu? Hãy suy xét vấn đề này một cách khách quan nhất để chính bản thân bạn hiểu được mình cần phải làm gì tiếp theo, ra đi hay ở lại? Lựa chọn nào sẽ giúp bạn thực hiện được các mong muốn của mình.\r\n\r\n<b>Câu 3: Cuộc sống sẽ ra sao nếu không có thu nhập trong ít nhất là 6 tuần?</b>\r\nMột điều vô cùng quan trọng mà hầu hết các bạn trẻ đều quên cân nhắc khi nhảy việc chính là vấn đề thu nhập. Khi trưởng thành, bạn không thể tiếp tục “sống bám” vào cha mẹ mà phải tự chi trả các khoản chi phí trong cuộc sống. Vì vậy, trước khi nhảy việc bạn hãy đặt câu hỏi và nghiêm túc suy nghĩ về việc cuộc sống của bản thân sẽ ra sao nếu hoàn toàn không có thu nhập trong ít nhất là 6 tuần? Lúc này, bạn sẽ biết rõ nhất bản thân mình cần làm gì tiếp theo và có sự chuẩn bị tốt nhất nếu muốn nghỉ việc.\r\n\r\nĐể nhảy việc không phải là một “ván bạc” hên xui may rủi, bạn hãy cân nhắc thật nghiêm túc trước khi ra quyết định. Tuyệt đối đừng chỉ vì những cảm xúc nhất thời mà nhảy việc để rồi khiến sự nghiệp rơi vào khoảng thời gian khó khăn. Hy vọng những chia sẻ trên của HR Insider sẽ giúp các bạn tìm ra câu trả lời thích hợp cho riêng mình.', 10, 'articleImages\\article3.jpg', 1, 27, '2020-08-03 10:11:37', '2021-01-10 07:07:53'),
(11, 'Top 6 câu hỏi hay để xác định ứng viên phù hợp với vị trí quản lý', 'top-6-cau-hoi-hay-de-xac-dinh-ung-vien-phu-hop-voi-vi-tri-quan-ly-11', '<p><span style=\"color: #333333; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; background-color: #ffffff;\">Kh&aacute;c với c&aacute;c vị tr&iacute; th&ocirc;ng thường, vị tr&iacute; quản l&yacute; b&ecirc;n cạnh nghiệp vụ chuy&ecirc;n m&ocirc;n, c&aacute;c kỹ năng l&atilde;nh đạo sẽ quyết định ứng vi&ecirc;n c&oacute; ph&ugrave; hợp với vị tr&iacute; hay kh&ocirc;ng. Vậy l&agrave;m thế n&agrave;o để nh&agrave; tuyển dụng x&aacute;c định được liệu đ&acirc;y c&oacute; phải ứng vi&ecirc;n ph&ugrave; hợp m&agrave; doanh nghiệp đang t&igrave;m kiếm? Trong b&agrave;i viết n&agrave;y, T&igrave;m Việc Nhanh sẽ cung cấp 6 c&acirc;u hỏi chọn lọc gi&uacute;p nh&agrave; tuyển dụng đ&aacute;nh gi&aacute; mức độ sẵn s&agrave;ng của ứng vi&ecirc;n với vị tr&iacute; quản l&yacute;</span></p>\r\n<p><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Th&ocirc;ng thường, c&oacute; 2 phương thức để nh&agrave; tuyển dụng t&igrave;m kiếm người đảm nhận vị tr&iacute; quản l&yacute;: bổ nhiệm nh&acirc;n sự trong tổ chức hoặc t&igrave;m kiếm từ nguồn lực b&ecirc;n ngo&agrave;i. Tuy nhi&ecirc;n, để x&aacute;c định được đ&acirc;u l&agrave; người ph&ugrave; hợp th&igrave; nh&agrave; tuyển dụng n&ecirc;n đ&aacute;nh gi&aacute; ứng vi&ecirc;n bằng những c&acirc;u hỏi về năng lực hoặc tư duy giải quyết c&aacute;c vấn đề quản trị. Giữa c&aacute;c ứng cử vi&ecirc;n c&oacute; năng lực chuy&ecirc;n m&ocirc;n như nhau, th&igrave; việc đ&aacute;nh gi&aacute; dựa tr&ecirc;n bộ c&acirc;u hỏi sẽ g&oacute;p phần x&aacute;c định chuẩn x&aacute;c hơn ứng vi&ecirc;n ph&ugrave; hợp nhất.</span></p>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">1. L&agrave;m thế n&agrave;o để bạn quản l&yacute; xung đột (với nh&oacute;m của bạn, c&aacute;c b&ecirc;n li&ecirc;n quan v&agrave; người quản l&yacute; trực tiếp)? M&ocirc; tả phương ph&aacute;p quản l&yacute; xung đột của bạn?<br /></span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Trong qu&aacute; tr&igrave;nh l&agrave;m việc, xung đột l&agrave; vấn đề kh&ocirc;ng thể tr&aacute;nh khỏi, việc nh&agrave; quản l&yacute; biết c&aacute;ch kiểm so&aacute;t xung đột v&agrave; duy tr&igrave; m&ocirc;i trường l&agrave;m việc t&iacute;ch cực (bao gồm điều chỉnh c&aacute;c xung đột trở n&ecirc;n t&iacute;ch cực, mang lại sự ph&aacute;t triển cho tổ chức) cũng l&agrave; một yếu tố quan trọng để đ&aacute;nh gi&aacute; một nh&agrave; quản trị đ&aacute;ng gi&aacute;.</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">2. Nếu nh&acirc;n vi&ecirc;n gặp vấn đề về hiệu suất l&agrave;m việc, bạn sẽ l&agrave;m thế n&agrave;o để n&acirc;ng cao hiệu suất l&agrave;m việc của nh&acirc;n vi&ecirc;n?<br /></span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Quản trị năng suất l&agrave;m việc của nh&acirc;n vi&ecirc;n l&agrave; một kh&iacute;a cạnh quan trọng của nh&agrave; quản l&yacute;. Tuy nhi&ecirc;n, c&oacute; rất nhiều yếu tố t&aacute;c động đến năng suất l&agrave;m việc của từng c&aacute; nh&acirc;n. Nh&agrave; quản l&yacute; c&oacute; tr&aacute;ch nhiệm giải quyết c&aacute;c vấn đề li&ecirc;n quan đến hiệu suất l&agrave;m việc của nh&acirc;n vi&ecirc;n. Việc nh&agrave; quản l&yacute; kh&eacute;o l&eacute;o trong việc đ&aacute;nh gi&aacute;, tr&ograve; chuyện hay n&acirc;ng cao hiệu suất cũng l&agrave; một ch&igrave;a kh&oacute;a quản trị th&agrave;nh c&ocirc;ng.</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">3. Bạn sẽ xử l&yacute; như thế n&agrave;o về những thay đổi bất ngờ từ quản l&yacute; cấp tr&ecirc;n? (Đối với tuyển dụng vị tr&iacute; quản l&yacute; cấp trung).<br /></span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">C&aacute;c biến động thường xuy&ecirc;n từ m&ocirc;i trường b&ecirc;n ngo&agrave;i sẽ c&oacute; t&aacute;c động đến một số mục ti&ecirc;u của tổ chức, do đ&oacute;, c&aacute;c nh&agrave; quản trị cấp cao sẽ đưa ra c&aacute;c chiến lược để ph&ugrave; hợp với sự thay đổi đ&oacute;. Việc đưa ra phương ph&aacute;p để th&iacute;ch nghi với những thay đổi sẽ cho thấy nh&agrave; quản l&yacute; trung gian c&oacute; sự nhanh nhạy v&agrave; linh động trong việc điều phối c&aacute;c c&ocirc;ng việc cho nh&acirc;n vi&ecirc;n hướng tới mục ti&ecirc;u chung.</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">4. L&agrave;m thế n&agrave;o để bạn cung cấp những phản hồi t&iacute;ch cực, mang t&iacute;nh x&acirc;y dựng cho cấp dưới? L&agrave;m thế n&agrave;o để bạn dễ d&agrave;ng nhận được c&aacute;c th&ocirc;ng tin phản hồi về bản th&acirc;n?<br /></span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Một nh&agrave; quản l&yacute; giỏi cần c&oacute; kỹ năng giao tiếp giỏi, cung cấp những phản hồi mang t&iacute;nh x&acirc;y dựng cho nh&acirc;n vi&ecirc;n v&agrave; ngược lại, khuyến kh&iacute;ch nh&acirc;n vi&ecirc;n đưa ra những phản hồi về nh&agrave; quản l&yacute; l&agrave; phương thức gi&uacute;p tối ưu h&oacute;a năng suất l&agrave;m việc, đồng thời, x&acirc;y dựng một m&ocirc;i trường l&agrave;m việc l&agrave;nh mạnh, ph&aacute;t triển.</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">5. Tại sao bạn muốn trở th&agrave;nh một nh&agrave; quản l&yacute;?</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Liệu ứng vi&ecirc;n c&oacute; thật sự đam m&ecirc; v&agrave; c&oacute; động lực th&uacute;c đẩy trở th&agrave;nh một nh&agrave; quản l&yacute;? Hiểu r&otilde; về động lực sẽ gi&uacute;p nh&agrave; tuyển dụng x&aacute;c định đ&acirc;y c&oacute; phải l&agrave; ứng vi&ecirc;n c&oacute; kiến thức, đam m&ecirc; v&agrave; sự chuẩn bị cho vị tr&iacute; n&agrave;y hay chỉ đơn giản ứng tuyển v&igrave; cảm t&iacute;nh v&agrave; cảm thấy m&igrave;nh ph&ugrave; hợp.</span></h4>\r\n<h4 style=\"box-sizing: border-box; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; background-color: #ffffff; font-size: 16px !important; margin: 20px !important auto 20px !important auto;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: bold;\">6. Bạn sẽ giải quyết như thế n&agrave;o với quản l&yacute; cấp cao về những sai lầm m&agrave; nh&oacute;m do bạn quản l&yacute; đ&atilde; thực hiện?</span></h4>\r\n<p><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Người quản l&yacute; c&oacute; đ&atilde; sẵn s&agrave;ng chịu tr&aacute;ch nhiệm cho sự th&agrave;nh c&ocirc;ng v&agrave; thất bại của nh&oacute;m hay kh&ocirc;ng? Người quản l&yacute; c&oacute; thể đ&atilde; kh&ocirc;ng phạm sai lầm, nhưng nh&oacute;m của họ đ&atilde; l&agrave;m v&agrave; đ&acirc;y l&agrave; một dấu hiệu cho thấy một số c&ocirc;ng việc đ&atilde; được quản l&yacute; sai dẫn đến kết quả kh&ocirc;ng như mong muốn.</span></p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Việc x&aacute;c định một nh&agrave; quản l&yacute; tiềm năng sẽ tiết kiệm rất nhiều nguồn lực cho doanh nghiệp. Tr&ecirc;n đ&acirc;y l&agrave; một số c&acirc;u hỏi m&agrave; nh&agrave; tuyển dụng c&oacute; thể tham khảo v&agrave; &aacute;p dụng một c&aacute;ch linh động, t&ugrave;y thuộc v&agrave;o cấp độ quản l&yacute; m&agrave; doanh nghiệp t&igrave;m kiếm, nhằm mang lại hiệu quả tối ưu nhất.</span></p>\r\n<p>&nbsp;</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', 5, 'articleImages\\article.png', 1, 18, '2020-08-05 03:52:44', '2021-01-14 21:56:37'),
(16, 'Những lý do khiến nhà tuyển dụng không tuyển được ứng viên', 'nhung-ly-do-khien-nha-tuyen-dung-khong-tuyen-duoc-ung-vien-16', '<p><strong>L&agrave; một nh&agrave; tuyển dụng, việc tuyển được nh&acirc;n t&agrave;i cho c&ocirc;ng ty l&agrave; nhiệm vụ quan trọng h&agrave;ng đầu. Thế nhưng c&oacute; kh&ocirc;ng &iacute;t trường hợp, c&ocirc;ng ty hội tụ đầy đủ c&aacute;c yếu tố như lương cao, ph&uacute;c lợi tốt&hellip; nhưng vẫn kh&ocirc;ng t&igrave;m được ứng vi&ecirc;n ph&ugrave; hợp. Vậy l&yacute; do nằm ở đ&acirc;u? C&aacute;c nh&agrave; tuyển dụng h&atilde;y c&ugrave;ng tham khảo một số l&yacute; do được liệt k&ecirc; dưới đ&acirc;y nh&eacute;.</strong></p>\r\n\r\n<p><strong>Kh&ocirc;ng hiểu r&otilde; mục ti&ecirc;u tuyển dụng</strong><br>Khi l&agrave;m bất cứ việc g&igrave;, việc x&aacute;c định v&agrave; hiểu r&otilde; mục ti&ecirc;u l&agrave; điều v&ocirc; c&ugrave;ng quan trọng. Trước khi bắt đầu tuyển dụng, bạn cần phải x&aacute;c định r&otilde; c&aacute;c vấn đề như: C&ocirc;ng việc n&agrave;y y&ecirc;u cầu kỹ năng g&igrave;? Cần bao nhi&ecirc;u năm kinh nghiệm cho vị tr&iacute; n&agrave;y? Bằng cấp li&ecirc;n quan ứng vi&ecirc;n cần phải c&oacute; l&agrave; g&igrave;?</p>\r\n<p>Việc l&agrave;m r&otilde; c&aacute;c y&ecirc;u cầu c&ocirc;ng việc v&agrave; kỹ năng, phẩm chất mỗi c&aacute; nh&acirc;n l&agrave; điều rất quan trọng. Đ&acirc;y được xem l&agrave; thước đo để bạn dễ d&agrave;ng đối chiếu khi duyệt hồ sơ. Từ đ&oacute;, bạn c&oacute; thể khoanh v&ugrave;ng được những ứng vi&ecirc;n tiềm năng để đi tiếp v&agrave;o v&ograve;ng phỏng vấn. Thực hiện điều n&agrave;y một c&aacute;ch cẩn thận ngay từ đầu sẽ gi&uacute;p nh&agrave; tuyển dụng tiết kiệm được thời gian v&agrave; dễ d&agrave;ng t&igrave;m được ứng vi&ecirc;n ph&ugrave; hợp với c&ocirc;ng ty.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/05/Nh%E1%BB%AFng-l%C3%BD-do-khi%E1%BA%BFn-nh%C3%A0-tuy%E1%BB%83n-d%E1%BB%A5ng-kh%C3%B4ng-tuy%E1%BB%83n-%C4%91%C6%B0%E1%BB%A3c-%E1%BB%A9ng-vi%C3%AAn-h%C3%ACnh-%E1%BA%A3nh-1.jpg\" style=\"height:350px; width:600px\" /></p>\r\n\r\n<p><strong>Nội dung tin đăng sơ s&agrave;i</strong><br />C&oacute; rất nhiều c&ocirc;ng ty đăng tải th&ocirc;ng tin tuyển dụng rất sơ s&agrave;i, kh&ocirc;ng c&oacute; m&ocirc; tả c&ocirc;ng việc v&agrave; y&ecirc;u cầu r&otilde; r&agrave;ng. Từ đ&oacute; khiến người t&igrave;m việc hiểu lầm v&agrave; hậu quả l&agrave; nh&agrave; tuyển dụng nhận được c&aacute;c CV kh&ocirc;ng chất lượng. B&ecirc;n cạnh đ&oacute;, h&igrave;nh thức tr&igrave;nh b&agrave;y cẩu thả, sai ch&iacute;nh tả trong nội dung tin đăng cũng l&agrave; một nguy&ecirc;n nh&acirc;n khiến ứng vi&ecirc;n bỏ qua bản tin tuyển dụng. V&igrave; vậy, trước khi đăng tải bất kỳ th&ocirc;ng tin tuyển dụng n&agrave;o, bạn cần phải đọc lại thật kỹ để d&ograve; lỗi ch&iacute;nh tả, đồng thời kiểm tra xem th&ocirc;ng tin tuyển dụng đ&atilde; đầy đủ v&agrave; r&otilde; r&agrave;ng hay chưa để tr&aacute;nh c&aacute;c rắc rối kh&ocirc;ng đ&aacute;ng c&oacute; về sau.</p>\r\n<p><strong>Tin v&agrave;o những ấn tượng ban đầu</strong><br />Theo Ted Karkus &ndash; CEO của Prophase Labs &ndash; c&ocirc;ng ty chuy&ecirc;n sản xuất vi&ecirc;n ngậm Cold-EEZE th&igrave; nhiều nh&agrave; tuyển dụng thường l&agrave;m việc theo cảm t&iacute;nh. Th&ocirc;ng thường, c&aacute;c nh&agrave; tuyển dụng thường hay đ&aacute;nh gi&aacute; ứng vi&ecirc;n dựa tr&ecirc;n cảm gi&aacute;c của bản th&acirc;n. Việc n&agrave;y c&oacute; ảnh hưởng rất lớn đến kết quả tuyển dụng, c&oacute; nhiều ứng vi&ecirc;n thật sự c&oacute; năng lực nhưng kh&ocirc;ng thể c&oacute; được c&ocirc;ng việc như mong muốn chỉ v&igrave; tr&oacute;t để lại ấn tượng kh&ocirc;ng tốt với c&aacute;c nh&agrave; tuyển dụng. D&ugrave; kh&ocirc;ng thể đảm bảo ứng vi&ecirc;n c&oacute; thể ho&agrave;n th&agrave;nh tố c&aacute;c nhiệm vụ sau khi được tuyển nhưng tốt nhất bạn kh&ocirc;ng n&ecirc;n&nbsp;coi ấn tượng đầu ti&ecirc;n l&agrave; yếu tố ti&ecirc;n quyết để đưa ra quyết định tuyển dụng.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"\" src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/05/Nh%E1%BB%AFng-l%C3%BD-do-khi%E1%BA%BFn-nh%C3%A0-tuy%E1%BB%83n-d%E1%BB%A5ng-kh%C3%B4ng-tuy%E1%BB%83n-%C4%91%C6%B0%E1%BB%A3c-%E1%BB%A9ng-vi%C3%AAn-h%C3%ACnh-%E1%BA%A3nh-2.jpg\" style=\"height:350px; width:600px\" /></p>\r\n<p><strong>Kh&ocirc;ng chọn đ&uacute;ng c&aacute;ch để kết nối với người t&igrave;m việc</strong></p><p>Đ&acirc;y cũng l&agrave; một sai lầm kh&aacute; phổ biến m&agrave; nhiều nh&agrave; tuyển dụng hay mắc phải. Nếu bạn chỉ tiếp cận với ứng vi&ecirc;n th&ocirc;ng qua người quen, bạn b&egrave; hoặc một v&agrave;i k&ecirc;nh rao vặt, website tuyển dụng kh&ocirc;ng chất lượng th&igrave; tỉ lệ tuyển được ứng vi&ecirc;n sẽ rất thấp. Trong khi đ&oacute;, với sự ph&aacute;t triển của c&ocirc;ng nghệ hiện nay, bạn c&oacute; thể khai th&aacute;c c&aacute;c lợi &iacute;ch từ việc tuyển dụng trực tuyến, đặc biệt l&agrave; những website tuyển dụng uy t&iacute;n, chất lượng để t&igrave;m kiếm ứng vi&ecirc;n hiệu quả hơn. Ngo&agrave;i ra, tận dụng c&aacute;c trang mạng x&atilde; hội, c&aacute;c hội nh&oacute;m tr&ecirc;n facebook cũng l&agrave; một k&ecirc;nh hữu hiệu để bạn c&oacute; thể săn được nh&acirc;n t&agrave;i cho c&ocirc;ng ty.</p>\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave; một số l&yacute; do khiến c&aacute;c nh&agrave; tuyển dụng kh&oacute; tuyển được ứng vi&ecirc;n. Hy vọng với những chia sẻ ở tr&ecirc;n, bạn sẽ t&igrave;m được cho m&igrave;nh c&aacute;c phương ph&aacute;p tốt nhất cho b&agrave;i to&aacute;n tuyển dụng của m&igrave;nh nh&eacute;.</p>', 5, 'articleImages\\article1.png', 1, 22, '2020-08-05 04:12:27', '2021-01-03 07:45:34');
INSERT INTO `articles` (`id`, `name`, `slug`, `description`, `author_id`, `images`, `status`, `views`, `created_at`, `updated_at`) VALUES
(19, 'Tại sao nhà tuyển dụng không nên bỏ qua những ứng viên lớn tuổi?', 'tai-sao-nha-tuyen-dung-khong-nen-bo-qua-nhung-ung-vien-lon-tuoi-19', '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Trong qu&aacute; tr&igrave;nh t&igrave;m kiếm nh&acirc;n sự cho c&ocirc;ng ty, hầu hết c&aacute;c nh&agrave; tuyển dụng thường bỏ qua những ứng vi&ecirc;n lớn tuổi. C&oacute; thể họ lo sợ rằng người lớn tuổi thường kh&oacute; quản l&yacute; hơn hoặc những đối tượng n&agrave;y sẽ kh&oacute; theo kịp nhịp độ l&agrave;m việc trong m&ocirc;i trường c&ocirc;ng sở hiện đại. Thế nhưng bạn sẽ gạt bỏ ngay những suy nghĩ n&agrave;y nếu nhận ra 5 lợi &iacute;ch sau đ&acirc;y từ việc tuyển dụng ứng vi&ecirc;n lớn tuổi.&nbsp;</span></p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700; font-size: 16px !important;\">1. Tạo m&ocirc;i trường l&agrave;m việc đa dạng hơn</strong></h4><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Nếu trong c&ocirc;ng ty của bạn tồn tại nhiều lứa tuổi c&ugrave;ng l&agrave;m việc với nhau sẽ tạo n&ecirc;n một m&ocirc;i trường l&agrave;m việc đa dạng. Điều n&agrave;y c&oacute; thể tăng năng suất v&agrave; tiềm năng của c&aacute;c nh&acirc;n vi&ecirc;n trẻ tuổi, đồng thời th&uacute;c đẩy c&aacute;c kỹ năng của nh&acirc;n vi&ecirc;n ph&aacute;t triển hơn. Hơn nữa, một nơi l&agrave;m việc đa dạng c&oacute; thể l&agrave;m tăng nhận diện thương hiệu của c&ocirc;ng ty. Bạn sẽ nhận được nhiều ứng vi&ecirc;n ứng tuyển nếu c&ocirc;ng ty c&oacute; văn h&oacute;a h&ograve;a nhập giữa nhiều lứa tuổi với nhau.</h4><p><span class=\"fr-img-caption fr-fic fr-dib\" style=\"width: 475px;\"><span class=\"fr-img-wrap\">               <img src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/03/T%E1%BA%A1i-sao-nh%C3%A0-tuy%E1%BB%83n-d%E1%BB%A5ng-kh%C3%B4ng-n%C3%AAn-b%E1%BB%8F-qua-nh%E1%BB%AFng-%E1%BB%A9ng-vi%C3%AAn-l%E1%BB%9Bn-tu%E1%BB%95i-h%C3%ACnh-%E1%BA%A3nh-1.jpg\"><span class=\"fr-inner\"><em style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: -webkit-center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"></em>&nbsp;</span></span></span></p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700; font-size: 16px !important;\">2. Họ c&oacute; nhiều kinh nghiệm</strong></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Một lợi &iacute;ch chắc chắn v&agrave; r&otilde; r&agrave;ng nhất khi tuyển dụng ứng vi&ecirc;n lớn tuổi l&agrave; họ c&oacute; nhiều kỹ năng v&agrave; kinh nghiệm l&agrave;m việc.&nbsp;Những người thuộc thế hệ cũ c&oacute; thể c&oacute; sự hiểu biết trong nhiều lĩnh vực kh&aacute;c nhau trong qu&aacute; tr&igrave;nh l&agrave;m việc của họ. Kinh nghiệm n&agrave;y chắc chắn đ&atilde; dạy cho họ một loạt những điều c&oacute; thể được &aacute;p dụng cho vai tr&ograve; hiện tại. C&oacute; thể bạn cho rằng, người lớn tuổi sẽ kh&ocirc;ng bắt kịp được những kỹ năng về c&ocirc;ng nghệ; tuy nhi&ecirc;n, những kỹ năng n&agrave;y c&oacute; thể học được. Ngược lại, đ&agrave;o tạo những người trẻ tuổi c&oacute; sự kh&ocirc;n ngoan hoặc suy nghĩ ch&iacute;n chắn như những người đ&atilde; c&oacute; nhiều năm &ldquo;lăn lộn&rdquo; với nghề l&agrave; điều ho&agrave;n to&agrave;n kh&ocirc;ng thể.</p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700; font-size: 16px !important;\">3. L&ograve;ng trung th&agrave;nh</strong></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">C&aacute;c nghi&ecirc;n cứu đ&atilde; chỉ ra rằng những người lao động c&agrave;ng lớn tuổi c&agrave;ng mong muốn được k&eacute;o d&agrave;i thời gian l&agrave;m việc của họ l&acirc;u hơn so với c&aacute;c thế hệ trước. Khoảng hơn 50% những người ở độ tuổi tr&ecirc;n 55 dự định sẽ l&agrave;m việc ngo&agrave;i tuổi về hưu. Tuổi nghỉ hưu mặc định cũng kh&ocirc;ng c&ograve;n bị &eacute;p buộc ở tuổi 65. Điều n&agrave;y c&oacute; khả năng mang lại kết quả t&iacute;ch cực cho tỷ lệ duy tr&igrave; trong một tổ chức v&agrave; tất cả ch&uacute;ng ta đều biết l&ograve;ng trung th&agrave;nh quan trọng như thế n&agrave;o đối với một doanh nghiệp .</p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700; font-size: 16px !important;\">4. Họ c&oacute; sự trưởng th&agrave;nh</strong></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Một lợi &iacute;ch nữa sẽ khiến bạn an t&acirc;m nếu tuyển dụng ứng vi&ecirc;n lớn tuổi l&agrave; ở họ c&oacute; sự trưởng th&agrave;nh nhất định. Điều n&agrave;y c&oacute; nghĩa l&agrave; họ biết c&aacute;ch cư xử, biết những g&igrave; n&ecirc;n v&agrave; kh&ocirc;ng n&ecirc;n l&agrave;m tại nơi l&agrave;m việc. Trong khi đ&oacute;, những người trẻ tuổi thường c&oacute; c&aacute;i t&ocirc;i v&agrave; tự &aacute;i rất cao, đ&acirc;y cũng l&agrave; nguy&ecirc;n nh&acirc;n dễ g&acirc;y n&ecirc;n x&iacute;ch m&iacute;ch trong qu&aacute; tr&igrave;nh l&agrave;m việc.</p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">B&ecirc;n cạnh đ&oacute;, khả năng một nh&acirc;n vi&ecirc;n lớn tuổi bị l&ocirc;i k&eacute;o v&agrave;o ch&iacute;nh trị văn ph&ograve;ng, b&egrave; ph&aacute;i hoặc vi phạm nội quy c&ocirc;ng ty thường rất hiếm khi xảy ra. Họ thường sẽ n&eacute; tr&aacute;nh những ồn &agrave;o nơi c&ocirc;ng sở v&agrave; lu&ocirc;n tập trung v&agrave;o c&ocirc;ng việc của m&igrave;nh.</p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"></p><div class=\"fr-img-space-wrap\"><span class=\"fr-img-caption fr-fic fr-dib\" style=\"width: 433px;\"><span class=\"fr-img-wrap\">  \r\n             <img src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/03/T%E1%BA%A1i-sao-nh%C3%A0-tuy%E1%BB%83n-d%E1%BB%A5ng-kh%C3%B4ng-n%C3%AAn-b%E1%BB%8F-qua-nh%E1%BB%AFng-%E1%BB%A9ng-vi%C3%AAn-l%E1%BB%9Bn-tu%E1%BB%95i-h%C3%ACnh-%E1%BA%A3nh-2.jpg\"><span class=\"fr-inner\"><div style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; text-align: center; font-style: italic; width: 610px; max-width: 100%; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><em style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\">Nh&acirc;n vi&ecirc;n lớn tuổi thường chỉ tập trung v&agrave;o c&ocirc;ng việc của họ</em><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify;\"><br></p></div></span></span></span><strong style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700; font-size: 16px !important;\">5. Tiết kiệm chi ph&iacute;</strong></div><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Th&ocirc;ng thường, c&aacute;c ứng cử vi&ecirc;n lớn tuổi thường mong đợi mức lương cao hơn so với ứng vi&ecirc;n trẻ, nhưng điều n&agrave;y đ&aacute;ng gi&aacute; để đảm bảo cho một nh&acirc;n vi&ecirc;n c&oacute; kinh nghiệm hơn. Nh&acirc;n vi&ecirc;n lớn tuổi c&oacute; thể tiết kiệm chi ph&iacute; của bạn&nbsp;về l&acirc;u d&agrave;i chỉ bằng c&aacute;ch gi&uacute;p bạn tr&aacute;nh những sai lầm tốn k&eacute;m hoặc mất thời gian. Hơn nữa, nh&acirc;n vi&ecirc;n lớn tuổi c&oacute; thể trở th&agrave;nh những người quản l&yacute;, đ&agrave;o tạo cho những nh&acirc;n vi&ecirc;n trẻ tuổi hơn, gi&uacute;p c&ocirc;ng ty tiết kiệm được một khoảng thời gian đ&aacute;ng kể.</p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Tr&ecirc;n đ&acirc;y l&agrave; 5 lợi &iacute;ch phổ biến nếu bạn nhận thu&ecirc; người t&igrave;m việc lớn tuổi. Mặc d&ugrave; vẫn c&oacute; một số bất lợi nhưng nh&igrave;n chung tuyển dụng nh&acirc;n vi&ecirc;n lớn tuổi c&oacute; thể mang lại cho doanh nghiệp rất nhiều lợi &iacute;ch tuyệt vời kh&aacute;c.</p><div class=\"fr-img-space-wrap\">&nbsp;</div><p></p><p class=\"fr-img-space-wrap2\">&nbsp;</p><p></p>', 5, 'articleImages\\article3.jpg', 1, 163, '2020-08-05 04:26:55', '2021-01-15 10:02:17'),
(20, 'Làm thế nào để kết thúc cuộc phỏng vấn một cách hoàn hảo?', 'lam-the-nao-de-ket-thuc-cuoc-phong-van-mot-cach-hoan-hao-20', '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Trong qu&aacute; tr&igrave;nh phỏng vấn, ấn tượng đầu ti&ecirc;n l&agrave; v&ocirc; c&ugrave;ng quan trọng, tuy nhi&ecirc;n, ấn tượng trước khi ra về cũng gi&uacute;p phần &ldquo;củng cố&rdquo; quyết định cuối c&ugrave;ng của nh&agrave; tuyển dụng nữa đấy!</span></p><p><br><span style=\"color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Bạn đ&atilde; c&oacute; sự chuẩn bị kỹ c&agrave;ng cho cuộc phỏng vấn với trang phục, t&agrave;i liệu cũng như c&aacute;c minh chứng cho vị tr&iacute;, chuẩn bị c&aacute;c c&acirc;u trả lời cho c&acirc;u hỏi của nh&agrave; tuyển dụng một c&aacute;ch cẩn thận v&agrave; kỹ lưỡng,&hellip; Tuy nhi&ecirc;n, bạn đ&atilde; biết l&agrave;m thế n&agrave;o để kết th&uacute;c cuộc phỏng vấn một c&aacute;ch &ldquo;ho&agrave;n hảo&rdquo; hay chưa? Ấn tượng đầu ti&ecirc;n l&agrave; v&ocirc; c&ugrave;ng quan trọng, tuy nhi&ecirc;n, ấn tượng trước khi ra về cũng gi&uacute;p phần &ldquo;củng cố&rdquo; quyết định cuối c&ugrave;ng của nh&agrave; tuyển dụng nữa đấy! Trong b&agrave;i viết n&agrave;y, h&atilde;y c&ugrave;ng T&igrave;m Việc Nhanh t&igrave;m hiểu một số mẹo nhỏ dưới đ&acirc;y nh&eacute;!</span>&nbsp;</p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><b style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700;\">1. Đặt c&acirc;u hỏi cho nh&agrave; tuyển dụng như một yếu tố tất yếu</b></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Đ&atilde; c&oacute; rất nhiều b&agrave;i viết vềtầm quan trọng của c&aacute;c c&acirc;u hỏi li&ecirc;n quan đến c&acirc;u hỏi để kết th&uacute;c phỏng vấn, n&oacute; kh&ocirc;ng chỉ gi&uacute;p bạn tăng ấn tượng đối với nh&agrave; tuyển dụng, đồng thời, c&ograve;n l&agrave; cơ hội để bạn &ldquo;t&igrave;m hiểu&rdquo; về c&ocirc;ng việc cũng như doanh nghiệp m&agrave; bạn ứng tuyển rằng đ&acirc;y c&oacute; phải l&agrave; vị tr&iacute; m&agrave; bạn đang theo đuổi kh&ocirc;ng? Đ&acirc;y mới l&agrave; yếu tố quan trọng để quyết định &ldquo;gi&aacute; trị&rdquo; của cuộc phỏng vấn.</p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">V&igrave; vậy, h&atilde;y cố gắng đặt c&aacute;c c&acirc;u hỏi về c&ocirc;ng việc, vị tr&iacute;, doanh nghiệp v&agrave; tất cả những điều bạn quan t&acirc;m, tuy nhi&ecirc;n h&atilde;y c&acirc;n nhắc c&aacute;c th&ocirc;ng tin c&oacute; thể t&igrave;m hiểu trước hoặc tr&aacute;nh hỏi lặp lại c&aacute;c th&ocirc;ng tin m&agrave; nh&agrave; tuyển dụng đ&atilde; cung cấp v&igrave; c&oacute; thể g&acirc;y ra ấn tượng kh&ocirc;ng tốt v&igrave; thiếu sự chuẩn bị hoặc thiếu sự tập trung.</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400; display:block; text-align:center;\">         <img src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/06/Web.png\" style=\"box-sizing: border-box; border-style: none; cursor: pointer; padding: 0px 1px; max-width: 100%; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; width: 500px;\" class=\"fr-fic fr-dib\"> <br>&nbsp;</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Một số c&acirc;u hỏi HOTJOB gợi &yacute; cho bạn như sau:</span></p><ul style=\"box-sizing: border-box; margin: 0px auto 10px; padding: 0px 0px 0px 30px; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\"><i style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Mục ti&ecirc;u ngắn hạn của vị tr&iacute; l&agrave; g&igrave;?-&nbsp;</span></i><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Đ&acirc;y l&agrave; một c&acirc;u hỏi kh&aacute; s&aacute;ng tạo v&agrave; sẽ gi&uacute;p bạn h&igrave;nh dung c&aacute;c th&ocirc;ng tin, cũng như vai tr&ograve; của vị tr&iacute; m&agrave; bạn sẽ đảm nhận. Một vị tr&iacute; được &ldquo;định vị&rdquo; cụ thể sẽ gi&uacute;p bạn dễ d&agrave;ng khi thực hiện c&ocirc;ng việc.</span></li><li style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\"><i style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">T&igrave;m hiểu về c&aacute;c cơ hội đ&agrave;o tạo trong c&ocirc;ng việc</span></i><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">&nbsp;&ndash; H&atilde;y cố gắng đặt ra c&acirc;u hỏi n&agrave;y để đảm bảo bạn c&oacute; cơ hội được học hỏi, n&acirc;ng cao kinh nghiệm v&agrave; kỹ năng nghề nghiệp. Một c&ocirc;ng việc ph&ugrave; hợp sẽ gi&uacute;p bạn c&oacute; cơ hội ph&aacute;t triển trong tương lai thay v&igrave; chỉ dừng lại ở c&aacute;c c&ocirc;ng việc đơn giản v&agrave; lặp lại. Đồng thời, nh&agrave; tuyển dụng sẽ c&oacute; xu hướng đ&aacute;nh gi&aacute; cao c&aacute;c ứng vi&ecirc;n nghi&ecirc;m t&uacute;c, c&oacute; động lực để n&acirc;ng cao kỹ năng nghề nghiệp, ph&aacute;t triển bản th&acirc;n.</span></li><li style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\"><i style=\"box-sizing: border-box; margin: 0px auto; padding: 0px;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Thời gian biết kết quả của cuộc phỏng vấn l&agrave; bao l&acirc;u v&agrave; c&oacute; điều g&igrave; cần phải chuẩn bị tiếp theo hay kh&ocirc;ng?</span></i><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">&ndash; Tại một số doanh nghiệp lớn sẽ c&oacute; nhiều v&ograve;ng phỏng vấn với c&aacute;c y&ecirc;u cầu kh&aacute;c nhau, hiểu r&otilde; quy tr&igrave;nh tuyển dụng của doanh nghiệp sẽ gi&uacute;p bạn trở n&ecirc;n chủ động hơn v&agrave; thể hiện th&aacute;i độ t&iacute;ch cực, hứng th&uacute; của m&igrave;nh đối với vị tr&iacute;.</span></li></ul><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><b style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700;\">2. Thể hiện sự quan t&acirc;m v&agrave; mức độ ph&ugrave; hợp của bạn đối với vị tr&iacute;</b></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Đừng ngại thể hiện việc bạn quan t&acirc;m đến vị tr&iacute; bạn ứng tuyển v&igrave; c&aacute;c nh&agrave; tuyển dụng b&ecirc;n cạnh đ&aacute;nh gi&aacute; c&aacute;c kỹ năng ph&ugrave; hợp với nghề nghiệp th&igrave; th&aacute;i độ của ứng vi&ecirc;n với vị tr&iacute; cũng l&agrave; điều họ v&ocirc; c&ugrave;ng ch&uacute; trọng. H&atilde;y t&oacute;m tắt sơ qua những kỹ năng v&agrave; kinh nghiệm m&agrave; bạn đ&atilde; c&oacute;, kết hợp với niềm đam m&ecirc; của bạn đối với c&ocirc;ng việc. Chẳng hạn đối với vị tr&iacute; Chăm s&oacute;c kh&aacute;ch h&agrave;ng h&atilde;y thể hiện bạn c&oacute; đam m&ecirc; đối với với việc lắng nghe v&agrave; chia sẻ, giải quyết c&aacute;c rắc rối của kh&aacute;ch h&agrave;ng một c&aacute;ch b&igrave;nh tĩnh v&agrave; chu đ&aacute;o. Đồng thời bạn cũng đ&atilde; c&oacute; c&aacute;c chứng chỉ li&ecirc;n quan đến T&acirc;m l&yacute; học, đ&atilde; c&oacute; kinh nghiệm giải quyết c&aacute;c vấn đề ph&aacute;t sinh trong một tổ chức hoặc đội nh&oacute;m,&hellip;</span></p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><b style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700;\">3. Thể hiện sự biết ơn một c&aacute;ch ch&acirc;n th&agrave;nh</b></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Ngay khi kết th&uacute;c cuộc phỏng vấn, h&atilde;y d&agrave;nh thời gian cảm ơn nh&agrave; tuyển dụng một c&aacute;ch ch&acirc;n th&agrave;nh v&igrave; đ&atilde; d&agrave;nh thời gian cho bạn. Một lời cảm ơn ch&acirc;n th&agrave;nh sẽ gi&uacute;p bạn &ldquo;ghi điểm&rdquo; với nh&agrave; tuyển dụng. Đồng thời, giữ th&aacute;i độ vui vẻ v&agrave; ch&acirc;n th&agrave;nh trong suốt cuộc phỏng vấn cũng l&agrave; điều v&ocirc; c&ugrave;ng cần thiết.</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Một email cảm ơn sau khi kết th&uacute;c phỏng vấn sẽ gi&uacute;p ứng vi&ecirc;n được đ&aacute;nh gi&aacute; cao hơn trong mắt người phỏng vấn. Sự ch&acirc;n th&agrave;nh v&agrave; nghi&ecirc;m t&uacute;c của ứng vi&ecirc;n sẽ được ghi nhận v&agrave; nhắc nhớ đối với nh&agrave; tuyển dụng. V&igrave; vậy, đừng qu&ecirc;n d&agrave;nh v&agrave;i ph&uacute;t để viết một mẫu email thể hiện sự chu đ&aacute;o của m&igrave;nh nh&eacute;!</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400; display:block; text-align:center;\">         <img src=\"https://www.timviecnhanh.com/goc-nghe-nghiep/wp-content/uploads/2020/06/Web-1.png\" style=\"width: 500px;\" class=\"fr-fic fr-dib\"></span><br></p><h4 style=\"box-sizing: border-box; margin-top: 20px !important; margin-right: auto; margin-bottom: 20px !important; margin-left: auto; padding: 0px; font-family: Arial, sans-serif; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-size: 16px !important; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><b style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 700;\">4. Cơ hội cho những sai lầm</b></h4><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Một cuộc phỏng vấn ho&agrave;n hảo sẽ diễn ra bằng việc viết thư cảm ơn v&agrave; chờ đợi kết quả phỏng vấn, tuy nhi&ecirc;n, đ&ocirc;i khi, bạn sẽ bỏ lỡ một vị tr&iacute; y&ecirc;u th&iacute;ch bằng một số sai lầm kh&ocirc;ng đ&aacute;ng c&oacute;. V&igrave; vậy, trước khi kết th&uacute;c phỏng vấn, nếu bạn cảm thấy m&igrave;nh truyền đạt một số &yacute; tưởng/ quan điểm một c&aacute;ch chưa ch&iacute;nh x&aacute;c, đừng ngại thể hiện điều đ&oacute; ngay nh&eacute;. Bạn c&oacute; thể bắt đầu bằng cấu tr&uacute;c: &ldquo;C&oacute; thể trong l&uacute;c lắng nghe v&agrave; xử l&yacute; th&ocirc;ng điệp t&ocirc;i c&oacute; hiểu nhầm ở một số chỗ, thực ra, quan điểm của t&ocirc;i về vấn đề tr&ecirc;n l&agrave;&hellip;&rdquo;</span></p><p style=\"box-sizing: border-box; margin: 0px 0px 5px; padding: 0px; outline: none !important; text-align: justify; color: rgb(51, 51, 51); font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><span style=\"box-sizing: border-box; margin: 0px auto; padding: 0px; font-weight: 400;\">Tr&ecirc;n đ&acirc;y l&agrave; một số lưu &yacute; nhỏ cho c&aacute;c bạn ứng vi&ecirc;n để c&oacute; một cuộc phỏng vấn thật trọn vẹn, h&atilde;y linh hoạt &aacute;p dụng c&aacute;c nguy&ecirc;n tắc tr&ecirc;n một c&aacute;ch kh&eacute;o l&eacute;o. Một cuộc phỏng vấn th&agrave;nh c&ocirc;ng l&agrave; cơ hội để bạn tạo sự ấn tượng v&agrave; thể hiện sự chuy&ecirc;n nghiệp trong cả qu&aacute; tr&igrave;nh. H&atilde;y cho nh&agrave; tuyển dụng thấy rằng bạn kh&ocirc;ng chỉ t&igrave;m kiếm một c&ocirc;ng việc. Thay v&agrave;o đ&oacute;, bạn nghi&ecirc;m t&uacute;c v&agrave; quyết t&acirc;m tăng th&ecirc;m gi&aacute; trị cho tổ chức v&agrave; t&igrave;m kiếm cơ hội ph&aacute;t triển cho bản th&acirc;n. T&igrave;m Việc Nhanh ch&uacute;c c&aacute;c bạn c&oacute; c&aacute;c cuộc phỏng vấn th&agrave;nh c&ocirc;ng cũng như một c&ocirc;ng việc ph&ugrave; hợp với bản th&acirc;n!</span></p>', 8, 'articleImages\\lam-the-nao-de-ket-thuc-cuoc-phong-van-mot-cach-hoan-hao--article.png', 1, 941, '2020-08-17 08:25:25', '2021-01-15 09:38:26'),
(25, 'Tiền nhiều để làm gì? Tất nhiên là đếm', 'tien-nhieu-de-lam-gi-tat-nhien-la-dem-25', '<p>L&agrave;m nhiều tiền để l&agrave;m g&igrave;?</p>\r\n\r\n<p>Thu&ecirc; người đếm tiền l&agrave; th&uacute; vui tao nh&atilde;=))</p>\r\n\r\n<p>Bạn c&oacute; biết, kh&ocirc;ng phải chuyện g&igrave; cũng giải quyết được bằng tiền m&agrave; c&oacute; thể giải quyết bởi rất nhiều tiền</p>\r\n\r\n<p>T&ocirc;i c&oacute; tiền, t&ocirc;i kh&ocirc;ng muốn &iacute;ch kỷ giữ cho m&igrave;nh. V&igrave; vậy t&ocirc;i k&ecirc;u gọi mọi người ứng tuyển v&agrave;o c&ocirc;ng ty một th&agrave;nh vi&ecirc;n chuy&ecirc;n đếm tiền của t&ocirc;i. Khi gặp người kh&oacute; khăn, h&atilde;y cầm lấy số tiền t&ocirc;i c&oacute; cho đi. C&oacute; thể một ch&uacute;t vật chất ngo&agrave;i th&acirc;n cho đi, một cuộc đời được đổi lại</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 43, 'articleImages\\tien-nhieu-de-lam-gi-tat-nhien-la-dem-25-IMG_9971.jpg', 1, 55, '2021-01-10 08:27:01', '2021-01-15 10:05:46');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phoneNumber` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'avatar\\no-gender.png',
  `candidate_cv` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_name`, `address`, `phoneNumber`, `gender`, `dateOfBirth`, `avatar`, `candidate_cv`, `created_at`, `updated_at`) VALUES
(8, 'Hồ Thanh Phong', 'Huế', '0123456789', 1, '2001-07-06', 'avatar\\ho-thanh-phong-8-image.png', 'CV\\HTPHONG.pdf', '2020-06-26 00:46:11', '2021-01-10 08:52:28'),
(19, 'Hồ Đình Cảnh', NULL, NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-07-01 18:44:03', '2020-07-01 18:44:03'),
(20, 'Nguyễn Thị Thu Hương', NULL, NULL, 2, NULL, 'avatar\\no-gender.png', NULL, '2020-07-01 18:44:39', '2020-07-09 09:46:11'),
(21, 'Nguyễn Xuân Hinh', 'Đà Nẵng', NULL, 1, '2001-01-20', 'avatar\\no-gender.png', NULL, '2020-07-02 07:19:14', '2020-07-02 07:20:00'),
(23, 'Nguyễn Văn A', NULL, NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-07-02 18:48:17', '2020-07-02 18:48:17'),
(27, 'Hồ Thanh Phong', 'Đà Nẵng', NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-07-14 20:26:47', '2020-08-03 09:50:29'),
(28, 'Thanh Phong', NULL, NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-07-15 10:18:49', '2020-07-15 10:18:49'),
(31, 'Trần Văn P', NULL, NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-07-17 07:56:19', '2020-10-07 03:49:56'),
(32, 'Hồ Thanh Phong', 'Đà Nẵng', '0795525037', 1, '2001-07-06', 'avatar\\no-gender.png', 'CV\\HTPHONG.pdf', '2020-08-03 09:11:50', '2020-08-03 09:12:46'),
(34, 'Hồ Thị Minh Trang', NULL, NULL, NULL, NULL, 'avatar\\no-gender.png', NULL, '2020-08-17 07:58:58', '2020-08-17 07:58:58'),
(35, 'Test', 'Huế', NULL, 1, '2020-09-12', 'avatar\\no-gender.png', NULL, '2020-09-02 08:41:24', '2020-09-02 08:45:13'),
(36, 'Nguyễn Thị Cẩm Huyền', 'Quảng Trị', '0795525037', 2, '2001-07-07', 'avatar\\nguyen-thi-cam-huyen-36-ny.jpg', 'CV\\HTPHONG.pdf', '2020-09-03 21:32:41', '2021-01-10 09:29:20'),
(37, 'Người tìm việc làm', NULL, NULL, 1, NULL, 'avatar\\no-gender.png', NULL, '2020-10-07 03:54:02', '2020-10-07 03:56:40'),
(39, 'Hồ Thanh Phong', 'ĐN', NULL, 1, '2001-07-06', 'avatar\\ho-thanh-phong-39-male.png', NULL, '2021-01-07 00:12:30', '2021-01-10 18:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_jobs`
--

CREATE TABLE `candidate_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `isApproved` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_jobs`
--

INSERT INTO `candidate_jobs` (`id`, `candidate_id`, `job_id`, `employer_id`, `isApproved`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 8, 41, 4, 3, '2021-01-06 21:57:10', '2021-01-10 08:54:15', '2021-01-10 08:54:15'),
(36, 39, 41, 4, 3, '2021-01-07 00:13:14', '2021-01-07 00:43:57', NULL),
(37, 39, 33, 4, 2, '2021-01-07 00:28:41', '2021-01-07 00:40:03', NULL),
(38, 8, 46, 4, 1, '2021-01-10 02:40:17', '2021-01-10 07:20:16', NULL),
(39, 8, 42, 38, 1, '2021-01-10 02:50:26', '2021-01-10 07:24:34', NULL),
(40, 36, 46, 4, 1, '2021-01-10 07:05:25', '2021-01-10 07:19:15', NULL),
(41, 36, 42, 38, 1, '2021-01-10 07:06:13', '2021-01-10 07:06:13', NULL),
(42, 36, 38, 6, 1, '2021-01-10 07:06:25', '2021-01-10 07:26:16', NULL),
(44, 8, 11, 4, 1, '2021-01-10 07:57:44', '2021-01-10 18:54:40', '2021-01-10 18:54:40'),
(45, 8, 47, 43, 1, '2021-01-10 08:46:51', '2021-01-10 08:46:51', NULL),
(46, 39, 46, 4, 2, '2021-01-10 18:45:44', '2021-01-10 18:46:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_total_job` int(11) NOT NULL DEFAULT 0,
  `average_salary` float NOT NULL DEFAULT 10,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_slug`, `category_total_job`, `average_salary`, `created_at`, `updated_at`) VALUES
(1, 'Công nghệ thông tin', 'cong-nghe-thong-tin', 3, 12, '2020-06-21 08:58:45', '2021-01-10 18:57:00'),
(2, 'Kinh doanh', 'kinh-doanh', 7, 15, '2020-06-21 09:01:43', '2021-01-10 18:54:10'),
(3, 'Bán hàng', 'ban-hang', 3, 7, '2020-06-21 09:02:03', '2020-08-03 08:44:55'),
(4, 'Chăm sóc khách hàng', 'cham-soc-khach-hang', 1, 10, '2020-06-21 09:02:09', '2021-01-06 12:22:44'),
(5, 'Lao động phổ thông', 'lao-dong-pho-thong', 2, 7, '2020-06-21 09:02:20', '2020-07-02 10:15:17'),
(6, 'Dầu khí', 'dau-khi', 0, 10, '2020-06-21 09:04:04', '2020-06-21 09:04:04'),
(7, 'Cơ khí/ Kĩ thuật ứng dụng', 'co-khi-ki-thuat-ung-dung', 1, 9, '2020-06-21 09:03:03', '2020-06-29 06:31:09'),
(8, 'Sinh viên mới tốt nghiệp/ Thực tập', 'sinh-vien-moi-tot-nghiep-thuc-tap', 2, 5, '2020-06-21 09:03:19', '2020-08-03 08:46:26'),
(9, 'Điện/ Điện tử', 'dien-dien-tu', 1, 10, '2020-06-21 09:03:24', '2020-08-03 08:48:22'),
(10, 'Báo chí/ Biên tập viên', 'bao-chi-bien-tap-vien', 0, 10, '2020-06-21 09:03:36', '2020-06-21 09:03:36'),
(11, 'Bảo vệ/ Vệ sĩ/ An ninh', 'bao-ve-ve-si-an-ninh', 0, 10, '2020-06-21 09:03:45', '2020-07-02 10:48:36'),
(12, 'Bất động sản', 'bat-dong-san', 0, 10, '2020-06-21 09:04:02', '2020-06-21 09:04:02'),
(13, 'Bưu chính viễn thông', 'buu-chinh-vien-thong', 0, 10, '2020-06-21 09:04:07', '2020-06-21 09:04:07'),
(14, 'Dệt may', 'det-may', 0, 10, '2020-06-21 09:04:14', '2020-06-21 09:04:14'),
(15, 'Du lịch/ Nhà hàng/ Khách sạn', 'du-lich-nha-hang-khach-san', 0, 10, '2020-06-21 09:04:21', '2020-06-21 09:04:21'),
(16, 'Luật/ Pháp lý', 'luat-phap-ly', 0, 10, '2020-06-21 09:04:40', '2020-06-21 09:04:40'),
(17, 'Ngân hàng/ Đầu tư', 'ngan-hang-dau-tu', 0, 10, '2020-06-21 09:04:45', '2020-06-21 09:04:45'),
(18, 'Ngoại ngữ', 'ngoai-ngu', 0, 10, '2020-06-21 09:04:52', '2020-06-21 09:04:52'),
(19, 'Nhân sự', 'nhan-su', 0, 7, '2020-06-21 09:04:55', '2021-01-10 18:54:40'),
(20, 'Phát triển thị trường', 'phat-trien-thi-truong', 0, 10, '2020-06-21 09:05:01', '2020-06-21 09:05:01'),
(21, 'Lễ tân', 'le-tan', 0, 10, '2020-06-21 09:05:23', '2020-06-21 09:05:23'),
(22, 'Quan hệ đối ngoại', 'quan-he-doi-ngoai', 0, 10, '2020-06-21 09:05:27', '2020-06-21 09:05:27'),
(23, 'Quản lý/ Điều hành', 'quan-ly-dieu-hanh', 0, 10, '2020-06-21 09:05:33', '2020-06-21 09:05:33'),
(24, 'Quảng cáo/ Marketing', 'quang-cao-marketing', 1, 10, '2020-06-21 09:05:42', '2020-06-29 06:16:04'),
(25, 'Xây dựng', 'xay-dung', 2, 10, '2020-06-21 09:05:55', '2020-08-03 08:38:35'),
(26, 'Y tế', 'y-te', 0, 10, '2020-06-21 09:05:58', '2020-06-21 09:05:58'),
(27, 'Thư ký/ Trợ lý', 'thu-ky-tro-ly', 2, 10, '2020-06-21 09:36:31', '2021-01-06 12:22:45'),
(28, 'Biên dịch/ Thông dịch', 'bien-dich-thong-dich', 0, 10, '2020-06-21 09:37:16', '2020-06-21 09:37:16'),
(29, 'Dược/ Hóa chất', 'duoc-hoa-chat', 0, 10, '2020-06-21 09:50:28', '2020-06-21 09:50:28'),
(32, 'Giáo viên', 'giao-vien', 0, 10, '2020-07-16 09:31:09', '2020-07-16 09:31:09'),
(33, 'Đào mỏ', 'dao-mo', 0, 10, '2021-01-10 08:38:50', '2021-01-10 08:38:50'),
(34, 'Dịch vụ người yêu ngày lễ', 'dich-vu-nguoi-yeu-ngay-le', 0, 10, '2021-01-10 08:39:40', '2021-01-10 08:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Hà Nội', NULL, NULL),
(2, 'TP. Hồ Chí Minh', NULL, NULL),
(5, 'Thừa Thiên Huế', '2020-07-01 17:00:00', '2020-07-01 17:00:00'),
(6, 'Đà Nẵng', NULL, NULL),
(9, 'An Giang', NULL, NULL),
(10, 'Bà Rịa - Vũng Tàu', NULL, NULL),
(11, 'Bắc Giang', NULL, NULL),
(12, 'Bình Dương', NULL, NULL),
(13, 'Bắc Ninh', NULL, NULL),
(14, 'Gia Lai', NULL, NULL),
(15, 'Hà Giang', NULL, NULL),
(16, 'Đắk Lắk', NULL, NULL),
(17, 'Hà Nam', NULL, NULL),
(18, 'Hà Tĩnh', NULL, NULL),
(19, 'Hải Dương', NULL, NULL),
(20, 'Hậu Giang', NULL, NULL),
(21, 'Hòa Bình', NULL, NULL),
(22, 'Hưng Yên', NULL, NULL),
(23, 'Khánh Hòa', NULL, NULL),
(24, 'Kiên Giang', NULL, NULL),
(25, 'Kon Tum', NULL, NULL),
(26, 'Lai Châu', NULL, NULL),
(27, 'Lâm Đồng', NULL, NULL),
(28, 'Lạng Sơn', NULL, NULL),
(29, 'Lào Cai', NULL, NULL),
(30, 'Long An', NULL, NULL),
(31, 'Nam Định', NULL, NULL),
(32, 'Nghệ An', NULL, NULL),
(33, 'Ninh Bình', NULL, NULL),
(34, 'Ninh Thuận', NULL, NULL),
(35, 'Phú Thọ', NULL, NULL),
(36, 'Quảng Bình', NULL, NULL),
(37, 'Cần Thơ', NULL, NULL),
(38, 'Hải Phòng', NULL, NULL),
(39, 'Quảng Nam', NULL, NULL),
(40, 'Quảng Ngãi', NULL, NULL),
(41, 'Quảng Ninh', NULL, NULL),
(42, 'Quảng Trị', NULL, NULL),
(43, 'Sóc Trăng', NULL, NULL),
(44, 'Sơn La', NULL, NULL),
(45, 'Tây Ninh', NULL, NULL),
(46, 'Thái Bình', NULL, NULL),
(47, 'Thái Nguyên', NULL, NULL),
(48, 'Thanh Hóa', NULL, NULL),
(49, 'Tiền Giang', NULL, NULL),
(50, 'Trà Vinh', NULL, NULL),
(51, 'Tuyên Quang', NULL, NULL),
(52, 'Vĩnh Long', NULL, NULL),
(53, 'Vĩnh Phúc', NULL, NULL),
(54, 'Yên Bái', NULL, NULL),
(55, 'Phú Yên', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `liked` smallint(6) DEFAULT 0,
  `report` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `parent_id`, `liked`, `report`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bài viết thật là thú vị', 8, 20, 0, 13, 0, NULL, '2020-10-01 09:02:26', '2021-01-15 01:06:09'),
(2, 'xin cảm ơn chủ bài viết', 8, 20, 0, 32, 0, NULL, '2020-10-01 09:46:59', '2020-10-01 09:46:59'),
(3, 'Những điều chia sẻ trên đây thật bổ ích. Cám ơn công ty xây dựng B', 8, 19, 0, 10, 0, NULL, '2020-10-01 09:48:01', '2020-10-01 09:48:01'),
(4, 'thực sự cám ơn bài viết. Bài viết thật bổ ích', 8, 19, 0, 5, 0, NULL, '2020-10-01 09:50:19', '2021-01-15 10:02:07'),
(5, 'Đúng vậy', 8, 19, 3, 0, 0, NULL, '2020-10-01 09:48:01', '2020-10-01 09:48:01'),
(10, 'xin chào mọi người', 8, 19, 0, 1, 0, NULL, '2020-10-03 04:24:33', '2021-01-15 10:01:58'),
(11, 'Có vẻ hay nhỉ', 8, 19, 0, 1, 0, '2020-10-04 10:00:00', '2020-10-03 04:28:30', '2020-10-04 10:00:00'),
(12, 'Bài viết hay quá ạ', 8, 19, 0, 1, 0, NULL, '2020-10-03 04:28:57', '2021-01-15 09:54:00'),
(39, 'Xin chào mọi người', 4, 20, 0, 0, 4, NULL, '2020-10-03 06:47:29', '2021-01-08 20:54:27'),
(54, 'Cám ơn CÔNG TY TNHH ROBOCASH VIỆT NAM vì những chia sẻ thật bổ ích', 8, 7, 0, 0, 0, NULL, '2020-10-03 07:01:31', '2020-10-03 07:01:31'),
(56, 'Cám ơn Hồ Thanh Phong vì bài viết bổ ích nhé <3', 23, 20, 0, 1, 7, NULL, '2020-10-03 07:21:15', '2021-01-15 01:08:18'),
(57, 'Cám ơn tất cả mọi người', 8, 20, 0, 2, 4, NULL, '2020-10-03 07:40:47', '2021-01-15 09:38:03'),
(58, 'Không có gì nhé', 8, 20, 56, 0, 0, '2020-10-04 08:40:16', '2020-10-03 07:40:52', '2020-10-04 08:40:16'),
(75, 'Xin chào FPT Software', 8, 20, 39, 0, 0, NULL, '2020-10-03 09:14:09', '2020-10-03 09:14:09'),
(169, 'Mình đồng ý với quan điểm của bạn', 1, 20, 1, 0, 1, NULL, '2021-01-09 01:20:33', '2021-01-09 07:27:49'),
(170, 'Hehe, mình cũng vậy á', 1, 20, 1, 0, 6, NULL, '2021-01-09 07:28:12', '2021-01-10 09:20:25'),
(171, 'Không có gì đâu bạn', 1, 20, 57, 0, 0, '2021-01-09 07:49:12', '2021-01-09 07:48:02', '2021-01-09 07:49:12'),
(172, 'Đã lâu lắm rồi mình mới đọc được 1 bài viết hay và ý nghĩa như thế này', 36, 7, 0, 0, 0, '2021-01-10 07:07:51', '2021-01-10 07:07:26', '2021-01-10 07:07:51'),
(173, 'Mình cũng đồng tình với bạn', 36, 7, 54, 0, 0, NULL, '2021-01-10 07:07:38', '2021-01-10 07:07:38'),
(174, 'thú vị cái đầu mày:>>>', 1, 20, 1, 0, 0, '2021-01-10 08:29:24', '2021-01-10 08:28:56', '2021-01-10 08:29:24'),
(175, 'Tuyệt vờiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 43, 25, 0, 1, 0, NULL, '2021-01-10 08:42:51', '2021-01-15 09:28:45'),
(176, 'Mọi người ghé thăm nhoa', 43, 25, 0, 1, 1, NULL, '2021-01-10 08:43:07', '2021-01-15 09:28:37'),
(177, 'Hmmmm', 43, 25, 176, 1, 0, NULL, '2021-01-10 08:43:37', '2021-01-15 09:28:42'),
(178, 'Hay lắm bạn eiiii', 8, 25, 0, 1, 0, NULL, '2021-01-10 08:49:05', '2021-01-15 09:28:35'),
(179, 'Đã xem:v', 8, 25, 176, 1, 0, NULL, '2021-01-10 08:49:47', '2021-01-15 09:29:31'),
(180, 'Hay cái đầu mày><', 1, 20, 1, 0, 3, NULL, '2021-01-10 09:06:07', '2021-01-10 09:23:30'),
(181, 'Xin 1 chân ứng tuyển bạn eiii =)))', 36, 25, 0, 2, 0, NULL, '2021-01-10 09:30:12', '2021-01-15 10:05:44'),
(182, 'Hello mọi người', 39, 20, 0, 3, 0, NULL, '2021-01-10 20:07:29', '2021-01-15 09:37:59'),
(183, 'Xin chào bạn nha', 39, 20, 57, 0, 0, NULL, '2021-01-10 20:08:00', '2021-01-15 00:38:13'),
(185, 'OK bạn', 8, 25, 181, 0, 0, '2021-01-14 03:48:40', '2021-01-14 03:25:24', '2021-01-14 03:48:40'),
(186, 'Bạn hack like à', 8, 25, 181, 0, 0, '2021-01-14 03:48:36', '2021-01-14 03:26:00', '2021-01-14 03:48:36'),
(187, 'nhầm, mình hack like', 8, 25, 181, 0, 0, '2021-01-14 03:48:31', '2021-01-14 03:26:12', '2021-01-14 03:48:31'),
(188, 'Hello', 8, 25, 181, 0, 0, '2021-01-14 04:07:50', '2021-01-14 04:07:07', '2021-01-14 04:07:50'),
(189, 'mày khùng à', 8, 25, 178, 0, 0, '2021-01-14 04:07:45', '2021-01-14 04:07:24', '2021-01-14 04:07:45'),
(190, 'Test', 8, 25, 0, 0, 0, '2021-01-14 04:25:07', '2021-01-14 04:08:54', '2021-01-14 04:25:07'),
(191, 'Bình luận mới', 8, 25, 0, 0, 0, '2021-01-14 04:25:06', '2021-01-14 04:09:47', '2021-01-14 04:25:06'),
(192, 'Bài viết hay lắm ạ', 21, 20, 0, 1, 2, NULL, '2021-01-15 08:11:48', '2021-01-15 09:38:25'),
(193, 'Haha', 21, 20, 0, 0, 0, '2021-01-15 08:58:55', '2021-01-15 08:11:52', '2021-01-15 08:58:55'),
(194, 'Xin chào', 21, 20, 0, 0, 0, '2021-01-15 08:58:59', '2021-01-15 08:58:31', '2021-01-15 08:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_privacy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_username`, `customer_password`, `customer_privacy`, `created_at`, `updated_at`) VALUES
(4, 'employer1@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-25 20:09:47', '2020-06-25 20:09:47'),
(5, 'employer2@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-25 20:11:21', '2020-06-25 20:11:21'),
(6, 'employer3@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-25 20:16:42', '2020-06-25 20:16:42'),
(7, 'employer4@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-25 20:24:08', '2020-06-25 20:24:08'),
(8, 'candidate1@gmail.com', '4297f44b13955235245b2497399d7a93', 2, '2020-06-26 00:46:11', '2020-06-26 00:46:11'),
(9, 'vienthongdangkhoi@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-29 06:08:44', '2020-06-29 06:08:44'),
(10, 'employer5@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-29 06:11:20', '2020-06-29 06:11:20'),
(11, 'employer6@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-29 06:13:27', '2020-06-29 06:13:27'),
(12, 'employer7@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-29 06:15:13', '2020-06-29 06:15:13'),
(13, 'employer8@gmail.com', '4297f44b13955235245b2497399d7a93', 1, '2020-06-29 06:16:51', '2020-06-29 06:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `employer_id` int(10) UNSIGNED NOT NULL,
  `employer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `phoneNumber` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `business_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar/no-gender.pgn',
  `employer_description` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `employer_total_job` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`employer_id`, `employer_name`, `address`, `city`, `phoneNumber`, `business_paper`, `avatar`, `employer_description`, `employer_total_job`, `created_at`, `updated_at`) VALUES
(4, 'FPT Software', 'Hoà Hải, Ngũ Hành Sơn, Đà Nẵng', 6, '0795525037', 'businessPaper\\giay-chung-nhan-doanh-nghiep.jpg', 'avatar\\fpt-software-4-LogoFPT-2017-copy-3042-1513928399.jpg', '<p>Được dịch từ tiếng Anh - Phần mềm FPT l&agrave; một c&ocirc;ng ty dịch vụ CNTT v&agrave; gia c&ocirc;ng to&agrave;n cầu c&oacute; trụ sở tại H&agrave; Nội, Việt Nam. Đ&acirc;y l&agrave; c&ocirc;ng ty con của Tập đo&agrave;n FPT, tập đo&agrave;n c&ocirc;ng nghệ đa quốc gia.</p>', 7, '2020-06-25 20:09:47', '2021-01-10 19:00:55'),
(5, 'Công ty xây dựng B', 'Hoà Quý, Ngũ Hành Sơn, Đà Nẵng 550000', 6, '0123456789', NULL, 'avatar\\cong-ty-xay-dung-b-5-logo2.png', '<p>C&ocirc;ng ty x&acirc;y dựng. Hợp t&aacute;c x&acirc;y dựng cơ sơ hạ tầng v&agrave; c&aacute;c t&ograve;a nh&agrave; lớn</p>', 1, '2020-06-25 20:11:21', '2020-08-05 03:32:10'),
(6, 'Công ty C', NULL, NULL, NULL, NULL, 'avatar\\cong-ty-c-6-logo1.png', NULL, 8, '2020-06-25 20:16:42', '2020-08-04 01:17:13'),
(7, 'Công ty D', NULL, NULL, NULL, NULL, 'avatar\\no-gender.png', NULL, 2, '2020-06-25 20:24:08', '2020-06-29 07:41:11'),
(9, 'CÔNG TY TNHH MỘT THÀNH VIÊN VIỄN THÔNG ĐĂNG KHÔI', NULL, NULL, NULL, NULL, 'avatar\\cong-ty-tnhh-mot-thanh-vien-vien-thong-dang-khoi-9-vienthongdangkhoi.png', NULL, 1, '2020-06-29 06:08:44', '2020-08-04 01:24:11'),
(10, 'CÔNG TY TNHH ROBOCASH VIỆT NAM', 'Đà Nẵng', 6, '0935123125', NULL, 'avatar\\cong-ty-tnhh-robocash-viet-nam-10-robocash.svg', 'CÔNG TY TNHH ROBOCASH VIỆT NAM \r\nCông ty về ROBOCASH', 2, '2020-06-29 06:11:20', '2020-08-04 01:23:15'),
(11, 'Công ty TNHH Phát Triển Thương Mại Và Dịch Vụ AMI', NULL, NULL, NULL, NULL, 'avatar\\cong-ty-tnhh-phat-trien-thuong-mai-va-dich-vu-ami-11-ami.jpg', NULL, 1, '2020-06-29 06:13:27', '2020-08-04 01:24:55'),
(12, 'Công ty CP Thiết bị vệ sinh Caesar Việt Nam', NULL, NULL, NULL, NULL, 'avatar\\cong-ty-cp-thiet-bi-ve-sinh-caesar-viet-nam-12-ceasar.jpg', NULL, 1, '2020-06-29 06:15:13', '2020-08-04 01:26:46'),
(13, 'Công ty TNHH Thương Mại Truyền Thông Việt Phát', 'Lầu 4, 163 Nguyễn Văn Trỗi, P11, Q.Phú Nhuận, Tp.HCM', 1, NULL, NULL, 'avatar\\no-gender.png', '<p><strong>Web: http://www.vietphat-media.com/&nbsp;</strong></p>\r\n\r\n<p>&nbsp; &nbsp;Việt Ph&aacute;t Media l&agrave; c&ocirc;ng ty chuy&ecirc;n về c&aacute;c dịch vụ marketing research, fieldwork h&agrave;ng đầu trong lĩnh vực ng&acirc;n h&agrave;ng, viễn th&ocirc;ng. Sau hơn 6 năm hoạt động trong lĩnh vực nghi&ecirc;n cứu thị trường tại Việt Nam, Việt Ph&aacute;t đ&atilde; t&iacute;ch lũy được nhiều kinh nghiệm c&ugrave;ng với kỹ năng l&agrave;m việc, đặc biệt nhất về mạng lưới nh&acirc;n sự. Với những tiếng vang v&agrave; th&agrave;nh c&ocirc;ng nhất định trong mảng kh&aacute;ch h&agrave;ng b&iacute; mật cho h&agrave;ng loạt đơn vị ng&acirc;n h&agrave;ng, viễn th&ocirc;ng h&agrave;ng đầu tại Việt Nam c&ugrave;ng đội ngủ nh&acirc;n vi&ecirc;n năng động, nhiệt t&igrave;nh, chu đ&aacute;o.</p>\r\n\r\n<p>&nbsp; &nbsp;Ch&uacute;ng t&ocirc;i được lựa chọn l&agrave;m đối t&aacute;c cho VPBank trong c&aacute;c mảng: thẩm định hồ sơ kh&aacute;ch h&agrave;ng mở thẻ, vay t&iacute;n chấp. C&ugrave;ng với sự hỗ trợ của c&ocirc;ng nghệ hiện đại, c&aacute;c giải ph&aacute;p th&ocirc;ng minh Việt Ph&aacute;t đ&atilde; xuất sắc ho&agrave;n th&agrave;nh tốt c&aacute;c quy tr&igrave;nh thẩm định, hỗ trợ kh&aacute;ch h&agrave;ng một c&aacute;ch chuy&ecirc;n nghiệp trong hơn 2 năm qua. Việt Ph&aacute;t đang kh&ocirc;ng ngừng nổ lực nhằm trở th&agrave;nh đơn vị hỗ trợ đắc lực cho VPBank tạo n&ecirc;n một m&ocirc;i trường cho vay ti&ecirc;u d&ugrave;ng t&iacute;n chấp hiệu quả v&agrave; chuy&ecirc;n nghiệp nhất.</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 1, '2020-06-29 06:16:51', '2020-08-05 03:25:32'),
(16, 'Công ty TNHH Hồ Thanh Phong', 'Đà Nẵng', 6, '0123456781', NULL, 'avatar\\no-gender.png', 'Công ty IT', 1, '2020-07-01 18:34:55', '2021-01-10 18:40:31'),
(29, 'Hồ Thanh Phong', 'Hoà Quý, Ngũ Hành Sơn, Đà Nẵng 550000', 6, '123456789', NULL, 'avatar\\no-gender.png', '<p>&nbsp;</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 0, '2020-07-16 09:27:55', '2020-09-29 07:42:37'),
(30, 'Trần Văn K', NULL, NULL, NULL, NULL, 'avatar\\no-gender.png', NULL, 0, '2020-07-17 07:54:25', '2020-07-17 07:54:25'),
(33, 'Công ty Hồ Thanh Phong', NULL, NULL, NULL, NULL, 'avatar\\no-gender.png', NULL, 0, '2020-08-04 01:06:05', '2020-08-04 01:13:55'),
(38, 'Nhà tuyển dụng', NULL, NULL, NULL, 'businessPaper\\cmnd2.png', 'avatar\\no-gender.png', NULL, 1, '2020-10-07 03:54:17', '2020-10-09 20:35:39'),
(43, 'Nguyễn Thị Cẩm Huyền', 'Quận 1, TP Hồ Chí Minh', 2, '0987783627', 'businessPaper\\IMG_9371.jpg', 'avatar\\nguyen-thi-cam-huyen-43-cong-ty-tnhh-robocash-viet-nam-10-logo3.gif', '<p>GreenBook chẳng c&oacute; g&igrave; ngo&agrave;i tiền. Mị l&agrave; đại gia &aacute; hehehehehehe</p>\r\n\r\n<p><strong>Haiz. Ch&aacute;n qu&aacute; đi đăng tuyển dụng mấy bạn ti&ecirc;u tiền phụ m&igrave;nh &aacute;</strong></p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 1, '2021-01-10 08:02:40', '2021-01-10 08:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nam', NULL, NULL),
(2, 'Nữ', NULL, NULL),
(3, 'Khác', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `helps`
--

CREATE TABLE `helps` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `helps`
--

INSERT INTO `helps` (`id`, `title`, `user_id`, `content`, `reply`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cách liên hệ với Hotjob', 4, 'Cho mình xin source code website được không ạ', NULL, 0, '2020-07-14 10:21:08', '2020-07-14 10:21:08'),
(2, 'May mắn được vào vòng chung kết', 4, 'Thật là vinh hạnh', 'Chúc mừng bạn nha', 1, '2020-07-14 10:30:42', '2020-07-14 11:05:02'),
(5, 'Cách liên hệ với Hotjob', 6, 'Các bạn có thể cho mình xin cách để liên hệ với bên Hotjob được không ?', '<p>Bạn c&oacute; thể li&ecirc;n lạc với bộ phận Chăm S&oacute;c Kh&aacute;ch H&agrave;ng (CSKH) qua một trong c&aacute;c k&ecirc;nh sau:<br />\r\n1. Gửi y&ecirc;u cầu hỗ trợ tr&ecirc;n mục Trợ gi&uacute;p của ứng dụng<br />\r\n2. Li&ecirc;n hệ tổng đ&agrave;i theo số 0795525037<br />\r\n3. Gửi y&ecirc;u cầu đến email cty.hotjob2020<br />\r\nXin bạn lưu &yacute; v&agrave; th&ocirc;ng cảm l&agrave; tại một số thời điểm, việc li&ecirc;n hệ với tổng đ&agrave;i c&oacute; thể gặp kh&oacute; khăn. Để thuận tiện nhất cho bạn, Hotjob khuyến kh&iacute;ch bạn sử dụng h&igrave;nh thức Gửi y&ecirc;u cầu hỗ trợ ngay tr&ecirc;n website.</p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 1, '2020-07-14 19:05:41', '2020-12-30 21:27:53'),
(6, 'abc', 8, 'aaaaa', 'lllllllll', 1, '2020-07-14 20:10:18', '2020-07-14 20:19:43'),
(7, 'Tối ưu hóa trang web', 29, 'Trang web còn một số chưa ổn định\r\nChưa mượt mà cho lắm', 'Xong', 1, '2020-07-16 09:29:39', '2020-10-09 19:36:11'),
(8, 'abc', 36, 'abc', '<p><strong>Kh&ocirc;ng c&oacute; g&igrave; bạn eiii</strong></p>\r\n\r\n<div class=\"eJOY__extension_root_class\" id=\"eJOY__extension_root\" style=\"all: unset;\">&nbsp;</div>', 1, '2020-09-04 18:56:31', '2020-12-30 21:26:13'),
(9, 'Tiêu tiền giùm tôi', 43, 'Tôi đang có rất nhiều tiền. Không biết tiêu thế nào cho hết. Bạn tiêu chung được hôn:v', '<p>Book địa chỉ liền, m&igrave;nh tới ti&ecirc;u gi&ugrave;m cho</p>\r\n\r\n<h1><strong>Mama, cầu &ocirc;m ch&acirc;n</strong></h1>\r\n\r\n<p>Quản l&yacute; web l&agrave;m g&igrave;,&nbsp; &ocirc;m ch&acirc;n người gi&agrave;u sướng hơn ^.^</p>', 1, '2021-01-10 08:31:04', '2021-01-10 08:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL DEFAULT 0,
  `job_total_candidate` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_slug`, `job_address`, `category_id`, `employer_id`, `job_total_candidate`, `created_at`, `updated_at`) VALUES
(12, 'Nhân Viên Kinh Doanh Lương Trên 20 Triệu', 'nhan-vien-kinh-doanh-luong-tren-20-trieu-12', '5', 2, 6, 0, '2020-06-26 01:55:50', '2020-08-03 09:08:15'),
(13, 'Kỹ Thuật Lắp Đặt Camera (Quận Bình Tân)', 'ky-thuat-lap-dat-camera-quan-binh-tan-13', '1', 1, 9, 0, '2020-06-29 06:09:57', '2020-07-16 09:06:10'),
(14, 'Chuyên Viên Đảm Bảo Chất Lượng Dịch Vụ - Service Quality Assurance Specialist', 'chuyen-vien-dam-bao-chat-luong-dich-vu-service-quality-assurance-specialist-14', '1', 4, 10, 0, '2020-06-29 06:12:38', '2020-07-14 07:02:58'),
(15, 'Nhân Viên Telesale / Chăm Sóc Khách Hàng (Call Center) Tại Q.12', 'nhan-vien-telesale-cham-soc-khach-hang-call-center-tai-q12-15', '2', 4, 11, 0, '2020-06-29 06:14:19', '2020-06-29 06:14:19'),
(16, 'Nhân Viên Thiết Kế Đồ Họa - Lương 10 Triệu', 'nhan-vien-thiet-ke-do-hoa-luong-10-trieu-16', '2', 1, 12, 0, '2020-06-29 06:16:04', '2020-08-03 09:14:37'),
(17, 'Cộng Tác Viên Khách Hàng Bí Mật  (Tại Ngân Hàng)', 'cong-tac-vien-khach-hang-bi-mat-tai-ngan-hang-17', '1', 8, 13, 0, '2020-06-29 06:17:53', '2020-06-29 06:17:53'),
(18, 'Nhân Viên Kinh Doanh Lương Trên 15 Triệu (Đi Làm Ngay)', 'nhan-vien-kinh-doanh-luong-tren-15-trieu-di-lam-ngay-18', '6', 3, 4, 0, '2020-06-29 06:19:12', '2020-07-14 18:51:12'),
(19, 'Trợ Lý Giám Đốc - Biết Tiếng Hoa', 'tro-ly-giam-doc-biet-tieng-hoa-19', '5', 27, 6, 0, '2020-06-29 06:20:22', '2021-01-06 12:22:45'),
(20, 'Quản Đốc Phân Xưởng Dịch Vụ Cơ Khí, Lương Cứng 18 Triệu', 'quan-doc-phan-xuong-dich-vu-co-khi-luong-cung-18-trieu-20', '6', 7, 7, 0, '2020-06-29 06:31:09', '2020-07-10 01:07:18'),
(21, 'Lập trình viên Java', 'lap-trinh-vien-java-21', '2', 1, 7, 0, '2020-06-29 07:41:11', '2021-01-06 12:33:43'),
(22, 'Chuyên Viên Hoạch Định Tài Chính (Pru Planner)', 'chuyen-vien-hoach-dinh-tai-chinh-pru-planner-22', '6', 4, 4, 0, '2020-07-01 08:59:19', '2021-01-06 12:22:44'),
(23, 'Thanh Tra Pháp Chế Tại HCM', 'thanh-tra-phap-che-tai-hcm-23', '2', 19, 5, 0, '2020-07-01 10:23:23', '2020-07-14 06:52:17'),
(27, 'Thợ Mộc - Lao Động Phổ Thông Làm Mộc', 'tho-moc-lao-dong-pho-thong-lam-moc-27', '5', 5, 10, 0, '2020-07-02 10:15:17', '2020-07-14 03:15:11'),
(33, 'Giám Sát Công Trình ở Bình Dương', 'giam-sat-cong-trinh-o-binh-duong-33', '12', 25, 4, 1, '2020-07-16 09:12:33', '2021-01-07 00:28:41'),
(34, 'Kiến Trúc Sư - Thành Thạo Phần Mềm Revit', 'kien-truc-su-thanh-thao-phan-mem-revit-34', '2', 25, 4, 0, '2020-08-03 08:38:35', '2020-08-03 08:38:35'),
(35, '[Reebok - Hcm] Tư Vấn Bán Hàng Thời Trang', 'reebok-hcm-tu-van-ban-hang-thoi-trang-35', '2', 3, 6, 0, '2020-08-03 08:41:14', '2020-08-03 09:16:47'),
(36, 'Nhân Viên Văn Phòng (Biết Tiếng Anh Giao Tiếp)', 'nhan-vien-van-phong-biet-tieng-anh-giao-tiep-36', '45', 27, 6, 0, '2020-08-03 08:43:27', '2020-08-03 08:43:27'),
(37, 'Nhân Viên Bán Hàng Đi Thị Trường Kênh Gt (Salesman)', 'nhan-vien-ban-hang-di-thi-truong-kenh-gt-salesman-37', '32', 3, 6, 0, '2020-08-03 08:44:55', '2020-08-03 08:44:55'),
(38, 'Kỹ Thuật Viên Vận Hành Máy - Nhà Máy Vinasoy Bình Dương (Đi Làm Ngay)', 'ky-thuat-vien-van-hanh-may-nha-may-vinasoy-binh-duong-di-lam-ngay-38', '12', 8, 6, 1, '2020-08-03 08:46:26', '2021-01-10 07:26:16'),
(39, 'Kỹ Thuật Viên - Bộ Phận Điện - Phòng Bảo Dưỡng (Hcm)', 'ky-thuat-vien-bo-phan-dien-phong-bao-duong-hcm-39', '2', 9, 6, 0, '2020-08-03 08:48:22', '2020-08-03 09:16:08'),
(40, 'Nhân Viên Hành Chính Nhân Sự Tổng Hợp', 'nhan-vien-hanh-chinh-nhan-su-tong-hop-40', '2', 27, 6, 0, '2020-08-03 08:51:36', '2020-08-03 09:15:35'),
(41, 'Fpt - Nhân Viên Kinh Doanh Viễn Thông Tại Hà Nội', 'fpt-nhan-vien-kinh-doanh-vien-thong-tai-ha-noi-41', '1', 2, 4, 1, '2020-09-02 08:19:02', '2021-01-10 08:54:15'),
(42, 'Kế Toán Thu Ngân - (Rạch Giá)', 'ke-toan-thu-ngan-rach-gia-42', '2', 2, 38, 1, '2020-10-07 04:02:27', '2021-01-10 07:24:34'),
(46, 'Nhân Viên Kinh Doanh Thiết Bị Điện', 'nhan-vien-kinh-doanh-thiet-bi-dien-46', '2', 2, 4, 2, '2021-01-07 00:46:45', '2021-01-10 18:45:44'),
(47, 'Người đếm tiền', 'nguoi-dem-tien-47', '2', 17, 43, 1, '2021-01-10 08:16:25', '2021-01-10 08:46:51'),
(48, 'Chuyên Viên Kinh Doanh', 'chuyen-vien-kinh-doanh-48', '2', 2, 16, 0, '2021-01-10 18:40:31', '2021-01-10 18:40:31'),
(49, 'Chuyên Viên Trade Marketing-Hỗ Trợ Vùng Kinh Doanh Fpt Camera', 'chuyen-vien-trade-marketing-ho-tro-vung-kinh-doanh-fpt-camera-49', '1', 1, 4, 0, '2021-01-10 18:54:10', '2021-01-10 18:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `job_applied_status`
--

CREATE TABLE `job_applied_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applied_status`
--

INSERT INTO `job_applied_status` (`id`, `status`) VALUES
(1, 'Chờ xem xét'),
(2, 'Chấp thuận'),
(3, 'Từ chối');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `job_id` int(11) NOT NULL,
  `job_description` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `job_require` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `job_benefit` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `job_deadline` date DEFAULT NULL,
  `job_salary` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`job_id`, `job_description`, `job_require`, `job_benefit`, `job_deadline`, `job_salary`, `created_at`, `updated_at`) VALUES
(12, '• Tìm kiếm, khai thác khách hàng tiềm năng về vay vốn và bất động sản\r\n• Phát triển mở rộng thị trường, tìm kiếm bất động sản bán/cho thuê\r\n• Tư vấn thông tin dịch vụ tài chính cho khách hàng và bán các sản phẩm bất động sản do công ty phân phối;\r\n• Hướng dẫn, hỗ trợ khách hàng thực hiện các thủ tục chuyển nhượng, thế chấp vay vốn bất động sản.\r\n• Thực hiện các chiến lược bán hàng, marketing chung của công ty.\r\n• Ƭhường xuyên cập nhật thông tin thị trường bất động sản, nhɑnh chóng nắm bắt nhu cầu củɑ khách hàng;\r\n• Kết hợp với đội nhóm để thực hiện chỉ tiêu chung;\r\n• Các công việc khác theo yêu cầu của cấp trên (nếu có)\r\n• Địa chỉ: 672A27-28-29-30 Phan Văn Trị, Phường 10, Gò Vấp, Hồ Chí Minh', '• Nhanh nhẹn, chủ động, giao tiếp tốt, đam mê kinh doanh.\r\n• Không yêu cầu kinh nghiệm (sẽ được đào tạo trong quá trình làm việc).\r\n• Có kinh nghiệm trong Bất động sản và tài chính ngân hàng là một lợi thế\r\n• Có khả năng tự tạo danh sách khách hàng của mình và phát triển nó.\r\n• Có kỹ năng làm việc nhóm, giao tiếp, đàm phán và thuyết phục khách hàng tốt;\r\n• Có thái độ làm việc cầu tiến, năng động, tự tin và nghiêm túc học hỏi;\r\n• Có phương tiện đi lại và máy tính cá nhân.\r\n• Thông thạo vi tính văn phòng', '• Thu nhập hấp dẫn (Lương cơ bản 6 triệu trở lên + Hoa hồng + phụ cấp ).\r\n• Thưởng các ngày Lễ và Tết Âm lịch.\r\n• Bảo hiểm sức khỏe\r\n• Đóng BHXH, BHYT, BHTN theo quy định theo Luật Lao động sau khi trở thành nhân viên chính thức.\r\n• Được nghỉ 12 ngày phép/năm và các ngày nghỉ lễ Tết theo quy định;\r\n• Làm việc tự do trong môi trường mở. Phát triển toàn bộ khả năng của bản thân.\r\n• Môi trường làm việc trẻ và năng động cùng tập thể có kinh nghiệm lâu năm trong nghề.\r\n• Được định hướng và tạo điều kiện tốt nhất để phát huy khả năng theo năng lực, nguyện vọng của bản thân;\r\n• Cơ hội được phát triển năng lực nghề nghiệp và có mức thu nhập cao.\r\n• Được nghỉ 12 ngày phép/năm và các ngày nghỉ lễ Tết theo quy định;', '2021-02-09', '10 - 12 triệu', '2020-06-25 17:00:00', '2020-06-25 17:00:00'),
(13, '- Đi dây và lắp đặt hệ thống camera giám sát nhà ở, văn phòng và các hạng mục của công ty\r\n- Thi công hệ thống nhà thông minh\r\n- Lắp đặt khóa cửa thông minh\r\n- Công việc trao đổi cụ thể hơn khi tham gia phỏng vấn.\r\nVăn phòng tại: 26/3 Đường Số 4, Phường Bình Hưng Hòa A, Quận Bình Tân, Thành phố Hồ Chí Minh, Việt Nam (cách đường Tân Kỳ Tân Qúy 300m)', '- Nam từ 18 tuổi trở lên, khỏe mạnh\r\n- Có xe máy đi lại\r\n- Sinh sống tại TPHCM\r\n- Trung thực chịu khó\r\n- Kỷ luật tốt và nghiêm túc trong công việc.\r\n- Ứng viên chưa có kinh nghiệm sẽ được đào tạo.', '- Được Công ty hỗ trợ xăng xe đi lại + phí điện thoại.\r\n- Thưởng tháng lương thứ 13\r\n- Có hoa hồng cho nhân viên hàng tháng\r\n- Được xét tăng lương theo năng lực tự đề xuất.\r\n- Tham gia đầy đủ các chế độ BHXH, BHYT, BHTN', '2021-02-05', '7 - 10 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(14, 'Service Quality Assurance Specialist is to:\r\n1. Strictly comply with and fulfil the requirements of the Service Standards at the main stages of servicing individuals in remote service channels of Robocash Vietnam.\r\n2. Control the quality of customer service of Customer Service staff, Debt collector, Underwriter for incoming and outgoing calls by listening to audio recordings or by viewing the history of dialogs and evaluating them according to the approved quality assessment system.\r\n3. Identify systematic deviations in the service quality from the norm and provide information about them to his immediate supervisor immediately.\r\n4. Carry out the preparation of a monthly form of quality assessment on the quality of operators’ work.\r\n5. Consult operators on the service quality, control the exact implementation of all working methods.\r\n6. Select and offer optimal solutions to the customers in connection with the particular issue; convince customers of the profitability of the proposal; offer various types of services for discussion.\r\n7. Become familiar with new information necessary for customer service timely. Increase his professional and educational level, attend trainings, meetings organized by the management of the Company.\r\n8. Work with customers’ complaints and wishes, transfer them to the Country Manager or to the appropriate departments in accordance with the Rules established in the Company.\r\n9. Not to disclose information relating to the activities of the Company that became known to him in the process of fulfilling his duties, to comply with the requirements of the Regulation on Commercial Secret.\r\n10. Comply with the laws of Vietnam in the field of counteracting the legalization (laundering) of proceeds of crime and the financing of terrorism.\r\n\r\nThe Service Quality Assurance Specialist has the right to:\r\n1. Make suggestions for improving the work at his workplace.\r\n2. Make suggestions for training operators according to identified drawbacks.\r\n3. Receive information in full necessary to solve the tasks assigned to the department.\r\n4. Inform the immediate supervisor of all identified violations during the work and make suggestions for their elimination.\r\n5. Demand from the management of the Company to assist in the performance of his professional duties and the execution of rights.\r\n6. For all social guarantees provided for by law.\r\n\r\nThe Service Quality Assurance Specialist is responsible for:\r\n1. Failure to perform or improper performance of his duties stipulated by this Job Description, to the extent determined by the current labor legislation of Vietnam.\r\n2. Causing material damage to the employer – to the extent determined by the current labor and civil legislation of Vietnam.\r\n3. For offenses committed in the process of carrying out his activities – to the extent determined by the current administrative, criminal, civil legislation of Vietnam.', '- Language Vietnamese and English\r\n- Good communication skills\r\n- Preferable for working in financial industry (Fintech technology), IT service industry\r\n- Preferable for experience in Quality control in Customer service', '- KPI bonus\r\n- Insurances as Vietnamese regulations\r\n- 15-day annual leave', '2021-02-12', '15 - 20 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(15, '+ Nhân viên trực và tiếp nhận các cuộc gọi vào của khách hàng trên các khung quảng cáo các sản phẩm của công ty.\r\n+ Tư vấn, giải đáp các thắc mắc của khách hàng liên quan đến các sản phẩm công ty đang quảng cáo.\r\n+ Cung cấp những thông tin cần thiết cho khách hàng và chuyển cuộc gọi đến bộ phận liên quan khi có yêu cầu của khách hàng.\r\nGhi nhận các cuộc gọi khẩn, bất thường và nhanh chóng báo cáo lên cấp trên quản lý trực tiếp.\r\n+ Làm việc tại văn phòng.\r\n+ Làm việc trên phần mềm và hệ thống máy vi tính.\r\n+ Làm việc theo giờ hành chính từ 8h15 đến 17h30 (nghỉ trưa từ 12h00 đến 13h20).\r\n+ Sản phẩm là đồ điện gia dụng nhà bếp cao cấp và các sản phẩm về thiết bị y tế.\r\n+ Nhân Viên tiếp nhận các cuộc gọi vào của khách hàng, tư vấn chốt đơn hàng.\r\n- Nhân viên gọi ra chăm sóc những khách hàng cũ đã mua sản phẩm của công ty và tư vấn những mặt hàng mới.\r\n- KHÔNG ĐA CẤP- KHÔNG PHỤ PHÍ', '* Yêu cầu công việc:\r\nNam/Nữ từ 18 tuổi- 28 tuổi.\r\n- Có kỹ năng chăm sóc khách hàng, giao tiếp qua điện thoại tốt (không nói ngọng, nói lắp).\r\n- Kỹ năng đàm phán, tư vấn tốt\r\n- Có khả năng giao tiếp, làm việc nhóm, làm việc độc lập\r\n- Ưu tiên có kinh nghiệm bán hàng và chăm sóc khách hàng qua điện thoại (nếu chưa có kinh nghiệm sẽ được đào tạo).\r\n- Có tinh thần làm việc nghiêm túc\r\n- Làm việc 6 ngày/ tuần, 26 ngày công / tháng', '- Lương Cứng thử việc 5.200.000đ(đã bao gồm phụ cấp).\r\nChính thức 5.700.000(đã bao gồm phụ cấp)\r\n- Hoa hồng (5.6% trên 1 sản phẩm bán được) + Thưởng nóng.\r\n( Riêng tiền thưởng năng suất làm việc + tiền thưởng chốt đơn + tiền thưởng nóng sẽ tính riêng.)\r\n==> Thu nhập (bao gồm lương cứng và hoa hồng + phụ cấp+ thưởng ) trung bình 15 triệu - 30 triệu/tháng tùy theo năng lực\r\n* Quyền lợi được hưởng:\r\n- Thời gian làm việc: 08h15 - 17h30 (nghỉ trưa 12h00 - 13h20),\r\n- Làm 6 Ngày/Tuần. ( Được Off bất cứ 1 ngày trong tuần)\r\n- Chế độ thưởng nóng hàng ngày, hàng tuần,...\r\n- Hưởng lương tháng 13.\r\n- Cơ hội thăng tiến cao.\r\n- Các chế độ phúc lợi theo quy định của Nhà nước.\r\n- Được đăng ký BHXH – BHYT\r\n- Môi trường làm việc trẻ, năng động, chuyên nghiệp.\r\n- Được rèn luyện về khả năng phân tích sản phẩm, thị trường, kỹ năng giao tiếp, huấn luyện về nghệ thuật bán hàng,...', '2021-02-19', '12 - 15 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(16, '- Hỗ trợ lên kế hoạch cho nội thất nhà bếp và vẽ đồ họa tủ bếp và không gian bếp.\r\n- Hỗ trợ các công việc hành chính trong showroom.\r\n- Hoàn thành các công việc được cấp trên giao phó.\r\n\r\n*Địa chỉ làm việc: showroom Tủ Bếp Caesar, căn hộ 810, Happly Valey, đường Nguyễn Văn Linh, quận 7.', '- Tốt nghiệp Cao Đẳng trở lên\r\n- Có tinh thần hợp tác và chịu được áp lực cao trong công việc, tận tâm, tỉ mỉ.\r\n- Thành thạo kỹ năng vi tính văn phòng.\r\n- Thành thạo phần mềm Auto cad.\r\n- Công ty có khóa huấn luyện sử dụng phần mềm đồ họa 3D.', '- Lương từ 7-10 Triệu.\r\n- Lương / thưởng tháng 13.\r\n- Làm việc trong một môi trường chuyên nghiệp, thường xuyên được đào tạo về kỹ năng và nghiệp vụ chuyên môn.\r\n- Nhiều cơ hội thăng tiến.\r\n- Phép năm, thưởng và nghỉ các dịp lễ\r\n- Hưởng đầy đủ các chế độ theo Luật lao động: Nghỉ lễ, tết, phép năm, hiếu hỷ…\r\n- Hưởng đầy đủ các chế độ BHXH – BHYT – BHTN theo quy định của Nhà nước.', '2021-02-24', '7 - 10 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(17, '- Khách hàng bí mật thực hiện công việc ghi nhận chất lượng phục vụ của nhân viên tại các điểm giao dịch ngân hàng trên toàn quốc.\r\n- Đánh giá tại các địa điểm giao dịch ngân hàng trên toàn quốc mà các ngân hàng đối tác yêu cầu.\r\n- Đánh giá ghi nhận chất lượng tổng quan không gian giao dịch tại các điểm giao dịch ngân hàng.\r\n- Tiếp xúc trình bày nhu cầu sử dụng sản phẩm dịch vụ đối với nhân viên giao dịch để nhân viên tư vấn các sản phẩm của ngân hàng.\r\n- Hỏi các câu hỏi về sản phẩm, quy trình, thủ tục, lãi suất & các phát sinh trong quá trình sử dụng.\r\n- Ghi âm hoặc quay video lại quá trình tiếp xúc & tư vấn của nhân viên.\r\n- Đánh giá chất lượng nhân viên dựa trên các tiêu chuẩn mà ngân hàng yêu cầu.\r\n- Gửi toàn bộ dữ liệu đánh giá cho công ty.\r\n- Đối với ứng viên training ở HN thì làm việc tại khu vực Miền Bắc, ứng viên training tại Đà Nẵng thì làm việc tại khu vực Miền Trung và ứng viên training tại TP.HCM thì làm việc tại khu vực Miền Nam.\r\n- Thời gian triển khai dự án: 01/2019 - 12/2019\r\nỨng viên chưa nắm rõ về công việc khách hàng bí mật, xin vui lòng xem thêm các thông tin trên internet hoặc truy cập Website và Fanpage của chúng tôi để nắm rõ hơn:\r\nWebsite: www.vietphat-media.com\r\nFanpage: https://www.facebook.com/MysteryShoppingVN\r\n(cụ thể sẽ trao đổi chi tiết khi phỏng vấn)', '- Độ tuổi từ 22 -> 55\r\n- Tốt nghiệp trung cấp trở lên\r\n- Ăn nói lưu loát, rõ ràng, kỹ năng giao tiếp tốt. Xử lý tình huống tốt\r\n- Ưu tiên các đối tượng đã tham gia chương trình khách hàng bí mật của các đơn vị\r\n- Ưu tiên các đối tượng có kinh nghiệm trong lĩnh vực tư vấn tài chính, ngân hàng, am hiểu về các sản phẩm ngân hàng\r\n- Có khả năng đi công tác xa theo khu vực (Đối với ứng viên ở HN thì làm việc tại khu vực Miền Bắc, ứng viên tại Đà Nẵng thì làm việc tại khu vực Miền Trung và ứng viên tại TP.HCM thì làm việc tại khu vực Miền Nam).\r\n- Ứng viên khi ứng tuyển vui lòng gửi đính kèm CMND bản chụp 02 mặt', '- Được đào tạo về sản phẩm nghiệp ngân hàng của nhiều ngân hàng.\r\n- Nắm bắt được quy trình cung cấp dịch vụ,cải thiện kỹ năng tư vấn - Là tiền đề để các ứng viên làm việc tại các ngân hàng TMCP.\r\n- Khi tham gia chương trình \"Khách hàng bí mật\" Ứng viên sẽ được chu cấp toàn bộ các khoản chi phí khi đi về tỉnh: Ăn, ở, đi lại, chi phí khác.\r\n- Được kết hợp đi thăm quan các địa danh du lịch trên toàn quốc\r\n- Ngoài công tác phí, tiền công giao động từ 400.000 đ đến 1.000.000 đ/ngày, tùy thuộc vào năng suất chất lượng làm việc.\r\n- Sẽ được đào tạo về kỹ năng giao tiếp, kiến thức sản phẩm dịch vụ đối với các sản phẩm.\r\n- Có cơ hội được làm việc tại văn phòng công ty đối với các trường hợp có kỹ năng tốt, mức lương hấp dẫn.', '2021-01-27', '7 - 10 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(18, '- Làm từ THỨ 2 ĐẾN THỨ 7. (Chủ nhật nghỉ)\r\n- Sản phẩm tư vấn các căn hộ cao cấp\r\n- Tư vấn cho khách hàng về các chương trình của công ty theo data có sẵn\r\n- Nhập dữ liệu thông tin khách hàng lên hệ thống của công ty\r\n-Thuyết phục, giải đáp thắc mắc của khách của khách hàng thông qua điện thoại', '- Tốt nghiệp THPT trở lên, từ 20 - 35 tuổi\r\n- Giọng nói rõ ràng, khả năng xử lý tình huống\r\n- KHÔNG yêu cầu kinh nghiệm (sẽ được đào tạo theo công việc)\r\n- Có kinh nghiệm về Tư vấn, CSKH là một lợi thế', '- Lương cơ bản 6.6 -25 triệu/tháng ( hoa hồng 40-60%) + thưởng/bonus ( có lương cứng hỗ trợ nhân viên cho đến khi bán được sản phẩm)\r\n- Hỗ trợ chi phí điện thoại\r\n- Hỗ trợ phí gửi xe\r\n- Các ngày nghỉ Lễ, Tết theo quy định\r\n- Lộ trình thăng tiến rõ ràng', '2021-02-20', '15-20 triệu ( + Hoa hồng từ 40% đến 60%)', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(19, '- Làm báo cáo cho công trình xây dựng.\r\n- Hỗ trợ các giấy tờ chứng từ công trình, dự án của Công ty.\r\n- Các công việc khác theo sự chỉ đạo của Ban Lãnh Đạo.', '- Thành thạo Tiếng Hoa ( nghe, nói, đọc, viết) làm việc với các KH Đài Loan\r\n- Có trách nhiệm trong công việc, nhanh nhẹn.\r\n- Chấp nhận đi công trình cùng cấp trên (Bình Phước, Bình Dương).\r\n- Chứng chỉ tiếng Trung (HSK, TOCFL,….)', '- Lương có thể thỏa thuận khi phỏng vấn trực tiếp, theo năng lực ứng viên\r\n- Môi trường làm việc tốt, chế độ rõ ràng.\r\n- Có khả năng phát triển toàn diện năng lực bản thân, ổn định và thu nhập tốt về lâu dài.\r\n- Được thể hiện tốt ý tưởng, tiếp xúc và ứng dụng nghệ thuật mới. Có cơ hội cọ xát và học hỏi về thi công.\r\n- Hưởng các chế độ theo luật lao động BHXH, BHYT, BHTN theo quy định của nhà nước.\r\n- Thời gian làm việc: Nghỉ Chủ nhật.\r\n- Du lịch thường niên.', '2021-02-13', '10 - 12 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(20, '- Lên kế hoạch sản xuất theo từng đơn hàng cụ thể.\r\n\r\n- Giám sát, phân công công việc cho công nhân.\r\n\r\n- Bám sát quy trình sản xuất đã có của xưởng cơ khí.\r\n\r\n- Báo cáo định kỳ về tình hình sản xuất cho ban giám đốc.\r\n\r\n- Bóc tách bản vẽ tính toán dự trù vật tư để sản xuất.\r\n\r\n- Tham gia đóng góp xây dựng và cải tiến quy trình sản xuất', '- Tốt nghiệp đại học chuyên ngành cơ khí chế tạo.\r\n\r\n- Sử dụng thành thạo Autocad và các dụng cụ đo.\r\n\r\n- Có kinh nghiệm ít nhất 3 năm ở vị trí quản đốc phân xưởng cơ khí.\r\n\r\n- Tuổi đời trên 35 tuổi.\r\n\r\n- Sức khỏe tốt, đam mê, trung thực, tỉ mẩn, nhiệt tình, nhanh nhẹn.\r\n\r\n- Chịu được áp lực công việc, áp lực về tiến độ.\r\n\r\n- Ưu tiên người đã làm quản đốc phân xưởng cơ khí cho các doanh nghiệp của Việt Nam.', '- Lương cứng : 18 triệu + Thưởng theo doanh số\r\n\r\n- Thưởng các ngày lễ, tết\r\n\r\n- Đóng bảo hiểm xã hội đầy đủ theo mức lương thực tế.\r\n\r\n- Được hưởng các chế độ khác của công ty: Du lịch, dã ngoại, đào tạo nước ngoài..\r\n\r\n- Môi trường làm việc có nhiều cơ hội thăng tiến.\r\n\r\n- Tuần làm việc từ thứ 2 đến thứ 7.', '2021-02-12', '20-25 triệu', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(21, '- Lập trình Java Web', '- Biết lập trình', '- Hưởng phúc lợi', '2021-02-24', '> 1000$', '2020-06-28 17:00:00', '2020-06-28 17:00:00'),
(22, '• Chức danh: Chuyên viên hoạch định tài chính\r\n• Báo cáo trực tiếp: Quản Lý Kinh Doanh Kênh Thành Thị\r\n• Phòng ban: PruVenture\r\n\r\nTẦM NHÌN & SỨ MỆNH CỦA PRUVENTURE\r\nPruVenture tiền thân là một Trung tâm đào tạo và phát triển. Tại đây, chúng tôi đã đào tạo một lực lượng tư vấn viên đạt tiêu chuẩn cho ngành bảo hiểm nhân thọ.\r\nĐể thống lĩnh thị trường khách hàng thành thị, năm 2019, PruVenture có một sự chuyển đổi ngoạn mục khi được Prudential Việt Nam đầu tư, xây dựng thành một kênh phân phối hoàn toàn mới với sứ mệnh đào tạo một thế hệ chuyên viên hoạch định tài chính', 'Phát triển sự nghiệp tại PruVenture chỉ dành cho những ứng viên có tham vọng trở thành chủ doanh nghiệp thành đạt hoặc chuyên viên Hoạch Định Tài chính Cấp Cao (MDRT, COT, TOT) trong ngành Bảo Hiểm Nhân Thọ đầy tiềm năng tại Việt Nam và mong muốn hướng đến một cuộc sống giàu có, tiện nghi.\r\n\r\nĐể trở thành những Pru Planners, các ứng viên tiềm năng ấy phải là những người chín chắn, không ngần ngại trước thử thách và sẵn sàng chớp lấy những cơ hội. Họ có tác phong giao tiếp chuyên nghiệp, có kiến thức nền tảng về kinh tế xã hội. Họ hiện đại, hướng ngoại và thích nghi nhanh.', 'Performance Bonus\r\nHealthcare for employees\r\nIntensive training', '2021-02-21', '10 - 12 triệu', '2020-06-30 17:00:00', '2020-06-30 17:00:00'),
(23, '+ Tiếp nhận và giải quyết các thông tin phản ánh của khách hàng từ các phòng ban, đơn vị trong Công ty liên quan đến dịch vụ taxi tải.\r\n+ Thanh tra, kiểm tra vi phạm của lái xe.\r\n+ Ghi nhận sự việc và lập biên bản xử lý vi phạm, xử lý các vi phạm theo đúng quy định, trình tự.\r\n+ Tổng hợp báo cáo Ban Giám đốc kết quả xử lý vi phạm hàng tuần, tháng, quý, năm.\r\n+ Thực hiện các công việc khác theo sự phân công của Ban Giám đốc.\r\nĐịa điểm làm việc: 1942/1C Vườn Lài Nối Dài, phường An Phú Đông, Quận 12, Tp.HCM', '+ Giới tính : Nam - Độ tuổi: Từ 30 tuổi trở lên.\r\n+ Đã từng công tác trong lĩnh vực điều hành/ quản lý vận tải hành khách hoặc vị trí tương đương.\r\n+ Có sức khỏe tốt, nhanh nhạy, nhiệt tình.\r\n+ Có kỹ năng giao tiếp, tác phong nhanh nhẹn, cương quyết, trung thực.\r\n+ Ưu tiên ứng viên có bằng B2 hoặc công an, bộ đội xuất ngũ, chuyển ngành.', '+ Thu nhập (Lương, phụ cấp, thưởng): 11 – 12 triệu/ tháng (tùy theo năng lực).\r\n+ Được hưởng tất cả các quyền lợi của người lao động theo quy định hiện hành.\r\n- 100% được đóng BHXH theo Luật Lao động.', '2021-02-09', '10 - 12 triệu', '2020-06-30 17:00:00', '2020-06-30 17:00:00'),
(27, '- Làm mộc hoặc phụ mộc chuyên về ván công nghiệp sản xuất đồ gỗ nội thất và cửa gỗ công nghiệp.\r\n- Làm việc tại xưởng công ty và đi công trình lắp đặt nội thất .\r\n- Thời gian làm việc: 8h/ngày - làm việc từ T2 > T7, CN nghỉ.\r\n- Địa điểm làm việc : Lô 6 -7 đường N2, Mỹ Phước 4, P.Thới Hòa, Thị Xã Bến Cát,Tỉnh Bình Dương.', '- Thợ mộc: Nam tuổi từ 25 - 50 tuổi, đã có kinh nghiệm lâu năm trong nghề sản xuất đồ gỗ nội thất gia đình.\r\n- Thợ mộc tay nghề tốt về ván công nghiệp, chủ động trong công việc, biết đọc bản vẽ và sử dụng máy chuyên dụng sản xuất gỗ công nghiệp.\r\n- Đối với thợ mộc ưu tiên người có năng lực quản lí, công ty sẽ cân nhấc vị trí quản lí xưởng với chế độ và lương cao.\r\n- Lao động phổ thông làm mộc (thợ phụ): Nam tuổi từ 18 -50 tuổi.\r\n- Cẩn thận, siêng năng, chủ động công việc.\r\n- Sức khỏe tốt.', '- Thợ mộc: Lương từ 8 - 15 Tr/Tháng ( 26 ngày /Tháng)\r\n- Phụ mộc: Lương từ 6 - 8 Tr/ Tháng ( 26 ngày/Tháng)\r\n- Có lương thưởng và phép năm, lương các ngày lễ trong năm.\r\n- Ngoài tiền lương có thưởng trách nhiệm, hỗ trợ cơm trưa, chi phí tiền xăng xe khi đi công trình và công tác tỉnh nếu có.\r\n- Tính lương tăng ca, tiền cơm ngoài giờ hành chính.\r\n- Hỗ trợ chỗ ở, điện nước với người lao động làm ăn xa nhà và gắn bó lâu dài.', '2021-02-17', '12 - 15 triệu', '2020-07-02 10:15:17', '2020-07-02 10:15:17'),
(33, 'Giám sát công trình\r\nGiám sát việc xây nhà', 'Bằng tốt nghiệp ngành xây dựng\r\nKinh nghiệm 2 năm trở lên', 'Hưởng phúc lợi công ty\r\nThưởng lương tết', '2021-02-08', '12 - 15 triệu', '2020-07-16 09:12:33', '2021-01-07 00:51:15'),
(34, '- Làm phương án kiến trúc bằng phần mềm Revit hoặc Sketchup.\r\n- Thực hiện hoàn chỉnh đồ án thiết kế: từ sáng tác đến triển khai.\r\n- Phỏng vấn và Làm việc tại: 269 Tô Hiến Thành, Phường 13, Quận 10, Tp.HCM.', '- Có ý thức về trách nhiệm.\r\n- Luôn có ý thức về tác phẩm kiến trúc mà mình đảm nhiệm.\r\n- Trao đổi cụ thể khi phỏng vấn.', '- Tăng lương theo năng lực làm việc (không phải chờ theo định kỳ).\r\n- Thời gian thử việc: 1 tháng.\r\n- Luôn được đào tạo, hỗ trợ bởi kiến trúc sư đàn anh.\r\n- Môi trường làm việc được tự do sáng tác.\r\n- Được lương đúng năng lực trí tuệ, công sức làm việc xứng đáng.', '2021-02-11', '15 - 20 triệu', '2020-08-03 08:38:35', '2020-08-03 08:38:35'),
(35, '- Tìm hiểu nhu cầu, khơi gợi và giới thiệu sản phẩm cho khách hàng\r\n- Thúc đẩy bán hàng, hoàn thành chỉ tiêu\r\n- Chăm sóc khách hàng\r\n- Thực hiện các chương trình khuyến mãi, thành viên\r\n- Trưng bày, giữ gìn sản phẩm trong cửa hàng\r\n- Các nhiệm vụ khác theo sự phân công của cấp quản lý.\r\n- Làm việc theo ca xoay (8 tiếng/ca) - không thích hợp cho sinh viên.\r\n- Địa điểm: Reebok Aoen Tân Phú\r\n\r\n*Nộp hồ sơ trực tiếp tại: Tầng 10 - Tòa nhà HDbank, 25Bis, Nguyễn Thị Minh Khai, Q.1 (hồ sơ photo, không cần công chứng - không hoàn trả) - Gửi Chị My nhân sự\r\nHoặc nộp trực tuyến (online) tại: https://bit.ly/tuyendungthethaovathoitrang', '- Nam/Nữ, từ 18 - 28 tuổi\r\n- Ngoại hình dễ nhìn\r\n- Không ngại di chuyển\r\n- Khả năng giao tiếp tốt\r\n- Trung thực, chịu khó, có trách nhiệm\r\n- Ưu tiên những bạn đã có kinh nghiệm bán hàng thời trang, mỹ phẩm,...', '- Thu nhập hấp dẫn: 7 triệu - 11 triệu/tháng (bao gồm lương bản + phụ cấp + thưởng doanh thu + các khoản thưởng khác)\r\n- Ngày nghỉ: 1 ngày/tuần + 12 ngày phép năm\r\n- Chế độ bảo hiểm đầy đủ theo quy định nhà nước.\r\n- Được mua thêm bảo hiểm sức khỏe 24/24 miễn phí.\r\n- Được sở hữu sản phẩm từ các nhãn hàng với giá ưu đãi từ 25% - 30%.\r\n- Thưởng Lương tháng 13 + các khoản thưởng Quý/Năm.\r\n- Du lịch hằng năm cùng công ty miễn phí.\r\n- Tham dự Tiệc Tất Niên (YEP) với quy mô hoành tráng.\r\n- Cơ hội thăng tiến lên vị trí Giám sát cửa hàng/Quản lý cửa hàng\r\n- Chính sách phúc lợi hấp dẫn khác.', '2021-02-18', '7 - 10 triệu', '2020-08-03 08:41:14', '2020-08-03 08:41:14'),
(36, '- Làm việc với nhà cung cấp\r\n- Kiểm tra và nhận đơn hàng với bên sản xuất để yêu cầu hàng\r\n- Thu mua theo đơn đặt hàng từ cấp trên\r\n- Quản lý và theo dõi tiến độ sản xuất\r\n………………..\r\nMô tả trực tiếp trong quá trình phỏng vấn', '- Không yêu cầu kinh nghiệm\r\n- Tiếng anh giao tiếp\r\n- Vi tính văn phòng\r\n- Tinh thần làm việc nhóm', '- Mức lương: 7-10 triệu (thỏa thuận theo năng lực và kinh nghiệm)\r\n- Thưởng tết Âm lịch\r\n- Thưởng 30/4 và 1/5\r\n- Tham gia BHXH, BHYT, BHTN\r\n- Các chính sách khác theo qui định', '2021-02-20', '7 - 10 triệu', '2020-08-03 08:43:27', '2020-08-03 08:43:27'),
(37, '- Thực hiện sắp xếp, trưng bày hàng hóa; tư vấn, giới thiệu sản phẩm, ghi đơn, bán các nhãn hàng Nước/ Sữa:TH true milk/ TH True Warter, TH True Rice, TH True Juice...tại các điểm bán trên tuyến phụ trách\r\n- Chăm sóc và tạo mối quan hệ với khách hàng, đảm bảo được việc duy trì nguồn khách hàng cũ và phát triển khách hàng mới nhằm hoàn thành chỉ tiêu doanh số bán hàng\r\n- Thực hiện các báo cáo bán hàng theo quy định của Công ty\r\n- Ghi nhận và giải quyết các vấn đề liên quan đến sản phẩm, hàng hóa\r\n- Thực hiện các công việc liên quan khác đến bán hàng theo yêu cầu của Giám sát', '- Tốt nghiệp THPT trở lên.\r\n- Nam / nữ tuổi từ 18-35 yêu thích công việc kinh doanh, chăm chỉ, chịu khó.\r\n- Có phương tiện đi lại, có sức khỏe tốt, sẵn sàng di chuyển trong tuyến được giao.\r\n- Có khả năng giao tiếp tốt, thuyết phục khách hàng.', '- Thu nhập 7 - 10tr, thử việc nhận 100% lương + thưởng.\r\n- Các phúc lợi khác: bảo hiểm, thưởng lễ tết, lương tháng 13, nghỉ phép, tham gia chương trình chăm sóc sức khỏe, teambuilding.\r\n- Được cấp phát đầy đủ đồng phục đi bán hàng\r\n- Được đào tạo quy trình bán hàng bài bản, chuyên nghiệp.\r\n- Cơ hội thăng tiến lên các vị trí trưởng nhóm bán hàng, giám sát bán hàng, quản lý bán hàng khu vực', '2021-03-02', '7 - 10 triệu', '2020-08-03 08:44:55', '2020-08-03 08:44:55'),
(38, '- Vận hành máy móc thiết bị trong khu vực chế biến hoặc hoàn thiện sản phẩm;\r\n- Phối hợp thực hiện khắc phục sự cố thiết bị (nếu có) theo qui trình;\r\n- Thực hiện bảo dưỡng ngày, tuần theo kế hoạch.\r\n- Vệ sinh thiết bị, khu vực hoạt đồng định kỳ đảm bảo 5S.', '- Tốt nghiệp: từ Trung cấp/Cao đẳng chuyên ngành Điện/Điện tử/Cơ điện tử/Công nghệ thực phẩm.\r\n- Kinh nghiệm: Ưu tiên có kinh nghiệm vận hành máy/thiết bị tự động hóa ngành thực phẩm\r\n- Có khả năng vận hành thiết bị theo đúng quy trình, hướng dẫn.\r\n- Chấp nhận làm việc theo ca.\r\n- Có sức khoẻ tốt.', '- Lương: cạnh tranh theo năng lực và kinh nghiệm.\r\n- Thưởng: 1/2 tháng lương các ngày Lễ 30/4 và 2/9.\r\n- Thưởng lương tháng 13, 14\r\n- Thưởng lao động tiên tiến, tiêu biểu hàng năm\r\n- Phụ cấp cơm: 30.000 đồng/ngày.\r\n- Du lịch & team building: trong nước 2 năm/lần hoặc nước ngoài 4 năm/lần.\r\n- Các khoản phúc lợi khác theo thỏa ước lao động tập thể và quy định của luật lao động hiện hành.', '2021-02-11', '7-10 triệu', '2020-08-03 08:46:26', '2020-08-03 08:46:26'),
(39, 'Là Kỹ thuật viên- Bộ phận Sửa chữa và bảo dưỡng - Phòng Nghiền và sửa chữa thiết bị chịu trách nhiệm:\r\n- Phối hợp cùng Trưởng ca xử lý các sự cố điện; kiểm tra, phân tích, đánh giá tình trạng của thiết bị điện trong nhà máy;\r\n- Bảo dưỡng, sửa chữa thiết bị điện dưới sự chỉ đạo của Trưởng ca;\r\n- Báo cáo công việc trực tiếp với Trưởng ca;\r\n- Các công việc khác theo yêu cầu của cấp trên.\r\nNơi làm việc : Chi nhánh Công ty Xi măng Chinfon - Nhà máy nghiền clinker Hiệp Phước\r\n(Lô A7, KCN Hiệp Phước, huyện Nhà Bè, thành phố Hồ Chí Minh)', '- Giới tính: Nam, tuổi < 35\r\n- Tốt nghiệp hệ Cao đẳng trở lên, chuyên ngành Điện công nghiệp;\r\n- Tối thiểu 01 năm kinh nghiệm;\r\n- Có khả năng đọc hiểu tài liệu bằng tiếng Anh; có kiến thức về Điện tự động, PLCs.', '- Loại hợp đồng dự kiến sẽ giao kết: HĐLĐ xác định thời hạn 12 tháng nếu thử việc có kết quả đạt.\r\n- Thời gian làm việc: 42h/1tuần, làm việc theo ca.\r\n- Tiền lương: Từ 7 triệu đồng/tháng trở lên, tùy theo năng lực và kinh nghiệm công tác, điều chỉnh lương\r\nhàng năm theo thị trường lao động.\r\nPhúc lợi khác:\r\n- Thưởng tháng, thưởng 6 tháng/lần theo kết quả sản xuất kinh doanh; thưởng năm từ 1-3 tháng lương;\r\ncó xe đưa rước từ nội thành đến công ty;\r\n- Thưởng nhân các ngày lễ của Chính phủ, sinh nhật, ngày thành lập công ty,…;\r\n- Các phúc lợi khác theo kết quả sản xuất kinh doanh.', '2021-02-09', '7 - 10 triệu', '2020-08-03 08:48:22', '2020-08-03 08:48:22'),
(40, '- Hỗ trợ photo, in ấn, công chứng hồ sơ khi có yêu cầu từ các Phòng/ban.\r\n- Hỗ trợ công tác trực lễ tân, đón tiếp khách khi lễ tân ra ngoài, nghỉ phép.\r\n- Phụ trách công tác BHXH, BHYT;\r\n- Theo dõi, quản lý việc tuân thủ nội quy, quy định của nhân viên;\r\n- Soạn thảo công văn, tài liệu theo yêu cầu;\r\n- Hỗ trợ công tác tuyển dụng: tìm kiếm ứng viên qua các kênh tuyển dụng, liên hệ ứng viên, gửi thư mời phỏng vấn, thư mời nhận việc;\r\n- Phối hợp với nhân viên trong bộ phận thực hiện các công tác hậu cần khi công ty có sự kiện như: tổng kết quý, tổng kết năm, tết trung thu, du lịch...\r\n- Theo dõi, nhắc nhở các Phòng/ban nộp báo cáo, đánh giá...\r\n- Theo dõi việc thực hiện vệ sinh của CBNV tại văn phòng.\r\n- Thực hiện một số công việc khác theo sự phân công của Trưởng Phòng và Ban Giám đốc', '- Tốt nghiệp đại học chuyên ngành: quản trị văn phòng, quản trị nhân sự, QTKD...\r\n- Có ít nhất 2 năm kinh nghiệm ở vị trí tương đương, ngoại hình ưa nhìn ( chiều cao từ 1m58 trở lên).\r\n- Kỹ năng: thuyết trình, giao tiếp tốt.\r\n- Phẩm chất: Trung thực, nhanh nhẹn, có tinh thần trách nhiệm cao với công việc, chịu được áp lực công việc cao.\r\n- Có sức khỏe tốt và nguyện vọng làm việc lâu dài', '- Các chế độ : Theo Luật lao động Việt Nam và quy định Công ty.\r\n- Quà tặng sinh nhật, lễ Tết.\r\n- Tháng lương 13, 14, 15\r\n- Du lịch hàng năm.\r\n- Khám sức khỏe hàng năm.\r\n- Cổ phần quà tặng và chia cổ tức theo chính sách chung.\r\n- Bảo hiểm nhân thọ và gói bảo hiểm chăm sức khỏe toàn diện.\r\n- Chương trình đào tạo theo nhu cầu và định hướng phát triển.\r\n- và các chương trình chăm sóc đời sống khác theo chính sách chung của Công ty và Công đoàn.', '2021-02-06', '10 - 12 triệu', '2020-08-03 08:51:36', '2020-08-03 08:51:36'),
(41, '- Tìm kiếm thông tin, tiếp cận các khách hàng tiềm năng.\r\n- Tư vấn, giải thích cho khách hàng về dịch vụ Internet và dịch vụ Truyền Hình FPT do FPT Telecom đang cung cấp.\r\n- Đàm phán thương lượng, thực hiện các thủ tục ký kết hợp đồng với khách hàng.', '- Tốt nghiệp Trung Cấp/ Cao Đẳng/ Đại Học các Chuyên ngành.\r\n- Ưu tiên sinh viên mới ra trường, cầu thị, sẵn sàng học hỏi, đào tạo.\r\n- Nam,nữ tuổi từ 20-30, làm việc toàn thời gian.\r\n- Nhanh nhẹn, linh hoạt, giải quyết tình huống tốt\r\n- Các ứng viên có kinh nghiệm, hiểu biết trong lĩnh vực hàng tiêu dùng, Viễn thông là một lợi thế.\r\n- Ưu tiên ứng viên có hộ khẩu tại Hà Đông, Chương Mỹ, Chúc Sơn, Xuân Mai và khu vực lân cận.', '- Thu nhập hấp dẫn từ 8-15M/ Tháng( Gồm Lương cứng + hoa hồng + doanh thu + CSKH...)\r\n- Thưởng lương tháng 13, BHXH, Thất nghiệp, tiền mừng tuổi, nghỉ mát,.... hàng năm.\r\n- Đầy đủ các chế độ theo luật lao động hiện hành.\r\n- Chính sách phúc lợi theo quy định của Công ty đa dạng: Chăm sóc sức khỏe định kì hàng năm; Gói bảo hiểm sức khỏe - chuyên biệt (FPT Care – Khám chữa bệnh miễn phí tại tất cả các bệnh viện); Các hoạt động tri ân, chăm lo đời sống tinh thần CBNV và Thân nhân...\r\n- Môi trường làm việc thân thiện, cởi mở.\r\n- Cơ sở vật chất và công cụ làm việc hiện đại, tiện nghi.\r\n- Được tham dự các hoạt động văn hóa đoàn thể của công ty và tập đoàn.\r\n- Hưởng các gói ưu đãi cước khi sử dụng dịch vụ của FPT Telecom.', '2021-02-10', '7-10 triệu', '2020-09-02 08:19:02', '2020-09-02 08:19:02'),
(42, '[ THỜI GIAN LÀM VIỆC ]: 14h-21h từ thứ 3 đến thứ 6 & Thứ 7, CN: từ 10h-21h\r\n\r\n1. Thu tiền học phí, giáo trình, balo, khác…. (cần nắm rõ mức học phí, giá sách vở, balô, tablet khác theo chương trình khuyến mại hiện hành tại thời điểm đó)\r\n2. Báo cáo doanh số hàng ngày.\r\n3. Nộp tiền vào tài khoản ngân hàng của công ty.\r\n4. Lưu trữ giấy tờ, phiếu thu.\r\n5. Hỗ trợ quản lý kho sách, tablet\r\n6. Kiểm soát tiền mặt, tiền cà thẻ, trả góp và các vấn đề liên quan.\r\n7. Tiếp đón khách.\r\n8. Trực tổng đài: tiếp nhận điện thoại, trả lời & chuyển cho người phụ trách\r\n9. Nhận & chuyển công văn, giấy tờ\r\n10. Admin khác của Trung tâm', '- Tốt nghiệp chuyên ngành Kế toán\r\n- Tuổi từ 23 - 29 tuổi\r\n- Kinh nghiệm thu ngân là ưu tiên.\r\n- Ngoại hình đẹp, cân đối & phù hợp\r\n- Nhanh nhẹn, năng động\r\n- Là người có tinh thần cầu tiến & phát triển bản thân, suy nghĩ tích cực.', '- Làm việc trong môi trường năng động, chuyên nghiệp có nhiều cơ hội thăng tiến.\r\n- Cung cấp trang thiết bị đầy đủ để phục vụ công việc.\r\n- Được đóng BHXH, BHYT, BHTN.\r\n- Được hưởng các chính sách phúc lợi theo quy định của công ty.\r\n- Được đào tạo, nâng cao nghiệp vụ thường xuyên.\r\n- Được phụ cấp tiền trách nhiệm sau khi pass thử việc.', '2021-02-17', '5-7 triệu', '2020-10-07 04:02:27', '2020-10-07 04:02:27'),
(46, '- Xây dựng và triển khai kế hoạch bán hàng theo định hướng chiến lược của Công ty để đạt chỉ tiêu doanh thu. Tìm kiếm mở rộng khách hàng và thị phần.\r\n- Đề xuất các biện pháp, chính sách phù hợp thúc đẩy hoạt động kinh doanh của Công ty đạt hiệu quả\r\n- Chủ động tìm kiếm khách hàng, mở rộng thị trường, khách hàng tiềm năng và khách hàng dự án\r\n- Tìm hiểu nhu cầu khách hàng, tư vấn, chăm sóc và báo giá cho khách hàng.\r\n- Theo dõi hợp đồng, công nợ, và các công việc chăm sóc khách hàng trước, trong và sau hợp đồng\r\n- Tiếp tục duy trì, nuôi dưỡng mối quan hệ với khách hàng cũ, khách hàng hiện tại, khách hàng tiềm năng và khách hàng dự án của Công ty\r\n- Lập kế hoạch kinh doanh (tuần, tháng, quý)\r\n- Thực hiện báo cáo định kỳ theo quy định gửi Lãnh đạo', '- Nam tuổi đời từ 25 – 35.\r\n- Tốt nghiệp Trung Cấp trở lên chuyên ngành điện, điện tử, Marketing, kinh tế, Quản trị Kinh doanh.\r\n- Có ngoại hình cân đối, sức khoẻ tốt, có khả năng giao tiếp tốt, năng động, nhiệt tình, trung thực và đặc biệt yêu thích công việc kinh doanh.\r\n- Sử dụng thành thạo vi tính văn phòng Word; Excel; Powerpoint và phần mềm thông dụng\r\n- Có thể đi công tác ngoài Thành phố.\r\n- Ưu tiên ứng viên có kinh nghiệm về máy biến áp, các sản phẩm điện công nghiệp, năng lượng tái tạo, máy công nghiệp.', 'Lương cơ bản theo năng lực và kinh nghiệm làm việc.\r\n- Thưởng theo năng lực thực tế và hoa hồng bán hàng.\r\n- Phụ cấp điện thoại, ăn trưa\r\n- Được xét nâng lương theo năng lực làm việc và hiệu quả công việc\r\n- Thưởng Lễ, Tết, lương tháng 13,…\r\n- Các chế độ bảo hiểm đầy đủ theo quy định của Nhà nước.\r\n- Môi trường làm việc chuyên nghiệp, thân thiện, có nhiều cơ hội thăng tiến, học hỏi và phát triển nâng cao trình độ', '2021-01-30', '10 - 12 triệu', '2021-01-07 00:46:45', '2021-01-07 00:46:45'),
(47, 'Bạn chỉ việc đếm tiền, kiếm tiền và tiêu cứ để tôi lo:vvv', 'Chỉ tuyển nam nhi\r\n18-25 tuổi\r\nChịu được áp lực đếm tiền bất kể thời gian\r\nƯu tiên trai miền Trung', 'Suốt ngày thấy tiền\r\nNgồi trên đống tiền\r\nTuy nhiên không được lấy tiền\r\nThỉnh thoảng sẽ có thêm tiền', '2021-01-29', 'Tính lần đếm đầu tiên không ngủ. Đếm bao nhiêu lấy bấy nhiêu, tùy vào khả năng của bạn', '2021-01-10 08:16:25', '2021-01-10 08:16:25'),
(48, '+ Khai thác, tìm kiếm và phát triển Khách hàng tổ chức và cá nhân để bán những sản phẩm do Công ty kinh doanh (Thiết bị văn phòng, thiết bị an ninh…).\r\n+ Theo dõi, giám sát, tổ chức thực hiện công việc từ khi bắt đầu Hợp đồng đến khi kết thúc Hợp đồng\r\n+ Theo dõi, đôn đốc công nợ Khách hàng, đảm bảo công nợ được thanh toán đúng hạn.', '- Ưu tiên ứng viên có kinh nghiệm và yêu thích kinh doanh lĩnh vực thiết bị văn phòng.\r\n- Ưu tiên ứng viên giao tiếp Tiếng Anh tốt\r\n- Có sức khỏe tốt, Giao tiếp tốt, năng động, chịu được áp lực công việc, có khả năng làm việc độc lập.\r\n- Ưu tiên ứng viên có các mối quan hệ với các ngành Y tế, Ngân hàng, Giáo dục...', '- Lương cứng tùy theo kinh nghiệm, năng lực + hoa hồng doanh số ( 1 - 5%)\r\n- Bên cạnh một mức lương cố định để đảm bảo cho cuộc sống, bạn còn được hưởng hoa hồng từ các doanh số bán ra hàng tháng, nửa năm của bạn (đây cũng là chủ trương của cty để người giỏi được hưởng tối đa sức lao động của mình).\r\n- Được làm việc trong môi trường chuyên nghiệp, có tính cạnh tranh cao. Được hưởng các chế độ theo quy định nhà nước, được nghỉ lễ, nghỉ tết theo quy định của nhà nước.', '2021-01-23', '15 - 20 triệu', '2021-01-10 18:40:31', '2021-01-10 18:40:31'),
(49, '- Triển khai trực tiếp các chương trình thức đẩy doanh số Chủ động khảo sát, nghiên cứu thị trường trong phạm vi: khách hàng cá nhân tại các dự án chung cư, khu đô thị …\r\n- Thiết lập kế hoạch bán hàng/hợp tác kinh doanh cung cấp dịch vụ Internet trong các dự án chung cư, khu đô thị.\r\n- Tiếp cận, tư vấn cho khách hàng về sản phẩm - dịch vụ của công ty đang cung cấp.\r\n- Đàm phán thương lượng, xúc tiến, thực hiện các thủ tục ký kết hợp đồng với khách hàng.\r\n- Triển khai trực tiếp các chương trình thúc đẩy doanh số bán hàng (sản phẩm FPT Camera) tại khu vực được phụ trách.\r\n- Bám sát địa bàn, chủ động nghiên cứu thị trường, đối thủ cạnh tranh, tìm hiểu nhu cầu khách hàng, tìm kiếm các nhóm KH tiềm năng, đề xuất các chính sách bán hàng…\r\n- Đào tạo, hướng dẫn đội ngũ bán hàng về sản phẩm, chính sách, kỹ năng, triển khai các chương trình bán hàng, tiếp thị, quảng bá hình ảnh tới khách hàng…\r\n- Phân tích số phát triển kinh doanh từng Chi nhánh và có các đề xuất tăng số bán cho từng Vùng/Chi nhánh.\r\n- Hỗ trợ các hoạt động marketing, event phát triển thương hiệu FPT Camera.\r\n- Báo cáo định kỳ cho BGĐ về tình hình phát triển thuê bao theo vùng phụ trách.', '- Nam. Tuổi từ 22-30.\r\n- Sinh viên mới ra trường sẽ được đào tạo bài bản về kiến thức, kỹ năng nếu có đam mê, nhiệt huyết với nghề sales.\r\n- Tốt nghiệp Cao đẳng chuyên ngành Kinh tế, Marketing, quản trị kinh doanh, ...\r\n- Giao tiếp thuyết phục tốt, có khả năng tiếp thu kiến thức viễn thông/bán hàng.\r\n- Ngoại hình ưa nhìn.\r\n- Ưu tiên ứng viên đã từng làm việc tại các công ty viễn thông và/hoặc mảng kinh doanh dự án.', '- Mức lương và thu nhập hấp dẫn (lương cứng + lương doanh số + lương thụ động từ khách hàng cũ); Thu nhập trên 10M/tháng sau khi được đào tạo.\r\n- Chế độ khen thưởng và phúc lợi phong phú: tiền nghỉ mát, du lịch, lì xì đầu năm, lương tháng 13, thưởng kinh doanh...\r\n- Các chế độ theo Luật lao động hiện hành và đặc biệt là bảo hiểm FPT Care - gói bảo hiểm dành riêng cho nhân viên FPT và người thân… được thanh toán chi phí khám chữa bệnh tại tất cá các bệnh viện.\r\n- Cùng anh em đồng chí hướng \"quẩy điên cuồng\" trong các hoạt động văn hóa hàng năm: hội làng, hội diễn Sao Chổi, sinh nhật FPT, ngày 08/03, ngày 11/11...\r\n- Được tham gia nhiều chương trình đào tạo kỹ năng mềm, chuyên môn như: đào tạo tân binh, 72 giờ thử thách, teambuilding...', '2021-01-21', '10 - 12 triệu', '2021-01-10 18:54:10', '2021-01-10 18:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `comment_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 182, 8, '2021-01-15 01:02:07', '2021-01-15 01:02:07', NULL),
(20, 1, 19, '2021-01-15 01:06:09', '2021-01-15 01:06:09', NULL),
(21, 182, 19, '2021-01-15 01:06:40', '2021-01-15 01:06:40', NULL),
(22, 56, 4, '2021-01-15 01:08:18', '2021-01-15 01:08:18', NULL),
(23, 57, 21, '2021-01-15 08:44:59', '2021-01-15 08:44:59', NULL),
(24, 181, 36, '2021-01-15 09:28:09', '2021-01-15 09:28:09', NULL),
(25, 178, 36, '2021-01-15 09:28:35', '2021-01-15 09:28:35', NULL),
(26, 176, 36, '2021-01-15 09:28:37', '2021-01-15 09:28:37', NULL),
(28, 177, 36, '2021-01-15 09:28:42', '2021-01-15 09:28:42', NULL),
(29, 175, 36, '2021-01-15 09:28:45', '2021-01-15 09:28:45', NULL),
(30, 179, 36, '2021-01-15 09:29:31', '2021-01-15 09:29:31', NULL),
(31, 192, 36, '2021-01-15 09:37:55', '2021-01-15 09:37:55', NULL),
(32, 182, 36, '2021-01-15 09:37:59', '2021-01-15 09:37:59', NULL),
(33, 57, 36, '2021-01-15 09:38:03', '2021-01-15 09:38:03', NULL),
(35, 12, 8, '2021-01-15 09:54:00', '2021-01-15 09:54:00', NULL),
(36, 10, 8, '2021-01-15 10:01:58', '2021-01-15 10:01:58', NULL),
(37, 4, 8, '2021-01-15 10:02:07', '2021-01-15 10:02:07', NULL),
(38, 181, 43, '2021-01-15 10:05:44', '2021-01-15 10:05:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_21_122600_create_category_table', 1),
(5, '2020_06_22_023754_create_job_table', 2),
(6, '2020_06_22_075430_create_jobs_detals_table', 3),
(7, '2020_06_24_075607_create_customer_table', 4),
(8, '2020_06_24_080156_create_employer_table', 5),
(9, '2020_06_26_073601_create_candidate_table', 6),
(10, '2020_06_26_081450_create_emloyer_jobs_table', 7),
(11, '2020_06_26_090641_create_cadidate_jobs_table', 8),
(12, '2020_07_01_171544_create_city_table', 9),
(13, '2020_07_02_034403_create_gender_table', 10),
(14, '2020_07_09_131857_create_articles_table', 11),
(15, '2020_07_14_083737_create_suitable_job_table', 12),
(16, '2020_07_14_165913_create_help_table', 13),
(17, '2020_07_29_094145_create_revenue_table', 14),
(18, '2020_10_01_150936_create_comments_table', 15),
(19, '2020_10_01_151912_create_comments_table', 16),
(20, '2021_01_06_075240_user_table', 17),
(21, '2021_01_06_180149_create_candidate_job_table', 18),
(22, '2021_01_06_181324_create_privacy_table', 19),
(23, '2021_01_06_181511_create_table_job_applied_status', 19),
(24, '2021_01_15_070413_create_like_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `role`) VALUES
(0, 'Quản trị viên'),
(1, 'Nhà tuyển dụng'),
(2, 'Ứng viên');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `revenue` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `date`, `revenue`, `created_at`, `updated_at`) VALUES
(2, '2020-07-29', 250, '2020-07-29 02:59:45', '2020-07-29 02:59:45'),
(3, '2020-07-28', 500, '2020-07-28 02:59:45', '2020-07-28 02:59:45'),
(4, '2020-07-27', 150, '2020-07-27 02:59:45', '2020-07-27 02:59:45'),
(5, '2020-07-26', 200, '2020-07-26 02:59:45', '2020-07-26 02:59:45'),
(6, '2020-07-25', 500, '2020-07-25 02:59:45', '2020-07-25 02:59:45'),
(7, '2020-07-24', 700, '2020-07-24 02:59:45', '2020-07-24 02:59:45'),
(8, '2020-07-23', 400, '2020-07-23 02:59:45', '2020-07-23 02:59:45'),
(9, '2020-07-22', 400, '2020-07-22 02:59:45', '2020-07-22 02:59:45'),
(10, '2020-08-03', 50, '2020-08-02 22:23:01', '2020-08-02 22:23:01'),
(11, '2020-08-17', 50, '2020-08-17 07:29:34', '2020-08-17 07:29:34'),
(12, '2020-09-02', 50, '2020-09-02 08:38:59', '2020-09-02 08:38:59'),
(13, '2020-09-29', 100, '2020-09-28 20:22:35', '2020-09-29 07:42:03'),
(14, '2020-10-07', 100, '2020-10-07 03:46:35', '2020-10-07 04:11:48'),
(15, '2021-01-10', 900, '2021-01-09 19:07:08', '2021-01-10 07:58:38'),
(16, '2021-01-09', 400, '2021-01-09 19:07:08', '2021-01-09 19:09:14'),
(17, '2021-01-08', 800, '2021-01-09 19:07:08', '2021-01-09 19:09:14'),
(18, '2021-01-06', 450, '2021-01-09 19:07:08', '2021-01-09 19:09:14'),
(19, '2021-01-07', 600, '2021-01-09 19:07:08', '2021-01-09 19:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `suitable_jobs`
--

CREATE TABLE `suitable_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suitable_jobs`
--

INSERT INTO `suitable_jobs` (`id`, `candidate_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 8, 34, NULL, '2021-01-10 08:55:49'),
(2, 8, 2, NULL, '2020-08-17 07:33:29'),
(3, 8, 17, NULL, '2021-01-10 08:55:49'),
(5, 20, 6, '2020-07-14 02:50:40', '2020-07-14 02:51:56'),
(6, 20, 5, '2020-07-14 02:50:40', '2020-07-14 02:51:56'),
(7, 20, 11, '2020-07-14 02:50:40', '2020-07-14 03:16:07'),
(8, 26, 1, '2020-07-14 19:04:10', '2020-07-14 19:04:10'),
(9, 26, 3, '2020-07-14 19:04:10', '2020-07-14 19:04:10'),
(10, 26, 4, '2020-07-14 19:04:10', '2020-07-14 19:04:10'),
(11, 27, 3, '2020-07-14 20:29:48', '2020-07-14 20:29:48'),
(12, 27, 5, '2020-07-14 20:29:48', '2020-07-14 20:43:07'),
(13, 27, 7, '2020-07-14 20:29:48', '2020-07-14 20:29:48'),
(14, 32, 1, '2020-08-03 09:13:11', '2020-08-03 09:13:11'),
(15, 32, 8, '2020-08-03 09:13:11', '2020-08-03 09:13:11'),
(16, 32, 18, '2020-08-03 09:13:11', '2020-08-03 09:13:11'),
(17, 35, 1, '2020-09-02 08:45:40', '2020-09-02 08:45:40'),
(18, 35, 2, '2020-09-02 08:45:40', '2020-09-02 08:45:40'),
(19, 35, 5, '2020-09-02 08:45:40', '2020-09-02 08:45:40'),
(20, 36, 1, '2020-09-04 18:56:15', '2020-09-04 18:56:15'),
(21, 36, 6, '2020-09-04 18:56:15', '2021-01-10 07:19:34'),
(22, 36, 2, '2020-09-04 18:56:15', '2021-01-10 07:19:34'),
(23, 37, 1, '2020-10-09 19:31:27', '2020-10-09 19:31:27'),
(24, 37, 1, '2020-10-09 19:31:27', '2020-10-09 19:31:27'),
(25, 37, 1, '2020-10-09 19:31:27', '2020-10-09 19:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` int(11) NOT NULL,
  `coin` int(11) NOT NULL DEFAULT 100,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'avatar/no-gender.pgn',
  `code` int(11) DEFAULT NULL,
  `old_role` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `slug`, `password`, `privacy`, `coin`, `avatar`, `code`, `old_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hồ Thanh Phong', 'admin@gmail.com', 'ho-thanh-phong-1', 'e24bfe242ea35f40bfa6826a2076eef0', 0, 0, 'avatar\\ho-thanh-phong-8-image.png', 0, 0, '2020-06-20 22:30:06', '2021-01-10 08:41:29', NULL),
(2, 'Nguyễn Thị Thu Hương', 'admin1@gmail.com', 'nguyen-thi-thu-huong-2', '25f9e794323b453885f5181f1b624d0b', 0, 0, 'avatar\\no-gender.png', 0, 0, '2020-06-20 22:30:39', '2020-06-20 22:30:39', NULL),
(4, 'FPT Software', 'employer1@gmail.com', 'fpt-software-4', '4297f44b13955235245b2497399d7a93', 1, 1150, 'avatar\\fpt-software-4-LogoFPT-2017-copy-3042-1513928399.jpg', 0, 0, NULL, '2021-01-10 19:49:20', NULL),
(5, 'Công ty xây dựng B', 'employer2@gmail.com', 'cong-ty-xay-dung-b-5', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, '2021-01-10 19:48:40', NULL),
(6, 'Công ty C', 'employer3@gmail.com', 'cong-ty-c-6', '4297f44b13955235245b2497399d7a93', 1, 500, 'avatar\\no-gender.png', 0, 0, NULL, '2020-07-14 01:15:09', NULL),
(7, 'Công ty D', 'employer4@gmail.com', 'cong-ty-d-7', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, NULL, NULL),
(8, 'Hồ Thanh Phong', 'candidate1@gmail.com', 'ho-thanh-phong-8', '4297f44b13955235245b2497399d7a93', 2, 1100, 'avatar\\ho-thanh-phong-8-image.png', 0, 0, NULL, '2021-01-10 08:46:51', NULL),
(9, 'CÔNG TY TNHH MỘT THÀNH VIÊN VIỄN THÔNG ĐĂNG KHÔI', 'vienthongdangkhoi@gmail.com', 'cong-ty-tnhh-mot-thanh-vien-vien-thong-dang-khoi-9', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, NULL, NULL),
(10, 'CÔNG TY TNHH ROBOCASH VIỆT NAM', 'employer5@gmail.com', 'cong-ty-tnhh-robocash-viet-nam-10', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, '2020-08-02 01:14:28', NULL),
(11, 'Công ty TNHH Phát Triển Thương Mại Và Dịch Vụ AMI', 'employer6@gmail.com', 'cong-ty-tnhh-phat-trien-thuong-mai-va-dich-vu-ami-11', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, NULL, NULL),
(12, 'Công ty CP Thiết bị vệ sinh Caesar Việt Nam', 'employer7@gmail.com', 'cong-ty-cp-thiet-bi-ve-sinh-caesar-viet-nam-12', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, NULL, NULL, NULL),
(13, 'Công ty TNHH Thương Mại Truyền Thông Việt Phát', 'employer8@gmail.com', 'cong-ty-tnhh-thuong-mai-truyen-thong-viet-phat-13', '4297f44b13955235245b2497399d7a93', 1, 500, 'avatar\\no-gender.png', 0, 0, NULL, NULL, NULL),
(16, 'Kirito', 'employer10@gmail.com', 'kirito-16', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-01 11:34:55', '2021-01-06 03:00:17', NULL),
(19, 'Hồ Đình Cảnh', 'candidate3@gmail.com', 'ho-dinh-canh-19', '4297f44b13955235245b2497399d7a93', 2, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-01 11:44:03', '2021-01-09 07:00:13', NULL),
(20, 'Nguyễn Thị Thu Hương', 'candidate2@gmail.com', 'nguyen-thi-thu-huong-20', '4297f44b13955235245b2497399d7a93', 2, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-01 11:44:39', '2020-07-01 11:44:39', NULL),
(21, 'Nguyễn Xuân Hinh', 'candidate4@gmail.com', 'nguyen-xuan-hinh-21', '4297f44b13955235245b2497399d7a93', 2, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-02 00:19:14', '2020-07-02 00:19:14', NULL),
(23, 'Nguyễn Văn A', 'candidate5@gmail.com', 'nguyen-van-a-23', '4297f44b13955235245b2497399d7a93', 2, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-02 11:48:16', '2020-07-02 11:48:16', NULL),
(27, 'Hồ Thanh Phong', 'htphong67@gmail.com', 'ho-thanh-phong-27', '4297f44b13955235245b2497399d7a93', 2, 30, 'avatar\\no-gender.png', 0, 0, '2020-07-14 13:26:47', '2020-07-14 13:41:45', NULL),
(28, 'Thanh Phong', 'phongphong@gmail.com', 'ho-thanh-phong-28', '4297f44b13955235245b2497399d7a93', 2, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-15 03:18:49', '2020-07-15 03:18:49', NULL),
(29, 'Hồ Thanh Phong', 'phonghopro2001@gmail.com', 'ho-thanh-phong-29', '4297f44b13955235245b2497399d7a93', 1, 150, 'avatar\\no-gender.png', 250831, 0, '2020-07-16 02:27:55', '2021-01-10 06:52:19', NULL),
(30, 'Trần Văn K', 'user1@gmail.com', 'tran-van-k-30', '4297f44b13955235245b2497399d7a93', 1, 0, 'avatar\\no-gender.png', 0, 0, '2020-07-17 00:54:25', '2020-07-17 00:54:25', NULL),
(31, 'Trần Văn P', 'candidate11@gmail.com', 'tran-van-p-31', '4297f44b13955235245b2497399d7a93', 2, 40, 'avatar\\no-gender.png', 0, 0, '2020-07-17 00:56:19', '2021-01-09 01:39:15', '2021-01-09 01:39:15'),
(32, 'Hồ Thanh Phong', 'thanhphong.67@gmail.com', 'ho-thanh-phong-32', '4297f44b13955235245b2497399d7a93', 2, 930, 'avatar\\no-gender.png', 0, 0, '2020-08-03 02:11:50', '2021-01-06 03:00:14', NULL),
(33, 'Công ty Hồ Thanh Phong', 'hothanhphong@gmail.com', 'cong-ty-ho-thanh-phong-33', '4297f44b13955235245b2497399d7a93', 1, 100, 'avatar\\no-gender.png', 0, 0, '2020-08-03 18:06:05', '2021-01-06 02:07:22', NULL),
(34, 'Hồ Thị Minh Trang', 'htmtrang@gmail.com', 'ho-thi-minh-trang-34', '4297f44b13955235245b2497399d7a93', 2, 100, 'avatar\\no-gender.png', 0, 0, '2020-08-17 00:58:58', '2021-01-06 02:07:22', NULL),
(35, 'Test', 'test1@gmail.com', 'test-35', '4297f44b13955235245b2497399d7a93', 2, 100, 'avatar\\no-gender.png', 0, 0, '2020-09-02 01:41:24', '2021-01-09 01:39:09', '2021-01-09 01:39:09'),
(36, 'Nguyễn Thị Cẩm Huyền', 'thanhphonga4.hbt@gmail.com', 'nguyen-thi-cam-huyen-36', '4297f44b13955235245b2497399d7a93', 2, 20000, 'avatar\\nguyen-thi-cam-huyen-36-ny.jpg', 0, 0, '2020-09-03 14:32:41', '2021-01-10 09:29:20', NULL),
(37, 'Người tìm việc làm', 'a@gmail.com', 'nguoi-tim-viec-lam-37', 'c4ca4238a0b923820dcc509a6f75849b', 2, 100, 'avatar\\no-gender.png', 0, 0, '2020-10-06 20:54:02', '2021-01-06 02:07:24', NULL),
(38, 'Nhà tuyển dụng', 'b@gmail.com', 'nha-tuyen-dung-38', 'c4ca4238a0b923820dcc509a6f75849b', 1, 150, 'avatar\\no-gender.png', 0, 0, '2020-10-06 20:54:17', '2021-01-06 02:07:24', NULL),
(39, 'Hồ Thanh Phong', 'thamtu1310@gmail.com', 'ho-thanh-phong-39', '4297f44b13955235245b2497399d7a93', 2, 70, 'avatar\\ho-thanh-phong-39-male.png', NULL, 0, '2021-01-07 00:12:30', '2021-01-10 18:45:44', NULL),
(43, 'Nguyễn Thị Cẩm Huyền', 'greenbook.vku@gmail.com', 'nguyen-thi-cam-huyen-43', '183c17b8a815b1379acb672934603d7a', 0, 50, 'avatar\\nguyen-thi-cam-huyen-43-cong-ty-tnhh-robocash-viet-nam-10-logo3.gif', NULL, 0, '2021-01-10 08:02:39', '2021-01-10 08:16:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `candidate_jobs`
--
ALTER TABLE `candidate_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helps`
--
ALTER TABLE `helps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_applied_status`
--
ALTER TABLE `job_applied_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suitable_jobs`
--
ALTER TABLE `suitable_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `candidate_jobs`
--
ALTER TABLE `candidate_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `helps`
--
ALTER TABLE `helps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `job_applied_status`
--
ALTER TABLE `job_applied_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suitable_jobs`
--
ALTER TABLE `suitable_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
