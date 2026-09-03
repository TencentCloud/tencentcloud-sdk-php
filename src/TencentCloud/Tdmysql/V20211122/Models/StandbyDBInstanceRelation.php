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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灾备实例关系
 *
 * @method string getPrimaryInstanceId() 获取主实例 ID
 * @method void setPrimaryInstanceId(string $PrimaryInstanceId) 设置主实例 ID
 * @method string getPrimaryInstanceName() 获取主实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrimaryInstanceName(string $PrimaryInstanceName) 设置主实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrimaryRegion() 获取主实例地域
 * @method void setPrimaryRegion(string $PrimaryRegion) 设置主实例地域
 * @method string getPrimaryVip() 获取主实例子网 IP
 * @method void setPrimaryVip(string $PrimaryVip) 设置主实例子网 IP
 * @method integer getPrimaryVport() 获取主实例子网端口
 * @method void setPrimaryVport(integer $PrimaryVport) 设置主实例子网端口
 * @method array getPrimaryZones() 获取主实例可用区
 * @method void setPrimaryZones(array $PrimaryZones) 设置主实例可用区
 * @method string getPrimaryStatus() 获取主实例运行状态
 * @method void setPrimaryStatus(string $PrimaryStatus) 设置主实例运行状态
 * @method string getSecondaryInstanceId() 获取备实例 ID
 * @method void setSecondaryInstanceId(string $SecondaryInstanceId) 设置备实例 ID
 * @method string getSecondaryInstanceName() 获取备实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondaryInstanceName(string $SecondaryInstanceName) 设置备实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondaryRegion() 获取备实例地域
 * @method void setSecondaryRegion(string $SecondaryRegion) 设置备实例地域
 * @method string getSecondaryVip() 获取备实例子网 IP
 * @method void setSecondaryVip(string $SecondaryVip) 设置备实例子网 IP
 * @method integer getSecondaryVport() 获取备实例子网端口
 * @method void setSecondaryVport(integer $SecondaryVport) 设置备实例子网端口
 * @method array getSecondaryZones() 获取备实例可用区
 * @method void setSecondaryZones(array $SecondaryZones) 设置备实例可用区
 * @method string getSecondaryStatus() 获取备实例运行状态
 * @method void setSecondaryStatus(string $SecondaryStatus) 设置备实例运行状态
 * @method string getConnType() 获取连接类型，log_service 或 raft
 * @method void setConnType(string $ConnType) 设置连接类型，log_service 或 raft
 * @method string getSyncMode() 获取同步类型，sync 或 async
 * @method void setSyncMode(string $SyncMode) 设置同步类型，sync 或 async
 * @method integer getSyncStatus() 获取同步状态，1: 正在同步；2: 同步异常
 * @method void setSyncStatus(integer $SyncStatus) 设置同步状态，1: 正在同步；2: 同步异常
 * @method string getSyncStatusDesc() 获取同步状态描述，同步状态异常时的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyncStatusDesc(string $SyncStatusDesc) 设置同步状态描述，同步状态异常时的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStandbyStatus() 获取灾备状态描述，"creating" "running" "modifying"，无灾备关系时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbyStatus(string $StandbyStatus) 设置灾备状态描述，"creating" "running" "modifying"，无灾备关系时为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrimaryCreateVersion() 获取主实例版本
 * @method void setPrimaryCreateVersion(string $PrimaryCreateVersion) 设置主实例版本
 * @method string getSecondaryCreateVersion() 获取备实例版本
 * @method void setSecondaryCreateVersion(string $SecondaryCreateVersion) 设置备实例版本
 * @method integer getSyncDelay() 获取时延 单位为秒
 * @method void setSyncDelay(integer $SyncDelay) 设置时延 单位为秒
 */
class StandbyDBInstanceRelation extends AbstractModel
{
    /**
     * @var string 主实例 ID
     */
    public $PrimaryInstanceId;

    /**
     * @var string 主实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrimaryInstanceName;

    /**
     * @var string 主实例地域
     */
    public $PrimaryRegion;

    /**
     * @var string 主实例子网 IP
     */
    public $PrimaryVip;

    /**
     * @var integer 主实例子网端口
     */
    public $PrimaryVport;

    /**
     * @var array 主实例可用区
     */
    public $PrimaryZones;

    /**
     * @var string 主实例运行状态
     */
    public $PrimaryStatus;

    /**
     * @var string 备实例 ID
     */
    public $SecondaryInstanceId;

    /**
     * @var string 备实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondaryInstanceName;

    /**
     * @var string 备实例地域
     */
    public $SecondaryRegion;

    /**
     * @var string 备实例子网 IP
     */
    public $SecondaryVip;

    /**
     * @var integer 备实例子网端口
     */
    public $SecondaryVport;

    /**
     * @var array 备实例可用区
     */
    public $SecondaryZones;

    /**
     * @var string 备实例运行状态
     */
    public $SecondaryStatus;

    /**
     * @var string 连接类型，log_service 或 raft
     */
    public $ConnType;

    /**
     * @var string 同步类型，sync 或 async
     */
    public $SyncMode;

    /**
     * @var integer 同步状态，1: 正在同步；2: 同步异常
     */
    public $SyncStatus;

