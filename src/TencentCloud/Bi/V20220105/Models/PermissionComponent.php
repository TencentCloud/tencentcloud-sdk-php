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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商业版本权限单元
 *
 * @method string getModuleId() 获取<p>权限值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleId(string $ModuleId) 设置<p>权限值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIncludeType() 获取<p>可用性</p><p>枚举值：</p><ul><li>usable： 可用</li><li>visible： 可见</li><li>disabled： 不可用</li><li>hidden： 隐藏</li></ul><p>默认值：disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIncludeType(string $IncludeType) 设置<p>可用性</p><p>枚举值：</p><ul><li>usable： 可用</li><li>visible： 可见</li><li>disabled： 不可用</li><li>hidden： 隐藏</li></ul><p>默认值：disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpgradeVersionType() 获取<p>目标升级版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeVersionType(string $UpgradeVersionType) 设置<p>目标升级版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTips() 获取<p>补充信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTips(string $Tips) 设置<p>补充信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTipsKey() 获取<p>补充信息的key值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTipsKey(string $TipsKey) 设置<p>补充信息的key值</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PermissionComponent extends AbstractModel
{
    /**
     * @var string <p>权限值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleId;

    /**
     * @var string <p>可用性</p><p>枚举值：</p><ul><li>usable： 可用</li><li>visible： 可见</li><li>disabled： 不可用</li><li>hidden： 隐藏</li></ul><p>默认值：disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IncludeType;

    /**
     * @var string <p>目标升级版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeVersionType;

    /**
     * @var string <p>补充信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tips;

    /**
     * @var string <p>补充信息的key值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TipsKey;

    /**
     * @param string $ModuleId <p>权限值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IncludeType <p>可用性</p><p>枚举值：</p><ul><li>usable： 可用</li><li>visible： 可见</li><li>disabled： 不可用</li><li>hidden： 隐藏</li></ul><p>默认值：disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpgradeVersionType <p>目标升级版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tips <p>补充信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TipsKey <p>补充信息的key值</p>
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
