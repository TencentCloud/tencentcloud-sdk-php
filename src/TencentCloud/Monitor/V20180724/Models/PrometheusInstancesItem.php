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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 服务响应体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getInstanceChargeType() 获取实例计费模式。取值范围：
<ul>
<li>2：包年包月</li>
<li>3：按量</li>
</ul>
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置实例计费模式。取值范围：
<ul>
<li>2：包年包月</li>
<li>3：按量</li>
</ul>
 * @method integer getRegionId() 获取地域 ID
 * @method void setRegionId(integer $RegionId) 设置地域 ID
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网 ID
 * @method void setSubnetId(string $SubnetId) 设置子网 ID
 * @method integer getDataRetentionTime() 获取存储周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置存储周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取实例业务状态。取值范围：
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
 * @method void setInstanceStatus(integer $InstanceStatus) 设置实例业务状态。取值范围：
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
 * @method string getGrafanaURL() 获取Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaURL(string $GrafanaURL) 设置Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getEnableGrafana() 获取是否开启 Grafana
<li>0：不开启</li>
<li>1：开启</li>
 * @method void setEnableGrafana(integer $EnableGrafana) 设置是否开启 Grafana
<li>0：不开启</li>
<li>1：开启</li>
 * @method string getIPv4Address() 获取实例IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv4Address(string $IPv4Address) 设置实例IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSpecification() 获取实例关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置实例关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeStatus() 获取计费状态
