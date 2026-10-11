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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 周期执行启动配置
 *
 * @method string getPeriodType() 获取<p>选择的周期类型</p><p>枚举值：</p><ul><li>DAY： 每天执行 </li><li>WEEK： 每周执行</li><li>MONTH： 每月执行</li></ul>
 * @method void setPeriodType(string $PeriodType) 设置<p>选择的周期类型</p><p>枚举值：</p><ul><li>DAY： 每天执行 </li><li>WEEK： 每周执行</li><li>MONTH： 每月执行</li></ul>
 * @method integer getStartWeekday() 获取<p>选择每周执行时必填，需要选择周几,0-6 分别是周日到周六</p><p>取值范围：[0, 6]</p><p>默认值：0</p>
 * @method void setStartWeekday(integer $StartWeekday) 设置<p>选择每周执行时必填，需要选择周几,0-6 分别是周日到周六</p><p>取值范围：[0, 6]</p><p>默认值：0</p>
 * @method integer getStartDate() 获取<p>选择每月执行时必填，1-28日选择一天</p><p>取值范围：[1, 28]</p><p>默认值：1</p>
 * @method void setStartDate(integer $StartDate) 设置<p>选择每月执行时必填，1-28日选择一天</p><p>取值范围：[1, 28]</p><p>默认值：1</p>
 * @method integer getStartMinute() 获取<p>周期中的时间点，取值0~59</p><p>取值范围：[0, 59]</p>
 * @method void setStartMinute(integer $StartMinute) 设置<p>周期中的时间点，取值0~59</p><p>取值范围：[0, 59]</p>
 * @method integer getStartHour() 获取<p>24小时周期开始的小时数，取值0~23</p><p>取值范围：[0, 23]</p><p>默认值：1</p>
 * @method void setStartHour(integer $StartHour) 设置<p>24小时周期开始的小时数，取值0~23</p><p>取值范围：[0, 23]</p><p>默认值：1</p>
 */
class ExecutePeriodAttribute extends AbstractModel
{
    /**
     * @var string <p>选择的周期类型</p><p>枚举值：</p><ul><li>DAY： 每天执行 </li><li>WEEK： 每周执行</li><li>MONTH： 每月执行</li></ul>
     */
    public $PeriodType;

    /**
     * @var integer <p>选择每周执行时必填，需要选择周几,0-6 分别是周日到周六</p><p>取值范围：[0, 6]</p><p>默认值：0</p>
     */
    public $StartWeekday;

    /**
     * @var integer <p>选择每月执行时必填，1-28日选择一天</p><p>取值范围：[1, 28]</p><p>默认值：1</p>
     */
    public $StartDate;

    /**
     * @var integer <p>周期中的时间点，取值0~59</p><p>取值范围：[0, 59]</p>
     */
    public $StartMinute;

    /**
     * @var integer <p>24小时周期开始的小时数，取值0~23</p><p>取值范围：[0, 23]</p><p>默认值：1</p>
     */
    public $StartHour;

    /**
     * @param string $PeriodType <p>选择的周期类型</p><p>枚举值：</p><ul><li>DAY： 每天执行 </li><li>WEEK： 每周执行</li><li>MONTH： 每月执行</li></ul>
     * @param integer $StartWeekday <p>选择每周执行时必填，需要选择周几,0-6 分别是周日到周六</p><p>取值范围：[0, 6]</p><p>默认值：0</p>
     * @param integer $StartDate <p>选择每月执行时必填，1-28日选择一天</p><p>取值范围：[1, 28]</p><p>默认值：1</p>
     * @param integer $StartMinute <p>周期中的时间点，取值0~59</p><p>取值范围：[0, 59]</p>
     * @param integer $StartHour <p>24小时周期开始的小时数，取值0~23</p><p>取值范围：[0, 23]</p><p>默认值：1</p>
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
        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("StartWeekday",$param) and $param["StartWeekday"] !== null) {
            $this->StartWeekday = $param["StartWeekday"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("StartMinute",$param) and $param["StartMinute"] !== null) {
            $this->StartMinute = $param["StartMinute"];
        }

        if (array_key_exists("StartHour",$param) and $param["StartHour"] !== null) {
            $this->StartHour = $param["StartHour"];
        }
    }
}
