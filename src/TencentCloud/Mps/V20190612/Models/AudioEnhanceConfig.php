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
 * 音频增强配置
 *
 * @method AudioDenoiseConfig getDenoise() 获取<p>音频降噪配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(AudioDenoiseConfig $Denoise) 设置<p>音频降噪配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioSeparateConfig getSeparate() 获取<p>音频分离配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeparate(AudioSeparateConfig $Separate) 设置<p>音频分离配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VolumeBalanceConfig getVolumeBalance() 获取<p>音量均衡配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeBalance(VolumeBalanceConfig $VolumeBalance) 设置<p>音量均衡配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioBeautifyConfig getBeautify() 获取<p>音频美化配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeautify(AudioBeautifyConfig $Beautify) 设置<p>音频美化配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioEnhanceEditConfig getAudioEnhanceEdit() 获取<p>音频增强编辑。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioEnhanceEdit(AudioEnhanceEditConfig $AudioEnhanceEdit) 设置<p>音频增强编辑。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseConfig <p>音频降噪配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var AudioSeparateConfig <p>音频分离配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Separate;

    /**
     * @var VolumeBalanceConfig <p>音量均衡配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyConfig <p>音频美化配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Beautify;

    /**
     * @var AudioEnhanceEditConfig <p>音频增强编辑。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioEnhanceEdit;

    /**
     * @param AudioDenoiseConfig $Denoise <p>音频降噪配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioSeparateConfig $Separate <p>音频分离配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VolumeBalanceConfig $VolumeBalance <p>音量均衡配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioBeautifyConfig $Beautify <p>音频美化配置。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioEnhanceEditConfig $AudioEnhanceEdit <p>音频增强编辑。</p>
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
        if (array_key_exists("Denoise",$param) and $param["Denoise"] !== null) {
            $this->Denoise = new AudioDenoiseConfig();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("Separate",$param) and $param["Separate"] !== null) {
            $this->Separate = new AudioSeparateConfig();
            $this->Separate->deserialize($param["Separate"]);
        }

        if (array_key_exists("VolumeBalance",$param) and $param["VolumeBalance"] !== null) {
            $this->VolumeBalance = new VolumeBalanceConfig();
            $this->VolumeBalance->deserialize($param["VolumeBalance"]);
        }

        if (array_key_exists("Beautify",$param) and $param["Beautify"] !== null) {
            $this->Beautify = new AudioBeautifyConfig();
            $this->Beautify->deserialize($param["Beautify"]);
        }

        if (array_key_exists("AudioEnhanceEdit",$param) and $param["AudioEnhanceEdit"] !== null) {
            $this->AudioEnhanceEdit = new AudioEnhanceEditConfig();
            $this->AudioEnhanceEdit->deserialize($param["AudioEnhanceEdit"]);
        }
    }
}
