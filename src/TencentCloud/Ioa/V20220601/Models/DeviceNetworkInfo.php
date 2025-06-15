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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分页的具体数据对象
 *
 * @method string getLocalAddr() 获取本地地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalAddr(string $LocalAddr) 设置本地地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocalPort() 获取本地端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalPort(integer $LocalPort) 设置本地端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProcessId() 获取进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(integer $ProcessId) 设置进程id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcessName() 获取进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessName(string $ProcessName) 设置进程名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemoteAddr() 获取远程地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteAddr(string $RemoteAddr) 设置远程地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRemotePort() 获取远程端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemotePort(integer $RemotePort) 设置远程端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceNetworkInfo extends AbstractModel
{
    /**
     * @var string 本地地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalAddr;

    /**
     * @var integer 本地端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalPort;

    /**
     * @var integer 进程id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessName;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 远程地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteAddr;

    /**
     * @var integer 远程端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemotePort;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @param string $LocalAddr 本地地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LocalPort 本地端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProcessId 进程id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcessName 进程名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemoteAddr 远程地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RemotePort 远程端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 状态
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
        if (array_key_exists("LocalAddr",$param) and $param["LocalAddr"] !== null) {
            $this->LocalAddr = $param["LocalAddr"];
        }

        if (array_key_exists("LocalPort",$param) and $param["LocalPort"] !== null) {
            $this->LocalPort = $param["LocalPort"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RemoteAddr",$param) and $param["RemoteAddr"] !== null) {
            $this->RemoteAddr = $param["RemoteAddr"];
        }

        if (array_key_exists("RemotePort",$param) and $param["RemotePort"] !== null) {
            $this->RemotePort = $param["RemotePort"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
