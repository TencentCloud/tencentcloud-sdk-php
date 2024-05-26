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
 * ListTaskJobLogName请求参数结构体
 *
 * @method string getTaskId() 获取查询的taskId
 * @method void setTaskId(string $TaskId) 设置查询的taskId
 * @method string getBatchId() 获取SparkSQL批任务唯一ID
 * @method void setBatchId(string $BatchId) 设置SparkSQL批任务唯一ID
 */
class ListTaskJobLogNameRequest extends AbstractModel
{
    /**
     * @var string 查询的taskId
     */
    public $TaskId;

    /**
     * @var string SparkSQL批任务唯一ID
     */
    public $BatchId;

    /**
     * @param string $TaskId 查询的taskId
     * @param string $BatchId SparkSQL批任务唯一ID
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }
    }
}
