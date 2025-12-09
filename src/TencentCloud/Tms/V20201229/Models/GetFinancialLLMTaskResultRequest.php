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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFinancialLLMTaskResult请求参数结构体
 *
 * @method string getTaskId() 获取该值对应创建任务接口里返回的TaskId字段值，创建任务接口见[创建金融大模型审校任务](https://cloud.tencent.com/document/product/1124/124463)。
示例值：3570106e-b156-45d9-8af5-99b46f7eb2f9
 * @method void setTaskId(string $TaskId) 设置该值对应创建任务接口里返回的TaskId字段值，创建任务接口见[创建金融大模型审校任务](https://cloud.tencent.com/document/product/1124/124463)。
示例值：3570106e-b156-45d9-8af5-99b46f7eb2f9
 */
class GetFinancialLLMTaskResultRequest extends AbstractModel
{
    /**
     * @var string 该值对应创建任务接口里返回的TaskId字段值，创建任务接口见[创建金融大模型审校任务](https://cloud.tencent.com/document/product/1124/124463)。
示例值：3570106e-b156-45d9-8af5-99b46f7eb2f9
     */
    public $TaskId;

    /**
     * @param string $TaskId 该值对应创建任务接口里返回的TaskId字段值，创建任务接口见[创建金融大模型审校任务](https://cloud.tencent.com/document/product/1124/124463)。
示例值：3570106e-b156-45d9-8af5-99b46f7eb2f9
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
    }
}
