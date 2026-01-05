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
 * 批量修复漏洞二次弹窗
 *
 * @method string getHostName() 获取主机名
 * @method void setHostName(string $HostName) 设置主机名
 * @method string getHostIp() 获取主机ip
 * @method void setHostIp(string $HostIp) 设置主机ip
 * @method array getTags() 获取主机标签
 * @method void setTags(array $Tags) 设置主机标签
 * @method string getQuuid() 获取主机quuid
 * @method void setQuuid(string $Quuid) 设置主机quuid
 * @method integer getIsSupportAutoFix() 获取0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中, 9:修复失败, 10:已忽略 ,11:漏洞只支持linux不支持Windows, 12：漏洞只支持Windows不支持linux
 * @method void setIsSupportAutoFix(integer $IsSupportAutoFix) 设置0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中, 9:修复失败, 10:已忽略 ,11:漏洞只支持linux不支持Windows, 12：漏洞只支持Windows不支持linux
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getInstanceId() 获取主机InstanceId
 * @method void setInstanceId(string $InstanceId) 设置主机InstanceId
 * @method string getMachineType() 获取主机类型
 * @method void setMachineType(string $MachineType) 设置主机类型
 * @method integer getAgentStatus() 获取agent是否在线；0不在线，1在线
 * @method void setAgentStatus(integer $AgentStatus) 设置agent是否在线；0不在线，1在线
 */
class VulInfoHostInfo extends AbstractModel
{
    /**
     * @var string 主机名
     */
    public $HostName;

    /**
     * @var string 主机ip
     */
    public $HostIp;

    /**
     * @var array 主机标签
     */
    public $Tags;

    /**
     * @var string 主机quuid
     */
    public $Quuid;

    /**
     * @var integer 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中, 9:修复失败, 10:已忽略 ,11:漏洞只支持linux不支持Windows, 12：漏洞只支持Windows不支持linux
     */
    public $IsSupportAutoFix;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 主机InstanceId
     */
    public $InstanceId;

    /**
     * @var string 主机类型
     */
    public $MachineType;

    /**
     * @var integer agent是否在线；0不在线，1在线
     */
    public $AgentStatus;

    /**
     * @param string $HostName 主机名
     * @param string $HostIp 主机ip
     * @param array $Tags 主机标签
     * @param string $Quuid 主机quuid
     * @param integer $IsSupportAutoFix 0 :漏洞不可自动修复，  1：可自动修复， 2：客户端已离线， 3：主机不是旗舰版只能手动修复， 4：机型不允许 ，5：修复中 ，6：已修复， 7：检测中, 9:修复失败, 10:已忽略 ,11:漏洞只支持linux不支持Windows, 12：漏洞只支持Windows不支持linux
     * @param string $Uuid 主机uuid
     * @param string $InstanceId 主机InstanceId
     * @param string $MachineType 主机类型
     * @param integer $AgentStatus agent是否在线；0不在线，1在线
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsSupportAutoFix",$param) and $param["IsSupportAutoFix"] !== null) {
            $this->IsSupportAutoFix = $param["IsSupportAutoFix"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }
    }
}
