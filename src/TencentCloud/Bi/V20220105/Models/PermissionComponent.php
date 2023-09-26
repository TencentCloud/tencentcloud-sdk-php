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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商业版本权限单元
 *
 * @method string getModuleId() 获取权限值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleId(string $ModuleId) 设置权限值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeType() 获取可见/可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeType(string $IncludeType) 设置可见/可用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpgradeVersionType() 获取目标升级版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeVersionType(string $UpgradeVersionType) 设置目标升级版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTips() 获取补充信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTips(string $Tips) 设置补充信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTipsKey() 获取补充信息的key值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTipsKey(string $TipsKey) 设置补充信息的key值
注意：此字段可能返回 null，表示取不到有效值。
 */
class PermissionComponent extends AbstractModel
{
    /**
     * @var string 权限值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleId;

    /**
     * @var string 可见/可用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeType;

    /**
     * @var string 目标升级版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeVersionType;

    /**
     * @var string 补充信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tips;

    /**
     * @var string 补充信息的key值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TipsKey;

    /**
     * @param string $ModuleId 权限值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeType 可见/可用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpgradeVersionType 目标升级版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tips 补充信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TipsKey 补充信息的key值
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
        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("IncludeType",$param) and $param["IncludeType"] !== null) {
            $this->IncludeType = $param["IncludeType"];
        }

        if (array_key_exists("UpgradeVersionType",$param) and $param["UpgradeVersionType"] !== null) {
            $this->UpgradeVersionType = $param["UpgradeVersionType"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("TipsKey",$param) and $param["TipsKey"] !== null) {
            $this->TipsKey = $param["TipsKey"];
        }
    }
}
