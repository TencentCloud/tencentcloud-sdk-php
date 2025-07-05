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
 * 资源包信息
 *
 * @method string getPackageId() 获取资源包的唯一ID
 * @method void setPackageId(string $PackageId) 设置资源包的唯一ID
 * @method string getPackageType() 获取资源包类型：CCU：计算资源包
DISK：存储资源包
 * @method void setPackageType(string $PackageType) 设置资源包类型：CCU：计算资源包
DISK：存储资源包
 * @method integer getDeductionPriority() 获取当前资源包绑定在当前实例下的抵扣优先级
 * @method void setDeductionPriority(integer $DeductionPriority) 设置当前资源包绑定在当前实例下的抵扣优先级
 */
class ResourcePackage extends AbstractModel
{
    /**
     * @var string 资源包的唯一ID
     */
    public $PackageId;

    /**
     * @var string 资源包类型：CCU：计算资源包
DISK：存储资源包
     */
    public $PackageType;

    /**
     * @var integer 当前资源包绑定在当前实例下的抵扣优先级
     */
    public $DeductionPriority;

    /**
     * @param string $PackageId 资源包的唯一ID
     * @param string $PackageType 资源包类型：CCU：计算资源包
DISK：存储资源包
     * @param integer $DeductionPriority 当前资源包绑定在当前实例下的抵扣优先级
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

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("DeductionPriority",$param) and $param["DeductionPriority"] !== null) {
            $this->DeductionPriority = $param["DeductionPriority"];
        }
    }
}
