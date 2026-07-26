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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IntervalSchedule
 *
 * @method string getStartAt() 获取开始时间
 * @method void setStartAt(string $StartAt) 设置开始时间
 * @method integer getUnit() 获取
枚举值:
| 枚举值 | uint |
| --- | --- |
| INTERVAL_UNIT_UNSPECIFIED | 0 |
| INTERVAL_UNIT_HOUR | 1 |
| INTERVAL_UNIT_DAY | 2 |
 * @method void setUnit(integer $Unit) 设置
枚举值:
| 枚举值 | uint |
| --- | --- |
| INTERVAL_UNIT_UNSPECIFIED | 0 |
| INTERVAL_UNIT_HOUR | 1 |
| INTERVAL_UNIT_DAY | 2 |
 * @method integer getValue() 获取值
 * @method void setValue(integer $Value) 设置值
 */
class IntervalSchedule extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartAt;

    /**
     * @var integer 
枚举值:
| 枚举值 | uint |
| --- | --- |
| INTERVAL_UNIT_UNSPECIFIED | 0 |
| INTERVAL_UNIT_HOUR | 1 |
| INTERVAL_UNIT_DAY | 2 |
     */
    public $Unit;

    /**
     * @var integer 值
     */
    public $Value;

    /**
     * @param string $StartAt 开始时间
     * @param integer $Unit 
枚举值:
| 枚举值 | uint |
| --- | --- |
| INTERVAL_UNIT_UNSPECIFIED | 0 |
| INTERVAL_UNIT_HOUR | 1 |
| INTERVAL_UNIT_DAY | 2 |
     * @param integer $Value 值
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
        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
