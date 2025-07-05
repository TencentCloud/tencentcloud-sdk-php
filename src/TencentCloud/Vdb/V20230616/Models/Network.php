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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络信息
 *
 * @method string getVpcId() 获取VpcId(VPC网络下有效)
 * @method void setVpcId(string $VpcId) 设置VpcId(VPC网络下有效)
 * @method string getSubnetId() 获取子网Id(VPC网络下有效)。
 * @method void setSubnetId(string $SubnetId) 设置子网Id(VPC网络下有效)。
 * @method string getVip() 获取内网访问IP。
 * @method void setVip(string $Vip) 设置内网访问IP。
 * @method integer getPort() 获取内网访问Port。
 * @method void setPort(integer $Port) 设置内网访问Port。
 * @method integer getPreserveDuration() 获取旧 ip 保留时长，单位天
 * @method void setPreserveDuration(integer $PreserveDuration) 设置旧 ip 保留时长，单位天
 * @method string getExpireTime() 获取旧 ip 到期时间
 * @method void setExpireTime(string $ExpireTime) 设置旧 ip 到期时间
 */
class Network extends AbstractModel
{
    /**
     * @var string VpcId(VPC网络下有效)
     */
    public $VpcId;

    /**
     * @var string 子网Id(VPC网络下有效)。
     */
    public $SubnetId;

    /**
     * @var string 内网访问IP。
     */
    public $Vip;

    /**
     * @var integer 内网访问Port。
     */
    public $Port;

    /**
     * @var integer 旧 ip 保留时长，单位天
     */
    public $PreserveDuration;

    /**
     * @var string 旧 ip 到期时间
     */
    public $ExpireTime;

    /**
     * @param string $VpcId VpcId(VPC网络下有效)
     * @param string $SubnetId 子网Id(VPC网络下有效)。
     * @param string $Vip 内网访问IP。
     * @param integer $Port 内网访问Port。
     * @param integer $PreserveDuration 旧 ip 保留时长，单位天
     * @param string $ExpireTime 旧 ip 到期时间
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PreserveDuration",$param) and $param["PreserveDuration"] !== null) {
            $this->PreserveDuration = $param["PreserveDuration"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
