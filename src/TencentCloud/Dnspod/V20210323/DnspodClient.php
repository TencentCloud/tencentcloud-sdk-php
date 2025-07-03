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

备注：该接口不支持添加子域名。
 * @method Models\CreateDomainAliasResponse CreateDomainAlias(Models\CreateDomainAliasRequest $req) 创建域名别名
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 批量添加域名
 * @method Models\CreateDomainCustomLineResponse CreateDomainCustomLine(Models\CreateDomainCustomLineRequest $req) 创建域名的自定义线路
 * @method Models\CreateDomainGroupResponse CreateDomainGroup(Models\CreateDomainGroupRequest $req) 创建域名分组
 * @method Models\CreateDomainsAnalyticsFileResponse CreateDomainsAnalyticsFile(Models\CreateDomainsAnalyticsFileRequest $req) 批量导出域名解析量
 * @method Models\CreateLineGroupResponse CreateLineGroup(Models\CreateLineGroupRequest $req) 创建域名的线路分组
 * @method Models\CreateLineGroupCopyResponse CreateLineGroupCopy(Models\CreateLineGroupCopyRequest $req) 复制域名的线路分组
 * @method Models\CreateRecordResponse CreateRecord(Models\CreateRecordRequest $req) 添加记录
备注：新添加的解析记录存在短暂的索引延迟，如果查询不到新增记录，请在 30 秒后重试
 * @method Models\CreateRecordBatchResponse CreateRecordBatch(Models\CreateRecordBatchRequest $req) 批量添加记录
 * @method Models\CreateRecordGroupResponse CreateRecordGroup(Models\CreateRecordGroupRequest $req) 添加记录分组
 * @method Models\CreateSnapshotResponse CreateSnapshot(Models\CreateSnapshotRequest $req) 创建快照
 * @method Models\CreateSubDomainsAnalyticsFileResponse CreateSubDomainsAnalyticsFile(Models\CreateSubDomainsAnalyticsFileRequest $req) 批量导出子域名解析量
 * @method Models\CreateSubdomainValidateTXTValueResponse CreateSubdomainValidateTXTValue(Models\CreateSubdomainValidateTXTValueRequest $req) 创建添加子域名 Zone 域解析时所需要的 TXT 记录值
 * @method Models\CreateTXTRecordResponse CreateTXTRecord(Models\CreateTXTRecordRequest $req) 添加TXT记录
备注：新添加的解析记录存在短暂的索引延迟，如果查询不到新增记录，请在 30 秒后重试
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 删除域名
 * @method Models\DeleteDomainAliasResponse DeleteDomainAlias(Models\DeleteDomainAliasRequest $req) 删除域名别名
 * @method Models\DeleteDomainBatchResponse DeleteDomainBatch(Models\DeleteDomainBatchRequest $req) 批量删除域名
 * @method Models\DeleteDomainCustomLineResponse DeleteDomainCustomLine(Models\DeleteDomainCustomLineRequest $req) 删除域名的自定义线路
 * @method Models\DeleteLineGroupResponse DeleteLineGroup(Models\DeleteLineGroupRequest $req) 删除域名的线路分组
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) 删除记录
 * @method Models\DeleteRecordBatchResponse DeleteRecordBatch(Models\DeleteRecordBatchRequest $req) 批量删除解析记录
备注：因存储限制， 建议一次批量删除最多2000条
 * @method Models\DeleteRecordGroupResponse DeleteRecordGroup(Models\DeleteRecordGroupRequest $req) 删除记录分组
 * @method Models\DeleteShareDomainResponse DeleteShareDomain(Models\DeleteShareDomainRequest $req) 按账号删除域名共享
 * @method Models\DeleteSnapshotResponse DeleteSnapshot(Models\DeleteSnapshotRequest $req) 删除快照
 * @method Models\DescribeBatchTaskResponse DescribeBatchTask(Models\DescribeBatchTaskRequest $req) 获取批量操作任务执行详情
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) 获取域名信息
 * @method Models\DescribeDomainAliasListResponse DescribeDomainAliasList(Models\DescribeDomainAliasListRequest $req) 获取域名别名列表
 * @method Models\DescribeDomainAnalyticsResponse DescribeDomainAnalytics(Models\DescribeDomainAnalyticsRequest $req) 统计各个域名的解析量，帮助您了解流量情况、时间段分布。支持查看近 3 个月内的统计情况
 * @method Models\DescribeDomainAndRecordListResponse DescribeDomainAndRecordList(Models\DescribeDomainAndRecordListRequest $req) 批量操作中搜索域名
 * @method Models\DescribeDomainCustomLineListResponse DescribeDomainCustomLineList(Models\DescribeDomainCustomLineListRequest $req) 获取域名的自定义线路列表
 * @method Models\DescribeDomainFilterListResponse DescribeDomainFilterList(Models\DescribeDomainFilterListRequest $req) 获取域名筛选列表
