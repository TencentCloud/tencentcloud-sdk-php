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

namespace TencentCloud\Ssl\V20191205;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ssl\V20191205\Models as Models;

/**
 * @method Models\ApplyCertificateResponse ApplyCertificate(Models\ApplyCertificateRequest $req) 本接口（ApplyCertificate）用于免费证书申请。
 * @method Models\CancelAuditCertificateResponse CancelAuditCertificate(Models\CancelAuditCertificateRequest $req) 取消证书审核
 * @method Models\CancelCertificateOrderResponse CancelCertificateOrder(Models\CancelCertificateOrderRequest $req) 取消证书订单。
 * @method Models\CertificateInfoSubmitResponse CertificateInfoSubmit(Models\CertificateInfoSubmitRequest $req) 付费提交证书资料
 * @method Models\CertificateOrderSubmitResponse CertificateOrderSubmit(Models\CertificateOrderSubmitRequest $req) 提交付费证书订单
 * @method Models\CheckCertificateChainResponse CheckCertificateChain(Models\CheckCertificateChainRequest $req) 本接口（CheckCertificateChain）用于检查证书链是否完整。
 * @method Models\CheckCertificateDomainVerificationResponse CheckCertificateDomainVerification(Models\CheckCertificateDomainVerificationRequest $req) 检查证书域名验证结果
 * @method Models\CheckCertificateExistResponse CheckCertificateExist(Models\CheckCertificateExistRequest $req) 根据证书内容检测当前账号下是否存在一致的证书， 存在则返回证书ID， 不存在则返回空
 * @method Models\CommitCertificateInformationResponse CommitCertificateInformation(Models\CommitCertificateInformationRequest $req) 付费证书提交订单； 本接口不维护新功能， 可使用新接口进行提交， [CertificateOrderSubmit](https://cloud.tencent.com/document/product/400/116032)
 * @method Models\CompleteCertificateResponse CompleteCertificate(Models\CompleteCertificateRequest $req) 本接口（CompleteCertificate）用于主动触发证书验证。DNSPod和Wotrus品牌的证书不支持使用此接口。
 * @method Models\CreateCertificateResponse CreateCertificate(Models\CreateCertificateRequest $req) 本接口（CreateCertificate）用于创建付费证书。
 * @method Models\CreateCertificateBindResourceSyncTaskResponse CreateCertificateBindResourceSyncTask(Models\CreateCertificateBindResourceSyncTaskRequest $req) 创建证书绑定关联云资源异步任务， 该接口用于查询证书关联云资源。 若证书ID已存在查询云资源任务，则结果返回该任务ID。关联云资源类型，支持以下云资源：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）、cos。查询关联云资源结果使用DescribeCertificateBindResourceTaskResult接口
 * @method Models\CreateCertificateByPackageResponse CreateCertificateByPackage(Models\CreateCertificateByPackageRequest $req) 使用权益点创建证书
 * @method Models\DeleteCertificateResponse DeleteCertificate(Models\DeleteCertificateRequest $req) 本接口（DeleteCertificate）用于删除证书。
 * @method Models\DeleteCertificatesResponse DeleteCertificates(Models\DeleteCertificatesRequest $req) 批量删除证书，删除证书前支持查询证书是否关联了腾讯云云资源 （需自定义配置参数，参数名称：IsSync）
 * @method Models\DeleteManagerResponse DeleteManager(Models\DeleteManagerRequest $req) 删除管理人
 * @method Models\DeployCertificateInstanceResponse DeployCertificateInstance(Models\DeployCertificateInstanceRequest $req) 证书部署到云资源实例列表，本接口只会创建部署任务， 部署任务结果可通过DescribeHostDeployRecordDetail查询。本接口创建部署任务时，会校验证书和部署实例的匹配关系，存在不匹配的则会创建部署任务失败。以下为匹配关系校验规则：
- 若待部署的证书和传入实例域名的当前绑定的证书一致， 则不会创建成功
- 若待部署的证书和传入域名不匹配， 则不会创建成功
- 若部署clb实例时， 7层监听器下无规则，则不会创建成功
- 若部署clb实例时， 7层监听器未开启SNI，该监听器下存在任一域名和证书不匹配， 则不会创建成功
- 若部署clb实例时，监听器规则为正则表示式， 则不会创建成功

<dx-alert infotype="explain" title="">一个证书ID，相同的资源类型，只能创建一个部署任务，必须等部署任务执行完成，才能创建新的部署任务</dx-alert>
 * @method Models\DeployCertificateRecordRetryResponse DeployCertificateRecordRetry(Models\DeployCertificateRecordRetryRequest $req) 云资源部署重试部署记录
 * @method Models\DeployCertificateRecordRollbackResponse DeployCertificateRecordRollback(Models\DeployCertificateRecordRollbackRequest $req) 云资源部署成功记录回滚， 部署失败的记录不会回滚； 接口调用成功后， 会创建一个用于回滚的部署任务， 并返回该任务的ID
 * @method Models\DescribeCertificateResponse DescribeCertificate(Models\DescribeCertificateRequest $req) 本接口（DescribeCertificate）用于获取证书信息。
 * @method Models\DescribeCertificateBindResourceTaskDetailResponse DescribeCertificateBindResourceTaskDetail(Models\DescribeCertificateBindResourceTaskDetailRequest $req) 查询CreateCertificateBindResourceSyncTask任务结果， 返回证书关联云资源异步任务结果， 支持以下云资源：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）、cos
 * @method Models\DescribeCertificateBindResourceTaskResultResponse DescribeCertificateBindResourceTaskResult(Models\DescribeCertificateBindResourceTaskResultRequest $req) 查询CreateCertificateBindResourceSyncTask任务结果， 返回证书关联云资源异步任务结果， 支持以下云资源：clb、cdn、waf、live、vod、ddos、tke、apigateway、tcb、teo（edgeOne）、cos
 * @method Models\DescribeCertificateDetailResponse DescribeCertificateDetail(Models\DescribeCertificateDetailRequest $req) 获取证书详情。
 * @method Models\DescribeCertificateOperateLogsResponse DescribeCertificateOperateLogs(Models\DescribeCertificateOperateLogsRequest $req) 获取用户账号下有关证书的操作日志。
 * @method Models\DescribeCertificatesResponse DescribeCertificates(Models\DescribeCertificatesRequest $req) 本接口（DescribeCertificates）用于获取证书列表。
 * @method Models\DescribeCompaniesResponse DescribeCompanies(Models\DescribeCompaniesRequest $req) 查询公司列表
 * @method Models\DescribeDeleteCertificatesTaskResultResponse DescribeDeleteCertificatesTaskResult(Models\DescribeDeleteCertificatesTaskResultRequest $req) 查询批量删除任务结果
 * @method Models\DescribeDeployedResourcesResponse DescribeDeployedResources(Models\DescribeDeployedResourcesRequest $req) 证书查询关联资源， 最新查询接口请使用CreateCertificateBindResourceSyncTask， 可以查询更多支持的云资源
 * @method Models\DescribeDownloadCertificateUrlResponse DescribeDownloadCertificateUrl(Models\DescribeDownloadCertificateUrlRequest $req) 获取下载证书链接
 * @method Models\DescribeHostApiGatewayInstanceListResponse DescribeHostApiGatewayInstanceList(Models\DescribeHostApiGatewayInstanceListRequest $req) 查询证书apiGateway云资源部署实例列表
 * @method Models\DescribeHostCdnInstanceListResponse DescribeHostCdnInstanceList(Models\DescribeHostCdnInstanceListRequest $req) 查询证书cdn云资源部署实例列表
 * @method Models\DescribeHostClbInstanceListResponse DescribeHostClbInstanceList(Models\DescribeHostClbInstanceListRequest $req) 查询证书clb云资源部署实例列表
 * @method Models\DescribeHostCosInstanceListResponse DescribeHostCosInstanceList(Models\DescribeHostCosInstanceListRequest $req) 查询证书cos云资源部署实例列表
 * @method Models\DescribeHostDdosInstanceListResponse DescribeHostDdosInstanceList(Models\DescribeHostDdosInstanceListRequest $req) 查询证书ddos云资源部署实例列表
 * @method Models\DescribeHostDeployRecordResponse DescribeHostDeployRecord(Models\DescribeHostDeployRecordRequest $req) 查询证书云资源部署记录列表
 * @method Models\DescribeHostDeployRecordDetailResponse DescribeHostDeployRecordDetail(Models\DescribeHostDeployRecordDetailRequest $req) 查询证书云资源部署记录详情列表
 * @method Models\DescribeHostLighthouseInstanceListResponse DescribeHostLighthouseInstanceList(Models\DescribeHostLighthouseInstanceListRequest $req) 查询证书Lighthouse云资源部署实例列表
 * @method Models\DescribeHostLiveInstanceListResponse DescribeHostLiveInstanceList(Models\DescribeHostLiveInstanceListRequest $req) 查询证书live云资源部署实例列表
 * @method Models\DescribeHostTeoInstanceListResponse DescribeHostTeoInstanceList(Models\DescribeHostTeoInstanceListRequest $req) 查询证书EdgeOne云资源部署实例列表
 * @method Models\DescribeHostTkeInstanceListResponse DescribeHostTkeInstanceList(Models\DescribeHostTkeInstanceListRequest $req) 查询证书tke云资源部署实例列表
 * @method Models\DescribeHostUpdateRecordResponse DescribeHostUpdateRecord(Models\DescribeHostUpdateRecordRequest $req) 查询证书云资源更新记录列表
 * @method Models\DescribeHostUpdateRecordDetailResponse DescribeHostUpdateRecordDetail(Models\DescribeHostUpdateRecordDetailRequest $req) 查询证书云资源更新记录详情
 * @method Models\DescribeHostUploadUpdateRecordResponse DescribeHostUploadUpdateRecord(Models\DescribeHostUploadUpdateRecordRequest $req) 查询证书云资源更新（证书ID不变）记录列表
 * @method Models\DescribeHostUploadUpdateRecordDetailResponse DescribeHostUploadUpdateRecordDetail(Models\DescribeHostUploadUpdateRecordDetailRequest $req) 查询证书更新（证书ID不变）部署记录详情
 * @method Models\DescribeHostVodInstanceListResponse DescribeHostVodInstanceList(Models\DescribeHostVodInstanceListRequest $req) 查询证书Vod云资源部署实例列表
 * @method Models\DescribeHostWafInstanceListResponse DescribeHostWafInstanceList(Models\DescribeHostWafInstanceListRequest $req) 查询证书waf云资源部署实例列表
 * @method Models\DescribeManagerDetailResponse DescribeManagerDetail(Models\DescribeManagerDetailRequest $req) 查询管理人详情
 * @method Models\DescribeManagersResponse DescribeManagers(Models\DescribeManagersRequest $req) 查询管理人列表
 * @method Models\DescribePackagesResponse DescribePackages(Models\DescribePackagesRequest $req) 获得权益包列表
 * @method Models\DownloadCertificateResponse DownloadCertificate(Models\DownloadCertificateRequest $req) 本接口（DownloadCertificate）用于下载证书。
 * @method Models\ModifyCertificateAliasResponse ModifyCertificateAlias(Models\ModifyCertificateAliasRequest $req) 用户传入证书id和备注来修改证书备注。
 * @method Models\ModifyCertificateProjectResponse ModifyCertificateProject(Models\ModifyCertificateProjectRequest $req) 批量修改证书所属项目。
 * @method Models\ModifyCertificateResubmitResponse ModifyCertificateResubmit(Models\ModifyCertificateResubmitRequest $req) 针对审核失败或审核取消的付费证书，重新发起审核
 * @method Models\ModifyCertificatesExpiringNotificationSwitchResponse ModifyCertificatesExpiringNotificationSwitch(Models\ModifyCertificatesExpiringNotificationSwitchRequest $req) 修改忽略证书到期通知。打开或关闭证书到期通知。
 * @method Models\ReplaceCertificateResponse ReplaceCertificate(Models\ReplaceCertificateRequest $req) 本接口（ReplaceCertificate）用于重颁发证书。已申请的免费证书仅支持 RSA 算法、密钥对参数为2048的证书重颁发，并且目前仅支持1次重颁发。
 * @method Models\RevokeCertificateResponse RevokeCertificate(Models\RevokeCertificateRequest $req) 本接口（RevokeCertificate）用于吊销证书。
 * @method Models\SubmitAuditManagerResponse SubmitAuditManager(Models\SubmitAuditManagerRequest $req) 重新提交审核管理人
 * @method Models\SubmitCertificateInformationResponse SubmitCertificateInformation(Models\SubmitCertificateInformationRequest $req) 付费证书提交资料； 本接口不维护新功能， 可使用新接口进行资料提交， [CertificateInfoSubmit](https://cloud.tencent.com/document/product/400/116033)
 * @method Models\UpdateCertificateInstanceResponse UpdateCertificateInstance(Models\UpdateCertificateInstanceRequest $req) 一键更新旧证书资源，本接口为异步接口， 调用之后DeployRecordId为0表示任务进行中， 重复请求这个接口， 当返回DeployRecordId大于0则表示任务创建成功。 未创建成功则会抛出异常
 * @method Models\UpdateCertificateRecordRetryResponse UpdateCertificateRecordRetry(Models\UpdateCertificateRecordRetryRequest $req) 云资源更新重试部署记录
 * @method Models\UpdateCertificateRecordRollbackResponse UpdateCertificateRecordRollback(Models\UpdateCertificateRecordRollbackRequest $req) 云资源更新成功记录回滚， 只对更新已成功的记录回滚
 * @method Models\UploadCertificateResponse UploadCertificate(Models\UploadCertificateRequest $req) 本接口（UploadCertificate）用于上传证书。
 * @method Models\UploadConfirmLetterResponse UploadConfirmLetter(Models\UploadConfirmLetterRequest $req) 本接口（UploadConfirmLetter）上传证书确认函，不再维护其功能，请用户前往腾讯云证书控制台上传证书确认函
 * @method Models\UploadRevokeLetterResponse UploadRevokeLetter(Models\UploadRevokeLetterRequest $req) 本接口（UploadRevokeLetter）上传证书吊销确认函，不再维护其功能，请用户前往腾讯云证书控制台上传证书吊销确认函
 * @method Models\UploadUpdateCertificateInstanceResponse UploadUpdateCertificateInstance(Models\UploadUpdateCertificateInstanceRequest $req) 更新证书内容（证书ID不变）并更新关联的云资源，本接口为异步接口， 调用之后DeployRecordId为0表示任务进行中， 重复请求这个接口， 当返回DeployRecordId大于0则表示任务创建成功。 未创建成功则会抛出异常
 * @method Models\UploadUpdateCertificateRecordRetryResponse UploadUpdateCertificateRecordRetry(Models\UploadUpdateCertificateRecordRetryRequest $req) 云资源更新（证书ID不变）重试部署记录
 * @method Models\UploadUpdateCertificateRecordRollbackResponse UploadUpdateCertificateRecordRollback(Models\UploadUpdateCertificateRecordRollbackRequest $req) 云资源更新成功（证书ID不变）记录回滚， 会对全量任务进行回滚
 * @method Models\VerifyManagerResponse VerifyManager(Models\VerifyManagerRequest $req) 重新核验管理人
 */

class SslClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ssl.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ssl";

    /**
     * @var string
     */
    protected $version = "2019-12-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("ssl")."\\"."V20191205\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
