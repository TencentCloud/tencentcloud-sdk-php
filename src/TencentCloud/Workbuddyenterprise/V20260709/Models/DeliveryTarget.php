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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递目标
 *
 * @method string getType() 获取<p>投递类型：BOT_CHANNEL（IM 渠道投递）或 WEBHOOK（自定义回调）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>投递类型：BOT_CHANNEL（IM 渠道投递）或 WEBHOOK（自定义回调）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取<p>是否启用此投递目标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用此投递目标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TargetOptions getOptions() 获取<p>投递配置，按 Type 不同</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptions(TargetOptions $Options) 设置<p>投递配置，按 Type 不同</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeliveryTarget extends AbstractModel
{
    /**
     * @var string <p>投递类型：BOT_CHANNEL（IM 渠道投递）或 WEBHOOK（自定义回调）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean <p>是否启用此投递目标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @var TargetOptions <p>投递配置，按 Type 不同</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Options;

    /**
     * @param string $Type <p>投递类型：BOT_CHANNEL（IM 渠道投递）或 WEBHOOK（自定义回调）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled <p>是否启用此投递目标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TargetOptions $Options <p>投递配置，按 Type 不同</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new TargetOptions();
            $this->Options->deserialize($param["Options"]);
        }
    }
}
