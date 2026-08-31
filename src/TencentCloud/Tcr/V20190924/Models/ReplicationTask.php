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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例同步/实例复制任务列表
 *
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcResource() 获取源资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcResource(string $SrcResource) 设置源资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstResource() 获取目的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstResource(string $DstResource) 设置目的资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobID() 获取Job任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobID(string $JobID) 设置Job任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReplicationTask extends AbstractModel
{
    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 源资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcResource;

    /**
     * @var string 目的资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstResource;

    /**
     * @var string Job任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobID;

    /**
     * @var string 任务执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcResource 源资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstResource 目的资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobID Job任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("SrcResource",$param) and $param["SrcResource"] !== null) {
            $this->SrcResource = $param["SrcResource"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = $param["DstResource"];
        }

        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
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
    }
}
