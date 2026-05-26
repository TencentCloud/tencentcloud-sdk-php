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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一个实例的详细信息
 *
 * @method string getInstanceId() 获取<p>实例唯一ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例唯一ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getResourceIds() 获取<p>实例对应资源ID，计费使用</p>
 * @method void setResourceIds(string $ResourceIds) 设置<p>实例对应资源ID，计费使用</p>
 * @method string getRegion() 获取<p>实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所属地域</p>
 * @method integer getPayMode() 获取<p>付费模式</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识。<br>0：关闭<br>1：开启</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识。<br>0：关闭<br>1：开启</p>
 * @method integer getMode() 获取<p>弹性计费开关。<br>0：关闭<br>1：开启</p>
 * @method void setMode(integer $Mode) 设置<p>弹性计费开关。<br>0：关闭<br>1：开启</p>
 * @method integer getLevel() 获取<p>实例套餐版本。<br>101：小微版<br>102：超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
 * @method void setLevel(integer $Level) 设置<p>实例套餐版本。<br>101：小微版<br>102：超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
 * @method string getValidTime() 获取<p>实例过期时间</p>
 * @method void setValidTime(string $ValidTime) 设置<p>实例过期时间</p>
 * @method string getBeginTime() 获取<p>实例开始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>实例开始时间</p>
 * @method integer getDomainCount() 获取<p>已配置域名个数</p>
 * @method void setDomainCount(integer $DomainCount) 设置<p>已配置域名个数</p>
 * @method integer getSubDomainLimit() 获取<p>域名数量上限</p>
 * @method void setSubDomainLimit(integer $SubDomainLimit) 设置<p>域名数量上限</p>
 * @method integer getMainDomainCount() 获取<p>已配置主域名个数</p>
 * @method void setMainDomainCount(integer $MainDomainCount) 设置<p>已配置主域名个数</p>
 * @method integer getMainDomainLimit() 获取<p>主域名数量上限</p>
 * @method void setMainDomainLimit(integer $MainDomainLimit) 设置<p>主域名数量上限</p>
 * @method integer getMaxQPS() 获取<p>实例30天内QPS峰值</p>
 * @method void setMaxQPS(integer $MaxQPS) 设置<p>实例30天内QPS峰值</p>
 * @method QPSPackageNew getQPS() 获取<p>qps扩展包信息</p>
 * @method void setQPS(QPSPackageNew $QPS) 设置<p>qps扩展包信息</p>
 * @method DomainPackageNew getDomainPkg() 获取<p>域名扩展包信息</p>
 * @method void setDomainPkg(DomainPackageNew $DomainPkg) 设置<p>域名扩展包信息</p>
 * @method integer getAppId() 获取<p>用户appid</p>
 * @method void setAppId(integer $AppId) 设置<p>用户appid</p>
 * @method string getEdition() 获取<p>clb或saas</p>
 * @method void setEdition(string $Edition) 设置<p>clb或saas</p>
 * @method FraudPkg getFraudPkg() 获取<p>业务安全包</p>
 * @method void setFraudPkg(FraudPkg $FraudPkg) 设置<p>业务安全包</p>
 * @method BotPkg getBotPkg() 获取<p>Bot资源包</p>
 * @method void setBotPkg(BotPkg $BotPkg) 设置<p>Bot资源包</p>
 * @method BotQPS getBotQPS() 获取<p>bot的qps详情</p>
 * @method void setBotQPS(BotQPS $BotQPS) 设置<p>bot的qps详情</p>
 * @method integer getElasticBilling() 获取<p>qps弹性计费上限</p>
 * @method void setElasticBilling(integer $ElasticBilling) 设置<p>qps弹性计费上限</p>
 * @method integer getAttackLogPost() 获取<p>攻击日志投递开关</p>
 * @method void setAttackLogPost(integer $AttackLogPost) 设置<p>攻击日志投递开关</p>
 * @method integer getMaxBandwidth() 获取<p>带宽峰值，单位为B/s(字节每秒)</p>
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置<p>带宽峰值，单位为B/s(字节每秒)</p>
 * @method integer getAPISecurity() 获取<p>api安全是否购买</p>
 * @method void setAPISecurity(integer $APISecurity) 设置<p>api安全是否购买</p>
 * @method integer getQpsStandard() 获取<p>购买的qps规格</p>
 * @method void setQpsStandard(integer $QpsStandard) 设置<p>购买的qps规格</p>
 * @method integer getBandwidthStandard() 获取<p>购买的带宽规格</p>
 * @method void setBandwidthStandard(integer $BandwidthStandard) 设置<p>购买的带宽规格</p>
 * @method integer getStatus() 获取<p>实例状态</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
 * @method integer getSandboxQps() 获取<p>实例沙箱qps值</p>
 * @method void setSandboxQps(integer $SandboxQps) 设置<p>实例沙箱qps值</p>
 * @method integer getIsAPISecurityTrial() 获取<p>是否api 安全试用</p>
 * @method void setIsAPISecurityTrial(integer $IsAPISecurityTrial) 设置<p>是否api 安全试用</p>
 * @method MajorEventsPkg getMajorEventsPkg() 获取<p>重保包</p>
 * @method void setMajorEventsPkg(MajorEventsPkg $MajorEventsPkg) 设置<p>重保包</p>
 * @method HybridPkg getHybridPkg() 获取<p>混合云子节点包</p>
 * @method void setHybridPkg(HybridPkg $HybridPkg) 设置<p>混合云子节点包</p>
 * @method ApiPkg getApiPkg() 获取<p>API安全资源包</p>
 * @method void setApiPkg(ApiPkg $ApiPkg) 设置<p>API安全资源包</p>
 * @method MiniPkg getMiniPkg() 获取<p>小程序安全加速包</p>
 * @method void setMiniPkg(MiniPkg $MiniPkg) 设置<p>小程序安全加速包</p>
 * @method integer getMiniQpsStandard() 获取<p>小程序qps规格</p>
 * @method void setMiniQpsStandard(integer $MiniQpsStandard) 设置<p>小程序qps规格</p>
 * @method integer getMiniMaxQPS() 获取<p>小程序qps峰值</p>
 * @method void setMiniMaxQPS(integer $MiniMaxQPS) 设置<p>小程序qps峰值</p>
 * @method string getLastQpsExceedTime() 获取<p>最近一次超量时间</p>
 * @method void setLastQpsExceedTime(string $LastQpsExceedTime) 设置<p>最近一次超量时间</p>
 * @method MiniExtendPkg getMiniExtendPkg() 获取<p>小程序安全接入ID数量扩张包</p>
 * @method void setMiniExtendPkg(MiniExtendPkg $MiniExtendPkg) 设置<p>小程序安全接入ID数量扩张包</p>
 * @method string getBillingItem() 获取<p>计费项</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>计费项</p>
 * @method integer getFreeDelayFlag() 获取<p>实例延期释放标识</p>
 * @method void setFreeDelayFlag(integer $FreeDelayFlag) 设置<p>实例延期释放标识</p>
 * @method integer getLast3MaxQPS() 获取<p>最近3天最大qps</p>
 * @method void setLast3MaxQPS(integer $Last3MaxQPS) 设置<p>最近3天最大qps</p>
 * @method integer getLast3MaxBandwidth() 获取<p>最近3天最大带宽</p>
 * @method void setLast3MaxBandwidth(integer $Last3MaxBandwidth) 设置<p>最近3天最大带宽</p>
 * @method MajorEventsProPkg getMajorEventsProPkg() 获取<p>重保增强包</p>
 * @method void setMajorEventsProPkg(MajorEventsProPkg $MajorEventsProPkg) 设置<p>重保增强包</p>
 * @method integer getBasicFlag() 获取<p>1是基础2025版本；0不是</p>
 * @method void setBasicFlag(integer $BasicFlag) 设置<p>1是基础2025版本；0不是</p>
 * @method NetworkConfig getNetworkConfig() 获取<p>实例的网络配置</p>
 * @method void setNetworkConfig(NetworkConfig $NetworkConfig) 设置<p>实例的网络配置</p>
 * @method RCEPkg getRCEPkg() 获取<p>RCE设备安全信息包</p>
 * @method void setRCEPkg(RCEPkg $RCEPkg) 设置<p>RCE设备安全信息包</p>
 * @method integer getExceedPolicy() 获取<p>超量策略。0：超量沙箱<br>1：超量限流</p>
 * @method void setExceedPolicy(integer $ExceedPolicy) 设置<p>超量策略。0：超量沙箱<br>1：超量限流</p>
 * @method LLMPkg getLLMPkg() 获取<p>大模型安全信息包</p>
 * @method void setLLMPkg(LLMPkg $LLMPkg) 设置<p>大模型安全信息包</p>
 * @method string getElasticResourceId() 获取<p>弹性资源Id</p>
 * @method void setElasticResourceId(string $ElasticResourceId) 设置<p>弹性资源Id</p>
 * @method LLMMonPkg getLLMMonPkg() 获取<p>预付费大模型安全信息包</p>
 * @method void setLLMMonPkg(LLMMonPkg $LLMMonPkg) 设置<p>预付费大模型安全信息包</p>
 * @method integer getRegionId() 获取<p>地域id</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域id</p>
 * @method BotSecurityPkg getBotSecurityPkg() 获取<p>BOT安全护航信息</p>
 * @method void setBotSecurityPkg(BotSecurityPkg $BotSecurityPkg) 设置<p>BOT安全护航信息</p>
 * @method BotMonitorPkg getBotMonitorPkg() 获取<p>BOT安全监测资源信息</p>
 * @method void setBotMonitorPkg(BotMonitorPkg $BotMonitorPkg) 设置<p>BOT安全监测资源信息</p>
 * @method DedicatedIPPkg getDedicatedIPPkg() 获取<p>独享ip资源信息</p>
 * @method void setDedicatedIPPkg(DedicatedIPPkg $DedicatedIPPkg) 设置<p>独享ip资源信息</p>
 * @method integer getDedicatedIPCount() 获取<p>已经配置独享ip的数量</p>
 * @method void setDedicatedIPCount(integer $DedicatedIPCount) 设置<p>已经配置独享ip的数量</p>
 * @method array getTagInfos() 获取<p>标签结构体</p>
 * @method void setTagInfos(array $TagInfos) 设置<p>标签结构体</p>
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例唯一ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例对应资源ID，计费使用</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $Region;

    /**
     * @var integer <p>付费模式</p>
     */
    public $PayMode;

    /**
     * @var integer <p>自动续费标识。<br>0：关闭<br>1：开启</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>弹性计费开关。<br>0：关闭<br>1：开启</p>
     */
    public $Mode;

    /**
     * @var integer <p>实例套餐版本。<br>101：小微版<br>102：超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
     */
    public $Level;

    /**
     * @var string <p>实例过期时间</p>
     */
    public $ValidTime;

    /**
     * @var string <p>实例开始时间</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>已配置域名个数</p>
     */
    public $DomainCount;

    /**
     * @var integer <p>域名数量上限</p>
     */
    public $SubDomainLimit;

    /**
     * @var integer <p>已配置主域名个数</p>
     */
    public $MainDomainCount;

    /**
     * @var integer <p>主域名数量上限</p>
     */
    public $MainDomainLimit;

    /**
     * @var integer <p>实例30天内QPS峰值</p>
     */
    public $MaxQPS;

    /**
     * @var QPSPackageNew <p>qps扩展包信息</p>
     */
    public $QPS;

    /**
     * @var DomainPackageNew <p>域名扩展包信息</p>
     */
    public $DomainPkg;

    /**
     * @var integer <p>用户appid</p>
     */
    public $AppId;

    /**
     * @var string <p>clb或saas</p>
     */
    public $Edition;

    /**
     * @var FraudPkg <p>业务安全包</p>
     */
    public $FraudPkg;

    /**
     * @var BotPkg <p>Bot资源包</p>
     */
    public $BotPkg;

    /**
     * @var BotQPS <p>bot的qps详情</p>
     */
    public $BotQPS;

    /**
     * @var integer <p>qps弹性计费上限</p>
     */
    public $ElasticBilling;

    /**
     * @var integer <p>攻击日志投递开关</p>
     */
    public $AttackLogPost;

    /**
     * @var integer <p>带宽峰值，单位为B/s(字节每秒)</p>
     */
    public $MaxBandwidth;

    /**
     * @var integer <p>api安全是否购买</p>
     */
    public $APISecurity;

    /**
     * @var integer <p>购买的qps规格</p>
     */
    public $QpsStandard;

    /**
     * @var integer <p>购买的带宽规格</p>
     */
    public $BandwidthStandard;

    /**
     * @var integer <p>实例状态</p>
     */
    public $Status;

    /**
     * @var integer <p>实例沙箱qps值</p>
     */
    public $SandboxQps;

    /**
     * @var integer <p>是否api 安全试用</p>
     */
    public $IsAPISecurityTrial;

    /**
     * @var MajorEventsPkg <p>重保包</p>
     */
    public $MajorEventsPkg;

    /**
     * @var HybridPkg <p>混合云子节点包</p>
     */
    public $HybridPkg;

    /**
     * @var ApiPkg <p>API安全资源包</p>
     */
    public $ApiPkg;

    /**
     * @var MiniPkg <p>小程序安全加速包</p>
     */
    public $MiniPkg;

    /**
     * @var integer <p>小程序qps规格</p>
     */
    public $MiniQpsStandard;

    /**
     * @var integer <p>小程序qps峰值</p>
     */
    public $MiniMaxQPS;

    /**
     * @var string <p>最近一次超量时间</p>
     */
    public $LastQpsExceedTime;

    /**
     * @var MiniExtendPkg <p>小程序安全接入ID数量扩张包</p>
     */
    public $MiniExtendPkg;

    /**
     * @var string <p>计费项</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>实例延期释放标识</p>
     */
    public $FreeDelayFlag;

    /**
     * @var integer <p>最近3天最大qps</p>
     */
    public $Last3MaxQPS;

    /**
     * @var integer <p>最近3天最大带宽</p>
     */
    public $Last3MaxBandwidth;

    /**
     * @var MajorEventsProPkg <p>重保增强包</p>
     */
    public $MajorEventsProPkg;

    /**
     * @var integer <p>1是基础2025版本；0不是</p>
     */
    public $BasicFlag;

    /**
     * @var NetworkConfig <p>实例的网络配置</p>
     */
    public $NetworkConfig;

    /**
     * @var RCEPkg <p>RCE设备安全信息包</p>
     */
    public $RCEPkg;

    /**
     * @var integer <p>超量策略。0：超量沙箱<br>1：超量限流</p>
     */
    public $ExceedPolicy;

    /**
     * @var LLMPkg <p>大模型安全信息包</p>
     */
    public $LLMPkg;

    /**
     * @var string <p>弹性资源Id</p>
     */
    public $ElasticResourceId;

    /**
     * @var LLMMonPkg <p>预付费大模型安全信息包</p>
     */
    public $LLMMonPkg;

    /**
     * @var integer <p>地域id</p>
     */
    public $RegionId;

    /**
     * @var BotSecurityPkg <p>BOT安全护航信息</p>
     */
    public $BotSecurityPkg;

    /**
     * @var BotMonitorPkg <p>BOT安全监测资源信息</p>
     */
    public $BotMonitorPkg;

    /**
     * @var DedicatedIPPkg <p>独享ip资源信息</p>
     */
    public $DedicatedIPPkg;

    /**
     * @var integer <p>已经配置独享ip的数量</p>
     */
    public $DedicatedIPCount;

    /**
     * @var array <p>标签结构体</p>
     */
    public $TagInfos;

    /**
     * @param string $InstanceId <p>实例唯一ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $ResourceIds <p>实例对应资源ID，计费使用</p>
     * @param string $Region <p>实例所属地域</p>
     * @param integer $PayMode <p>付费模式</p>
     * @param integer $RenewFlag <p>自动续费标识。<br>0：关闭<br>1：开启</p>
     * @param integer $Mode <p>弹性计费开关。<br>0：关闭<br>1：开启</p>
     * @param integer $Level <p>实例套餐版本。<br>101：小微版<br>102：超轻版<br>2：高级版<br>3：企业版<br>4：旗舰版<br>6：独享版</p>
     * @param string $ValidTime <p>实例过期时间</p>
     * @param string $BeginTime <p>实例开始时间</p>
     * @param integer $DomainCount <p>已配置域名个数</p>
     * @param integer $SubDomainLimit <p>域名数量上限</p>
     * @param integer $MainDomainCount <p>已配置主域名个数</p>
     * @param integer $MainDomainLimit <p>主域名数量上限</p>
     * @param integer $MaxQPS <p>实例30天内QPS峰值</p>
     * @param QPSPackageNew $QPS <p>qps扩展包信息</p>
     * @param DomainPackageNew $DomainPkg <p>域名扩展包信息</p>
     * @param integer $AppId <p>用户appid</p>
     * @param string $Edition <p>clb或saas</p>
     * @param FraudPkg $FraudPkg <p>业务安全包</p>
     * @param BotPkg $BotPkg <p>Bot资源包</p>
     * @param BotQPS $BotQPS <p>bot的qps详情</p>
     * @param integer $ElasticBilling <p>qps弹性计费上限</p>
     * @param integer $AttackLogPost <p>攻击日志投递开关</p>
     * @param integer $MaxBandwidth <p>带宽峰值，单位为B/s(字节每秒)</p>
     * @param integer $APISecurity <p>api安全是否购买</p>
     * @param integer $QpsStandard <p>购买的qps规格</p>
     * @param integer $BandwidthStandard <p>购买的带宽规格</p>
     * @param integer $Status <p>实例状态</p>
     * @param integer $SandboxQps <p>实例沙箱qps值</p>
     * @param integer $IsAPISecurityTrial <p>是否api 安全试用</p>
     * @param MajorEventsPkg $MajorEventsPkg <p>重保包</p>
     * @param HybridPkg $HybridPkg <p>混合云子节点包</p>
     * @param ApiPkg $ApiPkg <p>API安全资源包</p>
     * @param MiniPkg $MiniPkg <p>小程序安全加速包</p>
     * @param integer $MiniQpsStandard <p>小程序qps规格</p>
     * @param integer $MiniMaxQPS <p>小程序qps峰值</p>
     * @param string $LastQpsExceedTime <p>最近一次超量时间</p>
     * @param MiniExtendPkg $MiniExtendPkg <p>小程序安全接入ID数量扩张包</p>
     * @param string $BillingItem <p>计费项</p>
     * @param integer $FreeDelayFlag <p>实例延期释放标识</p>
     * @param integer $Last3MaxQPS <p>最近3天最大qps</p>
     * @param integer $Last3MaxBandwidth <p>最近3天最大带宽</p>
     * @param MajorEventsProPkg $MajorEventsProPkg <p>重保增强包</p>
     * @param integer $BasicFlag <p>1是基础2025版本；0不是</p>
     * @param NetworkConfig $NetworkConfig <p>实例的网络配置</p>
     * @param RCEPkg $RCEPkg <p>RCE设备安全信息包</p>
     * @param integer $ExceedPolicy <p>超量策略。0：超量沙箱<br>1：超量限流</p>
     * @param LLMPkg $LLMPkg <p>大模型安全信息包</p>
     * @param string $ElasticResourceId <p>弹性资源Id</p>
     * @param LLMMonPkg $LLMMonPkg <p>预付费大模型安全信息包</p>
     * @param integer $RegionId <p>地域id</p>
     * @param BotSecurityPkg $BotSecurityPkg <p>BOT安全护航信息</p>
     * @param BotMonitorPkg $BotMonitorPkg <p>BOT安全监测资源信息</p>
     * @param DedicatedIPPkg $DedicatedIPPkg <p>独享ip资源信息</p>
     * @param integer $DedicatedIPCount <p>已经配置独享ip的数量</p>
     * @param array $TagInfos <p>标签结构体</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("SubDomainLimit",$param) and $param["SubDomainLimit"] !== null) {
            $this->SubDomainLimit = $param["SubDomainLimit"];
        }

        if (array_key_exists("MainDomainCount",$param) and $param["MainDomainCount"] !== null) {
            $this->MainDomainCount = $param["MainDomainCount"];
        }

        if (array_key_exists("MainDomainLimit",$param) and $param["MainDomainLimit"] !== null) {
            $this->MainDomainLimit = $param["MainDomainLimit"];
        }

        if (array_key_exists("MaxQPS",$param) and $param["MaxQPS"] !== null) {
            $this->MaxQPS = $param["MaxQPS"];
        }

        if (array_key_exists("QPS",$param) and $param["QPS"] !== null) {
            $this->QPS = new QPSPackageNew();
            $this->QPS->deserialize($param["QPS"]);
        }

        if (array_key_exists("DomainPkg",$param) and $param["DomainPkg"] !== null) {
            $this->DomainPkg = new DomainPackageNew();
            $this->DomainPkg->deserialize($param["DomainPkg"]);
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("FraudPkg",$param) and $param["FraudPkg"] !== null) {
            $this->FraudPkg = new FraudPkg();
            $this->FraudPkg->deserialize($param["FraudPkg"]);
        }

        if (array_key_exists("BotPkg",$param) and $param["BotPkg"] !== null) {
            $this->BotPkg = new BotPkg();
            $this->BotPkg->deserialize($param["BotPkg"]);
        }

        if (array_key_exists("BotQPS",$param) and $param["BotQPS"] !== null) {
            $this->BotQPS = new BotQPS();
            $this->BotQPS->deserialize($param["BotQPS"]);
        }

        if (array_key_exists("ElasticBilling",$param) and $param["ElasticBilling"] !== null) {
            $this->ElasticBilling = $param["ElasticBilling"];
        }

        if (array_key_exists("AttackLogPost",$param) and $param["AttackLogPost"] !== null) {
            $this->AttackLogPost = $param["AttackLogPost"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("APISecurity",$param) and $param["APISecurity"] !== null) {
            $this->APISecurity = $param["APISecurity"];
        }

        if (array_key_exists("QpsStandard",$param) and $param["QpsStandard"] !== null) {
            $this->QpsStandard = $param["QpsStandard"];
        }

        if (array_key_exists("BandwidthStandard",$param) and $param["BandwidthStandard"] !== null) {
            $this->BandwidthStandard = $param["BandwidthStandard"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SandboxQps",$param) and $param["SandboxQps"] !== null) {
            $this->SandboxQps = $param["SandboxQps"];
        }

        if (array_key_exists("IsAPISecurityTrial",$param) and $param["IsAPISecurityTrial"] !== null) {
            $this->IsAPISecurityTrial = $param["IsAPISecurityTrial"];
        }

        if (array_key_exists("MajorEventsPkg",$param) and $param["MajorEventsPkg"] !== null) {
            $this->MajorEventsPkg = new MajorEventsPkg();
            $this->MajorEventsPkg->deserialize($param["MajorEventsPkg"]);
        }

        if (array_key_exists("HybridPkg",$param) and $param["HybridPkg"] !== null) {
            $this->HybridPkg = new HybridPkg();
            $this->HybridPkg->deserialize($param["HybridPkg"]);
        }

        if (array_key_exists("ApiPkg",$param) and $param["ApiPkg"] !== null) {
            $this->ApiPkg = new ApiPkg();
            $this->ApiPkg->deserialize($param["ApiPkg"]);
        }

        if (array_key_exists("MiniPkg",$param) and $param["MiniPkg"] !== null) {
            $this->MiniPkg = new MiniPkg();
            $this->MiniPkg->deserialize($param["MiniPkg"]);
        }

        if (array_key_exists("MiniQpsStandard",$param) and $param["MiniQpsStandard"] !== null) {
            $this->MiniQpsStandard = $param["MiniQpsStandard"];
        }

        if (array_key_exists("MiniMaxQPS",$param) and $param["MiniMaxQPS"] !== null) {
            $this->MiniMaxQPS = $param["MiniMaxQPS"];
        }

        if (array_key_exists("LastQpsExceedTime",$param) and $param["LastQpsExceedTime"] !== null) {
            $this->LastQpsExceedTime = $param["LastQpsExceedTime"];
        }

        if (array_key_exists("MiniExtendPkg",$param) and $param["MiniExtendPkg"] !== null) {
            $this->MiniExtendPkg = new MiniExtendPkg();
            $this->MiniExtendPkg->deserialize($param["MiniExtendPkg"]);
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("FreeDelayFlag",$param) and $param["FreeDelayFlag"] !== null) {
            $this->FreeDelayFlag = $param["FreeDelayFlag"];
        }

        if (array_key_exists("Last3MaxQPS",$param) and $param["Last3MaxQPS"] !== null) {
            $this->Last3MaxQPS = $param["Last3MaxQPS"];
        }

        if (array_key_exists("Last3MaxBandwidth",$param) and $param["Last3MaxBandwidth"] !== null) {
            $this->Last3MaxBandwidth = $param["Last3MaxBandwidth"];
        }

        if (array_key_exists("MajorEventsProPkg",$param) and $param["MajorEventsProPkg"] !== null) {
            $this->MajorEventsProPkg = new MajorEventsProPkg();
            $this->MajorEventsProPkg->deserialize($param["MajorEventsProPkg"]);
        }

        if (array_key_exists("BasicFlag",$param) and $param["BasicFlag"] !== null) {
            $this->BasicFlag = $param["BasicFlag"];
        }

        if (array_key_exists("NetworkConfig",$param) and $param["NetworkConfig"] !== null) {
            $this->NetworkConfig = new NetworkConfig();
            $this->NetworkConfig->deserialize($param["NetworkConfig"]);
        }

        if (array_key_exists("RCEPkg",$param) and $param["RCEPkg"] !== null) {
            $this->RCEPkg = new RCEPkg();
            $this->RCEPkg->deserialize($param["RCEPkg"]);
        }

        if (array_key_exists("ExceedPolicy",$param) and $param["ExceedPolicy"] !== null) {
            $this->ExceedPolicy = $param["ExceedPolicy"];
        }

        if (array_key_exists("LLMPkg",$param) and $param["LLMPkg"] !== null) {
            $this->LLMPkg = new LLMPkg();
            $this->LLMPkg->deserialize($param["LLMPkg"]);
        }

        if (array_key_exists("ElasticResourceId",$param) and $param["ElasticResourceId"] !== null) {
            $this->ElasticResourceId = $param["ElasticResourceId"];
        }

        if (array_key_exists("LLMMonPkg",$param) and $param["LLMMonPkg"] !== null) {
            $this->LLMMonPkg = new LLMMonPkg();
            $this->LLMMonPkg->deserialize($param["LLMMonPkg"]);
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("BotSecurityPkg",$param) and $param["BotSecurityPkg"] !== null) {
            $this->BotSecurityPkg = new BotSecurityPkg();
            $this->BotSecurityPkg->deserialize($param["BotSecurityPkg"]);
        }

        if (array_key_exists("BotMonitorPkg",$param) and $param["BotMonitorPkg"] !== null) {
            $this->BotMonitorPkg = new BotMonitorPkg();
            $this->BotMonitorPkg->deserialize($param["BotMonitorPkg"]);
        }

        if (array_key_exists("DedicatedIPPkg",$param) and $param["DedicatedIPPkg"] !== null) {
            $this->DedicatedIPPkg = new DedicatedIPPkg();
            $this->DedicatedIPPkg->deserialize($param["DedicatedIPPkg"]);
        }

        if (array_key_exists("DedicatedIPCount",$param) and $param["DedicatedIPCount"] !== null) {
            $this->DedicatedIPCount = $param["DedicatedIPCount"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = [];
            foreach ($param["TagInfos"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagInfos, $obj);
            }
        }
    }
}
