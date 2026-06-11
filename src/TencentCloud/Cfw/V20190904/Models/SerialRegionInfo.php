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
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取<p>分配带宽值 单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置<p>分配带宽值 单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticSwitch() 获取<p>弹性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticSwitch(integer $ElasticSwitch) 设置<p>弹性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticBandwidth() 获取<p>弹性带宽上限，单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBandwidth(integer $ElasticBandwidth) 设置<p>弹性带宽上限，单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInFlowMax() 获取<p>七天入向峰值带宽，单位bps</p>
 * @method void setInFlowMax(integer $InFlowMax) 设置<p>七天入向峰值带宽，单位bps</p>
 * @method integer getOutFlowMax() 获取<p>七天出向峰值带宽，单位bps</p>
 * @method void setOutFlowMax(integer $OutFlowMax) 设置<p>七天出向峰值带宽，单位bps</p>
 * @method integer getElasticTrafficSwitch() 获取<p>边界按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setElasticTrafficSwitch(integer $ElasticTrafficSwitch) 设置<p>边界按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class SerialRegionInfo extends AbstractModel
{
    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer <p>分配带宽值 单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer <p>弹性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticSwitch;

    /**
     * @var integer <p>弹性带宽上限，单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBandwidth;

    /**
     * @var integer <p>七天入向峰值带宽，单位bps</p>
     */
    public $InFlowMax;

    /**
     * @var integer <p>七天出向峰值带宽，单位bps</p>
     */
    public $OutFlowMax;

    /**
     * @var integer <p>边界按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $ElasticTrafficSwitch;

    /**
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width <p>分配带宽值 单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticSwitch <p>弹性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticBandwidth <p>弹性带宽上限，单位Mbps</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InFlowMax <p>七天入向峰值带宽，单位bps</p>
     * @param integer $OutFlowMax <p>七天出向峰值带宽，单位bps</p>
     * @param integer $ElasticTrafficSwitch <p>边界按流量弹性开关</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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

        if (array_key_exists("ElasticTrafficSwitch",$param) and $param["ElasticTrafficSwitch"] !== null) {
            $this->ElasticTrafficSwitch = $param["ElasticTrafficSwitch"];
        }
    }
}
