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
 * 防护目录关联服务器列表信息
 *
 * @method string getId() 获取唯一ID
 * @method void setId(string $Id) 设置唯一ID
 * @method string getHostName() 获取服务器名称
 * @method void setHostName(string $HostName) 设置服务器名称
 * @method string getHostIp() 获取服务器IP
 * @method void setHostIp(string $HostIp) 设置服务器IP
 * @method string getMachineOs() 获取服务器系统
 * @method void setMachineOs(string $MachineOs) 设置服务器系统
 * @method integer getRelateDirNum() 获取关联目录数
 * @method void setRelateDirNum(integer $RelateDirNum) 设置关联目录数
 * @method integer getProtectStatus() 获取防护状态
 * @method void setProtectStatus(integer $ProtectStatus) 设置防护状态
 * @method integer getProtectSwitch() 获取防护开关
 * @method void setProtectSwitch(integer $ProtectSwitch) 设置防护开关
 * @method integer getAutoRestoreSwitchStatus() 获取自动恢复开关
 * @method void setAutoRestoreSwitchStatus(integer $AutoRestoreSwitchStatus) 设置自动恢复开关
 * @method string getQuuid() 获取服务器唯一ID
 * @method void setQuuid(string $Quuid) 设置服务器唯一ID
 * @method boolean getAuthorization() 获取是否已经授权
 * @method void setAuthorization(boolean $Authorization) 设置是否已经授权
 * @method integer getException() 获取异常状态
 * @method void setException(integer $Exception) 设置异常状态
 * @method integer getProgress() 获取过渡进度
 * @method void setProgress(integer $Progress) 设置过渡进度
 * @method string getExceptionMessage() 获取异常信息
 * @method void setExceptionMessage(string $ExceptionMessage) 设置异常信息
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProtectDirRelatedServer extends AbstractModel
{
    /**
     * @var string 唯一ID
     */
    public $Id;

    /**
     * @var string 服务器名称
     */
    public $HostName;

    /**
     * @var string 服务器IP
     */
    public $HostIp;

    /**
     * @var string 服务器系统
     */
    public $MachineOs;

    /**
     * @var integer 关联目录数
     */
    public $RelateDirNum;

    /**
     * @var integer 防护状态
     */
    public $ProtectStatus;

    /**
     * @var integer 防护开关
     */
    public $ProtectSwitch;

    /**
     * @var integer 自动恢复开关
     */
    public $AutoRestoreSwitchStatus;

    /**
     * @var string 服务器唯一ID
     */
    public $Quuid;

    /**
     * @var boolean 是否已经授权
     */
    public $Authorization;

    /**
     * @var integer 异常状态
     */
    public $Exception;

    /**
     * @var integer 过渡进度
     */
    public $Progress;

    /**
     * @var string 异常信息
     */
    public $ExceptionMessage;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $Id 唯一ID
     * @param string $HostName 服务器名称
     * @param string $HostIp 服务器IP
     * @param string $MachineOs 服务器系统
     * @param integer $RelateDirNum 关联目录数
     * @param integer $ProtectStatus 防护状态
     * @param integer $ProtectSwitch 防护开关
     * @param integer $AutoRestoreSwitchStatus 自动恢复开关
     * @param string $Quuid 服务器唯一ID
     * @param boolean $Authorization 是否已经授权
     * @param integer $Exception 异常状态
     * @param integer $Progress 过渡进度
     * @param string $ExceptionMessage 异常信息
     * @param MachineExtraInfo $MachineExtraInfo 主机额外信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("RelateDirNum",$param) and $param["RelateDirNum"] !== null) {
            $this->RelateDirNum = $param["RelateDirNum"];
        }

        if (array_key_exists("ProtectStatus",$param) and $param["ProtectStatus"] !== null) {
            $this->ProtectStatus = $param["ProtectStatus"];
        }

        if (array_key_exists("ProtectSwitch",$param) and $param["ProtectSwitch"] !== null) {
            $this->ProtectSwitch = $param["ProtectSwitch"];
        }

        if (array_key_exists("AutoRestoreSwitchStatus",$param) and $param["AutoRestoreSwitchStatus"] !== null) {
            $this->AutoRestoreSwitchStatus = $param["AutoRestoreSwitchStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Authorization",$param) and $param["Authorization"] !== null) {
            $this->Authorization = $param["Authorization"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
