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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc子网信息
 *
 * @method string getVpcId() 获取vpc id
 * @method void setVpcId(string $VpcId) 设置vpc id
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getUsedCluster() 获取应用的集群；可以是集群id,也可以是All
 * @method void setUsedCluster(string $UsedCluster) 设置应用的集群；可以是集群id,也可以是All
 * @method string getCIDR() 获取cidr，只有当IsDirectConnect为true时才生效
 * @method void setCIDR(string $CIDR) 设置cidr，只有当IsDirectConnect为true时才生效
 * @method boolean getIsDirectConnect() 获取是否为专线接入场景
 * @method void setIsDirectConnect(boolean $IsDirectConnect) 设置是否为专线接入场景
 */
class SubnetInfo extends AbstractModel
{
    /**
     * @var string vpc id
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 应用的集群；可以是集群id,也可以是All
     */
    public $UsedCluster;

    /**
     * @var string cidr，只有当IsDirectConnect为true时才生效
     */
    public $CIDR;

    /**
     * @var boolean 是否为专线接入场景
     */
    public $IsDirectConnect;

    /**
     * @param string $VpcId vpc id
     * @param string $SubnetId 子网ID
     * @param string $UsedCluster 应用的集群；可以是集群id,也可以是All
     * @param string $CIDR cidr，只有当IsDirectConnect为true时才生效
     * @param boolean $IsDirectConnect 是否为专线接入场景
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("UsedCluster",$param) and $param["UsedCluster"] !== null) {
            $this->UsedCluster = $param["UsedCluster"];
        }

        if (array_key_exists("CIDR",$param) and $param["CIDR"] !== null) {
            $this->CIDR = $param["CIDR"];
        }

        if (array_key_exists("IsDirectConnect",$param) and $param["IsDirectConnect"] !== null) {
            $this->IsDirectConnect = $param["IsDirectConnect"];
        }
    }
}
