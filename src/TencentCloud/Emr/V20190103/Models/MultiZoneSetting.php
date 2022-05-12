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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各个可用区的参数信息
 *
 * @method string getZoneTag() 获取"master"、"standby"、"third-party"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneTag(string $ZoneTag) 设置"master"、"standby"、"third-party"
注意：此字段可能返回 null，表示取不到有效值。
 * @method VPCSettings getVPCSettings() 获取无
 * @method void setVPCSettings(VPCSettings $VPCSettings) 设置无
 * @method Placement getPlacement() 获取无
 * @method void setPlacement(Placement $Placement) 设置无
 * @method NewResourceSpec getResourceSpec() 获取无
 * @method void setResourceSpec(NewResourceSpec $ResourceSpec) 设置无
 */
class MultiZoneSetting extends AbstractModel
{
    /**
     * @var string "master"、"standby"、"third-party"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneTag;

    /**
     * @var VPCSettings 无
     */
    public $VPCSettings;

    /**
     * @var Placement 无
     */
    public $Placement;

    /**
     * @var NewResourceSpec 无
     */
    public $ResourceSpec;

    /**
     * @param string $ZoneTag "master"、"standby"、"third-party"
注意：此字段可能返回 null，表示取不到有效值。
     * @param VPCSettings $VPCSettings 无
     * @param Placement $Placement 无
     * @param NewResourceSpec $ResourceSpec 无
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
        if (array_key_exists("ZoneTag",$param) and $param["ZoneTag"] !== null) {
            $this->ZoneTag = $param["ZoneTag"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ResourceSpec",$param) and $param["ResourceSpec"] !== null) {
            $this->ResourceSpec = new NewResourceSpec();
            $this->ResourceSpec->deserialize($param["ResourceSpec"]);
        }
    }
}
