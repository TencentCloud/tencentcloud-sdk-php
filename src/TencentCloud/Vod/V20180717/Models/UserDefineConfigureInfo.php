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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户自定义音视频审核任务控制参数
 *
 * @method UserDefineFaceReviewTemplateInfo getFaceReviewInfo() 获取用户自定义人物音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFaceReviewInfo(UserDefineFaceReviewTemplateInfo $FaceReviewInfo) 设置用户自定义人物音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserDefineAsrTextReviewTemplateInfo getAsrReviewInfo() 获取用户自定义语音音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsrReviewInfo(UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo) 设置用户自定义语音音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserDefineOcrTextReviewTemplateInfo getOcrReviewInfo() 获取用户自定义文本音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrReviewInfo(UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo) 设置用户自定义文本音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserDefineConfigureInfo extends AbstractModel
{
    /**
     * @var UserDefineFaceReviewTemplateInfo 用户自定义人物音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FaceReviewInfo;

    /**
     * @var UserDefineAsrTextReviewTemplateInfo 用户自定义语音音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsrReviewInfo;

    /**
     * @var UserDefineOcrTextReviewTemplateInfo 用户自定义文本音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrReviewInfo;

    /**
     * @param UserDefineFaceReviewTemplateInfo $FaceReviewInfo 用户自定义人物音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserDefineAsrTextReviewTemplateInfo $AsrReviewInfo 用户自定义语音音视频审核控制参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserDefineOcrTextReviewTemplateInfo $OcrReviewInfo 用户自定义文本音视频审核控制参数。
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
        if (array_key_exists("FaceReviewInfo",$param) and $param["FaceReviewInfo"] !== null) {
            $this->FaceReviewInfo = new UserDefineFaceReviewTemplateInfo();
            $this->FaceReviewInfo->deserialize($param["FaceReviewInfo"]);
        }

        if (array_key_exists("AsrReviewInfo",$param) and $param["AsrReviewInfo"] !== null) {
            $this->AsrReviewInfo = new UserDefineAsrTextReviewTemplateInfo();
            $this->AsrReviewInfo->deserialize($param["AsrReviewInfo"]);
        }

        if (array_key_exists("OcrReviewInfo",$param) and $param["OcrReviewInfo"] !== null) {
            $this->OcrReviewInfo = new UserDefineOcrTextReviewTemplateInfo();
            $this->OcrReviewInfo->deserialize($param["OcrReviewInfo"]);
        }
    }
}
