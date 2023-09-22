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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkSessionBatchSQL返回参数结构体
 *
 * @method integer getState() 获取状态：0：运行中、1：成功、2：失败、3：取消、4：超时；
 * @method void setState(integer $State) 设置状态：0：运行中、1：成功、2：失败、3：取消、4：超时；
 * @method array getTasks() 获取SQL子任务列表，仅展示运行完成的子任务，若某个任务运行失败，后续其它子任务不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置SQL子任务列表，仅展示运行完成的子任务，若某个任务运行失败，后续其它子任务不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvent() 获取非sql运行的异常事件信息，包含资源创建失败、调度异常，JOB超时等，正常运行下该Event值为空
 * @method void setEvent(string $Event) 设置非sql运行的异常事件信息，包含资源创建失败、调度异常，JOB超时等，正常运行下该Event值为空
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSparkSessionBatchSQLResponse extends AbstractModel
{
    /**
     * @var integer 状态：0：运行中、1：成功、2：失败、3：取消、4：超时；
     */
    public $State;

    /**
     * @var array SQL子任务列表，仅展示运行完成的子任务，若某个任务运行失败，后续其它子任务不返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var string 非sql运行的异常事件信息，包含资源创建失败、调度异常，JOB超时等，正常运行下该Event值为空
     */
    public $Event;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $State 状态：0：运行中、1：成功、2：失败、3：取消、4：超时；
     * @param array $Tasks SQL子任务列表，仅展示运行完成的子任务，若某个任务运行失败，后续其它子任务不返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Event 非sql运行的异常事件信息，包含资源创建失败、调度异常，JOB超时等，正常运行下该Event值为空
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new BatchSqlTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
