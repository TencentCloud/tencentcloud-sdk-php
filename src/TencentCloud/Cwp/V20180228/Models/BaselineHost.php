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
 * 基线主机信息
 *
 * @method string getHostId() 获取主机Id
 * @method void setHostId(string $HostId) 设置主机Id
 * @method string getHostName() 获取主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostTag() 获取主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostTag(string $HostTag) 设置主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIp() 获取内网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIp(string $HostIp) 设置内网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWanIp() 获取外网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWanIp(string $WanIp) 设置外网Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method MachineExtraInfo getMachineExtraInfo() 获取主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineHost extends AbstractModel
{
    /**
     * @var string 主机Id
     */
    public $HostId;

    /**
     * @var string 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostTag;

    /**
     * @var string 内网Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIp;

    /**
     * @var string 外网Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WanIp;

    /**
     * @var MachineExtraInfo 主机额外信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostId 主机Id
     * @param string $HostName 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostTag 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIp 内网Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WanIp 外网Ip
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostTag",$param) and $param["HostTag"] !== null) {
            $this->HostTag = $param["HostTag"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
