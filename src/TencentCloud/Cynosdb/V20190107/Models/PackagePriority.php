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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源包抵扣优先级
 *
 * @method string getPackageId() 获取需要自定义抵扣优先级的资源包
 * @method void setPackageId(string $PackageId) 设置需要自定义抵扣优先级的资源包
 * @method integer getDeductionPriority() 获取自定义的抵扣优先级
 * @method void setDeductionPriority(integer $DeductionPriority) 设置自定义的抵扣优先级
 */
class PackagePriority extends AbstractModel
{
    /**
     * @var string 需要自定义抵扣优先级的资源包
     */
    public $PackageId;

    /**
     * @var integer 自定义的抵扣优先级
     */
    public $DeductionPriority;

    /**
     * @param string $PackageId 需要自定义抵扣优先级的资源包
     * @param integer $DeductionPriority 自定义的抵扣优先级
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

        if (array_key_exists("DeductionPriority",$param) and $param["DeductionPriority"] !== null) {
            $this->DeductionPriority = $param["DeductionPriority"];
        }
    }
}
