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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckEdgeClusterCIDR请求参数结构体
 *
 * @method string getVpcId() 获取集群的vpc-id
 * @method void setVpcId(string $VpcId) 设置集群的vpc-id
 * @method string getPodCIDR() 获取集群的pod CIDR
 * @method void setPodCIDR(string $PodCIDR) 设置集群的pod CIDR
 * @method string getServiceCIDR() 获取集群的service CIDR
 * @method void setServiceCIDR(string $ServiceCIDR) 设置集群的service CIDR
 */
class CheckEdgeClusterCIDRRequest extends AbstractModel
{
    /**
     * @var string 集群的vpc-id
     */
    public $VpcId;

    /**
     * @var string 集群的pod CIDR
     */
    public $PodCIDR;

    /**
     * @var string 集群的service CIDR
     */
    public $ServiceCIDR;

    /**
     * @param string $VpcId 集群的vpc-id
     * @param string $PodCIDR 集群的pod CIDR
     * @param string $ServiceCIDR 集群的service CIDR
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

        if (array_key_exists("PodCIDR",$param) and $param["PodCIDR"] !== null) {
            $this->PodCIDR = $param["PodCIDR"];
        }

        if (array_key_exists("ServiceCIDR",$param) and $param["ServiceCIDR"] !== null) {
            $this->ServiceCIDR = $param["ServiceCIDR"];
        }
    }
}
