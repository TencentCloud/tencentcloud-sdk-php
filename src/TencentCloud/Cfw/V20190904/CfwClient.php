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

namespace TencentCloud\Cfw\V20190904;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfw\V20190904\Models as Models;

/**
 * @method Models\AddAcRuleResponse AddAcRule(Models\AddAcRuleRequest $req) 添加互联网边界规则
 * @method Models\AddEnterpriseSecurityGroupRulesResponse AddEnterpriseSecurityGroupRules(Models\AddEnterpriseSecurityGroupRulesRequest $req) 创建新企业安全组规则
 * @method Models\AddNatAcRuleResponse AddNatAcRule(Models\AddNatAcRuleRequest $req) 添加nat访问控制规则
 * @method Models\CreateAcRulesResponse CreateAcRules(Models\CreateAcRulesRequest $req) 创建访问控制规则
 * @method Models\CreateChooseVpcsResponse CreateChooseVpcs(Models\CreateChooseVpcsRequest $req) 创建、选择vpc
 * @method Models\CreateDatabaseWhiteListRulesResponse CreateDatabaseWhiteListRules(Models\CreateDatabaseWhiteListRulesRequest $req) 创建暴露数据库白名单规则
 * @method Models\CreateNatFwInstanceResponse CreateNatFwInstance(Models\CreateNatFwInstanceRequest $req) 创建NAT防火墙实例（Region参数必填）
 * @method Models\CreateNatFwInstanceWithDomainResponse CreateNatFwInstanceWithDomain(Models\CreateNatFwInstanceWithDomainRequest $req) 创建防火墙实例和接入域名（Region参数必填）
 * @method Models\CreateSecurityGroupRulesResponse CreateSecurityGroupRules(Models\CreateSecurityGroupRulesRequest $req) 创建企业安全组规则
 * @method Models\DeleteAcRuleResponse DeleteAcRule(Models\DeleteAcRuleRequest $req) 删除规则
 * @method Models\DeleteAllAccessControlRuleResponse DeleteAllAccessControlRule(Models\DeleteAllAccessControlRuleRequest $req) 全部删除规则
 * @method Models\DeleteNatFwInstanceResponse DeleteNatFwInstance(Models\DeleteNatFwInstanceRequest $req) 销毁防火墙实例
 * @method Models\DeleteResourceGroupResponse DeleteResourceGroup(Models\DeleteResourceGroupRequest $req) DeleteResourceGroup-资产中心资产组删除
 * @method Models\DeleteSecurityGroupRuleResponse DeleteSecurityGroupRule(Models\DeleteSecurityGroupRuleRequest $req) 删除规则
 * @method Models\DeleteVpcInstanceResponse DeleteVpcInstance(Models\DeleteVpcInstanceRequest $req) 删除防火墙实例
 * @method Models\DescribeAcListsResponse DescribeAcLists(Models\DescribeAcListsRequest $req) 访问控制列表
 * @method Models\DescribeAssociatedInstanceListResponse DescribeAssociatedInstanceList(Models\DescribeAssociatedInstanceListRequest $req) 获取安全组关联实例列表
 * @method Models\DescribeBlockByIpTimesListResponse DescribeBlockByIpTimesList(Models\DescribeBlockByIpTimesListRequest $req) DescribeBlockByIpTimesList 告警中心阻断IP折线图

 * @method Models\DescribeBlockIgnoreListResponse DescribeBlockIgnoreList(Models\DescribeBlockIgnoreListRequest $req) 查询入侵防御放通封禁列表
 * @method Models\DescribeBlockStaticListResponse DescribeBlockStaticList(Models\DescribeBlockStaticListRequest $req) DescribeBlockStaticList 告警中心柱形图

 * @method Models\DescribeCfwEipsResponse DescribeCfwEips(Models\DescribeCfwEipsRequest $req) 查询防火墙弹性公网IP
 * @method Models\DescribeDefenseSwitchResponse DescribeDefenseSwitch(Models\DescribeDefenseSwitchRequest $req) 获取入侵防御按钮列表
 * @method Models\DescribeEnterpriseSecurityGroupRuleResponse DescribeEnterpriseSecurityGroupRule(Models\DescribeEnterpriseSecurityGroupRuleRequest $req) 查询新企业安全组规则
 * @method Models\DescribeGuideScanInfoResponse DescribeGuideScanInfo(Models\DescribeGuideScanInfoRequest $req) DescribeGuideScanInfo新手引导扫描接口信息
 * @method Models\DescribeIPStatusListResponse DescribeIPStatusList(Models\DescribeIPStatusListRequest $req) ip防护状态查询
 * @method Models\DescribeNatAcRuleResponse DescribeNatAcRule(Models\DescribeNatAcRuleRequest $req) 查询NAT访问控制列表
 * @method Models\DescribeNatFwInfoCountResponse DescribeNatFwInfoCount(Models\DescribeNatFwInfoCountRequest $req) 获取当前用户接入nat防火墙的所有子网数及natfw实例个数
 * @method Models\DescribeNatFwInstanceResponse DescribeNatFwInstance(Models\DescribeNatFwInstanceRequest $req) DescribeNatFwInstance 获取租户所有NAT实例
 * @method Models\DescribeNatFwInstanceWithRegionResponse DescribeNatFwInstanceWithRegion(Models\DescribeNatFwInstanceWithRegionRequest $req) GetNatFwInstanceWithRegion 获取租户新增运维的NAT实例，带上地域
 * @method Models\DescribeNatFwInstancesInfoResponse DescribeNatFwInstancesInfo(Models\DescribeNatFwInstancesInfoRequest $req) GetNatInstance 获取租户所有NAT实例及实例卡片信息
 * @method Models\DescribeNatFwVpcDnsLstResponse DescribeNatFwVpcDnsLst(Models\DescribeNatFwVpcDnsLstRequest $req) 展示当前natfw 实例对应的vpc dns开关
 * @method Models\DescribeResourceGroupResponse DescribeResourceGroup(Models\DescribeResourceGroupRequest $req) DescribeResourceGroup资产中心资产树信息
 * @method Models\DescribeResourceGroupNewResponse DescribeResourceGroupNew(Models\DescribeResourceGroupNewRequest $req) DescribeResourceGroupNew资产中心资产树信息
 * @method Models\DescribeRuleOverviewResponse DescribeRuleOverview(Models\DescribeRuleOverviewRequest $req) 查询规则列表概况
 * @method Models\DescribeSecurityGroupListResponse DescribeSecurityGroupList(Models\DescribeSecurityGroupListRequest $req) 查询安全组规则列表
 * @method Models\DescribeSourceAssetResponse DescribeSourceAsset(Models\DescribeSourceAssetRequest $req) DescribeSourceAsset-查询资产组全部资产信息

 * @method Models\DescribeSwitchListsResponse DescribeSwitchLists(Models\DescribeSwitchListsRequest $req) 防火墙开关列表
 * @method Models\DescribeTLogInfoResponse DescribeTLogInfo(Models\DescribeTLogInfoRequest $req) DescribeTLogInfo告警中心概况

 * @method Models\DescribeTLogIpListResponse DescribeTLogIpList(Models\DescribeTLogIpListRequest $req) DescribeTLogIpList告警中心IP柱形图

 * @method Models\DescribeTableStatusResponse DescribeTableStatus(Models\DescribeTableStatusRequest $req) 查询规则表状态
 * @method Models\DescribeUnHandleEventTabListResponse DescribeUnHandleEventTabList(Models\DescribeUnHandleEventTabListRequest $req) DescribeUnHandleEventTabList 告警中心伪攻击链事件未处置接口

 * @method Models\ExpandCfwVerticalResponse ExpandCfwVertical(Models\ExpandCfwVerticalRequest $req) 防火墙垂直扩容
 * @method Models\ModifyAcRuleResponse ModifyAcRule(Models\ModifyAcRuleRequest $req) 修改规则
 * @method Models\ModifyAllPublicIPSwitchStatusResponse ModifyAllPublicIPSwitchStatus(Models\ModifyAllPublicIPSwitchStatusRequest $req) 互联网边界防火墙一键开关
 * @method Models\ModifyAllRuleStatusResponse ModifyAllRuleStatus(Models\ModifyAllRuleStatusRequest $req) 启用停用全部规则
 * @method Models\ModifyAllVPCSwitchStatusResponse ModifyAllVPCSwitchStatus(Models\ModifyAllVPCSwitchStatusRequest $req) VPC防火墙一键开关
 * @method Models\ModifyAssetScanResponse ModifyAssetScan(Models\ModifyAssetScanRequest $req) 资产扫描
 * @method Models\ModifyBlockIgnoreListResponse ModifyBlockIgnoreList(Models\ModifyBlockIgnoreListRequest $req) 支持对封禁列表、放通列表如下操作：
批量增加封禁IP、放通IP/域名
批量删除封禁IP、放通IP/域名
批量修改封禁IP、放通IP/域名生效事件
 * @method Models\ModifyBlockTopResponse ModifyBlockTop(Models\ModifyBlockTopRequest $req) ModifyBlockTop取消置顶接口
 * @method Models\ModifyNatAcRuleResponse ModifyNatAcRule(Models\ModifyNatAcRuleRequest $req) 修改NAT访问控制规则
 * @method Models\ModifyNatFwReSelectResponse ModifyNatFwReSelect(Models\ModifyNatFwReSelectRequest $req) 防火墙实例重新选择vpc或nat
 * @method Models\ModifyNatFwSwitchResponse ModifyNatFwSwitch(Models\ModifyNatFwSwitchRequest $req) 修改NAT防火墙开关
 * @method Models\ModifyNatFwVpcDnsSwitchResponse ModifyNatFwVpcDnsSwitch(Models\ModifyNatFwVpcDnsSwitchRequest $req) nat 防火墙VPC DNS 开关切换
 * @method Models\ModifyPublicIPSwitchStatusResponse ModifyPublicIPSwitchStatus(Models\ModifyPublicIPSwitchStatusRequest $req) 单个修改互联网边界防火墙开关
 * @method Models\ModifyResourceGroupResponse ModifyResourceGroup(Models\ModifyResourceGroupRequest $req) ModifyResourceGroup-资产中心资产组信息修改


 * @method Models\ModifyRunSyncAssetResponse ModifyRunSyncAsset(Models\ModifyRunSyncAssetRequest $req) 同步资产-互联网&VPC（新）
 * @method Models\ModifySecurityGroupItemRuleStatusResponse ModifySecurityGroupItemRuleStatus(Models\ModifySecurityGroupItemRuleStatusRequest $req) 启用停用单条企业安全组规则
 * @method Models\ModifySecurityGroupRuleResponse ModifySecurityGroupRule(Models\ModifySecurityGroupRuleRequest $req) 编辑单条安全组规则
 * @method Models\ModifySecurityGroupSequenceRulesResponse ModifySecurityGroupSequenceRules(Models\ModifySecurityGroupSequenceRulesRequest $req) 企业安全组规则快速排序
 * @method Models\ModifySequenceRulesResponse ModifySequenceRules(Models\ModifySequenceRulesRequest $req) 修改规则执行顺序
 * @method Models\ModifyStorageSettingResponse ModifyStorageSetting(Models\ModifyStorageSettingRequest $req) 日志存储设置，可以修改存储时间和清空日志
 * @method Models\ModifyTableStatusResponse ModifyTableStatus(Models\ModifyTableStatusRequest $req) 修改规则表状态
 * @method Models\RemoveAcRuleResponse RemoveAcRule(Models\RemoveAcRuleRequest $req) 删除互联网边界规则
 * @method Models\RemoveEnterpriseSecurityGroupRuleResponse RemoveEnterpriseSecurityGroupRule(Models\RemoveEnterpriseSecurityGroupRuleRequest $req) 删除新企业安全组规则
 * @method Models\RemoveNatAcRuleResponse RemoveNatAcRule(Models\RemoveNatAcRuleRequest $req) 删除NAT访问控制规则
 * @method Models\SetNatFwDnatRuleResponse SetNatFwDnatRule(Models\SetNatFwDnatRuleRequest $req) 配置防火墙Dnat规则
 * @method Models\SetNatFwEipResponse SetNatFwEip(Models\SetNatFwEipRequest $req) 设置防火墙实例弹性公网ip，目前仅支持新增模式的防火墙实例
 * @method Models\StopSecurityGroupRuleDispatchResponse StopSecurityGroupRuleDispatch(Models\StopSecurityGroupRuleDispatchRequest $req) 中止安全组规则下发
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
