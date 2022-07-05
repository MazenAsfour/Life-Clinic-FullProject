-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 12:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(20) NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `header` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `img`, `header`, `text`) VALUES
(1, 'about1.jpg', 'قابل أطباءنا العبقريين والمفكري في غضون ساعة واحدة فقط ، قابل أطبائنا بالإضافة إلى مجال خبرتهم. ستشعر بما يشبه كل طبيب وكيف يتعامل مع رعاية المرضى. العيادة هي خدمة طبية منظمة تقدم خدمات تشخيصية وعلاجية ووقائية للمرضى العقليين ، بالإضافة إلى أنها عيادة نفسية تقدم العلاجات النفسية للمرضى بأقل الأسعار وأفضل علاج.', 'fe1.jpg'),
(2, 'about2.jpg', 'التقييم النفسي', 'يسألك أخصائي الصحة العقلية عن الأعراض والأفكار والمشاعر وأنماط السلوك. قد يُطلب منك ملء استبيان للمساعدة في الإجابة على هذه الأسئلة ، قد يستخدم أخصائي الصحة العقلية معايير الاكتئاب المدرجة في الدليل التشخيصي والإحصائي للاضطرابات العقلية'),
(3, '', 'جلسات الثيرابيست', 'في بعض الحالات، يمكن أن يكون لدى العلاج النفسي نفس فعالية الأدوية، مثل مضادات الاكتئاب. ولكن، حسب حالتك الخاصة، لن يكون العلاج النفسي وحده كافيًا لتخفيف أعراض حالة الصحة النفسية. كما قد تحتاج إلى أدوية أو علاجات أخرى.'),
(4, 'abouttrain.jpg', 'التمارين الرياضية', 'تساعد ممارسة التمارين الرياضية في منع عدد من المشكلات الصحية وتحسينها، بما في ذلك ضغط الدم المرتفع والسكر والتهاب المفاصل. توضح الأبحاث التي أجريت على الاكتئاب والتوتر وعلاقتهما بممارسة الرياضة أن الفوائد النفسية والبدنية للرياضة يمكن أن تساعد في تحسين الحالة المزاجية وتقلل الشعور بالقلق.');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `FullName` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `FullName`, `Email`, `Password`) VALUES
(1, 'Mazen Asfour', '4fecc3e98ab9ed9846627d2932c21b1e9af7721b', 'cd18e106bf9627eee7ba90eb87e08f27f035245d'),
(2, 'Bayan Mahomud', '9ec86cdccb5087e3b2937497b4abd70824830eea', '04fd0d75bc0c5f28bb4c23397b5ac285af525f63'),
(3, 'Bayan Alqadi', '3334681cc37d4c626c0c5ee21d5f8abe5861c1cb', 'a3a076e23422edf3a77a91c36ca1937fa65a745a'),
(5, 'mazen khaled', '92ff7bd21b525e4ef457e0b99364198fe2669852', 'd5501e30c5dc5afb315f6eb4c4fe628e8246b968');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(100) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `familyname` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `righttime` varchar(100) NOT NULL,
  `eventtime` varchar(100) NOT NULL,
  `sessiondate` date NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `place` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `firstname`, `familyname`, `birthday`, `email`, `phone`, `righttime`, `eventtime`, `sessiondate`, `doctor`, `place`) VALUES
(4, 'sara', 'ahmad', '2000-01-29', 'saraahmad@gmail.com', '0799312175', '8 Am - 10 Am', 'Tawgihi', '2022-06-10', 'Dr Ahmad Alhadded', 'Amman');

-- --------------------------------------------------------

--
-- Table structure for table `backupsapp`
--

