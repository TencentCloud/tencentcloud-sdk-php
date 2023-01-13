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

namespace TencentCloud\Antiddos\V20200309;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Antiddos\V20200309\Models as Models;

/**
 * @method Models\AssociateDDoSEipAddressResponse AssociateDDoSEipAddress(Models\AssociateDDoSEipAddressRequest $req) 本接口 (AssociateDDoSEipAddress) 用于将高防弹性公网IP绑定到实例或弹性网卡的指定内网 IP 上。
 * @method Models\AssociateDDoSEipLoadBalancerResponse AssociateDDoSEipLoadBalancer(Models\AssociateDDoSEipLoadBalancerRequest $req) 本接口 (AssociateDDoSEipLoadBalancer) 用于将高防弹性公网IP绑定到负载均衡指定内网 IP 上。
 * @method Models\CreateBlackWhiteIpListResponse CreateBlackWhiteIpList(Models\CreateBlackWhiteIpListRequest $req) 添加DDoS防护的IP黑白名单
 * @method Models\CreateBoundIPResponse CreateBoundIP(Models\CreateBoundIPRequest $req) 绑定IP到高防包实例，支持独享包、共享包；需要注意的是此接口绑定或解绑IP是异步接口，当处于绑定或解绑中时，则不允许再进行绑定或解绑，需要等待当前绑定或解绑完成。
 * @method Models\CreateCCPrecisionPolicyResponse CreateCCPrecisionPolicy(Models\CreateCCPrecisionPolicyRequest $req) 新增CC精准防护策略
 * @method Models\CreateCCReqLimitPolicyResponse CreateCCReqLimitPolicy(Models\CreateCCReqLimitPolicyRequest $req) 新增CC频率限制策略
 * @method Models\CreateCcBlackWhiteIpListResponse CreateCcBlackWhiteIpList(Models\CreateCcBlackWhiteIpListRequest $req) 新建CC四层黑白名单
 * @method Models\CreateCcGeoIPBlockConfigResponse CreateCcGeoIPBlockConfig(Models\CreateCcGeoIPBlockConfigRequest $req) 新建cc防护的地域封禁配置
 * @method Models\CreateDDoSAIResponse CreateDDoSAI(Models\CreateDDoSAIRequest $req) 设置DDoS防护的AI防护开关
 * @method Models\CreateDDoSBlackWhiteIpListResponse CreateDDoSBlackWhiteIpList(Models\CreateDDoSBlackWhiteIpListRequest $req) 添加DDoS防护的IP网段黑白名单
 * @method Models\CreateDDoSConnectLimitResponse CreateDDoSConnectLimit(Models\CreateDDoSConnectLimitRequest $req) 配置DDoS连接抑制选项
 * @method Models\CreateDDoSGeoIPBlockConfigResponse CreateDDoSGeoIPBlockConfig(Models\CreateDDoSGeoIPBlockConfigRequest $req) 添加DDoS防护的区域封禁配置
 * @method Models\CreateDDoSSpeedLimitConfigResponse CreateDDoSSpeedLimitConfig(Models\CreateDDoSSpeedLimitConfigRequest $req) 添加DDoS防护的访问限速配置
 * @method Models\CreateDefaultAlarmThresholdResponse CreateDefaultAlarmThreshold(Models\CreateDefaultAlarmThresholdRequest $req) 设置单IP默认告警阈值配置
 * @method Models\CreateIPAlarmThresholdConfigResponse CreateIPAlarmThresholdConfig(Models\CreateIPAlarmThresholdConfigRequest $req) 设置单IP告警阈值配置
 * @method Models\CreateL7RuleCertsResponse CreateL7RuleCerts(Models\CreateL7RuleCertsRequest $req) 批量配置L7转发规则的证书供SSL测调用
 * @method Models\CreateNewL7RulesResponse CreateNewL7Rules(Models\CreateNewL7RulesRequest $req) 添加7层转发规则
 * @method Models\CreatePacketFilterConfigResponse CreatePacketFilterConfig(Models\CreatePacketFilterConfigRequest $req) 添加DDoS防护的特征过滤规则
 * @method Models\CreatePortAclConfigResponse CreatePortAclConfig(Models\CreatePortAclConfigRequest $req) 添加DDoS防护的端口acl策略
 * @method Models\CreatePortAclConfigListResponse CreatePortAclConfigList(Models\CreatePortAclConfigListRequest $req) 批量添加DDoS防护的端口acl策略
 * @method Models\CreateProtocolBlockConfigResponse CreateProtocolBlockConfig(Models\CreateProtocolBlockConfigRequest $req) 设置DDoS防护的协议封禁配置
 * @method Models\CreateSchedulingDomainResponse CreateSchedulingDomain(Models\CreateSchedulingDomainRequest $req) 创建一个域名，可用于在封堵时调度切换IP
 * @method Models\CreateWaterPrintConfigResponse CreateWaterPrintConfig(Models\CreateWaterPrintConfigRequest $req) 添加DDoS防护的水印防护配置
 * @method Models\CreateWaterPrintKeyResponse CreateWaterPrintKey(Models\CreateWaterPrintKeyRequest $req) 添加DDoS防护的水印防护密钥
 * @method Models\DeleteCCLevelPolicyResponse DeleteCCLevelPolicy(Models\DeleteCCLevelPolicyRequest $req) 删除CC分级策略
 * @method Models\DeleteCCPrecisionPolicyResponse DeleteCCPrecisionPolicy(Models\DeleteCCPrecisionPolicyRequest $req) 删除CC精准防护策略
 * @method Models\DeleteCCRequestLimitPolicyResponse DeleteCCRequestLimitPolicy(Models\DeleteCCRequestLimitPolicyRequest $req) 删除CC频率限制策略
 * @method Models\DeleteCCThresholdPolicyResponse DeleteCCThresholdPolicy(Models\DeleteCCThresholdPolicyRequest $req) 删除CC清洗阈值策略
 * @method Models\DeleteCcBlackWhiteIpListResponse DeleteCcBlackWhiteIpList(Models\DeleteCcBlackWhiteIpListRequest $req) 删除CC四层黑白名单
 * @method Models\DeleteCcGeoIPBlockConfigResponse DeleteCcGeoIPBlockConfig(Models\DeleteCcGeoIPBlockConfigRequest $req) 删除CC防护的区域封禁配置
 * @method Models\DeleteDDoSBlackWhiteIpListResponse DeleteDDoSBlackWhiteIpList(Models\DeleteDDoSBlackWhiteIpListRequest $req) 删除DDoS防护的IP网段黑白名单
 * @method Models\DeleteDDoSGeoIPBlockConfigResponse DeleteDDoSGeoIPBlockConfig(Models\DeleteDDoSGeoIPBlockConfigRequest $req) 删除DDoS防护的区域封禁配置
 * @method Models\DeleteDDoSSpeedLimitConfigResponse DeleteDDoSSpeedLimitConfig(Models\DeleteDDoSSpeedLimitConfigRequest $req) 删除DDoS防护的访问限速配置
 * @method Models\DeletePacketFilterConfigResponse DeletePacketFilterConfig(Models\DeletePacketFilterConfigRequest $req) 删除DDoS防护的特征过滤规则
 * @method Models\DeletePortAclConfigResponse DeletePortAclConfig(Models\DeletePortAclConfigRequest $req) 删除DDoS防护的端口acl策略
 * @method Models\DeleteWaterPrintConfigResponse DeleteWaterPrintConfig(Models\DeleteWaterPrintConfigRequest $req) 删除DDoS防护的水印防护配置
 * @method Models\DeleteWaterPrintKeyResponse DeleteWaterPrintKey(Models\DeleteWaterPrintKeyRequest $req) 删除DDoS防护的水印防护密钥
 * @method Models\DescribeBasicDeviceStatusResponse DescribeBasicDeviceStatus(Models\DescribeBasicDeviceStatusRequest $req) 获取基础防护攻击状态
 * @method Models\DescribeBgpBizTrendResponse DescribeBgpBizTrend(Models\DescribeBgpBizTrendRequest $req) 获取高防包流量折线图
 * @method Models\DescribeBizHttpStatusResponse DescribeBizHttpStatus(Models\DescribeBizHttpStatusRequest $req) 获取业务流量状态码统计列表
 * @method Models\DescribeBizTrendResponse DescribeBizTrend(Models\DescribeBizTrendRequest $req) 获取业务流量曲线
 * @method Models\DescribeBlackWhiteIpListResponse DescribeBlackWhiteIpList(Models\DescribeBlackWhiteIpListRequest $req) 获取DDoS防护的IP黑白名单
 * @method Models\DescribeCCLevelListResponse DescribeCCLevelList(Models\DescribeCCLevelListRequest $req) 获取边界防护CC防护等级列表
 * @method Models\DescribeCCLevelPolicyResponse DescribeCCLevelPolicy(Models\DescribeCCLevelPolicyRequest $req) 获取CC分级策略
 * @method Models\DescribeCCPrecisionPlyListResponse DescribeCCPrecisionPlyList(Models\DescribeCCPrecisionPlyListRequest $req) 获取CC精准防护列表
 * @method Models\DescribeCCReqLimitPolicyListResponse DescribeCCReqLimitPolicyList(Models\DescribeCCReqLimitPolicyListRequest $req) 获取CC频率限制策略列表
 * @method Models\DescribeCCThresholdListResponse DescribeCCThresholdList(Models\DescribeCCThresholdListRequest $req) 获取CC清洗阈值列表
 * @method Models\DescribeCCTrendResponse DescribeCCTrend(Models\DescribeCCTrendRequest $req) 获取CC攻击指标数据，包括总请求峰值(QPS)和攻击请求(QPS)以及总请求次数和攻击请求次数
 * @method Models\DescribeCcBlackWhiteIpListResponse DescribeCcBlackWhiteIpList(Models\DescribeCcBlackWhiteIpListRequest $req) 获取CC四层黑白名单列表
 * @method Models\DescribeCcGeoIPBlockConfigListResponse DescribeCcGeoIPBlockConfigList(Models\DescribeCcGeoIPBlockConfigListRequest $req) 获取CC防护的区域封禁配置列表
 * @method Models\DescribeDDoSBlackWhiteIpListResponse DescribeDDoSBlackWhiteIpList(Models\DescribeDDoSBlackWhiteIpListRequest $req) 获取DDoS防护的IP网段黑白名单
 * @method Models\DescribeDDoSConnectLimitListResponse DescribeDDoSConnectLimitList(Models\DescribeDDoSConnectLimitListRequest $req) 获取DDoS连接抑制配置列表
 * @method Models\DescribeDDoSTrendResponse DescribeDDoSTrend(Models\DescribeDDoSTrendRequest $req) 获取DDoS攻击流量带宽和攻击包速率数据
 * @method Models\DescribeDefaultAlarmThresholdResponse DescribeDefaultAlarmThreshold(Models\DescribeDefaultAlarmThresholdRequest $req) 获取单IP默认告警阈值配置
 * @method Models\DescribeL7RulesBySSLCertIdResponse DescribeL7RulesBySSLCertId(Models\DescribeL7RulesBySSLCertIdRequest $req) 查询与证书ID对于域名匹配的七层规则
 * @method Models\DescribeListBGPIPInstancesResponse DescribeListBGPIPInstances(Models\DescribeListBGPIPInstancesRequest $req) 获取高防IP资产实例列表

 * @method Models\DescribeListBGPInstancesResponse DescribeListBGPInstances(Models\DescribeListBGPInstancesRequest $req) 获取高防包资产实例列表
 * @method Models\DescribeListBlackWhiteIpListResponse DescribeListBlackWhiteIpList(Models\DescribeListBlackWhiteIpListRequest $req) 获取DDoS防护的IP黑白名单列表
 * @method Models\DescribeListDDoSAIResponse DescribeListDDoSAI(Models\DescribeListDDoSAIRequest $req) 获取DDoS防护的AI防护开关列表
 * @method Models\DescribeListDDoSGeoIPBlockConfigResponse DescribeListDDoSGeoIPBlockConfig(Models\DescribeListDDoSGeoIPBlockConfigRequest $req) 获取DDoS防护的区域封禁配置列表
 * @method Models\DescribeListDDoSSpeedLimitConfigResponse DescribeListDDoSSpeedLimitConfig(Models\DescribeListDDoSSpeedLimitConfigRequest $req) 获取DDoS防护的访问限速配置列表
 * @method Models\DescribeListIPAlarmConfigResponse DescribeListIPAlarmConfig(Models\DescribeListIPAlarmConfigRequest $req) 获取单IP告警阈值配置列表
 * @method Models\DescribeListListenerResponse DescribeListListener(Models\DescribeListListenerRequest $req) 获取转发监听器列表
 * @method Models\DescribeListPacketFilterConfigResponse DescribeListPacketFilterConfig(Models\DescribeListPacketFilterConfigRequest $req) 获取DDoS防护的特征过滤规则列表
 * @method Models\DescribeListPortAclListResponse DescribeListPortAclList(Models\DescribeListPortAclListRequest $req) 获取DDoS防护的端口acl策略列表
 * @method Models\DescribeListProtectThresholdConfigResponse DescribeListProtectThresholdConfig(Models\DescribeListProtectThresholdConfigRequest $req) 获取防护阈值配置列表，包括DDoS的AI、等级、CC阈值开关等
 * @method Models\DescribeListProtocolBlockConfigResponse DescribeListProtocolBlockConfig(Models\DescribeListProtocolBlockConfigRequest $req) 获取DDoS防护的协议封禁配置列表
 * @method Models\DescribeListSchedulingDomainResponse DescribeListSchedulingDomain(Models\DescribeListSchedulingDomainRequest $req) 获取智能调度域名列表
 * @method Models\DescribeListWaterPrintConfigResponse DescribeListWaterPrintConfig(Models\DescribeListWaterPrintConfigRequest $req) 获取DDoS防护的水印防护配置列表
 * @method Models\DescribeNewL7RulesResponse DescribeNewL7Rules(Models\DescribeNewL7RulesRequest $req) 高防IP获取7层规则
 * @method Models\DescribeNewL7RulesErrHealthResponse DescribeNewL7RulesErrHealth(Models\DescribeNewL7RulesErrHealthRequest $req) 获取L7转发规则健康检查异常结果列表
 * @method Models\DescribeOverviewAttackTrendResponse DescribeOverviewAttackTrend(Models\DescribeOverviewAttackTrendRequest $req) 拉取防护概览攻击趋势
 * @method Models\DescribeOverviewCCTrendResponse DescribeOverviewCCTrend(Models\DescribeOverviewCCTrendRequest $req) 获取防护概览总请求峰值(QPS)和攻击请求(QPS)以及总请求次数和攻击请求次数
 * @method Models\DescribeOverviewDDoSEventListResponse DescribeOverviewDDoSEventList(Models\DescribeOverviewDDoSEventListRequest $req) 获取防护概览的ddos攻击事件
 * @method Models\DescribeOverviewDDoSTrendResponse DescribeOverviewDDoSTrend(Models\DescribeOverviewDDoSTrendRequest $req) 获取防护概览DDoS攻击流量带宽和攻击包速率数据
 * @method Models\DescribeOverviewIndexResponse DescribeOverviewIndex(Models\DescribeOverviewIndexRequest $req) 拉取防护概览指标
 * @method Models\DescribePendingRiskInfoResponse DescribePendingRiskInfo(Models\DescribePendingRiskInfoRequest $req) 查询账号维度待处理风险信息，包括是否为付费用户，查询攻击中、封堵中、过期资源数量等
 * @method Models\DisassociateDDoSEipAddressResponse DisassociateDDoSEipAddress(Models\DisassociateDDoSEipAddressRequest $req) 本接口 (DisassociateDDoSEipAddress) 用于解绑高防弹性公网IP。
 * @method Models\ModifyCCLevelPolicyResponse ModifyCCLevelPolicy(Models\ModifyCCLevelPolicyRequest $req) 修改CC防护等级
 * @method Models\ModifyCCPrecisionPolicyResponse ModifyCCPrecisionPolicy(Models\ModifyCCPrecisionPolicyRequest $req) 修改CC精准防护策略
 * @method Models\ModifyCCReqLimitPolicyResponse ModifyCCReqLimitPolicy(Models\ModifyCCReqLimitPolicyRequest $req) 修改CC频率限制策略
 * @method Models\ModifyCCThresholdPolicyResponse ModifyCCThresholdPolicy(Models\ModifyCCThresholdPolicyRequest $req) 修改CC清洗阈值
 * @method Models\ModifyCcBlackWhiteIpListResponse ModifyCcBlackWhiteIpList(Models\ModifyCcBlackWhiteIpListRequest $req) 修改CC四层黑白名单
 * @method Models\ModifyDDoSBlackWhiteIpListResponse ModifyDDoSBlackWhiteIpList(Models\ModifyDDoSBlackWhiteIpListRequest $req) 修改DDoS黑白名单列表
 * @method Models\ModifyDDoSGeoIPBlockConfigResponse ModifyDDoSGeoIPBlockConfig(Models\ModifyDDoSGeoIPBlockConfigRequest $req) 修改DDoS防护的区域封禁配置
 * @method Models\ModifyDDoSLevelResponse ModifyDDoSLevel(Models\ModifyDDoSLevelRequest $req) 读取或修改DDoS的防护等级
 * @method Models\ModifyDDoSSpeedLimitConfigResponse ModifyDDoSSpeedLimitConfig(Models\ModifyDDoSSpeedLimitConfigRequest $req) 修改DDoS防护的访问限速配置
 * @method Models\ModifyDDoSThresholdResponse ModifyDDoSThreshold(Models\ModifyDDoSThresholdRequest $req) 修改DDoS清洗阈值
 * @method Models\ModifyDomainUsrNameResponse ModifyDomainUsrName(Models\ModifyDomainUsrNameRequest $req) 修改智能解析域名名称
 * @method Models\ModifyNewDomainRulesResponse ModifyNewDomainRules(Models\ModifyNewDomainRulesRequest $req) 修改7层转发规则
 * @method Models\ModifyPacketFilterConfigResponse ModifyPacketFilterConfig(Models\ModifyPacketFilterConfigRequest $req) 修改DDoS防护的特征过滤规则
 * @method Models\ModifyPortAclConfigResponse ModifyPortAclConfig(Models\ModifyPortAclConfigRequest $req) 修改DDoS防护的端口acl策略
 * @method Models\SwitchWaterPrintConfigResponse SwitchWaterPrintConfig(Models\SwitchWaterPrintConfigRequest $req) 开启或关闭DDoS防护的水印防护配置
 */

class AntiddosClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "antiddos.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "antiddos";

    /**
     * @var string
     */
    protected $version = "2020-03-09";

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
        $respClass = "TencentCloud"."\\".ucfirst("antiddos")."\\"."V20200309\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