备注：新添加的解析记录存在短暂的索引延迟，如果查询不到新增记录，请在 30 秒后重试
 * @method Models\DescribeDomainGroupListResponse DescribeDomainGroupList(Models\DescribeDomainGroupListRequest $req) 获取域名分组列表
 * @method Models\DescribeDomainListResponse DescribeDomainList(Models\DescribeDomainListRequest $req) 获取域名列表
 * @method Models\DescribeDomainLogListResponse DescribeDomainLogList(Models\DescribeDomainLogListRequest $req) 获取域名日志
 * @method Models\DescribeDomainPreviewResponse DescribeDomainPreview(Models\DescribeDomainPreviewRequest $req) 获取域名概览信息
 * @method Models\DescribeDomainPurviewResponse DescribeDomainPurview(Models\DescribeDomainPurviewRequest $req) 获取域名权限
 * @method Models\DescribeDomainShareInfoResponse DescribeDomainShareInfo(Models\DescribeDomainShareInfoRequest $req) 获取域名共享信息
 * @method Models\DescribeDomainShareUserListResponse DescribeDomainShareUserList(Models\DescribeDomainShareUserListRequest $req) 获取指定域名的已共享列表
 * @method Models\DescribeDomainVipListResponse DescribeDomainVipList(Models\DescribeDomainVipListRequest $req) 获取套餐列表
 * @method Models\DescribeDomainWhoisResponse DescribeDomainWhois(Models\DescribeDomainWhoisRequest $req) 获取域名Whois信息
 * @method Models\DescribeFileInfoByJobIdResponse DescribeFileInfoByJobId(Models\DescribeFileInfoByJobIdRequest $req) 根据批量任务ID获取生成文件信息
 * @method Models\DescribeLineGroupListResponse DescribeLineGroupList(Models\DescribeLineGroupListRequest $req) 获取域名的线路分组列表
 * @method Models\DescribePackageDetailResponse DescribePackageDetail(Models\DescribePackageDetailRequest $req) 获取各套餐配置详情
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) 获取记录信息
 * @method Models\DescribeRecordExistExceptDefaultNSResponse DescribeRecordExistExceptDefaultNS(Models\DescribeRecordExistExceptDefaultNSRequest $req) 判断是否有除系统默认的@-NS记录之外的记录存在
 * @method Models\DescribeRecordFilterListResponse DescribeRecordFilterList(Models\DescribeRecordFilterListRequest $req) 获取某个域名下的解析记录列表
备注：
1. 新添加的解析记录存在短暂的索引延迟，如果查询不到新增记录，请在 30 秒后重试
2.  API获取的记录总条数会比控制台多2条，原因是： 为了防止用户误操作导致解析服务不可用，对2021-10-29 14:24:26之后添加的域名，在控制台都不显示这2条NS记录。
 * @method Models\DescribeRecordGroupListResponse DescribeRecordGroupList(Models\DescribeRecordGroupListRequest $req) 查询解析记录分组列表
 * @method Models\DescribeRecordLineCategoryListResponse DescribeRecordLineCategoryList(Models\DescribeRecordLineCategoryListRequest $req) 按分类返回线路列表
 * @method Models\DescribeRecordLineListResponse DescribeRecordLineList(Models\DescribeRecordLineListRequest $req) 获取等级允许的线路
 * @method Models\DescribeRecordListResponse DescribeRecordList(Models\DescribeRecordListRequest $req) 获取某个域名下的解析记录列表
