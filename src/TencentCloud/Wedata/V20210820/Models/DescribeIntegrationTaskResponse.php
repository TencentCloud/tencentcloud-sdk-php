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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIntegrationTask返回参数结构体
 *
 * @method IntegrationTaskInfo getTaskInfo() 获取<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInfo(IntegrationTaskInfo $TaskInfo) 设置<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentStatus getAgentStatus() 获取<p>采集器统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentStatus(AgentStatus $AgentStatus) 设置<p>采集器统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskVersionInstance getTaskVersion() 获取<p>任务版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskVersion(TaskVersionInstance $TaskVersion) 设置<p>任务版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskVersionList() 获取<p>历史实例信息</p>
 * @method void setTaskVersionList(array $TaskVersionList) 设置<p>历史实例信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIntegrationTaskResponse extends AbstractModel
{
    /**
     * @var IntegrationTaskInfo <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInfo;

    /**
     * @var AgentStatus <p>采集器统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentStatus;

    /**
     * @var TaskVersionInstance <p>任务版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskVersion;

    /**
     * @var array <p>历史实例信息</p>
     */
    public $TaskVersionList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param IntegrationTaskInfo $TaskInfo <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentStatus $AgentStatus <p>采集器统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskVersionInstance $TaskVersion <p>任务版本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskVersionList <p>历史实例信息</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new IntegrationTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = new AgentStatus();
            $this->AgentStatus->deserialize($param["AgentStatus"]);
        }

        if (array_key_exists("TaskVersion",$param) and $param["TaskVersion"] !== null) {
            $this->TaskVersion = new TaskVersionInstance();
            $this->TaskVersion->deserialize($param["TaskVersion"]);
        }

        if (array_key_exists("TaskVersionList",$param) and $param["TaskVersionList"] !== null) {
            $this->TaskVersionList = [];
            foreach ($param["TaskVersionList"] as $key => $value){
                $obj = new RealtimeTaskInstanceVO();
                $obj->deserialize($value);
                array_push($this->TaskVersionList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
