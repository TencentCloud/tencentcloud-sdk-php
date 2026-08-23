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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像仓库扫描过滤器
 *
 * @method array getRegistryType() 获取<p>仓库类型</p>
 * @method void setRegistryType(array $RegistryType) 设置<p>仓库类型</p>
 * @method array getNamespace() 获取<p>仓库命名空间</p>
 * @method void setNamespace(array $Namespace) 设置<p>仓库命名空间</p>
 */
class ImageScanRegistryFilter extends AbstractModel
{
    /**
     * @var array <p>仓库类型</p>
     */
    public $RegistryType;

    /**
     * @var array <p>仓库命名空间</p>
     */
    public $Namespace;

    /**
     * @param array $RegistryType <p>仓库类型</p>
     * @param array $Namespace <p>仓库命名空间</p>
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
        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
