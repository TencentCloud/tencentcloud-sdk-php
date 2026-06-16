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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 联通 DB Custom 集群中容器的网络配置。
 *
 * @method string getVpcId() 获取<p>容器网络的虚拟网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>容器网络的虚拟网络ID</p>
 * @method array getSubnetIds() 获取<p>容器网络的虚拟网络子网列表</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>容器网络的虚拟网络子网列表</p>
 */
class ContainerNetwork extends AbstractModel
{
    /**
     * @var string <p>容器网络的虚拟网络ID</p>
     */
    public $VpcId;

    /**
     * @var array <p>容器网络的虚拟网络子网列表</p>
     */
    public $SubnetIds;

    /**
     * @param string $VpcId <p>容器网络的虚拟网络ID</p>
     * @param array $SubnetIds <p>容器网络的虚拟网络子网列表</p>
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
