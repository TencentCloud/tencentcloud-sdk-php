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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB多可用区信息
 *
 * @method boolean getCLBMultiZoneFlag() 获取是否启用多可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLBMultiZoneFlag(boolean $CLBMultiZoneFlag) 设置是否启用多可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLBMasterZone() 获取主可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLBMasterZone(string $CLBMasterZone) 设置主可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCLBSlaveZone() 获取备可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCLBSlaveZone(string $CLBSlaveZone) 设置备可用区信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CLBMultiRegion extends AbstractModel
{
    /**
     * @var boolean 是否启用多可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLBMultiZoneFlag;

    /**
     * @var string 主可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLBMasterZone;

    /**
     * @var string 备可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CLBSlaveZone;

    /**
     * @param boolean $CLBMultiZoneFlag 是否启用多可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLBMasterZone 主可用区信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CLBSlaveZone 备可用区信息
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
        if (array_key_exists("CLBMultiZoneFlag",$param) and $param["CLBMultiZoneFlag"] !== null) {
            $this->CLBMultiZoneFlag = $param["CLBMultiZoneFlag"];
        }

        if (array_key_exists("CLBMasterZone",$param) and $param["CLBMasterZone"] !== null) {
            $this->CLBMasterZone = $param["CLBMasterZone"];
        }

        if (array_key_exists("CLBSlaveZone",$param) and $param["CLBSlaveZone"] !== null) {
            $this->CLBSlaveZone = $param["CLBSlaveZone"];
        }
    }
}
