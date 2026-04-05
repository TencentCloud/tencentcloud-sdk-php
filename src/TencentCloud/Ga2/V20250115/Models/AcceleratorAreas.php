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
 * @method string getAccelerateRegion() 获取加速地域。
 * @method void setAccelerateRegion(string $AccelerateRegion) 设置加速地域。
 * @method integer getBandwidth() 获取带宽。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽。
 * @method string getIspType() 获取支持'BGP', '三网', '精品'，默认BGP。
 * @method void setIspType(string $IspType) 设置支持'BGP', '三网', '精品'，默认BGP。
 * @method string getIpVersion() 获取仅支持IPv4，默认是IPv4。
 * @method void setIpVersion(string $IpVersion) 设置仅支持IPv4，默认是IPv4。
 * @method string getAcceleratorAreaId() 获取加速地域ID。
 * @method void setAcceleratorAreaId(string $AcceleratorAreaId) 设置加速地域ID。
 * @method array getIpAddress() 获取IP。
 * @method void setIpAddress(array $IpAddress) 设置IP。
 * @method array getIpAddressInfoSet() 获取IP信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpAddressInfoSet(array $IpAddressInfoSet) 设置IP信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AcceleratorAreas extends AbstractModel
{
    /**
     * @var string 加速地域。
     */
    public $AccelerateRegion;

    /**
     * @var integer 带宽。
     */
    public $Bandwidth;

    /**
     * @var string 支持'BGP', '三网', '精品'，默认BGP。
     */
    public $IspType;

    /**
     * @var string 仅支持IPv4，默认是IPv4。
     */
    public $IpVersion;

    /**
     * @var string 加速地域ID。
     */
    public $AcceleratorAreaId;

    /**
     * @var array IP。
     */
    public $IpAddress;

    /**
     * @var array IP信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpAddressInfoSet;

    /**
     * @param string $AccelerateRegion 加速地域。
     * @param integer $Bandwidth 带宽。
     * @param string $IspType 支持'BGP', '三网', '精品'，默认BGP。
     * @param string $IpVersion 仅支持IPv4，默认是IPv4。
     * @param string $AcceleratorAreaId 加速地域ID。
     * @param array $IpAddress IP。
     * @param array $IpAddressInfoSet IP信息。
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
