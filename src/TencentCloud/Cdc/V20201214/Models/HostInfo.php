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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC宿主机的详细信息
 *
 * @method string getHostIp() 获取宿主机IP
 * @method void setHostIp(string $HostIp) 设置宿主机IP
 * @method string getServiceType() 获取云服务类型
 * @method void setServiceType(string $ServiceType) 设置云服务类型
 * @method string getHostStatus() 获取宿主机运行状态
 * @method void setHostStatus(string $HostStatus) 设置宿主机运行状态
 * @method string getHostType() 获取宿主机类型
 * @method void setHostType(string $HostType) 设置宿主机类型
 * @method integer getCpuAvailable() 获取cpu可用数
 * @method void setCpuAvailable(integer $CpuAvailable) 设置cpu可用数
 * @method integer getCpuTotal() 获取cpu总数
 * @method void setCpuTotal(integer $CpuTotal) 设置cpu总数
 * @method integer getMemAvailable() 获取内存可用数
 * @method void setMemAvailable(integer $MemAvailable) 设置内存可用数
 * @method integer getMemTotal() 获取内存总数
 * @method void setMemTotal(integer $MemTotal) 设置内存总数
 * @method string getRunTime() 获取运行时间
 * @method void setRunTime(string $RunTime) 设置运行时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getHostId() 获取宿主机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostId(string $HostId) 设置宿主机id
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string 宿主机IP
     */
    public $HostIp;

    /**
     * @var string 云服务类型
     */
    public $ServiceType;

    /**
     * @var string 宿主机运行状态
     */
    public $HostStatus;

    /**
     * @var string 宿主机类型
     */
    public $HostType;

    /**
     * @var integer cpu可用数
     */
    public $CpuAvailable;

    /**
     * @var integer cpu总数
     */
    public $CpuTotal;

    /**
     * @var integer 内存可用数
     */
    public $MemAvailable;

    /**
     * @var integer 内存总数
     */
    public $MemTotal;

    /**
     * @var string 运行时间
     */
    public $RunTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 宿主机id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostId;

    /**
     * @param string $HostIp 宿主机IP
     * @param string $ServiceType 云服务类型
     * @param string $HostStatus 宿主机运行状态
     * @param string $HostType 宿主机类型
     * @param integer $CpuAvailable cpu可用数
     * @param integer $CpuTotal cpu总数
     * @param integer $MemAvailable 内存可用数
     * @param integer $MemTotal 内存总数
     * @param string $RunTime 运行时间
     * @param string $ExpireTime 到期时间
     * @param string $HostId 宿主机id
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
        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("HostStatus",$param) and $param["HostStatus"] !== null) {
            $this->HostStatus = $param["HostStatus"];
        }

        if (array_key_exists("HostType",$param) and $param["HostType"] !== null) {
            $this->HostType = $param["HostType"];
        }

        if (array_key_exists("CpuAvailable",$param) and $param["CpuAvailable"] !== null) {
            $this->CpuAvailable = $param["CpuAvailable"];
        }

        if (array_key_exists("CpuTotal",$param) and $param["CpuTotal"] !== null) {
            $this->CpuTotal = $param["CpuTotal"];
        }

        if (array_key_exists("MemAvailable",$param) and $param["MemAvailable"] !== null) {
            $this->MemAvailable = $param["MemAvailable"];
        }

        if (array_key_exists("MemTotal",$param) and $param["MemTotal"] !== null) {
            $this->MemTotal = $param["MemTotal"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }
    }
}
