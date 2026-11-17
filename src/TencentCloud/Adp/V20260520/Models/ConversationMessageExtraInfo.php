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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MessageExtraInfo 消息扩展信息
 *
 * @method string getAgentIcon() 获取<p>智能体图标</p>
 * @method void setAgentIcon(string $AgentIcon) 设置<p>智能体图标</p>
 * @method string getAgentName() 获取<p>智能体名称</p>
 * @method void setAgentName(string $AgentName) 设置<p>智能体名称</p>
 * @method string getElapsed() 获取<p>消息处理耗时</p>
 * @method void setElapsed(string $Elapsed) 设置<p>消息处理耗时</p>
 * @method string getParentMessageId() 获取<p>父消息 ID</p>
 * @method void setParentMessageId(string $ParentMessageId) 设置<p>父消息 ID</p>
 * @method string getRelatedRecordId() 获取<p>关联记录 ID</p>
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置<p>关联记录 ID</p>
 * @method string getStartTime() 获取<p>消息处理开始时间戳（毫秒）</p>
 * @method void setStartTime(string $StartTime) 设置<p>消息处理开始时间戳（毫秒）</p>
 * @method string getToolIcon() 获取<p>工具图标</p>
 * @method void setToolIcon(string $ToolIcon) 设置<p>工具图标</p>
 * @method string getToolName() 获取<p>工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>工具名称</p>
 * @method string getTraceId() 获取<p>Trace ID</p>
 * @method void setTraceId(string $TraceId) 设置<p>Trace ID</p>
 * @method boolean getCanFeedback() 获取<p>是否可以反馈</p>
 * @method void setCanFeedback(boolean $CanFeedback) 设置<p>是否可以反馈</p>
 * @method boolean getCanRate() 获取<p>是否可以点赞点踩</p>
 * @method void setCanRate(boolean $CanRate) 设置<p>是否可以点赞点踩</p>
 * @method string getEndTime() 获取<p>消息处理开始时间戳（毫秒）</p>
 * @method void setEndTime(string $EndTime) 设置<p>消息处理开始时间戳（毫秒）</p>
 * @method boolean getHasRead() 获取<p>是否已读</p>
 * @method void setHasRead(boolean $HasRead) 设置<p>是否已读</p>
 * @method boolean getIsModelGenerated() 获取<p>是否大模型生成</p>
 * @method void setIsModelGenerated(boolean $IsModelGenerated) 设置<p>是否大模型生成</p>
 * @method array getReasonList() 获取<p>用户反馈标签列表</p>
 * @method void setReasonList(array $ReasonList) 设置<p>用户反馈标签列表</p>
 * @method integer getReplyMethod() 获取<p>回复方式</p>
 * @method void setReplyMethod(integer $ReplyMethod) 设置<p>回复方式</p>
 * @method integer getScore() 获取<p>用户打分</p>
 * @method void setScore(integer $Score) 设置<p>用户打分</p>
 * @method string getSubAgentRunId() 获取<p>子 Agent 运行 Id</p>
 * @method void setSubAgentRunId(string $SubAgentRunId) 设置<p>子 Agent 运行 Id</p>
 * @method boolean getIsSubAgent() 获取<p>是否是子 Agent 的消息</p>
 * @method void setIsSubAgent(boolean $IsSubAgent) 设置<p>是否是子 Agent 的消息</p>
 * @method string getSubAgentThreadId() 获取<p>子 Agent 线程 ID</p>
 * @method void setSubAgentThreadId(string $SubAgentThreadId) 设置<p>子 Agent 线程 ID</p>
 * @method boolean getIsTeammate() 获取<p>是否是 Agent Team 模式下的 teammate 成员</p>
 * @method void setIsTeammate(boolean $IsTeammate) 设置<p>是否是 Agent Team 模式下的 teammate 成员</p>
 * @method string getTeammateName() 获取<p>Agent Team 模式下的 teammate 名称</p>
 * @method void setTeammateName(string $TeammateName) 设置<p>Agent Team 模式下的 teammate 名称</p>
 * @method string getWorkflowNodeName() 获取<p>工作流节点名称</p>
 * @method void setWorkflowNodeName(string $WorkflowNodeName) 设置<p>工作流节点名称</p>
 */
class ConversationMessageExtraInfo extends AbstractModel
{
    /**
     * @var string <p>智能体图标</p>
     */
    public $AgentIcon;

    /**
     * @var string <p>智能体名称</p>
     */
    public $AgentName;

    /**
     * @var string <p>消息处理耗时</p>
     */
    public $Elapsed;

    /**
     * @var string <p>父消息 ID</p>
     */
    public $ParentMessageId;

    /**
     * @var string <p>关联记录 ID</p>
     */
    public $RelatedRecordId;

    /**
     * @var string <p>消息处理开始时间戳（毫秒）</p>
     */
    public $StartTime;

    /**
     * @var string <p>工具图标</p>
     */
    public $ToolIcon;

    /**
     * @var string <p>工具名称</p>
     */
    public $ToolName;

    /**
     * @var string <p>Trace ID</p>
     */
    public $TraceId;

    /**
     * @var boolean <p>是否可以反馈</p>
     */
    public $CanFeedback;

