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
 * 查看漏洞修复详情 每台主机每个漏洞修复状态
 *
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机ip
 * @method void setHostIp(string $HostIp) 设置主机ip
 * @method string getQuuid() 获取主机的quuid
 * @method void setQuuid(string $Quuid) 设置主机的quuid
 * @method integer getStatus() 获取状态：0-初始状态；1-已下发任务（修复中）2-完成（成功）；3-修复失败（失败）4-快照创建失败 导致修复失败（未修复）；
 * @method void setStatus(integer $Status) 设置状态：0-初始状态；1-已下发任务（修复中）2-完成（成功）；3-修复失败（失败）4-快照创建失败 导致修复失败（未修复）；
 * @method string getModifyTime() 获取修复时间
 * @method void setModifyTime(string $ModifyTime) 设置修复时间
 * @method string getFailReason() 获取修复失败原因
 * @method void setFailReason(string $FailReason) 设置修复失败原因
 */
class VulFixStatusHostInfo extends AbstractModel
{
    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机ip
     */
    public $HostIp;

    /**
     * @var string 主机的quuid
     */
    public $Quuid;

    /**
     * @var integer 状态：0-初始状态；1-已下发任务（修复中）2-完成（成功）；3-修复失败（失败）4-快照创建失败 导致修复失败（未修复）；
     */
    public $Status;

    /**
     * @var string 修复时间
     */
    public $ModifyTime;

    /**
     * @var string 修复失败原因
     */
    public $FailReason;

    /**
     * @param string $HostName 主机名称
     * @param string $HostIp 主机ip
     * @param string $Quuid 主机的quuid
     * @param integer $Status 状态：0-初始状态；1-已下发任务（修复中）2-完成（成功）；3-修复失败（失败）4-快照创建失败 导致修复失败（未修复）；
     * @param string $ModifyTime 修复时间
     * @param string $FailReason 修复失败原因
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

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }
    }
}
