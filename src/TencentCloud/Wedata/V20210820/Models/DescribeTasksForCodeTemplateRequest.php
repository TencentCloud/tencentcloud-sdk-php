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
 * DescribeTasksForCodeTemplate请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method integer getPageNumber() 获取页码，最小1
 * @method void setPageNumber(integer $PageNumber) 设置页码，最小1
 * @method integer getPageSize() 获取单页大小，最小10，最大200
 * @method void setPageSize(integer $PageSize) 设置单页大小，最小10，最大200
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method array getWorkflowIdList() 获取工作流id列表
 * @method void setWorkflowIdList(array $WorkflowIdList) 设置工作流id列表
 * @method array getOwnerIdList() 获取责任人名列表
 * @method void setOwnerIdList(array $OwnerIdList) 设置责任人名列表
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method OrderCondition getOrderCondition() 获取排序提交，目前只支持workflowName
 * @method void setOrderCondition(OrderCondition $OrderCondition) 设置排序提交，目前只支持workflowName
 */
class DescribeTasksForCodeTemplateRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 页码，最小1
     */
    public $PageNumber;

    /**
     * @var integer 单页大小，最小10，最大200
     */
    public $PageSize;

    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var array 工作流id列表
     */
    public $WorkflowIdList;

    /**
     * @var array 责任人名列表
     */
    public $OwnerIdList;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var OrderCondition 排序提交，目前只支持workflowName
     */
    public $OrderCondition;

    /**
     * @param string $ProjectId 项目Id
     * @param integer $PageNumber 页码，最小1
     * @param integer $PageSize 单页大小，最小10，最大200
     * @param string $TemplateId 模板id
     * @param array $WorkflowIdList 工作流id列表
     * @param array $OwnerIdList 责任人名列表
     * @param string $TaskName 任务名
     * @param OrderCondition $OrderCondition 排序提交，目前只支持workflowName
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("OwnerIdList",$param) and $param["OwnerIdList"] !== null) {
            $this->OwnerIdList = $param["OwnerIdList"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("OrderCondition",$param) and $param["OrderCondition"] !== null) {
            $this->OrderCondition = new OrderCondition();
            $this->OrderCondition->deserialize($param["OrderCondition"]);
        }
    }
}
