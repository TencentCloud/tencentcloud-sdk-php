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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预付费套餐计费参数
 *
 * @method integer getPeriod() 获取订阅预付费套餐的周期，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。

不填写使用默认值 1。
 * @method void setPeriod(integer $Period) 设置订阅预付费套餐的周期，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。

不填写使用默认值 1。
 * @method string getRenewFlag() 获取预付费套餐的自动续费标志，取值有：
<li> on：开启自动续费；</li>
<li> off：不开启自动续费。</li>
不填写使用默认值 off，自动续费时，默认续费1个月。
 * @method void setRenewFlag(string $RenewFlag) 设置预付费套餐的自动续费标志，取值有：
<li> on：开启自动续费；</li>
<li> off：不开启自动续费。</li>
不填写使用默认值 off，自动续费时，默认续费1个月。
 */
class PrepaidPlanParam extends AbstractModel
{
    /**
     * @var integer 订阅预付费套餐的周期，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。

不填写使用默认值 1。
     */
    public $Period;

    /**
     * @var string 预付费套餐的自动续费标志，取值有：
<li> on：开启自动续费；</li>
<li> off：不开启自动续费。</li>
不填写使用默认值 off，自动续费时，默认续费1个月。
     */
    public $RenewFlag;

    /**
     * @param integer $Period 订阅预付费套餐的周期，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。

不填写使用默认值 1。
     * @param string $RenewFlag 预付费套餐的自动续费标志，取值有：
<li> on：开启自动续费；</li>
<li> off：不开启自动续费。</li>
不填写使用默认值 off，自动续费时，默认续费1个月。
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
        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
