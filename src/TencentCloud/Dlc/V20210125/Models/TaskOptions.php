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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各模型类型对应的可选任务列表
 *
 * @method string getModelType() 获取<p>模型类型</p>
 * @method void setModelType(string $ModelType) 设置<p>模型类型</p>
 * @method array getTasks() 获取<p>任务场景</p>
 * @method void setTasks(array $Tasks) 设置<p>任务场景</p>
 */
class TaskOptions extends AbstractModel
{
    /**
     * @var string <p>模型类型</p>
     */
    public $ModelType;

    /**
     * @var array <p>任务场景</p>
     */
    public $Tasks;

    /**
     * @param string $ModelType <p>模型类型</p>
     * @param array $Tasks <p>任务场景</p>
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
        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = $param["Tasks"];
        }
    }
}