<ul>
<li>1：正常</li>
<li>2：过期</li>
<li>3：销毁</li>
<li>4：分配中</li>
<li>5：分配失败</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(integer $ChargeStatus) 设置计费状态
<ul>
<li>1：正常</li>
<li>2：过期</li>
<li>3：销毁</li>
<li>4：分配中</li>
<li>5：分配失败</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置规格名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记
<ul>
<li>0：不自动续费</li>
<li>1：开启自动续费</li>
<li>2：禁止自动续费</li>
<li>-1：无效</ii>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记
<ul>
<li>0：不自动续费</li>
<li>1：开启自动续费</li>
<li>2：禁止自动续费</li>
<li>-1：无效</ii>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNearExpire() 获取是否快过期
<ul>
<li>0：否</li>
<li>1：快过期</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNearExpire(integer $IsNearExpire) 设置是否快过期
<ul>
<li>0：否</li>
<li>1：快过期</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthToken() 获取数据写入需要的 Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthToken(string $AuthToken) 设置数据写入需要的 Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteWrite() 获取Prometheus Remote Write 的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteWrite(string $RemoteWrite) 设置Prometheus Remote Write 的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiRootPath() 获取Prometheus HTTP Api 根地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiRootPath(string $ApiRootPath) 设置Prometheus HTTP Api 根地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyAddress() 获取Proxy 的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyAddress(string $ProxyAddress) 设置Proxy 的地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGrafanaStatus() 获取Grafana 运行状态
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重启中</li>
<li>5：销毁中</li>
<li>6：已停机</li>
<li>7：已删除</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaStatus(integer $GrafanaStatus) 设置Grafana 运行状态
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重启中</li>
<li>5：销毁中</li>
<li>6：已停机</li>
<li>7：已删除</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaIpWhiteList() 获取Grafana IP 白名单列表，使用英文分号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaIpWhiteList(string $GrafanaIpWhiteList) 设置Grafana IP 白名单列表，使用英文分号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusInstanceGrantInfo getGrant() 获取实例的授权信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrant(PrometheusInstanceGrantInfo $Grant) 设置实例的授权信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaInstanceId() 获取绑定的 Grafana 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) 设置绑定的 Grafana 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlertRuleLimit() 获取告警规则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertRuleLimit(integer $AlertRuleLimit) 设置告警规则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordingRuleLimit() 获取预聚合规则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordingRuleLimit(integer $RecordingRuleLimit) 设置预聚合规则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMigrationType() 获取迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrationType(integer $MigrationType) 设置迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusInstancesItem extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 实例计费模式。取值范围：
<ul>
<li>2：包年包月</li>
<li>3：按量</li>
</ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer 地域 ID
     */
    public $RegionId;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网 ID
     */
    public $SubnetId;

    /**
     * @var integer 存储周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRetentionTime;

    /**
     * @var integer 实例业务状态。取值范围：
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
     */
    public $InstanceStatus;

    /**
     * @var string Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaURL;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 是否开启 Grafana
<li>0：不开启</li>
<li>1：开启</li>
     */
    public $EnableGrafana;

    /**
     * @var string 实例IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv4Address;

    /**
     * @var array 实例关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string 购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 计费状态
<ul>
<li>1：正常</li>
<li>2：过期</li>
<li>3：销毁</li>
<li>4：分配中</li>
<li>5：分配失败</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var string 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer 自动续费标记
<ul>
<li>0：不自动续费</li>
<li>1：开启自动续费</li>
<li>2：禁止自动续费</li>
<li>-1：无效</ii>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var integer 是否快过期
<ul>
<li>0：否</li>
<li>1：快过期</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNearExpire;

    /**
     * @var string 数据写入需要的 Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthToken;

    /**
     * @var string Prometheus Remote Write 的地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteWrite;

    /**
     * @var string Prometheus HTTP Api 根地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiRootPath;

    /**
     * @var string Proxy 的地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyAddress;

    /**
     * @var integer Grafana 运行状态
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重启中</li>
<li>5：销毁中</li>
<li>6：已停机</li>
<li>7：已删除</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaStatus;

    /**
     * @var string Grafana IP 白名单列表，使用英文分号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaIpWhiteList;

    /**
     * @var PrometheusInstanceGrantInfo 实例的授权信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grant;

    /**
     * @var string 绑定的 Grafana 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaInstanceId;

    /**
     * @var integer 告警规则限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertRuleLimit;

    /**
     * @var integer 预聚合规则限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordingRuleLimit;

    /**
     * @var integer 迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrationType;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $InstanceName 实例名称。
     * @param integer $InstanceChargeType 实例计费模式。取值范围：
<ul>
<li>2：包年包月</li>
<li>3：按量</li>
</ul>
     * @param integer $RegionId 地域 ID
     * @param string $Zone 可用区
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网 ID
     * @param integer $DataRetentionTime 存储周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus 实例业务状态。取值范围：
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
     * @param string $GrafanaURL Grafana 面板 URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
     * @param integer $EnableGrafana 是否开启 Grafana
<li>0：不开启</li>
<li>1：开启</li>
     * @param string $IPv4Address 实例IPV4地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSpecification 实例关联的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 购买的实例过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeStatus 计费状态
<ul>
<li>1：正常</li>
<li>2：过期</li>
<li>3：销毁</li>
<li>4：分配中</li>
<li>5：分配失败</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 规格名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记
<ul>
<li>0：不自动续费</li>
<li>1：开启自动续费</li>
<li>2：禁止自动续费</li>
<li>-1：无效</ii>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNearExpire 是否快过期
<ul>
<li>0：否</li>
<li>1：快过期</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthToken 数据写入需要的 Token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteWrite Prometheus Remote Write 的地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiRootPath Prometheus HTTP Api 根地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyAddress Proxy 的地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GrafanaStatus Grafana 运行状态
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重启中</li>
<li>5：销毁中</li>
<li>6：已停机</li>
<li>7：已删除</li>
</ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaIpWhiteList Grafana IP 白名单列表，使用英文分号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusInstanceGrantInfo $Grant 实例的授权信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaInstanceId 绑定的 Grafana 实例 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlertRuleLimit 告警规则限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordingRuleLimit 预聚合规则限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MigrationType 迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("GrafanaURL",$param) and $param["GrafanaURL"] !== null) {
            $this->GrafanaURL = $param["GrafanaURL"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("EnableGrafana",$param) and $param["EnableGrafana"] !== null) {
            $this->EnableGrafana = $param["EnableGrafana"];
        }

        if (array_key_exists("IPv4Address",$param) and $param["IPv4Address"] !== null) {
            $this->IPv4Address = $param["IPv4Address"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsNearExpire",$param) and $param["IsNearExpire"] !== null) {
            $this->IsNearExpire = $param["IsNearExpire"];
        }

        if (array_key_exists("AuthToken",$param) and $param["AuthToken"] !== null) {
            $this->AuthToken = $param["AuthToken"];
        }

        if (array_key_exists("RemoteWrite",$param) and $param["RemoteWrite"] !== null) {
            $this->RemoteWrite = $param["RemoteWrite"];
        }

        if (array_key_exists("ApiRootPath",$param) and $param["ApiRootPath"] !== null) {
            $this->ApiRootPath = $param["ApiRootPath"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }

        if (array_key_exists("GrafanaStatus",$param) and $param["GrafanaStatus"] !== null) {
            $this->GrafanaStatus = $param["GrafanaStatus"];
        }

        if (array_key_exists("GrafanaIpWhiteList",$param) and $param["GrafanaIpWhiteList"] !== null) {
            $this->GrafanaIpWhiteList = $param["GrafanaIpWhiteList"];
        }

        if (array_key_exists("Grant",$param) and $param["Grant"] !== null) {
            $this->Grant = new PrometheusInstanceGrantInfo();
            $this->Grant->deserialize($param["Grant"]);
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }

        if (array_key_exists("AlertRuleLimit",$param) and $param["AlertRuleLimit"] !== null) {
            $this->AlertRuleLimit = $param["AlertRuleLimit"];
        }

        if (array_key_exists("RecordingRuleLimit",$param) and $param["RecordingRuleLimit"] !== null) {
            $this->RecordingRuleLimit = $param["RecordingRuleLimit"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }
    }
}
