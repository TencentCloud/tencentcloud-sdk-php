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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 印花提取配置。
 *
 * @method integer getTransparencyThreshold() 获取<p>透明度阈值</p><p>取值范围：[0, 255]</p><p>默认值：30</p>
 * @method void setTransparencyThreshold(integer $TransparencyThreshold) 设置<p>透明度阈值</p><p>取值范围：[0, 255]</p><p>默认值：30</p>
 * @method integer getOpaqueThreshold() 获取<p>不透明阈值，必须大于TransparencyThreshold</p><p>取值范围：[0, 255]</p><p>默认值：127</p>
 * @method void setOpaqueThreshold(integer $OpaqueThreshold) 设置<p>不透明阈值，必须大于TransparencyThreshold</p><p>取值范围：[0, 255]</p><p>默认值：127</p>
 * @method integer getEdgeSamplingStep() 获取<p>边缘采样步数，默认5</p><p>取值范围：[1, 10]</p>
 * @method void setEdgeSamplingStep(integer $EdgeSamplingStep) 设置<p>边缘采样步数，默认5</p><p>取值范围：[1, 10]</p>
 * @method integer getEdgeExpansionStep() 获取<p>边缘扩展步数，默认5</p>
 * @method void setEdgeExpansionStep(integer $EdgeExpansionStep) 设置<p>边缘扩展步数，默认5</p>
 * @method float getEdgeBlendingIntensity() 获取<p>边缘融合强度，默认0.5</p><p>取值范围：[0, 1.0]</p>
 * @method void setEdgeBlendingIntensity(float $EdgeBlendingIntensity) 设置<p>边缘融合强度，默认0.5</p><p>取值范围：[0, 1.0]</p>
 */
class PatternConfig extends AbstractModel
{
    /**
     * @var integer <p>透明度阈值</p><p>取值范围：[0, 255]</p><p>默认值：30</p>
     */
    public $TransparencyThreshold;

    /**
     * @var integer <p>不透明阈值，必须大于TransparencyThreshold</p><p>取值范围：[0, 255]</p><p>默认值：127</p>
     */
    public $OpaqueThreshold;

    /**
     * @var integer <p>边缘采样步数，默认5</p><p>取值范围：[1, 10]</p>
     */
    public $EdgeSamplingStep;

    /**
     * @var integer <p>边缘扩展步数，默认5</p>
     */
    public $EdgeExpansionStep;

    /**
     * @var float <p>边缘融合强度，默认0.5</p><p>取值范围：[0, 1.0]</p>
     */
    public $EdgeBlendingIntensity;

    /**
     * @param integer $TransparencyThreshold <p>透明度阈值</p><p>取值范围：[0, 255]</p><p>默认值：30</p>
     * @param integer $OpaqueThreshold <p>不透明阈值，必须大于TransparencyThreshold</p><p>取值范围：[0, 255]</p><p>默认值：127</p>
     * @param integer $EdgeSamplingStep <p>边缘采样步数，默认5</p><p>取值范围：[1, 10]</p>
     * @param integer $EdgeExpansionStep <p>边缘扩展步数，默认5</p>
     * @param float $EdgeBlendingIntensity <p>边缘融合强度，默认0.5</p><p>取值范围：[0, 1.0]</p>
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
        if (array_key_exists("TransparencyThreshold",$param) and $param["TransparencyThreshold"] !== null) {
            $this->TransparencyThreshold = $param["TransparencyThreshold"];
        }

        if (array_key_exists("OpaqueThreshold",$param) and $param["OpaqueThreshold"] !== null) {
            $this->OpaqueThreshold = $param["OpaqueThreshold"];
        }

        if (array_key_exists("EdgeSamplingStep",$param) and $param["EdgeSamplingStep"] !== null) {
            $this->EdgeSamplingStep = $param["EdgeSamplingStep"];
        }

        if (array_key_exists("EdgeExpansionStep",$param) and $param["EdgeExpansionStep"] !== null) {
            $this->EdgeExpansionStep = $param["EdgeExpansionStep"];
        }

        if (array_key_exists("EdgeBlendingIntensity",$param) and $param["EdgeBlendingIntensity"] !== null) {
            $this->EdgeBlendingIntensity = $param["EdgeBlendingIntensity"];
        }
    }
}
