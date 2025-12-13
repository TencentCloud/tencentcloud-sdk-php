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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDetectInfoEnhanced返回参数结构体
 *
 * @method DetectInfoText getText() 获取人脸核身识别结果及文本类信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(DetectInfoText $Text) 设置人脸核身识别结果及文本类信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DetectInfoIdCardData getIdCardData() 获取身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardData(DetectInfoIdCardData $IdCardData) 设置身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DetectInfoBestFrame getBestFrame() 获取最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrame(DetectInfoBestFrame $BestFrame) 设置最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DetectInfoVideoData getVideoData() 获取视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoData(DetectInfoVideoData $VideoData) 设置视频信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Encryption getEncryption() 获取敏感数据加密信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionVerifyData getIntentionVerifyData() 获取意愿核身朗读模式结果信息。
- 若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyData(IntentionVerifyData $IntentionVerifyData) 设置意愿核身朗读模式结果信息。
- 若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionQuestionResult getIntentionQuestionResult() 获取意愿核身问答模式结果。

- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionQuestionResult(IntentionQuestionResult $IntentionQuestionResult) 设置意愿核身问答模式结果。

- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionActionResult getIntentionActionResult() 获取意愿核身点头确认模式的结果信息。
- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionActionResult(IntentionActionResult $IntentionActionResult) 设置意愿核身点头确认模式的结果信息。
- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptedBody() 获取加密后的数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptedBody(string $EncryptedBody) 设置加密后的数据。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVerifyIntention() 获取本次请求是否配置开启意愿核身校验。 
false：未开启意愿核身校验 
true：已开启意愿核身校验 
说明：若请求开启了意愿核身校验，可结合IntentionVerifyType中具体使用的校验模式从对应的出参Result中获取最终的核验结果；若请求没有开启意愿核身校验，则可在出参Text中获取最终的核验结果。
 * @method void setIsVerifyIntention(boolean $IsVerifyIntention) 设置本次请求是否配置开启意愿核身校验。 
false：未开启意愿核身校验 
true：已开启意愿核身校验 
说明：若请求开启了意愿核身校验，可结合IntentionVerifyType中具体使用的校验模式从对应的出参Result中获取最终的核验结果；若请求没有开启意愿核身校验，则可在出参Text中获取最终的核验结果。
 * @method string getIntentionVerifyType() 获取本次请求意愿核身校验使用的具体模式。
0：问答模式
1：点头确认模式
2：朗读模式
若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值
 * @method void setIntentionVerifyType(string $IntentionVerifyType) 设置本次请求意愿核身校验使用的具体模式。
0：问答模式
1：点头确认模式
2：朗读模式
若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDetectInfoEnhancedResponse extends AbstractModel
{
    /**
     * @var DetectInfoText 人脸核身识别结果及文本类信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var DetectInfoIdCardData 身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardData;

    /**
     * @var DetectInfoBestFrame 最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrame;

    /**
     * @var DetectInfoVideoData 视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoData;

    /**
     * @var Encryption 敏感数据加密信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encryption;

    /**
     * @var IntentionVerifyData 意愿核身朗读模式结果信息。
- 若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyData;

    /**
     * @var IntentionQuestionResult 意愿核身问答模式结果。

- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionQuestionResult;

    /**
     * @var IntentionActionResult 意愿核身点头确认模式的结果信息。
- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionActionResult;

    /**
     * @var string 加密后的数据。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptedBody;

    /**
     * @var boolean 本次请求是否配置开启意愿核身校验。 
false：未开启意愿核身校验 
true：已开启意愿核身校验 
说明：若请求开启了意愿核身校验，可结合IntentionVerifyType中具体使用的校验模式从对应的出参Result中获取最终的核验结果；若请求没有开启意愿核身校验，则可在出参Text中获取最终的核验结果。
     */
    public $IsVerifyIntention;

    /**
     * @var string 本次请求意愿核身校验使用的具体模式。
0：问答模式
1：点头确认模式
2：朗读模式
若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值
     */
    public $IntentionVerifyType;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DetectInfoText $Text 人脸核身识别结果及文本类信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DetectInfoIdCardData $IdCardData 身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DetectInfoBestFrame $BestFrame 最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DetectInfoVideoData $VideoData 视频信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Encryption $Encryption 敏感数据加密信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionVerifyData $IntentionVerifyData 意愿核身朗读模式结果信息。
- 若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionQuestionResult $IntentionQuestionResult 意愿核身问答模式结果。

- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionActionResult $IntentionActionResult 意愿核身点头确认模式的结果信息。
- 若未使用该意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptedBody 加密后的数据。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVerifyIntention 本次请求是否配置开启意愿核身校验。 
false：未开启意愿核身校验 
true：已开启意愿核身校验 
说明：若请求开启了意愿核身校验，可结合IntentionVerifyType中具体使用的校验模式从对应的出参Result中获取最终的核验结果；若请求没有开启意愿核身校验，则可在出参Text中获取最终的核验结果。
     * @param string $IntentionVerifyType 本次请求意愿核身校验使用的具体模式。
0：问答模式
1：点头确认模式
2：朗读模式
若未使用意愿核身功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new DetectInfoText();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("IdCardData",$param) and $param["IdCardData"] !== null) {
            $this->IdCardData = new DetectInfoIdCardData();
            $this->IdCardData->deserialize($param["IdCardData"]);
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new DetectInfoBestFrame();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("VideoData",$param) and $param["VideoData"] !== null) {
            $this->VideoData = new DetectInfoVideoData();
            $this->VideoData->deserialize($param["VideoData"]);
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("IntentionVerifyData",$param) and $param["IntentionVerifyData"] !== null) {
            $this->IntentionVerifyData = new IntentionVerifyData();
            $this->IntentionVerifyData->deserialize($param["IntentionVerifyData"]);
        }

        if (array_key_exists("IntentionQuestionResult",$param) and $param["IntentionQuestionResult"] !== null) {
            $this->IntentionQuestionResult = new IntentionQuestionResult();
            $this->IntentionQuestionResult->deserialize($param["IntentionQuestionResult"]);
        }

        if (array_key_exists("IntentionActionResult",$param) and $param["IntentionActionResult"] !== null) {
            $this->IntentionActionResult = new IntentionActionResult();
            $this->IntentionActionResult->deserialize($param["IntentionActionResult"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }

        if (array_key_exists("IsVerifyIntention",$param) and $param["IsVerifyIntention"] !== null) {
            $this->IsVerifyIntention = $param["IsVerifyIntention"];
        }

        if (array_key_exists("IntentionVerifyType",$param) and $param["IntentionVerifyType"] !== null) {
            $this->IntentionVerifyType = $param["IntentionVerifyType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
