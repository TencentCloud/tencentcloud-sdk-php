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
 * 推理服务资源配置的修改参数。
 *
 * @method string getScalingMode() 获取<p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
 * @method void setScalingMode(string $ScalingMode) 设置<p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
 * @method InferenceAutoScalingConfig getAutoScalingConfig() 获取<p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
 * @method void setAutoScalingConfig(InferenceAutoScalingConfig $AutoScalingConfig) 设置<p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
 * @method InferenceManualInstanceConfig getManualInstanceConfig() 获取<p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
 * @method void setManualInstanceConfig(InferenceManualInstanceConfig $ManualInstanceConfig) 设置<p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
 * @method integer getConcurrency() 获取<p>单实例的并发数。默认值为 1。</p>
 * @method void setConcurrency(integer $Concurrency) 设置<p>单实例的并发数。默认值为 1。</p>
 * @method InferenceHardwareConfigForModify getHardwareConfig() 获取<p>推理服务的硬件资源配置。</p>
 * @method void setHardwareConfig(InferenceHardwareConfigForModify $HardwareConfig) 设置<p>推理服务的硬件资源配置。</p>
 */
class InferenceResourceConfigForModify extends AbstractModel
{
    /**
     * @var string <p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
     */
    public $ScalingMode;

    /**
     * @var InferenceAutoScalingConfig <p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
     */
    public $AutoScalingConfig;

    /**
     * @var InferenceManualInstanceConfig <p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
     */
    public $ManualInstanceConfig;

    /**
     * @var integer <p>单实例的并发数。默认值为 1。</p>
     */
    public $Concurrency;

    /**
     * @var InferenceHardwareConfigForModify <p>推理服务的硬件资源配置。</p>
     */
    public $HardwareConfig;

    /**
     * @param string $ScalingMode <p>扩容缩容的方式。取值有：<li>Auto：根据请求量自动调整实例数量；</li><li>Manual：人工设置固定的实例数量。</li></p>
     * @param InferenceAutoScalingConfig $AutoScalingConfig <p>推理服务自动伸缩配置。当 ScalingMode 为 Auto 时必填。</p>
     * @param InferenceManualInstanceConfig $ManualInstanceConfig <p>推理服务人工设置实例配置。当 ScalingMode 为 Manual 时必填。</p>
     * @param integer $Concurrency <p>单实例的并发数。默认值为 1。</p>
     * @param InferenceHardwareConfigForModify $HardwareConfig <p>推理服务的硬件资源配置。</p>
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

        if (array_key_exists("HardwareConfig",$param) and $param["HardwareConfig"] !== null) {
            $this->HardwareConfig = new InferenceHardwareConfigForModify();
            $this->HardwareConfig->deserialize($param["HardwareConfig"]);
        }
    }
}
