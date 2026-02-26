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
 * ModifyEnvPlan请求参数结构体
 *
 * @method string getEnvId() 获取所需变更套餐的环境ID
 * @method void setEnvId(string $EnvId) 设置所需变更套餐的环境ID
 * @method string getPackageId() 获取目标套餐Id。
对于云开发环境套餐，可通过 [DescribeBaasPackageList](https://cloud.tencent.com/document/product/876/78167) 接口获取，对应其出参的PackageName
 * @method void setPackageId(string $PackageId) 设置目标套餐Id。
对于云开发环境套餐，可通过 [DescribeBaasPackageList](https://cloud.tencent.com/document/product/876/78167) 接口获取，对应其出参的PackageName
 * @method boolean getAutoVoucher() 获取是否自动选择代金券支付。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动选择代金券支付。
 */
class ModifyEnvPlanRequest extends AbstractModel
{
    /**
     * @var string 所需变更套餐的环境ID
     */
    public $EnvId;

    /**
     * @var string 目标套餐Id。
对于云开发环境套餐，可通过 [DescribeBaasPackageList](https://cloud.tencent.com/document/product/876/78167) 接口获取，对应其出参的PackageName
     */
    public $PackageId;

    /**
     * @var boolean 是否自动选择代金券支付。
     */
    public $AutoVoucher;

    /**
     * @param string $EnvId 所需变更套餐的环境ID
     * @param string $PackageId 目标套餐Id。
对于云开发环境套餐，可通过 [DescribeBaasPackageList](https://cloud.tencent.com/document/product/876/78167) 接口获取，对应其出参的PackageName
     * @param boolean $AutoVoucher 是否自动选择代金券支付。
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }
    }
}
