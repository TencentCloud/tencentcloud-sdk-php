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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 护栏策略触发日志
 *
 * @method integer getTaskId() 获取演练ID
 * @method void setTaskId(integer $TaskId) 设置演练ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getTriggerType() 获取类型，0--触发，1--恢复
 * @method void setTriggerType(integer $TriggerType) 设置类型，0--触发，1--恢复
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getCreatTime() 获取触发时间
 * @method void setCreatTime(string $CreatTime) 设置触发时间
 */
class PolicyTriggerLog extends AbstractModel
{
    /**
     * @var integer 演练ID
     */
    public $TaskId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 类型，0--触发，1--恢复
     */
    public $TriggerType;

    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 触发时间
     */
    public $CreatTime;

    /**
     * @param integer $TaskId 演练ID
     * @param string $Name 名称
     * @param integer $TriggerType 类型，0--触发，1--恢复
     * @param string $Content 内容
     * @param string $CreatTime 触发时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("CreatTime",$param) and $param["CreatTime"] !== null) {
            $this->CreatTime = $param["CreatTime"];
        }
    }
}
