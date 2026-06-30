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
 * TWeSee 视觉理解结果
 *
 * @method array getDetectedClassifications() 获取<p>识别到的目标类型与事件标签。<br>枚举值：</p><ul><li>person：人</li><li>vehicle：车辆</li><li>cat：猫</li><li>dog：狗</li><li>package：快递包裹</li><li>license_plate：车牌</li><li>fire：火焰</li><li>smoke：烟雾</li><li>delivery_man：快递员/外卖员</li><li>pet：有宠物</li><li>pet_scratching_door：宠物挠门</li><li>pet_barking：宠物吠叫</li><li>pet_damaging：宠物损坏家具</li><li>pet_eating：宠物进食</li><li>person_playing_with_pet：人与宠物玩耍</li><li>pet_close_to_camera：宠物靠近摄像头</li><li>animal_lying：有动物躺/趴在地上</li><li>child：有小孩</li><li>child_near_water：小孩靠近水域</li><li>child_falling：小孩摔倒</li><li>child_climbing_window：小孩攀爬室内窗户</li><li>child_entering_kitchen：小孩进入厨房</li><li>child_playing_danger_item：小孩玩危险物品</li><li>child_writing：小孩写作业</li><li>baby：有婴儿</li><li>baby_crying：婴儿哭闹</li><li>baby_dropping：婴儿跌落床铺</li><li>person_holding_baby：有人抱起婴儿</li><li>baby_rolling：婴儿翻滚</li><li>elderly：有老人</li><li>elderly_falling：老人摔倒</li><li>elderly_eating：老人用餐</li><li>elderly_using_stove：老人使用灶具</li><li>vehicle_parking：车辆停靠</li><li>vehicle_entering：车辆进入</li><li>vehicle_exiting：车辆离开</li><li>person_feeding_animal：有人投喂牲畜</li><li>animal_wild_intrusion：野生动物入侵</li><li>throwing_into_water：有人投掷物品</li><li>loitering_near_water：有人岸边逗留</li><li>fishing：有人钓鱼</li><li>net_fishing：有人撒网</li><li>person_carrying_fishing_gear：有人携带渔具</li><li>person_carrying_object：有人搬运物品</li><li>person_taking_goods：有人拿商品</li><li>person_night_moving：夜间有人移动</li><li>crowd：多人聚集</li><li>person_picking_fruit：有人采摘果实</li><li>person_at_cashier：有人在收银台</li><li>person_climbing_fence：有人翻围墙</li><li>person_carrying_bag：有人携带包裹</li><li>person_entering_farm：人员进入农场</li><li>person_entering_store：人员进入店铺</li><li>person_falling：有人跌倒</li><li>staff_absent：员工离岗</li><li>uniform_abnormal：未穿工服</li><li>using_mobile_phone：使用手机</li><li>smoking：有人吸烟</li><li>knife：有人持刀</li><li>gun：有人持枪</li><li>hurt：有人受伤流血</li><li>fight：有人打架</li><li>door_window_open：门窗被开启</li><li>fireworks：有人燃放烟花爆竹</li><li>no_signal：视频画面异常（无信号等）</li><li>camera_angle_abnormal：摄像头角度异常</li><li>person_motionless：有人且其姿势保持静止</li></ul>
 * @method void setDetectedClassifications(array $DetectedClassifications) 设置<p>识别到的目标类型与事件标签。<br>枚举值：</p><ul><li>person：人</li><li>vehicle：车辆</li><li>cat：猫</li><li>dog：狗</li><li>package：快递包裹</li><li>license_plate：车牌</li><li>fire：火焰</li><li>smoke：烟雾</li><li>delivery_man：快递员/外卖员</li><li>pet：有宠物</li><li>pet_scratching_door：宠物挠门</li><li>pet_barking：宠物吠叫</li><li>pet_damaging：宠物损坏家具</li><li>pet_eating：宠物进食</li><li>person_playing_with_pet：人与宠物玩耍</li><li>pet_close_to_camera：宠物靠近摄像头</li><li>animal_lying：有动物躺/趴在地上</li><li>child：有小孩</li><li>child_near_water：小孩靠近水域</li><li>child_falling：小孩摔倒</li><li>child_climbing_window：小孩攀爬室内窗户</li><li>child_entering_kitchen：小孩进入厨房</li><li>child_playing_danger_item：小孩玩危险物品</li><li>child_writing：小孩写作业</li><li>baby：有婴儿</li><li>baby_crying：婴儿哭闹</li><li>baby_dropping：婴儿跌落床铺</li><li>person_holding_baby：有人抱起婴儿</li><li>baby_rolling：婴儿翻滚</li><li>elderly：有老人</li><li>elderly_falling：老人摔倒</li><li>elderly_eating：老人用餐</li><li>elderly_using_stove：老人使用灶具</li><li>vehicle_parking：车辆停靠</li><li>vehicle_entering：车辆进入</li><li>vehicle_exiting：车辆离开</li><li>person_feeding_animal：有人投喂牲畜</li><li>animal_wild_intrusion：野生动物入侵</li><li>throwing_into_water：有人投掷物品</li><li>loitering_near_water：有人岸边逗留</li><li>fishing：有人钓鱼</li><li>net_fishing：有人撒网</li><li>person_carrying_fishing_gear：有人携带渔具</li><li>person_carrying_object：有人搬运物品</li><li>person_taking_goods：有人拿商品</li><li>person_night_moving：夜间有人移动</li><li>crowd：多人聚集</li><li>person_picking_fruit：有人采摘果实</li><li>person_at_cashier：有人在收银台</li><li>person_climbing_fence：有人翻围墙</li><li>person_carrying_bag：有人携带包裹</li><li>person_entering_farm：人员进入农场</li><li>person_entering_store：人员进入店铺</li><li>person_falling：有人跌倒</li><li>staff_absent：员工离岗</li><li>uniform_abnormal：未穿工服</li><li>using_mobile_phone：使用手机</li><li>smoking：有人吸烟</li><li>knife：有人持刀</li><li>gun：有人持枪</li><li>hurt：有人受伤流血</li><li>fight：有人打架</li><li>door_window_open：门窗被开启</li><li>fireworks：有人燃放烟花爆竹</li><li>no_signal：视频画面异常（无信号等）</li><li>camera_angle_abnormal：摄像头角度异常</li><li>person_motionless：有人且其姿势保持静止</li></ul>
 * @method string getSummary() 获取<p>摘要文本</p>
 * @method void setSummary(string $Summary) 设置<p>摘要文本</p>
 * @method string getAlternativeSummary() 获取<p>摘要文本（次选语言）</p>
 * @method void setAlternativeSummary(string $AlternativeSummary) 设置<p>摘要文本（次选语言）</p>
 * @method string getErrorCode() 获取<p>错误码，可能取值：</p><ul><li><code>DownloadFailed</code>：下载视频/图片文件失败</li><li><code>ReadFailed</code>：读取视频/图片文件失败</li></ul>
 * @method void setErrorCode(string $ErrorCode) 设置<p>错误码，可能取值：</p><ul><li><code>DownloadFailed</code>：下载视频/图片文件失败</li><li><code>ReadFailed</code>：读取视频/图片文件失败</li></ul>
 * @method string getErrorMsg() 获取<p>错误消息</p>
 * @method void setErrorMsg(string $ErrorMsg) 设置<p>错误消息</p>
 * @method array getKeywords() 获取<p>生成的关键词列表</p><p>当配置 <code>EnableKeywords</code> 为 true 时返回</p>
 * @method void setKeywords(array $Keywords) 设置<p>生成的关键词列表</p><p>当配置 <code>EnableKeywords</code> 为 true 时返回</p>
 */
