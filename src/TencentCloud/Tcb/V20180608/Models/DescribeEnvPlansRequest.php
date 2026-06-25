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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvPlans请求参数结构体
 *
 * @method string getPackageId() 获取<p>套餐英文标识，不指定则返回所有可售卖套餐</p><p>枚举值：</p><ul><li>baas_integration： 集成版</li><li>baas_personal： 个人版</li><li>baas_pf_standard： 标准版</li><li>baas_pf_enterprise： 企业版</li><li>baas_pf_enterprise_senior： 企业高级版</li></ul>
 * @method void setPackageId(string $PackageId) 设置<p>套餐英文标识，不指定则返回所有可售卖套餐</p><p>枚举值：</p><ul><li>baas_integration： 集成版</li><li>baas_personal： 个人版</li><li>baas_pf_standard： 标准版</li><li>baas_pf_enterprise： 企业版</li><li>baas_pf_enterprise_senior： 企业高级版</li></ul>
 */
class DescribeEnvPlansRequest extends AbstractModel
{
    /**
     * @var string <p>套餐英文标识，不指定则返回所有可售卖套餐</p><p>枚举值：</p><ul><li>baas_integration： 集成版</li><li>baas_personal： 个人版</li><li>baas_pf_standard： 标准版</li><li>baas_pf_enterprise： 企业版</li><li>baas_pf_enterprise_senior： 企业高级版</li></ul>
     */
    public $PackageId;

    /**
     * @param string $PackageId <p>套餐英文标识，不指定则返回所有可售卖套餐</p><p>枚举值：</p><ul><li>baas_integration： 集成版</li><li>baas_personal： 个人版</li><li>baas_pf_standard： 标准版</li><li>baas_pf_enterprise： 企业版</li><li>baas_pf_enterprise_senior： 企业高级版</li></ul>
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }
    }
}
