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
 * @method string getScalingMode() 获取扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li>
 * @method void setScalingMode(string $ScalingMode) 设置扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li>
 * @method string getHardwareSpec() 获取硬件规格。
 * @method void setHardwareSpec(string $HardwareSpec) 设置硬件规格。
 * @method InferenceAutoScalingConfig getAutoScalingConfig() 获取推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) 设置推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InferenceManualInstanceConfig getManualInstanceConfig() 获取推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) 设置推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConcurrency() 获取单实例的并发数。默认值为 1。
 * @method void setConcurrency(integer $Concurrency) 设置单实例的并发数。默认值为 1。
 */
class InferenceResourceConfig extends AbstractModel
{
    /**
     * @var string 扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li>
     */
    public $ScalingMode;

    /**
     * @var string 硬件规格。
     */
    public $HardwareSpec;

    /**
     * @var InferenceAutoScalingConfig 推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoScalingConfig;

    /**
     * @var InferenceManualInstanceConfig 推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualInstanceConfig;

    /**
     * @var integer 单实例的并发数。默认值为 1。
     */
    public $Concurrency;

    /**
     * @param string $ScalingMode 扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li>
     * @param string $HardwareSpec 硬件规格。
     * @param InferenceAutoScalingConfig $AutoScalingConfig 推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InferenceManualInstanceConfig $ManualInstanceConfig 推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Concurrency 单实例的并发数。默认值为 1。
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
