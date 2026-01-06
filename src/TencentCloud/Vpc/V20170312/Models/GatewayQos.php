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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关流控带宽信息
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getIpAddress() 获取云服务器内网IP。
 * @method void setIpAddress(string $IpAddress) 设置云服务器内网IP。
 * @method integer getBandwidth() 获取网关流控出方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
 * @method void setBandwidth(integer $Bandwidth) 设置网关流控出方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getInBandwidth() 获取网关流控入方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
 * @method void setInBandwidth(integer $InBandwidth) 设置网关流控入方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
 */
class GatewayQos extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 云服务器内网IP。
     */
    public $IpAddress;

    /**
     * @var integer 网关流控出方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
     */
    public $Bandwidth;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 网关流控入方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
     */
    public $InBandwidth;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $IpAddress 云服务器内网IP。
     * @param integer $Bandwidth 网关流控出方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
     * @param string $CreateTime 创建时间。
     * @param integer $InBandwidth 网关流控入方向带宽值，当值为-1时，代表未限速；当值大于等于0时，限速带宽上限为返回值。
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

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InBandwidth",$param) and $param["InBandwidth"] !== null) {
            $this->InBandwidth = $param["InBandwidth"];
        }
    }
}
