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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddClusterCIDR请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getClusterCIDRs() 获取增加的ClusterCIDR
 * @method void setClusterCIDRs(array $ClusterCIDRs) 设置增加的ClusterCIDR
 * @method boolean getIgnoreClusterCIDRConflict() 获取是否忽略ClusterCIDR与VPC路由表的冲突
 * @method void setIgnoreClusterCIDRConflict(boolean $IgnoreClusterCIDRConflict) 设置是否忽略ClusterCIDR与VPC路由表的冲突
 */
class AddClusterCIDRRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 增加的ClusterCIDR
     */
    public $ClusterCIDRs;

    /**
     * @var boolean 是否忽略ClusterCIDR与VPC路由表的冲突
     */
    public $IgnoreClusterCIDRConflict;

    /**
     * @param string $ClusterId 集群ID
     * @param array $ClusterCIDRs 增加的ClusterCIDR
     * @param boolean $IgnoreClusterCIDRConflict 是否忽略ClusterCIDR与VPC路由表的冲突
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterCIDRs",$param) and $param["ClusterCIDRs"] !== null) {
            $this->ClusterCIDRs = $param["ClusterCIDRs"];
        }

        if (array_key_exists("IgnoreClusterCIDRConflict",$param) and $param["IgnoreClusterCIDRConflict"] !== null) {
            $this->IgnoreClusterCIDRConflict = $param["IgnoreClusterCIDRConflict"];
        }
    }
}
