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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WorkflowRef详情
 *
 * @method string getWorkflowId() 获取任务流ID
 * @method void setWorkflowId(string $WorkflowId) 设置任务流ID
 * @method string getWorkflowName() 获取任务流名称
 * @method void setWorkflowName(string $WorkflowName) 设置任务流名称
 * @method string getWorkflowDesc() 获取任务流描述
 * @method void setWorkflowDesc(string $WorkflowDesc) 设置任务流描述
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 */
class WorkflowRef extends AbstractModel
{
    /**
     * @var string 任务流ID
     */
    public $WorkflowId;

    /**
     * @var string 任务流名称
     */
    public $WorkflowName;

    /**
     * @var string 任务流描述
     */
    public $WorkflowDesc;

    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $WorkflowId 任务流ID
     * @param string $WorkflowName 任务流名称
     * @param string $WorkflowDesc 任务流描述
     * @param string $AppBizId 应用ID
     * @param integer $UpdateTime 更新时间
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
