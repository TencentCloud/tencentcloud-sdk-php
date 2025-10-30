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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResumeIntegrationTask请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getEvent() 获取事件类型(START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
 * @method void setEvent(string $Event) 设置事件类型(START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
 * @method array getExtConfig() 获取额外参数
 * @method void setExtConfig(array $ExtConfig) 设置额外参数
 * @method string getEventDesc() 获取前端操作类型描述
 * @method void setEventDesc(string $EventDesc) 设置前端操作类型描述
 */
class ResumeIntegrationTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 事件类型(START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
     */
    public $Event;

    /**
     * @var array 额外参数
     */
    public $ExtConfig;

    /**
     * @var string 前端操作类型描述
     */
    public $EventDesc;

    /**
     * @param string $TaskId 任务id
     * @param string $ProjectId 项目id
     * @param string $Event 事件类型(START, STOP, SUSPEND, RESUME, COMMIT, TIMESTAMP)
     * @param array $ExtConfig 额外参数
     * @param string $EventDesc 前端操作类型描述
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("ExtConfig",$param) and $param["ExtConfig"] !== null) {
            $this->ExtConfig = [];
            foreach ($param["ExtConfig"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->ExtConfig, $obj);
            }
        }

        if (array_key_exists("EventDesc",$param) and $param["EventDesc"] !== null) {
            $this->EventDesc = $param["EventDesc"];
        }
    }
}
