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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管节点池自动升级配置
 *
 * @method boolean getAutoUpgrade() 获取是否开启自动升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoUpgrade(boolean $AutoUpgrade) 设置是否开启自动升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method AutoUpgradeOptions getUpgradeOptions() 获取运维窗口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeOptions(AutoUpgradeOptions $UpgradeOptions) 设置运维窗口
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取升级项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置升级项
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntOrString getMaxUnavailable() 获取升级时，最大不可升级的节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxUnavailable(IntOrString $MaxUnavailable) 设置升级时，最大不可升级的节点数
注意：此字段可能返回 null，表示取不到有效值。
 */
class MachineUpgradeSettings extends AbstractModel
{
    /**
     * @var boolean 是否开启自动升级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoUpgrade;

    /**
     * @var AutoUpgradeOptions 运维窗口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeOptions;

    /**
     * @var array 升级项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @var IntOrString 升级时，最大不可升级的节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxUnavailable;

    /**
     * @param boolean $AutoUpgrade 是否开启自动升级
注意：此字段可能返回 null，表示取不到有效值。
     * @param AutoUpgradeOptions $UpgradeOptions 运维窗口
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components 升级项
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntOrString $MaxUnavailable 升级时，最大不可升级的节点数
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
        if (array_key_exists("AutoUpgrade",$param) and $param["AutoUpgrade"] !== null) {
            $this->AutoUpgrade = $param["AutoUpgrade"];
        }

        if (array_key_exists("UpgradeOptions",$param) and $param["UpgradeOptions"] !== null) {
            $this->UpgradeOptions = new AutoUpgradeOptions();
            $this->UpgradeOptions->deserialize($param["UpgradeOptions"]);
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = $param["Components"];
        }

        if (array_key_exists("MaxUnavailable",$param) and $param["MaxUnavailable"] !== null) {
            $this->MaxUnavailable = new IntOrString();
            $this->MaxUnavailable->deserialize($param["MaxUnavailable"]);
        }
    }
}
