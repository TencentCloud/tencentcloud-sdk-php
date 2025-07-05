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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量导入机器信息.
 *
 * @method string getMachineName() 获取机器名称
 * @method void setMachineName(string $MachineName) 设置机器名称
 * @method string getMachinePublicIp() 获取机器公网ip
 * @method void setMachinePublicIp(string $MachinePublicIp) 设置机器公网ip
 * @method string getMachinePrivateIp() 获取机器内网ip
 * @method void setMachinePrivateIp(string $MachinePrivateIp) 设置机器内网ip
 * @method array getMachineTag() 获取机器标签
 * @method void setMachineTag(array $MachineTag) 设置机器标签
 * @method string getQuuid() 获取机器Quuid
 * @method void setQuuid(string $Quuid) 设置机器Quuid
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 * @method string getKernelVersion() 获取内核版本号
 * @method void setKernelVersion(string $KernelVersion) 设置内核版本号
 * @method string getMachineStatus() 获取在线状态 OFFLINE，ONLINE
 * @method void setMachineStatus(string $MachineStatus) 设置在线状态 OFFLINE，ONLINE
 * @method LicenseOrder getLicenseOrder() 获取授权订单对象
 * @method void setLicenseOrder(LicenseOrder $LicenseOrder) 设置授权订单对象
 * @method integer getVulNum() 获取漏洞数量
 * @method void setVulNum(integer $VulNum) 设置漏洞数量
 * @method array getCloudTags() 获取云标签信息
 * @method void setCloudTags(array $CloudTags) 设置云标签信息
 * @method string getInstanceID() 获取机器instance ID
 * @method void setInstanceID(string $InstanceID) 设置机器instance ID
 */
class EffectiveMachineInfo extends AbstractModel
{
    /**
     * @var string 机器名称
     */
    public $MachineName;

    /**
     * @var string 机器公网ip
     */
    public $MachinePublicIp;

    /**
     * @var string 机器内网ip
     */
    public $MachinePrivateIp;

    /**
     * @var array 机器标签
     */
    public $MachineTag;

    /**
     * @var string 机器Quuid
     */
    public $Quuid;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @var string 内核版本号
     */
    public $KernelVersion;

    /**
     * @var string 在线状态 OFFLINE，ONLINE
     */
    public $MachineStatus;

    /**
     * @var LicenseOrder 授权订单对象
     */
    public $LicenseOrder;

    /**
     * @var integer 漏洞数量
     */
    public $VulNum;

    /**
     * @var array 云标签信息
     */
    public $CloudTags;

    /**
     * @var string 机器instance ID
     */
    public $InstanceID;

    /**
     * @param string $MachineName 机器名称
     * @param string $MachinePublicIp 机器公网ip
     * @param string $MachinePrivateIp 机器内网ip
     * @param array $MachineTag 机器标签
     * @param string $Quuid 机器Quuid
     * @param string $Uuid 主机Uuid
     * @param string $KernelVersion 内核版本号
     * @param string $MachineStatus 在线状态 OFFLINE，ONLINE
     * @param LicenseOrder $LicenseOrder 授权订单对象
     * @param integer $VulNum 漏洞数量
     * @param array $CloudTags 云标签信息
     * @param string $InstanceID 机器instance ID
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachinePublicIp",$param) and $param["MachinePublicIp"] !== null) {
            $this->MachinePublicIp = $param["MachinePublicIp"];
        }

        if (array_key_exists("MachinePrivateIp",$param) and $param["MachinePrivateIp"] !== null) {
            $this->MachinePrivateIp = $param["MachinePrivateIp"];
        }

        if (array_key_exists("MachineTag",$param) and $param["MachineTag"] !== null) {
            $this->MachineTag = [];
            foreach ($param["MachineTag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->MachineTag, $obj);
            }
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("LicenseOrder",$param) and $param["LicenseOrder"] !== null) {
            $this->LicenseOrder = new LicenseOrder();
            $this->LicenseOrder->deserialize($param["LicenseOrder"]);
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