    /**
     * @var boolean <p>是否可以点赞点踩</p>
     */
    public $CanRate;

    /**
     * @var string <p>消息处理开始时间戳（毫秒）</p>
     */
    public $EndTime;

    /**
     * @var boolean <p>是否已读</p>
     */
    public $HasRead;

    /**
     * @var boolean <p>是否大模型生成</p>
     */
    public $IsModelGenerated;

    /**
     * @var array <p>用户反馈标签列表</p>
     */
    public $ReasonList;

    /**
     * @var integer <p>回复方式</p>
     */
    public $ReplyMethod;

    /**
     * @var integer <p>用户打分</p>
     */
    public $Score;

    /**
     * @var string <p>子 Agent 运行 Id</p>
     */
    public $SubAgentRunId;

    /**
     * @var boolean <p>是否是子 Agent 的消息</p>
     */
    public $IsSubAgent;

    /**
     * @var string <p>子 Agent 线程 ID</p>
     */
    public $SubAgentThreadId;

    /**
     * @var boolean <p>是否是 Agent Team 模式下的 teammate 成员</p>
     */
    public $IsTeammate;

    /**
     * @var string <p>Agent Team 模式下的 teammate 名称</p>
     */
    public $TeammateName;

    /**
     * @var string <p>工作流节点名称</p>
     */
    public $WorkflowNodeName;

    /**
     * @param string $AgentIcon <p>智能体图标</p>
     * @param string $AgentName <p>智能体名称</p>
     * @param string $Elapsed <p>消息处理耗时</p>
     * @param string $ParentMessageId <p>父消息 ID</p>
     * @param string $RelatedRecordId <p>关联记录 ID</p>
     * @param string $StartTime <p>消息处理开始时间戳（毫秒）</p>
     * @param string $ToolIcon <p>工具图标</p>
     * @param string $ToolName <p>工具名称</p>
     * @param string $TraceId <p>Trace ID</p>
     * @param boolean $CanFeedback <p>是否可以反馈</p>
     * @param boolean $CanRate <p>是否可以点赞点踩</p>
     * @param string $EndTime <p>消息处理开始时间戳（毫秒）</p>
     * @param boolean $HasRead <p>是否已读</p>
     * @param boolean $IsModelGenerated <p>是否大模型生成</p>
     * @param array $ReasonList <p>用户反馈标签列表</p>
     * @param integer $ReplyMethod <p>回复方式</p>
     * @param integer $Score <p>用户打分</p>
     * @param string $SubAgentRunId <p>子 Agent 运行 Id</p>
     * @param boolean $IsSubAgent <p>是否是子 Agent 的消息</p>
     * @param string $SubAgentThreadId <p>子 Agent 线程 ID</p>
     * @param boolean $IsTeammate <p>是否是 Agent Team 模式下的 teammate 成员</p>
     * @param string $TeammateName <p>Agent Team 模式下的 teammate 名称</p>
     * @param string $WorkflowNodeName <p>工作流节点名称</p>
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
        if (array_key_exists("AgentIcon",$param) and $param["AgentIcon"] !== null) {
            $this->AgentIcon = $param["AgentIcon"];
        }

        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            $this->AgentName = $param["AgentName"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("ParentMessageId",$param) and $param["ParentMessageId"] !== null) {
            $this->ParentMessageId = $param["ParentMessageId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ToolIcon",$param) and $param["ToolIcon"] !== null) {
            $this->ToolIcon = $param["ToolIcon"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("CanFeedback",$param) and $param["CanFeedback"] !== null) {
            $this->CanFeedback = $param["CanFeedback"];
        }

        if (array_key_exists("CanRate",$param) and $param["CanRate"] !== null) {
            $this->CanRate = $param["CanRate"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("HasRead",$param) and $param["HasRead"] !== null) {
            $this->HasRead = $param["HasRead"];
        }

        if (array_key_exists("IsModelGenerated",$param) and $param["IsModelGenerated"] !== null) {
            $this->IsModelGenerated = $param["IsModelGenerated"];
        }

        if (array_key_exists("ReasonList",$param) and $param["ReasonList"] !== null) {
            $this->ReasonList = $param["ReasonList"];
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SubAgentRunId",$param) and $param["SubAgentRunId"] !== null) {
            $this->SubAgentRunId = $param["SubAgentRunId"];
        }

        if (array_key_exists("IsSubAgent",$param) and $param["IsSubAgent"] !== null) {
            $this->IsSubAgent = $param["IsSubAgent"];
        }

        if (array_key_exists("SubAgentThreadId",$param) and $param["SubAgentThreadId"] !== null) {
            $this->SubAgentThreadId = $param["SubAgentThreadId"];
        }

        if (array_key_exists("IsTeammate",$param) and $param["IsTeammate"] !== null) {
            $this->IsTeammate = $param["IsTeammate"];
        }

        if (array_key_exists("TeammateName",$param) and $param["TeammateName"] !== null) {
            $this->TeammateName = $param["TeammateName"];
        }

        if (array_key_exists("WorkflowNodeName",$param) and $param["WorkflowNodeName"] !== null) {
            $this->WorkflowNodeName = $param["WorkflowNodeName"];
        }
    }
}
