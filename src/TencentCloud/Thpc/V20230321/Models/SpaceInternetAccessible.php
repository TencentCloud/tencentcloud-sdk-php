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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了工作空间的公网可访问性，声明了工作空间的公网使用计费模式，最大带宽等
 *
 * @method string getInternetChargeType() 获取网络计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetChargeType(string $InternetChargeType) 设置网络计费类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取公网出带宽上限，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网出带宽上限，默认为0
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublicIpAssigned() 获取是否分配公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicIpAssigned(boolean $PublicIpAssigned) 设置是否分配公网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBandwidthPackageId() 获取带宽包ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpaceInternetAccessible extends AbstractModel
{
    /**
     * @var string 网络计费类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetChargeType;

    /**
     * @var integer 公网出带宽上限，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var boolean 是否分配公网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicIpAssigned;

    /**
     * @var string 带宽包ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthPackageId;

    /**
     * @param string $InternetChargeType 网络计费类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut 公网出带宽上限，默认为0
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PublicIpAssigned 是否分配公网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BandwidthPackageId 带宽包ID
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
        if (array_key_exists("InternetChargeType",$param) and $param["InternetChargeType"] !== null) {
            $this->InternetChargeType = $param["InternetChargeType"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("PublicIpAssigned",$param) and $param["PublicIpAssigned"] !== null) {
            $this->PublicIpAssigned = $param["PublicIpAssigned"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
