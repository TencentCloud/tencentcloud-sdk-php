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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceScheduleDiffDetail请求参数结构体
 *
 * @method string getInstanceId() 获取emr集群的英文id
 * @method void setInstanceId(string $InstanceId) 设置emr集群的英文id
 * @method string getScheduler() 获取查询的变更明细对应的调度器，可选值为fair、capacity。如果不传或者传空会使用最新的调度器
 * @method void setScheduler(string $Scheduler) 设置查询的变更明细对应的调度器，可选值为fair、capacity。如果不传或者传空会使用最新的调度器
 */
class DescribeResourceScheduleDiffDetailRequest extends AbstractModel
{
    /**
     * @var string emr集群的英文id
     */
    public $InstanceId;

    /**
     * @var string 查询的变更明细对应的调度器，可选值为fair、capacity。如果不传或者传空会使用最新的调度器
     */
    public $Scheduler;

    /**
     * @param string $InstanceId emr集群的英文id
     * @param string $Scheduler 查询的变更明细对应的调度器，可选值为fair、capacity。如果不传或者传空会使用最新的调度器
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
