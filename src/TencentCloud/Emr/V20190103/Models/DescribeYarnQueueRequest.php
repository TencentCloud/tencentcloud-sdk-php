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
 * DescribeYarnQueue请求参数结构体
 *
 * @method string getInstanceId() 获取集群Id
 * @method void setInstanceId(string $InstanceId) 设置集群Id
 * @method string getScheduler() 获取调度器，可选值：

1. capacity
2. fair
 * @method void setScheduler(string $Scheduler) 设置调度器，可选值：

1. capacity
2. fair
 */
class DescribeYarnQueueRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $InstanceId;

    /**
     * @var string 调度器，可选值：

1. capacity
2. fair
     */
    public $Scheduler;

    /**
     * @param string $InstanceId 集群Id
     * @param string $Scheduler 调度器，可选值：

1. capacity
2. fair
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }
    }
}
