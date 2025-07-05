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
 * 主机与主机标签信息
 *
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method array getTagList() 获取主机标签名数组
 * @method void setTagList(array $TagList) 设置主机标签名数组
 * @method string getHostIp() 获取主机内网Ip
 * @method void setHostIp(string $HostIp) 设置主机内网Ip
 * @method string getAliasName() 获取主机名
 * @method void setAliasName(string $AliasName) 设置主机名
 * @method string getMachineWanIp() 获取主机公网ip
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机公网ip
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getKernelVersion() 获取内核版本号
 * @method void setKernelVersion(string $KernelVersion) 设置内核版本号
 * @method string getMachineStatus() 获取主机在线状态 ONLINE，OFFLINE
 * @method void setMachineStatus(string $MachineStatus) 设置主机在线状态 ONLINE，OFFLINE
 * @method string getProtectType() 获取防护版本 BASIC_VERSION 基础版, PRO_VERSION 专业版 Flagship 旗舰版
 * @method void setProtectType(string $ProtectType) 设置防护版本 BASIC_VERSION 基础版, PRO_VERSION 专业版 Flagship 旗舰版
 * @method integer getVulNum() 获取漏洞数
 * @method void setVulNum(integer $VulNum) 设置漏洞数
 * @method array getCloudTags() 获取云标签信息
 * @method void setCloudTags(array $CloudTags) 设置云标签信息
 * @method string getInstanceID() 获取主机instance ID
 * @method void setInstanceID(string $InstanceID) 设置主机instance ID
 * @method string getMachineType() 获取主机类型
 * @method void setMachineType(string $MachineType) 设置主机类型
 * @method string getRegionName() 获取可用区名称
 * @method void setRegionName(string $RegionName) 设置可用区名称
 * @method integer getRegionId() 获取可用区ID
 * @method void setRegionId(integer $RegionId) 设置可用区ID
 */
class HostTagInfo extends AbstractModel
{
    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var array 主机标签名数组
     */
    public $TagList;

    /**
     * @var string 主机内网Ip
     */
    public $HostIp;

    /**
     * @var string 主机名
     */
    public $AliasName;

    /**
     * @var string 主机公网ip
     */
    public $MachineWanIp;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 内核版本号
     */
    public $KernelVersion;

    /**
     * @var string 主机在线状态 ONLINE，OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string 防护版本 BASIC_VERSION 基础版, PRO_VERSION 专业版 Flagship 旗舰版
     */
    public $ProtectType;

    /**
     * @var integer 漏洞数
     */
    public $VulNum;

    /**
     * @var array 云标签信息
     */
    public $CloudTags;

    /**
     * @var string 主机instance ID
     */
    public $InstanceID;

    /**
     * @var string 主机类型
     */
    public $MachineType;

    /**
     * @var string 可用区名称
     */
    public $RegionName;

    /**
     * @var integer 可用区ID
     */
    public $RegionId;

    /**
     * @param string $Quuid 主机Quuid
     * @param array $TagList 主机标签名数组
     * @param string $HostIp 主机内网Ip
     * @param string $AliasName 主机名
     * @param string $MachineWanIp 主机公网ip
     * @param string $Uuid 主机uuid
     * @param string $KernelVersion 内核版本号
     * @param string $MachineStatus 主机在线状态 ONLINE，OFFLINE
     * @param string $ProtectType 防护版本 BASIC_VERSION 基础版, PRO_VERSION 专业版 Flagship 旗舰版
     * @param integer $VulNum 漏洞数
     * @param array $CloudTags 云标签信息
     * @param string $InstanceID 主机instance ID
     * @param string $MachineType 主机类型
     * @param string $RegionName 可用区名称
     * @param integer $RegionId 可用区ID
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
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

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
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

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
