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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务状态返回对象
 *
 * @method integer getStatus() 获取任务状态:
0 成功
1 失败
2 进行中
 * @method void setStatus(integer $Status) 设置任务状态:
0 成功
1 失败
2 进行中
 * @method string getOutput() 获取输出信息
 * @method void setOutput(string $Output) 设置输出信息
 */
class TaskStatusResponse extends AbstractModel
{
    /**
     * @var integer 任务状态:
0 成功
1 失败
2 进行中
     */
    public $Status;

    /**
     * @var string 输出信息
     */
    public $Output;

    /**
     * @param integer $Status 任务状态:
0 成功
1 失败
2 进行中
     * @param string $Output 输出信息
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }
    }
}
