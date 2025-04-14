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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音轨信息
 *
 * @method string getTrackNum() 获取音轨和声道数字，说明：
当：SelectType值为track，此值为整数类型，例如：1；
当：SelectType值为track_channel，此值为小数类型，例如：1.0；
默认值：1.0
注意：整数部分代表音轨序号，以小数部分代表声道。音轨序号即为音轨的stream index，支持输入0和正整数。小数部分最多支持2位小数，并且仅支持0-63，但是如果Codec为aac/eac3/ac3时，小数部分仅支持0-15。例如：对于stream index为1的音轨，1.0代表这个音轨的第1个声道，1.1代表这个音轨的第2个声道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackNum(string $TrackNum) 设置音轨和声道数字，说明：
当：SelectType值为track，此值为整数类型，例如：1；
当：SelectType值为track_channel，此值为小数类型，例如：1.0；
默认值：1.0
注意：整数部分代表音轨序号，以小数部分代表声道。音轨序号即为音轨的stream index，支持输入0和正整数。小数部分最多支持2位小数，并且仅支持0-63，但是如果Codec为aac/eac3/ac3时，小数部分仅支持0-15。例如：对于stream index为1的音轨，1.0代表这个音轨的第1个声道，1.1代表这个音轨的第2个声道。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelVolume() 获取声道音量大小，说明：
当：AudioChannel的值为1时，此数组长度为1，例如：[6]；
当：AudioChannel的值为2时，此数组长度为2，例如：[0,6]；
当：AudioChannel的值为6时，此数组长度大于2小于16，例如：[-60,0,0,6]。
此值数组值取值范围：[-60, 6]，其中-60代表静音、0代表保持原音量，6表示原音量增加一倍，默认值为-60。
注意：支持3位小数。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelVolume(array $ChannelVolume) 设置声道音量大小，说明：
当：AudioChannel的值为1时，此数组长度为1，例如：[6]；
当：AudioChannel的值为2时，此数组长度为2，例如：[0,6]；
当：AudioChannel的值为6时，此数组长度大于2小于16，例如：[-60,0,0,6]。
此值数组值取值范围：[-60, 6]，其中-60代表静音、0代表保持原音量，6表示原音量增加一倍，默认值为-60。
注意：支持3位小数。

注意：此字段可能返回 null，表示取不到有效值。
 */
class TrackInfo extends AbstractModel
{
    /**
     * @var string 音轨和声道数字，说明：
当：SelectType值为track，此值为整数类型，例如：1；
当：SelectType值为track_channel，此值为小数类型，例如：1.0；
默认值：1.0
注意：整数部分代表音轨序号，以小数部分代表声道。音轨序号即为音轨的stream index，支持输入0和正整数。小数部分最多支持2位小数，并且仅支持0-63，但是如果Codec为aac/eac3/ac3时，小数部分仅支持0-15。例如：对于stream index为1的音轨，1.0代表这个音轨的第1个声道，1.1代表这个音轨的第2个声道。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackNum;

    /**
     * @var array 声道音量大小，说明：
当：AudioChannel的值为1时，此数组长度为1，例如：[6]；
当：AudioChannel的值为2时，此数组长度为2，例如：[0,6]；
当：AudioChannel的值为6时，此数组长度大于2小于16，例如：[-60,0,0,6]。
此值数组值取值范围：[-60, 6]，其中-60代表静音、0代表保持原音量，6表示原音量增加一倍，默认值为-60。
注意：支持3位小数。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelVolume;

    /**
     * @param string $TrackNum 音轨和声道数字，说明：
当：SelectType值为track，此值为整数类型，例如：1；
当：SelectType值为track_channel，此值为小数类型，例如：1.0；
默认值：1.0
注意：整数部分代表音轨序号，以小数部分代表声道。音轨序号即为音轨的stream index，支持输入0和正整数。小数部分最多支持2位小数，并且仅支持0-63，但是如果Codec为aac/eac3/ac3时，小数部分仅支持0-15。例如：对于stream index为1的音轨，1.0代表这个音轨的第1个声道，1.1代表这个音轨的第2个声道。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelVolume 声道音量大小，说明：
当：AudioChannel的值为1时，此数组长度为1，例如：[6]；
当：AudioChannel的值为2时，此数组长度为2，例如：[0,6]；
当：AudioChannel的值为6时，此数组长度大于2小于16，例如：[-60,0,0,6]。
此值数组值取值范围：[-60, 6]，其中-60代表静音、0代表保持原音量，6表示原音量增加一倍，默认值为-60。
注意：支持3位小数。

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
        if (array_key_exists("TrackNum",$param) and $param["TrackNum"] !== null) {
            $this->TrackNum = $param["TrackNum"];
        }

        if (array_key_exists("ChannelVolume",$param) and $param["ChannelVolume"] !== null) {
            $this->ChannelVolume = $param["ChannelVolume"];
        }
    }
}
