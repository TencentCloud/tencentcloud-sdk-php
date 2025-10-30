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
 * Java内存马插件配置
 *
 * @method string getQuuid() 获取容器quuid
 * @method void setQuuid(string $Quuid) 设置容器quuid
 * @method string getAlias() 获取服务器名
 * @method void setAlias(string $Alias) 设置服务器名
 * @method string getHostIp() 获取服务器ip
 * @method void setHostIp(string $HostIp) 设置服务器ip
 * @method integer getJavaShellStatus() 获取javashell插件开关 0: 关闭 1: 开启
 * @method void setJavaShellStatus(integer $JavaShellStatus) 设置javashell插件开关 0: 关闭 1: 开启
 * @method integer getException() 获取插件是否存在异常 0: 正常 1: 异常
 * @method void setException(integer $Exception) 设置插件是否存在异常 0: 正常 1: 异常
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getUuid() 获取服务器uuid
 * @method void setUuid(string $Uuid) 设置服务器uuid
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
 */
class JavaMemShellPluginSetting extends AbstractModel
{
    /**
     * @var string 容器quuid
     */
    public $Quuid;

    /**
     * @var string 服务器名
     */
    public $Alias;

    /**
     * @var string 服务器ip
     */
    public $HostIp;

    /**
     * @var integer javashell插件开关 0: 关闭 1: 开启
     */
    public $JavaShellStatus;

    /**
     * @var integer 插件是否存在异常 0: 正常 1: 异常
     */
    public $Exception;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 服务器uuid
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo 主机额外信息
     */
    public $MachineExtraInfo;

    /**
     * @param string $Quuid 容器quuid
     * @param string $Alias 服务器名
     * @param string $HostIp 服务器ip
     * @param integer $JavaShellStatus javashell插件开关 0: 关闭 1: 开启
     * @param integer $Exception 插件是否存在异常 0: 正常 1: 异常
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $Uuid 服务器uuid
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("JavaShellStatus",$param) and $param["JavaShellStatus"] !== null) {
            $this->JavaShellStatus = $param["JavaShellStatus"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
