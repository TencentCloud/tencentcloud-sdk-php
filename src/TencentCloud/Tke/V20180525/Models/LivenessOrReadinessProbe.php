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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康探针
 *
 * @method Probe getProbe() 获取探针参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProbe(Probe $Probe) 设置探针参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method HttpGet getHttpGet() 获取HttpGet检测参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpGet(HttpGet $HttpGet) 设置HttpGet检测参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method Exec getExec() 获取容器内检测命令参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExec(Exec $Exec) 设置容器内检测命令参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method TcpSocket getTcpSocket() 获取TcpSocket检测的端口参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcpSocket(TcpSocket $TcpSocket) 设置TcpSocket检测的端口参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class LivenessOrReadinessProbe extends AbstractModel
{
    /**
     * @var Probe 探针参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Probe;

    /**
     * @var HttpGet HttpGet检测参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpGet;

    /**
     * @var Exec 容器内检测命令参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exec;

    /**
     * @var TcpSocket TcpSocket检测的端口参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcpSocket;

    /**
     * @param Probe $Probe 探针参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param HttpGet $HttpGet HttpGet检测参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param Exec $Exec 容器内检测命令参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param TcpSocket $TcpSocket TcpSocket检测的端口参数
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
        if (array_key_exists("Probe",$param) and $param["Probe"] !== null) {
            $this->Probe = new Probe();
            $this->Probe->deserialize($param["Probe"]);
        }

        if (array_key_exists("HttpGet",$param) and $param["HttpGet"] !== null) {
            $this->HttpGet = new HttpGet();
            $this->HttpGet->deserialize($param["HttpGet"]);
        }

        if (array_key_exists("Exec",$param) and $param["Exec"] !== null) {
            $this->Exec = new Exec();
            $this->Exec->deserialize($param["Exec"]);
        }

        if (array_key_exists("TcpSocket",$param) and $param["TcpSocket"] !== null) {
            $this->TcpSocket = new TcpSocket();
            $this->TcpSocket->deserialize($param["TcpSocket"]);
        }
    }
}
