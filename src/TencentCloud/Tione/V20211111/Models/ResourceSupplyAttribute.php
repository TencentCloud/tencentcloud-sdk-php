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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源供应属性
 *
 * @method string getSupplyType() 获取<p>资源供应类型。TIDE:潮汐;SPOT:竞价;空:常规按量后付费</p>
 * @method void setSupplyType(string $SupplyType) 设置<p>资源供应类型。TIDE:潮汐;SPOT:竞价;空:常规按量后付费</p>
 * @method string getClusterType() 获取<p>集群类型</p><p>枚举值：</p><ul><li>DEFAULT： 默认集群</li><li>THIRD： 第三方集群</li></ul><p>默认值：DEFAULT</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p><p>枚举值：</p><ul><li>DEFAULT： 默认集群</li><li>THIRD： 第三方集群</li></ul><p>默认值：DEFAULT</p>
 */
class ResourceSupplyAttribute extends AbstractModel
{
    /**
     * @var string <p>资源供应类型。TIDE:潮汐;SPOT:竞价;空:常规按量后付费</p>
     */
    public $SupplyType;

    /**
     * @var string <p>集群类型</p><p>枚举值：</p><ul><li>DEFAULT： 默认集群</li><li>THIRD： 第三方集群</li></ul><p>默认值：DEFAULT</p>
     */
    public $ClusterType;

    /**
     * @param string $SupplyType <p>资源供应类型。TIDE:潮汐;SPOT:竞价;空:常规按量后付费</p>
     * @param string $ClusterType <p>集群类型</p><p>枚举值：</p><ul><li>DEFAULT： 默认集群</li><li>THIRD： 第三方集群</li></ul><p>默认值：DEFAULT</p>
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
        if (array_key_exists("SupplyType",$param) and $param["SupplyType"] !== null) {
            $this->SupplyType = $param["SupplyType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
