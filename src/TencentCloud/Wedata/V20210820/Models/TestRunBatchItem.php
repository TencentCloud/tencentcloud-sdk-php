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
 * 批量测试运行提交任务实例信息
 *
 * @method string getInstanceKey() 获取任务实例Id
 * @method void setInstanceKey(string $InstanceKey) 设置任务实例Id
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getCurrRunDate() 获取实例运行时间
 * @method void setCurrRunDate(string $CurrRunDate) 设置实例运行时间
 */
class TestRunBatchItem extends AbstractModel
{
    /**
     * @var string 任务实例Id
     */
    public $InstanceKey;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 实例运行时间
     */
    public $CurrRunDate;

    /**
     * @param string $InstanceKey 任务实例Id
     * @param string $TaskId 任务Id
     * @param string $CurrRunDate 实例运行时间
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurrRunDate",$param) and $param["CurrRunDate"] !== null) {
            $this->CurrRunDate = $param["CurrRunDate"];
        }
    }
}
