<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频文件元信息
 *
 * @method integer getFileSize() 获取媒资音频文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置媒资音频文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMD5() 获取媒资音频文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMD5(string $MD5) 设置媒资音频文件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取媒资音频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置媒资音频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSampleRate() 获取媒资音频采样率，单位为khz
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleRate(float $SampleRate) 设置媒资音频采样率，单位为khz
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBitRate() 获取媒资音频码率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBitRate(integer $BitRate) 设置媒资音频码率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormat() 获取媒资音频文件格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(string $Format) 设置媒资音频文件格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioMetadata extends AbstractModel
{
    /**
     * @var integer 媒资音频文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 媒资音频文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MD5;

    /**
     * @var float 媒资音频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var float 媒资音频采样率，单位为khz
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleRate;

    /**
     * @var integer 媒资音频码率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BitRate;

    /**
     * @var string 媒资音频文件格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @param integer $FileSize 媒资音频文件大小，单位为Byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MD5 媒资音频文件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration 媒资音频时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SampleRate 媒资音频采样率，单位为khz
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BitRate 媒资音频码率，单位为kbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Format 媒资音频文件格式
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
        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("BitRate",$param) and $param["BitRate"] !== null) {
            $this->BitRate = $param["BitRate"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
