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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeManualTriggerRecordPage请求参数结构体
 *
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getTriggerName() 获取<p>触发运行名称</p>
 * @method void setTriggerName(string $TriggerName) 设置<p>触发运行名称</p>
 * @method string getWorkflowKeyword() 获取<p>工作流过滤关键字，工作流名称 or 工作流ID</p>
 * @method void setWorkflowKeyword(string $WorkflowKeyword) 设置<p>工作流过滤关键字，工作流名称 or 工作流ID</p>
 * @method string getCreator() 获取<p>触发运行提交人过滤，多个提交人用英文逗号分割</p>
 * @method void setCreator(string $Creator) 设置<p>触发运行提交人过滤，多个提交人用英文逗号分割</p>
 * @method string getTriggerStartTime() 获取<p>触发提交创建时间过滤，起始时间</p>
 * @method void setTriggerStartTime(string $TriggerStartTime) 设置<p>触发提交创建时间过滤，起始时间</p>
 * @method string getTriggerEndTime() 获取<p>触发提交创建时间过滤，结束时间</p>
 * @method void setTriggerEndTime(string $TriggerEndTime) 设置<p>触发提交创建时间过滤，结束时间</p>
 * @method integer getPageNumber() 获取<p>页码，整型</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，整型</p>
 * @method integer getPageSize() 获取<p>每页数目，整型</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数目，整型</p>
 * @method string getTriggerId() 获取<p>触发ID</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发ID</p>
 */
class DescribeManualTriggerRecordPageRequest extends AbstractModel
{
    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>触发运行名称</p>
     */
    public $TriggerName;

    /**
     * @var string <p>工作流过滤关键字，工作流名称 or 工作流ID</p>
     */
    public $WorkflowKeyword;

    /**
     * @var string <p>触发运行提交人过滤，多个提交人用英文逗号分割</p>
     */
    public $Creator;

    /**
     * @var string <p>触发提交创建时间过滤，起始时间</p>
     */
    public $TriggerStartTime;

    /**
     * @var string <p>触发提交创建时间过滤，结束时间</p>
     */
    public $TriggerEndTime;

    /**
     * @var integer <p>页码，整型</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数目，整型</p>
     */
    public $PageSize;

    /**
     * @var string <p>触发ID</p>
     */
    public $TriggerId;

    /**
     * @param string $ProjectId <p>项目ID</p>
     * @param string $TriggerName <p>触发运行名称</p>
     * @param string $WorkflowKeyword <p>工作流过滤关键字，工作流名称 or 工作流ID</p>
     * @param string $Creator <p>触发运行提交人过滤，多个提交人用英文逗号分割</p>
     * @param string $TriggerStartTime <p>触发提交创建时间过滤，起始时间</p>
     * @param string $TriggerEndTime <p>触发提交创建时间过滤，结束时间</p>
     * @param integer $PageNumber <p>页码，整型</p>
     * @param integer $PageSize <p>每页数目，整型</p>
     * @param string $TriggerId <p>触发ID</p>
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

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }
    }
}
