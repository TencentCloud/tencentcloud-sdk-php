<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频摘要配置
 *
 * @method string getOutputLang() 获取<p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method void setOutputLang(string $OutputLang) 设置<p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method string getAlternativeOutputLang() 获取<p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method void setAlternativeOutputLang(string $AlternativeOutputLang) 设置<p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
 * @method string getMultiCameraLayout() 获取<p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
 * @method void setMultiCameraLayout(string $MultiCameraLayout) 设置<p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
 * @method array getDetectTypes() 获取<p>拓展的目标及事件检测类别。可选值包括：</p><p><strong>通用事件标签</strong></p><ul><li><code>person_enter</code> 有人进入</li><li><code>vehicle_entering</code> 车辆进入</li><li><code>vehicle_parking</code> 车辆停靠</li><li><code>pet</code> 有宠物</li><li><code>no_signal</code> 视频画面异常（无信号等）</li></ul><p><strong>看家护院</strong></p><ul><li><code>person_climbing_fence</code> 有人翻围墙</li><li><code>door_window_open</code> 门窗被开启</li><li><code>person_carrying_object</code> 有人搬运物品</li></ul><p><strong>商铺看管</strong></p><ul><li><code>person_at_cashier</code> 有人在收银台</li><li><code>person_taking_goods</code> 有人拿商品</li><li><code>person_night_moving</code> 夜间有人移动</li></ul><p><strong>公共及防火安全</strong></p><ul><li><code>person_stealing</code> 有人偷盗</li><li><code>crowd</code> 多人聚集</li><li><code>smoking</code> 有人吸烟</li><li><code>safety_fire</code> 明火</li><li><code>safety_smoke</code> 浓烟</li><li><code>fireworks</code> 有人燃放烟花爆竹</li><li><code>knife</code> 有人持刀</li><li><code>gun</code> 有人持枪</li><li><code>fight</code> 有人打架</li><li><code>hurt</code> 有人受伤流血</li></ul><p><strong>养殖看护</strong></p><ul><li><code>person_feeding_animal</code> 有人投喂牲畜</li><li><code>animal_lying</code> 有动物躺地上</li><li><code>animal_wild_intrusion</code> 野生动物入侵</li></ul><p><strong>果园农田</strong></p><ul><li><code>person_picking_fruit</code> 有人采摘果实</li><li><code>person_carrying_bag</code> 有人携带包裹</li></ul><p><strong>鱼塘看管</strong></p><ul><li><code>fishing</code> 有人钓鱼</li><li><code>net_fishing</code> 有人撒网</li><li><code>person_carrying_fishing_gear</code> 有人携带渔具</li><li><code>loitering_near_water</code> 有人岸边逗留</li><li><code>throwing_into_water</code> 有人投掷物品</li></ul><p><strong>婴儿看护</strong></p><ul><li><code>baby</code> 有婴儿</li><li><code>baby_dropping</code> 婴儿跌落床铺</li><li><code>person_holding_baby</code> 有人抱起婴儿</li><li><code>baby_rolling</code> 婴儿翻滚</li><li><code>baby_crying</code> 婴儿哭闹</li></ul><p><strong>儿童看护</strong></p><ul><li><code>child</code> 有小孩</li><li><code>child_falling</code> 小孩摔倒</li><li><code>child_entering_kitchen</code> 小孩进入厨房</li><li><code>child_climbing_window</code> 小孩攀爬室内窗户</li><li><code>child_near_water</code> 小孩靠近水域</li></ul><p><strong>老人看护</strong></p><ul><li><code>elderly</code> 有老人</li><li><code>elderly_falling</code> 老人摔倒</li><li><code>elderly_eating</code> 老人用餐</li><li><code>elderly_using_stove</code> 老人使用灶具</li></ul><p><strong>宠物看护</strong></p><ul><li><code>pet_eating</code> 宠物进食</li><li><code>pet_damaging</code> 宠物损坏家具</li><li><code>pet_barking</code> 宠物吠叫</li><li><code>pet_scratching_door</code> 宠物挠门</li></ul>
 * @method void setDetectTypes(array $DetectTypes) 设置<p>拓展的目标及事件检测类别。可选值包括：</p><p><strong>通用事件标签</strong></p><ul><li><code>person_enter</code> 有人进入</li><li><code>vehicle_entering</code> 车辆进入</li><li><code>vehicle_parking</code> 车辆停靠</li><li><code>pet</code> 有宠物</li><li><code>no_signal</code> 视频画面异常（无信号等）</li></ul><p><strong>看家护院</strong></p><ul><li><code>person_climbing_fence</code> 有人翻围墙</li><li><code>door_window_open</code> 门窗被开启</li><li><code>person_carrying_object</code> 有人搬运物品</li></ul><p><strong>商铺看管</strong></p><ul><li><code>person_at_cashier</code> 有人在收银台</li><li><code>person_taking_goods</code> 有人拿商品</li><li><code>person_night_moving</code> 夜间有人移动</li></ul><p><strong>公共及防火安全</strong></p><ul><li><code>person_stealing</code> 有人偷盗</li><li><code>crowd</code> 多人聚集</li><li><code>smoking</code> 有人吸烟</li><li><code>safety_fire</code> 明火</li><li><code>safety_smoke</code> 浓烟</li><li><code>fireworks</code> 有人燃放烟花爆竹</li><li><code>knife</code> 有人持刀</li><li><code>gun</code> 有人持枪</li><li><code>fight</code> 有人打架</li><li><code>hurt</code> 有人受伤流血</li></ul><p><strong>养殖看护</strong></p><ul><li><code>person_feeding_animal</code> 有人投喂牲畜</li><li><code>animal_lying</code> 有动物躺地上</li><li><code>animal_wild_intrusion</code> 野生动物入侵</li></ul><p><strong>果园农田</strong></p><ul><li><code>person_picking_fruit</code> 有人采摘果实</li><li><code>person_carrying_bag</code> 有人携带包裹</li></ul><p><strong>鱼塘看管</strong></p><ul><li><code>fishing</code> 有人钓鱼</li><li><code>net_fishing</code> 有人撒网</li><li><code>person_carrying_fishing_gear</code> 有人携带渔具</li><li><code>loitering_near_water</code> 有人岸边逗留</li><li><code>throwing_into_water</code> 有人投掷物品</li></ul><p><strong>婴儿看护</strong></p><ul><li><code>baby</code> 有婴儿</li><li><code>baby_dropping</code> 婴儿跌落床铺</li><li><code>person_holding_baby</code> 有人抱起婴儿</li><li><code>baby_rolling</code> 婴儿翻滚</li><li><code>baby_crying</code> 婴儿哭闹</li></ul><p><strong>儿童看护</strong></p><ul><li><code>child</code> 有小孩</li><li><code>child_falling</code> 小孩摔倒</li><li><code>child_entering_kitchen</code> 小孩进入厨房</li><li><code>child_climbing_window</code> 小孩攀爬室内窗户</li><li><code>child_near_water</code> 小孩靠近水域</li></ul><p><strong>老人看护</strong></p><ul><li><code>elderly</code> 有老人</li><li><code>elderly_falling</code> 老人摔倒</li><li><code>elderly_eating</code> 老人用餐</li><li><code>elderly_using_stove</code> 老人使用灶具</li></ul><p><strong>宠物看护</strong></p><ul><li><code>pet_eating</code> 宠物进食</li><li><code>pet_damaging</code> 宠物损坏家具</li><li><code>pet_barking</code> 宠物吠叫</li><li><code>pet_scratching_door</code> 宠物挠门</li></ul>
 * @method array getCustomDetectQueries() 获取<p>自定义检测标签</p>
 * @method void setCustomDetectQueries(array $CustomDetectQueries) 设置<p>自定义检测标签</p>
 * @method array getDetectContinuous() 获取<p>标签持续检测配置</p>
 * @method void setDetectContinuous(array $DetectContinuous) 设置<p>标签持续检测配置</p>
 * @method string getSummaryPrompt() 获取<p>自定义摘要提示词</p>
 * @method void setSummaryPrompt(string $SummaryPrompt) 设置<p>自定义摘要提示词</p>
 */
