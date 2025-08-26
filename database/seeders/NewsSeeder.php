<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'xAI ของ Musk ฟ้อง Apple และ OpenAI ข้อหาผูกขาดตลาด AI',
                'content' => 'xAI บริษัทปัญญาประดิษฐ์ของ Elon Musk ได้ยื่นฟ้อง Apple และ OpenAI ในศาลรัฐบาลกลางสหรัฐฯ โดยกล่าวหาว่าทั้งสองบริษัทสมรู้ร่วมคิดกันเพื่อผูกขาดตลาด AI ที่กำลังเติบโตอย่างรวดเร็ว...',
                'source_url' => 'https://timesofindia.indiatimes.com/business/international-business/elon-musk-vs-big-tech-xai-sues-apple-openai-billionaire-accuses-rivals-of-monopoly-deal/articleshow/123507219.cms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SpaceX เลื่อนการทดสอบเที่ยวบิน Starship ครั้งที่ 10',
                'content' => 'SpaceX ได้เลื่อนการบินทดสอบยาน Starship ครั้งที่ 10 ซึ่งถูกมองว่าเป็นภารกิจสำคัญ เนื่องจากปัญหาเกี่ยวกับระบบภาคพื้นดินเพียงไม่กี่นาทีก่อนการปล่อยตัว...',
                'source_url' => 'https://timesofindia.indiatimes.com/technology/tech-news/elon-musks-spacex-delays-tenth-starship-test-flight-heres-why/articleshow/123493338.cms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // --- เพิ่มข่าวอื่นๆ ที่นี่จนครบ 10 ข่าว ---
            [
                'title' => 'Kimbal Musk น้องชายของ Elon กล่าวว่าพี่ชายของเขาสมควรได้รับค่าตอบแทน',
                'content' => 'Kimbal Musk น้องชายของ Elon Musk กล่าวว่ามหาเศรษฐีที่รวยที่สุดในโลก "สมควรได้รับค่าตอบแทน" ท่ามกลางข้อพิพาททางกฎหมายเกี่ยวกับแพ็คเกจค่าตอบแทนของพี่ชายของเขา...',
                'source_url' => 'https://timesofindia.indiatimes.com/technology/tech-news/elon-musk-brother-kimbal-musk-on-tesla-ceos-salary-fight-it-is-very-unfair-that-/articleshow/123482243.cms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'กลุ่มผู้ถือหุ้น Tesla เรียกร้องให้ Nasdaq ตรวจสอบรางวัลหุ้นมูลค่า 29 พันล้านดอลลาร์ของ Musk',
                'content' => 'กลุ่มผู้ถือหุ้นของ Tesla ได้เรียกร้องให้ Nasdaq ตรวจสอบและดำเนินการกับบริษัท หลังจากที่คณะกรรมการได้อนุมัติรางวัลหุ้นมูลค่า 29 พันล้านดอลลาร์ให้กับ Elon Musk โดยไม่ได้ผ่านการลงมติจากผู้ถือหุ้น...',
                'source_url' => 'https://timesofindia.indiatimes.com/technology/tech-news/tesla-investors-urge-nasdaq-to-probe-elon-musks-29-billion-stock-award-amid-serious-concerns-over-/articleshow/123484737.cms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Elon Musk ถอยแผนตั้งพรรค "America Party"',
                'content' => 'มีรายงานว่า Elon Musk ได้ถอยแผนการจัดตั้งพรรคการเมืองที่สามในสหรัฐฯ ที่ชื่อว่า "America Party" และมีแนวโน้มที่จะให้การสนับสนุน JD Vance ในการเลือกตั้งประธานาธิบดีปี 2028 แทน...',
                'source_url' => 'https://timesofindia.indiatimes.com/technology/tech-news/elon-musk-pulls-back-on-america-party-plans-claims-report-tesla-ceo-fires-back/articleshow/123407879.cms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // ตัวอย่างข่าวที่ 6 - 10 (ใช้เนื้อหาจริงจากแหล่งข่าว)
            [
                'title' => 'SpaceX ปล่อยโดรนอวกาศลับ X-37B ของกองทัพสหรัฐฯ',
                'content' => 'จรวด Falcon Heavy ของ SpaceX ประสบความสำเร็จในการปล่อยโดรนอวกาศ X-37B ที่เป็นความลับสุดยอดของกองทัพสหรัฐฯ ขึ้นสู่วงโคจร ซึ่งเป็นภารกิจที่มีความสำคัญทางยุทธศาสตร์',
                'source_url' => 'https://www.ndtv.com/topic/elon-musk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ศาลสั่ง Musk ต้องเผชิญคดีฟ้องร้องว่าจัดลอตเตอรี่เลือกตั้งที่ผิดกฎหมาย',
                'content' => 'ศาลได้ตัดสินว่า Elon Musk ต้องเผชิญกับการฟ้องร้องที่กล่าวหาว่าเขาจัดการลอตเตอรี่มูลค่า 1 ล้านดอลลาร์ที่ผิดกฎหมายเพื่อส่งเสริมการลงคะแนนเสียงในการเลือกตั้ง',
                'source_url' => 'https://www.ndtv.com/topic/elon-musk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Grok ของ xAI บุกตลาดพนัน จับมือแพลตฟอร์มถูกกฎหมายในสหรัฐฯ',
                'content' => 'xAI ของ Elon Musk ประกาศความร่วมมือกับ Kalshi ซึ่งเป็นแพลตฟอร์มการพนันที่ถูกกฎหมายเพียงแห่งเดียวในสหรัฐฯ เพื่อนำ Grok เข้าสู่ตลาดการคาดการณ์ผลลัพธ์ต่างๆ',
                'source_url' => 'https://siamblockchain.com/tag/elon-musk/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ทรัมป์ย้ำไม่ตัดเงินสนับสนุนธุรกิจของ Musk',
                'content' => 'โดนัลด์ ทรัมป์ ยืนยันว่าเขาจะไม่ตัดการสนับสนุนทางการเงินแก่บริษัทต่างๆ ของ Elon Musk เช่น SpaceX และ Tesla โดยย้ำว่าต้องการให้ธุรกิจเหล่านี้เติบโตในสหรัฐอเมริกา',
                'source_url' => 'https://siamblockchain.com/tag/elon-musk/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Musk ยืนยันวิกฤตหนี้สหรัฐฯ อาจดันราคา Bitcoin พุ่ง',
                'content' => 'Elon Musk ได้แสดงความคิดเห็นยืนยันข่าวลือที่ว่า วิกฤตหนี้สาธารณะของสหรัฐฯ ที่มีมูลค่ามหาศาลอาจเป็นปัจจัยสำคัญที่ผลักดันให้ราคาของ Bitcoin เพิ่มสูงขึ้นอย่างมีนัยสำคัญ',
                'source_url' => 'https://siamblockchain.com/tag/elon-musk/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
