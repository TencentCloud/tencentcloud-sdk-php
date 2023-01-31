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

namespace TencentCloud\Tdid\V20210519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdid\V20210519\Models as Models;

/**
 * @method Models\AddLabelResponse AddLabel(Models\AddLabelRequest $req) DID添加标签

 * @method Models\CancelAuthorityIssuerResponse CancelAuthorityIssuer(Models\CancelAuthorityIssuerRequest $req) 撤消权威机构认证
 * @method Models\CheckChainResponse CheckChain(Models\CheckChainRequest $req) 检查区块链信息
 * @method Models\CheckDidDeployResponse CheckDidDeploy(Models\CheckDidDeployRequest $req) 检查部署情况
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) 创建凭证
 * @method Models\CreateDidServiceResponse CreateDidService(Models\CreateDidServiceRequest $req) 创建DID服务
 * @method Models\CreateLabelResponse CreateLabel(Models\CreateLabelRequest $req) 新建标签
 * @method Models\CreateSelectiveCredentialResponse CreateSelectiveCredential(Models\CreateSelectiveCredentialRequest $req) 创建选择性批露凭证
 * @method Models\CreateTDidResponse CreateTDid(Models\CreateTDidRequest $req) 创建机构DID
 * @method Models\CreateTDidByPrivateKeyResponse CreateTDidByPrivateKey(Models\CreateTDidByPrivateKeyRequest $req) 新建DID根据私钥生成Tdid
 * @method Models\CreateTDidByPublicKeyResponse CreateTDidByPublicKey(Models\CreateTDidByPublicKeyRequest $req)  新建DID根据公钥生成Tdid
 * @method Models\DeployByNameResponse DeployByName(Models\DeployByNameRequest $req) 通过Name部署TDID合约
 * @method Models\DownCptResponse DownCpt(Models\DownCptRequest $req) 凭证模版下载
 * @method Models\EnableHashResponse EnableHash(Models\EnableHashRequest $req) 启用合约
 * @method Models\GetAgencyTDidResponse GetAgencyTDid(Models\GetAgencyTDidRequest $req) 该接口已废弃

本机构DID详情
 * @method Models\GetAuthoritiesListResponse GetAuthoritiesList(Models\GetAuthoritiesListRequest $req) 权威机构列表
 * @method Models\GetAuthorityIssuerResponse GetAuthorityIssuer(Models\GetAuthorityIssuerRequest $req) 获取权威机构信息
 * @method Models\GetConsortiumClusterListResponse GetConsortiumClusterList(Models\GetConsortiumClusterListRequest $req) 获取联盟bcos网络列表
 * @method Models\GetConsortiumListResponse GetConsortiumList(Models\GetConsortiumListRequest $req) 获取联盟列表
 * @method Models\GetCptInfoResponse GetCptInfo(Models\GetCptInfoRequest $req) 凭证模版详情
 * @method Models\GetCptListResponse GetCptList(Models\GetCptListRequest $req) 凭证模版列表
 * @method Models\GetCredentialCptRankResponse GetCredentialCptRank(Models\GetCredentialCptRankRequest $req) 凭证颁发按机构排行
 * @method Models\GetCredentialIssueRankResponse GetCredentialIssueRank(Models\GetCredentialIssueRankRequest $req) 凭证颁发按机构排行
 * @method Models\GetCredentialIssueTrendResponse GetCredentialIssueTrend(Models\GetCredentialIssueTrendRequest $req) 凭证颁发趋势
 * @method Models\GetCredentialStatusResponse GetCredentialStatus(Models\GetCredentialStatusRequest $req) 获取凭证链上状态信息
 * @method Models\GetDataPanelResponse GetDataPanel(Models\GetDataPanelRequest $req) 概览

 * @method Models\GetDeployInfoResponse GetDeployInfo(Models\GetDeployInfoRequest $req) 合约部署详情

 * @method Models\GetDeployListResponse GetDeployList(Models\GetDeployListRequest $req) 合约部署列表
 * @method Models\GetDidClusterDetailResponse GetDidClusterDetail(Models\GetDidClusterDetailRequest $req) 获取DID区块链网络详情
 * @method Models\GetDidClusterListResponse GetDidClusterList(Models\GetDidClusterListRequest $req) 获取用户的DID网络列表
 * @method Models\GetDidDetailResponse GetDidDetail(Models\GetDidDetailRequest $req) DID详情
 * @method Models\GetDidDocumentResponse GetDidDocument(Models\GetDidDocumentRequest $req) 查看DID文档

 * @method Models\GetDidListResponse GetDidList(Models\GetDidListRequest $req) DID列表
 * @method Models\GetDidRegisterTrendResponse GetDidRegisterTrend(Models\GetDidRegisterTrendRequest $req) DID注册趋势
 * @method Models\GetDidServiceDetailResponse GetDidServiceDetail(Models\GetDidServiceDetailRequest $req) 获取DID服务详情
 * @method Models\GetDidServiceListResponse GetDidServiceList(Models\GetDidServiceListRequest $req) 获取DID服务列表
 * @method Models\GetGroupListResponse GetGroupList(Models\GetGroupListRequest $req) 主群组配置列表
 * @method Models\GetLabelListResponse GetLabelList(Models\GetLabelListRequest $req) 标签列表
 * @method Models\GetPolicyListResponse GetPolicyList(Models\GetPolicyListRequest $req) 披露策略Policy管理列表
 * @method Models\GetPublicKeyResponse GetPublicKey(Models\GetPublicKeyRequest $req) 查看公钥
 * @method Models\QueryPolicyResponse QueryPolicy(Models\QueryPolicyRequest $req) 披露策略Policy查看
 * @method Models\RecognizeAuthorityIssuerResponse RecognizeAuthorityIssuer(Models\RecognizeAuthorityIssuerRequest $req) 认证权威机构
 * @method Models\RegisterClaimPolicyResponse RegisterClaimPolicy(Models\RegisterClaimPolicyRequest $req) 披露策略Policy注册
 * @method Models\RegisterCptResponse RegisterCpt(Models\RegisterCptRequest $req) 凭证模版新建
 * @method Models\RegisterIssuerResponse RegisterIssuer(Models\RegisterIssuerRequest $req) 注册为权威机构
 * @method Models\RemoveHashResponse RemoveHash(Models\RemoveHashRequest $req) 删除合约
 * @method Models\SetCredentialStatusResponse SetCredentialStatus(Models\SetCredentialStatusRequest $req) 设置凭证链上状态
 * @method Models\VerifyCredentialResponse VerifyCredential(Models\VerifyCredentialRequest $req) 验证凭证
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