class VisionSummaryConfig extends AbstractModel
{
    /**
     * @var string <p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     */
    public $OutputLang;

    /**
     * @var string <p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     */
    public $AlternativeOutputLang;

    /**
     * @var string <p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
     */
    public $MultiCameraLayout;

    /**
     * @var array <p>拓展的目标及事件检测类别。可选值包括：</p><p><strong>通用事件标签</strong></p><ul><li><code>person_enter</code> 有人进入</li><li><code>vehicle_entering</code> 车辆进入</li><li><code>vehicle_parking</code> 车辆停靠</li><li><code>pet</code> 有宠物</li><li><code>no_signal</code> 视频画面异常（无信号等）</li></ul><p><strong>看家护院</strong></p><ul><li><code>person_climbing_fence</code> 有人翻围墙</li><li><code>door_window_open</code> 门窗被开启</li><li><code>person_carrying_object</code> 有人搬运物品</li></ul><p><strong>商铺看管</strong></p><ul><li><code>person_at_cashier</code> 有人在收银台</li><li><code>person_taking_goods</code> 有人拿商品</li><li><code>person_night_moving</code> 夜间有人移动</li></ul><p><strong>公共及防火安全</strong></p><ul><li><code>person_stealing</code> 有人偷盗</li><li><code>crowd</code> 多人聚集</li><li><code>smoking</code> 有人吸烟</li><li><code>safety_fire</code> 明火</li><li><code>safety_smoke</code> 浓烟</li><li><code>fireworks</code> 有人燃放烟花爆竹</li><li><code>knife</code> 有人持刀</li><li><code>gun</code> 有人持枪</li><li><code>fight</code> 有人打架</li><li><code>hurt</code> 有人受伤流血</li></ul><p><strong>养殖看护</strong></p><ul><li><code>person_feeding_animal</code> 有人投喂牲畜</li><li><code>animal_lying</code> 有动物躺地上</li><li><code>animal_wild_intrusion</code> 野生动物入侵</li></ul><p><strong>果园农田</strong></p><ul><li><code>person_picking_fruit</code> 有人采摘果实</li><li><code>person_carrying_bag</code> 有人携带包裹</li></ul><p><strong>鱼塘看管</strong></p><ul><li><code>fishing</code> 有人钓鱼</li><li><code>net_fishing</code> 有人撒网</li><li><code>person_carrying_fishing_gear</code> 有人携带渔具</li><li><code>loitering_near_water</code> 有人岸边逗留</li><li><code>throwing_into_water</code> 有人投掷物品</li></ul><p><strong>婴儿看护</strong></p><ul><li><code>baby</code> 有婴儿</li><li><code>baby_dropping</code> 婴儿跌落床铺</li><li><code>person_holding_baby</code> 有人抱起婴儿</li><li><code>baby_rolling</code> 婴儿翻滚</li><li><code>baby_crying</code> 婴儿哭闹</li></ul><p><strong>儿童看护</strong></p><ul><li><code>child</code> 有小孩</li><li><code>child_falling</code> 小孩摔倒</li><li><code>child_entering_kitchen</code> 小孩进入厨房</li><li><code>child_climbing_window</code> 小孩攀爬室内窗户</li><li><code>child_near_water</code> 小孩靠近水域</li></ul><p><strong>老人看护</strong></p><ul><li><code>elderly</code> 有老人</li><li><code>elderly_falling</code> 老人摔倒</li><li><code>elderly_eating</code> 老人用餐</li><li><code>elderly_using_stove</code> 老人使用灶具</li></ul><p><strong>宠物看护</strong></p><ul><li><code>pet_eating</code> 宠物进食</li><li><code>pet_damaging</code> 宠物损坏家具</li><li><code>pet_barking</code> 宠物吠叫</li><li><code>pet_scratching_door</code> 宠物挠门</li></ul>
     */
    public $DetectTypes;

