﻿use AngelAndBabyShop
go

-- insert các cột khác
INSERT INTO Order_Details (order_id, product_id, num)
VALUES 
(1, 8, 10),
(1, 4, 7),
(2, 10, 5),
(2, 24, 9),
(2, 14, 5),
(3, 23, 1),
(4, 5, 3),
(4, 11, 1),
(5, 15, 1),
(5, 6, 2),
(5, 20, 10),
(6, 17, 6),
(6, 22, 8),
(7, 19, 2),
(8, 3, 10),
(9, 16, 5),
(9, 1, 3),
(10, 18, 7),
(10, 7, 1),
(10, 26, 3),
(11, 12, 4),
(12, 27, 2),
(13, 28, 4),
(14, 2, 8),
(14, 25, 5),
(15, 9, 1),
(15, 13, 4),
(15, 21, 1),
(15, 29, 2),
(16, 4, 3),
(16, 28, 5),
(17, 17, 7),
(18, 8, 2),
(18, 1, 2),
(18, 18, 1),
(19, 15, 3),
(19, 20, 1),
(20, 10, 4),
(20, 22, 9),
(21, 23, 8),
(21, 14, 5),
(21, 24, 1),
(22, 5, 8),
(23, 2, 6),
(24, 3, 1),
(25, 6, 4),
(25, 9, 3),
(26, 16, 2),
(26, 19, 1),
(26, 11, 10),
(27, 8, 10),
(27, 4, 7),
(28, 10, 5),
(29, 24, 9),
(30, 14, 5),
(30, 23, 1),
(31, 5, 3),
(31, 11, 1),
(32, 15, 1),
(32, 6, 2),
(33, 20, 10),
(34, 17, 6),
(35, 22, 8),
(36, 19, 2),
(36, 3, 1),
(37, 16, 5),
(37, 1, 3),
(38, 18, 7),
(38, 7, 1),
(39, 26, 3),
(39, 12, 4),
(39, 27, 2),
(40, 28, 4),
(40, 2, 8),
(41, 25, 5),
(41, 9, 1),
(41, 13, 4),
(41, 21, 1),
(42, 29, 2),
(42, 4, 3),
(43, 28, 5),
(43, 17, 7),
(44, 8, 2),
(45, 1, 2),
(46, 18, 1),
(47, 15, 3),
(47, 20, 1),
(48, 10, 4),
(49, 22, 9),
(49, 23, 8),
(50, 14, 5),
(50, 24, 1),
(51, 5, 8),
(52, 2, 6),
(53, 3, 1),
(53, 6, 4),
(53, 9, 3),
(54, 16, 2),
(54, 19, 1),
(55, 11, 10),
(56, 8, 10),
(57, 4, 7),
(58, 10, 5),
(58, 24, 9),
(59, 14, 5),
(60, 23, 1),
(61, 5, 3),
(61, 11, 1),
(61, 15, 1),
(62, 6, 2),
(62, 20, 10),
(63, 17, 6),
(63, 22, 8),
(64, 19, 2),
(64, 3, 10),
(65, 16, 5),
(65, 1, 3),
(66, 18, 7),
(67, 7, 1),
(68, 26, 3),
(68, 12, 4),
(68, 27, 2),
(69, 28, 4),
(70, 2, 8),
(70, 25, 5),
(71, 9, 1),
(71, 13, 4),
(72, 21, 1),
(72, 29, 2),
(72, 4, 3),
(73, 28, 5),
(73, 17, 7),
(74, 8, 2),
(74, 1, 2),
(75, 18, 1),
(76, 15, 3),
(77, 20, 1),
(77, 10, 4),
(78, 22, 9),
(79, 23, 8),
(80, 14, 5),
(80, 24, 1),
(80, 5, 1),
(81, 2, 6),
(81, 3, 1),
(82, 6, 4),
(82, 9, 3),
(82, 16, 2),
(83, 19, 1),
(84, 11, 10),
(85, 8, 10),
(86, 4, 7),
(87, 10, 5),
(88, 24, 9),
(89, 14, 5),
(90, 23, 1),
(90, 5, 3),
(90, 11, 1),
(91, 15, 1),
(91, 6, 2),
(92, 20, 1),
(92, 17, 6),
(93, 22, 8),
(94, 19, 2),
(95, 3, 1),
(95, 16, 5),
(96, 1, 3),
(96, 18, 7),
(96, 7, 1),
(97, 26, 3),
(97, 12, 4),
(97, 27, 2),
(97, 28, 4),
(98, 2, 8),
(98, 25, 5),
(99, 9, 1),
(99, 13, 4),
(100, 21, 1),
(100, 29, 2),
(100, 4, 3),
(101, 8, 10),
(101, 4, 7),
(102, 10, 5),
(102, 24, 9),
(102, 14, 5),
(103, 23, 1),
(104, 5, 3),
(104, 11, 1),
(105, 15, 1),
(105, 6, 2),
(105, 20, 10),
(106, 17, 6),
(106, 22, 8),
(107, 19, 2),
(108, 3, 10),
(109, 16, 5),
(109, 1, 3),
(110, 18, 7),
(110, 7, 1),
(110, 26, 3),
(111, 12, 4),
(112, 27, 2),
(113, 28, 4),
(114, 2, 8),
(114, 25, 5),
(115, 9, 1),
(115, 13, 4),
(115, 21, 1),
(115, 29, 2),
(116, 4, 3),
(116, 28, 5),
(117, 17, 7),
(118, 8, 2),
(118, 1, 2),
(118, 18, 1),
(119, 15, 3),
(119, 20, 1),
(120, 10, 4),
(120, 22, 9),
(121, 23, 8),
(121, 14, 5),
(121, 24, 1),
(122, 5, 8),
(123, 2, 6),
(124, 3, 1),
(125, 6, 4),
(125, 9, 3),
(126, 16, 2),
(126, 19, 1),
(126, 11, 10),
(127, 8, 10),
(127, 4, 7),
(128, 10, 5),
(129, 24, 9),
(130, 14, 5),
(130, 23, 1),
(131, 5, 3),
(131, 11, 1),
(132, 15, 1),
(132, 6, 2),
(133, 20, 10),
(134, 17, 6),
(135, 22, 8),
(136, 19, 2),
(136, 3, 1),
(137, 16, 5),
(137, 1, 3),
(138, 18, 7),
(138, 7, 1),
(139, 26, 3),
(139, 12, 4),
(139, 27, 2),
(140, 28, 4),
(140, 2, 8),
(141, 25, 5),
(141, 9, 1),
(141, 13, 4),
(141, 21, 1),
(142, 29, 2),
(142, 4, 3),
(143, 28, 5),
(143, 17, 7),
(144, 8, 2),
(145, 1, 2),
(146, 18, 1),
(147, 15, 3),
(147, 20, 1),
(148, 10, 4),
(149, 22, 9),
(149, 23, 8),
(150, 14, 5),
(150, 24, 1),
(151, 5, 8),
(152, 2, 6),
(153, 3, 1),
(153, 6, 4),
(153, 9, 3),
(154, 16, 2),
(154, 19, 1),
(155, 11, 10),
(156, 8, 10),
(157, 4, 7),
(158, 10, 5),
(158, 24, 9),
(159, 14, 5),
(160, 23, 1),
(161, 5, 3),
(161, 11, 1),
(161, 15, 1),
(162, 6, 2),
(162, 20, 10),
(163, 17, 6),
(163, 22, 8),
(164, 19, 2),
(164, 3, 10),
(165, 16, 5),
(165, 1, 3),
(166, 18, 7),
(167, 7, 1),
(168, 26, 3),
(168, 12, 4),
(168, 27, 2),
(169, 28, 4),
(170, 2, 8),
(170, 25, 5),
(171, 9, 1),
(171, 13, 4),
(172, 21, 1),
(172, 29, 2),
(172, 4, 3),
(173, 28, 5),
(173, 17, 7),
(174, 8, 2),
(174, 1, 2),
(175, 18, 1),
(176, 15, 3),
(177, 20, 1),
(177, 10, 4),
(178, 22, 9),
(179, 23, 8),
(180, 14, 5),
(180, 24, 1),
(180, 5, 1),
(181, 2, 6),
(181, 3, 1),
(182, 6, 4),
(182, 9, 3),
(182, 16, 2),
(183, 19, 1),
(184, 11, 10),
(185, 8, 10),
(186, 4, 7),
(187, 10, 5),
(188, 24, 9),
(189, 14, 5),
(190, 23, 1),
(190, 5, 3),
(190, 11, 1),
(191, 15, 1),
(191, 6, 2),
(192, 20, 1),
(192, 17, 6),
(193, 22, 8),
(194, 19, 2),
(195, 3, 1),
(195, 16, 5),
(196, 1, 3),
(196, 18, 7),
(196, 7, 1),
(197, 26, 3),
(197, 12, 4),
(197, 27, 2),
(197, 28, 4),
(198, 2, 8),
(198, 25, 5),
(199, 9, 1),
(199, 13, 4),
(200, 21, 1),
(200, 29, 2),
(200, 4, 3)

--insert giá trị price sau khi đã nhập bảng product--
update Order_Details 
SET Order_Details. price = CASE
		WHEN P.discount = 0 then P.outbound_price
		ELSE P.discount
		END
FROM Product AS P
WHERE P.id = Order_Details.product_id
