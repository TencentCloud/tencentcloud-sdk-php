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
 * 集群创建过程
 *
 * @method string getType() 获取集群创建过程类型
 * @method void setType(string $Type) 设置集群创建过程类型
 * @method string getStatus() 获取集群创建过程状态
 * @method void setStatus(string $Status) 设置集群创建过程状态
 * @method string getLastProbeTime() 获取最后一次探测到该状态的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastProbeTime(string $LastProbeTime) 设置最后一次探测到该状态的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTransitionTime() 获取最后一次转换到该过程的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTransitionTime(string $LastTransitionTime) 设置最后一次转换到该过程的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取转换到该过程的简明原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置转换到该过程的简明原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取转换到该过程的更多信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置转换到该过程的更多信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterCondition extends AbstractModel
{
    /**
     * @var string 集群创建过程类型
     */
    public $Type;

    /**
     * @var string 集群创建过程状态
     */
    public $Status;

    /**
     * @var string 最后一次探测到该状态的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastProbeTime;

    /**
     * @var string 最后一次转换到该过程的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTransitionTime;

    /**
     * @var string 转换到该过程的简明原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 转换到该过程的更多信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Type 集群创建过程类型
     * @param string $Status 集群创建过程状态
     * @param string $LastProbeTime 最后一次探测到该状态的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTransitionTime 最后一次转换到该过程的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 转换到该过程的简明原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 转换到该过程的更多信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastProbeTime",$param) and $param["LastProbeTime"] !== null) {
            $this->LastProbeTime = $param["LastProbeTime"];
        }

        if (array_key_exists("LastTransitionTime",$param) and $param["LastTransitionTime"] !== null) {
            $this->LastTransitionTime = $param["LastTransitionTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
