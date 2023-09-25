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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * domain列表
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名ID
 * @method void setDomainId(string $DomainId) 设置域名ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCname() 获取cname地址
 * @method void setCname(string $Cname) 设置cname地址
 * @method string getEdition() 获取实例类型,sparta-waf表示saaswaf实例域名,clb-waf表示clbwaf实例域名,cdc-clb-waf表示CDC环境下clbwaf实例域名,cdn-waf表示cdnwaf实例域名
 * @method void setEdition(string $Edition) 设置实例类型,sparta-waf表示saaswaf实例域名,clb-waf表示clbwaf实例域名,cdc-clb-waf表示CDC环境下clbwaf实例域名,cdn-waf表示cdnwaf实例域名
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method integer getClsStatus() 获取日志包
 * @method void setClsStatus(integer $ClsStatus) 设置日志包
 * @method integer getFlowMode() 获取clbwaf使用模式,0镜像模式 1清洗模式
 * @method void setFlowMode(integer $FlowMode) 设置clbwaf使用模式,0镜像模式 1清洗模式
 * @method integer getStatus() 获取waf开关,0关闭 1开启
 * @method void setStatus(integer $Status) 设置waf开关,0关闭 1开启
 * @method integer getMode() 获取规则引擎防护模式,0观察模式 1拦截模式
 * @method void setMode(integer $Mode) 设置规则引擎防护模式,0观察模式 1拦截模式
 * @method integer getEngine() 获取规则引擎和AI引擎防护模式联合状态,10规则引擎观察&&AI引擎关闭模式 11规则引擎观察&&AI引擎观察模式 12规则引擎观察&&AI引擎拦截模式 20规则引擎拦截&&AI引擎关闭模式 21规则引擎拦截&&AI引擎观察模式 22规则引擎拦截&&AI引擎拦截模式
 * @method void setEngine(integer $Engine) 设置规则引擎和AI引擎防护模式联合状态,10规则引擎观察&&AI引擎关闭模式 11规则引擎观察&&AI引擎观察模式 12规则引擎观察&&AI引擎拦截模式 20规则引擎拦截&&AI引擎关闭模式 21规则引擎拦截&&AI引擎观察模式 22规则引擎拦截&&AI引擎拦截模式
 * @method array getCCList() 获取CC列表
 * @method void setCCList(array $CCList) 设置CC列表
 * @method array getRsList() 获取回源ip
 * @method void setRsList(array $RsList) 设置回源ip
 * @method array getPorts() 获取服务端口配置
 * @method void setPorts(array $Ports) 设置服务端口配置
 * @method array getLoadBalancerSet() 获取负载均衡器
 * @method void setLoadBalancerSet(array $LoadBalancerSet) 设置负载均衡器
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method integer getState() 获取clbwaf域名监听器状态,0操作成功 4正在绑定LB 6正在解绑LB 7解绑LB失败 8绑定LB失败 10内部错误
 * @method void setState(integer $State) 设置clbwaf域名监听器状态,0操作成功 4正在绑定LB 6正在解绑LB 7解绑LB失败 8绑定LB失败 10内部错误
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getIpv6Status() 获取Ipv6开关状态,0关闭 1开启
 * @method void setIpv6Status(integer $Ipv6Status) 设置Ipv6开关状态,0关闭 1开启
 * @method integer getBotStatus() 获取BOT开关状态,0关闭 1开启
 * @method void setBotStatus(integer $BotStatus) 设置BOT开关状态,0关闭 1开启
 * @method integer getLevel() 获取版本信息
 * @method void setLevel(integer $Level) 设置版本信息
 * @method integer getPostCLSStatus() 获取是否开启投递CLS功能,0关闭 1开启
 * @method void setPostCLSStatus(integer $PostCLSStatus) 设置是否开启投递CLS功能,0关闭 1开启
 * @method integer getPostCKafkaStatus() 获取是否开启投递CKafka功能,0关闭 1开启
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) 设置是否开启投递CKafka功能,0关闭 1开启
 * @method string getCdcClusters() 获取cdc实例域名接入的集群信息,非cdc实例忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcClusters(string $CdcClusters) 设置cdc实例域名接入的集群信息,非cdc实例忽略
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getApiStatus() 获取api安全开关状态,0关闭 1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiStatus(integer $ApiStatus) 设置api安全开关状态,0关闭 1开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlbType() 获取应用型负载均衡类型,clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbType(string $AlbType) 设置应用型负载均衡类型,clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSgState() 获取安全组状态,0不展示 1非腾讯云源站 2安全组绑定失败 3安全组发生变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSgState(integer $SgState) 设置安全组状态,0不展示 1非腾讯云源站 2安全组绑定失败 3安全组发生变更
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSgDetail() 获取安全组状态的详细解释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSgDetail(string $SgDetail) 设置安全组状态的详细解释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudType() 获取域名类型:hybrid表示混合云域名，public表示公有云域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(string $CloudType) 设置域名类型:hybrid表示混合云域名，public表示公有云域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名ID
     */
    public $DomainId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string cname地址
     */
    public $Cname;

    /**
     * @var string 实例类型,sparta-waf表示saaswaf实例域名,clb-waf表示clbwaf实例域名,cdc-clb-waf表示CDC环境下clbwaf实例域名,cdn-waf表示cdnwaf实例域名
     */
    public $Edition;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var integer 日志包
     */
    public $ClsStatus;

    /**
     * @var integer clbwaf使用模式,0镜像模式 1清洗模式
     */
    public $FlowMode;

    /**
     * @var integer waf开关,0关闭 1开启
     */
    public $Status;

    /**
     * @var integer 规则引擎防护模式,0观察模式 1拦截模式
     */
    public $Mode;

    /**
     * @var integer 规则引擎和AI引擎防护模式联合状态,10规则引擎观察&&AI引擎关闭模式 11规则引擎观察&&AI引擎观察模式 12规则引擎观察&&AI引擎拦截模式 20规则引擎拦截&&AI引擎关闭模式 21规则引擎拦截&&AI引擎观察模式 22规则引擎拦截&&AI引擎拦截模式
     */
    public $Engine;

    /**
     * @var array CC列表
     */
    public $CCList;

    /**
     * @var array 回源ip
     */
    public $RsList;

    /**
     * @var array 服务端口配置
     */
    public $Ports;

    /**
     * @var array 负载均衡器
     */
    public $LoadBalancerSet;

    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var integer clbwaf域名监听器状态,0操作成功 4正在绑定LB 6正在解绑LB 7解绑LB失败 8绑定LB失败 10内部错误
     */
    public $State;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer Ipv6开关状态,0关闭 1开启
     */
    public $Ipv6Status;

    /**
     * @var integer BOT开关状态,0关闭 1开启
     */
    public $BotStatus;

    /**
     * @var integer 版本信息
     */
    public $Level;

    /**
     * @var integer 是否开启投递CLS功能,0关闭 1开启
     */
    public $PostCLSStatus;

    /**
     * @var integer 是否开启投递CKafka功能,0关闭 1开启
     */
    public $PostCKafkaStatus;

    /**
     * @var string cdc实例域名接入的集群信息,非cdc实例忽略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcClusters;

    /**
     * @var integer api安全开关状态,0关闭 1开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiStatus;

    /**
     * @var string 应用型负载均衡类型,clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbType;

    /**
     * @var integer 安全组状态,0不展示 1非腾讯云源站 2安全组绑定失败 3安全组发生变更
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SgState;

    /**
     * @var string 安全组状态的详细解释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SgDetail;

    /**
     * @var string 域名类型:hybrid表示混合云域名，public表示公有云域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @param string $Domain 域名
     * @param string $DomainId 域名ID
     * @param string $InstanceId 实例ID
     * @param string $Cname cname地址
     * @param string $Edition 实例类型,sparta-waf表示saaswaf实例域名,clb-waf表示clbwaf实例域名,cdc-clb-waf表示CDC环境下clbwaf实例域名,cdn-waf表示cdnwaf实例域名
     * @param string $Region 地域
     * @param string $InstanceName 实例名
     * @param integer $ClsStatus 日志包
     * @param integer $FlowMode clbwaf使用模式,0镜像模式 1清洗模式
     * @param integer $Status waf开关,0关闭 1开启
     * @param integer $Mode 规则引擎防护模式,0观察模式 1拦截模式
     * @param integer $Engine 规则引擎和AI引擎防护模式联合状态,10规则引擎观察&&AI引擎关闭模式 11规则引擎观察&&AI引擎观察模式 12规则引擎观察&&AI引擎拦截模式 20规则引擎拦截&&AI引擎关闭模式 21规则引擎拦截&&AI引擎观察模式 22规则引擎拦截&&AI引擎拦截模式
     * @param array $CCList CC列表
     * @param array $RsList 回源ip
     * @param array $Ports 服务端口配置
     * @param array $LoadBalancerSet 负载均衡器
     * @param integer $AppId 用户id
     * @param integer $State clbwaf域名监听器状态,0操作成功 4正在绑定LB 6正在解绑LB 7解绑LB失败 8绑定LB失败 10内部错误
     * @param string $CreateTime 创建时间
     * @param integer $Ipv6Status Ipv6开关状态,0关闭 1开启
     * @param integer $BotStatus BOT开关状态,0关闭 1开启
     * @param integer $Level 版本信息
     * @param integer $PostCLSStatus 是否开启投递CLS功能,0关闭 1开启
     * @param integer $PostCKafkaStatus 是否开启投递CKafka功能,0关闭 1开启
     * @param string $CdcClusters cdc实例域名接入的集群信息,非cdc实例忽略
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ApiStatus api安全开关状态,0关闭 1开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlbType 应用型负载均衡类型,clb或者apisix，默认clb
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SgState 安全组状态,0不展示 1非腾讯云源站 2安全组绑定失败 3安全组发生变更
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SgDetail 安全组状态的详细解释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudType 域名类型:hybrid表示混合云域名，public表示公有云域名
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("CCList",$param) and $param["CCList"] !== null) {
            $this->CCList = $param["CCList"];
        }

        if (array_key_exists("RsList",$param) and $param["RsList"] !== null) {
            $this->RsList = $param["RsList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("LoadBalancerSet",$param) and $param["LoadBalancerSet"] !== null) {
            $this->LoadBalancerSet = [];
            foreach ($param["LoadBalancerSet"] as $key => $value){
                $obj = new LoadBalancerPackageNew();
                $obj->deserialize($value);
                array_push($this->LoadBalancerSet, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Ipv6Status",$param) and $param["Ipv6Status"] !== null) {
            $this->Ipv6Status = $param["Ipv6Status"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("CdcClusters",$param) and $param["CdcClusters"] !== null) {
            $this->CdcClusters = $param["CdcClusters"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("SgState",$param) and $param["SgState"] !== null) {
            $this->SgState = $param["SgState"];
        }

        if (array_key_exists("SgDetail",$param) and $param["SgDetail"] !== null) {
            $this->SgDetail = $param["SgDetail"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
