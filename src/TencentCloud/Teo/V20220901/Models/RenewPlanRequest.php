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
 * RenewPlan请求参数结构体
 *
 * @method string getPlanId() 获取套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method void setPlanId(string $PlanId) 设置套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method integer getPeriod() 获取续费套餐的时长，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。
 * @method void setPeriod(integer $Period) 设置续费套餐的时长，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。
 * @method string getAutoUseVoucher() 获取是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
 * @method void setAutoUseVoucher(string $AutoUseVoucher) 设置是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
 */
class RenewPlanRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     */
    public $PlanId;

    /**
     * @var integer 续费套餐的时长，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。
     */
    public $Period;

    /**
     * @var string 是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
     */
    public $AutoUseVoucher;

    /**
     * @param string $PlanId 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     * @param integer $Period 续费套餐的时长，单位：月，取值有：1，2，3，4，5，6，7，8，9，10，11，12，24，36。
     * @param string $AutoUseVoucher 是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("AutoUseVoucher",$param) and $param["AutoUseVoucher"] !== null) {
            $this->AutoUseVoucher = $param["AutoUseVoucher"];
        }
    }
}