class SeeComprehensionResult extends AbstractModel
{
    /**
     * @var array <p>识别到的目标类型与事件标签。<br>枚举值：</p><ul><li>person：人</li><li>vehicle：车辆</li><li>cat：猫</li><li>dog：狗</li><li>package：快递包裹</li><li>license_plate：车牌</li><li>fire：火焰</li><li>smoke：烟雾</li><li>delivery_man：快递员/外卖员</li><li>pet：有宠物</li><li>pet_scratching_door：宠物挠门</li><li>pet_barking：宠物吠叫</li><li>pet_damaging：宠物损坏家具</li><li>pet_eating：宠物进食</li><li>person_playing_with_pet：人与宠物玩耍</li><li>pet_close_to_camera：宠物靠近摄像头</li><li>animal_lying：有动物躺/趴在地上</li><li>child：有小孩</li><li>child_near_water：小孩靠近水域</li><li>child_falling：小孩摔倒</li><li>child_climbing_window：小孩攀爬室内窗户</li><li>child_entering_kitchen：小孩进入厨房</li><li>child_playing_danger_item：小孩玩危险物品</li><li>child_writing：小孩写作业</li><li>baby：有婴儿</li><li>baby_crying：婴儿哭闹</li><li>baby_dropping：婴儿跌落床铺</li><li>person_holding_baby：有人抱起婴儿</li><li>baby_rolling：婴儿翻滚</li><li>elderly：有老人</li><li>elderly_falling：老人摔倒</li><li>elderly_eating：老人用餐</li><li>elderly_using_stove：老人使用灶具</li><li>vehicle_parking：车辆停靠</li><li>vehicle_entering：车辆进入</li><li>vehicle_exiting：车辆离开</li><li>person_feeding_animal：有人投喂牲畜</li><li>animal_wild_intrusion：野生动物入侵</li><li>throwing_into_water：有人投掷物品</li><li>loitering_near_water：有人岸边逗留</li><li>fishing：有人钓鱼</li><li>net_fishing：有人撒网</li><li>person_carrying_fishing_gear：有人携带渔具</li><li>person_carrying_object：有人搬运物品</li><li>person_taking_goods：有人拿商品</li><li>person_night_moving：夜间有人移动</li><li>crowd：多人聚集</li><li>person_picking_fruit：有人采摘果实</li><li>person_at_cashier：有人在收银台</li><li>person_climbing_fence：有人翻围墙</li><li>person_carrying_bag：有人携带包裹</li><li>person_entering_farm：人员进入农场</li><li>person_entering_store：人员进入店铺</li><li>person_falling：有人跌倒</li><li>staff_absent：员工离岗</li><li>uniform_abnormal：未穿工服</li><li>using_mobile_phone：使用手机</li><li>smoking：有人吸烟</li><li>knife：有人持刀</li><li>gun：有人持枪</li><li>hurt：有人受伤流血</li><li>fight：有人打架</li><li>door_window_open：门窗被开启</li><li>fireworks：有人燃放烟花爆竹</li><li>no_signal：视频画面异常（无信号等）</li><li>camera_angle_abnormal：摄像头角度异常</li><li>person_motionless：有人且其姿势保持静止</li></ul>
     */
    public $DetectedClassifications;

