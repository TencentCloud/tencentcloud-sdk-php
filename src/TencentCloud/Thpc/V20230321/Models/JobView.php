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
 * @method string getJobId() 获取<p>作业ID</p>
 * @method void setJobId(string $JobId) 设置<p>作业ID</p>
 * @method string getJobName() 获取<p>作业名称</p>
 * @method void setJobName(string $JobName) 设置<p>作业名称</p>
 * @method string getJobDescription() 获取<p>作业描述</p>
 * @method void setJobDescription(string $JobDescription) 设置<p>作业描述</p>
 * @method string getCreator() 获取<p>作业创建者</p>
 * @method void setCreator(string $Creator) 设置<p>作业创建者</p>
 * @method integer getPriority() 获取<p>作业优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>作业优先级</p>
 * @method string getJobState() 获取<p>作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS,<br>FAILED</p>
 * @method void setJobState(string $JobState) 设置<p>作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS,<br>FAILED</p>
 * @method string getClusterId() 获取<p>作业所属集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>作业所属集群ID</p>
 * @method string getQueueName() 获取<p>作业所属队列名称</p>
 * @method void setQueueName(string $QueueName) 设置<p>作业所属队列名称</p>
 * @method string getOccupyResources() 获取<p>完成作业任务所需资源</p>
 * @method void setOccupyResources(string $OccupyResources) 设置<p>完成作业任务所需资源</p>
 * @method string getCreateTime() 获取<p>作业任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>作业任务创建时间</p>
 * @method string getEndTime() 获取<p>作业任务结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>作业任务结束时间</p>
 */
class JobView extends AbstractModel
{
    /**
     * @var string <p>作业ID</p>
     */
    public $JobId;

    /**
     * @var string <p>作业名称</p>
     */
    public $JobName;

    /**
     * @var string <p>作业描述</p>
     */
    public $JobDescription;

    /**
     * @var string <p>作业创建者</p>
     */
    public $Creator;

    /**
     * @var integer <p>作业优先级</p>
     */
    public $Priority;

    /**
     * @var string <p>作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS,<br>FAILED</p>
     */
    public $JobState;

    /**
     * @var string <p>作业所属集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>作业所属队列名称</p>
     */
    public $QueueName;

    /**
     * @var string <p>完成作业任务所需资源</p>
     */
    public $OccupyResources;

    /**
     * @var string <p>作业任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>作业任务结束时间</p>
     */
    public $EndTime;

    /**
     * @param string $JobId <p>作业ID</p>
     * @param string $JobName <p>作业名称</p>
     * @param string $JobDescription <p>作业描述</p>
     * @param string $Creator <p>作业创建者</p>
     * @param integer $Priority <p>作业优先级</p>
     * @param string $JobState <p>作业状态，包括CREATED, QUEING, STARTNG, RUNING, TERMINATING, TERMINATED, SUCCESS,<br>FAILED</p>
     * @param string $ClusterId <p>作业所属集群ID</p>
     * @param string $QueueName <p>作业所属队列名称</p>
     * @param string $OccupyResources <p>完成作业任务所需资源</p>
     * @param string $CreateTime <p>作业任务创建时间</p>
     * @param string $EndTime <p>作业任务结束时间</p>
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

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
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
