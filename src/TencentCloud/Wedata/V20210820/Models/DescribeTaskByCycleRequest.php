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
 * DescribeTaskByCycle请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getInCharge() 获取1
 * @method void setInCharge(string $InCharge) 设置1
 * @method string getWorkflowId() 获取工作流ID
 * @method void setWorkflowId(string $WorkflowId) 设置工作流ID
 * @method array getProjectIds() 获取项目ID列表筛选
 * @method void setProjectIds(array $ProjectIds) 设置项目ID列表筛选
 * @method array getResourceGroupIds() 获取资源组ID列表筛选
 * @method void setResourceGroupIds(array $ResourceGroupIds) 设置资源组ID列表筛选
 * @method array getTaskTypeIdList() 获取任务类型ID筛选
 * @method void setTaskTypeIdList(array $TaskTypeIdList) 设置任务类型ID筛选
 */
class DescribeTaskByCycleRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 1
     */
    public $InCharge;

    /**
     * @var string 工作流ID
     */
    public $WorkflowId;

    /**
     * @var array 项目ID列表筛选
     */
    public $ProjectIds;

    /**
     * @var array 资源组ID列表筛选
     */
    public $ResourceGroupIds;

    /**
     * @var array 任务类型ID筛选
     */
    public $TaskTypeIdList;

    /**
     * @param string $ProjectId 项目ID
     * @param string $InCharge 1
     * @param string $WorkflowId 工作流ID
     * @param array $ProjectIds 项目ID列表筛选
     * @param array $ResourceGroupIds 资源组ID列表筛选
     * @param array $TaskTypeIdList 任务类型ID筛选
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ResourceGroupIds",$param) and $param["ResourceGroupIds"] !== null) {
            $this->ResourceGroupIds = $param["ResourceGroupIds"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }
    }
}
