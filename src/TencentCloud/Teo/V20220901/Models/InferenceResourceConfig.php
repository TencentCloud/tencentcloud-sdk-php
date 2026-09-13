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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务的资源配置。
 *
 * @method string getScalingMode() 获取<p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
 * @method void setScalingMode(string $ScalingMode) 设置<p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
 * @method string getHardwareSpec() 获取<p>硬件规格标识。已废弃，请参考使用 <code>HardwareSpecId</code>。</p>
 * @method void setHardwareSpec(string $HardwareSpec) 设置<p>硬件规格标识。已废弃，请参考使用 <code>HardwareSpecId</code>。</p>
 * @method string getHardwareSpecId() 获取<p>硬件规格唯一标识 ID，可通过 <code>DescribeInferenceHardwareSpecifications</code> 接口获取当前站点支持的硬件规格。</p><p>系统默认按照所选 <code>HardwareSpecId</code> 对应的硬件规格配置推理服务所需资源；如需调整，可通过 <code>HardwareConfig</code> 自定义硬件资源配置。</p>
 * @method void setHardwareSpecId(string $HardwareSpecId) 设置<p>硬件规格唯一标识 ID，可通过 <code>DescribeInferenceHardwareSpecifications</code> 接口获取当前站点支持的硬件规格。</p><p>系统默认按照所选 <code>HardwareSpecId</code> 对应的硬件规格配置推理服务所需资源；如需调整，可通过 <code>HardwareConfig</code> 自定义硬件资源配置。</p>
 * @method InferenceHardwareConfig getHardwareConfig() 获取<p>推理服务硬件配置。</p><p>作为入参时，若未填充则按照所选 <code>HardwareSpecId</code> 规格的默认值配置硬件资源；若填充则优先按照填写值进行配置。</p>
 * @method void setHardwareConfig(InferenceHardwareConfig $HardwareConfig) 设置<p>推理服务硬件配置。</p><p>作为入参时，若未填充则按照所选 <code>HardwareSpecId</code> 规格的默认值配置硬件资源；若填充则优先按照填写值进行配置。</p>
 * @method InferenceAutoScalingConfig getAutoScalingConfig() 获取<p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) 设置<p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method InferenceManualInstanceConfig getManualInstanceConfig() 获取<p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) 设置<p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcurrency() 获取<p>单实例的并发数。默认值为 1。</p>
 * @method void setConcurrency(integer $Concurrency) 设置<p>单实例的并发数。默认值为 1。</p>
 */
class InferenceResourceConfig extends AbstractModel
{
    /**
     * @var string <p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
     */
    public $ScalingMode;

    /**
     * @var string <p>硬件规格标识。已废弃，请参考使用 <code>HardwareSpecId</code>。</p>
     * @deprecated
     */
    public $HardwareSpec;

    /**
     * @var string <p>硬件规格唯一标识 ID，可通过 <code>DescribeInferenceHardwareSpecifications</code> 接口获取当前站点支持的硬件规格。</p><p>系统默认按照所选 <code>HardwareSpecId</code> 对应的硬件规格配置推理服务所需资源；如需调整，可通过 <code>HardwareConfig</code> 自定义硬件资源配置。</p>
     */
    public $HardwareSpecId;

    /**
     * @var InferenceHardwareConfig <p>推理服务硬件配置。</p><p>作为入参时，若未填充则按照所选 <code>HardwareSpecId</code> 规格的默认值配置硬件资源；若填充则优先按照填写值进行配置。</p>
     */
    public $HardwareConfig;

    /**
     * @var InferenceAutoScalingConfig <p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoScalingConfig;

    /**
     * @var InferenceManualInstanceConfig <p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualInstanceConfig;

    /**
     * @var integer <p>单实例的并发数。默认值为 1。</p>
     */
    public $Concurrency;

    /**
     * @param string $ScalingMode <p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
     * @param string $HardwareSpec <p>硬件规格标识。已废弃，请参考使用 <code>HardwareSpecId</code>。</p>
     * @param string $HardwareSpecId <p>硬件规格唯一标识 ID，可通过 <code>DescribeInferenceHardwareSpecifications</code> 接口获取当前站点支持的硬件规格。</p><p>系统默认按照所选 <code>HardwareSpecId</code> 对应的硬件规格配置推理服务所需资源；如需调整，可通过 <code>HardwareConfig</code> 自定义硬件资源配置。</p>
     * @param InferenceHardwareConfig $HardwareConfig <p>推理服务硬件配置。</p><p>作为入参时，若未填充则按照所选 <code>HardwareSpecId</code> 规格的默认值配置硬件资源；若填充则优先按照填写值进行配置。</p>
     * @param InferenceAutoScalingConfig $AutoScalingConfig <p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param InferenceManualInstanceConfig $ManualInstanceConfig <p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Concurrency <p>单实例的并发数。默认值为 1。</p>
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
        if (array_key_exists("ScalingMode",$param) and $param["ScalingMode"] !== null) {
            $this->ScalingMode = $param["ScalingMode"];
        }

        if (array_key_exists("HardwareSpec",$param) and $param["HardwareSpec"] !== null) {
            $this->HardwareSpec = $param["HardwareSpec"];
        }

        if (array_key_exists("HardwareSpecId",$param) and $param["HardwareSpecId"] !== null) {
            $this->HardwareSpecId = $param["HardwareSpecId"];
        }

        if (array_key_exists("HardwareConfig",$param) and $param["HardwareConfig"] !== null) {
            $this->HardwareConfig = new InferenceHardwareConfig();
            $this->HardwareConfig->deserialize($param["HardwareConfig"]);
        }

        if (array_key_exists("AutoScalingConfig",$param) and $param["AutoScalingConfig"] !== null) {
            $this->AutoScalingConfig = new InferenceAutoScalingConfig();
            $this->AutoScalingConfig->deserialize($param["AutoScalingConfig"]);
        }

        if (array_key_exists("ManualInstanceConfig",$param) and $param["ManualInstanceConfig"] !== null) {
            $this->ManualInstanceConfig = new InferenceManualInstanceConfig();
            $this->ManualInstanceConfig->deserialize($param["ManualInstanceConfig"]);
        }

        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }
    }
}
