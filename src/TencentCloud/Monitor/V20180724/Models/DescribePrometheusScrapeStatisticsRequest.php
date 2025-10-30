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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusScrapeStatistics请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getJobType() 获取job 类型
 * @method void setJobType(string $JobType) 设置job 类型
 * @method string getJob() 获取job 过滤，不写就是全部 job
 * @method void setJob(string $Job) 设置job 过滤，不写就是全部 job
 */
class DescribePrometheusScrapeStatisticsRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string job 类型
     */
    public $JobType;

    /**
     * @var string job 过滤，不写就是全部 job
     */
    public $Job;

    /**
     * @param array $InstanceIds 实例ID列表
     * @param string $ClusterId 集群ID
     * @param string $JobType job 类型
     * @param string $Job job 过滤，不写就是全部 job
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("Job",$param) and $param["Job"] !== null) {
            $this->Job = $param["Job"];
        }
    }
}
