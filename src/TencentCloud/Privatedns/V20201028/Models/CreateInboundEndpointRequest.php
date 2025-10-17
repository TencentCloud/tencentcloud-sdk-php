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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInboundEndpoint请求参数结构体
 *
 * @method string getEndpointName() 获取名称
 * @method void setEndpointName(string $EndpointName) 设置名称
 * @method string getEndpointRegion() 获取地域
 * @method void setEndpointRegion(string $EndpointRegion) 设置地域
 * @method string getEndpointVpc() 获取vpcid
 * @method void setEndpointVpc(string $EndpointVpc) 设置vpcid
 * @method array getSubnetIp() 获取子网信息
 * @method void setSubnetIp(array $SubnetIp) 设置子网信息
 */
class CreateInboundEndpointRequest extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $EndpointName;

    /**
     * @var string 地域
     */
    public $EndpointRegion;

    /**
     * @var string vpcid
     */
    public $EndpointVpc;

    /**
     * @var array 子网信息
     */
    public $SubnetIp;

    /**
     * @param string $EndpointName 名称
     * @param string $EndpointRegion 地域
     * @param string $EndpointVpc vpcid
     * @param array $SubnetIp 子网信息
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
        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("EndpointRegion",$param) and $param["EndpointRegion"] !== null) {
            $this->EndpointRegion = $param["EndpointRegion"];
        }

        if (array_key_exists("EndpointVpc",$param) and $param["EndpointVpc"] !== null) {
            $this->EndpointVpc = $param["EndpointVpc"];
        }

        if (array_key_exists("SubnetIp",$param) and $param["SubnetIp"] !== null) {
            $this->SubnetIp = [];
            foreach ($param["SubnetIp"] as $key => $value){
                $obj = new SubnetIpInfo();
                $obj->deserialize($value);
                array_push($this->SubnetIp, $obj);
            }
        }
    }
}
