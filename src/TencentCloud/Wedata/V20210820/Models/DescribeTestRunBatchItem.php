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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述etl测试运行批量结果
 *
 * @method string getInstanceKey() 获取任务实例Id
 * @method void setInstanceKey(string $InstanceKey) 设置任务实例Id
 * @method string getStatus() 获取当前任务状态
 * @method void setStatus(string $Status) 设置当前任务状态
 * @method boolean getFinished() 获取任务是否结束
 * @method void setFinished(boolean $Finished) 设置任务是否结束
 * @method string getLogContent() 获取日志内容
 * @method void setLogContent(string $LogContent) 设置日志内容
 */
class DescribeTestRunBatchItem extends AbstractModel
{
    /**
     * @var string 任务实例Id
     */
    public $InstanceKey;

    /**
     * @var string 当前任务状态
     */
    public $Status;

    /**
     * @var boolean 任务是否结束
     */
    public $Finished;

    /**
     * @var string 日志内容
     */
    public $LogContent;

    /**
     * @param string $InstanceKey 任务实例Id
     * @param string $Status 当前任务状态
     * @param boolean $Finished 任务是否结束
     * @param string $LogContent 日志内容
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
        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Finished",$param) and $param["Finished"] !== null) {
            $this->Finished = $param["Finished"];
        }

        if (array_key_exists("LogContent",$param) and $param["LogContent"] !== null) {
            $this->LogContent = $param["LogContent"];
        }
    }
}
