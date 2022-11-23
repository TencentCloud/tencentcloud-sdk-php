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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN的状态信息
 *
 * @method string getStatus() 获取DCN 的运行状态，START为正常运行，STOP为暂停，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置DCN 的运行状态，START为正常运行，STOP为暂停，
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelay() 获取当前延迟情况，取备实例的 master 节点的 delay 值
 * @method void setDelay(integer $Delay) 设置当前延迟情况，取备实例的 master 节点的 delay 值
 */
class DCNReplicaStatus extends AbstractModel
{
    /**
     * @var string DCN 的运行状态，START为正常运行，STOP为暂停，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 当前延迟情况，取备实例的 master 节点的 delay 值
     */
    public $Delay;

    /**
     * @param string $Status DCN 的运行状态，START为正常运行，STOP为暂停，
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Delay 当前延迟情况，取备实例的 master 节点的 delay 值
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

        if (array_key_exists("Delay",$param) and $param["Delay"] !== null) {
            $this->Delay = $param["Delay"];
        }
    }
}
