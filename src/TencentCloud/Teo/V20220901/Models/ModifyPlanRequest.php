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
 * ModifyPlan请求参数结构体
 *
 * @method string getPlanId() 获取套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method void setPlanId(string $PlanId) 设置套餐 ID，形如 edgeone-2unuvzjmmn2q。
 * @method RenewFlag getRenewFlag() 获取预付费套餐自动续费配置。若开启了自动续费，则会在套餐到期前一天自动续费，仅支持个人版，基础版，标准版套餐。不填写表示保持原有配置。
 * @method void setRenewFlag(RenewFlag $RenewFlag) 设置预付费套餐自动续费配置。若开启了自动续费，则会在套餐到期前一天自动续费，仅支持个人版，基础版，标准版套餐。不填写表示保持原有配置。
 */
class ModifyPlanRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     */
    public $PlanId;

    /**
     * @var RenewFlag 预付费套餐自动续费配置。若开启了自动续费，则会在套餐到期前一天自动续费，仅支持个人版，基础版，标准版套餐。不填写表示保持原有配置。
     */
    public $RenewFlag;

    /**
     * @param string $PlanId 套餐 ID，形如 edgeone-2unuvzjmmn2q。
     * @param RenewFlag $RenewFlag 预付费套餐自动续费配置。若开启了自动续费，则会在套餐到期前一天自动续费，仅支持个人版，基础版，标准版套餐。不填写表示保持原有配置。
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = new RenewFlag();
            $this->RenewFlag->deserialize($param["RenewFlag"]);
        }
    }
}
