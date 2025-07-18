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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RepairTaskControl请求参数结构体
 *
 * @method string getTaskId() 获取维修任务ID
 * @method void setTaskId(string $TaskId) 设置维修任务ID
 * @method string getOperate() 获取操作
 * @method void setOperate(string $Operate) 设置操作
 * @method string getOperateRemark() 获取需要重新维修操作的备注信息，可提供返场维修原因，以便驻场快速针对问题定位解决。
 * @method void setOperateRemark(string $OperateRemark) 设置需要重新维修操作的备注信息，可提供返场维修原因，以便驻场快速针对问题定位解决。
 */
class RepairTaskControlRequest extends AbstractModel
{
    /**
     * @var string 维修任务ID
     */
    public $TaskId;

    /**
     * @var string 操作
     */
    public $Operate;

    /**
     * @var string 需要重新维修操作的备注信息，可提供返场维修原因，以便驻场快速针对问题定位解决。
     */
    public $OperateRemark;

    /**
     * @param string $TaskId 维修任务ID
     * @param string $Operate 操作
     * @param string $OperateRemark 需要重新维修操作的备注信息，可提供返场维修原因，以便驻场快速针对问题定位解决。
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

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("OperateRemark",$param) and $param["OperateRemark"] !== null) {
            $this->OperateRemark = $param["OperateRemark"];
        }
    }
}
