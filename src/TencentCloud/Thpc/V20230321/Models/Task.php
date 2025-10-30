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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 作业任务配置信息。
 *
 * @method Application getApplication() 获取作业任务的应用环境配置信息。
 * @method void setApplication(Application $Application) 设置作业任务的应用环境配置信息。
 * @method string getTaskName() 获取作业任务名称。
 * @method void setTaskName(string $TaskName) 设置作业任务名称。
 * @method integer getTaskInstanceNum() 获取作业任务所需的节点数/副本数。
 * @method void setTaskInstanceNum(integer $TaskInstanceNum) 设置作业任务所需的节点数/副本数。
 * @method integer getTimeout() 获取任务超时时间(单位：秒)。
 * @method void setTimeout(integer $Timeout) 设置任务超时时间(单位：秒)。
 */
class Task extends AbstractModel
{
    /**
     * @var Application 作业任务的应用环境配置信息。
     */
    public $Application;

    /**
     * @var string 作业任务名称。
     */
    public $TaskName;

    /**
     * @var integer 作业任务所需的节点数/副本数。
     */
    public $TaskInstanceNum;

    /**
     * @var integer 任务超时时间(单位：秒)。
     */
    public $Timeout;

    /**
     * @param Application $Application 作业任务的应用环境配置信息。
     * @param string $TaskName 作业任务名称。
     * @param integer $TaskInstanceNum 作业任务所需的节点数/副本数。
     * @param integer $Timeout 任务超时时间(单位：秒)。
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
        if (array_key_exists("Application",$param) and $param["Application"] !== null) {
            $this->Application = new Application();
            $this->Application->deserialize($param["Application"]);
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceNum",$param) and $param["TaskInstanceNum"] !== null) {
            $this->TaskInstanceNum = $param["TaskInstanceNum"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
