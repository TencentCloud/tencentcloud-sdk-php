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
 * SubmitJob请求参数结构体
 *
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method Job getJob() 获取作业任务参数配置
 * @method void setJob(Job $Job) 设置作业任务参数配置
 * @method string getQueueName() 获取队列名称。不指定则为默认队列：
SLURM默认队列为：compute。 
SGE默认队列为：all.q。
 * @method void setQueueName(string $QueueName) 设置队列名称。不指定则为默认队列：
SLURM默认队列为：compute。 
SGE默认队列为：all.q。
 */
class SubmitJobRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var Job 作业任务参数配置
     */
    public $Job;

    /**
     * @var string 队列名称。不指定则为默认队列：
SLURM默认队列为：compute。 
SGE默认队列为：all.q。
     */
    public $QueueName;

    /**
     * @param string $ClusterId 集群id
     * @param Job $Job 作业任务参数配置
     * @param string $QueueName 队列名称。不指定则为默认队列：
SLURM默认队列为：compute。 
SGE默认队列为：all.q。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = new Job();
            $this->Job->deserialize($param["Job"]);
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
