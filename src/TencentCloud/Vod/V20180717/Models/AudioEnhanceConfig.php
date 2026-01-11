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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频增强配置。
 *
 * @method AudioDenoiseInfo getDenoise() 获取音频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDenoise(AudioDenoiseInfo $Denoise) 设置音频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioSeparateInfo getSeparate() 获取音频分离配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeparate(AudioSeparateInfo $Separate) 设置音频分离配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioVolumeBalanceInfo getVolumeBalance() 获取音量均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeBalance(AudioVolumeBalanceInfo $VolumeBalance) 设置音量均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioBeautifyInfo getBeautify() 获取音量美化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeautify(AudioBeautifyInfo $Beautify) 设置音量美化配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioEnhanceConfig extends AbstractModel
{
    /**
     * @var AudioDenoiseInfo 音频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Denoise;

    /**
     * @var AudioSeparateInfo 音频分离配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Separate;

    /**
     * @var AudioVolumeBalanceInfo 音量均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeBalance;

    /**
     * @var AudioBeautifyInfo 音量美化配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Beautify;

    /**
     * @param AudioDenoiseInfo $Denoise 音频降噪配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioSeparateInfo $Separate 音频分离配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioVolumeBalanceInfo $VolumeBalance 音量均衡配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioBeautifyInfo $Beautify 音量美化配置。
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
            $this->Denoise = new AudioDenoiseInfo();
            $this->Denoise->deserialize($param["Denoise"]);
        }

        if (array_key_exists("Separate",$param) and $param["Separate"] !== null) {
            $this->Separate = new AudioSeparateInfo();
            $this->Separate->deserialize($param["Separate"]);
        }

        if (array_key_exists("VolumeBalance",$param) and $param["VolumeBalance"] !== null) {
            $this->VolumeBalance = new AudioVolumeBalanceInfo();
            $this->VolumeBalance->deserialize($param["VolumeBalance"]);
        }

        if (array_key_exists("Beautify",$param) and $param["Beautify"] !== null) {
            $this->Beautify = new AudioBeautifyInfo();
            $this->Beautify->deserialize($param["Beautify"]);
        }
    }
}
