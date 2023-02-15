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

namespace TencentCloud\Dnspod\V20210323;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dnspod\V20210323\Models as Models;

/**
 * @method Models\CheckRecordSnapshotRollbackResponse CheckRecordSnapshotRollback(Models\CheckRecordSnapshotRollbackRequest $req) 回滚前检查单条记录
 * @method Models\CheckSnapshotRollbackResponse CheckSnapshotRollback(Models\CheckSnapshotRollbackRequest $req) 快照回滚前检查
 * @method Models\CreateDealResponse CreateDeal(Models\CreateDealRequest $req) DNSPod商品下单
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) 添加域名
 * @method Models\CreateDomainAliasResponse CreateDomainAlias(Models\CreateDomainAliasRequest $req) 创建域名别名
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 批量添加域名
 * @method Models\CreateDomainGroupResponse CreateDomainGroup(Models\CreateDomainGroupRequest $req) 创建域名分组
 * @method Models\CreateRecordResponse CreateRecord(Models\CreateRecordRequest $req) 添加记录
 * @method Models\CreateRecordBatchResponse CreateRecordBatch(Models\CreateRecordBatchRequest $req) 批量添加记录
 * @method Models\CreateRecordGroupResponse CreateRecordGroup(Models\CreateRecordGroupRequest $req) 添加记录分组
 * @method Models\CreateSnapshotResponse CreateSnapshot(Models\CreateSnapshotRequest $req) 创建快照
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 删除域名
 * @method Models\DeleteDomainAliasResponse DeleteDomainAlias(Models\DeleteDomainAliasRequest $req) 删除域名别名
 * @method Models\DeleteDomainBatchResponse DeleteDomainBatch(Models\DeleteDomainBatchRequest $req) 批量删除域名
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) 删除记录
 * @method Models\DeleteRecordGroupResponse DeleteRecordGroup(Models\DeleteRecordGroupRequest $req) 删除记录分组
 * @method Models\DeleteShareDomainResponse DeleteShareDomain(Models\DeleteShareDomainRequest $req) 删除域名共享
 * @method Models\DeleteSnapshotResponse DeleteSnapshot(Models\DeleteSnapshotRequest $req) 删除快照
 * @method Models\DescribeBatchTaskResponse DescribeBatchTask(Models\DescribeBatchTaskRequest $req) 获取任务详情
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) 获取域名信息
 * @method Models\DescribeDomainAliasListResponse DescribeDomainAliasList(Models\DescribeDomainAliasListRequest $req) 获取域名别名列表
 * @method Models\DescribeDomainAnalyticsResponse DescribeDomainAnalytics(Models\DescribeDomainAnalyticsRequest $req) 统计各个域名的解析量，帮助您了解流量情况、时间段分布。支持查看近 3 个月内的统计情况
 * @method Models\DescribeDomainGroupListResponse DescribeDomainGroupList(Models\DescribeDomainGroupListRequest $req) 获取域名分组列表
 * @method Models\DescribeDomainListResponse DescribeDomainList(Models\DescribeDomainListRequest $req) 获取域名列表
 * @method Models\DescribeDomainLogListResponse DescribeDomainLogList(Models\DescribeDomainLogListRequest $req) 获取域名日志
 * @method Models\DescribeDomainPreviewResponse DescribeDomainPreview(Models\DescribeDomainPreviewRequest $req) 获取域名概览信息
 * @method Models\DescribeDomainPurviewResponse DescribeDomainPurview(Models\DescribeDomainPurviewRequest $req) 获取域名权限
 * @method Models\DescribeDomainShareInfoResponse DescribeDomainShareInfo(Models\DescribeDomainShareInfoRequest $req) 获取域名共享信息
 * @method Models\DescribeDomainWhoisResponse DescribeDomainWhois(Models\DescribeDomainWhoisRequest $req) 获取域名Whois信息
 * @method Models\DescribePackageDetailResponse DescribePackageDetail(Models\DescribePackageDetailRequest $req) 获取各套餐配置详情
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) 获取记录信息
 * @method Models\DescribeRecordExistExceptDefaultNSResponse DescribeRecordExistExceptDefaultNS(Models\DescribeRecordExistExceptDefaultNSRequest $req) 判断是否有除系统默认的@-NS记录之外的记录存在
 * @method Models\DescribeRecordGroupListResponse DescribeRecordGroupList(Models\DescribeRecordGroupListRequest $req) 查询解析记录分组列表
 * @method Models\DescribeRecordLineListResponse DescribeRecordLineList(Models\DescribeRecordLineListRequest $req) 获取等级允许的线路
 * @method Models\DescribeRecordListResponse DescribeRecordList(Models\DescribeRecordListRequest $req) 获取某个域名下的解析记录列表
 * @method Models\DescribeRecordSnapshotRollbackResultResponse DescribeRecordSnapshotRollbackResult(Models\DescribeRecordSnapshotRollbackResultRequest $req) 查询解析记录重新回滚的结果
 * @method Models\DescribeRecordTypeResponse DescribeRecordType(Models\DescribeRecordTypeRequest $req) 获取等级允许的记录类型
 * @method Models\DescribeSnapshotConfigResponse DescribeSnapshotConfig(Models\DescribeSnapshotConfigRequest $req) 查询解析快照配置
 * @method Models\DescribeSnapshotListResponse DescribeSnapshotList(Models\DescribeSnapshotListRequest $req) 查询快照列表
 * @method Models\DescribeSnapshotRollbackResultResponse DescribeSnapshotRollbackResult(Models\DescribeSnapshotRollbackResultRequest $req) 查询快照回滚结果
 * @method Models\DescribeSnapshotRollbackTaskResponse DescribeSnapshotRollbackTask(Models\DescribeSnapshotRollbackTaskRequest $req) 查询最近一次回滚
 * @method Models\DescribeSubdomainAnalyticsResponse DescribeSubdomainAnalytics(Models\DescribeSubdomainAnalyticsRequest $req) 统计子域名的解析量，帮助您了解流量情况、时间段分布。支持查看近 3 个月内的统计情况。仅付费套餐域名可用。
 * @method Models\DescribeUserDetailResponse DescribeUserDetail(Models\DescribeUserDetailRequest $req) 获取帐户信息
 * @method Models\DescribeVASStatisticResponse DescribeVASStatistic(Models\DescribeVASStatisticRequest $req) 获取域名增值服务用量
 * @method Models\DownloadSnapshotResponse DownloadSnapshot(Models\DownloadSnapshotRequest $req) 下载快照
 * @method Models\ModifyDomainLockResponse ModifyDomainLock(Models\ModifyDomainLockRequest $req) 锁定域名
 * @method Models\ModifyDomainOwnerResponse ModifyDomainOwner(Models\ModifyDomainOwnerRequest $req) 域名过户
 * @method Models\ModifyDomainRemarkResponse ModifyDomainRemark(Models\ModifyDomainRemarkRequest $req) 设置域名备注
 * @method Models\ModifyDomainStatusResponse ModifyDomainStatus(Models\ModifyDomainStatusRequest $req) 修改域名状态
 * @method Models\ModifyDomainUnlockResponse ModifyDomainUnlock(Models\ModifyDomainUnlockRequest $req) 域名锁定解锁
 * @method Models\ModifyDynamicDNSResponse ModifyDynamicDNS(Models\ModifyDynamicDNSRequest $req) 更新动态 DNS 记录
 * @method Models\ModifyPackageAutoRenewResponse ModifyPackageAutoRenew(Models\ModifyPackageAutoRenewRequest $req) DNS 解析套餐自动续费设置
 * @method Models\ModifyRecordResponse ModifyRecord(Models\ModifyRecordRequest $req) 修改记录
 * @method Models\ModifyRecordBatchResponse ModifyRecordBatch(Models\ModifyRecordBatchRequest $req) 批量修改记录
 * @method Models\ModifyRecordFieldsResponse ModifyRecordFields(Models\ModifyRecordFieldsRequest $req) 修改记录可选字段
 * @method Models\ModifyRecordGroupResponse ModifyRecordGroup(Models\ModifyRecordGroupRequest $req) 修改记录分组
 * @method Models\ModifyRecordRemarkResponse ModifyRecordRemark(Models\ModifyRecordRemarkRequest $req) 设置记录备注
 * @method Models\ModifyRecordStatusResponse ModifyRecordStatus(Models\ModifyRecordStatusRequest $req) 修改解析记录的状态
 * @method Models\ModifyRecordToGroupResponse ModifyRecordToGroup(Models\ModifyRecordToGroupRequest $req) 将记录添加到分组
 * @method Models\ModifySnapshotConfigResponse ModifySnapshotConfig(Models\ModifySnapshotConfigRequest $req) 修改快照配置
 * @method Models\ModifySubdomainStatusResponse ModifySubdomainStatus(Models\ModifySubdomainStatusRequest $req) 暂停子域名的解析记录
 * @method Models\ModifyVasAutoRenewStatusResponse ModifyVasAutoRenewStatus(Models\ModifyVasAutoRenewStatusRequest $req) 增值服务自动续费设置
 * @method Models\PayOrderWithBalanceResponse PayOrderWithBalance(Models\PayOrderWithBalanceRequest $req) DNSPod商品余额支付
 * @method Models\RollbackRecordSnapshotResponse RollbackRecordSnapshot(Models\RollbackRecordSnapshotRequest $req) 重新回滚指定解析记录快照
 * @method Models\RollbackSnapshotResponse RollbackSnapshot(Models\RollbackSnapshotRequest $req) 回滚快照
 */

class DnspodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dnspod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dnspod";

    /**
     * @var string
     */
    protected $version = "2021-03-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("dnspod")."\\"."V20210323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
