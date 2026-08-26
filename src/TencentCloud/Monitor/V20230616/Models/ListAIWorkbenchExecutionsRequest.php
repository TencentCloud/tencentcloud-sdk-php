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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchExecutions请求参数结构体
 *
 * @method integer getPerPage() 获取<p>每页数量</p>
 * @method void setPerPage(integer $PerPage) 设置<p>每页数量</p>
 * @method integer getPageNo() 获取<p>页码</p>
 * @method void setPageNo(integer $PageNo) 设置<p>页码</p>
 * @method string getAgentId() 获取<p>按 Agent 筛选</p>
 * @method void setAgentId(string $AgentId) 设置<p>按 Agent 筛选</p>
 * @method string getStatus() 获取<p>按状态筛选</p>
 * @method void setStatus(string $Status) 设置<p>按状态筛选</p>
 * @method array getExecutionIds() 获取<p>执行 ID 列表筛选</p>
 * @method void setExecutionIds(array $ExecutionIds) 设置<p>执行 ID 列表筛选</p>
 * @method array getTaskIds() 获取<p>任务id</p>
 * @method void setTaskIds(array $TaskIds) 设置<p>任务id</p>
 * @method string getTriggerType() 获取<p>触发方式</p>
 * @method void setTriggerType(string $TriggerType) 设置<p>触发方式</p>
 * @method string getKeyword() 获取<p>关键值</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键值</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 */
class ListAIWorkbenchExecutionsRequest extends AbstractModel
{
    /**
     * @var integer <p>每页数量</p>
     */
    public $PerPage;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNo;

    /**
     * @var string <p>按 Agent 筛选</p>
     */
    public $AgentId;

    /**
     * @var string <p>按状态筛选</p>
     */
    public $Status;

    /**
     * @var array <p>执行 ID 列表筛选</p>
     */
    public $ExecutionIds;

    /**
     * @var array <p>任务id</p>
     */
    public $TaskIds;

    /**
     * @var string <p>触发方式</p>
     */
    public $TriggerType;

    /**
     * @var string <p>关键值</p>
     */
    public $Keyword;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @param integer $PerPage <p>每页数量</p>
     * @param integer $PageNo <p>页码</p>
     * @param string $AgentId <p>按 Agent 筛选</p>
     * @param string $Status <p>按状态筛选</p>
     * @param array $ExecutionIds <p>执行 ID 列表筛选</p>
     * @param array $TaskIds <p>任务id</p>
     * @param string $TriggerType <p>触发方式</p>
     * @param string $Keyword <p>关键值</p>
     * @param boolean $Enabled <p>是否启用</p>
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
        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExecutionIds",$param) and $param["ExecutionIds"] !== null) {
            $this->ExecutionIds = $param["ExecutionIds"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
