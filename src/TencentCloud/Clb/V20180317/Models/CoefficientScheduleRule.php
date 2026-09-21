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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 峰谷计费配置
 *
 * @method array getWeekdays() 获取<p>1～7，表示周一至周日</p>
 * @method void setWeekdays(array $Weekdays) 设置<p>1～7，表示周一至周日</p>
 * @method string getStartTime() 获取<p>00:00～23:59，固定 UTC+8，窗口左闭</p><p>参数格式：HH:mm</p>
 * @method void setStartTime(string $StartTime) 设置<p>00:00～23:59，固定 UTC+8，窗口左闭</p><p>参数格式：HH:mm</p>
 * @method string getEndTime() 获取<p>大于 StartTime，最大 24:00，窗口右开；跨午夜拆分并调整星期</p><p>参数格式：HH:mm</p>
 * @method void setEndTime(string $EndTime) 设置<p>大于 StartTime，最大 24:00，窗口右开；跨午夜拆分并调整星期</p><p>参数格式：HH:mm</p>
 * @method float getMultiplier() 获取<p>有限非负数，建议最多 6 位小数；0 免费、0.5 半价、1 原价，可大于 1；倍率计算后的价格须在服务支持的数值范围内</p>
 * @method void setMultiplier(float $Multiplier) 设置<p>有限非负数，建议最多 6 位小数；0 免费、0.5 半价、1 原价，可大于 1；倍率计算后的价格须在服务支持的数值范围内</p>
 */
class CoefficientScheduleRule extends AbstractModel
{
    /**
     * @var array <p>1～7，表示周一至周日</p>
     */
    public $Weekdays;

    /**
     * @var string <p>00:00～23:59，固定 UTC+8，窗口左闭</p><p>参数格式：HH:mm</p>
     */
    public $StartTime;

    /**
     * @var string <p>大于 StartTime，最大 24:00，窗口右开；跨午夜拆分并调整星期</p><p>参数格式：HH:mm</p>
     */
    public $EndTime;

    /**
     * @var float <p>有限非负数，建议最多 6 位小数；0 免费、0.5 半价、1 原价，可大于 1；倍率计算后的价格须在服务支持的数值范围内</p>
     */
    public $Multiplier;

    /**
     * @param array $Weekdays <p>1～7，表示周一至周日</p>
     * @param string $StartTime <p>00:00～23:59，固定 UTC+8，窗口左闭</p><p>参数格式：HH:mm</p>
     * @param string $EndTime <p>大于 StartTime，最大 24:00，窗口右开；跨午夜拆分并调整星期</p><p>参数格式：HH:mm</p>
     * @param float $Multiplier <p>有限非负数，建议最多 6 位小数；0 免费、0.5 半价、1 原价，可大于 1；倍率计算后的价格须在服务支持的数值范围内</p>
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
        if (array_key_exists("Weekdays",$param) and $param["Weekdays"] !== null) {
            $this->Weekdays = $param["Weekdays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Multiplier",$param) and $param["Multiplier"] !== null) {
            $this->Multiplier = $param["Multiplier"];
        }
    }
}
