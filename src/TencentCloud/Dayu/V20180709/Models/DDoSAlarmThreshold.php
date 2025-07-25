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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS告警阈值
 *
 * @method integer getAlarmType() 获取告警阈值类型，1-入流量，2-清洗流量
 * @method void setAlarmType(integer $AlarmType) 设置告警阈值类型，1-入流量，2-清洗流量
 * @method integer getAlarmThreshold() 获取告警阈值，大于0（目前排定的值）
 * @method void setAlarmThreshold(integer $AlarmThreshold) 设置告警阈值，大于0（目前排定的值）
 */
class DDoSAlarmThreshold extends AbstractModel
{
    /**
     * @var integer 告警阈值类型，1-入流量，2-清洗流量
     */
    public $AlarmType;

    /**
     * @var integer 告警阈值，大于0（目前排定的值）
     */
    public $AlarmThreshold;

    /**
     * @param integer $AlarmType 告警阈值类型，1-入流量，2-清洗流量
     * @param integer $AlarmThreshold 告警阈值，大于0（目前排定的值）
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
        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }
    }
}
