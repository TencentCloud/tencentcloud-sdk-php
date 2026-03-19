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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理集群的网络设置
 *
 * @method boolean getPublicEndpointEnable() 获取公网访问
 * @method void setPublicEndpointEnable(boolean $PublicEndpointEnable) 设置公网访问
 * @method boolean getVpcEndpointEnable() 获取内网访问
 * @method void setVpcEndpointEnable(boolean $VpcEndpointEnable) 设置内网访问
 * @method string getVpcId() 获取vpc内网ID
 * @method void setVpcId(string $VpcId) 设置vpc内网ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 */
class NetworkSetting extends AbstractModel
{
    /**
     * @var boolean 公网访问
     */
    public $PublicEndpointEnable;

    /**
     * @var boolean 内网访问
     */
    public $VpcEndpointEnable;

    /**
     * @var string vpc内网ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @param boolean $PublicEndpointEnable 公网访问
     * @param boolean $VpcEndpointEnable 内网访问
     * @param string $VpcId vpc内网ID
     * @param string $SubnetId 子网ID
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
        if (array_key_exists("PublicEndpointEnable",$param) and $param["PublicEndpointEnable"] !== null) {
            $this->PublicEndpointEnable = $param["PublicEndpointEnable"];
        }

        if (array_key_exists("VpcEndpointEnable",$param) and $param["VpcEndpointEnable"] !== null) {
            $this->VpcEndpointEnable = $param["VpcEndpointEnable"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
