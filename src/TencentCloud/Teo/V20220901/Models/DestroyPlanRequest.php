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
 * DestroyPlan请求参数结构体
 *
 * @method string getPlanId() 获取套餐 ID，形如 edgeone-2wdo315m2y4c。
 * @method void setPlanId(string $PlanId) 设置套餐 ID，形如 edgeone-2wdo315m2y4c。
 */
class DestroyPlanRequest extends AbstractModel
{
    /**
     * @var string 套餐 ID，形如 edgeone-2wdo315m2y4c。
     */
    public $PlanId;

    /**
     * @param string $PlanId 套餐 ID，形如 edgeone-2wdo315m2y4c。
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
    }
}
