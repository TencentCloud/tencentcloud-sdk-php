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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ专享实例信息
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceVersion() 获取实例版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(string $InstanceVersion) 设置实例版本
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method integer getExpireTime() 获取实例到期时间，毫秒为单位
 * @method void setExpireTime(integer $ExpireTime) 设置实例到期时间，毫秒为单位
 * @method integer getAutoRenewFlag() 获取自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method integer getPayMode() 获取0-后付费，1-预付费
 * @method void setPayMode(integer $PayMode) 设置0-后付费，1-预付费
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecName() 获取实例配置ID
 * @method void setSpecName(string $SpecName) 设置实例配置ID
 * @method string getExceptionInformation() 获取集群异常。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionInformation(string $ExceptionInformation) 设置集群异常。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RabbitMQVipInstance extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例版本
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var integer 实例到期时间，毫秒为单位
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
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 实例配置ID
     */
    public $SpecName;

    /**
     * @var string 集群异常。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionInformation;

    /**
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名称
     * @param string $InstanceVersion 实例版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 实例状态，0表示创建中，1表示正常，2表示隔离中，3表示已销毁，4 - 异常, 5 - 发货失败
     * @param integer $NodeCount 节点数量
     * @param string $ConfigDisplay 实例配置规格名称
     * @param integer $MaxTps 峰值TPS
     * @param integer $MaxBandWidth 峰值带宽，Mbps为单位
     * @param integer $MaxStorage 存储容量，GB为单位
     * @param integer $ExpireTime 实例到期时间，毫秒为单位
     * @param integer $AutoRenewFlag 自动续费标记，0表示默认状态(用户未设置，即初始状态即手动续费)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param integer $PayMode 0-后付费，1-预付费
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SpecName 实例配置ID
     * @param string $ExceptionInformation 集群异常。
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
    }
}
