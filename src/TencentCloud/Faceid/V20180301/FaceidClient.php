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

namespace TencentCloud\Faceid\V20180301;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Faceid\V20180301\Models as Models;

/**
 * @method Models\BankCard2EVerificationResponse BankCard2EVerification(Models\BankCard2EVerificationRequest $req) 本接口用于校验姓名和银行卡号的真实性和一致性。
 * @method Models\BankCard4EVerificationResponse BankCard4EVerification(Models\BankCard4EVerificationRequest $req) 本接口用于输入银行卡号、姓名、开户证件号、开户手机号，校验信息的真实性和一致性。
 * @method Models\BankCardVerificationResponse BankCardVerification(Models\BankCardVerificationRequest $req) 本接口用于银行卡号、姓名、开户证件号信息的真实性和一致性。
 * @method Models\CheckBankCardInformationResponse CheckBankCardInformation(Models\CheckBankCardInformationRequest $req) 银行卡基础信息查询
 * @method Models\CheckEidTokenStatusResponse CheckEidTokenStatus(Models\CheckEidTokenStatusRequest $req) 用于轮询E证通H5场景EidToken验证状态。
 * @method Models\CheckIdCardInformationResponse CheckIdCardInformation(Models\CheckIdCardInformationRequest $req) 传入身份证人像面照片，识别身份证照片上的信息，并将姓名、身份证号、身份证人像照片与权威库的证件照进行比对，是否属于同一个人，从而验证身份证信息的真实性。
 * @method Models\CheckIdNameDateResponse CheckIdNameDate(Models\CheckIdNameDateRequest $req) 本接口用于校验姓名、身份证号、身份证有效期的真实性和一致性。
 * @method Models\CheckPhoneAndNameResponse CheckPhoneAndName(Models\CheckPhoneAndNameRequest $req) 手机号二要素核验接口用于校验手机号和姓名的真实性和一致性，支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。

 * @method Models\DetectAuthResponse DetectAuth(Models\DetectAuthRequest $req) 每次调用人脸核身SaaS化服务前，需先调用本接口获取BizToken，用来串联核身流程，在验证完成后，用于获取验证结果信息。
 * @method Models\EncryptedPhoneVerificationResponse EncryptedPhoneVerification(Models\EncryptedPhoneVerificationRequest $req) 本接口用于校验手机号、姓名和身份证号的真实性和一致性，入参支持明文、MD5和SHA256加密传输。
 * @method Models\GetActionSequenceResponse GetActionSequence(Models\GetActionSequenceRequest $req) 使用动作活体检测模式前，需调用本接口获取动作顺序。
 * @method Models\GetDetectInfoResponse GetDetectInfo(Models\GetDetectInfoRequest $req) 完成验证后，用BizToken调用本接口获取结果信息，BizToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetDetectInfoEnhancedResponse GetDetectInfoEnhanced(Models\GetDetectInfoEnhancedRequest $req) 完成验证后，用BizToken调用本接口获取结果信息，BizToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetEidResultResponse GetEidResult(Models\GetEidResultRequest $req) 完成验证后，用EidToken调用本接口获取结果信息，EidToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetEidTokenResponse GetEidToken(Models\GetEidTokenRequest $req) 每次调用E证通服务前，需先调用本接口获取EidToken，用来串联E证通流程，在验证完成后，用于获取E证通结果信息。
 * @method Models\GetFaceIdResultResponse GetFaceIdResult(Models\GetFaceIdResultRequest $req) 完成验证后，用FaceIdToken调用本接口获取结果信息，FaceIdToken生成后三天内（3\*24\*3,600秒）可多次拉取。
 * @method Models\GetFaceIdTokenResponse GetFaceIdToken(Models\GetFaceIdTokenRequest $req) 每次调用人脸核身SDK服务前，需先调用本接口获取SDKToken，用来串联核身流程，在验证完成后，用于获取验证结果信息，该token仅能核身一次。
 * @method Models\GetLiveCodeResponse GetLiveCode(Models\GetLiveCodeRequest $req) 使用数字活体检测模式前，需调用本接口获取数字验证码。
 * @method Models\GetWeChatBillDetailsResponse GetWeChatBillDetails(Models\GetWeChatBillDetailsRequest $req) 查询微信渠道服务（微信小程序、微信原生H5、微信普通H5）的账单明细及计费状态。
 * @method Models\IdCardOCRVerificationResponse IdCardOCRVerification(Models\IdCardOCRVerificationRequest $req) 本接口用于校验姓名和身份证号的真实性和一致性，您可以通过输入姓名和身份证号或传入身份证人像面照片提供所需验证信息。
 * @method Models\IdCardVerificationResponse IdCardVerification(Models\IdCardVerificationRequest $req) 传入姓名和身份证号，校验两者的真实性和一致性。
 * @method Models\ImageRecognitionResponse ImageRecognition(Models\ImageRecognitionRequest $req) 传入照片和身份信息，判断该照片与权威库的证件照是否属于同一个人。
 * @method Models\LivenessResponse Liveness(Models\LivenessRequest $req) 活体检测
 * @method Models\LivenessCompareResponse LivenessCompare(Models\LivenessCompareRequest $req) 传入视频和照片，先判断视频中是否为真人，判断为真人后，再判断该视频中的人与上传照片是否属于同一个人。
 * @method Models\LivenessRecognitionResponse LivenessRecognition(Models\LivenessRecognitionRequest $req) 传入视频和身份信息，先判断视频中是否为真人，判断为真人后，再判断该视频中的人与权威库的证件照是否属于同一个人。
 * @method Models\MinorsVerificationResponse MinorsVerification(Models\MinorsVerificationRequest $req) 通过传入手机号或姓名和身份证号，结合权威数据源和腾讯健康守护可信模型，判断该信息是否真实且年满18周岁。腾讯健康守护可信模型覆盖了上十亿手机库源，覆盖率高、准确率高，如果不在库中的手机号，还可以通过姓名+身份证进行兜底验证。
 * @method Models\MobileNetworkTimeVerificationResponse MobileNetworkTimeVerification(Models\MobileNetworkTimeVerificationRequest $req) 本接口用于查询手机号在网时长，输入手机号进行查询。
 * @method Models\MobileStatusResponse MobileStatus(Models\MobileStatusRequest $req) 本接口用于验证手机号的状态，您可以输入手机号进行查询。
 * @method Models\ParseNfcDataResponse ParseNfcData(Models\ParseNfcDataRequest $req) 解析SDK获取到的证件NFC数据，接口传入SDK返回的ReqId，返回证件信息（个别字段为特定证件类型特有）。SDK生成的ReqId五分钟内有效，重复查询仅收一次费。支持身份证类证件（二代身份证、港澳居住证、台湾居住证、外国人永居证）以及旅行类证件（港澳通行证、台湾通行证、台胞证、回乡证）的NFC识别及核验。
 * @method Models\PhoneVerificationResponse PhoneVerification(Models\PhoneVerificationRequest $req) 本接口用于校验手机号、姓名和身份证号的真实性和一致性。支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。
 * @method Models\PhoneVerificationCMCCResponse PhoneVerificationCMCC(Models\PhoneVerificationCMCCRequest $req) 本接口用于校验中国移动手机号、姓名和身份证号的真实性和一致性。中国移动支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。
 * @method Models\PhoneVerificationCTCCResponse PhoneVerificationCTCC(Models\PhoneVerificationCTCCRequest $req) 本接口用于校验中国电信手机号、姓名和身份证号的真实性和一致性。中国电信支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。
 * @method Models\PhoneVerificationCUCCResponse PhoneVerificationCUCC(Models\PhoneVerificationCUCCRequest $req) 本接口用于校验中国联通手机号、姓名和身份证号的真实性和一致性。中国联通支持的手机号段详情请查阅<a href="https://cloud.tencent.com/document/product/1007/46063">运营商类</a>文档。
 */

class FaceidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "faceid.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "faceid";

    /**
     * @var string
     */
    protected $version = "2018-03-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("faceid")."\\"."V20180301\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
