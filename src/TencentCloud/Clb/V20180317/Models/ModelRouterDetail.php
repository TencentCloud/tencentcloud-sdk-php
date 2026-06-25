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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询单个实例详细信息
 *
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getDomain() 获取<p>模型路由实例域名</p>
 * @method void setDomain(string $Domain) 设置<p>模型路由实例域名</p>
 * @method string getModelRouterId() 获取<p>模型路由ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由ID</p>
 * @method string getModelRouterName() 获取<p>模型路由名称</p><p>默认值：-</p>
 * @method void setModelRouterName(string $ModelRouterName) 设置<p>模型路由名称</p><p>默认值：-</p>
 * @method string getModelRouterType() 获取<p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
 * @method void setModelRouterType(string $ModelRouterType) 设置<p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
 * @method string getModifiedTime() 获取<p>修改时间</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>修改时间</p>
 * @method string getNetworkType() 获取<p>模型路由实例网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
 * @method void setNetworkType(string $NetworkType) 设置<p>模型路由实例网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
 * @method RateLimitConfigForModelRouter getRateLimitConfig() 获取<p>模型路由限速信息</p>
 * @method void setRateLimitConfig(RateLimitConfigForModelRouter $RateLimitConfig) 设置<p>模型路由限速信息</p>
 * @method RouterSettingWithFallBack getRouterSetting() 获取<p>模型路由的路由配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouterSetting(RouterSettingWithFallBack $RouterSetting) 设置<p>模型路由的路由配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecurityStatus() 获取<p>模型路由实例的安全状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Banned： 已封禁</li><li>Frozen： 已冻结</li></ul>
 * @method void setSecurityStatus(string $SecurityStatus) 设置<p>模型路由实例的安全状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Banned： 已封禁</li><li>Frozen： 已冻结</li></ul>
 * @method array getServiceEndPoints() 获取<p>模型路由网络配置列表</p>
 * @method void setServiceEndPoints(array $ServiceEndPoints) 设置<p>模型路由网络配置列表</p>
 * @method string getStatus() 获取<p>模型路由实例状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li></ul>
 * @method void setStatus(string $Status) 设置<p>模型路由实例状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li></ul>
 * @method string getSubnetId() 获取<p>模型路由实例所属子网的ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>模型路由实例所属子网的ID</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getTradeStatus() 获取<p>模型路由实例的计费状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Isolated： 已隔离</li></ul>
 * @method void setTradeStatus(string $TradeStatus) 设置<p>模型路由实例的计费状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Isolated： 已隔离</li></ul>
 * @method string getVip() 获取<p>模型路由实例VIP</p>
 * @method void setVip(string $Vip) 设置<p>模型路由实例VIP</p>
 * @method string getVpcId() 获取<p>模型路由实例所属VPC的ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>模型路由实例所属VPC的ID</p>
 * @method string getBudgetId() 获取<p>模型路由实例关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetId(string $BudgetId) 设置<p>模型路由实例关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBudgetName() 获取<p>模型路由实例关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetName(string $BudgetName) 设置<p>模型路由实例关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CreditUsage getCreditUsage() 获取<p>模型路由实例的Credit使用情况。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreditUsage(CreditUsage $CreditUsage) 设置<p>模型路由实例的Credit使用情况。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCreditUsageSet() 获取<p>模型路由实例按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
 * @method void setCreditUsageSet(array $CreditUsageSet) 设置<p>模型路由实例按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
 * @method array getSecurityGroups() 获取<p>安全组ID列表</p>
 * @method void setSecurityGroups(array $SecurityGroups) 设置<p>安全组ID列表</p>
 * @method ClusterInfo getClusterInfo() 获取<p>集群信息</p>
 * @method void setClusterInfo(ClusterInfo $ClusterInfo) 设置<p>集群信息</p>
 */
class ModelRouterDetail extends AbstractModel
{
    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>模型路由实例域名</p>
     */
    public $Domain;

    /**
     * @var string <p>模型路由ID</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>模型路由名称</p><p>默认值：-</p>
     */
    public $ModelRouterName;

    /**
     * @var string <p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
     */
    public $ModelRouterType;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifiedTime;

    /**
     * @var string <p>模型路由实例网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
     */
    public $NetworkType;

    /**
     * @var RateLimitConfigForModelRouter <p>模型路由限速信息</p>
     */
    public $RateLimitConfig;

    /**
     * @var RouterSettingWithFallBack <p>模型路由的路由配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouterSetting;

    /**
     * @var string <p>模型路由实例的安全状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Banned： 已封禁</li><li>Frozen： 已冻结</li></ul>
     */
    public $SecurityStatus;

