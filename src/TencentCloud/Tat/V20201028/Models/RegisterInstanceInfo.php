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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册实例信息。
 *
 * @method string getRegisterCodeId() 获取注册码ID。
 * @method void setRegisterCodeId(string $RegisterCodeId) 设置注册码ID。
 * @method string getInstanceId() 获取托管实例ID。
 * @method void setInstanceId(string $InstanceId) 设置托管实例ID。
 * @method string getInstanceName() 获取托管实例名。
 * @method void setInstanceName(string $InstanceName) 设置托管实例名。
 * @method string getMachineId() 获取机器ID。
 * @method void setMachineId(string $MachineId) 设置机器ID。
 * @method string getSystemName() 获取系统名。取值：Linux | Windows。
 * @method void setSystemName(string $SystemName) 设置系统名。取值：Linux | Windows。
 * @method string getHostName() 获取主机名。
 * @method void setHostName(string $HostName) 设置主机名。
 * @method string getLocalIp() 获取内网IP。
 * @method void setLocalIp(string $LocalIp) 设置内网IP。
 * @method string getPublicKey() 获取公钥。
 * @method void setPublicKey(string $PublicKey) 设置公钥。
 * @method string getStatus() 获取托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
 * @method void setStatus(string $Status) 设置托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
 * @method string getCreatedTime() 获取创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method string getUpdatedTime() 获取上次更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setUpdatedTime(string $UpdatedTime) 设置上次更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 */
class RegisterInstanceInfo extends AbstractModel
{
    /**
     * @var string 注册码ID。
     */
    public $RegisterCodeId;

    /**
     * @var string 托管实例ID。
     */
    public $InstanceId;

    /**
     * @var string 托管实例名。
     */
    public $InstanceName;

    /**
     * @var string 机器ID。
     */
    public $MachineId;

    /**
     * @var string 系统名。取值：Linux | Windows。
     */
    public $SystemName;

    /**
     * @var string 主机名。
     */
    public $HostName;

    /**
     * @var string 内网IP。
     */
    public $LocalIp;

    /**
     * @var string 公钥。
     */
    public $PublicKey;

    /**
     * @var string 托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
     */
    public $Status;

    /**
     * @var string 创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $CreatedTime;

    /**
     * @var string 上次更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $UpdatedTime;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @param string $RegisterCodeId 注册码ID。
     * @param string $InstanceId 托管实例ID。
     * @param string $InstanceName 托管实例名。
     * @param string $MachineId 机器ID。
     * @param string $SystemName 系统名。取值：Linux | Windows。
     * @param string $HostName 主机名。
     * @param string $LocalIp 内网IP。
     * @param string $PublicKey 公钥。
     * @param string $Status 托管状态。
返回Online表示实例正在托管，返回Offline表示实例未托管。
     * @param string $CreatedTime 创建时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param string $UpdatedTime 上次更新时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param array $Tags 标签
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
