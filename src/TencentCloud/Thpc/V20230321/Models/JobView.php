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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业概览信息
 *
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method string getJobName() 获取作业名称
 * @method void setJobName(string $JobName) 设置作业名称
 * @method string getJobDescription() 获取作业描述
 * @method void setJobDescription(string $JobDescription) 设置作业描述
 * @method integer getPriority() 获取作业优先级
 * @method void setPriority(integer $Priority) 设置作业优先级
 * @method string getJobState() 获取作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS, 
FAILED

 * @method void setJobState(string $JobState) 设置作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS, 
FAILED

 * @method string getClusterId() 获取作业所属集群ID
 * @method void setClusterId(string $ClusterId) 设置作业所属集群ID
 * @method string getQueueName() 获取作业所属队列名称
 * @method void setQueueName(string $QueueName) 设置作业所属队列名称
 * @method string getOccupyResources() 获取完成作业任务所需资源
 * @method void setOccupyResources(string $OccupyResources) 设置完成作业任务所需资源
 * @method string getCreateTime() 获取作业任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置作业任务创建时间
 * @method string getEndTime() 获取作业任务结束时间
 * @method void setEndTime(string $EndTime) 设置作业任务结束时间
 */
class JobView extends AbstractModel
{
    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var string 作业名称
     */
    public $JobName;

    /**
     * @var string 作业描述
     */
    public $JobDescription;

    /**
     * @var integer 作业优先级
     */
    public $Priority;

    /**
     * @var string 作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS, 
FAILED

     */
    public $JobState;

    /**
     * @var string 作业所属集群ID
     */
    public $ClusterId;

    /**
     * @var string 作业所属队列名称
     */
    public $QueueName;

    /**
     * @var string 完成作业任务所需资源
     */
    public $OccupyResources;

    /**
     * @var string 作业任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 作业任务结束时间
     */
    public $EndTime;

    /**
     * @param string $JobId 作业ID
     * @param string $JobName 作业名称
     * @param string $JobDescription 作业描述
     * @param integer $Priority 作业优先级
     * @param string $JobState 作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS, 
FAILED

     * @param string $ClusterId 作业所属集群ID
     * @param string $QueueName 作业所属队列名称
     * @param string $OccupyResources 完成作业任务所需资源
     * @param string $CreateTime 作业任务创建时间
     * @param string $EndTime 作业任务结束时间
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

        if (array_key_exists("JobDescription",$param) and $param["JobDescription"] !== null) {
            $this->JobDescription = $param["JobDescription"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("JobState",$param) and $param["JobState"] !== null) {
            $this->JobState = $param["JobState"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("OccupyResources",$param) and $param["OccupyResources"] !== null) {
            $this->OccupyResources = $param["OccupyResources"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
