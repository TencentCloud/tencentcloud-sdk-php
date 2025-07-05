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
 * 工作流最近批次的状态
 *
 * @method string getFlowBatchId() 获取批次ID
 * @method void setFlowBatchId(string $FlowBatchId) 设置批次ID
 * @method string getFlowBatchLogId() 获取批次历史ID
 * @method void setFlowBatchLogId(string $FlowBatchLogId) 设置批次历史ID
 * @method string getState() 获取状态,WAITING/SUCCESS/FAILED/RUNNING/TERMINATING
 * @method void setState(string $State) 设置状态,WAITING/SUCCESS/FAILED/RUNNING/TERMINATING
 */
class TaskFlowLastBatchState extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $FlowBatchId;

    /**
     * @var string 批次历史ID
     */
    public $FlowBatchLogId;

    /**
     * @var string 状态,WAITING/SUCCESS/FAILED/RUNNING/TERMINATING
     */
    public $State;

    /**
     * @param string $FlowBatchId 批次ID
     * @param string $FlowBatchLogId 批次历史ID
     * @param string $State 状态,WAITING/SUCCESS/FAILED/RUNNING/TERMINATING
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
        if (array_key_exists("FlowBatchId",$param) and $param["FlowBatchId"] !== null) {
            $this->FlowBatchId = $param["FlowBatchId"];
        }

        if (array_key_exists("FlowBatchLogId",$param) and $param["FlowBatchLogId"] !== null) {
            $this->FlowBatchLogId = $param["FlowBatchLogId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
