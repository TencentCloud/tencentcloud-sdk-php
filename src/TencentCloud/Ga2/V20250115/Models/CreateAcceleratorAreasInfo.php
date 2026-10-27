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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建加速地域信息
 *
 * @method string getAccelerateRegion() 获取<p>加速地域</p>
 * @method void setAccelerateRegion(string $AccelerateRegion) 设置<p>加速地域</p>
 * @method integer getBandwidth() 获取<p>带宽</p><p>单位：Mbps</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>带宽</p><p>单位：Mbps</p>
 * @method string getIspType() 获取<p>公网质量类型</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>QUALITY_BGP： 精品BGP</li><li>STATIC_IP： 三网</li></ul><p>默认值：BGP</p>
 * @method void setIspType(string $IspType) 设置<p>公网质量类型</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>QUALITY_BGP： 精品BGP</li><li>STATIC_IP： 三网</li></ul><p>默认值：BGP</p>
 * @method string getIpVersion() 获取<p>IP 地址协议</p><p>枚举值：</p><ul><li>IPv4： IPv4</li></ul><p>默认值：IPv4</p>
 * @method void setIpVersion(string $IpVersion) 设置<p>IP 地址协议</p><p>枚举值：</p><ul><li>IPv4： IPv4</li></ul><p>默认值：IPv4</p>
 */
class CreateAcceleratorAreasInfo extends AbstractModel
{
    /**
     * @var string <p>加速地域</p>
     */
    public $AccelerateRegion;

    /**
     * @var integer <p>带宽</p><p>单位：Mbps</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>公网质量类型</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>QUALITY_BGP： 精品BGP</li><li>STATIC_IP： 三网</li></ul><p>默认值：BGP</p>
     */
    public $IspType;

    /**
     * @var string <p>IP 地址协议</p><p>枚举值：</p><ul><li>IPv4： IPv4</li></ul><p>默认值：IPv4</p>
     */
    public $IpVersion;

    /**
     * @param string $AccelerateRegion <p>加速地域</p>
     * @param integer $Bandwidth <p>带宽</p><p>单位：Mbps</p>
     * @param string $IspType <p>公网质量类型</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>QUALITY_BGP： 精品BGP</li><li>STATIC_IP： 三网</li></ul><p>默认值：BGP</p>
     * @param string $IpVersion <p>IP 地址协议</p><p>枚举值：</p><ul><li>IPv4： IPv4</li></ul><p>默认值：IPv4</p>
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
        if (array_key_exists("AccelerateRegion",$param) and $param["AccelerateRegion"] !== null) {
            $this->AccelerateRegion = $param["AccelerateRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IspType",$param) and $param["IspType"] !== null) {
            $this->IspType = $param["IspType"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }
    }
}
