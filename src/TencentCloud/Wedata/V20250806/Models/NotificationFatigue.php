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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警疲劳告警配置
 *
 * @method integer getNotifyCount() 获取告警次数
 * @method void setNotifyCount(integer $NotifyCount) 设置告警次数
 * @method integer getNotifyInterval() 获取告警间隔，分钟
 * @method void setNotifyInterval(integer $NotifyInterval) 设置告警间隔，分钟
 * @method array getQuietIntervals() 获取免打扰时间，例如示例值
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
每周一、周二的00:00到09:00免打扰
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuietIntervals(array $QuietIntervals) 设置免打扰时间，例如示例值
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
每周一、周二的00:00到09:00免打扰
注意：此字段可能返回 null，表示取不到有效值。
 */
class NotificationFatigue extends AbstractModel
{
    /**
     * @var integer 告警次数
     */
    public $NotifyCount;

    /**
     * @var integer 告警间隔，分钟
     */
    public $NotifyInterval;

    /**
     * @var array 免打扰时间，例如示例值
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
每周一、周二的00:00到09:00免打扰
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuietIntervals;

    /**
     * @param integer $NotifyCount 告警次数
     * @param integer $NotifyInterval 告警间隔，分钟
     * @param array $QuietIntervals 免打扰时间，例如示例值
[{DaysOfWeek: [1, 2], StartTime: "00:00:00", EndTime: "09:00:00"}]	
每周一、周二的00:00到09:00免打扰
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("NotifyCount",$param) and $param["NotifyCount"] !== null) {
            $this->NotifyCount = $param["NotifyCount"];
        }

        if (array_key_exists("NotifyInterval",$param) and $param["NotifyInterval"] !== null) {
            $this->NotifyInterval = $param["NotifyInterval"];
        }

        if (array_key_exists("QuietIntervals",$param) and $param["QuietIntervals"] !== null) {
            $this->QuietIntervals = [];
            foreach ($param["QuietIntervals"] as $key => $value){
                $obj = new AlarmQuietInterval();
                $obj->deserialize($value);
                array_push($this->QuietIntervals, $obj);
            }
        }
    }
}
