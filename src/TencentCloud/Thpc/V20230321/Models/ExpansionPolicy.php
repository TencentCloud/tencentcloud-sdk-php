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
 * 扩容方式配置，定义用什么创建节点。
 *
 * @method string getExpansionMode() 获取<p>扩容方式。可选值：LAUNCH_TEMPLATE（启动模板）、MULTI_CARD（多卡型混扩）。</p>
 * @method void setExpansionMode(string $ExpansionMode) 设置<p>扩容方式。可选值：LAUNCH_TEMPLATE（启动模板）、MULTI_CARD（多卡型混扩）。</p>
 * @method array getLaunchTemplateIds() 获取<p>启动模板 ID 列表，最多 10 个。ExpansionMode=LAUNCH_TEMPLATE 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaunchTemplateIds(array $LaunchTemplateIds) 设置<p>启动模板 ID 列表，最多 10 个。ExpansionMode=LAUNCH_TEMPLATE 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReferenceInstanceId() 获取<p>参考实例 ID，根据已有实例配置生成启动模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferenceInstanceId(string $ReferenceInstanceId) 设置<p>参考实例 ID，根据已有实例配置生成启动模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TemplateOverrides getTemplateOverrides() 获取<p>启动模板扩容覆盖配置。ExpansionMode=MULTI_CARD 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateOverrides(TemplateOverrides $TemplateOverrides) 设置<p>启动模板扩容覆盖配置。ExpansionMode=MULTI_CARD 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExpansionPriority getExpansionPriority() 获取<p>候选规格排序策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpansionPriority(ExpansionPriority $ExpansionPriority) 设置<p>候选规格排序策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExpansionPolicy extends AbstractModel
{
    /**
     * @var string <p>扩容方式。可选值：LAUNCH_TEMPLATE（启动模板）、MULTI_CARD（多卡型混扩）。</p>
     */
    public $ExpansionMode;

    /**
     * @var array <p>启动模板 ID 列表，最多 10 个。ExpansionMode=LAUNCH_TEMPLATE 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaunchTemplateIds;

    /**
     * @var string <p>参考实例 ID，根据已有实例配置生成启动模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferenceInstanceId;

    /**
     * @var TemplateOverrides <p>启动模板扩容覆盖配置。ExpansionMode=MULTI_CARD 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateOverrides;

    /**
     * @var ExpansionPriority <p>候选规格排序策略。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpansionPriority;

    /**
     * @param string $ExpansionMode <p>扩容方式。可选值：LAUNCH_TEMPLATE（启动模板）、MULTI_CARD（多卡型混扩）。</p>
     * @param array $LaunchTemplateIds <p>启动模板 ID 列表，最多 10 个。ExpansionMode=LAUNCH_TEMPLATE 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReferenceInstanceId <p>参考实例 ID，根据已有实例配置生成启动模板。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TemplateOverrides $TemplateOverrides <p>启动模板扩容覆盖配置。ExpansionMode=MULTI_CARD 时使用。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExpansionPriority $ExpansionPriority <p>候选规格排序策略。</p>
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
        if (array_key_exists("ExpansionMode",$param) and $param["ExpansionMode"] !== null) {
            $this->ExpansionMode = $param["ExpansionMode"];
        }

        if (array_key_exists("LaunchTemplateIds",$param) and $param["LaunchTemplateIds"] !== null) {
            $this->LaunchTemplateIds = $param["LaunchTemplateIds"];
        }

        if (array_key_exists("ReferenceInstanceId",$param) and $param["ReferenceInstanceId"] !== null) {
            $this->ReferenceInstanceId = $param["ReferenceInstanceId"];
        }

        if (array_key_exists("TemplateOverrides",$param) and $param["TemplateOverrides"] !== null) {
            $this->TemplateOverrides = new TemplateOverrides();
            $this->TemplateOverrides->deserialize($param["TemplateOverrides"]);
        }

        if (array_key_exists("ExpansionPriority",$param) and $param["ExpansionPriority"] !== null) {
            $this->ExpansionPriority = new ExpansionPriority();
            $this->ExpansionPriority->deserialize($param["ExpansionPriority"]);
        }
    }
}
