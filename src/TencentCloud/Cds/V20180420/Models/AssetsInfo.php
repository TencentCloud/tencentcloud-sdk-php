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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产列表数组
 *
 * @method integer getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(integer $AddTime) 设置<p>创建时间</p>
 * @method integer getAid() 获取<p>资产 ID</p>
 * @method void setAid(integer $Aid) 设置<p>资产 ID</p>
 * @method string getAssetsIp() 获取<p>数据资产 IP</p>
 * @method void setAssetsIp(string $AssetsIp) 设置<p>数据资产 IP</p>
 * @method string getAssetsName() 获取<p>数据资产名称</p>
 * @method void setAssetsName(string $AssetsName) 设置<p>数据资产名称</p>
 * @method integer getAssetsPort() 获取<p>数据资产端口</p>
 * @method void setAssetsPort(integer $AssetsPort) 设置<p>数据资产端口</p>
 * @method string getAssetsType() 获取<p>数据资产类型</p>
 * @method void setAssetsType(string $AssetsType) 设置<p>数据资产类型</p>
 * @method string getAssetsVersion() 获取<p>资产版本</p>
 * @method void setAssetsVersion(string $AssetsVersion) 设置<p>资产版本</p>
 * @method integer getAssetsAddType() 获取<p>是否动态</p>
 * @method void setAssetsAddType(integer $AssetsAddType) 设置<p>是否动态</p>
 * @method integer getStatus() 获取<p>是否删除</p>
 * @method void setStatus(integer $Status) 设置<p>是否删除</p>
 * @method integer getUpdateTime() 获取<p>最后一次修改时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>最后一次修改时间</p>
 * @method string getVpcId() 获取<p>资产的vpc</p>
 * @method void setVpcId(string $VpcId) 设置<p>资产的vpc</p>
 * @method string getRegionId() 获取<p>地域</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域</p>
 * @method integer getPermission() 获取<p>审计权限</p>
 * @method void setPermission(integer $Permission) 设置<p>审计权限</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getAddType() 获取<p>用来区分自建资产是已通过cvm还是添加ip的方式</p>
 * @method void setAddType(integer $AddType) 设置<p>用来区分自建资产是已通过cvm还是添加ip的方式</p>
 * @method string getAssetSubnetId() 获取<p>子网Id</p>
 * @method void setAssetSubnetId(string $AssetSubnetId) 设置<p>子网Id</p>
 * @method integer getUploadPem() 获取<p>是否已上传数据库私钥（0 否，1 是）</p>
 * @method void setUploadPem(integer $UploadPem) 设置<p>是否已上传数据库私钥（0 否，1 是）</p>
 * @method integer getAliveStatus() 获取<p>资产状态栏 0:正常 1:已删除（目前仅对tencentDB有效）</p>
 * @method void setAliveStatus(integer $AliveStatus) 设置<p>资产状态栏 0:正常 1:已删除（目前仅对tencentDB有效）</p>
 * @method integer getAgentOn() 获取<p>开启agent(0:关闭;1:开启)</p>
 * @method void setAgentOn(integer $AgentOn) 设置<p>开启agent(0:关闭;1:开启)</p>
 * @method integer getCasbOn() 获取<p>开启agent(0:关闭;1:开启)</p>
 * @method void setCasbOn(integer $CasbOn) 设置<p>开启agent(0:关闭;1:开启)</p>
 * @method string getGroupId() 获取<p>只读组/集群ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>只读组/集群ID</p>
 * @method string getAvailable() 获取<p>PROXY_OFF: 未开启Casb代理;PROXY_ERROR:Casb代理接口返回异常;PROXY_BOUND:已绑定;PROXY_UNBOUND:未绑定;UNPAID:未购买;UNSUPPORTED:类型不支持;METADATA_NOT_FOUND:元数据不存在;QUOTA_EXCEEDED:Casb额度不足</p>
 * @method void setAvailable(string $Available) 设置<p>PROXY_OFF: 未开启Casb代理;PROXY_ERROR:Casb代理接口返回异常;PROXY_BOUND:已绑定;PROXY_UNBOUND:未绑定;UNPAID:未购买;UNSUPPORTED:类型不支持;METADATA_NOT_FOUND:元数据不存在;QUOTA_EXCEEDED:Casb额度不足</p>
 * @method integer getCdbOn() 获取<p>cdbOn</p>
 * @method void setCdbOn(integer $CdbOn) 设置<p>cdbOn</p>
 * @method string getDbPlatform() 获取<p>平台位数 32位 64位</p>
 * @method void setDbPlatform(string $DbPlatform) 设置<p>平台位数 32位 64位</p>
 * @method string getDbCharset() 获取<p>编码</p>
 * @method void setDbCharset(string $DbCharset) 设置<p>编码</p>
 * @method string getOsPolicy() 获取<p>操作系统</p>
 * @method void setOsPolicy(string $OsPolicy) 设置<p>操作系统</p>
 * @method integer getBidirectionOn() 获取<p>是否开启双向审计</p>
 * @method void setBidirectionOn(integer $BidirectionOn) 设置<p>是否开启双向审计</p>
 * @method integer getBidirectionMaxLine() 获取<p>最大返回行数</p>
 * @method void setBidirectionMaxLine(integer $BidirectionMaxLine) 设置<p>最大返回行数</p>
 * @method integer getBidirectionMaxStorage() 获取<p>最大返回大小</p>
 * @method void setBidirectionMaxStorage(integer $BidirectionMaxStorage) 设置<p>最大返回大小</p>
 * @method integer getBidirectionAllow() 获取<p>是否允许开通双向审计(1.允许；0不允许)</p>
 * @method void setBidirectionAllow(integer $BidirectionAllow) 设置<p>是否允许开通双向审计(1.允许；0不允许)</p>
 * @method integer getBidirectionDelivery() 获取<p>启双向审计的日志投递(1.开启;0.关闭)</p>
 * @method void setBidirectionDelivery(integer $BidirectionDelivery) 设置<p>启双向审计的日志投递(1.开启;0.关闭)</p>
 * @method string getRoStatus() 获取<p>只读状态</p>
 * @method void setRoStatus(string $RoStatus) 设置<p>只读状态</p>
 * @method boolean getAgentBound() 获取<p>当前资产是否开启了对当前Agent的采集策略</p>
 * @method void setAgentBound(boolean $AgentBound) 设置<p>当前资产是否开启了对当前Agent的采集策略</p>
 * @method string getCdbErrorMsg() 获取<p>错误信息</p>
 * @method void setCdbErrorMsg(string $CdbErrorMsg) 设置<p>错误信息</p>
 * @method DsgcBindingInfo getDsgcBindingInfo() 获取<p>资产 DSGC 绑定信息</p>
 * @method void setDsgcBindingInfo(DsgcBindingInfo $DsgcBindingInfo) 设置<p>资产 DSGC 绑定信息</p>
 * @method array getBindingRules() 获取<p>绑定的规则Ids</p>
 * @method void setBindingRules(array $BindingRules) 设置<p>绑定的规则Ids</p>
 * @method array getBindingModels() 获取<p>绑定的模型Ids</p>
 * @method void setBindingModels(array $BindingModels) 设置<p>绑定的模型Ids</p>
 * @method string getGroupName() 获取<p>所属组名</p>
 * @method void setGroupName(string $GroupName) 设置<p>所属组名</p>
 * @method integer getAssetGroupId() 获取<p>资产组Id</p>
 * @method void setAssetGroupId(integer $AssetGroupId) 设置<p>资产组Id</p>
 * @method boolean getIsNewCloudAudit() 获取<p>是否是新云原生审计流程</p>
 * @method void setIsNewCloudAudit(boolean $IsNewCloudAudit) 设置<p>是否是新云原生审计流程</p>
 * @method array getAuditCapability() 获取<p>审计功能支持说明</p>
 * @method void setAuditCapability(array $AuditCapability) 设置<p>审计功能支持说明</p>
 * @method integer getTrafficMirrorOn() 获取<p>1</p><p>取值范围：[0, 1]</p>
 * @method void setTrafficMirrorOn(integer $TrafficMirrorOn) 设置<p>1</p><p>取值范围：[0, 1]</p>
 * @method string getAuditScope() 获取<p>流量镜像审计范围</p><p>枚举值：</p><ul><li>ALL： 全地域</li><li>REGION： 资产所在地域</li><li>VPC： 资产所在VPC</li></ul><p>默认值：REGION</p>
 * @method void setAuditScope(string $AuditScope) 设置<p>流量镜像审计范围</p><p>枚举值：</p><ul><li>ALL： 全地域</li><li>REGION： 资产所在地域</li><li>VPC： 资产所在VPC</li></ul><p>默认值：REGION</p>
 * @method string getInstanceGroupId() 获取<p>实例集群ID</p>
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置<p>实例集群ID</p>
 */
