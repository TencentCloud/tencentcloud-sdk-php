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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册实例信息。
 *
 * @method string getRegisterCodeId() 获取注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterCodeId(string $RegisterCodeId) 设置注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineId() 获取机器ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineId(string $MachineId) 设置机器ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSystemName() 获取系统名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemName(string $SystemName) 设置系统名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取主机IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocalIp() 获取内网IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalIp(string $LocalIp) 设置内网IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicKey() 获取公钥。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicKey(string $PublicKey) 设置公钥。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
 * @method void setStatus(string $Status) 设置托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
 * @method string getCreatedTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取上次更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置上次更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegisterInstanceInfo extends AbstractModel
{
    /**
     * @var string 注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterCodeId;

    /**
     * @var string 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 机器ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineId;

    /**
     * @var string 系统名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemName;

    /**
     * @var string 主机IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 内网IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalIp;

    /**
     * @var string 公钥。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicKey;

    /**
     * @var string 托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
     */
    public $Status;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 上次更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @param string $RegisterCodeId 注册码ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineId 机器ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SystemName 系统名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName 主机IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocalIp 内网IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicKey 公钥。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
     * @param string $CreatedTime 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 上次更新时间。
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
        if (array_key_exists("RegisterCodeId",$param) and $param["RegisterCodeId"] !== null) {
            $this->RegisterCodeId = $param["RegisterCodeId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("SystemName",$param) and $param["SystemName"] !== null) {
            $this->SystemName = $param["SystemName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("LocalIp",$param) and $param["LocalIp"] !== null) {
            $this->LocalIp = $param["LocalIp"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
