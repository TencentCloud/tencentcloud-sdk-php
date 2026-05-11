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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙串行地域带宽分配情况
 *
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取分配带宽值 单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置分配带宽值 单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticSwitch() 获取弹性开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置弹性开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBandwidth() 获取弹性带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置弹性带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInFlowMax() 获取七天入向峰值带宽，单位bps
 * @method void setInFlowMax(integer $InFlowMax) 设置七天入向峰值带宽，单位bps
 * @method integer getOutFlowMax() 获取七天出向峰值带宽，单位bps
 * @method void setOutFlowMax(integer $OutFlowMax) 设置七天出向峰值带宽，单位bps
 */
class SerialRegionInfo extends AbstractModel
{
    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 分配带宽值 单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 弹性开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticSwitch;

    /**
     * @var integer 弹性带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBandwidth;

    /**
     * @var integer 七天入向峰值带宽，单位bps
     */
    public $InFlowMax;

    /**
     * @var integer 七天出向峰值带宽，单位bps
     */
    public $OutFlowMax;

    /**
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 分配带宽值 单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticSwitch 弹性开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBandwidth 弹性带宽上限，单位Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InFlowMax 七天入向峰值带宽，单位bps
     * @param integer $OutFlowMax 七天出向峰值带宽，单位bps
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("ElasticSwitch",$param) and $param["ElasticSwitch"] !== null) {
            $this->ElasticSwitch = $param["ElasticSwitch"];
        }

        if (array_key_exists("ElasticBandwidth",$param) and $param["ElasticBandwidth"] !== null) {
            $this->ElasticBandwidth = $param["ElasticBandwidth"];
        }

        if (array_key_exists("InFlowMax",$param) and $param["InFlowMax"] !== null) {
            $this->InFlowMax = $param["InFlowMax"];
        }

        if (array_key_exists("OutFlowMax",$param) and $param["OutFlowMax"] !== null) {
            $this->OutFlowMax = $param["OutFlowMax"];
        }
    }
}
