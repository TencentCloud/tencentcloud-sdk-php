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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MPS AI媒资任务项
 *
 * @method string getTaskType() 获取MPS智能处理任务类型
 * @method void setTaskType(string $TaskType) 设置MPS智能处理任务类型
 * @method array getAiMediaTasks() 获取MPS 智能媒资任务输出
 * @method void setAiMediaTasks(array $AiMediaTasks) 设置MPS 智能媒资任务输出
 */
class MPSAiMediaItem extends AbstractModel
{
    /**
     * @var string MPS智能处理任务类型
     */
    public $TaskType;

    /**
     * @var array MPS 智能媒资任务输出
     */
    public $AiMediaTasks;

    /**
     * @param string $TaskType MPS智能处理任务类型
     * @param array $AiMediaTasks MPS 智能媒资任务输出
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("AiMediaTasks",$param) and $param["AiMediaTasks"] !== null) {
            $this->AiMediaTasks = [];
            foreach ($param["AiMediaTasks"] as $key => $value){
                $obj = new MPSAiMediaTask();
                $obj->deserialize($value);
                array_push($this->AiMediaTasks, $obj);
            }
        }
    }
}