    /**
     * @var array <p>自定义检测标签</p>
     */
    public $CustomDetectQueries;

    /**
     * @var array <p>标签持续检测配置</p>
     */
    public $DetectContinuous;

    /**
     * @var string <p>自定义摘要提示词</p>
     */
    public $SummaryPrompt;

    /**
     * @param string $OutputLang <p>主输出语言，可选值包括：</p><ul><li><code>zh</code> 中文（默认值）</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     * @param string $AlternativeOutputLang <p>次选输出语言，可选值包括：</p><ul><li><code>zh</code> 中文</li><li><code>en</code> 英语</li><li><code>ja</code> 日语</li><li><code>ko</code> 韩文</li><li><code>pt-BR</code> 葡萄牙语（巴西）</li><li><code>th</code> 泰语</li><li><code>ms</code> 马来语</li></ul>
     * @param string $MultiCameraLayout <p>多摄像头布局定义。可选值包括：</p><ul><li><p>单摄（默认值）：<code>Single</code></p></li><li><p>双摄（纵向排列）- 全部画面：<code>Vertical,Num=2,Index=0;1</code></p></li><li><p>双摄（纵向排列）- 画面1：<code>Vertical,Num=2,Index=0</code></p></li><li><p>双摄（纵向排列）- 画面2：<code>Vertical,Num=2,Index=1</code></p></li><li><p>三摄（纵向排列）- 全部画面：<code>Vertical,Num=3,Index=0;1;2</code></p></li><li><p>三摄（纵向排列）- 画面1：<code>Vertical,Num=3,Index=0</code></p></li><li><p>三摄（纵向排列）- 画面2：<code>Vertical,Num=3,Index=1</code></p></li><li><p>三摄（纵向排列）- 画面3：<code>Vertical,Num=3,Index=2</code></p></li><li><p>三摄（纵向排列）- 画面1+2：<code>Vertical,Num=3,Index=0;1</code></p></li><li><p>三摄（纵向排列）- 画面1+3：<code>Vertical,Num=3,Index=0;2</code></p></li><li><p>三摄（纵向排列）- 画面2+3：<code>Vertical,Num=3,Index=1;2</code></p></li></ul>
     * @param array $DetectTypes <p>拓展的目标及事件检测类别。可选值包括：</p><p><strong>通用事件标签</strong></p><ul><li><code>person_enter</code> 有人进入</li><li><code>vehicle_entering</code> 车辆进入</li><li><code>vehicle_parking</code> 车辆停靠</li><li><code>pet</code> 有宠物</li><li><code>no_signal</code> 视频画面异常（无信号等）</li></ul><p><strong>看家护院</strong></p><ul><li><code>person_climbing_fence</code> 有人翻围墙</li><li><code>door_window_open</code> 门窗被开启</li><li><code>person_carrying_object</code> 有人搬运物品</li></ul><p><strong>商铺看管</strong></p><ul><li><code>person_at_cashier</code> 有人在收银台</li><li><code>person_taking_goods</code> 有人拿商品</li><li><code>person_night_moving</code> 夜间有人移动</li></ul><p><strong>公共及防火安全</strong></p><ul><li><code>person_stealing</code> 有人偷盗</li><li><code>crowd</code> 多人聚集</li><li><code>smoking</code> 有人吸烟</li><li><code>safety_fire</code> 明火</li><li><code>safety_smoke</code> 浓烟</li><li><code>fireworks</code> 有人燃放烟花爆竹</li><li><code>knife</code> 有人持刀</li><li><code>gun</code> 有人持枪</li><li><code>fight</code> 有人打架</li><li><code>hurt</code> 有人受伤流血</li></ul><p><strong>养殖看护</strong></p><ul><li><code>person_feeding_animal</code> 有人投喂牲畜</li><li><code>animal_lying</code> 有动物躺地上</li><li><code>animal_wild_intrusion</code> 野生动物入侵</li></ul><p><strong>果园农田</strong></p><ul><li><code>person_picking_fruit</code> 有人采摘果实</li><li><code>person_carrying_bag</code> 有人携带包裹</li></ul><p><strong>鱼塘看管</strong></p><ul><li><code>fishing</code> 有人钓鱼</li><li><code>net_fishing</code> 有人撒网</li><li><code>person_carrying_fishing_gear</code> 有人携带渔具</li><li><code>loitering_near_water</code> 有人岸边逗留</li><li><code>throwing_into_water</code> 有人投掷物品</li></ul><p><strong>婴儿看护</strong></p><ul><li><code>baby</code> 有婴儿</li><li><code>baby_dropping</code> 婴儿跌落床铺</li><li><code>person_holding_baby</code> 有人抱起婴儿</li><li><code>baby_rolling</code> 婴儿翻滚</li><li><code>baby_crying</code> 婴儿哭闹</li></ul><p><strong>儿童看护</strong></p><ul><li><code>child</code> 有小孩</li><li><code>child_falling</code> 小孩摔倒</li><li><code>child_entering_kitchen</code> 小孩进入厨房</li><li><code>child_climbing_window</code> 小孩攀爬室内窗户</li><li><code>child_near_water</code> 小孩靠近水域</li></ul><p><strong>老人看护</strong></p><ul><li><code>elderly</code> 有老人</li><li><code>elderly_falling</code> 老人摔倒</li><li><code>elderly_eating</code> 老人用餐</li><li><code>elderly_using_stove</code> 老人使用灶具</li></ul><p><strong>宠物看护</strong></p><ul><li><code>pet_eating</code> 宠物进食</li><li><code>pet_damaging</code> 宠物损坏家具</li><li><code>pet_barking</code> 宠物吠叫</li><li><code>pet_scratching_door</code> 宠物挠门</li></ul>
     * @param array $CustomDetectQueries <p>自定义检测标签</p>
     * @param array $DetectContinuous <p>标签持续检测配置</p>
     * @param string $SummaryPrompt <p>自定义摘要提示词</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("OutputLang",$param) and $param["OutputLang"] !== null) {
            $this->OutputLang = $param["OutputLang"];
        }

        if (array_key_exists("AlternativeOutputLang",$param) and $param["AlternativeOutputLang"] !== null) {
            $this->AlternativeOutputLang = $param["AlternativeOutputLang"];
        }

        if (array_key_exists("MultiCameraLayout",$param) and $param["MultiCameraLayout"] !== null) {
            $this->MultiCameraLayout = $param["MultiCameraLayout"];
        }

        if (array_key_exists("DetectTypes",$param) and $param["DetectTypes"] !== null) {
            $this->DetectTypes = $param["DetectTypes"];
        }

        if (array_key_exists("CustomDetectQueries",$param) and $param["CustomDetectQueries"] !== null) {
            $this->CustomDetectQueries = [];
            foreach ($param["CustomDetectQueries"] as $key => $value){
                $obj = new VisionCustomDetectQuery();
                $obj->deserialize($value);
                array_push($this->CustomDetectQueries, $obj);
            }
        }

        if (array_key_exists("DetectContinuous",$param) and $param["DetectContinuous"] !== null) {
            $this->DetectContinuous = [];
            foreach ($param["DetectContinuous"] as $key => $value){
                $obj = new SeeDetectContinuousConfig();
                $obj->deserialize($value);
                array_push($this->DetectContinuous, $obj);
            }
        }

        if (array_key_exists("SummaryPrompt",$param) and $param["SummaryPrompt"] !== null) {
            $this->SummaryPrompt = $param["SummaryPrompt"];
        }
    }
}
