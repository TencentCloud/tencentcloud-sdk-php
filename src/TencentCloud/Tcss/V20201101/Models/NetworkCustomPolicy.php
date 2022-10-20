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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络集群策略自定义规则
 *
 * @method string getDirection() 获取网络策略方向，分为FROM和TO
 * @method void setDirection(string $Direction) 设置网络策略方向，分为FROM和TO
 * @method array getPorts() 获取网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPorts(array $Ports) 设置网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPeer() 获取网络策略策略对象

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeer(array $Peer) 设置网络策略策略对象

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
注意：此字段可能返回 null，表示取不到有效值。
 */
class NetworkCustomPolicy extends AbstractModel
{
    /**
     * @var string 网络策略方向，分为FROM和TO
     */
    public $Direction;

    /**
     * @var array 网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ports;

    /**
     * @var array 网络策略策略对象

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Peer;

    /**
     * @param string $Direction 网络策略方向，分为FROM和TO
     * @param array $Ports 网络策略策略端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Peer 网络策略策略对象

开启待确认：PublishedNoConfirm

开启已确认：PublishedConfirmed

关闭中：unPublishing

开启中：Publishing

待开启：unPublishEdit
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new NetworkPorts();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("Peer",$param) and $param["Peer"] !== null) {
            $this->Peer = [];
            foreach ($param["Peer"] as $key => $value){
                $obj = new NetworkPeer();
                $obj->deserialize($value);
                array_push($this->Peer, $obj);
            }
        }
    }
}
