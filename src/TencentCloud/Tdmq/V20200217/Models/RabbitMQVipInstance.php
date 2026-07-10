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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ 托管版实例信息
 *
 * @method string getInstanceId() 获取<p>实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getInstanceVersion() 获取<p>实例版本</p>
 * @method void setInstanceVersion(string $InstanceVersion) 设置<p>实例版本</p>
 * @method integer getStatus() 获取<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
 * @method void setStatus(integer $Status) 设置<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
 * @method integer getNodeCount() 获取<p>节点数量</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>节点数量</p>
 * @method string getConfigDisplay() 获取<p>实例配置规格名称</p>
 * @method void setConfigDisplay(string $ConfigDisplay) 设置<p>实例配置规格名称</p>
 * @method integer getMaxTps() 获取<p>峰值TPS</p>
 * @method void setMaxTps(integer $MaxTps) 设置<p>峰值TPS</p>
 * @method integer getMaxBandWidth() 获取<p>峰值带宽，Mbps为单位</p>
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置<p>峰值带宽，Mbps为单位</p>
 * @method integer getMaxStorage() 获取<p>存储容量，GB为单位</p>
 * @method void setMaxStorage(integer $MaxStorage) 设置<p>存储容量，GB为单位</p>
 * @method integer getExpireTime() 获取<p>实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳</p>
 * @method integer getAutoRenewFlag() 获取<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method integer getPayMode() 获取<p>1 表示预付费，0 表示后付费</p>
 * @method void setPayMode(integer $PayMode) 设置<p>1 表示预付费，0 表示后付费</p>
 * @method string getRemark() 获取<p>备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>备注信息</p>
 * @method string getSpecName() 获取<p>集群的节点规格，对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
 * @method void setSpecName(string $SpecName) 设置<p>集群的节点规格，对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
 * @method string getExceptionInformation() 获取<p>集群异常信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置<p>集群异常信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败<br>为了和计费区分开，额外开启一个状态位，用于显示。</p>
 * @method void setClusterStatus(integer $ClusterStatus) 设置<p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败<br>为了和计费区分开，额外开启一个状态位，用于显示。</p>
 * @method string getPublicAccessEndpoint() 获取<p>公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置<p>公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取<p>VPC 接入点列表</p>
 * @method void setVpcs(array $Vpcs) 设置<p>VPC 接入点列表</p>
 * @method integer getCreateTime() 获取<p>创建时间，毫秒为单位。unix 时间戳</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间，毫秒为单位。unix 时间戳</p>
 * @method integer getInstanceType() 获取<p>实例类型</p><p>枚举值：</p><ul><li>0： 托管版实例</li></ul>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型</p><p>枚举值：</p><ul><li>0： 托管版实例</li></ul>
 * @method integer getIsolatedTime() 获取<p>隔离时间，毫秒为单位。unix 时间戳</p>
 * @method void setIsolatedTime(integer $IsolatedTime) 设置<p>隔离时间，毫秒为单位。unix 时间戳</p>
 * @method boolean getEnableDeletionProtection() 获取<p>是否已开启删除保护</p>
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置<p>是否已开启删除保护</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getPublicStreamAccessEndpoint() 获取<p>公有数据流Stream接入点</p>
 * @method void setPublicStreamAccessEndpoint(string $PublicStreamAccessEndpoint) 设置<p>公有数据流Stream接入点</p>
 * @method string getClusterType() 获取<p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
 * @method string getCdcClusterId() 获取<p>CDC 集群 ID</p>
 * @method void setCdcClusterId(string $CdcClusterId) 设置<p>CDC 集群 ID</p>
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string <p>实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例版本</p>
     */
    public $InstanceVersion;

    /**
     * @var integer <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
     */
    public $Status;

    /**
     * @var integer <p>节点数量</p>
     */
    public $NodeCount;

    /**
     * @var string <p>实例配置规格名称</p>
     */
    public $ConfigDisplay;

    /**
     * @var integer <p>峰值TPS</p>
     */
    public $MaxTps;

    /**
     * @var integer <p>峰值带宽，Mbps为单位</p>
     */
    public $MaxBandWidth;

    /**
     * @var integer <p>存储容量，GB为单位</p>
     */
    public $MaxStorage;

    /**
     * @var integer <p>实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>1 表示预付费，0 表示后付费</p>
     */
    public $PayMode;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remark;

    /**
     * @var string <p>集群的节点规格，对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
     */
    public $SpecName;

    /**
     * @var string <p>集群异常信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @var integer <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败<br>为了和计费区分开，额外开启一个状态位，用于显示。</p>
     */
    public $ClusterStatus;

    /**
     * @var string <p>公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var array <p>VPC 接入点列表</p>
     */
    public $Vpcs;

    /**
     * @var integer <p>创建时间，毫秒为单位。unix 时间戳</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>实例类型</p><p>枚举值：</p><ul><li>0： 托管版实例</li></ul>
     */
    public $InstanceType;

    /**
     * @var integer <p>隔离时间，毫秒为单位。unix 时间戳</p>
     */
    public $IsolatedTime;

    /**
     * @var boolean <p>是否已开启删除保护</p>
     */
    public $EnableDeletionProtection;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>公有数据流Stream接入点</p>
     */
    public $PublicStreamAccessEndpoint;

    /**
     * @var string <p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
     */
    public $ClusterType;

    /**
     * @var string <p>CDC 集群 ID</p>
     */
    public $CdcClusterId;

    /**
     * @param string $InstanceId <p>实例 ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $InstanceVersion <p>实例版本</p>
     * @param integer $Status <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败</p>
     * @param integer $NodeCount <p>节点数量</p>
     * @param string $ConfigDisplay <p>实例配置规格名称</p>
     * @param integer $MaxTps <p>峰值TPS</p>
     * @param integer $MaxBandWidth <p>峰值带宽，Mbps为单位</p>
     * @param integer $MaxStorage <p>存储容量，GB为单位</p>
     * @param integer $ExpireTime <p>实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳</p>
     * @param integer $AutoRenewFlag <p>自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param integer $PayMode <p>1 表示预付费，0 表示后付费</p>
     * @param string $Remark <p>备注信息</p>
     * @param string $SpecName <p>集群的节点规格，对应的规格标识：<br>2C8G：rabbit-vip-profession-2c8g<br>4C16G：rabbit-vip-profession-4c16g<br>8C32G：rabbit-vip-profession-8c32g<br>16C32G：rabbit-vip-basic-4<br>16C64G：rabbit-vip-profession-16c64g<br>2C4G：rabbit-vip-basic-5<br>4C8G：rabbit-vip-basic-1<br>8C16G（已售罄）：rabbit-vip-basic-2<br>不传默认为 4C8G：rabbit-vip-basic-1</p>
     * @param string $ExceptionInformation <p>集群异常信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus <p>实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败<br>为了和计费区分开，额外开启一个状态位，用于显示。</p>
     * @param string $PublicAccessEndpoint <p>公网接入点</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs <p>VPC 接入点列表</p>
     * @param integer $CreateTime <p>创建时间，毫秒为单位。unix 时间戳</p>
     * @param integer $InstanceType <p>实例类型</p><p>枚举值：</p><ul><li>0： 托管版实例</li></ul>
     * @param integer $IsolatedTime <p>隔离时间，毫秒为单位。unix 时间戳</p>
     * @param boolean $EnableDeletionProtection <p>是否已开启删除保护</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $PublicStreamAccessEndpoint <p>公有数据流Stream接入点</p>
     * @param string $ClusterType <p>集群类型</p><p>枚举值：</p><ul><li>NORMAL： 公有云</li><li>CDC： 本地专用集群</li></ul>
     * @param string $CdcClusterId <p>CDC 集群 ID</p>
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

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ConfigDisplay",$param) and $param["ConfigDisplay"] !== null) {
            $this->ConfigDisplay = $param["ConfigDisplay"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ExceptionInformation",$param) and $param["ExceptionInformation"] !== null) {
            $this->ExceptionInformation = $param["ExceptionInformation"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcEndpointInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PublicStreamAccessEndpoint",$param) and $param["PublicStreamAccessEndpoint"] !== null) {
            $this->PublicStreamAccessEndpoint = $param["PublicStreamAccessEndpoint"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("CdcClusterId",$param) and $param["CdcClusterId"] !== null) {
            $this->CdcClusterId = $param["CdcClusterId"];
        }
    }
}
