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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEidResult返回参数结构体
 *
 * @method DetectInfoText getText() 获取文本类信息。（基于对敏感信息的保护，验证使用的姓名和身份证号统一通过加密后从Eidinfo参数中返回，如需获取请在控制台申请返回身份信息，详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(DetectInfoText $Text) 设置文本类信息。（基于对敏感信息的保护，验证使用的姓名和身份证号统一通过加密后从Eidinfo参数中返回，如需获取请在控制台申请返回身份信息，详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method DetectInfoIdCardData getIdCardData() 获取身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardData(DetectInfoIdCardData $IdCardData) 设置身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DetectInfoBestFrame getBestFrame() 获取最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrame(DetectInfoBestFrame $BestFrame) 设置最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EidInfo getEidInfo() 获取Eid信息。（包括商户下用户唯一标识以及加密后的姓名、身份证号信息。解密方式详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEidInfo(EidInfo $EidInfo) 设置Eid信息。（包括商户下用户唯一标识以及加密后的姓名、身份证号信息。解密方式详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionVerifyData getIntentionVerifyData() 获取意愿核身朗读模式相关信息。若未使用意愿核身朗读功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionVerifyData(IntentionVerifyData $IntentionVerifyData) 设置意愿核身朗读模式相关信息。若未使用意愿核身朗读功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IntentionQuestionResult getIntentionQuestionResult() 获取意愿核身问答模式相关信息。若未使用意愿核身问答模式功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntentionQuestionResult(IntentionQuestionResult $IntentionQuestionResult) 设置意愿核身问答模式相关信息。若未使用意愿核身问答模式功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetEidResultResponse extends AbstractModel
{
    /**
     * @var DetectInfoText 文本类信息。（基于对敏感信息的保护，验证使用的姓名和身份证号统一通过加密后从Eidinfo参数中返回，如需获取请在控制台申请返回身份信息，详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
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
     * @var EidInfo Eid信息。（包括商户下用户唯一标识以及加密后的姓名、身份证号信息。解密方式详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EidInfo;

    /**
     * @var IntentionVerifyData 意愿核身朗读模式相关信息。若未使用意愿核身朗读功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionVerifyData;

    /**
     * @var IntentionQuestionResult 意愿核身问答模式相关信息。若未使用意愿核身问答模式功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntentionQuestionResult;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DetectInfoText $Text 文本类信息。（基于对敏感信息的保护，验证使用的姓名和身份证号统一通过加密后从Eidinfo参数中返回，如需获取请在控制台申请返回身份信息，详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
     * @param DetectInfoIdCardData $IdCardData 身份证照片信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DetectInfoBestFrame $BestFrame 最佳帧信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EidInfo $EidInfo Eid信息。（包括商户下用户唯一标识以及加密后的姓名、身份证号信息。解密方式详见[E证通获取实名信息指引](https://cloud.tencent.com/document/product/1007/63370)）
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionVerifyData $IntentionVerifyData 意愿核身朗读模式相关信息。若未使用意愿核身朗读功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IntentionQuestionResult $IntentionQuestionResult 意愿核身问答模式相关信息。若未使用意愿核身问答模式功能，该字段返回值可以不处理。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("EidInfo",$param) and $param["EidInfo"] !== null) {
            $this->EidInfo = new EidInfo();
            $this->EidInfo->deserialize($param["EidInfo"]);
        }

        if (array_key_exists("IntentionVerifyData",$param) and $param["IntentionVerifyData"] !== null) {
            $this->IntentionVerifyData = new IntentionVerifyData();
            $this->IntentionVerifyData->deserialize($param["IntentionVerifyData"]);
        }

        if (array_key_exists("IntentionQuestionResult",$param) and $param["IntentionQuestionResult"] !== null) {
            $this->IntentionQuestionResult = new IntentionQuestionResult();
            $this->IntentionQuestionResult->deserialize($param["IntentionQuestionResult"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
