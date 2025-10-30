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

namespace TencentCloud\Tdid\V20210519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdid\V20210519\Models as Models;

/**
 * @method Models\CreateDisclosedCredentialResponse CreateDisclosedCredential(Models\CreateDisclosedCredentialRequest $req) 根据披露策略创建选择性披露凭证
 * @method Models\CreatePresentationResponse CreatePresentation(Models\CreatePresentationRequest $req) 创建凭证持有人的可验证表达
 * @method Models\CreateTDidByHostResponse CreateTDidByHost(Models\CreateTDidByHostRequest $req) 自动生成公私钥对托管在DID平台，并注册DID标识
 * @method Models\CreateTDidByPubKeyResponse CreateTDidByPubKey(Models\CreateTDidByPubKeyRequest $req) 使用导入的公钥文件注册DID标识
 * @method Models\DeactivateTDidResponse DeactivateTDid(Models\DeactivateTDidRequest $req) 更新DID标识的禁用状态
 * @method Models\GetAppSummaryResponse GetAppSummary(Models\GetAppSummaryRequest $req) 获取某个应用关键指标统计数据
 * @method Models\GetCredentialStateResponse GetCredentialState(Models\GetCredentialStateRequest $req) 获取凭证链上状态信息
 * @method Models\GetOverSummaryResponse GetOverSummary(Models\GetOverSummaryRequest $req) 获取某个应用关键指标统计数据
 * @method Models\GetTDidByObjectIdResponse GetTDidByObjectId(Models\GetTDidByObjectIdRequest $req) 通过业务层绑定的对象ID获取DID标识
 * @method Models\GetTDidDocumentResponse GetTDidDocument(Models\GetTDidDocumentRequest $req) 获取DID标识的文档
 * @method Models\GetTDidPubKeyResponse GetTDidPubKey(Models\GetTDidPubKeyRequest $req) 查询DID标识的认证公钥
 * @method Models\IssueCredentialResponse IssueCredential(Models\IssueCredentialRequest $req) 颁发可验证凭证
 * @method Models\QueryAuthorityInfoResponse QueryAuthorityInfo(Models\QueryAuthorityInfoRequest $req) 查询权威机构信息
 * @method Models\QueryCPTResponse QueryCPT(Models\QueryCPTRequest $req) 查询凭证模板内容
 * @method Models\SetTDidAttributeResponse SetTDidAttribute(Models\SetTDidAttributeRequest $req) 设置DID文档的自定义属性
 * @method Models\UpdateCredentialStateResponse UpdateCredentialState(Models\UpdateCredentialStateRequest $req) 1. 首次更新凭证状态基于不同场景参数有所差异，分以下两种场景：
(1)  颁发凭证的DID是本腾讯云账号创建
(2) 颁发凭证的DID是非本腾讯云账号创建(此调用方式也适用于场景1)
2. 首次更新过凭证状态后，凭证状态已绑定该账号的链上用户，后续更新凭证状态只需参数CredentialStatus即可, OperateCredential和OriginCredential参数均不需要
 * @method Models\VerifyCredentialsResponse VerifyCredentials(Models\VerifyCredentialsRequest $req) 验证已签名的可验证凭证
 * @method Models\VerifyPresentationResponse VerifyPresentation(Models\VerifyPresentationRequest $req) 验证可验证表达的内容
 */

class TdidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdid.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdid";

    /**
     * @var string
     */
    protected $version = "2021-05-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("tdid")."\\"."V20210519\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
