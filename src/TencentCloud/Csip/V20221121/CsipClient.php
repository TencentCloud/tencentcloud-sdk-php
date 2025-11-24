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

namespace TencentCloud\Csip\V20221121;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Csip\V20221121\Models as Models;

/**
 * @method Models\AddNewBindRoleUserResponse AddNewBindRoleUser(Models\AddNewBindRoleUserRequest $req) csip角色授权绑定接口
 * @method Models\CreateAccessKeyCheckTaskResponse CreateAccessKeyCheckTask(Models\CreateAccessKeyCheckTaskRequest $req) 检测AK 异步任务
 * @method Models\CreateAccessKeySyncTaskResponse CreateAccessKeySyncTask(Models\CreateAccessKeySyncTaskRequest $req) 发起AK资产同步任务
 * @method Models\CreateDomainAndIpResponse CreateDomainAndIp(Models\CreateDomainAndIpRequest $req) 创建域名、ip相关信息
 * @method Models\CreateRiskCenterScanTaskResponse CreateRiskCenterScanTask(Models\CreateRiskCenterScanTaskRequest $req) 创建风险中心扫描任务
 * @method Models\DeleteDomainAndIpResponse DeleteDomainAndIp(Models\DeleteDomainAndIpRequest $req) 删除域名和ip请求
 * @method Models\DeleteRiskScanTaskResponse DeleteRiskScanTask(Models\DeleteRiskScanTaskRequest $req) 删除风险中心扫描任务
 * @method Models\DescribeAbnormalCallRecordResponse DescribeAbnormalCallRecord(Models\DescribeAbnormalCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeAccessKeyAlarmResponse DescribeAccessKeyAlarm(Models\DescribeAccessKeyAlarmRequest $req) 访问密钥告警记录列表
 * @method Models\DescribeAccessKeyAlarmDetailResponse DescribeAccessKeyAlarmDetail(Models\DescribeAccessKeyAlarmDetailRequest $req) 访问密钥告警记录详情
 * @method Models\DescribeAccessKeyAssetResponse DescribeAccessKeyAsset(Models\DescribeAccessKeyAssetRequest $req) 获取用户访问密钥资产列表
 * @method Models\DescribeAccessKeyRiskResponse DescribeAccessKeyRisk(Models\DescribeAccessKeyRiskRequest $req) 访问密钥风险记录列表
 * @method Models\DescribeAccessKeyRiskDetailResponse DescribeAccessKeyRiskDetail(Models\DescribeAccessKeyRiskDetailRequest $req) 访问密钥风险记录详情
 * @method Models\DescribeAccessKeyUserDetailResponse DescribeAccessKeyUserDetail(Models\DescribeAccessKeyUserDetailRequest $req) 查询用户的账号详情
 * @method Models\DescribeAccessKeyUserListResponse DescribeAccessKeyUserList(Models\DescribeAccessKeyUserListRequest $req) 查询用户的账号列表
 * @method Models\DescribeAlertListResponse DescribeAlertList(Models\DescribeAlertListRequest $req) 告警中心全量告警列表接口
 * @method Models\DescribeAssetProcessListResponse DescribeAssetProcessList(Models\DescribeAssetProcessListRequest $req) 查询云边界分析-暴露路径下主机节点的进程列表
 * @method Models\DescribeAssetRiskListResponse DescribeAssetRiskList(Models\DescribeAssetRiskListRequest $req) 资产视角下云资源配置风险列表
 * @method Models\DescribeAssetViewVulRiskListResponse DescribeAssetViewVulRiskList(Models\DescribeAssetViewVulRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeCFWAssetStatisticsResponse DescribeCFWAssetStatistics(Models\DescribeCFWAssetStatisticsRequest $req) 云防资产中心统计数据
 * @method Models\DescribeCSIPRiskStatisticsResponse DescribeCSIPRiskStatistics(Models\DescribeCSIPRiskStatisticsRequest $req) 获取风险中心风险概况示例
 * @method Models\DescribeCVMAssetInfoResponse DescribeCVMAssetInfo(Models\DescribeCVMAssetInfoRequest $req) cvm详情
 * @method Models\DescribeCVMAssetsResponse DescribeCVMAssets(Models\DescribeCVMAssetsRequest $req) 获取cvm列表
 * @method Models\DescribeCallRecordResponse DescribeCallRecord(Models\DescribeCallRecordRequest $req) 获取调用记录列表
 * @method Models\DescribeCheckViewRisksResponse DescribeCheckViewRisks(Models\DescribeCheckViewRisksRequest $req) 检查视角下云资源配置风险列表
 * @method Models\DescribeClusterAssetsResponse DescribeClusterAssets(Models\DescribeClusterAssetsRequest $req) 集群列表
 * @method Models\DescribeClusterPodAssetsResponse DescribeClusterPodAssets(Models\DescribeClusterPodAssetsRequest $req) 集群pod列表
 * @method Models\DescribeConfigCheckRulesResponse DescribeConfigCheckRules(Models\DescribeConfigCheckRulesRequest $req) 云资源配置风险规则列表示例
 * @method Models\DescribeDbAssetInfoResponse DescribeDbAssetInfo(Models\DescribeDbAssetInfoRequest $req) db资产详情
 * @method Models\DescribeDbAssetsResponse DescribeDbAssets(Models\DescribeDbAssetsRequest $req) 数据库资产列表
 * @method Models\DescribeDomainAssetsResponse DescribeDomainAssets(Models\DescribeDomainAssetsRequest $req) 域名列表
 * @method Models\DescribeExposeAssetCategoryResponse DescribeExposeAssetCategory(Models\DescribeExposeAssetCategoryRequest $req) 云边界分析资产分类
 * @method Models\DescribeExposePathResponse DescribeExposePath(Models\DescribeExposePathRequest $req) 查询云边界分析路径节点
 * @method Models\DescribeExposuresResponse DescribeExposures(Models\DescribeExposuresRequest $req) 云边界分析资产列表
 * @method Models\DescribeGatewayAssetsResponse DescribeGatewayAssets(Models\DescribeGatewayAssetsRequest $req) 获取网关列表
 * @method Models\DescribeHighBaseLineRiskListResponse DescribeHighBaseLineRiskList(Models\DescribeHighBaseLineRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的高危基线风险列表
 * @method Models\DescribeListenerListResponse DescribeListenerList(Models\DescribeListenerListRequest $req) 查询clb监听器列表
 * @method Models\DescribeNICAssetsResponse DescribeNICAssets(Models\DescribeNICAssetsRequest $req) 获取网卡列表
 * @method Models\DescribeOrganizationInfoResponse DescribeOrganizationInfo(Models\DescribeOrganizationInfoRequest $req) 查询集团账号详情
 * @method Models\DescribeOrganizationUserInfoResponse DescribeOrganizationUserInfo(Models\DescribeOrganizationUserInfoRequest $req) 查询集团账号用户列表
 * @method Models\DescribeOtherCloudAssetsResponse DescribeOtherCloudAssets(Models\DescribeOtherCloudAssetsRequest $req) 资产列表
 * @method Models\DescribePublicIpAssetsResponse DescribePublicIpAssets(Models\DescribePublicIpAssetsRequest $req) ip公网列表
 * @method Models\DescribeRepositoryImageAssetsResponse DescribeRepositoryImageAssets(Models\DescribeRepositoryImageAssetsRequest $req) 仓库镜像列表
 * @method Models\DescribeRiskCallRecordResponse DescribeRiskCallRecord(Models\DescribeRiskCallRecordRequest $req) 获取风险调用记录列表
 * @method Models\DescribeRiskCenterAssetViewCFGRiskListResponse DescribeRiskCenterAssetViewCFGRiskList(Models\DescribeRiskCenterAssetViewCFGRiskListRequest $req) 获取资产视角的配置风险列表
 * @method Models\DescribeRiskCenterAssetViewPortRiskListResponse DescribeRiskCenterAssetViewPortRiskList(Models\DescribeRiskCenterAssetViewPortRiskListRequest $req) 获取资产视角的端口风险列表
 * @method Models\DescribeRiskCenterAssetViewVULRiskListResponse DescribeRiskCenterAssetViewVULRiskList(Models\DescribeRiskCenterAssetViewVULRiskListRequest $req) 获取资产视角的漏洞风险列表
 * @method Models\DescribeRiskCenterAssetViewWeakPasswordRiskListResponse DescribeRiskCenterAssetViewWeakPasswordRiskList(Models\DescribeRiskCenterAssetViewWeakPasswordRiskListRequest $req) 获取资产视角的弱口令风险列表
 * @method Models\DescribeRiskCenterCFGViewCFGRiskListResponse DescribeRiskCenterCFGViewCFGRiskList(Models\DescribeRiskCenterCFGViewCFGRiskListRequest $req) 获取配置视角的配置风险列表
 * @method Models\DescribeRiskCenterPortViewPortRiskListResponse DescribeRiskCenterPortViewPortRiskList(Models\DescribeRiskCenterPortViewPortRiskListRequest $req) 获取端口视角的端口风险列表
 * @method Models\DescribeRiskCenterServerRiskListResponse DescribeRiskCenterServerRiskList(Models\DescribeRiskCenterServerRiskListRequest $req) 获取风险服务列表
 * @method Models\DescribeRiskCenterVULViewVULRiskListResponse DescribeRiskCenterVULViewVULRiskList(Models\DescribeRiskCenterVULViewVULRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\DescribeRiskCenterWebsiteRiskListResponse DescribeRiskCenterWebsiteRiskList(Models\DescribeRiskCenterWebsiteRiskListRequest $req) 获取内容风险列表
 * @method Models\DescribeRiskDetailListResponse DescribeRiskDetailList(Models\DescribeRiskDetailListRequest $req) 风险详情列表示例
 * @method Models\DescribeRiskRuleDetailResponse DescribeRiskRuleDetail(Models\DescribeRiskRuleDetailRequest $req) 查询风险规则详情示例
 * @method Models\DescribeRiskRulesResponse DescribeRiskRules(Models\DescribeRiskRulesRequest $req) 高级配置风险规则列表示例
 * @method Models\DescribeScanReportListResponse DescribeScanReportList(Models\DescribeScanReportListRequest $req) 获取扫描报告列表
 * @method Models\DescribeScanStatisticResponse DescribeScanStatistic(Models\DescribeScanStatisticRequest $req) 查询云边界分析扫描结果统计信息
 * @method Models\DescribeScanTaskListResponse DescribeScanTaskList(Models\DescribeScanTaskListRequest $req) 获取扫描任务列表
 * @method Models\DescribeSearchBugInfoResponse DescribeSearchBugInfo(Models\DescribeSearchBugInfoRequest $req) 立体防护中心查询漏洞信息
 * @method Models\DescribeSourceIPAssetResponse DescribeSourceIPAsset(Models\DescribeSourceIPAssetRequest $req) 获取用户访问密钥资产列表（源IP视角）
 * @method Models\DescribeSubUserInfoResponse DescribeSubUserInfo(Models\DescribeSubUserInfoRequest $req) 查询集团的子账号列表
 * @method Models\DescribeSubnetAssetsResponse DescribeSubnetAssets(Models\DescribeSubnetAssetsRequest $req) 获取子网列表
 * @method Models\DescribeTaskLogListResponse DescribeTaskLogList(Models\DescribeTaskLogListRequest $req) 获取任务扫描报告列表
 * @method Models\DescribeTaskLogURLResponse DescribeTaskLogURL(Models\DescribeTaskLogURLRequest $req) 获取报告下载的临时链接
 * @method Models\DescribeTopAttackInfoResponse DescribeTopAttackInfo(Models\DescribeTopAttackInfoRequest $req) 查询TOP攻击信息
 * @method Models\DescribeUebaRuleResponse DescribeUebaRule(Models\DescribeUebaRuleRequest $req) 查询用户行为分析策略列表
 * @method Models\DescribeUserCallRecordResponse DescribeUserCallRecord(Models\DescribeUserCallRecordRequest $req) 获取账号调用记录列表
 * @method Models\DescribeVULListResponse DescribeVULList(Models\DescribeVULListRequest $req) 新安全中心风险中心-漏洞列表
 * @method Models\DescribeVULRiskAdvanceCFGListResponse DescribeVULRiskAdvanceCFGList(Models\DescribeVULRiskAdvanceCFGListRequest $req) 查询漏洞风险高级配置
 * @method Models\DescribeVULRiskDetailResponse DescribeVULRiskDetail(Models\DescribeVULRiskDetailRequest $req) 获取漏洞展开详情
 * @method Models\DescribeVpcAssetsResponse DescribeVpcAssets(Models\DescribeVpcAssetsRequest $req) 获取vpc列表
 * @method Models\DescribeVulRiskListResponse DescribeVulRiskList(Models\DescribeVulRiskListRequest $req) 查询云边界分析-暴露路径下主机节点的漏洞列表
 * @method Models\DescribeVulViewVulRiskListResponse DescribeVulViewVulRiskList(Models\DescribeVulViewVulRiskListRequest $req) 获取漏洞视角的漏洞风险列表
 * @method Models\ModifyOrganizationAccountStatusResponse ModifyOrganizationAccountStatus(Models\ModifyOrganizationAccountStatusRequest $req) 修改集团账号状态
 * @method Models\ModifyRiskCenterRiskStatusResponse ModifyRiskCenterRiskStatus(Models\ModifyRiskCenterRiskStatusRequest $req) 修改风险中心风险状态
 * @method Models\ModifyRiskCenterScanTaskResponse ModifyRiskCenterScanTask(Models\ModifyRiskCenterScanTaskRequest $req) 修改风险中心扫描任务
 * @method Models\ModifyUebaRuleSwitchResponse ModifyUebaRuleSwitch(Models\ModifyUebaRuleSwitchRequest $req) 更新自定义策略的开关
 * @method Models\StopRiskCenterTaskResponse StopRiskCenterTask(Models\StopRiskCenterTaskRequest $req) 停止扫风险中心扫描任务
 * @method Models\UpdateAccessKeyAlarmStatusResponse UpdateAccessKeyAlarmStatus(Models\UpdateAccessKeyAlarmStatusRequest $req) 标记风险或者告警为 已处置/已忽略
 * @method Models\UpdateAccessKeyRemarkResponse UpdateAccessKeyRemark(Models\UpdateAccessKeyRemarkRequest $req) 编辑访问密钥/源IP备注
 * @method Models\UpdateAlertStatusListResponse UpdateAlertStatusList(Models\UpdateAlertStatusListRequest $req) 批量告警状态处理接口
 */

class CsipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "csip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "csip";

    /**
     * @var string
     */
    protected $version = "2022-11-21";

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
        $respClass = "TencentCloud"."\\".ucfirst("csip")."\\"."V20221121\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