    /**
     * @var string <p>摘要文本</p>
     */
    public $Summary;

    /**
     * @var string <p>摘要文本（次选语言）</p>
     */
    public $AlternativeSummary;

    /**
     * @var string <p>错误码，可能取值：</p><ul><li><code>DownloadFailed</code>：下载视频/图片文件失败</li><li><code>ReadFailed</code>：读取视频/图片文件失败</li></ul>
     */
    public $ErrorCode;

    /**
     * @var string <p>错误消息</p>
     */
    public $ErrorMsg;

    /**
     * @var array <p>生成的关键词列表</p><p>当配置 <code>EnableKeywords</code> 为 true 时返回</p>
     */
    public $Keywords;

    /**
     * @param array $DetectedClassifications <p>识别到的目标类型与事件标签。<br>枚举值：</p><ul><li>person：人</li><li>vehicle：车辆</li><li>cat：猫</li><li>dog：狗</li><li>package：快递包裹</li><li>license_plate：车牌</li><li>fire：火焰</li><li>smoke：烟雾</li><li>delivery_man：快递员/外卖员</li><li>pet：有宠物</li><li>pet_scratching_door：宠物挠门</li><li>pet_barking：宠物吠叫</li><li>pet_damaging：宠物损坏家具</li><li>pet_eating：宠物进食</li><li>person_playing_with_pet：人与宠物玩耍</li><li>pet_close_to_camera：宠物靠近摄像头</li><li>animal_lying：有动物躺/趴在地上</li><li>child：有小孩</li><li>child_near_water：小孩靠近水域</li><li>child_falling：小孩摔倒</li><li>child_climbing_window：小孩攀爬室内窗户</li><li>child_entering_kitchen：小孩进入厨房</li><li>child_playing_danger_item：小孩玩危险物品</li><li>child_writing：小孩写作业</li><li>baby：有婴儿</li><li>baby_crying：婴儿哭闹</li><li>baby_dropping：婴儿跌落床铺</li><li>person_holding_baby：有人抱起婴儿</li><li>baby_rolling：婴儿翻滚</li><li>elderly：有老人</li><li>elderly_falling：老人摔倒</li><li>elderly_eating：老人用餐</li><li>elderly_using_stove：老人使用灶具</li><li>vehicle_parking：车辆停靠</li><li>vehicle_entering：车辆进入</li><li>vehicle_exiting：车辆离开</li><li>person_feeding_animal：有人投喂牲畜</li><li>animal_wild_intrusion：野生动物入侵</li><li>throwing_into_water：有人投掷物品</li><li>loitering_near_water：有人岸边逗留</li><li>fishing：有人钓鱼</li><li>net_fishing：有人撒网</li><li>person_carrying_fishing_gear：有人携带渔具</li><li>person_carrying_object：有人搬运物品</li><li>person_taking_goods：有人拿商品</li><li>person_night_moving：夜间有人移动</li><li>crowd：多人聚集</li><li>person_picking_fruit：有人采摘果实</li><li>person_at_cashier：有人在收银台</li><li>person_climbing_fence：有人翻围墙</li><li>person_carrying_bag：有人携带包裹</li><li>person_entering_farm：人员进入农场</li><li>person_entering_store：人员进入店铺</li><li>person_falling：有人跌倒</li><li>staff_absent：员工离岗</li><li>uniform_abnormal：未穿工服</li><li>using_mobile_phone：使用手机</li><li>smoking：有人吸烟</li><li>knife：有人持刀</li><li>gun：有人持枪</li><li>hurt：有人受伤流血</li><li>fight：有人打架</li><li>door_window_open：门窗被开启</li><li>fireworks：有人燃放烟花爆竹</li><li>no_signal：视频画面异常（无信号等）</li><li>camera_angle_abnormal：摄像头角度异常</li><li>person_motionless：有人且其姿势保持静止</li></ul>
     * @param string $Summary <p>摘要文本</p>
     * @param string $AlternativeSummary <p>摘要文本（次选语言）</p>
     * @param string $ErrorCode <p>错误码，可能取值：</p><ul><li><code>DownloadFailed</code>：下载视频/图片文件失败</li><li><code>ReadFailed</code>：读取视频/图片文件失败</li></ul>
     * @param string $ErrorMsg <p>错误消息</p>
     * @param array $Keywords <p>生成的关键词列表</p><p>当配置 <code>EnableKeywords</code> 为 true 时返回</p>
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
        if (array_key_exists("DetectedClassifications",$param) and $param["DetectedClassifications"] !== null) {
            $this->DetectedClassifications = $param["DetectedClassifications"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("AlternativeSummary",$param) and $param["AlternativeSummary"] !== null) {
            $this->AlternativeSummary = $param["AlternativeSummary"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }
    }
}
