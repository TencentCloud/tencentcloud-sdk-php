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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务建模Pod信息
 *
 * @method string getName() 获取pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置pod名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIP() 获取pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIP(string $IP) 设置pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取pod状态。eg：SUBMITTING提交中、PENDING排队中、RUNNING运行中、SUCCEEDED已完成、FAILED异常、TERMINATING停止中、TERMINATED已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置pod状态。eg：SUBMITTING提交中、PENDING排队中、RUNNING运行中、SUCCEEDED已完成、FAILED异常、TERMINATING停止中、TERMINATED已停止
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取pod启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置pod启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取pod结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置pod结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceConfigInfo getResourceConfigInfo() 获取pod资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceConfigInfo(ResourceConfigInfo $ResourceConfigInfo) 设置pod资源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取Pod所属任务的SubUin信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置Pod所属任务的SubUin信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PodInfo extends AbstractModel
{
    /**
     * @var string pod名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IP;

    /**
     * @var string pod状态。eg：SUBMITTING提交中、PENDING排队中、RUNNING运行中、SUCCEEDED已完成、FAILED异常、TERMINATING停止中、TERMINATED已停止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string pod启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string pod结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var ResourceConfigInfo pod资源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceConfigInfo;

    /**
     * @var string Pod所属任务的SubUin信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @param string $Name pod名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IP pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status pod状态。eg：SUBMITTING提交中、PENDING排队中、RUNNING运行中、SUCCEEDED已完成、FAILED异常、TERMINATING停止中、TERMINATED已停止
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime pod启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime pod结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceConfigInfo $ResourceConfigInfo pod资源配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin Pod所属任务的SubUin信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ResourceConfigInfo",$param) and $param["ResourceConfigInfo"] !== null) {
            $this->ResourceConfigInfo = new ResourceConfigInfo();
            $this->ResourceConfigInfo->deserialize($param["ResourceConfigInfo"]);
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }
    }
}
