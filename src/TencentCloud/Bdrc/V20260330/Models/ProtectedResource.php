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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 受保护资源信息
 *
 * @method string getResourceType() 获取资源类型（与请求 SitePairType 一致，如 DISK/CFS/INSTANCE）
 * @method void setResourceType(string $ResourceType) 设置资源类型（与请求 SitePairType 一致，如 DISK/CFS/INSTANCE）
 * @method array getResourceIdSet() 获取该类型下被保护的源端资源ID列表（DISK:disk-xxx / CFS:cfs-xxx / INSTANCE:ins-xxx）
 * @method void setResourceIdSet(array $ResourceIdSet) 设置该类型下被保护的源端资源ID列表（DISK:disk-xxx / CFS:cfs-xxx / INSTANCE:ins-xxx）
 */
class ProtectedResource extends AbstractModel
{
    /**
     * @var string 资源类型（与请求 SitePairType 一致，如 DISK/CFS/INSTANCE）
     */
    public $ResourceType;

    /**
     * @var array 该类型下被保护的源端资源ID列表（DISK:disk-xxx / CFS:cfs-xxx / INSTANCE:ins-xxx）
     */
    public $ResourceIdSet;

    /**
     * @param string $ResourceType 资源类型（与请求 SitePairType 一致，如 DISK/CFS/INSTANCE）
     * @param array $ResourceIdSet 该类型下被保护的源端资源ID列表（DISK:disk-xxx / CFS:cfs-xxx / INSTANCE:ins-xxx）
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceIdSet",$param) and $param["ResourceIdSet"] !== null) {
            $this->ResourceIdSet = $param["ResourceIdSet"];
        }
    }
}
