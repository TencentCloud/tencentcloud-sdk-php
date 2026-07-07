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
 * 加速地域信息
 *
 * @method string getAccelerateRegion() 获取<p>加速地域。</p>
 * @method void setAccelerateRegion(string $AccelerateRegion) 设置<p>加速地域。</p>
 * @method integer getBandwidth() 获取<p>带宽。</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>带宽。</p>
 * @method string getIspType() 获取<p>支持&#39;BGP&#39;, &#39;QUALITY_BGP&#39;, &#39;STATIC_IP&#39;，默认BGP。</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>STATIC_IP： 三网</li><li>QUALITY_BGP： 精品BGP</li></ul>
 * @method void setIspType(string $IspType) 设置<p>支持&#39;BGP&#39;, &#39;QUALITY_BGP&#39;, &#39;STATIC_IP&#39;，默认BGP。</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>STATIC_IP： 三网</li><li>QUALITY_BGP： 精品BGP</li></ul>
 * @method string getIpVersion() 获取<p>仅支持IPv4，默认是IPv4。</p>
 * @method void setIpVersion(string $IpVersion) 设置<p>仅支持IPv4，默认是IPv4。</p>
 * @method string getAcceleratorAreaId() 获取<p>加速地域ID。</p>
 * @method void setAcceleratorAreaId(string $AcceleratorAreaId) 设置<p>加速地域ID。</p>
 * @method array getIpAddress() 获取<p>IP。</p>
 * @method void setIpAddress(array $IpAddress) 设置<p>IP。</p>
 * @method array getIpAddressInfoSet() 获取<p>IP信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddressInfoSet(array $IpAddressInfoSet) 设置<p>IP信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AcceleratorAreas extends AbstractModel
{
    /**
     * @var string <p>加速地域。</p>
     */
    public $AccelerateRegion;

    /**
     * @var integer <p>带宽。</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>支持&#39;BGP&#39;, &#39;QUALITY_BGP&#39;, &#39;STATIC_IP&#39;，默认BGP。</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>STATIC_IP： 三网</li><li>QUALITY_BGP： 精品BGP</li></ul>
     */
    public $IspType;

    /**
     * @var string <p>仅支持IPv4，默认是IPv4。</p>
     */
    public $IpVersion;

    /**
     * @var string <p>加速地域ID。</p>
     */
    public $AcceleratorAreaId;

    /**
     * @var array <p>IP。</p>
     */
    public $IpAddress;

    /**
     * @var array <p>IP信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddressInfoSet;

    /**
     * @param string $AccelerateRegion <p>加速地域。</p>
     * @param integer $Bandwidth <p>带宽。</p>
     * @param string $IspType <p>支持&#39;BGP&#39;, &#39;QUALITY_BGP&#39;, &#39;STATIC_IP&#39;，默认BGP。</p><p>枚举值：</p><ul><li>BGP： BGP</li><li>STATIC_IP： 三网</li><li>QUALITY_BGP： 精品BGP</li></ul>
     * @param string $IpVersion <p>仅支持IPv4，默认是IPv4。</p>
     * @param string $AcceleratorAreaId <p>加速地域ID。</p>
     * @param array $IpAddress <p>IP。</p>
     * @param array $IpAddressInfoSet <p>IP信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("AcceleratorAreaId",$param) and $param["AcceleratorAreaId"] !== null) {
            $this->AcceleratorAreaId = $param["AcceleratorAreaId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("IpAddressInfoSet",$param) and $param["IpAddressInfoSet"] !== null) {
            $this->IpAddressInfoSet = [];
            foreach ($param["IpAddressInfoSet"] as $key => $value){
                $obj = new IpAddressInfoSet();
                $obj->deserialize($value);
                array_push($this->IpAddressInfoSet, $obj);
            }
        }
    }
}
