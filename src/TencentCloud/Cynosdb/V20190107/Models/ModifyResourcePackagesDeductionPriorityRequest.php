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
 * ModifyResourcePackagesDeductionPriority请求参数结构体
 *
 * @method string getPackageType() 获取需要修改优先级的资源包类型，CCU：计算资源包，DISK：存储资源包
 * @method void setPackageType(string $PackageType) 设置需要修改优先级的资源包类型，CCU：计算资源包，DISK：存储资源包
 * @method string getClusterId() 获取修改后的抵扣优先级对于哪个cynos资源生效
 * @method void setClusterId(string $ClusterId) 设置修改后的抵扣优先级对于哪个cynos资源生效
 * @method array getDeductionPriorities() 获取资源包抵扣优先级
 * @method void setDeductionPriorities(array $DeductionPriorities) 设置资源包抵扣优先级
 */
class ModifyResourcePackagesDeductionPriorityRequest extends AbstractModel
{
    /**
     * @var string 需要修改优先级的资源包类型，CCU：计算资源包，DISK：存储资源包
     */
    public $PackageType;

    /**
     * @var string 修改后的抵扣优先级对于哪个cynos资源生效
     */
    public $ClusterId;

    /**
     * @var array 资源包抵扣优先级
     */
    public $DeductionPriorities;

    /**
     * @param string $PackageType 需要修改优先级的资源包类型，CCU：计算资源包，DISK：存储资源包
     * @param string $ClusterId 修改后的抵扣优先级对于哪个cynos资源生效
     * @param array $DeductionPriorities 资源包抵扣优先级
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DeductionPriorities",$param) and $param["DeductionPriorities"] !== null) {
            $this->DeductionPriorities = [];
            foreach ($param["DeductionPriorities"] as $key => $value){
                $obj = new PackagePriority();
                $obj->deserialize($value);
                array_push($this->DeductionPriorities, $obj);
            }
        }
    }
}
