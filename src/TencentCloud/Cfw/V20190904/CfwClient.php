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

namespace TencentCloud\Cfw\V20190904;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfw\V20190904\Models as Models;

/**
 * @method Models\AddAclRuleResponse AddAclRule(Models\AddAclRuleRequest $req) 添加互联网边界访问控制规则
 * @method Models\AddEnterpriseSecurityGroupRulesResponse AddEnterpriseSecurityGroupRules(Models\AddEnterpriseSecurityGroupRulesRequest $req) 创建新企业安全组规则
 * @method Models\AddNatAcRuleResponse AddNatAcRule(Models\AddNatAcRuleRequest $req) 添加nat访问控制规则
 * @method Models\AddVpcAcRuleResponse AddVpcAcRule(Models\AddVpcAcRuleRequest $req) 添加VPC内网间规则
 * @method Models\CreateAcRulesResponse CreateAcRules(Models\CreateAcRulesRequest $req) 创建访问控制规则
 * @method Models\CreateAddressTemplateResponse CreateAddressTemplate(Models\CreateAddressTemplateRequest $req) 创建地址模板规则
 * @method Models\CreateAlertCenterIsolateResponse CreateAlertCenterIsolate(Models\CreateAlertCenterIsolateRequest $req) 用户告警中心-封隔离处置按钮
 * @method Models\CreateAlertCenterOmitResponse CreateAlertCenterOmit(Models\CreateAlertCenterOmitRequest $req) 用户告警中心-忽略处置按钮
 * @method Models\CreateAlertCenterRuleResponse CreateAlertCenterRule(Models\CreateAlertCenterRuleRequest $req) 用户告警中心-封禁、放通处置按钮
 * @method Models\CreateBlockIgnoreRuleListResponse CreateBlockIgnoreRuleList(Models\CreateBlockIgnoreRuleListRequest $req) 批量添加入侵防御封禁列表、放通列表规则
 * @method Models\CreateBlockIgnoreRuleNewResponse CreateBlockIgnoreRuleNew(Models\CreateBlockIgnoreRuleNewRequest $req) 批量添加入侵防御封禁列表、放通列表规则
 * @method Models\CreateChooseVpcsResponse CreateChooseVpcs(Models\CreateChooseVpcsRequest $req) 创建、选择vpc
 * @method Models\CreateDatabaseWhiteListRulesResponse CreateDatabaseWhiteListRules(Models\CreateDatabaseWhiteListRulesRequest $req) 创建暴露数据库白名单规则
 * @method Models\CreateNatFwInstanceResponse CreateNatFwInstance(Models\CreateNatFwInstanceRequest $req) 创建NAT防火墙实例（Region参数必填）
 * @method Models\CreateNatFwInstanceWithDomainResponse CreateNatFwInstanceWithDomain(Models\CreateNatFwInstanceWithDomainRequest $req) 创建防火墙实例和接入域名（Region参数必填）
 * @method Models\CreateSecurityGroupRulesResponse CreateSecurityGroupRules(Models\CreateSecurityGroupRulesRequest $req) 创建企业安全组规则
 * @method Models\CreateVpcFwGroupResponse CreateVpcFwGroup(Models\CreateVpcFwGroupRequest $req) 创建VPC间防火墙(防火墙组)
 * @method Models\DeleteAcRuleResponse DeleteAcRule(Models\DeleteAcRuleRequest $req) 删除规则
 * @method Models\DeleteAddressTemplateResponse DeleteAddressTemplate(Models\DeleteAddressTemplateRequest $req) 删除地址模板规则
 * @method Models\DeleteBlockIgnoreRuleListResponse DeleteBlockIgnoreRuleList(Models\DeleteBlockIgnoreRuleListRequest $req) 批量删除入侵防御封禁列表、放通列表规则
 * @method Models\DeleteBlockIgnoreRuleNewResponse DeleteBlockIgnoreRuleNew(Models\DeleteBlockIgnoreRuleNewRequest $req) 批量删除入侵防御封禁列表、放通列表规则（新）
 * @method Models\DeleteNatFwInstanceResponse DeleteNatFwInstance(Models\DeleteNatFwInstanceRequest $req) 销毁防火墙实例
 * @method Models\DeleteRemoteAccessDomainResponse DeleteRemoteAccessDomain(Models\DeleteRemoteAccessDomainRequest $req) 删除远程运维域名
 * @method Models\DeleteResourceGroupResponse DeleteResourceGroup(Models\DeleteResourceGroupRequest $req) DeleteResourceGroup-资产中心资产组删除
 * @method Models\DeleteSecurityGroupRuleResponse DeleteSecurityGroupRule(Models\DeleteSecurityGroupRuleRequest $req) 删除规则
 * @method Models\DeleteVpcFwGroupResponse DeleteVpcFwGroup(Models\DeleteVpcFwGroupRequest $req) 删除防火墙(组)，或者删除其中实例
 * @method Models\DescribeAcListsResponse DescribeAcLists(Models\DescribeAcListsRequest $req) 访问控制列表
 * @method Models\DescribeAclRuleResponse DescribeAclRule(Models\DescribeAclRuleRequest $req) 查询互联网边界访问控制列表
 * @method Models\DescribeAddressTemplateListResponse DescribeAddressTemplateList(Models\DescribeAddressTemplateListRequest $req) 查询地址模板列表
 * @method Models\DescribeAssetSyncResponse DescribeAssetSync(Models\DescribeAssetSyncRequest $req) 资产同步状态查询
 * @method Models\DescribeAssociatedInstanceListResponse DescribeAssociatedInstanceList(Models\DescribeAssociatedInstanceListRequest $req) 获取安全组关联实例列表
 * @method Models\DescribeBlockByIpTimesListResponse DescribeBlockByIpTimesList(Models\DescribeBlockByIpTimesListRequest $req) DescribeBlockByIpTimesList 告警中心阻断IP折线图
 * @method Models\DescribeBlockIgnoreListResponse DescribeBlockIgnoreList(Models\DescribeBlockIgnoreListRequest $req) 查询入侵防御放通封禁列表
 * @method Models\DescribeBlockStaticListResponse DescribeBlockStaticList(Models\DescribeBlockStaticListRequest $req) DescribeBlockStaticList 告警中心柱形图
 * @method Models\DescribeCcnAssociatedInstancesResponse DescribeCcnAssociatedInstances(Models\DescribeCcnAssociatedInstancesRequest $req) 查询云联网关联的实例信息
 * @method Models\DescribeCcnInstanceRegionStatusResponse DescribeCcnInstanceRegionStatus(Models\DescribeCcnInstanceRegionStatusRequest $req) 查询CCN关联实例的地域防火墙引流网络部署状态
1.根据CCN ID和实例ID列表，返回实例对应地域的防火墙引流网络部署状态
2.如果传入实例ID列表为空，则返回CCN关联的所有实例的地域防火墙引流网络部署状态
 * @method Models\DescribeCcnVpcFwSwitchResponse DescribeCcnVpcFwSwitch(Models\DescribeCcnVpcFwSwitchRequest $req) 查询CCN VPC防火墙开关配置
 * @method Models\DescribeCfwEipsResponse DescribeCfwEips(Models\DescribeCfwEipsRequest $req) 查询防火墙弹性公网IP
 * @method Models\DescribeCfwInsStatusResponse DescribeCfwInsStatus(Models\DescribeCfwInsStatusRequest $req) cfw实例运行状态查询
 * @method Models\DescribeDefenseSwitchResponse DescribeDefenseSwitch(Models\DescribeDefenseSwitchRequest $req) 获取入侵防御按钮列表
 * @method Models\DescribeEnterpriseSGRuleProgressResponse DescribeEnterpriseSGRuleProgress(Models\DescribeEnterpriseSGRuleProgressRequest $req) 查询新版安全组下发进度
 * @method Models\DescribeEnterpriseSecurityGroupRuleResponse DescribeEnterpriseSecurityGroupRule(Models\DescribeEnterpriseSecurityGroupRuleRequest $req) 查询新企业安全组规则
 * @method Models\DescribeEnterpriseSecurityGroupRuleListResponse DescribeEnterpriseSecurityGroupRuleList(Models\DescribeEnterpriseSecurityGroupRuleListRequest $req) 查询新企业安全组规则  从node接口迁移   原接口DescribeSecurityGroupNewList
 * @method Models\DescribeFwEdgeIpsResponse DescribeFwEdgeIps(Models\DescribeFwEdgeIpsRequest $req) 串行防火墙IP开关列表
 * @method Models\DescribeFwGroupInstanceInfoResponse DescribeFwGroupInstanceInfo(Models\DescribeFwGroupInstanceInfoRequest $req) 获取租户所有VPC防火墙(组)及VPC防火墙实例卡片信息
 * @method Models\DescribeFwSyncStatusResponse DescribeFwSyncStatus(Models\DescribeFwSyncStatusRequest $req) 获取防火墙同步状态，一般在执行同步操作后查询
 * @method Models\DescribeGuideScanInfoResponse DescribeGuideScanInfo(Models\DescribeGuideScanInfoRequest $req) DescribeGuideScanInfo新手引导扫描接口信息
 * @method Models\DescribeIPStatusListResponse DescribeIPStatusList(Models\DescribeIPStatusListRequest $req) IP防护状态查询
 * @method Models\DescribeLogStorageStatisticResponse DescribeLogStorageStatistic(Models\DescribeLogStorageStatisticRequest $req) 租户日志存储统计
 * @method Models\DescribeLogsResponse DescribeLogs(Models\DescribeLogsRequest $req) 日志审计日志查询
 * @method Models\DescribeNatAcRuleResponse DescribeNatAcRule(Models\DescribeNatAcRuleRequest $req) 查询NAT访问控制列表
 * @method Models\DescribeNatFwDnatRuleResponse DescribeNatFwDnatRule(Models\DescribeNatFwDnatRuleRequest $req) 查询Nat防火墙Dnat规则
 * @method Models\DescribeNatFwInfoCountResponse DescribeNatFwInfoCount(Models\DescribeNatFwInfoCountRequest $req) 获取当前用户接入nat防火墙的所有子网数及natfw实例个数
 * @method Models\DescribeNatFwInstanceResponse DescribeNatFwInstance(Models\DescribeNatFwInstanceRequest $req) DescribeNatFwInstance 获取租户所有NAT实例
 * @method Models\DescribeNatFwInstanceWithRegionResponse DescribeNatFwInstanceWithRegion(Models\DescribeNatFwInstanceWithRegionRequest $req) GetNatFwInstanceWithRegion 获取租户新增运维的NAT实例，带上地域
 * @method Models\DescribeNatFwInstancesInfoResponse DescribeNatFwInstancesInfo(Models\DescribeNatFwInstancesInfoRequest $req) GetNatInstance 获取租户所有NAT实例及实例卡片信息
 * @method Models\DescribeNatFwSwitchResponse DescribeNatFwSwitch(Models\DescribeNatFwSwitchRequest $req) 查询NAT边界防火墙开关列表
 * @method Models\DescribeNatFwVpcDnsLstResponse DescribeNatFwVpcDnsLst(Models\DescribeNatFwVpcDnsLstRequest $req) 展示当前natfw 实例对应的vpc dns开关
 * @method Models\DescribeResourceGroupResponse DescribeResourceGroup(Models\DescribeResourceGroupRequest $req) DescribeResourceGroup资产中心资产树信息
 * @method Models\DescribeResourceGroupNewResponse DescribeResourceGroupNew(Models\DescribeResourceGroupNewRequest $req) 资产中心资产组数数据信息查询
 * @method Models\DescribeRuleOverviewResponse DescribeRuleOverview(Models\DescribeRuleOverviewRequest $req) 查询规则列表概况
 * @method Models\DescribeSecurityGroupListResponse DescribeSecurityGroupList(Models\DescribeSecurityGroupListRequest $req) 查询安全组规则列表
 * @method Models\DescribeSourceAssetResponse DescribeSourceAsset(Models\DescribeSourceAssetRequest $req) DescribeSourceAsset-查询全部资产信息
 * @method Models\DescribeSwitchErrorResponse DescribeSwitchError(Models\DescribeSwitchErrorRequest $req) 互联网边界防火墙开关横幅错误信息
 * @method Models\DescribeSwitchListsResponse DescribeSwitchLists(Models\DescribeSwitchListsRequest $req) 防火墙开关列表，请换用DescribeFwEdgeIps
 * @method Models\DescribeTLogInfoResponse DescribeTLogInfo(Models\DescribeTLogInfoRequest $req) DescribeTLogInfo告警中心概况查询
 * @method Models\DescribeTLogIpListResponse DescribeTLogIpList(Models\DescribeTLogIpListRequest $req) DescribeTLogIpList告警中心IP柱形图
 * @method Models\DescribeTableStatusResponse DescribeTableStatus(Models\DescribeTableStatusRequest $req) 查询规则表状态
 * @method Models\DescribeUnHandleEventTabListResponse DescribeUnHandleEventTabList(Models\DescribeUnHandleEventTabListRequest $req) DescribeUnHandleEventTabList 告警中心伪攻击链事件未处置接口
 * @method Models\DescribeVpcAcRuleResponse DescribeVpcAcRule(Models\DescribeVpcAcRuleRequest $req) 查询内网间访问控制列表
 * @method Models\DescribeVpcFwCcnPolicyWhiteListResponse DescribeVpcFwCcnPolicyWhiteList(Models\DescribeVpcFwCcnPolicyWhiteListRequest $req) 查询VPC防火墙策略路由功能开白的CCN列表
 * @method Models\DescribeVpcFwGroupSwitchResponse DescribeVpcFwGroupSwitch(Models\DescribeVpcFwGroupSwitchRequest $req) VPC防火墙(组)开关列表
 * @method Models\ExpandCfwVerticalResponse ExpandCfwVertical(Models\ExpandCfwVerticalRequest $req) 防火墙垂直扩容
 * @method Models\ModifyAcRuleResponse ModifyAcRule(Models\ModifyAcRuleRequest $req) 修改规则
 * @method Models\ModifyAclRuleResponse ModifyAclRule(Models\ModifyAclRuleRequest $req) 修改互联网边界访问控制规则
 * @method Models\ModifyAddressTemplateResponse ModifyAddressTemplate(Models\ModifyAddressTemplateRequest $req) 修改地址模板
 * @method Models\ModifyAllPublicIPSwitchStatusResponse ModifyAllPublicIPSwitchStatus(Models\ModifyAllPublicIPSwitchStatusRequest $req) 互联网边界防火墙一键开关
 * @method Models\ModifyAllRuleStatusResponse ModifyAllRuleStatus(Models\ModifyAllRuleStatusRequest $req) 启用停用全部规则
 * @method Models\ModifyAssetScanResponse ModifyAssetScan(Models\ModifyAssetScanRequest $req) 资产扫描
 * @method Models\ModifyAssetSyncResponse ModifyAssetSync(Models\ModifyAssetSyncRequest $req) 资产同步
 * @method Models\ModifyBlockIgnoreListResponse ModifyBlockIgnoreList(Models\ModifyBlockIgnoreListRequest $req) 支持对封禁列表、放通列表如下操作：
批量增加封禁IP、放通IP/域名
批量删除封禁IP、放通IP/域名
批量修改封禁IP、放通IP/域名生效事件
 * @method Models\ModifyBlockIgnoreRuleResponse ModifyBlockIgnoreRule(Models\ModifyBlockIgnoreRuleRequest $req) 编辑单条入侵防御封禁列表、放通列表规则
 * @method Models\ModifyBlockIgnoreRuleNewResponse ModifyBlockIgnoreRuleNew(Models\ModifyBlockIgnoreRuleNewRequest $req) 编辑单条入侵防御封禁列表、放通列表规则（新）
 * @method Models\ModifyBlockTopResponse ModifyBlockTop(Models\ModifyBlockTopRequest $req) ModifyBlockTop取消置顶接口
 * @method Models\ModifyClusterVpcFwSwitchResponse ModifyClusterVpcFwSwitch(Models\ModifyClusterVpcFwSwitchRequest $req) 修改集群模式VPC防火墙开关
 * @method Models\ModifyEWRuleStatusResponse ModifyEWRuleStatus(Models\ModifyEWRuleStatusRequest $req) 启用停用VPC间规则或Nat边界规则
VPC间规则需指定EdgeId。Nat边界规则需指定地域Region与Direction。
 * @method Models\ModifyEdgeIpSwitchResponse ModifyEdgeIpSwitch(Models\ModifyEdgeIpSwitchRequest $req) 修改边界防火墙开关(旁路、串行)
 * @method Models\ModifyEnterpriseSecurityDispatchStatusResponse ModifyEnterpriseSecurityDispatchStatus(Models\ModifyEnterpriseSecurityDispatchStatusRequest $req) 修改企业安全组下发状态
 * @method Models\ModifyEnterpriseSecurityGroupRuleResponse ModifyEnterpriseSecurityGroupRule(Models\ModifyEnterpriseSecurityGroupRuleRequest $req) 编辑新企业安全组规则
 * @method Models\ModifyFwGroupSwitchResponse ModifyFwGroupSwitch(Models\ModifyFwGroupSwitchRequest $req) 修改防火墙(组)开关(支持单点模式、多点模式、全互通模式)
 * @method Models\ModifyNatAcRuleResponse ModifyNatAcRule(Models\ModifyNatAcRuleRequest $req) 修改NAT访问控制规则
 * @method Models\ModifyNatFwReSelectResponse ModifyNatFwReSelect(Models\ModifyNatFwReSelectRequest $req) 防火墙实例重新选择vpc或nat
 * @method Models\ModifyNatFwSwitchResponse ModifyNatFwSwitch(Models\ModifyNatFwSwitchRequest $req) 修改NAT防火墙开关
 * @method Models\ModifyNatFwVpcDnsSwitchResponse ModifyNatFwVpcDnsSwitch(Models\ModifyNatFwVpcDnsSwitchRequest $req) nat 防火墙VPC DNS 开关切换
 * @method Models\ModifyNatInstanceResponse ModifyNatInstance(Models\ModifyNatInstanceRequest $req) 编辑NAT防火墙
 * @method Models\ModifyNatSequenceRulesResponse ModifyNatSequenceRules(Models\ModifyNatSequenceRulesRequest $req) NAT防火墙规则快速排序
 * @method Models\ModifyResourceGroupResponse ModifyResourceGroup(Models\ModifyResourceGroupRequest $req) ModifyResourceGroup-资产中心资产组信息修改
 * @method Models\ModifyRunSyncAssetResponse ModifyRunSyncAsset(Models\ModifyRunSyncAssetRequest $req) 同步资产-互联网&VPC（新）
 * @method Models\ModifySecurityGroupItemRuleStatusResponse ModifySecurityGroupItemRuleStatus(Models\ModifySecurityGroupItemRuleStatusRequest $req) 启用停用单条企业安全组规则
 * @method Models\ModifySecurityGroupRuleResponse ModifySecurityGroupRule(Models\ModifySecurityGroupRuleRequest $req) 编辑单条安全组规则
 * @method Models\ModifySecurityGroupSequenceRulesResponse ModifySecurityGroupSequenceRules(Models\ModifySecurityGroupSequenceRulesRequest $req) 企业安全组规则快速排序
 * @method Models\ModifySequenceAclRulesResponse ModifySequenceAclRules(Models\ModifySequenceAclRulesRequest $req) 互联网边界规则快速排序
 * @method Models\ModifySequenceRulesResponse ModifySequenceRules(Models\ModifySequenceRulesRequest $req) 修改规则执行顺序
 * @method Models\ModifyStorageSettingResponse ModifyStorageSetting(Models\ModifyStorageSettingRequest $req) 日志存储设置，可以修改存储时间和清空日志
 * @method Models\ModifyTableStatusResponse ModifyTableStatus(Models\ModifyTableStatusRequest $req) 修改规则表状态
 * @method Models\ModifyVpcAcRuleResponse ModifyVpcAcRule(Models\ModifyVpcAcRuleRequest $req) 修改内网间访问控制规则
 * @method Models\ModifyVpcFwGroupResponse ModifyVpcFwGroup(Models\ModifyVpcFwGroupRequest $req) 编辑VPC间防火墙(防火墙组)
 * @method Models\ModifyVpcFwSequenceRulesResponse ModifyVpcFwSequenceRules(Models\ModifyVpcFwSequenceRulesRequest $req) vpc间规则快速排序
 * @method Models\RemoveAcRuleResponse RemoveAcRule(Models\RemoveAcRuleRequest $req) 删除互联网边界规则
 * @method Models\RemoveAclRuleResponse RemoveAclRule(Models\RemoveAclRuleRequest $req) 删除互联网边界访问控制规则
 * @method Models\RemoveEnterpriseSecurityGroupRuleResponse RemoveEnterpriseSecurityGroupRule(Models\RemoveEnterpriseSecurityGroupRuleRequest $req) 删除新企业安全组规则
 * @method Models\RemoveNatAcRuleResponse RemoveNatAcRule(Models\RemoveNatAcRuleRequest $req) 删除NAT访问控制规则
 * @method Models\RemoveVpcAcRuleResponse RemoveVpcAcRule(Models\RemoveVpcAcRuleRequest $req) 删除VPC间规则
 * @method Models\SearchLogResponse SearchLog(Models\SearchLogRequest $req) 本接口用于检索分析日志，使用该接口时请注意如下事项：
1. 该接口除受默认接口请求频率限制外，针对单个日志主题，查询并发数不能超过15。
2. 检索语法建议使用日志服务专用检索语法CQL，请使用SyntaxRule参数，将值设置为1，控制台默认也使用该语法规则。
3. API返回数据包最大49MB，建议启用 gzip 压缩（HTTP Request Header Accept-Encoding:gzip）。
 * @method Models\SetNatFwDnatRuleResponse SetNatFwDnatRule(Models\SetNatFwDnatRuleRequest $req) 配置防火墙Dnat规则
 * @method Models\SetNatFwEipResponse SetNatFwEip(Models\SetNatFwEipRequest $req) 设置防火墙实例弹性公网ip，目前仅支持新增模式的防火墙实例
 * @method Models\StopSecurityGroupRuleDispatchResponse StopSecurityGroupRuleDispatch(Models\StopSecurityGroupRuleDispatchRequest $req) 中止安全组规则下发
 * @method Models\SyncFwOperateResponse SyncFwOperate(Models\SyncFwOperateRequest $req) 同步防火墙操作，包括同步防火墙路由（若vpc，专线网关等增加了Cidr，需要手动同步一下路由使之在防火墙上生效）等。
 * @method Models\UpdateCheckCcnNonDirectFlagResponse UpdateCheckCcnNonDirectFlag(Models\UpdateCheckCcnNonDirectFlagRequest $req) 重新检测CCN中接入VPC防火墙的VPC实例非同城直通标记
 * @method Models\UpdateClusterVpcFwResponse UpdateClusterVpcFw(Models\UpdateClusterVpcFwRequest $req) 修改更新CCN中VPC防火墙策略配置
 */

class CfwClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfw.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfw";

    /**
     * @var string
     */
    protected $version = "2019-09-04";

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
        $respClass = "TencentCloud"."\\".ucfirst("cfw")."\\"."V20190904\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
