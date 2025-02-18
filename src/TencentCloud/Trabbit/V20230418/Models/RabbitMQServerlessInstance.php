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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * rabbitmq serverless 实例
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceVersion() 获取实例版本号
 * @method void setInstanceVersion(string $InstanceVersion) 设置实例版本号
 * @method integer getStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method void setStatus(integer $Status) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
 * @method integer getMaxTps() 获取TPS
 * @method void setMaxTps(integer $MaxTps) 设置TPS
 * @method integer getMaxBandWidth() 获取带宽
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置带宽
 * @method integer getExpireTime() 获取集群过期时间
 * @method void setExpireTime(integer $ExpireTime) 设置集群过期时间
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method integer getPayMode() 获取0-后付费，1-预付费
 * @method void setPayMode(integer $PayMode) 设置0-后付费，1-预付费
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取集群规格
 * @method void setSpecName(string $SpecName) 设置集群规格
 * @method string getExceptionInformation() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicAccessEndpoint() 获取公网接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEndpoint(string $PublicAccessEndpoint) 设置公网接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVpcs() 获取私有网络接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcs(array $Vpcs) 设置私有网络接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterStatus() 获取实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败

 * @method void setClusterStatus(integer $ClusterStatus) 设置实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败

 * @method integer getInstanceType() 获取集群类型：1
 * @method void setInstanceType(integer $InstanceType) 设置集群类型：1
 * @method integer getCreateTime() 获取过期时间
 * @method void setCreateTime(integer $CreateTime) 设置过期时间
 * @method integer getNodeCount() 获取为了兼容托管版，固定值 0
 * @method void setNodeCount(integer $NodeCount) 设置为了兼容托管版，固定值 0
 * @method integer getMaxStorage() 获取为了兼容托管版，固定值 0
 * @method void setMaxStorage(integer $MaxStorage) 设置为了兼容托管版，固定值 0
 */
class RabbitMQServerlessInstance extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例版本号
     */
    public $InstanceVersion;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     */
    public $Status;

    /**
     * @var integer TPS
     */
    public $MaxTps;

    /**
     * @var integer 带宽
     */
    public $MaxBandWidth;

    /**
     * @var integer 集群过期时间
     */
    public $ExpireTime;

    /**
     * @var integer 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     */
    public $AutoRenewFlag;

    /**
     * @var integer 0-后付费，1-预付费
     */
    public $PayMode;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 集群规格
     */
    public $SpecName;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @var string 公网接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEndpoint;

    /**
     * @var array 私有网络接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vpcs;

    /**
     * @var integer 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败

     */
    public $ClusterStatus;

    /**
     * @var integer 集群类型：1
     */
    public $InstanceType;

    /**
     * @var integer 过期时间
     */
    public $CreateTime;

    /**
     * @var integer 为了兼容托管版，固定值 0
     */
    public $NodeCount;

    /**
     * @var integer 为了兼容托管版，固定值 0
     */
    public $MaxStorage;

    /**
     * @param string $InstanceId 实例Id
     * @param string $InstanceName 实例名称
     * @param string $InstanceVersion 实例版本号
     * @param integer $Status 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     * @param integer $MaxTps TPS
     * @param integer $MaxBandWidth 带宽
     * @param integer $ExpireTime 集群过期时间
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param integer $PayMode 0-后付费，1-预付费
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 集群规格
     * @param string $ExceptionInformation 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicAccessEndpoint 公网接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Vpcs 私有网络接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterStatus 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败

     * @param integer $InstanceType 集群类型：1
     * @param integer $CreateTime 过期时间
     * @param integer $NodeCount 为了兼容托管版，固定值 0
     * @param integer $MaxStorage 为了兼容托管版，固定值 0
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

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
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

        if (array_key_exists("PublicAccessEndpoint",$param) and $param["PublicAccessEndpoint"] !== null) {
            $this->PublicAccessEndpoint = $param["PublicAccessEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new RabbitMQServerlessEndpoint();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }
    }
}