CREATE TABLE `backupsapp` (
  `id` int(10) NOT NULL,
  `firstname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `familyname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `righttime` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventtime` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sessiondate` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `backupsapp`
--

INSERT INTO `backupsapp` (`id`, `firstname`, `familyname`, `birthday`, `email`, `phone`, `righttime`, `eventtime`, `sessiondate`, `doctor`, `place`) VALUES
(1, 'sara', 'ahmad', '1999-04-04', 'saraahmad@gmail.com', '0799312347', '8 Am - 10 Am', 'Tawgihi', '2022-06-04', 'Dr Ahmad Alhadded', 'Amman'),
(3, 'sara', 'ahmad', '2000-01-29', 'saraahmad@gmail.com', '0799312175', '8 Am - 10 Am', 'Tawgihi', '2022-06-10', 'Dr Ahmad Alhadded', 'Amman');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `massege` varchar(10000) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `massege`, `date`) VALUES
(3, 'leen ahmad', 'leen@gmail.com', 'traetment', 'hello manger I would thank you for this amazing sessions ,you have greatest doctors ', '22/04/23 12:51:03'),
(6, 'omarelayyan', 'omarelyyan@gmail.com', 'clinic medical', 'A clinic with a bright medical staff for life and seeks to plant hope in the patient\r\n', '22/04/26 06:43:13'),
(7, 'saifhussam', 'saifhussam@gmail.com', 'clinic services', 'Wonderful clinic, has comfortable chairs for the patient\r\n', '22/04/26 06:45:07'),
(8, 'ali atef', 'aliatef@hotmail.com', 'low work', 'Hello manager, please increase the working days of the psychiatric clinic\r\n', '22/04/26 06:46:38'),
(9, 'majjed osama', 'majedosama@yahoo.com', 'clinic design', 'A clinic with a smart design .. the office is closer to the entrance door of the clinic, allowing the exit of the staff in case\r\n ', '22/04/26 06:47:27'),
(10, 'rashed altaatmry', 'rashed@gmail.com', 'clinic design', 'Beautiful clinic with good ventilation, good lighting and spacious space\r\n', '22/04/26 06:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(5) NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `timeopen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timeopenar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `locationar` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `numberar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nameclinic` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `maxdate` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `email`, `timeopen`, `timeopenar`, `location`, `locationar`, `number`, `numberar`, `nameclinic`, `logo`, `maxdate`) VALUES
(1, 'LIFECLINIC6@GMAIL.COM', 'FROM 8 AM TO 5 PM', '8 صباحا - 5 مساءا', 'AL KHALIDI HOSPITAL AND MEDICAL CENTER, AMMAN-JORDAN', 'مستشفى ومركز الخالدي الطبي ، عمان-الأردن', '06-1250023', '12500023 - 06', 'lifeclinic', '83686753_padded_logo.png', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `img`, `name`, `text`, `description`, `age`) VALUES
(1, 'دليل الأطباء', 'ابحث عن الطبيب المناسب لاحتياجاتك الطبية. استخدم الأدوات أدناه للبحث عن طبيب بالاسم أو التخصص أو الجنس أو خط الخدمة أو موقع الممارسة.', '', '', '0'),
(2, 'doctor1.jpg', 'Dr Ahmad Alhadded', 'بكالوريوس الطب والجراحة ، جامعة بغداد ، العراق دكتوراه في الطب ، جامعة لوفان ، بلجيكا. عضو الكلية الملكية للأطباء النفسيين ، الكلية الملكية للأطباء النفسيين ، المملكة المتحدة شهادة إتمام التدريب في الطب النفسي العام للبالغين ، معتمد في الطب النفسي العلائقي ، الكلية الملكية للطب النفسي ، المملكة المتحدة لديه أكثر من 18 عامًا من الخبرة.', 'مؤهلات: بكالوريوس الطب والجراحة ، جامعة بغداد ، العراق.دكتوراه في الطب ، جامعة لوفان ، بلجيكا. عضو الكلية الملكية للأطباء النفسيين ، الكلية الملكية للأطباء النفسيين ، المملكة المتحدة. شهادة إتمام التدريب في الطب النفسي العام للبالغين ، معتمد في الطب النفسي العلائقي ، الكلية الملكية للطب النفسي ، المملكة المتحدة.لديه أكثر من 18 عامًا من الخبرة في مجال الطب النفسي والصحة العقلية.<br>خبرة عملية: استشاري الطب النفسي ، عيادة نوفوميد ، الإمارات العربية المتحدة استشاري الطب النفسي ، صندوق مؤسسة NHS التابع لجامعة Essex Partnership ، المملكة المتحدةاستشاري الطب النفسي ، مؤسسة نورفولك وسوفولك NHS Foundation Trust ، المملكة المتحدة.متدرب متخصص ، مؤسسة نورفولك وسوفولك NHS Foundation Trust ، المملكة المتحدة. طبيب متخصص ، طبيب متخصص ، مؤسسة كينت وميدواي بارتنرشيب ، المملكة المتحدة. كبير المقيمين ، كينت وميدواي بارتنرشيب تراست تراست ، المملكة المتحدة.', '57 years.'),
(3, 'doctor9.jpg', 'Dr Ashraf Abu Alsamen', 'درس في جامعة سينسيناتي وحصل على درجة البكالوريوس في العلوم الفيزيائية. كما حصل على شهادة الطب من نفس الجامعة. قضى معظم حياته المهنية كأستاذ للطب النفسي في جامعة نيويورك الطبية. كان البروفيسور ساس عضوًا متميزًا في الجمعية الأمريكية للطب النفسي. وهو أيضًا عضو في جمعية التحليل النفسي الأمريكية.', 'درس في جامعة سينسيناتي وحصل على درجة البكالوريوس في العلوم الفيزيائية. كما حصل على شهادة الطب من نفس الجامعة. قضى معظم حياته المهنية كأستاذ للطب النفسي في جامعة نيويورك الطبية. كان البروفيسور ساس عضوًا متميزًا في الجمعية الأمريكية للطب النفسي. وهو أيضًا عضو في جمعية التحليل النفسي الأمريكية. تلقى تدريبًا مكثفًا ليصبح طبيبًا مقيمًا في مستشفى سينسيناتي العام ، ثم عمل في معهد شيكاغو للتحليل النفسي. كان عضوًا لمدة 5 سنوات ، منها 24 شهرًا ، في وكالة الحماية البحرية الأمريكية. أصبح عضوًا دائمًا في هيئة التدريس بقسم الطب في جامعة نيويورك. هو كاتب وشاعر مجري.<br>مسيرته العلمية: كان الدكتور ساس ناقدًا اجتماعيًا للقوانين والقواعد الأخلاقية والعلمية التي تأسس عليها الطب النفسي ، وكهدف طبي للسيطرة على المجتمع في الأعمار المتقدمة ، ولإضفاء طابع بحثي وعلمي على الطب النفسي ناقش الدكتور ساس مبدأ أن مرضه النفسي مشابه لمشاكل حياة الناس. باستثناء عدم وجود مرض عقلي يمكن تحديده مثل مرض الزهايمر ، فإن المرض العقلي ليس مفهومًا حقيقيًا مثل المرض الجسدي مثل السرطان. نظرًا لعدم وجود اختبارات أو نتائج تحليلية تدعم أو ترفض التشخيص في الدليل التشخيصي والإحصائي للاضطرابات النفسية ، فهذا يعني أنه لا توجد طريقة موضوعية للكشف عن المرض العقلي أو عدم وجوده.', '52 years'),
(4, 'doctor8.png', 'Dr Rania Badib.', 'بكالوريوس علم النفس - جامعة العلوم والتكنولوجيا اليمنية. حاصلة على المركز الثالث بشهادة تقدير من جامعة العلوم والتكنولوجيا التعاون مع مركزها لتقديم الاستشارات النفسية والتعليمية وتقديم بعض الدورات التدريبية من عام 2010 حتى الآن , متدرب في مجال التطوير النفسي والتربوي وتطوير الذات النفسية والفكرية والمعنوية', 'بكالوريوس علم النفس - جامعة العلوم والتكنولوجيا اليمنية. حاصلة على المركز الثالث بشهادة تقدير من جامعة العلوم والتكنولوجيا. وكذلك الرهاب الاجتماعي , نوبات ذعر ,اضطراب , الوسواس القهري, فصام , اضطرابات الشخصية بأنواعها دبلوم في الإرشاد الأسري, دبلوم في العلاج الأسري, دبلوم مدرب الأسرة, دبلوم في العلاج بالتنويم المغناطيسي. دبلوم في علاج الحرية العاطفية. دورة في العلاج المعرفي السلوكي.<br>دورة تدريب المدربين \"مدرب دولي معتمد\" مدرب معتمد لتحليل الشخصية من الكتابة اليدوية والتوقيع \"علم الخطوط\" مدرب معتمد لتعديل السلوك بخط اليد \"معالجة الجرافيك\" مدرب عائلي يساعد في التغلب على المشاكل النفسية والعائلية تدرب في برنامج التعلم السريع. دبلوم في البرمجة اللغوية العصبية (NLP). دورة العلاج بالألوان. دورة مهارات الاتصال الفعال. دورة قبعات التفكير الست. دورة رسم الخرائط الذهنية. دورة في مقياس هيرمان. دورة أسرار التميز الأكاديمي دورة لغة الجسد. دورة في علم الفراسة وقراءة لغة الوجوه.', '47 years'),
(5, 'doctor-with-his-arms-crossed-white-background_1368-5790.webp', 'Dr Muhammad Hashem', 'بكالوريوس الطب والجراحة ، الجامعة الأردنية ، الأردن. ماجستير في الطب ، جامعة العلوم والتكنولوجيا الأردنية ، حصل على المركز الأول في امتحان البورد العربي في الطب النفسي / الإمارات العربية المتحدة عام 2013 ، كما أنه حاصل على شهادة البورد الأردني في الطب النفسي ، البورد الأمريكي للطب العام وهو مستشار معتمد سابقًا', 'بكالوريوس الطب والجراحة ، الجامعة الأردنية ، الأردن. ماجستير في الطب ، جامعة العلوم والتكنولوجيا الأردنية ، الأردن حصل على المركز الأول في امتحان البورد العربي في الطب النفسي / الإمارات العربية المتحدة عام 2013 ، كما أنه حاصل على شهادة من البورد الأردني للطب النفسي ، البورد الأمريكي للطب العام ، وتخصص عالي في الطب النفسي. عضو في الجمعية الأردنية للطب النفسي ، وعمل في مستشفى الملك عبد الله الجامعي المؤسس سابقاً ، وكان سابقاً مستشاراً للهيئة الطبية الدولية ، ومحاضراً في كلية الطب بجامعة العلوم والتكنولوجيا سابقاً.<br>يشرف على علاج الاكتئاب النفسي ,علاج التوحد ,الرعاية الصحية النفسية ,علاج الأرق ,علاج الاكتئاب الشديد ,برامج علاج الإدمان ,معالجة اضطرابات الذاكرة ,استشارات ما قبل الزواج السيطرة على نوبات الغضب ,علاج صداع التوتر ,العلاج النفسي الدوائي ,جلسة علاج نفسي فردي ,الإرشاد النفسي ,التقييم النفسي', '50 years');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `header` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`header`, `text`, `id`) VALUES
('ميزات العيادة', 'في العيادة ، اللمسات الإضافية في التصميم والوظيفة تجعل المرضى وعائلاتهم يشعرون بالتقدير. نعتقد أنه على الرغم من عدم تشخيص حالتهم وقد لا تكون شائعة ، فمن المهم العثور على إجابات لهم في مكان مريح.', 1),
('المساعدة الفورية', 'الغرض الأساسي من العيادات الطبية هو توفير العناية الطبية العاجلة للأشخاص الذين يحتاجون إليها.', 2),
('الموظفين ذوي الخبرة', 'لا تخطئ ، تضم عيادات الحياة اليوم بعضًا من أكثر الطاقم الطبي خبرة على متنها بما في ذلك الأطباء والممرضات والمعالج الطبيعي وأخصائيي التغذية وحتى المتخصصين.', 3),
('غرفة انتظار العيادة', 'بعض العائلات التي تأتي إلى العيادة مع طفلها المريض لديها أطفال صغار آخرون. يوفر الخصوصية والشعور بالترحيب للجميع', 4),
('جلسات الثيرابيست', 'كن أن يكون لدى العلاج النفسي نفس فعالية الأدوية، مثل مضادات الاكتئاب. ولكن، حسب حالتك الخاصة، لن يكون العلاج النفسي وحده كافيًا لتخفيف أعراض حالة الصحة النفسية.', 5),
('المختبرات', 'إجراء التجارب والأبحاث العلمية المختلفة , وتلعب المختبرات دوراً مهماً في خدمة العلم وحياة الأنسان , حيث أنها تستخدم في جميع المعلومات والبيانات اللازمة لحل مشكلة معينة', 6),
('غرفة الفرز', 'تقسيم المرضى إلى مجموعات وفقاً لخطورة إصاباتهم ويتعين اتخاذ القرارات المتعلقة بالعلاجات التي يمكن تقديمها لهم بما يتوافق مع الموارد المتوفرة', 7),
('fe3.jpg', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`image`, `name`, `text`, `id`) VALUES
('User Feedback', 'بعد العلاج , ماذا يقول الزائر', '', 1),
('user11.jpg', 'Ahmad Alhadded', 'لقد أعطتني مرافقك ، وخاصة فريق العمل المذهل لديك ، رعاية ممتازة وجعلتني مرتاحًا بقدر ما أستطيع! كان الجميع حرفيًا ودودًا ولطيفًا ومهتمًا منذ اللحظة التي دخلت فيها. أود فقط أن أشكرهم وأثني عليهم جميعًا لجعل تجربتي رائعة بقدر ما يمكن أن تكون! إنهم محترفون من الدرجة الأولى على الإطلاق ، وقد جعلوني سعيدًا لأنني اخترت عيادة الحياة! \"', 2),
('user2.jpg', 'Maya Emad', 'كنت في عيادتك مؤخرًا وأردت أن أقول إنه طوال فترة إقامتي ، عاملني جميع الموظفين بلطف شديد ورحمة. ذهبت إلى أبعد الحدود من الراحة وهذا يدل على تعاطفهما وقلقهما تجاهي كمريض. لقد خفف علاجهم المهني والممتع بشكل كبير من الألم والقلق الذي كنت أعاني منه. إنني أحيي الكياسة والكفاءة المهنية لجميع الموظفين المشاركين في رعايتي.', 3),
('33.webp', 'Ahlam Alward', 'إذا قلت شكراً ، فإن شكري لن يحقق حقك. لقد سعيت حقًا ، وكان الجهد شاكراً ، والجهود ممتازة. أنا في أفضل حالة. عيادتك رائعة.', 4),
('44.jpg', 'Tamer Aldajaa', 'أود أن أعبر عن امتناني الشديد للرعاية التي تلقيتها في عيادتك. منذ اللحظة التي دخلت فيها لأخذ وقت التسريح ، كانت كل تجربة مع كل قسم رائعة. كنت منبهرا. سأوصي بعيادة الحياة للجميع في المستقبل. أشكركم على التجربة الرائعة على الرغم من حقيقة أنني كنت أفكر في المستشفى وأنا بخير الآن. شكرا', 5),
('user5.jpg', 'Adam Khalel', 'انا اسمي ادم. أعاني من مشاكل نفسية منذ سنوات وسنوات ، لذا قررت البحث عن عيادة تفهمني وتقدم لي العلاج المناسب وفي أسرع وقت ممكن. الحمد لله ، بعد عام من العلاج في العيادة ، أصبحت الحياة أفضل بكثير وأصبح كل تفكيري إيجابيًا ومحبوبًا من الجميع. شكرا جزيلا لجهودكم لك', 6);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) NOT NULL,
  `price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des5` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `price`, `time`, `des1`, `des2`, `des3`, `des4`, `des5`) VALUES
