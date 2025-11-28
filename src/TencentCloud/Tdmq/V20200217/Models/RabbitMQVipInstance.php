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
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceVersion() 获取实例版本
 * @method void setInstanceVersion(string $InstanceVersion) 设置实例版本
 * @method integer getStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method void setStatus(integer $Status) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method string getConfigDisplay() 获取实例配置规格名称
 * @method void setConfigDisplay(string $ConfigDisplay) 设置实例配置规格名称
 * @method integer getMaxTps() 获取峰值TPS
 * @method void setMaxTps(integer $MaxTps) 设置峰值TPS
 * @method integer getMaxBandWidth() 获取峰值带宽，Mbps为单位
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置峰值带宽，Mbps为单位
 * @method integer getMaxStorage() 获取存储容量，GB为单位
 * @method void setMaxStorage(integer $MaxStorage) 设置存储容量，GB为单位
 * @method integer getExpireTime() 获取实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method integer getPayMode() 获取1 表示预付费，0 表示后付费
 * @method void setPayMode(integer $PayMode) 设置1 表示预付费，0 表示后付费
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getSpecName() 获取集群的节点规格，对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
 * @method void setSpecName(string $SpecName) 设置集群的节点规格，对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
 * @method string getExceptionInformation() 获取集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
为了和计费区分开，额外开启一个状态位，用于显示。
 * @method void setClusterStatus(integer $ClusterStatus) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
为了和计费区分开，额外开启一个状态位，用于显示。
 * @method string getPublicAccessEndpoint() 获取公网接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置公网接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取VPC 接入点列表
 * @method void setVpcs(array $Vpcs) 设置VPC 接入点列表
 * @method integer getCreateTime() 获取创建时间，毫秒为单位。unix 时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位。unix 时间戳
 * @method integer getInstanceType() 获取实例类型，0 托管版、1 Serverless 版
 * @method void setInstanceType(integer $InstanceType) 设置实例类型，0 托管版、1 Serverless 版
 * @method integer getIsolatedTime() 获取隔离时间，毫秒为单位。unix 时间戳
 * @method void setIsolatedTime(integer $IsolatedTime) 设置隔离时间，毫秒为单位。unix 时间戳
 * @method boolean getEnableDeletionProtection() 获取是否已开启删除保护
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否已开启删除保护
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例版本
     */
    public $InstanceVersion;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     */
    public $Status;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var string 实例配置规格名称
     */
    public $ConfigDisplay;

    /**
     * @var integer 峰值TPS
     */
    public $MaxTps;

    /**
     * @var integer 峰值带宽，Mbps为单位
     */
    public $MaxBandWidth;

    /**
     * @var integer 存储容量，GB为单位
     */
    public $MaxStorage;

    /**
     * @var integer 实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
     */
    public $ExpireTime;

    /**
     * @var integer 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     */
    public $AutoRenewFlag;

    /**
     * @var integer 1 表示预付费，0 表示后付费
     */
    public $PayMode;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 集群的节点规格，对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
     */
    public $SpecName;

    /**
     * @var string 集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
为了和计费区分开，额外开启一个状态位，用于显示。
     */
    public $ClusterStatus;

    /**
     * @var string 公网接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var array VPC 接入点列表
     */
    public $Vpcs;

    /**
     * @var integer 创建时间，毫秒为单位。unix 时间戳
     */
    public $CreateTime;

    /**
     * @var integer 实例类型，0 托管版、1 Serverless 版
     */
    public $InstanceType;

    /**
     * @var integer 隔离时间，毫秒为单位。unix 时间戳
     */
    public $IsolatedTime;

    /**
     * @var boolean 是否已开启删除保护
     */
    public $EnableDeletionProtection;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceVersion 实例版本
     * @param integer $Status 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     * @param integer $NodeCount 节点数量
     * @param string $ConfigDisplay 实例配置规格名称
     * @param integer $MaxTps 峰值TPS
     * @param integer $MaxBandWidth 峰值带宽，Mbps为单位
     * @param integer $MaxStorage 存储容量，GB为单位
     * @param integer $ExpireTime 实例到期时间，按量付费的资源该值为 0，毫秒为单位。unix 时间戳
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param integer $PayMode 1 表示预付费，0 表示后付费
     * @param string $Remark 备注信息
     * @param string $SpecName 集群的节点规格，对应的规格标识：
2C8G：rabbit-vip-profession-2c8g
4C16G：rabbit-vip-profession-4c16g
8C32G：rabbit-vip-profession-8c32g
16C32G：rabbit-vip-basic-4
16C64G：rabbit-vip-profession-16c64g
2C4G：rabbit-vip-basic-5
4C8G：rabbit-vip-basic-1
8C16G（已售罄）：rabbit-vip-basic-2
不传默认为 4C8G：rabbit-vip-basic-1
     * @param string $ExceptionInformation 集群异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
为了和计费区分开，额外开启一个状态位，用于显示。
     * @param string $PublicAccessEndpoint 公网接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs VPC 接入点列表
     * @param integer $CreateTime 创建时间，毫秒为单位。unix 时间戳
     * @param integer $InstanceType 实例类型，0 托管版、1 Serverless 版
     * @param integer $IsolatedTime 隔离时间，毫秒为单位。unix 时间戳
     * @param boolean $EnableDeletionProtection 是否已开启删除保护
     * @param array $Tags 标签列表
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
    }
}
