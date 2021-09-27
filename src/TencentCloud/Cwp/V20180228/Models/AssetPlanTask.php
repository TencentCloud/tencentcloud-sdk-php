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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理计划任务列表
 *
 * @method integer getStatus() 获取默认启用状态：1启用，2未启用
 * @method void setStatus(integer $Status) 设置默认启用状态：1启用，2未启用
 * @method string getCycle() 获取执行周期
 * @method void setCycle(string $Cycle) 设置执行周期
 * @method string getCommand() 获取执行命令或脚本
 * @method void setCommand(string $Command) 设置执行命令或脚本
 * @method string getUser() 获取启动用户
 * @method void setUser(string $User) 设置启动用户
 * @method string getConfigPath() 获取配置文件路径
 * @method void setConfigPath(string $ConfigPath) 设置配置文件路径
 * @method string getMachineIp() 获取服务器IP
 * @method void setMachineIp(string $MachineIp) 设置服务器IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统
 * @method void setOsInfo(string $OsInfo) 设置操作系统
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getUpdateTime() 获取数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetPlanTask extends AbstractModel
{
    /**
     * @var integer 默认启用状态：1启用，2未启用
     */
    public $Status;

    /**
     * @var string 执行周期
     */
    public $Cycle;

    /**
     * @var string 执行命令或脚本
     */
    public $Command;

    /**
     * @var string 启动用户
     */
    public $User;

    /**
     * @var string 配置文件路径
     */
    public $ConfigPath;

    /**
     * @var string 服务器IP
     */
    public $MachineIp;

    /**
     * @var string 服务器名称
     */
    public $MachineName;

    /**
     * @var string 操作系统
     */
    public $OsInfo;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 数据更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Status 默认启用状态：1启用，2未启用
     * @param string $Cycle 执行周期
     * @param string $Command 执行命令或脚本
     * @param string $User 启动用户
     * @param string $ConfigPath 配置文件路径
     * @param string $MachineIp 服务器IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统
     * @param string $Quuid 主机Quuid
     * @param string $Uuid 主机uuid
     * @param string $UpdateTime 数据更新时间
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cycle",$param) and $param["Cycle"] !== null) {
            $this->Cycle = $param["Cycle"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ConfigPath",$param) and $param["ConfigPath"] !== null) {
            $this->ConfigPath = $param["ConfigPath"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
