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
 * 任务状态历史记录
 *
 * @method integer getId() 获取历史记录ID
 * @method void setId(integer $Id) 设置历史记录ID
 * @method string getJobId() 获取作业ID
 * @method void setJobId(string $JobId) 设置作业ID
 * @method string getJobName() 获取作业名称
 * @method void setJobName(string $JobName) 设置作业名称
 * @method string getFromState() 获取源状态
 * @method void setFromState(string $FromState) 设置源状态
 * @method string getToState() 获取目标状态
 * @method void setToState(string $ToState) 设置目标状态
 * @method string getEvent() 获取触发事件
 * @method void setEvent(string $Event) 设置触发事件
 * @method string getMessage() 获取消息
 * @method void setMessage(string $Message) 设置消息
 * @method integer getTransitionTime() 获取转换时间（毫秒时间戳）
 * @method void setTransitionTime(integer $TransitionTime) 设置转换时间（毫秒时间戳）
 */
class JobStatusHistory extends AbstractModel
{
    /**
     * @var integer 历史记录ID
     */
    public $Id;

    /**
     * @var string 作业ID
     */
    public $JobId;

    /**
     * @var string 作业名称
     */
    public $JobName;

    /**
     * @var string 源状态
     */
    public $FromState;

    /**
     * @var string 目标状态
     */
    public $ToState;

    /**
     * @var string 触发事件
     */
    public $Event;

    /**
     * @var string 消息
     */
    public $Message;

    /**
     * @var integer 转换时间（毫秒时间戳）
     */
    public $TransitionTime;

    /**
     * @param integer $Id 历史记录ID
     * @param string $JobId 作业ID
     * @param string $JobName 作业名称
     * @param string $FromState 源状态
     * @param string $ToState 目标状态
     * @param string $Event 触发事件
     * @param string $Message 消息
     * @param integer $TransitionTime 转换时间（毫秒时间戳）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("FromState",$param) and $param["FromState"] !== null) {
            $this->FromState = $param["FromState"];
        }

        if (array_key_exists("ToState",$param) and $param["ToState"] !== null) {
            $this->ToState = $param["ToState"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("TransitionTime",$param) and $param["TransitionTime"] !== null) {
            $this->TransitionTime = $param["TransitionTime"];
        }
    }
}
