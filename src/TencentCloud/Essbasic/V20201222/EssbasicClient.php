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

namespace TencentCloud\Essbasic\V20201222;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Essbasic\V20201222\Models as Models;

/**
 * @method Models\ArchiveFlowResponse ArchiveFlow(Models\ArchiveFlowRequest $req) 此接口（ArchiveFlow）用于流程的归档。

注意：归档后的流程不可再进行发送、签署、拒签、撤回等一系列操作。
 * @method Models\CancelFlowResponse CancelFlow(Models\CancelFlowRequest $req) 此接口（CancelFlow）用于撤销正在进行中的流程。

注：已归档流程不可完成撤销动作。
 * @method Models\CheckBankCard2EVerificationResponse CheckBankCard2EVerification(Models\CheckBankCard2EVerificationRequest $req) 该接口为第三方平台向电子签平台验证银行卡二要素
 * @method Models\CheckBankCard3EVerificationResponse CheckBankCard3EVerification(Models\CheckBankCard3EVerificationRequest $req) 该接口为第三方平台向电子签平台验证银行卡三要素
 * @method Models\CheckBankCard4EVerificationResponse CheckBankCard4EVerification(Models\CheckBankCard4EVerificationRequest $req) 该接口为第三方平台向电子签平台验证银行卡四要素
 * @method Models\CheckBankCardVerificationResponse CheckBankCardVerification(Models\CheckBankCardVerificationRequest $req) 该接口为第三方平台向电子签平台验证银行卡二/三/四要素
银行卡二要素(同CheckBankCard2EVerification): bank_card + name
银行卡三要素(同CheckBankCard3EVerification): bank_card + name + id_card_number
银行卡四要素(同CheckBankCard4EVerification): bank_card + name + id_card_number + mobile
 * @method Models\CheckFaceIdentifyResponse CheckFaceIdentify(Models\CheckFaceIdentifyRequest $req) 该接口为第三方平台向电子签平台检测慧眼或腾讯电子签小程序人脸核身结果
 * @method Models\CheckIdCardVerificationResponse CheckIdCardVerification(Models\CheckIdCardVerificationRequest $req) 该接口为第三方平台向电子签平台验证姓名和身份证信息
 * @method Models\CheckMobileAndNameResponse CheckMobileAndName(Models\CheckMobileAndNameRequest $req) 该接口为第三方平台向电子签平台验证手机号二要素
 * @method Models\CheckMobileVerificationResponse CheckMobileVerification(Models\CheckMobileVerificationRequest $req) 该接口为第三方平台向电子签平台验证手机号三要素
 * @method Models\CheckVerifyCodeMatchFlowIdResponse CheckVerifyCodeMatchFlowId(Models\CheckVerifyCodeMatchFlowIdRequest $req) 此接口用于确认验证码是否正确
 * @method Models\CreateFaceIdSignResponse CreateFaceIdSign(Models\CreateFaceIdSignRequest $req) 该接口为第三方平台向电子签平台获取慧眼慧眼API签名
 * @method Models\CreateFlowByFilesResponse CreateFlowByFiles(Models\CreateFlowByFilesRequest $req) 此接口（CreateFlowByFiles）用于通过PDF文件创建签署流程。

注意：调用此接口前，请先调用多文件上传接口 (UploadFiles)，提前上传合同文件。
 * @method Models\CreateH5FaceIdUrlResponse CreateH5FaceIdUrl(Models\CreateH5FaceIdUrlRequest $req) 该接口为第三方平台向电子签平台获取慧眼H5人脸核身Url
 * @method Models\CreatePreviewSignUrlResponse CreatePreviewSignUrl(Models\CreatePreviewSignUrlRequest $req) 此接口（CreatePreviewSignUrl）用于生成生成预览签署URL。

注：调用此接口前，请确保您已提前调用了发送流程接口（SendFlow）指定相关签署方。
 * @method Models\CreateSealResponse CreateSeal(Models\CreateSealRequest $req) 此接口（CreateSeal）用于创建个人/企业印章。

注意：使用FileId参数指定印章，需先调用多文件上传 (UploadFiles) 上传印章图片。
 * @method Models\CreateServerFlowSignResponse CreateServerFlowSign(Models\CreateServerFlowSignRequest $req) 此接口（CreateServerFlowSign）用于静默签署文件。

注：
1、此接口为白名单接口，调用前请提前与客服经理或邮件至e-contract@tencent.com进行联系。
2、仅合同发起者可使用流程静默签署能力。
 * @method Models\CreateSignUrlResponse CreateSignUrl(Models\CreateSignUrlRequest $req) 此接口（CreateSignUrl）用于生成指定用户的签署URL。

注：调用此接口前，请确保您已提前调用了发送流程接口（SendFlow）指定相关签署方。
 * @method Models\CreateSubOrganizationResponse CreateSubOrganization(Models\CreateSubOrganizationRequest $req) 此接口（CreateSubOrganization）用于在腾讯电子签内注册子机构。
 * @method Models\CreateSubOrganizationAndSealResponse CreateSubOrganizationAndSeal(Models\CreateSubOrganizationAndSealRequest $req) 此接口（CreateSubOrganizationAndSeal）用于注册子机构，同时系统将为该子企业自动生成一个默认电子印章图片。

注意：
1. 在后续的签署流程中，若未指定签署使用的印章ID，则默认调用自动生成的印章图片进行签署。
2. 此接口为白名单接口，如您需要使用此能力，请提前与客户经理沟通或邮件至e-contract@tencent.com与我们联系。
 * @method Models\CreateUserResponse CreateUser(Models\CreateUserRequest $req) 此接口（CreateUser）用于注册腾讯电子签个人用户。
 * @method Models\CreateUserAndSealResponse CreateUserAndSeal(Models\CreateUserAndSealRequest $req) 第三方应用可通过此接口（CreateUserAndSeal）注册腾讯电子签实名个人用户，同时系统将为该用户自动生成一个默认电子签名图片。

注意：
1. 在后续的签署流程中，若未指定签署使用的印章ID，则默认调用自动生成的签名图片进行签署。
2. 此接口为白名单接口，如您需要使用此能力，请提前与客户经理沟通或邮件至e-contract@tencent.com与我们联系。
 * @method Models\DeleteSealResponse DeleteSeal(Models\DeleteSealRequest $req) 此接口 (DeleteSeal) 用于删除指定ID的印章。

注意：默认印章不支持删除
 * @method Models\DescribeCatalogApproversResponse DescribeCatalogApprovers(Models\DescribeCatalogApproversRequest $req) 第三方应用可通过此接口（DescribeCatalogApprovers）查询指定目录的参与者列表
 * @method Models\DescribeCatalogSignComponentsResponse DescribeCatalogSignComponents(Models\DescribeCatalogSignComponentsRequest $req) 第三方应用可通过此接口（DescribeCatalogSignComponents）拉取目录签署区
 * @method Models\DescribeCustomFlowIdsResponse DescribeCustomFlowIds(Models\DescribeCustomFlowIdsRequest $req) 此接口（DescribeCustomFlowIds）用于通过自定义流程id来查询对应的电子签流程id
 * @method Models\DescribeCustomFlowIdsByFlowIdResponse DescribeCustomFlowIdsByFlowId(Models\DescribeCustomFlowIdsByFlowIdRequest $req) 此接口（DescribeCustomFlowIdsByFlowId）用于根据流程id反查自定义流程id
 * @method Models\DescribeFaceIdPhotosResponse DescribeFaceIdPhotos(Models\DescribeFaceIdPhotosRequest $req) 该接口为第三方平台向电子签平台获取慧眼人脸核身照片
 * @method Models\DescribeFaceIdResultsResponse DescribeFaceIdResults(Models\DescribeFaceIdResultsRequest $req) 该接口为第三方平台向电子签平台获取慧眼人脸核身结果
 * @method Models\DescribeFileIdsByCustomIdsResponse DescribeFileIdsByCustomIds(Models\DescribeFileIdsByCustomIdsRequest $req) 根据用户自定义id查询文件id
 * @method Models\DescribeFileUrlsResponse DescribeFileUrls(Models\DescribeFileUrlsRequest $req) 此接口（DescribeFileUrls）用于获取签署文件下载的URL。
 * @method Models\DescribeFlowResponse DescribeFlow(Models\DescribeFlowRequest $req) 通过此接口（DescribeFlow）可查询签署流程的详细信息。
 * @method Models\DescribeFlowApproversResponse DescribeFlowApprovers(Models\DescribeFlowApproversRequest $req) 第三方应用可通过此接口（DescribeFlowApprovers）查询流程参与者信息。
 * @method Models\DescribeFlowFilesResponse DescribeFlowFiles(Models\DescribeFlowFilesRequest $req) 查询流程文件
 * @method Models\DescribeSealsResponse DescribeSeals(Models\DescribeSealsRequest $req) 此接口（DescribeSeals）用于查询指定ID的印章信息。
 * @method Models\DescribeSubOrganizationsResponse DescribeSubOrganizations(Models\DescribeSubOrganizationsRequest $req) 此接口（DescribeSubOrganizations）用于查询子机构信息。

注：此接口仅可查询您所属机构应用号创建的子机构信息，不可跨应用/跨机构查询。
 * @method Models\DescribeUsersResponse DescribeUsers(Models\DescribeUsersRequest $req) 此接口（DescribeUsers）用于查询应用号下的个人用户信息。

注：此接口仅可查询您所属机构应用号创建的个人用户信息，不可跨应用/跨机构查询。
 * @method Models\DestroyFlowFileResponse DestroyFlowFile(Models\DestroyFlowFileRequest $req) 通过此接口（DestroyFlowFile）可删除指定流程中的合同文件。

注：调用此接口前，请确保此流程已属于归档状态。您可通过查询流程信息接口（DescribeFlow）进行查询。
 * @method Models\GenerateOrganizationSealResponse GenerateOrganizationSeal(Models\GenerateOrganizationSealRequest $req) 生成企业电子印章
 * @method Models\GenerateUserSealResponse GenerateUserSeal(Models\GenerateUserSealRequest $req) 此接口（GenerateUserSeal）用于生成个人签名图片。

注意：
1. 个人签名由用户注册时预留的姓名信息生成，不支持自定义签名内容。
2. 个人用户仅支持拥有一个系统生成的电子签名。
 * @method Models\ModifyOrganizationDefaultSealResponse ModifyOrganizationDefaultSeal(Models\ModifyOrganizationDefaultSealRequest $req) 此接口 (ModifyOrganizationDefaultSeal) 用于重新指定企业默认印章。
 * @method Models\ModifySealResponse ModifySeal(Models\ModifySealRequest $req) 此接口（ModifySeal）用于修改指定印章ID的印章图片和名称。

注：印章类型暂不支持修改，如需调整，请联系客服经理或通过创建印章接口（CreateSeal）进行创建新印章。
 * @method Models\ModifySubOrganizationInfoResponse ModifySubOrganizationInfo(Models\ModifySubOrganizationInfoRequest $req) 此接口（ModifySubOrganizationInfo）用于更新子机构信息。

注：若修改子机构名称或更新机构证件照片，需要重新通过子机构实名接口（VerifySubOrganization）进行重新实名。
 * @method Models\ModifyUserResponse ModifyUser(Models\ModifyUserRequest $req) 此接口（ModifyUser）用于更新个人用户信息。

注：若修改用户姓名，需要重新通过个人用户实名接口（VerifyUser）进行重新实名。
 * @method Models\ModifyUserDefaultSealResponse ModifyUserDefaultSeal(Models\ModifyUserDefaultSealRequest $req) 此接口 (ModifyUserDefaultSeal) 用于重新指定个人默认印章。
 * @method Models\RejectFlowResponse RejectFlow(Models\RejectFlowRequest $req) 此接口（RejectFlow）用于用户拒绝签署合同流程。
 * @method Models\SendFlowResponse SendFlow(Models\SendFlowRequest $req) 此接口（SendFlow）用于指定签署者及签署内容，后续可通过生成签署接口（CreateSignUrl）获取签署url。
 * @method Models\SendFlowUrlResponse SendFlowUrl(Models\SendFlowUrlRequest $req) 发送流程并获取签署URL
 * @method Models\SendSignInnerVerifyCodeResponse SendSignInnerVerifyCode(Models\SendSignInnerVerifyCodeRequest $req) 此接口用于发送签署验证码
 * @method Models\SignFlowResponse SignFlow(Models\SignFlowRequest $req) 此接口（SignFlow）可用于对流程文件进行签署。
 * @method Models\UploadFilesResponse UploadFiles(Models\UploadFilesRequest $req) 此接口（UploadFiles）用于文件上传。
 * @method Models\VerifySubOrganizationResponse VerifySubOrganization(Models\VerifySubOrganizationRequest $req) 此接口（VerifySubOrganization）用于通过子机构的实名认证。

注：此接口为白名单接口，如您需要使用此能力，请提前与客户经理沟通或邮件至e-contract@tencent.com与我们联系。
 * @method Models\VerifyUserResponse VerifyUser(Models\VerifyUserRequest $req) 第三方应用可通过此接口（VerifyUser）将腾讯电子签个人用户的实名认证状态设为通过。

注：此接口为白名单接口，如您需要使用此能力，请提前与客户经理沟通或邮件至e-contract@tencent.com与我们联系。
 */

class EssbasicClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "essbasic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "essbasic";

    /**
     * @var string
     */
    protected $version = "2020-12-22";

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
        $respClass = "TencentCloud"."\\".ucfirst("essbasic")."\\"."V20201222\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
