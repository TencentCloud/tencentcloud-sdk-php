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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境检测和音频检测响应
 *
 * @method string getAudioId() 获取音频ID （用于创建任务接口AudioIds）,环境检测该值为空，仅在音质检测情况下返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioId(string $AudioId) 设置音频ID （用于创建任务接口AudioIds）,环境检测该值为空，仅在音质检测情况下返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetectionCode() 获取检测code 

0 表示当前语音通过
-1 表示检测失败，需要重试
-2 表示语音检测不通过，提示用户再重新录制一下（通常漏读，错读，或多读）
-3 表示语音中噪声较大，不通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionCode(integer $DetectionCode) 设置检测code 

0 表示当前语音通过
-1 表示检测失败，需要重试
-2 表示语音检测不通过，提示用户再重新录制一下（通常漏读，错读，或多读）
-3 表示语音中噪声较大，不通过
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetectionMsg() 获取检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionMsg(string $DetectionMsg) 设置检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetectionTip() 获取检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectionTip(array $DetectionTip) 设置检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectionEnvAndSoundQualityRespData extends AbstractModel
{
    /**
     * @var string 音频ID （用于创建任务接口AudioIds）,环境检测该值为空，仅在音质检测情况下返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioId;

    /**
     * @var integer 检测code 

0 表示当前语音通过
-1 表示检测失败，需要重试
-2 表示语音检测不通过，提示用户再重新录制一下（通常漏读，错读，或多读）
-3 表示语音中噪声较大，不通过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionCode;

    /**
     * @var string 检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionMsg;

    /**
     * @var array 检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectionTip;

    /**
     * @param string $AudioId 音频ID （用于创建任务接口AudioIds）,环境检测该值为空，仅在音质检测情况下返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetectionCode 检测code 

0 表示当前语音通过
-1 表示检测失败，需要重试
-2 表示语音检测不通过，提示用户再重新录制一下（通常漏读，错读，或多读）
-3 表示语音中噪声较大，不通过
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DetectionMsg 检测提示信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DetectionTip 检测提示信息
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
        if (array_key_exists("AudioId",$param) and $param["AudioId"] !== null) {
            $this->AudioId = $param["AudioId"];
        }

        if (array_key_exists("DetectionCode",$param) and $param["DetectionCode"] !== null) {
            $this->DetectionCode = $param["DetectionCode"];
        }

        if (array_key_exists("DetectionMsg",$param) and $param["DetectionMsg"] !== null) {
            $this->DetectionMsg = $param["DetectionMsg"];
        }

        if (array_key_exists("DetectionTip",$param) and $param["DetectionTip"] !== null) {
            $this->DetectionTip = [];
            foreach ($param["DetectionTip"] as $key => $value){
                $obj = new Words();
                $obj->deserialize($value);
                array_push($this->DetectionTip, $obj);
            }
        }
    }
}