    /**
     * @var array <p>模型路由网络配置列表</p>
     */
    public $ServiceEndPoints;

    /**
     * @var string <p>模型路由实例状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>模型路由实例所属子网的ID</p>
     */
    public $SubnetId;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>模型路由实例的计费状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Isolated： 已隔离</li></ul>
     */
    public $TradeStatus;

    /**
     * @var string <p>模型路由实例VIP</p>
     */
    public $Vip;

    /**
     * @var string <p>模型路由实例所属VPC的ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>模型路由实例关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetId;

    /**
     * @var string <p>模型路由实例关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetName;

    /**
     * @var CreditUsage <p>模型路由实例的Credit使用情况。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreditUsage;

    /**
     * @var array <p>模型路由实例按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
     */
    public $CreditUsageSet;

    /**
     * @var array <p>安全组ID列表</p>
     */
    public $SecurityGroups;

    /**
     * @var ClusterInfo <p>集群信息</p>
     */
    public $ClusterInfo;

    /**
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $Domain <p>模型路由实例域名</p>
     * @param string $ModelRouterId <p>模型路由ID</p>
     * @param string $ModelRouterName <p>模型路由名称</p><p>默认值：-</p>
     * @param string $ModelRouterType <p>模型路由类型</p><p>枚举值：</p><ul><li>Shared： 共享型</li><li>Enterprise： 企业级</li></ul>
     * @param string $ModifiedTime <p>修改时间</p>
     * @param string $NetworkType <p>模型路由实例网络类型</p><p>枚举值：</p><ul><li>Internet： 公网</li><li>Intranet： 内网</li></ul>
     * @param RateLimitConfigForModelRouter $RateLimitConfig <p>模型路由限速信息</p>
     * @param RouterSettingWithFallBack $RouterSetting <p>模型路由的路由配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecurityStatus <p>模型路由实例的安全状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Banned： 已封禁</li><li>Frozen： 已冻结</li></ul>
     * @param array $ServiceEndPoints <p>模型路由网络配置列表</p>
     * @param string $Status <p>模型路由实例状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li></ul>
     * @param string $SubnetId <p>模型路由实例所属子网的ID</p>
     * @param array $Tags <p>标签</p>
     * @param string $TradeStatus <p>模型路由实例的计费状态</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Isolated： 已隔离</li></ul>
     * @param string $Vip <p>模型路由实例VIP</p>
     * @param string $VpcId <p>模型路由实例所属VPC的ID</p>
     * @param string $BudgetId <p>模型路由实例关联的Budget ID。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BudgetName <p>模型路由实例关联的Budget名称。</p><p>未关联Budget时返回空字符串。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CreditUsage $CreditUsage <p>模型路由实例的Credit使用情况。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CreditUsageSet <p>模型路由实例按Budget刷新周期划分的Credit使用情况。</p><p>当关联Budget配置多个刷新周期时，按1d、7d、30d顺序返回各周期用量；未关联Budget时返回空数组。</p>
     * @param array $SecurityGroups <p>安全组ID列表</p>
     * @param ClusterInfo $ClusterInfo <p>集群信息</p>
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
        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("ModelRouterName",$param) and $param["ModelRouterName"] !== null) {
            $this->ModelRouterName = $param["ModelRouterName"];
        }

        if (array_key_exists("ModelRouterType",$param) and $param["ModelRouterType"] !== null) {
            $this->ModelRouterType = $param["ModelRouterType"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForModelRouter();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }

        if (array_key_exists("RouterSetting",$param) and $param["RouterSetting"] !== null) {
            $this->RouterSetting = new RouterSettingWithFallBack();
            $this->RouterSetting->deserialize($param["RouterSetting"]);
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("ServiceEndPoints",$param) and $param["ServiceEndPoints"] !== null) {
            $this->ServiceEndPoints = [];
            foreach ($param["ServiceEndPoints"] as $key => $value){
                $obj = new ServiceEndPoints();
                $obj->deserialize($value);
                array_push($this->ServiceEndPoints, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("CreditUsage",$param) and $param["CreditUsage"] !== null) {
            $this->CreditUsage = new CreditUsage();
            $this->CreditUsage->deserialize($param["CreditUsage"]);
        }

        if (array_key_exists("CreditUsageSet",$param) and $param["CreditUsageSet"] !== null) {
            $this->CreditUsageSet = [];
            foreach ($param["CreditUsageSet"] as $key => $value){
                $obj = new CreditUsage();
                $obj->deserialize($value);
                array_push($this->CreditUsageSet, $obj);
            }
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new ClusterInfo();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }
    }
}
