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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务最近一次执行状态
 *
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method string getState() 获取运行状态，RUNNING/SUCCESS/FAIL/HALF/TERMINATED
 * @method void setState(string $State) 设置运行状态，RUNNING/SUCCESS/FAIL/HALF/TERMINATED
 * @method string getBatchLogId() 获取批次历史ID
 * @method void setBatchLogId(string $BatchLogId) 设置批次历史ID
 */
class TaskLastExecuteStatus extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var string 运行状态，RUNNING/SUCCESS/FAIL/HALF/TERMINATED
     */
    public $State;

    /**
     * @var string 批次历史ID
     */
    public $BatchLogId;

    /**
     * @param string $BatchId 批次ID
     * @param string $State 运行状态，RUNNING/SUCCESS/FAIL/HALF/TERMINATED
     * @param string $BatchLogId 批次历史ID
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("BatchLogId",$param) and $param["BatchLogId"] !== null) {
            $this->BatchLogId = $param["BatchLogId"];
        }
    }
}
