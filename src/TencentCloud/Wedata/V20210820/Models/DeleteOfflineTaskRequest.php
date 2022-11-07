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
 * DeleteOfflineTask请求参数结构体
 *
 * @method string getOperatorName() 获取操作者name
 * @method void setOperatorName(string $OperatorName) 设置操作者name
 * @method string getProjectId() 获取项目/工作空间id
 * @method void setProjectId(string $ProjectId) 设置项目/工作空间id
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method boolean getVirtualFlag() 获取虚拟任务标记(跟之前调度接口保持一致默认false)
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置虚拟任务标记(跟之前调度接口保持一致默认false)
 */
class DeleteOfflineTaskRequest extends AbstractModel
{
    /**
     * @var string 操作者name
     */
    public $OperatorName;

    /**
     * @var string 项目/工作空间id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var boolean 虚拟任务标记(跟之前调度接口保持一致默认false)
     */
    public $VirtualFlag;

    /**
     * @param string $OperatorName 操作者name
     * @param string $ProjectId 项目/工作空间id
     * @param string $TaskId 任务id
     * @param boolean $VirtualFlag 虚拟任务标记(跟之前调度接口保持一致默认false)
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
        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }
    }
}
