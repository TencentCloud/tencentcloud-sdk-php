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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业信息
 *
 * @method string getJobId() 获取作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
 * @method void setJobId(string $JobId) 设置作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
 * @method string getJobName() 获取作业名称
 * @method void setJobName(string $JobName) 设置作业名称
 * @method string getJobState() 获取作业状态:
- SUBMITTED：已提交；
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
 * @method void setJobState(string $JobState) 设置作业状态:
- SUBMITTED：已提交；
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
 * @method integer getPriority() 获取作业优先级
 * @method void setPriority(integer $Priority) 设置作业优先级
 * @method Placement getPlacement() 获取位置信息
 * @method void setPlacement(Placement $Placement) 设置位置信息
 * @method string getCreateTime() 获取创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setCreateTime(string $CreateTime) 设置创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method string getEndTime() 获取结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method void setEndTime(string $EndTime) 设置结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
 * @method TaskMetrics getTaskMetrics() 获取任务统计指标
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) 设置任务统计指标
 * @method array getTags() 获取作业绑定的标签列表。
 * @method void setTags(array $Tags) 设置作业绑定的标签列表。
 */
class JobView extends AbstractModel
{
    /**
     * @var string 作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
     */
    public $JobId;

    /**
     * @var string 作业名称
     */
    public $JobName;

    /**
     * @var string 作业状态:
- SUBMITTED：已提交；
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
     */
    public $JobState;

    /**
     * @var integer 作业优先级
     */
    public $Priority;

    /**
     * @var Placement 位置信息
     */
    public $Placement;

    /**
     * @var string 创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $CreateTime;

    /**
     * @var string 结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
     */
    public $EndTime;

    /**
     * @var TaskMetrics 任务统计指标
     */
    public $TaskMetrics;

    /**
     * @var array 作业绑定的标签列表。
     */
    public $Tags;

    /**
     * @param string $JobId 作业ID；JobId详见[作业列表](https://cloud.tencent.com/document/product/599/15909)
     * @param string $JobName 作业名称
     * @param string $JobState 作业状态:
- SUBMITTED：已提交；
- PENDING：等待中；
- RUNNABLE：可运行；
- STARTING：启动中；
- RUNNING：运行中；
- SUCCEED：成功；
- FAILED：失败；
- FAILED_INTERRUPTED：失败后保留实例。
     * @param integer $Priority 作业优先级
     * @param Placement $Placement 位置信息
     * @param string $CreateTime 创建时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param string $EndTime 结束时间。按照ISO8601标准表示，并且使用UTC时间。格式为：YYYY-MM-DDThh:mm:ssZ
     * @param TaskMetrics $TaskMetrics 任务统计指标
     * @param array $Tags 作业绑定的标签列表。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobState",$param) and $param["JobState"] !== null) {
            $this->JobState = $param["JobState"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskMetrics",$param) and $param["TaskMetrics"] !== null) {
            $this->TaskMetrics = new TaskMetrics();
            $this->TaskMetrics->deserialize($param["TaskMetrics"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