class AssetsInfo extends AbstractModel
{
    /**
     * @var integer <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var integer <p>资产 ID</p>
     */
    public $Aid;

    /**
     * @var string <p>数据资产 IP</p>
     */
    public $AssetsIp;

    /**
     * @var string <p>数据资产名称</p>
     */
    public $AssetsName;

    /**
     * @var integer <p>数据资产端口</p>
     */
    public $AssetsPort;

    /**
     * @var string <p>数据资产类型</p>
     */
    public $AssetsType;

    /**
     * @var string <p>资产版本</p>
     */
    public $AssetsVersion;

    /**
     * @var integer <p>是否动态</p>
     */
    public $AssetsAddType;

    /**
     * @var integer <p>是否删除</p>
     */
    public $Status;

    /**
     * @var integer <p>最后一次修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>资产的vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>地域</p>
     */
    public $RegionId;

    /**
     * @var integer <p>审计权限</p>
     */
    public $Permission;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>用来区分自建资产是已通过cvm还是添加ip的方式</p>
     */
    public $AddType;

    /**
     * @var string <p>子网Id</p>
     */
    public $AssetSubnetId;

    /**
     * @var integer <p>是否已上传数据库私钥（0 否，1 是）</p>
     */
    public $UploadPem;

    /**
     * @var integer <p>资产状态栏 0:正常 1:已删除（目前仅对tencentDB有效）</p>
     */
    public $AliveStatus;

