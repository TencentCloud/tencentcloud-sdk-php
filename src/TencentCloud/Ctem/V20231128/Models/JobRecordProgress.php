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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子任务进度
 *
 * @method integer getDoing() 获取正在执行的任务数
 * @method void setDoing(integer $Doing) 设置正在执行的任务数
 * @method integer getDone() 获取已完成的任务数
 * @method void setDone(integer $Done) 设置已完成的任务数
 * @method integer getError() 获取发生错误的任务数
 * @method void setError(integer $Error) 设置发生错误的任务数
 * @method integer getTimeout() 获取超时
 * @method void setTimeout(integer $Timeout) 设置超时
 * @method integer getStop() 获取停止
 * @method void setStop(integer $Stop) 设置停止
 * @method integer getTodo() 获取暂停
 * @method void setTodo(integer $Todo) 设置暂停
 */
class JobRecordProgress extends AbstractModel
{
    /**
     * @var integer 正在执行的任务数
     */
    public $Doing;

    /**
     * @var integer 已完成的任务数
     */
    public $Done;

    /**
     * @var integer 发生错误的任务数
     */
    public $Error;

    /**
     * @var integer 超时
     */
    public $Timeout;

    /**
     * @var integer 停止
     */
    public $Stop;

    /**
     * @var integer 暂停
     */
    public $Todo;

    /**
     * @param integer $Doing 正在执行的任务数
     * @param integer $Done 已完成的任务数
     * @param integer $Error 发生错误的任务数
     * @param integer $Timeout 超时
     * @param integer $Stop 停止
     * @param integer $Todo 暂停
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
        if (array_key_exists("Doing",$param) and $param["Doing"] !== null) {
            $this->Doing = $param["Doing"];
        }

        if (array_key_exists("Done",$param) and $param["Done"] !== null) {
            $this->Done = $param["Done"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Stop",$param) and $param["Stop"] !== null) {
            $this->Stop = $param["Stop"];
        }

        if (array_key_exists("Todo",$param) and $param["Todo"] !== null) {
            $this->Todo = $param["Todo"];
        }
    }
}