    /**
     * @var string 同步状态描述，同步状态异常时的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyncStatusDesc;

    /**
     * @var string 灾备状态描述，"creating" "running" "modifying"，无灾备关系时为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbyStatus;

    /**
     * @var string 主实例版本
     */
    public $PrimaryCreateVersion;

    /**
     * @var string 备实例版本
     */
    public $SecondaryCreateVersion;

    /**
     * @var integer 时延 单位为秒
     */
    public $SyncDelay;

    /**
     * @param string $PrimaryInstanceId 主实例 ID
     * @param string $PrimaryInstanceName 主实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrimaryRegion 主实例地域
     * @param string $PrimaryVip 主实例子网 IP
     * @param integer $PrimaryVport 主实例子网端口
     * @param array $PrimaryZones 主实例可用区
     * @param string $PrimaryStatus 主实例运行状态
     * @param string $SecondaryInstanceId 备实例 ID
     * @param string $SecondaryInstanceName 备实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondaryRegion 备实例地域
     * @param string $SecondaryVip 备实例子网 IP
     * @param integer $SecondaryVport 备实例子网端口
     * @param array $SecondaryZones 备实例可用区
     * @param string $SecondaryStatus 备实例运行状态
     * @param string $ConnType 连接类型，log_service 或 raft
     * @param string $SyncMode 同步类型，sync 或 async
     * @param integer $SyncStatus 同步状态，1: 正在同步；2: 同步异常
     * @param string $SyncStatusDesc 同步状态描述，同步状态异常时的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StandbyStatus 灾备状态描述，"creating" "running" "modifying"，无灾备关系时为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrimaryCreateVersion 主实例版本
     * @param string $SecondaryCreateVersion 备实例版本
     * @param integer $SyncDelay 时延 单位为秒
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
        if (array_key_exists("PrimaryInstanceId",$param) and $param["PrimaryInstanceId"] !== null) {
            $this->PrimaryInstanceId = $param["PrimaryInstanceId"];
        }

        if (array_key_exists("PrimaryInstanceName",$param) and $param["PrimaryInstanceName"] !== null) {
            $this->PrimaryInstanceName = $param["PrimaryInstanceName"];
        }

        if (array_key_exists("PrimaryRegion",$param) and $param["PrimaryRegion"] !== null) {
            $this->PrimaryRegion = $param["PrimaryRegion"];
        }

        if (array_key_exists("PrimaryVip",$param) and $param["PrimaryVip"] !== null) {
            $this->PrimaryVip = $param["PrimaryVip"];
        }

        if (array_key_exists("PrimaryVport",$param) and $param["PrimaryVport"] !== null) {
            $this->PrimaryVport = $param["PrimaryVport"];
        }

        if (array_key_exists("PrimaryZones",$param) and $param["PrimaryZones"] !== null) {
            $this->PrimaryZones = $param["PrimaryZones"];
        }

        if (array_key_exists("PrimaryStatus",$param) and $param["PrimaryStatus"] !== null) {
            $this->PrimaryStatus = $param["PrimaryStatus"];
        }

        if (array_key_exists("SecondaryInstanceId",$param) and $param["SecondaryInstanceId"] !== null) {
            $this->SecondaryInstanceId = $param["SecondaryInstanceId"];
        }

        if (array_key_exists("SecondaryInstanceName",$param) and $param["SecondaryInstanceName"] !== null) {
            $this->SecondaryInstanceName = $param["SecondaryInstanceName"];
        }

        if (array_key_exists("SecondaryRegion",$param) and $param["SecondaryRegion"] !== null) {
            $this->SecondaryRegion = $param["SecondaryRegion"];
        }

        if (array_key_exists("SecondaryVip",$param) and $param["SecondaryVip"] !== null) {
            $this->SecondaryVip = $param["SecondaryVip"];
        }

        if (array_key_exists("SecondaryVport",$param) and $param["SecondaryVport"] !== null) {
            $this->SecondaryVport = $param["SecondaryVport"];
        }

        if (array_key_exists("SecondaryZones",$param) and $param["SecondaryZones"] !== null) {
            $this->SecondaryZones = $param["SecondaryZones"];
        }

        if (array_key_exists("SecondaryStatus",$param) and $param["SecondaryStatus"] !== null) {
            $this->SecondaryStatus = $param["SecondaryStatus"];
        }

        if (array_key_exists("ConnType",$param) and $param["ConnType"] !== null) {
            $this->ConnType = $param["ConnType"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncStatusDesc",$param) and $param["SyncStatusDesc"] !== null) {
            $this->SyncStatusDesc = $param["SyncStatusDesc"];
        }

        if (array_key_exists("StandbyStatus",$param) and $param["StandbyStatus"] !== null) {
            $this->StandbyStatus = $param["StandbyStatus"];
        }

        if (array_key_exists("PrimaryCreateVersion",$param) and $param["PrimaryCreateVersion"] !== null) {
            $this->PrimaryCreateVersion = $param["PrimaryCreateVersion"];
        }

        if (array_key_exists("SecondaryCreateVersion",$param) and $param["SecondaryCreateVersion"] !== null) {
            $this->SecondaryCreateVersion = $param["SecondaryCreateVersion"];
        }

        if (array_key_exists("SyncDelay",$param) and $param["SyncDelay"] !== null) {
            $this->SyncDelay = $param["SyncDelay"];
        }
    }
}
