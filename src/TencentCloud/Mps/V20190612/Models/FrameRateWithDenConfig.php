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
 * 新插帧配置，支持分数帧率
 *
 * @method string getSwitch() 获取能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method void setSwitch(string $Switch) 设置能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
 * @method integer getFpsNum() 获取帧率分子，取值范围：非负数，除以分母后小于120，单位：Hz。 默认值 0。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 Fps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsNum(integer $FpsNum) 设置帧率分子，取值范围：非负数，除以分母后小于120，单位：Hz。 默认值 0。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 Fps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFpsDen() 获取帧率分母，取值范围：大于等于1。 默认值 1。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 FpsDenominator。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFpsDen(integer $FpsDen) 设置帧率分母，取值范围：大于等于1。 默认值 1。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 FpsDenominator。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FrameRateWithDenConfig extends AbstractModel
{
    /**
     * @var string 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     */
    public $Switch;

    /**
     * @var integer 帧率分子，取值范围：非负数，除以分母后小于120，单位：Hz。 默认值 0。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 Fps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsNum;

    /**
     * @var integer 帧率分母，取值范围：大于等于1。 默认值 1。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 FpsDenominator。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FpsDen;

    /**
     * @param string $Switch 能力配置开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li>
默认值：ON。
     * @param integer $FpsNum 帧率分子，取值范围：非负数，除以分母后小于120，单位：Hz。 默认值 0。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 Fps。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FpsDen 帧率分母，取值范围：大于等于1。 默认值 1。 注意：对于转码，该参数会覆盖 VideoTemplate 内部的 FpsDenominator。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("FpsNum",$param) and $param["FpsNum"] !== null) {
            $this->FpsNum = $param["FpsNum"];
        }

        if (array_key_exists("FpsDen",$param) and $param["FpsDen"] !== null) {
            $this->FpsDen = $param["FpsDen"];
        }
    }
}