    /**
     * @var integer <p>开启agent(0:关闭;1:开启)</p>
     */
    public $AgentOn;

    /**
     * @var integer <p>开启agent(0:关闭;1:开启)</p>
     */
    public $CasbOn;

    /**
     * @var string <p>只读组/集群ID</p>
     */
    public $GroupId;

    /**
     * @var string <p>PROXY_OFF: 未开启Casb代理;PROXY_ERROR:Casb代理接口返回异常;PROXY_BOUND:已绑定;PROXY_UNBOUND:未绑定;UNPAID:未购买;UNSUPPORTED:类型不支持;METADATA_NOT_FOUND:元数据不存在;QUOTA_EXCEEDED:Casb额度不足</p>
     */
    public $Available;

    /**
     * @var integer <p>cdbOn</p>
     */
    public $CdbOn;

    /**
     * @var string <p>平台位数 32位 64位</p>
     */
    public $DbPlatform;

    /**
     * @var string <p>编码</p>
     */
    public $DbCharset;

    /**
     * @var string <p>操作系统</p>
     */
    public $OsPolicy;

    /**
     * @var integer <p>是否开启双向审计</p>
     */
    public $BidirectionOn;

    /**
     * @var integer <p>最大返回行数</p>
     */
    public $BidirectionMaxLine;

    /**
     * @var integer <p>最大返回大小</p>
     */
    public $BidirectionMaxStorage;

    /**
     * @var integer <p>是否允许开通双向审计(1.允许；0不允许)</p>
     */
    public $BidirectionAllow;

    /**
     * @var integer <p>启双向审计的日志投递(1.开启;0.关闭)</p>
     */
    public $BidirectionDelivery;

    /**
     * @var string <p>只读状态</p>
     */
    public $RoStatus;

    /**
     * @var boolean <p>当前资产是否开启了对当前Agent的采集策略</p>
     */
    public $AgentBound;

    /**
     * @var string <p>错误信息</p>
     */
    public $CdbErrorMsg;

    /**
     * @var DsgcBindingInfo <p>资产 DSGC 绑定信息</p>
     */
    public $DsgcBindingInfo;

    /**
     * @var array <p>绑定的规则Ids</p>
     */
    public $BindingRules;

    /**
     * @var array <p>绑定的模型Ids</p>
     */
    public $BindingModels;

    /**
     * @var string <p>所属组名</p>
     */
    public $GroupName;

    /**
     * @var integer <p>资产组Id</p>
     */
    public $AssetGroupId;

    /**
     * @var boolean <p>是否是新云原生审计流程</p>
     */
    public $IsNewCloudAudit;

    /**
     * @var array <p>审计功能支持说明</p>
     */
    public $AuditCapability;

    /**
     * @var integer <p>1</p><p>取值范围：[0, 1]</p>
     */
    public $TrafficMirrorOn;

    /**
     * @var string <p>流量镜像审计范围</p><p>枚举值：</p><ul><li>ALL： 全地域</li><li>REGION： 资产所在地域</li><li>VPC： 资产所在VPC</li></ul><p>默认值：REGION</p>
     */
    public $AuditScope;

    /**
     * @var string <p>实例集群ID</p>
     */
    public $InstanceGroupId;

