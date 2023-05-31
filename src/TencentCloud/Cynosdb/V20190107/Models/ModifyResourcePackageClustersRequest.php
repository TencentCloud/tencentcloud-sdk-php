<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ModifyResourcePackageClusters请求参数结构体
 *
 * @method string getPackageId() 获取资源包唯一ID
 * @method void setPackageId(string $PackageId) 设置资源包唯一ID
 * @method array getBindClusterIds() 获取需要建立绑定关系的集群ID
 * @method void setBindClusterIds(array $BindClusterIds) 设置需要建立绑定关系的集群ID
 * @method array getUnbindClusterIds() 获取需要解除绑定关系的集群ID
 * @method void setUnbindClusterIds(array $UnbindClusterIds) 设置需要解除绑定关系的集群ID
 */
class ModifyResourcePackageClustersRequest extends AbstractModel
{
    /**
     * @var string 资源包唯一ID
     */
    public $PackageId;

    /**
     * @var array 需要建立绑定关系的集群ID
     */
    public $BindClusterIds;

    /**
     * @var array 需要解除绑定关系的集群ID
     */
    public $UnbindClusterIds;

    /**
     * @param string $PackageId 资源包唯一ID
     * @param array $BindClusterIds 需要建立绑定关系的集群ID
     * @param array $UnbindClusterIds 需要解除绑定关系的集群ID
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

        if (array_key_exists("BindClusterIds",$param) and $param["BindClusterIds"] !== null) {
            $this->BindClusterIds = $param["BindClusterIds"];
        }

        if (array_key_exists("UnbindClusterIds",$param) and $param["UnbindClusterIds"] !== null) {
            $this->UnbindClusterIds = $param["UnbindClusterIds"];
        }
    }
}
