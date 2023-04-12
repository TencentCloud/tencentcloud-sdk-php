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
 * 授权绑定详情信息
 *
 * @method string getMachineName() 获取机器别名
 * @method void setMachineName(string $MachineName) 设置机器别名
 * @method string getMachineWanIp() 获取机器公网IP
 * @method void setMachineWanIp(string $MachineWanIp) 设置机器公网IP
 * @method string getMachineIp() 获取机器内网IP
 * @method void setMachineIp(string $MachineIp) 设置机器内网IP
 * @method string getQuuid() 获取云服务器UUID
 * @method void setQuuid(string $Quuid) 设置云服务器UUID
 * @method string getUuid() 获取主机安全客户端UUID
 * @method void setUuid(string $Uuid) 设置主机安全客户端UUID
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method string getAgentStatus() 获取主机安全客户端状态,OFFLINE 离线,ONLINE 在线,UNINSTALL 未安装
 * @method void setAgentStatus(string $AgentStatus) 设置主机安全客户端状态,OFFLINE 离线,ONLINE 在线,UNINSTALL 未安装
 * @method boolean getIsUnBind() 获取是否允许解绑,false 不允许解绑
 * @method void setIsUnBind(boolean $IsUnBind) 设置是否允许解绑,false 不允许解绑
 * @method boolean getIsSwitchBind() 获取是否允许换绑,false 不允许换绑
 * @method void setIsSwitchBind(boolean $IsSwitchBind) 设置是否允许换绑,false 不允许换绑
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseBindDetail extends AbstractModel
{
    /**
     * @var string 机器别名
     */
    public $MachineName;

    /**
     * @var string 机器公网IP
     */
    public $MachineWanIp;

    /**
     * @var string 机器内网IP
     */
    public $MachineIp;

    /**
     * @var string 云服务器UUID
     */
    public $Quuid;

    /**
     * @var string 主机安全客户端UUID
     */
    public $Uuid;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var string 主机安全客户端状态,OFFLINE 离线,ONLINE 在线,UNINSTALL 未安装
     */
    public $AgentStatus;

    /**
     * @var boolean 是否允许解绑,false 不允许解绑
     */
    public $IsUnBind;

    /**
     * @var boolean 是否允许换绑,false 不允许换绑
     */
    public $IsSwitchBind;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineName 机器别名
     * @param string $MachineWanIp 机器公网IP
     * @param string $MachineIp 机器内网IP
     * @param string $Quuid 云服务器UUID
     * @param string $Uuid 主机安全客户端UUID
     * @param array $Tags 标签信息
     * @param string $AgentStatus 主机安全客户端状态,OFFLINE 离线,ONLINE 在线,UNINSTALL 未安装
     * @param boolean $IsUnBind 是否允许解绑,false 不允许解绑
     * @param boolean $IsSwitchBind 是否允许换绑,false 不允许换绑
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("IsUnBind",$param) and $param["IsUnBind"] !== null) {
            $this->IsUnBind = $param["IsUnBind"];
        }

        if (array_key_exists("IsSwitchBind",$param) and $param["IsSwitchBind"] !== null) {
            $this->IsSwitchBind = $param["IsSwitchBind"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