    /**
     * @param integer $AddTime <p>创建时间</p>
     * @param integer $Aid <p>资产 ID</p>
     * @param string $AssetsIp <p>数据资产 IP</p>
     * @param string $AssetsName <p>数据资产名称</p>
     * @param integer $AssetsPort <p>数据资产端口</p>
     * @param string $AssetsType <p>数据资产类型</p>
     * @param string $AssetsVersion <p>资产版本</p>
     * @param integer $AssetsAddType <p>是否动态</p>
     * @param integer $Status <p>是否删除</p>
     * @param integer $UpdateTime <p>最后一次修改时间</p>
     * @param string $VpcId <p>资产的vpc</p>
     * @param string $RegionId <p>地域</p>
     * @param integer $Permission <p>审计权限</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $AddType <p>用来区分自建资产是已通过cvm还是添加ip的方式</p>
     * @param string $AssetSubnetId <p>子网Id</p>
     * @param integer $UploadPem <p>是否已上传数据库私钥（0 否，1 是）</p>
     * @param integer $AliveStatus <p>资产状态栏 0:正常 1:已删除（目前仅对tencentDB有效）</p>
     * @param integer $AgentOn <p>开启agent(0:关闭;1:开启)</p>
     * @param integer $CasbOn <p>开启agent(0:关闭;1:开启)</p>
     * @param string $GroupId <p>只读组/集群ID</p>
     * @param string $Available <p>PROXY_OFF: 未开启Casb代理;PROXY_ERROR:Casb代理接口返回异常;PROXY_BOUND:已绑定;PROXY_UNBOUND:未绑定;UNPAID:未购买;UNSUPPORTED:类型不支持;METADATA_NOT_FOUND:元数据不存在;QUOTA_EXCEEDED:Casb额度不足</p>
     * @param integer $CdbOn <p>cdbOn</p>
     * @param string $DbPlatform <p>平台位数 32位 64位</p>
     * @param string $DbCharset <p>编码</p>
     * @param string $OsPolicy <p>操作系统</p>
     * @param integer $BidirectionOn <p>是否开启双向审计</p>
     * @param integer $BidirectionMaxLine <p>最大返回行数</p>
     * @param integer $BidirectionMaxStorage <p>最大返回大小</p>
     * @param integer $BidirectionAllow <p>是否允许开通双向审计(1.允许；0不允许)</p>
     * @param integer $BidirectionDelivery <p>启双向审计的日志投递(1.开启;0.关闭)</p>
     * @param string $RoStatus <p>只读状态</p>
     * @param boolean $AgentBound <p>当前资产是否开启了对当前Agent的采集策略</p>
     * @param string $CdbErrorMsg <p>错误信息</p>
     * @param DsgcBindingInfo $DsgcBindingInfo <p>资产 DSGC 绑定信息</p>
     * @param array $BindingRules <p>绑定的规则Ids</p>
     * @param array $BindingModels <p>绑定的模型Ids</p>
     * @param string $GroupName <p>所属组名</p>
     * @param integer $AssetGroupId <p>资产组Id</p>
     * @param boolean $IsNewCloudAudit <p>是否是新云原生审计流程</p>
     * @param array $AuditCapability <p>审计功能支持说明</p>
     * @param integer $TrafficMirrorOn <p>1</p><p>取值范围：[0, 1]</p>
     * @param string $AuditScope <p>流量镜像审计范围</p><p>枚举值：</p><ul><li>ALL： 全地域</li><li>REGION： 资产所在地域</li><li>VPC： 资产所在VPC</li></ul><p>默认值：REGION</p>
     * @param string $InstanceGroupId <p>实例集群ID</p>
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
        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }

        if (array_key_exists("AssetsIp",$param) and $param["AssetsIp"] !== null) {
            $this->AssetsIp = $param["AssetsIp"];
        }

        if (array_key_exists("AssetsName",$param) and $param["AssetsName"] !== null) {
            $this->AssetsName = $param["AssetsName"];
        }

        if (array_key_exists("AssetsPort",$param) and $param["AssetsPort"] !== null) {
            $this->AssetsPort = $param["AssetsPort"];
        }

        if (array_key_exists("AssetsType",$param) and $param["AssetsType"] !== null) {
            $this->AssetsType = $param["AssetsType"];
        }

        if (array_key_exists("AssetsVersion",$param) and $param["AssetsVersion"] !== null) {
            $this->AssetsVersion = $param["AssetsVersion"];
        }

        if (array_key_exists("AssetsAddType",$param) and $param["AssetsAddType"] !== null) {
            $this->AssetsAddType = $param["AssetsAddType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AddType",$param) and $param["AddType"] !== null) {
            $this->AddType = $param["AddType"];
        }

        if (array_key_exists("AssetSubnetId",$param) and $param["AssetSubnetId"] !== null) {
            $this->AssetSubnetId = $param["AssetSubnetId"];
        }

        if (array_key_exists("UploadPem",$param) and $param["UploadPem"] !== null) {
            $this->UploadPem = $param["UploadPem"];
        }

        if (array_key_exists("AliveStatus",$param) and $param["AliveStatus"] !== null) {
            $this->AliveStatus = $param["AliveStatus"];
        }

        if (array_key_exists("AgentOn",$param) and $param["AgentOn"] !== null) {
            $this->AgentOn = $param["AgentOn"];
        }

        if (array_key_exists("CasbOn",$param) and $param["CasbOn"] !== null) {
            $this->CasbOn = $param["CasbOn"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("CdbOn",$param) and $param["CdbOn"] !== null) {
            $this->CdbOn = $param["CdbOn"];
        }

        if (array_key_exists("DbPlatform",$param) and $param["DbPlatform"] !== null) {
            $this->DbPlatform = $param["DbPlatform"];
        }

        if (array_key_exists("DbCharset",$param) and $param["DbCharset"] !== null) {
            $this->DbCharset = $param["DbCharset"];
        }

        if (array_key_exists("OsPolicy",$param) and $param["OsPolicy"] !== null) {
            $this->OsPolicy = $param["OsPolicy"];
        }

        if (array_key_exists("BidirectionOn",$param) and $param["BidirectionOn"] !== null) {
            $this->BidirectionOn = $param["BidirectionOn"];
        }

        if (array_key_exists("BidirectionMaxLine",$param) and $param["BidirectionMaxLine"] !== null) {
            $this->BidirectionMaxLine = $param["BidirectionMaxLine"];
        }

        if (array_key_exists("BidirectionMaxStorage",$param) and $param["BidirectionMaxStorage"] !== null) {
            $this->BidirectionMaxStorage = $param["BidirectionMaxStorage"];
        }

        if (array_key_exists("BidirectionAllow",$param) and $param["BidirectionAllow"] !== null) {
            $this->BidirectionAllow = $param["BidirectionAllow"];
        }

        if (array_key_exists("BidirectionDelivery",$param) and $param["BidirectionDelivery"] !== null) {
            $this->BidirectionDelivery = $param["BidirectionDelivery"];
        }

        if (array_key_exists("RoStatus",$param) and $param["RoStatus"] !== null) {
            $this->RoStatus = $param["RoStatus"];
        }

        if (array_key_exists("AgentBound",$param) and $param["AgentBound"] !== null) {
            $this->AgentBound = $param["AgentBound"];
        }

        if (array_key_exists("CdbErrorMsg",$param) and $param["CdbErrorMsg"] !== null) {
            $this->CdbErrorMsg = $param["CdbErrorMsg"];
        }

        if (array_key_exists("DsgcBindingInfo",$param) and $param["DsgcBindingInfo"] !== null) {
            $this->DsgcBindingInfo = new DsgcBindingInfo();
            $this->DsgcBindingInfo->deserialize($param["DsgcBindingInfo"]);
        }

        if (array_key_exists("BindingRules",$param) and $param["BindingRules"] !== null) {
            $this->BindingRules = [];
            foreach ($param["BindingRules"] as $key => $value){
                $obj = new IdWithName();
                $obj->deserialize($value);
                array_push($this->BindingRules, $obj);
            }
        }

        if (array_key_exists("BindingModels",$param) and $param["BindingModels"] !== null) {
            $this->BindingModels = [];
            foreach ($param["BindingModels"] as $key => $value){
                $obj = new IdWithName();
                $obj->deserialize($value);
                array_push($this->BindingModels, $obj);
            }
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("AssetGroupId",$param) and $param["AssetGroupId"] !== null) {
            $this->AssetGroupId = $param["AssetGroupId"];
        }

        if (array_key_exists("IsNewCloudAudit",$param) and $param["IsNewCloudAudit"] !== null) {
            $this->IsNewCloudAudit = $param["IsNewCloudAudit"];
        }

        if (array_key_exists("AuditCapability",$param) and $param["AuditCapability"] !== null) {
            $this->AuditCapability = [];
            foreach ($param["AuditCapability"] as $key => $value){
                $obj = new AuditCapability();
                $obj->deserialize($value);
                array_push($this->AuditCapability, $obj);
            }
        }

        if (array_key_exists("TrafficMirrorOn",$param) and $param["TrafficMirrorOn"] !== null) {
            $this->TrafficMirrorOn = $param["TrafficMirrorOn"];
        }

        if (array_key_exists("AuditScope",$param) and $param["AuditScope"] !== null) {
            $this->AuditScope = $param["AuditScope"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }
    }
}
