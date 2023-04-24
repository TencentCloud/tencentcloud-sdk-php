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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网（CCN）地域出带宽上限。
 *
 * @method string getSourceRegion() 获取源地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceRegion(string $SourceRegion) 设置源地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestinationRegion() 获取目的地域， 例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinationRegion(string $DestinationRegion) 设置目的地域， 例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidthLimit() 获取出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthLimit(integer $BandwidthLimit) 设置出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CcnRegionBandwidthLimitInfo extends AbstractModel
{
    /**
     * @var string 源地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceRegion;

    /**
     * @var string 目的地域， 例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestinationRegion;

    /**
     * @var integer 出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthLimit;

    /**
     * @param string $SourceRegion 源地域，例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestinationRegion 目的地域， 例如：ap-shanghai
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BandwidthLimit 出带宽上限，单位：Mbps。
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
        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }
    }
}