(1, 'اسعار الجلسات', '', '', '', '', '', ''),
(2, '15', '-35 minutes', 'بداية الخطورة -', 'يشمل العلاج النفسي، والدوائي معًا-', 'تدريب المريض وتقديم التوعية-', 'ممارسة النشاط البدني بكفاءة تناسب بداية المرض-', ''),
(3, '20', '-45 Minutes', 'متوسط الخطورة-', 'يشمل العلاج النفسي، والدوائي معًا-', 'تدريب المريض وتقديم التوعية-', 'ممارسة النشاط البدني بكفاءة متوسطة-', ''),
(4, '30', '-60 Minutes', 'اعلى خطورة واضطراب-', 'يشمل العلاج النفسي، والدوائي معًا-', 'تدريب المريض مع اعلى مستوى وتقديم التوعية-', 'ممارسة النشاط البدني بكفاءة اكبر-', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `question` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `answer1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `answer2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `answer3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `answer4` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, 'هل تشعر بالحزن؟', 'لا اشعر بالحزن ', 'اشعر بالحزن ', 'اشعر بالحزن طوال الوقت ولا استطيع ان اتخلص منه ', 'أنني حزين بدرجة لا أستطيع تحملها '),
(2, 'هل تشعر بالتشاؤم؟', 'لست متشائما بشأن المستقبل ', 'أشعر بالتشاؤم بالنسبة للمستقبل ', 'أشعر بأنه ليس هناك شيء يشدني للمستقبل ', 'أشعر بأن المستقبل لا أمل فيه وأن الأمور لن تتحسن '),
(3, 'هل تشعر بالفشل والضيق؟', 'لا أشعر بالفشل والضيق', ' أشعر بأني فشلت أكثر من المعتاد , ليس لدي رغبة بالحياة ', 'لا أرى سوى الفشل الذريع واصبحت اكره الحياة', ' أشعر بأني شحص فاشل تماما  , أنمنى الموت'),
(4, 'هل تستمتع بجوانب الحياة؟', 'استمتع بدرجة كافية بجوانب الحياة كما اعتدت من قبل ', 'لا أستمتع بجوانب الحياة على النحو الذي تعودت عليه ', 'لم أعد احصل على اسمتاع حقيقي في اي شيء في الحياة ', 'لا أستمتع أطلاقا بأي شيء في الحياة '),
(5, 'هل تشعر بالرضا النفسي؟', 'لا أشعر بعدم الرضا النفسي ', 'أنا غير راضي عن نفسي ', 'انا ممتعض عن نفسي ', 'أكره نفسي '),
(6, 'هل يسيطر عليك التوتر والتعب وعدم النوم؟', 'لست متوترا ولا أشعر بالتعب وأنام جيدا ', 'أتوتر بسرعة وأتعب اكثر من المعتاد ولا انام كالمعتاد ', 'أشعر بالتوتر طيلة الوقت وأستيقظ قبل ساعة وساعتين <br>وأجد صعوبة في النوم وأتعب من القيام بأي شيء', 'دائما أشعر بالتوتر ولا انام سوى ساعات قليلة وأتعب من التفكير انني سوف اقوم بجهد مهما كان بسيط '),
(7, 'هل تملك المحبة من الناس وتبادلهم نفس الشعور؟', 'لم أفقد الاهتمام من الناس وابادلهم الاهتمام ', 'أنني اقل اهتمام من الاخرين مما اعتدت ان أكون ولا ابادل الشعور جيدا', 'لقد فقدت معظم الاهتمام من الناس لا ابادل الشعور متل الماضي', 'لقد فقد جميع اهتماماتي بالناس ولا ابادل الشعور لأي أحد '),
(8, 'هل تتخد القرارات بشكل سليم؟', 'نعم , أتخد القرارات بشكل جيد ', 'لا , لقد توقفت عن أخد القرارات بصورة أكبر مما اعتد عليه ', 'لا , أجد صعوبة في اتخاد القرارات عما كنت اقوم به ', 'لا , لم أعد استطيع أتخاد القرارات على الأطلاق '),
(9, 'هل تستطيع القيام بعملك ؟', 'نعم , استطيع القيام بعملي بشكل جيد ومناسب ', 'لا , احتاج لجهد نفسي للقيام بعملي ', 'لا , علي ان اضغط على نفسي للقيام بالعمل ', 'لا استطيع القيام بأي عمل وأبقى وحيدا بمفردي'),
(10, 'هل تشعر بأن حالتك الصحية ليست جيدة وأنك فقدت جزء من صحتك؟', 'حالتي الصحية جيدة ولم ينقص وزني في الأونة الأخيرة ', 'ليست جيدة , فقدت أكثر من كيلو جرامات في الأونة الاخيرة ', 'ليست جيدة , فقدت أربعة كيلو جرامات من وزني ', 'ليست جيدة ابدا , فقدت ستة كيلو جرامات من وزني '),
(11, 'عزيزي المستخدم  يرجى العلم ان هاد الاختبار هو عبارة عن تقييم أولي فقط للحالة النفسية وأن جميع الفحوصات وجميع الأسئلة ستتكرر داخل العيادة مع أخد جميع الجوانب بعين الاعتبار وشكرا لتفهمك', 'مقياس بيك المعتمد لدى العيادة', 'قياس درجة الاكتئاب لدى المرضى، ويعد من أكثر مقاييس التصنيف الذاتي استخدامًا في جميع أنحاء العالم لقياس شدة الاكتئاب، فهو مثل الاستبيان يعتمد على بعض الأسئلة التي لا تحتاج لزيارة الطبيب عن الأعراض التي يشعر بها المريض أو المواقف في يومه. ', 'الأختبار النفسي', '');

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(10) NOT NULL,
  `reason` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reason1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reason2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reason3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reason4` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reason5` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `reason`, `reason1`, `reason2`, `reason3`, `reason4`, `reason5`) VALUES
(1, 'الأسباب وعوامل الخطورة', 'الإصابة بالأمراض الخطيرة، مثل السرطان.', 'نوع الشخصية، كأن يكون الشخص كثير القلق، أو يعاني قلة الثقة بالنفس، أو يكثر من لوم ذاته، وغير ذلك.', 'الإدمان على المخدرات، والكحول.', 'صعوبات الحياة المستمرة، مثل: ضغوط العمل، والوحدة لفترة طويلة، والتعرض للعنف، وغيرها، قد تسبب الاكتئاب.', ''),
(2, 'أعراض المرض', 'ضعف الثقة بالنفس، والشعور بالدونية.', 'نقص، أو انعدام الرغبة، أو المتعة بالنشاطات التي كانت تثير الرغبة والمتعة.', 'صعوبة النوم ليلًا، مع الاستيقاظ باكرًا، أو النوم الزائد.', 'انخفاض الشهية ونقصان الوزن، أو زيادة الشهية وزيادة الوزن.', 'التفكير بالموت، أو الانتحار.'),
(3, 'متى يجب مراجعة الطبيب', 'عند مواجهة أعراض الاكتئاب لأغلب الوقت، ولعدة أيام متواصلة، ولأكثر من أسبوعين.', 'إذا كان سوء المزاج يؤثر في الحياة اليومية، والعلاقات مع الآخرين.', 'عند التفكير بالانتحار، أو إيذاء النفس.', '', ''),
(4, 'ارشادات التعامل مع الاكتئاب', 'الحرص على ممارسة النشاط البدني', 'تزجية الوقت بين الأهل والأصدقاء، وطلب المساعدة منهم، وتجنب العزلة.', 'القراءة والتعلم أكثر عن الاكتئاب.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `header` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `text` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `header`, `text`) VALUES
(1, 'الخدمات', 'يعمل مقدمين خدماتنا كفريق واحد للعناية بك وبعائلتك ، وتنسيق وتخصيص العلاجات والأدوية التي تناسب نمط حياتك.'),
(2, 'تشخيص الأمراض المزمنة', 'يمكن أن يكون التشخيص بمرض مزمن مثل مرض السكري أو السرطان أو التهاب المفاصل بمثابة ضربة. من الطبيعي تجربة مجموعة من المشاعر في أعقاب مثل هذا التشخيص'),
(3, 'تشخيص الحالات النفسية', 'السلوكيات التي تعتبر غير قادرة على التكيف وتتسبب في ضائقة شخصية كبيرة وتقطع أداء الوظائف اليومية من المرجح أن يتم تصنيفها على أنها اضطرابات'),
(4, 'تشخيص الاكتئاب', 'من المهم أن تحافظ على نفسك آمنًا من خلال مشاركة ما تشعر به مع شخص تثق به والحصول على بعض المساعدة من محترف'),
(5, 'الخصوصية والسرية', 'تتضمن المعلومات الشخصية الاسم ورقم الهاتف والمعلومات الشخصية المتعلقة بالصحة بما في ذلك الملاحظات والبيانات الأخرى'),
(6, '1يمكن أن يكون التشخيص بمرض مزمن مثل مرض السكري أو السرطان أو التهاب المفاصل بمثابة ضربة. من الطبيعي تجربة مجموعة من المشاعر في أعقاب مثل هذا التشخيص بالإضافة إلى الأمراض المزمنة التي تشمل أمراضًا مثل أمراض القلب والسكتة الدماغية والسرطان والسكري وأمراض الجهاز التنفسي والتهاب المفاصل. في البلدان ذات الدخل المرتفع ، لطالما كانت الأمراض المزمنة هي الأسباب الرئيسية للوفاة والإعاقة.', 'ser1.webp'),
(7, 'من المهم أن تحافظ على نفسك آمنًا من خلال مشاركة ما تشعر به مع شخص تثق به والحصول على بعض المساعدة وكذلك الاكتئاب يؤثر على المزاج والسلوك والطاقة وأكثر من ذلك. احصل على معلومات حيوية من مؤسسة أبحاث الدماغ والسلوك. أعلى تصنيف الخيرية. اشترك للحصول على الأخبار. الأعمال المعتمدة من BBB. تبرع عبر الإنترنت. أنواعه: إكلينيكي ، ثنائي القطب ، بالغين ، مراهقين ، أطفال.', 'ser33.jpg'),
(8, 'تشمل المعلومات الشخصية الاسم ورقم الهاتف والمعلومات الشخصية المتعلقة بالصحة بما في ذلك الملاحظات والبيانات الأخرى التي يحتفظ بها الأخصائي النفسي فيما يتعلق بالتقييم والعلاج وبموجب القانون ، يجب الاحتفاظ بسجلاتك الطبية ومعلوماتك الصحية بأمان وخصوصية من قبل جميع المتخصصين في المجال الطبي والرعاية الصحية وجميع مرافق الرعاية الصحية ،', 'ser4.jpg'),
(9, 'من المرجح أن يتم تصنيف السلوكيات التي تعتبر غير قادرة على التكيف والتي تسبب ضغوطًا شخصية كبيرة وتقطع العمل اليومي على أنها اضطرابات وكذلك الاضطرابات العقلية يمكن تشخيصها من قبل مقدم رعاية صحية لديه معرفة وخبرة في الصحة العقلية والسلوكية. قد يشمل هذا طبيبًا أو متخصصًا في الصحة العقلية. من أجل تشخيص اضطراب عقلي ، قد يسأل أخصائي الرعاية الصحية عن التاريخ الطبي للشخص\r\n', 'ser22.webp');

-- --------------------------------------------------------

--
-- Table structure for table `sliderone`
--

CREATE TABLE `sliderone` (
  `id` int(10) NOT NULL,
  `text` varchar(500) CHARACTER SET utf8 NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliderone`
--

INSERT INTO `sliderone` (`id`, `text`, `image`) VALUES
(1, '\" خصص وقتك وتعامل مع نفسك باحترام وتوقف عن جلد الذات. خصص وقتاً لممارسة هواياتك ومشاريعك المفضلة أو توسيع آفاقك. قم بالعناية بالحديقة وزرع نباتات جديدة، أو خذ دروساً بالسباحة أو تعلم العزف على آلة موسيقية أو تعلم لغة أخرى. \"', '1.jpg'),
(2, '\"اهتمامك بصحتك الجسدية إنه سيقودك إلى تحسين صحتك العقلية، وتأكد دائماً من تناول غذاء صحي وتجنب السجائر، اشرب الكثير من الماء. وجميعها تساعد على تقليل الاكتئاب والقلق وتحسين المزاج. \"', 'slider4.jpg'),
(3, '\" يتمتع الأشخاص الذين يخصصون وقتاً للعلاقات الأسرية أو الاجتماعية القوية بصحة أفضل. ضع خططاً لنشاطات مع أفراد العائلة والأصدقاء، أو ابحث عن الأنشطة التي يمكنك من خلالها التعرف على أشخاص جدد \"', '2.webp'),
(4, 'ارشادات العيادة ', 'الصحة النفسية جزء لا يتجزّأ من الصحة؛ وبالفعل، لا تكتمل الصحة بدون الصحة النفسية. الصحة النفسية تتأثّر بالعوامل الاجتماعية الاقتصادية والبيولوجية والبيئية. هناك استراتيجيات وتدخلات مشتركة بين القطاعات وعالية المردود لتعزيز الصحة النفسية. إنّ الصحة النفسية جزء أساسي لا يتجزّأ من الصحة. وفي هذا الصدد ينص دستور منظمة الصحة العالمية على أنّ الصحة هي حالة من اكتمال السلامة بدنياً وعقلياً واجتماعياً، لا مجرّد انعدام المرض أو العجز'),
(5, 'اشترك معنا', 'اشترك معنا واحصل على النصائح الدورية على الايميل ! نحب تقديم النصائح المهمة حول المرضى ودعمهم بكل الطرق الصحية والمفيدة في الأردن ، ويسعدنا اختيارك لدعمنا , التفاؤل هو الإيمان الذي يؤدي إلى الإنجاز'),
(6, 'Welcome Back!', 'مرحبًا بك في عيادتك للطبيب الذي يجلب السعادة دائمًا إلى المنزل! أنت أشعة الشمس لهذه العيادة. مرحبًا بك في منزلك يا عزيزنا'),
(7, 'Welcome New Friend!', 'يجب أن يكون لديك حساب لتتمكن من استخدام خدمات حجز المواعيد وخدمات الاختبار النفسي. يمكنك إنشاء حساب مجانًا ، ولست بحاجة إلى تقديم أي تفاصيل دفع'),
(8, 'Edit Profile', 'الملف الشخصي هو الملف الذي يحتوي على كل ما تريد صاحب عمل أن يعرفه عنك. الملف الشخصي هو لسانك الذي يتحدث عنك نيابة عنك وهو الذي يترك الانطباع الأول عوضا عنك');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` int(10) NOT NULL,
  `facebook` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `telegram` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `facebook`, `instagram`, `twitter`, `telegram`) VALUES
(1, 'lifeclinic@yahoo.com', 'lifeclinic@instagram.com', 'lifeclinic@twitter.com', 'lifeclinic@telegram.com');

-- --------------------------------------------------------

--
-- Table structure for table `statics`
--

CREATE TABLE `statics` (
  `id` int(10) NOT NULL,
  `useful` int(200) NOT NULL,
  `notuseful` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statics`
--

INSERT INTO `statics` (`id`, `useful`, `notuseful`) VALUES
(1, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subsucribtion`
--

CREATE TABLE `subsucribtion` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subsucribtion`
--

INSERT INTO `subsucribtion` (`id`, `email`, `date`) VALUES
(20, 'Ahmad1234@gmail.com', '22/04/23 10:00:47'),
(21, 'khaled@gmail.com', '22/04/23 10:01:13'),
(22, 'wafaa@gmail.com', '22/04/23 10:01:50'),
(26, 'ahmadalqadi@gmail.com', '22/04/23 10:07:32'),
(27, 'saif@gmail.com', '22/05/07 12:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `id` int(10) NOT NULL,
  `advice1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `advice2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `advice3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `advice4` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`id`, `advice1`, `advice2`, `advice3`, `advice4`) VALUES
(1, 'ابدأ اليوم بفكرة جيدة ', 'خصّص وقتًا للعمل ووقتًا للراحة', 'لا تتحدث عن العمل أو الدراسة في استراحة الظهيرة', 'التخلص من التفكير السيء'),
(2, 'ممارسة التمارين الرياضية المنتظمة لمدة 30 دقيقة يوميًا', 'التقليل من الأفكار السلبية', 'ممارسة التأمل لتفعيل السيطرة العاطفية', 'التواجد في بيئة مكونة من أشخاص داعمين قادرين على المساعدة'),
(3, 'استشارة الطبيب النفسي لكي لا يتم حدوث مضاعفات', 'احرص على اقتطاع وقت من يومك لممارسة النشاطات الرياضية بصورة منتظمة', 'ابتعد عن العزلة، وتواصل مع أفراد أسرتك وأصدقائك، واحرص على تمضية المزيد من الوقت برفقتهم', 'الابتعاد عن اتخاذ القرارات المهمة في حالة الإحساس بالحزن، أو الاكتئاب'),
(4, 'استشارة طبيب نفسي، ووصف مجموعة من المهدئات تخفف شدة الاكتئاب.', 'الاستعانة بالقرآن الكريم، وذكر الله بشكل متواصل، حيث يساهم ذلك في انبعاث الشعور بالرضا بقضاء الله، والشعور بالراحة والتفاؤل', 'ممارسة الرياضة بشكلٍ يومي، حيث تخفف الضغوطات النفسية وتبعث في النفس المزيد من الراحة والطمأنينة.', 'تفريغ كل ما تشعر به سواء الشعور جيد او سيء'),
(5, ' مراجعة الطبيب فورا لوصف مضادات للاكتئاب', ' المشاركة في برامج علاج المرضى بالعيادات', 'العلاج بالصدمة الكهربائية', 'التحفيز المغناطيسي عبر الجمجمة.');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) NOT NULL,
  `header` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `header`, `text`) VALUES
(1, 'knowledge.jpg', 'الاكتئاب هو اضطراب المزاج الذي يسبب شعورًا متواصلًا بالحزن، وفقدان المتعة، والاهتمام بالأمور المعتادة، ونقص التركيز. وقد يكون مصحوبًا بالشعور بالذنب، وعدم الأهمية، ونقص تقدير الذات. ويؤثر المرض في المشاعر، والتفكير، والتصرفات؛ مما يسبب كثيرًا من المشكلات العاطفية والجسدية، والتي بدورها تؤثر في أداء الأنشطة اليومية. وقد يسبب الشعور باليأس من الحياة، والتفكير في الانتحار، وربما الإقدام عليه في الحالات المتقدمة.'),
(2, 'أنواع الاكتئاب', 'عند حدوث خسائر في الحياة قد يصعب على الشخص تحملها، مثل: وفاة شخص عزيز، أو خسارة الوظيفة، أو انتهاء العلاقات، وغيرها. ومن الطبيعي أن يصاب بالحزن، وقد يعتقد أنه قد أصيب بالاكتئاب. وفي الواقع أن الشعور بالحزن ليس كالاكتئاب. فالحزن أمر طبيعي، ويختلف من شخص إلى آخر'),
(3, '​اضطراب الاكتئاب الجزئي', 'ويعرف - أيضًا - باسم الاكتئاب الجزئي، والاكتئاب الخفيف، واضطراب عسر المزاج. والاكتئاب الجزئي حالة من سوء المزاج تستمر لفترات طويلة، ولا تؤثر بشكل ملحوظ في أداء الشخص. وقد يمر المصاب بنوبات من الاكتئاب الشديد، والاكتئاب الخفيف. ولا يسمى بالاكتئاب الجزئي إلا إذا استمر لسنتين على الأقل.'),
(4, 'الاكتئاب الموسمي', 'يتميز بحدوثه خلال موسم الشتاء؛ حيث تقل فيه أشعة الشمس، ويزول غالبًا بحلول فصل الربيع، ويكون مصحوبًا بالعزلة الاجتماعية، وكثرة النوم، وزيادة الوزن.'),
(5, 'الاكتئاب الذهني', 'فيه يصاب الشخص باكتئاب شديد، بالإضافة إلى نوع آخر من الاضطرابات العقلية، مثل: الهلوسات، والأوهام، وغيرهما. وتكون أعراضه مرتبطة بأوهام كئيبة، مثل: هلوسات الفقر، والمرض، وغيرهما.'),
(6, 'اكتئاب ما بعد الولادة', 'عد أشد خطورة من الكآبة النفاسية التي تصيب أغلب النساء لمدة أسبوعين بعد الولادة. والمرأة المصابة باكتئاب ما بعد الولادة تواجه اكتئابًا شديدًا في أثناء فترة الحمل وبعد الولادة'),
(7, 'اكتئاب ما بعد القطب', 'يختلف اضطراب ثنائي القطب عن الاكتئاب، ولكن يتم ذكره ضمن أنواع الاكتئاب؛ لأن المصاب بثنائي القطب يواجه نوبات من الاكتئاب الشديد تتناوب مع نوبات ابتهاج عالية.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `FullName` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `DateOfJoin` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `Email`, `Password`, `DateOfJoin`, `Status`, `image`) VALUES
(10, 'Amer Awad', 'Amerawad@gmail.com', 'e180bdd49210a69d568293cb74f462d2114ae237', '22/04/21', 'unactive', '0x0.jpg'),
(11, 'Genan Emad', 'genanasfour@gmail.com', 'db6281ed8f8e14d205ead2edbabb56bb518caacc', '22/04/22', 'unactive', 'red-rose-shows-love-623x559.jpg'),
(12, 'sara ahmad', 'saraahmad@gmail.com', '942268cd344356b6edc244c2ab48ee3c4e80e7eb', '22/05/06', 'active', 'images (1).jpg'),
(13, 'yara alrokh', 'yara10@gmail.com', '5b3ee29ae60d436ded70ee20a3ef6faa7c70b25f', '22/05/11', 'unactive', 'user.png'),
(14, 'naser awad', 'nasweawad@hotmail.com', '1fd15282ff2ad80e382fd4de8027393c81c632c8', '22/05/11', 'unactive', 'user.png'),
(15, 'khaled moth', 'khaledmoth@gmail.com', 'f7cb2c549304d9c4cc298e73665cba46e12ef8ad', '22/05/11', 'unactive', 'user.png'),
(16, 'hamadh helal', 'hamadhhelal@yahoo.com', '5d21d6acfabaaf996ef7fa86571c69bbb9285228', '22/05/11', 'unactive', 'user.png'),
(17, 'tamer emad', 'tameremad@yahoo.com', '0c8ac9662bf13c0bbf6e2aa06c71cdcb7c75c879', '22/05/11', 'unactive', 'user.png'),
(22, 'hamood alkateb', 'hamood@gmail.com', 'e7b9955b7970bb8ec5a492b64c41fa2bae57b8c6', '22/05/11', 'unactive', 'user.png'),
(23, 'heathm qaddom', 'heathqaddom@gmail.com', '2a1ea83ff6d7dfd7d0cd0ab12a7e24a614f204da', '22/05/15', 'unactive', 'a-1oDdW5_400x400.jpg'),
(24, 'odai hani', 'odaihani10@gmail.com', 'dca878073d533518af75246bb7d31fc5b1e5faff', '22/05/18', 'unactive', 'images (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usershealth`
--

CREATE TABLE `usershealth` (
  `id` int(10) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `points` int(3) NOT NULL,
  `health` varchar(500) CHARACTER SET utf8 NOT NULL,
  `date` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usershealth`
--

INSERT INTO `usershealth` (`id`, `name`, `email`, `points`, `health`, `date`) VALUES
(6, 'odai hani', 'odaihani10@gmail.com', 21, 'اكتئاب متوسط', '22/05/18 10:38:40'),
(7, 'sara ahmad', 'saraahmad@gmail.com', 14, 'اكتئاب بسيط', '22/05/31 02:48:52'),
(60, 'Mazen Asfour', '4fecc3e98ab9ed9846627d2932c21b1e9af7721b', 27, 'اكتئاب شديد', '22/05/31 08:13:30'),
(61, 'Mazen Asfour', '4fecc3e98ab9ed9846627d2932c21b1e9af7721b', 27, 'اكتئاب شديد', '22/05/31 08:13:37'),
(62, 'sara ahmad', 'saraahmad@gmail.com', 27, 'اكتئاب شديد', '22/05/31 08:14:38'),
(63, 'sara ahmad', 'saraahmad@gmail.com', 23, 'اكتئاب متوسط', '22/05/31 08:15:12'),
(64, 'sara ahmad', 'saraahmad@gmail.com', 31, 'اكتئاب شديد', '22/05/31 08:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `header` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`header`, `text`, `image`, `id`) VALUES
('دليل الوظائف ', '1في العيادة ، اللمسات الإضافية في التصميم والوظيفة تجعل المرضى وعائلاتهم يشعرون بالتقدير. نعتقد أنه على الرغم من عدم تشخيص حالتهم وقد لا تكون شائعة ، فمن المهم العثور على إجابات لهم في مكان مريح.', 'fe2.jpg', 1),
('تحديد المشكلة أو الحالة', 'يعدّ التحدث إلى المصاب أهم أساليب تشخيص الاكتئاب النفسي على الإطلاق، إذ لا توجد فحوصات مخبرية أو تحاليل لتشخيصه.  ورغم ذلك، لا بد من إجراء فحص سريري لمعرفة ما إن كانت أعراض الاكتئاب ناجمةً عن سبب عضوي، إضافةً إلى إجراء فحوصات أخرى في حالة لزومها، منها تحاليل دم وبول لاستبعاد أي سبب عضوي', 'istock-914810760-721x481.jpg', 2),
('جمع البيانات والآراء والحجج', 'جمع المعلومات عن المريض بأسلوب منظم، ودراسة شخصيّته، وتشخيص مشكلاته، ومحاولة الوصول إلى حلول مناسبة لها، وتعتمد هذه الوسيلة على باقي وسائل جَمْع المعلومات، مثل: الملاحظة، والمقابلة، ومن الجدير بالذكر أنَ دراسة الحالة تتيح للطبيب إمكانية جمع أدقّ، وأكبر كمّية من المعلومات عن المريض  بهدف الوصول إلى حل دقيق', '4202022144225.jpg', 3),
('تحليل وتقييم البيانات.', 'تشير تحليلات الرعاية الصحية الى استخدام كميات هائلة من البيانات المجمعة لتزويد العيادة برؤى قابلة للتنفيذ. ويتم تطوير هذه الرؤى من خلال الجلسات التحليلية لدفع عملية صنع القرار القائمة على الحقائق. وبدورها، تؤدي هذه القرارات الى تحسين الحالة لدى المريض', 'about2.jpg', 4),
('العلاج النفسي', 'هدف العلاج النفسي هو إعطاء الشخص الأدوات وتعليمه الأساليب اللازمة لمواجهة ما يحدث في حياته، من ذلك الضغط النفسي ومشاكل العلاقات مع الآخرين وحتى السيطرة على الأمراض النفسية.  أن معظم فوائد العلاج النفسي تتم خارج غرفة العلاج بتطبيق هذه الأدوات والأساليب على مواقف الحياة اليومية.', 'رسائل-للنجاح-رائعة.jpg', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backupsapp`
--
ALTER TABLE `backupsapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderone`
--
ALTER TABLE `sliderone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statics`
--
ALTER TABLE `statics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsucribtion`
--
ALTER TABLE `subsucribtion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usershealth`
--
ALTER TABLE `usershealth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `backupsapp`
--
ALTER TABLE `backupsapp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliderone`
--
ALTER TABLE `sliderone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statics`
--
ALTER TABLE `statics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subsucribtion`
--
ALTER TABLE `subsucribtion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `usershealth`
--
ALTER TABLE `usershealth`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
