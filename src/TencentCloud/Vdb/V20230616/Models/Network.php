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
 * @method string getVpcId() 获取<p>VpcId(VPC网络下有效)</p>
 * @method void setVpcId(string $VpcId) 设置<p>VpcId(VPC网络下有效)</p>
 * @method string getSubnetId() 获取<p>子网Id(VPC网络下有效)。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网Id(VPC网络下有效)。</p>
 * @method string getVip() 获取<p>内网访问IP。</p>
 * @method void setVip(string $Vip) 设置<p>内网访问IP。</p>
 * @method integer getPort() 获取<p>内网访问Port。</p>
 * @method void setPort(integer $Port) 设置<p>内网访问Port。</p>
 * @method integer getPreserveDuration() 获取<p>旧 ip 保留时长，单位天</p>
 * @method void setPreserveDuration(integer $PreserveDuration) 设置<p>旧 ip 保留时长，单位天</p>
 * @method string getExpireTime() 获取<p>旧 ip 到期时间</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>旧 ip 到期时间</p>
 * @method boolean getIsSSL() 获取<p>是否是ssl网络</p>
 * @method void setIsSSL(boolean $IsSSL) 设置<p>是否是ssl网络</p>
 */
class Network extends AbstractModel
{
    /**
     * @var string <p>VpcId(VPC网络下有效)</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网Id(VPC网络下有效)。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>内网访问IP。</p>
     */
    public $Vip;

    /**
     * @var integer <p>内网访问Port。</p>
     */
    public $Port;

    /**
     * @var integer <p>旧 ip 保留时长，单位天</p>
     */
    public $PreserveDuration;

    /**
     * @var string <p>旧 ip 到期时间</p>
     */
    public $ExpireTime;

    /**
     * @var boolean <p>是否是ssl网络</p>
     */
    public $IsSSL;

    /**
     * @param string $VpcId <p>VpcId(VPC网络下有效)</p>
     * @param string $SubnetId <p>子网Id(VPC网络下有效)。</p>
     * @param string $Vip <p>内网访问IP。</p>
     * @param integer $Port <p>内网访问Port。</p>
     * @param integer $PreserveDuration <p>旧 ip 保留时长，单位天</p>
     * @param string $ExpireTime <p>旧 ip 到期时间</p>
     * @param boolean $IsSSL <p>是否是ssl网络</p>
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

        if (array_key_exists("IsSSL",$param) and $param["IsSSL"] !== null) {
            $this->IsSSL = $param["IsSSL"];
        }
    }
}
