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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI工作台SRE数字分身工作日志详细信息
 *
 * @method string getContent() 获取工作日志详细内容
 * @method void setContent(string $Content) 设置工作日志详细内容
 * @method string getTaskType() 获取工作日志任务类型
 * @method void setTaskType(string $TaskType) 设置工作日志任务类型
 * @method integer getDialogID() 获取工作日志相关对话ID
 * @method void setDialogID(integer $DialogID) 设置工作日志相关对话ID
 */
class AIWorkbenchSREDigitalTwinWorkLogDetail extends AbstractModel
{
    /**
     * @var string 工作日志详细内容
     */
    public $Content;

    /**
     * @var string 工作日志任务类型
     */
    public $TaskType;

    /**
     * @var integer 工作日志相关对话ID
     */
    public $DialogID;

    /**
     * @param string $Content 工作日志详细内容
     * @param string $TaskType 工作日志任务类型
     * @param integer $DialogID 工作日志相关对话ID
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("DialogID",$param) and $param["DialogID"] !== null) {
            $this->DialogID = $param["DialogID"];
        }
    }
}
