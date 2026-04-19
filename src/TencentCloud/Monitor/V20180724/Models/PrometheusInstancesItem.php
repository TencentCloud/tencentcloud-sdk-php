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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 服务响应体
 *
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method string getInstanceName() 获取<p>实例名称。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称。</p>
 * @method integer getInstanceChargeType() 获取<p>实例计费模式。取值范围：</p><ul><li>2：包年包月</li><li>3：按量</li></ul>
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置<p>实例计费模式。取值范围：</p><ul><li>2：包年包月</li><li>3：按量</li></ul>
 * @method integer getRegionId() 获取<p>地域 ID</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域 ID</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getSubnetId() 获取<p>子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
 * @method integer getDataRetentionTime() 获取<p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置<p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取<p>实例业务状态。取值范围：</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重建中</li><li>5：销毁中</li><li>6：已停服</li><li>8：欠费停服中</li><li>9：欠费已停服</li></ul>
 * @method void setInstanceStatus(integer $InstanceStatus) 设置<p>实例业务状态。取值范围：</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重建中</li><li>5：销毁中</li><li>6：已停服</li><li>8：欠费停服中</li><li>9：欠费已停服</li></ul>
 * @method string getGrafanaURL() 获取<p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaURL(string $GrafanaURL) 设置<p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method integer getEnableGrafana() 获取<p>是否开启 Grafana</p><li>0：不开启</li><li>1：开启</li>
 * @method void setEnableGrafana(integer $EnableGrafana) 设置<p>是否开启 Grafana</p><li>0：不开启</li><li>1：开启</li>
 * @method string getIPv4Address() 获取<p>实例IPV4地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv4Address(string $IPv4Address) 设置<p>实例IPV4地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagSpecification() 获取<p>实例关联的标签列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSpecification(array $TagSpecification) 设置<p>实例关联的标签列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChargeStatus() 获取<p>计费状态</p><ul><li>1：正常</li><li>2：过期</li><li>3：销毁</li><li>4：分配中</li><li>5：分配失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeStatus(integer $ChargeStatus) 设置<p>计费状态</p><ul><li>1：正常</li><li>2：过期</li><li>3：销毁</li><li>4：分配中</li><li>5：分配失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取<p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecName(string $SpecName) 设置<p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记</p><ul><li>0：不自动续费</li><li>1：开启自动续费</li><li>2：禁止自动续费</li><li>-1：无效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记</p><ul><li>0：不自动续费</li><li>1：开启自动续费</li><li>2：禁止自动续费</li><li>-1：无效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNearExpire() 获取<p>是否快过期</p><ul><li>0：否</li><li>1：快过期</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNearExpire(integer $IsNearExpire) 设置<p>是否快过期</p><ul><li>0：否</li><li>1：快过期</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthToken() 获取<p>数据写入需要的 Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthToken(string $AuthToken) 设置<p>数据写入需要的 Token</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteWrite() 获取<p>Prometheus Remote Write 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteWrite(string $RemoteWrite) 设置<p>Prometheus Remote Write 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiRootPath() 获取<p>Prometheus HTTP Api 根地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiRootPath(string $ApiRootPath) 设置<p>Prometheus HTTP Api 根地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyAddress() 获取<p>Proxy 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyAddress(string $ProxyAddress) 设置<p>Proxy 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGrafanaStatus() 获取<p>Grafana 运行状态</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重启中</li><li>5：销毁中</li><li>6：已停机</li><li>7：已删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaStatus(integer $GrafanaStatus) 设置<p>Grafana 运行状态</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重启中</li><li>5：销毁中</li><li>6：已停机</li><li>7：已删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaIpWhiteList() 获取<p>Grafana IP 白名单列表，使用英文分号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaIpWhiteList(string $GrafanaIpWhiteList) 设置<p>Grafana IP 白名单列表，使用英文分号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PrometheusInstanceGrantInfo getGrant() 获取<p>实例的授权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrant(PrometheusInstanceGrantInfo $Grant) 设置<p>实例的授权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrafanaInstanceId() 获取<p>绑定的 Grafana 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) 设置<p>绑定的 Grafana 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAlertRuleLimit() 获取<p>告警规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertRuleLimit(integer $AlertRuleLimit) 设置<p>告警规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordingRuleLimit() 获取<p>预聚合规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordingRuleLimit(integer $RecordingRuleLimit) 设置<p>预聚合规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMigrationType() 获取<p>迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrationType(integer $MigrationType) 设置<p>迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceAttributes() 获取<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p><p>实例创建方式：<br>key: CreatedFrom<br>value: 0 - 来自prom控制台<br>1 - 来自tke集群详情页<br>2 - 来自新建集群页</p><p>免费试用到期时间:<br>key: FreeTrialExpireAt<br>value: RFC3339 格式时间字符串</p><p>关联的资源包ID:<br>key: ResourcePackageID<br>value: prompkg-xxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceAttributes(array $InstanceAttributes) 设置<p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p><p>实例创建方式：<br>key: CreatedFrom<br>value: 0 - 来自prom控制台<br>1 - 来自tke集群详情页<br>2 - 来自新建集群页</p><p>免费试用到期时间:<br>key: FreeTrialExpireAt<br>value: RFC3339 格式时间字符串</p><p>关联的资源包ID:<br>key: ResourcePackageID<br>value: prompkg-xxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusInstancesItem extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称。</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例计费模式。取值范围：</p><ul><li>2：包年包月</li><li>3：按量</li></ul>
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>地域 ID</p>
     */
    public $RegionId;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRetentionTime;

    /**
     * @var integer <p>实例业务状态。取值范围：</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重建中</li><li>5：销毁中</li><li>6：已停服</li><li>8：欠费停服中</li><li>9：欠费已停服</li></ul>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaURL;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var integer <p>是否开启 Grafana</p><li>0：不开启</li><li>1：开启</li>
     */
    public $EnableGrafana;

    /**
     * @var string <p>实例IPV4地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv4Address;

    /**
     * @var array <p>实例关联的标签列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSpecification;

    /**
     * @var string <p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer <p>计费状态</p><ul><li>1：正常</li><li>2：过期</li><li>3：销毁</li><li>4：分配中</li><li>5：分配失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeStatus;

    /**
     * @var string <p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecName;

    /**
     * @var integer <p>自动续费标记</p><ul><li>0：不自动续费</li><li>1：开启自动续费</li><li>2：禁止自动续费</li><li>-1：无效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>是否快过期</p><ul><li>0：否</li><li>1：快过期</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNearExpire;

    /**
     * @var string <p>数据写入需要的 Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthToken;

    /**
     * @var string <p>Prometheus Remote Write 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteWrite;

    /**
     * @var string <p>Prometheus HTTP Api 根地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiRootPath;

    /**
     * @var string <p>Proxy 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyAddress;

    /**
     * @var integer <p>Grafana 运行状态</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重启中</li><li>5：销毁中</li><li>6：已停机</li><li>7：已删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaStatus;

    /**
     * @var string <p>Grafana IP 白名单列表，使用英文分号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaIpWhiteList;

    /**
     * @var PrometheusInstanceGrantInfo <p>实例的授权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grant;

    /**
     * @var string <p>绑定的 Grafana 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrafanaInstanceId;

    /**
     * @var integer <p>告警规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertRuleLimit;

    /**
     * @var integer <p>预聚合规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordingRuleLimit;

    /**
     * @var integer <p>迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrationType;

    /**
     * @var array <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p><p>实例创建方式：<br>key: CreatedFrom<br>value: 0 - 来自prom控制台<br>1 - 来自tke集群详情页<br>2 - 来自新建集群页</p><p>免费试用到期时间:<br>key: FreeTrialExpireAt<br>value: RFC3339 格式时间字符串</p><p>关联的资源包ID:<br>key: ResourcePackageID<br>value: prompkg-xxxxx</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceAttributes;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param string $InstanceName <p>实例名称。</p>
     * @param integer $InstanceChargeType <p>实例计费模式。取值范围：</p><ul><li>2：包年包月</li><li>3：按量</li></ul>
     * @param integer $RegionId <p>地域 ID</p>
     * @param string $Zone <p>可用区</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>子网 ID</p>
     * @param integer $DataRetentionTime <p>存储周期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus <p>实例业务状态。取值范围：</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重建中</li><li>5：销毁中</li><li>6：已停服</li><li>8：欠费停服中</li><li>9：欠费已停服</li></ul>
     * @param string $GrafanaURL <p>Grafana 面板 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
     * @param integer $EnableGrafana <p>是否开启 Grafana</p><li>0：不开启</li><li>1：开启</li>
     * @param string $IPv4Address <p>实例IPV4地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagSpecification <p>实例关联的标签列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>购买的实例过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChargeStatus <p>计费状态</p><ul><li>1：正常</li><li>2：过期</li><li>3：销毁</li><li>4：分配中</li><li>5：分配失败</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName <p>规格名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag <p>自动续费标记</p><ul><li>0：不自动续费</li><li>1：开启自动续费</li><li>2：禁止自动续费</li><li>-1：无效</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNearExpire <p>是否快过期</p><ul><li>0：否</li><li>1：快过期</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthToken <p>数据写入需要的 Token</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteWrite <p>Prometheus Remote Write 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiRootPath <p>Prometheus HTTP Api 根地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyAddress <p>Proxy 的地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GrafanaStatus <p>Grafana 运行状态</p><ul><li>1：正在创建</li><li>2：运行中</li><li>3：异常</li><li>4：重启中</li><li>5：销毁中</li><li>6：已停机</li><li>7：已删除</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaIpWhiteList <p>Grafana IP 白名单列表，使用英文分号分隔</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PrometheusInstanceGrantInfo $Grant <p>实例的授权信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrafanaInstanceId <p>绑定的 Grafana 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AlertRuleLimit <p>告警规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordingRuleLimit <p>预聚合规则限制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MigrationType <p>迁移状态，0-不在迁移中，1-迁移中、原实例，2-迁移中、目标实例</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceAttributes <p>标识prom实例特殊属性</p><p>归档存储时长(天):<br>key: LongTermStorageRetentionTime<br>value: 60-730</p><p>实例创建方式：<br>key: CreatedFrom<br>value: 0 - 来自prom控制台<br>1 - 来自tke集群详情页<br>2 - 来自新建集群页</p><p>免费试用到期时间:<br>key: FreeTrialExpireAt<br>value: RFC3339 格式时间字符串</p><p>关联的资源包ID:<br>key: ResourcePackageID<br>value: prompkg-xxxxx</p>
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

        if (array_key_exists("InstanceAttributes",$param) and $param["InstanceAttributes"] !== null) {
            $this->InstanceAttributes = [];
            foreach ($param["InstanceAttributes"] as $key => $value){
                $obj = new PrometheusRuleKV();
                $obj->deserialize($value);
                array_push($this->InstanceAttributes, $obj);
            }
        }
    }
}
