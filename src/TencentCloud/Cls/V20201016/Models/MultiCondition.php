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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多触发条件。
 *
 * @method string getCondition() 获取触发条件。
 * @method void setCondition(string $Condition) 设置触发条件。
 * @method integer getAlarmLevel() 获取告警级别。0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。

- 不填则默认为0。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警级别。0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。

- 不填则默认为0。
 */
class MultiCondition extends AbstractModel
{
    /**
     * @var string 触发条件。
     */
    public $Condition;

    /**
     * @var integer 告警级别。0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。

- 不填则默认为0。
     */
    public $AlarmLevel;

    /**
     * @param string $Condition 触发条件。
     * @param integer $AlarmLevel 告警级别。0:警告(Warn); 1:提醒(Info); 2:紧急 (Critical)。

- 不填则默认为0。
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }
    }
}
