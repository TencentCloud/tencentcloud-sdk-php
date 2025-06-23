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
 * DescribeManualTriggerRecordPage请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getTriggerName() 获取触发运行名称
 * @method void setTriggerName(string $TriggerName) 设置触发运行名称
 * @method string getWorkflowKeyword() 获取工作流过滤关键字，工作流名称 or 工作流ID
 * @method void setWorkflowKeyword(string $WorkflowKeyword) 设置工作流过滤关键字，工作流名称 or 工作流ID
 * @method string getCreator() 获取触发运行提交人过滤，多个提交人用英文逗号分割
 * @method void setCreator(string $Creator) 设置触发运行提交人过滤，多个提交人用英文逗号分割
 * @method string getTriggerStartTime() 获取触发提交创建时间过滤，起始时间
 * @method void setTriggerStartTime(string $TriggerStartTime) 设置触发提交创建时间过滤，起始时间
 * @method string getTriggerEndTime() 获取触发提交创建时间过滤，结束时间
 * @method void setTriggerEndTime(string $TriggerEndTime) 设置触发提交创建时间过滤，结束时间
 * @method integer getPageNumber() 获取页码，整型
 * @method void setPageNumber(integer $PageNumber) 设置页码，整型
 * @method integer getPageSize() 获取每页数目，整型
 * @method void setPageSize(integer $PageSize) 设置每页数目，整型
 */
class DescribeManualTriggerRecordPageRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 触发运行名称
     */
    public $TriggerName;

    /**
     * @var string 工作流过滤关键字，工作流名称 or 工作流ID
     */
    public $WorkflowKeyword;

    /**
     * @var string 触发运行提交人过滤，多个提交人用英文逗号分割
     */
    public $Creator;

    /**
     * @var string 触发提交创建时间过滤，起始时间
     */
    public $TriggerStartTime;

    /**
     * @var string 触发提交创建时间过滤，结束时间
     */
    public $TriggerEndTime;

    /**
     * @var integer 页码，整型
     */
    public $PageNumber;

    /**
     * @var integer 每页数目，整型
     */
    public $PageSize;

    /**
     * @param string $ProjectId 项目ID
     * @param string $TriggerName 触发运行名称
     * @param string $WorkflowKeyword 工作流过滤关键字，工作流名称 or 工作流ID
     * @param string $Creator 触发运行提交人过滤，多个提交人用英文逗号分割
     * @param string $TriggerStartTime 触发提交创建时间过滤，起始时间
     * @param string $TriggerEndTime 触发提交创建时间过滤，结束时间
     * @param integer $PageNumber 页码，整型
     * @param integer $PageSize 每页数目，整型
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

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("WorkflowKeyword",$param) and $param["WorkflowKeyword"] !== null) {
            $this->WorkflowKeyword = $param["WorkflowKeyword"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("TriggerStartTime",$param) and $param["TriggerStartTime"] !== null) {
            $this->TriggerStartTime = $param["TriggerStartTime"];
        }

        if (array_key_exists("TriggerEndTime",$param) and $param["TriggerEndTime"] !== null) {
            $this->TriggerEndTime = $param["TriggerEndTime"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
