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
 * UpgradePlan请求参数结构体
 *
 * @method string getPlanId() 获取套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method void setPlanId(string $PlanId) 设置套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method string getPlanType() 获取需要升级到的目标套餐版本，取值有：<li> basic：基础版套餐；</li><li> standard：标准版套餐。</li>
 * @method void setPlanType(string $PlanType) 设置需要升级到的目标套餐版本，取值有：<li> basic：基础版套餐；</li><li> standard：标准版套餐。</li>
 * @method string getAutoUseVoucher() 获取是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
 * @method void setAutoUseVoucher(string $AutoUseVoucher) 设置是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
 */
class UpgradePlanRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     */
    public $PlanId;

    /**
     * @var string 需要升级到的目标套餐版本，取值有：<li> basic：基础版套餐；</li><li> standard：标准版套餐。</li>
     */
    public $PlanType;

    /**
     * @var string 是否自动使用代金券，取值有：<li> true：是；</li><li> false：否。</li>不填写使用默认值 false。
     */
    public $AutoUseVoucher;

    /**
     * @param string $PlanId 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     * @param string $PlanType 需要升级到的目标套餐版本，取值有：<li> basic：基础版套餐；</li><li> standard：标准版套餐。</li>
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

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("AutoUseVoucher",$param) and $param["AutoUseVoucher"] !== null) {
            $this->AutoUseVoucher = $param["AutoUseVoucher"];
        }
    }
}
