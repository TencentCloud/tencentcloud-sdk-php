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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeYarnScheduleHistory返回参数结构体
 *
 * @method array getTasks() 获取任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置任务详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取任务详情总数
 * @method void setTotal(integer $Total) 设置任务详情总数
 * @method array getSchedulerNameList() 获取调度类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchedulerNameList(array $SchedulerNameList) 设置调度类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStateList() 获取状态筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStateList(array $StateList) 设置状态筛选列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeYarnScheduleHistoryResponse extends AbstractModel
{
    /**
     * @var array 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var integer 任务详情总数
     */
    public $Total;

    /**
     * @var array 调度类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchedulerNameList;

    /**
     * @var array 状态筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StateList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Tasks 任务详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 任务详情总数
     * @param array $SchedulerNameList 调度类型筛选列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StateList 状态筛选列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new SchedulerTaskInfo();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SchedulerNameList",$param) and $param["SchedulerNameList"] !== null) {
            $this->SchedulerNameList = $param["SchedulerNameList"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
