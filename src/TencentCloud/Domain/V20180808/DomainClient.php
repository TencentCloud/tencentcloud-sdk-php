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

namespace TencentCloud\Domain\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Domain\V20180808\Models as Models;

/**
 * @method Models\BatchModifyDomainInfoResponse BatchModifyDomainInfo(Models\BatchModifyDomainInfoRequest $req) 本接口 ( BatchModifyDomainInfo ) 用于批量域名信息修改 。
 * @method Models\BidDetailPageResponse BidDetailPage(Models\BidDetailPageRequest $req) 该接口用于用户详情页出价请求
 * @method Models\BidPreDomainsResponse BidPreDomains(Models\BidPreDomainsRequest $req) 用户合作商预释放出价
 * @method Models\BiddingPreReleaseResponse BiddingPreRelease(Models\BiddingPreReleaseRequest $req) 用于出价界面出价请求
 * @method Models\CheckBatchStatusResponse CheckBatchStatus(Models\CheckBatchStatusRequest $req) 本接口 ( CheckBatchStatus ) 用于查询批量操作日志状态 。
 * @method Models\CheckDomainResponse CheckDomain(Models\CheckDomainRequest $req) 检查域名是否可以注册。
 * @method Models\CreateCustomDnsHostResponse CreateCustomDnsHost(Models\CreateCustomDnsHostRequest $req) 创建自定义DNS Host
域名在“正常状态”下可创建，域名如果“未实名”则无法创建，账户如果未实名则无法创建。
默认每个域名 自定义DNS Host 数量不超过10个
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 本接口 ( CreateDomainBatch ) 用于批量域名注册 。
 * @method Models\CreateDomainRedemptionResponse CreateDomainRedemption(Models\CreateDomainRedemptionRequest $req) 创建赎回订单。需要域名状态为：RedemptionPending：赎回期
 * @method Models\CreatePhoneEmailResponse CreatePhoneEmail(Models\CreatePhoneEmailRequest $req) 此接口用于创建有效的手机、邮箱
 * @method Models\CreateTemplateResponse CreateTemplate(Models\CreateTemplateRequest $req) 本接口 ( CreateTemplate ) 用于添加域名信息模板 。
 * @method Models\DeleteBiddingResponse DeleteBidding(Models\DeleteBiddingRequest $req) 删除记录。
 * @method Models\DeleteCustomDnsHostResponse DeleteCustomDnsHost(Models\DeleteCustomDnsHostRequest $req) 删除自定义DNS Host
仅能删除域名在“正常状态”下，已经创建过的自定义Host，域名如果“未实名”或账户未实名，则无法操作
 * @method Models\DeletePhoneEmailResponse DeletePhoneEmail(Models\DeletePhoneEmailRequest $req) 此接口用于删除已验证的手机邮箱
 * @method Models\DeleteReservedPreDomainInfoResponse DeleteReservedPreDomainInfo(Models\DeleteReservedPreDomainInfoRequest $req) 用于清除多余的预定域名信息
 * @method Models\DeleteTemplateResponse DeleteTemplate(Models\DeleteTemplateRequest $req) 本接口 ( DeleteTemplate ) 用于删除信息模板。
 * @method Models\DescribeAuctionListResponse DescribeAuctionList(Models\DescribeAuctionListRequest $req) 用户控制台获取竞价列表
 * @method Models\DescribeBatchOperationLogDetailsResponse DescribeBatchOperationLogDetails(Models\DescribeBatchOperationLogDetailsRequest $req) 本接口 ( DescribeBatchOperationLogDetails ) 用于获取批量操作日志详情。
 * @method Models\DescribeBatchOperationLogsResponse DescribeBatchOperationLogs(Models\DescribeBatchOperationLogsRequest $req) 本接口 ( DescribeBatchOperationLogs ) 用于获取批量操作日志 。
 * @method Models\DescribeBiddingAppointDetailResponse DescribeBiddingAppointDetail(Models\DescribeBiddingAppointDetailRequest $req) 我预约的域名-预约详情。
 * @method Models\DescribeBiddingAppointListResponse DescribeBiddingAppointList(Models\DescribeBiddingAppointListRequest $req) 我预定的域名。
 * @method Models\DescribeBiddingDetailResponse DescribeBiddingDetail(Models\DescribeBiddingDetailRequest $req) 我竞价的域名-竞价详情。
 * @method Models\DescribeBiddingListResponse DescribeBiddingList(Models\DescribeBiddingListRequest $req) 我竞价的域名。
 * @method Models\DescribeBiddingSuccessfulDetailResponse DescribeBiddingSuccessfulDetail(Models\DescribeBiddingSuccessfulDetailRequest $req) 我得标的域名-得标详情。
 * @method Models\DescribeBiddingSuccessfulListResponse DescribeBiddingSuccessfulList(Models\DescribeBiddingSuccessfulListRequest $req) 我得标的域名。
 * @method Models\DescribeCustomDnsHostSetResponse DescribeCustomDnsHostSet(Models\DescribeCustomDnsHostSetRequest $req) 查询自定义DNS Host
当前域名在任意状态下均可获取(根据域名当前状态，不一定能获取到具体数据)
 * @method Models\DescribeDomainBaseInfoResponse DescribeDomainBaseInfo(Models\DescribeDomainBaseInfoRequest $req) 本接口 (  DescribeDomainBaseInfo) 获取域名基本信息。
 * @method Models\DescribeDomainNameListResponse DescribeDomainNameList(Models\DescribeDomainNameListRequest $req) 本接口 (  DescribeDomainNameList ) 我的域名列表。
 * @method Models\DescribeDomainPriceListResponse DescribeDomainPriceList(Models\DescribeDomainPriceListRequest $req) 按照域名后缀获取对应的价格列表
 * @method Models\DescribeDomainSimpleInfoResponse DescribeDomainSimpleInfo(Models\DescribeDomainSimpleInfoRequest $req) 获取域名实名信息详情
 * @method Models\DescribePayWaitDetailResponse DescribePayWaitDetail(Models\DescribePayWaitDetailRequest $req) 等待支付详情接口
 * @method Models\DescribePhoneEmailListResponse DescribePhoneEmailList(Models\DescribePhoneEmailListRequest $req) 本接口用于获取已验证的手机邮箱列表
 * @method Models\DescribePreAuctionListResponse DescribePreAuctionList(Models\DescribePreAuctionListRequest $req) 用于预释放竞价列表数据查询
 * @method Models\DescribePreDomainListResponse DescribePreDomainList(Models\DescribePreDomainListRequest $req) 用户服务商提前获取预释放域名数据，查询数据根据结束时间进行倒序。
 * @method Models\DescribePreReleaseListResponse DescribePreReleaseList(Models\DescribePreReleaseListRequest $req) 接口用于预释放页面查询
 * @method Models\DescribeReservedBidInfoResponse DescribeReservedBidInfo(Models\DescribeReservedBidInfoRequest $req) 接口用于获取合作商竞价过程中竞价详情数据
 * @method Models\DescribeReservedPreDomainInfoResponse DescribeReservedPreDomainInfo(Models\DescribeReservedPreDomainInfoRequest $req) 合作商用于查询预约预释放状态信息内容
 * @method Models\DescribeTemplateResponse DescribeTemplate(Models\DescribeTemplateRequest $req) 本接口 (DescribeTemplate) 用于获取模板信息。
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) 本接口 (DescribeTemplateList) 用于获取信息模板列表。
 * @method Models\DescribeTldListResponse DescribeTldList(Models\DescribeTldListRequest $req) 用于获取域名注册当前支持注册的后缀
 * @method Models\DescribeUnPreDomainDetailResponse DescribeUnPreDomainDetail(Models\DescribeUnPreDomainDetailRequest $req) 查询预释放未预约域名详情接口
 * @method Models\ModifyCustomDnsHostResponse ModifyCustomDnsHost(Models\ModifyCustomDnsHostRequest $req) 修改自定义DNS Host
域名在“正常状态”下可修改已经存在的自定义DNS Host，域名如果“未实名”则无法修改，账户如果未实名则无法修改。 默认每个域名 自定义DNS Host 数量不超过10个
 * @method Models\ModifyDomainDNSBatchResponse ModifyDomainDNSBatch(Models\ModifyDomainDNSBatchRequest $req) 本接口 ( ModifyDomainDNSBatch) 用于批量域名 DNS 修改 。
 * @method Models\ModifyDomainOwnerBatchResponse ModifyDomainOwnerBatch(Models\ModifyDomainOwnerBatchRequest $req) 本接口 ( ModifyDomainOwnerBatch) 用于域名批量账号间转移 。
 * @method Models\ModifyIntlCustomDnsHostResponse ModifyIntlCustomDnsHost(Models\ModifyIntlCustomDnsHostRequest $req) 国际站-修改DNS Host
 * @method Models\ModifyTemplateResponse ModifyTemplate(Models\ModifyTemplateRequest $req) 修改模板信息,仅能修改模板未通过审核的，即[模板详情](https://cloud.tencent.com/document/product/242/50018)中：AuditStatus不为Approved状态的
 * @method Models\RenewDomainBatchResponse RenewDomainBatch(Models\RenewDomainBatchRequest $req) 本接口 ( RenewDomainBatch ) 用于批量续费域名 。
 * @method Models\ReservedPreDomainsResponse ReservedPreDomains(Models\ReservedPreDomainsRequest $req) 用于合作商对预释放域名进行预留。
 * @method Models\SendPhoneEmailCodeResponse SendPhoneEmailCode(Models\SendPhoneEmailCodeRequest $req) 此接口用于发送手机邮箱验证码。
 * @method Models\SetDomainAutoRenewResponse SetDomainAutoRenew(Models\SetDomainAutoRenewRequest $req) 本接口 ( SetDomainAutoRenew ) 用于设置域名自动续费。
当前操作暂不受域名状态限制
 * @method Models\SyncCustomDnsHostResponse SyncCustomDnsHost(Models\SyncCustomDnsHostRequest $req) 同步自定义DNS Host，将域名已经设置的host配置数据从注册局同步下来
 * @method Models\TransferInDomainBatchResponse TransferInDomainBatch(Models\TransferInDomainBatchRequest $req) 本接口 ( TransferInDomainBatch ) 用于批量转入域名 。
 * @method Models\TransferProhibitionBatchResponse TransferProhibitionBatch(Models\TransferProhibitionBatchRequest $req) 本接口 ( TransferProhibitionBatch ) 用于批量禁止域名转移 。
 * @method Models\UpdateProhibitionBatchResponse UpdateProhibitionBatch(Models\UpdateProhibitionBatchRequest $req) 本接口 ( UpdateProhibitionBatch ) 用于批量禁止更新锁。
 * @method Models\UploadImageResponse UploadImage(Models\UploadImageRequest $req) 本接口 ( UploadImage ) 用于证件图片上传 。
 */

class DomainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "domain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "domain";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("domain")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