备注：
1. 新添加的解析记录存在短暂的索引延迟，如果查询不到新增记录，请在 30 秒后重试
2.  API获取的记录总条数会比控制台多2条，原因是： 为了防止用户误操作导致解析服务不可用，对2021-10-29 14:24:26之后添加的域名，在控制台都不显示这2条NS记录。
 * @method Models\DescribeRecordSnapshotRollbackResultResponse DescribeRecordSnapshotRollbackResult(Models\DescribeRecordSnapshotRollbackResultRequest $req) 查询解析记录重新回滚的结果
 * @method Models\DescribeRecordTypeResponse DescribeRecordType(Models\DescribeRecordTypeRequest $req) 获取等级允许的记录类型
 * @method Models\DescribeSnapshotConfigResponse DescribeSnapshotConfig(Models\DescribeSnapshotConfigRequest $req) 查询解析快照配置
 * @method Models\DescribeSnapshotListResponse DescribeSnapshotList(Models\DescribeSnapshotListRequest $req) 查询快照列表
 * @method Models\DescribeSnapshotRollbackResultResponse DescribeSnapshotRollbackResult(Models\DescribeSnapshotRollbackResultRequest $req) 查询快照回滚结果
 * @method Models\DescribeSnapshotRollbackTaskResponse DescribeSnapshotRollbackTask(Models\DescribeSnapshotRollbackTaskRequest $req) 查询最近一次回滚
 * @method Models\DescribeSubdomainAnalyticsResponse DescribeSubdomainAnalytics(Models\DescribeSubdomainAnalyticsRequest $req) 统计子域名的解析量，帮助您了解流量情况、时间段分布。支持查看近 3 个月内的统计情况。仅付费套餐域名可用。
 * @method Models\DescribeSubdomainValidateStatusResponse DescribeSubdomainValidateStatus(Models\DescribeSubdomainValidateStatusRequest $req) 查看添加子域名 Zone 域解析 TXT 记录值验证状态
 * @method Models\DescribeUserDetailResponse DescribeUserDetail(Models\DescribeUserDetailRequest $req) 获取账户信息
 * @method Models\DescribeVASStatisticResponse DescribeVASStatistic(Models\DescribeVASStatisticRequest $req) 获取域名增值服务用量
 * @method Models\DescribeVasListResponse DescribeVasList(Models\DescribeVasListRequest $req) 获取增值服务列表
 * @method Models\DownloadSnapshotResponse DownloadSnapshot(Models\DownloadSnapshotRequest $req) 下载快照
 * @method Models\ModifyDomainCustomLineResponse ModifyDomainCustomLine(Models\ModifyDomainCustomLineRequest $req) 修改域名的自定义线路
 * @method Models\ModifyDomainLockResponse ModifyDomainLock(Models\ModifyDomainLockRequest $req) 锁定域名
 * @method Models\ModifyDomainOwnerResponse ModifyDomainOwner(Models\ModifyDomainOwnerRequest $req) 域名过户
 * @method Models\ModifyDomainRemarkResponse ModifyDomainRemark(Models\ModifyDomainRemarkRequest $req) 设置域名备注
 * @method Models\ModifyDomainStatusResponse ModifyDomainStatus(Models\ModifyDomainStatusRequest $req) 修改域名状态
 * @method Models\ModifyDomainToGroupResponse ModifyDomainToGroup(Models\ModifyDomainToGroupRequest $req) 修改域名所属分组
 * @method Models\ModifyDomainUnlockResponse ModifyDomainUnlock(Models\ModifyDomainUnlockRequest $req) 域名锁定解锁
 * @method Models\ModifyDynamicDNSResponse ModifyDynamicDNS(Models\ModifyDynamicDNSRequest $req) 更新动态 DNS 记录
 * @method Models\ModifyLineGroupResponse ModifyLineGroup(Models\ModifyLineGroupRequest $req) 修改域名的线路分组
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
 * @method Models\ModifyTXTRecordResponse ModifyTXTRecord(Models\ModifyTXTRecordRequest $req) 修改TXT记录
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
