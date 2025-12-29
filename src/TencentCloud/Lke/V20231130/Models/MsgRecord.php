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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息详情
 *
 * @method string getContent() 获取内容
 * @method void setContent(string $Content) 设置内容
 * @method string getSessionId() 获取当前记录所对应的 Session ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置当前记录所对应的 Session ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取记录ID
 * @method void setRecordId(string $RecordId) 设置记录ID
 * @method string getRelatedRecordId() 获取关联记录ID
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置关联记录ID
 * @method boolean getIsFromSelf() 获取是否来自自己
 * @method void setIsFromSelf(boolean $IsFromSelf) 设置是否来自自己
 * @method string getFromName() 获取发送者名称
 * @method void setFromName(string $FromName) 设置发送者名称
 * @method string getFromAvatar() 获取发送者头像
 * @method void setFromAvatar(string $FromAvatar) 设置发送者头像
 * @method string getTimestamp() 获取时间戳
 * @method void setTimestamp(string $Timestamp) 设置时间戳
 * @method boolean getHasRead() 获取是否已读
 * @method void setHasRead(boolean $HasRead) 设置是否已读
 * @method integer getScore() 获取评价
 * @method void setScore(integer $Score) 设置评价
 * @method boolean getCanRating() 获取是否评分
 * @method void setCanRating(boolean $CanRating) 设置是否评分
 * @method boolean getCanFeedback() 获取是否展示反馈按钮
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanFeedback(boolean $CanFeedback) 设置是否展示反馈按钮
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取记录类型
 * @method void setType(integer $Type) 设置记录类型
 * @method array getReferences() 获取引用来源
 * @method void setReferences(array $References) 设置引用来源
 * @method array getReasons() 获取评价原因
 * @method void setReasons(array $Reasons) 设置评价原因
 * @method boolean getIsLlmGenerated() 获取是否大模型
 * @method void setIsLlmGenerated(boolean $IsLlmGenerated) 设置是否大模型
 * @method array getImageUrls() 获取图片链接，可公有读
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrls(array $ImageUrls) 设置图片链接，可公有读
注意：此字段可能返回 null，表示取不到有效值。
 * @method TokenStat getTokenStat() 获取当次 token 统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenStat(TokenStat $TokenStat) 设置当次 token 统计信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyMethod() 获取回复方式
1:大模型直接回复;
2:保守回复, 未知问题回复;
3:拒答问题回复;
4:敏感回复;
5:问答对直接回复, 已采纳问答对优先回复;
6:欢迎语回复;
7:并发超限回复;
8:全局干预知识;
9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;
10:任务流程答案回复;
11:搜索引擎回复;
12:知识润色后回复;
13:图片理解回复;
14:实时文档回复;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyMethod(integer $ReplyMethod) 设置回复方式
1:大模型直接回复;
2:保守回复, 未知问题回复;
3:拒答问题回复;
4:敏感回复;
5:问答对直接回复, 已采纳问答对优先回复;
6:欢迎语回复;
7:并发超限回复;
8:全局干预知识;
9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;
10:任务流程答案回复;
11:搜索引擎回复;
12:知识润色后回复;
13:图片理解回复;
14:实时文档回复;
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCards() 获取选项卡, 用于多轮对话
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCards(array $OptionCards) 设置选项卡, 用于多轮对话
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskFlowInfo getTaskFlow() 获取任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFlow(TaskFlowInfo $TaskFlow) 设置任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileInfos() 获取用户传入的文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileInfos(array $FileInfos) 设置用户传入的文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfos() 获取参考来源引用位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuoteInfos(array $QuoteInfos) 设置参考来源引用位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentThought getAgentThought() 获取Agent的思考过程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentThought(AgentThought $AgentThought) 设置Agent的思考过程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtraInfo getExtraInfo() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowInfo getWorkFlow() 获取工作流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlow(WorkflowInfo $WorkFlow) 设置工作流信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWidgets() 获取Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgets(array $Widgets) 设置Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method WidgetAction getWidgetAction() 获取Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetAction(WidgetAction $WidgetAction) 设置Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string 内容
     */
    public $Content;

    /**
     * @var string 当前记录所对应的 Session ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string 记录ID
     */
    public $RecordId;

    /**
     * @var string 关联记录ID
     */
    public $RelatedRecordId;

    /**
     * @var boolean 是否来自自己
     */
    public $IsFromSelf;

    /**
     * @var string 发送者名称
     */
    public $FromName;

    /**
     * @var string 发送者头像
     */
    public $FromAvatar;

    /**
     * @var string 时间戳
     */
    public $Timestamp;

    /**
     * @var boolean 是否已读
     */
    public $HasRead;

    /**
     * @var integer 评价
     */
    public $Score;

    /**
     * @var boolean 是否评分
     */
    public $CanRating;

    /**
     * @var boolean 是否展示反馈按钮
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanFeedback;

    /**
     * @var integer 记录类型
     */
    public $Type;

    /**
     * @var array 引用来源
     */
    public $References;

    /**
     * @var array 评价原因
     */
    public $Reasons;

    /**
     * @var boolean 是否大模型
     */
    public $IsLlmGenerated;

    /**
     * @var array 图片链接，可公有读
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrls;

    /**
     * @var TokenStat 当次 token 统计信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenStat;

    /**
     * @var integer 回复方式
1:大模型直接回复;
2:保守回复, 未知问题回复;
3:拒答问题回复;
4:敏感回复;
5:问答对直接回复, 已采纳问答对优先回复;
6:欢迎语回复;
7:并发超限回复;
8:全局干预知识;
9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;
10:任务流程答案回复;
11:搜索引擎回复;
12:知识润色后回复;
13:图片理解回复;
14:实时文档回复;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyMethod;

    /**
     * @var array 选项卡, 用于多轮对话
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCards;

    /**
     * @var TaskFlowInfo 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFlow;

    /**
     * @var array 用户传入的文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileInfos;

    /**
     * @var array 参考来源引用位置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuoteInfos;

    /**
     * @var AgentThought Agent的思考过程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentThought;

    /**
     * @var ExtraInfo 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var WorkflowInfo 工作流信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlow;

    /**
     * @var array Widget信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widgets;

    /**
     * @var WidgetAction Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetAction;

    /**
     * @param string $Content 内容
     * @param string $SessionId 当前记录所对应的 Session ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId 记录ID
     * @param string $RelatedRecordId 关联记录ID
     * @param boolean $IsFromSelf 是否来自自己
     * @param string $FromName 发送者名称
     * @param string $FromAvatar 发送者头像
     * @param string $Timestamp 时间戳
     * @param boolean $HasRead 是否已读
     * @param integer $Score 评价
     * @param boolean $CanRating 是否评分
     * @param boolean $CanFeedback 是否展示反馈按钮
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 记录类型
     * @param array $References 引用来源
     * @param array $Reasons 评价原因
     * @param boolean $IsLlmGenerated 是否大模型
     * @param array $ImageUrls 图片链接，可公有读
注意：此字段可能返回 null，表示取不到有效值。
     * @param TokenStat $TokenStat 当次 token 统计信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyMethod 回复方式
1:大模型直接回复;
2:保守回复, 未知问题回复;
3:拒答问题回复;
4:敏感回复;
5:问答对直接回复, 已采纳问答对优先回复;
6:欢迎语回复;
7:并发超限回复;
8:全局干预知识;
9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;
10:任务流程答案回复;
11:搜索引擎回复;
12:知识润色后回复;
13:图片理解回复;
14:实时文档回复;
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCards 选项卡, 用于多轮对话
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskFlowInfo $TaskFlow 任务信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileInfos 用户传入的文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfos 参考来源引用位置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentThought $AgentThought Agent的思考过程信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtraInfo $ExtraInfo 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowInfo $WorkFlow 工作流信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Widgets Widget信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param WidgetAction $WidgetAction Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("IsFromSelf",$param) and $param["IsFromSelf"] !== null) {
            $this->IsFromSelf = $param["IsFromSelf"];
        }

        if (array_key_exists("FromName",$param) and $param["FromName"] !== null) {
            $this->FromName = $param["FromName"];
        }

        if (array_key_exists("FromAvatar",$param) and $param["FromAvatar"] !== null) {
            $this->FromAvatar = $param["FromAvatar"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("HasRead",$param) and $param["HasRead"] !== null) {
            $this->HasRead = $param["HasRead"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("CanRating",$param) and $param["CanRating"] !== null) {
            $this->CanRating = $param["CanRating"];
        }

        if (array_key_exists("CanFeedback",$param) and $param["CanFeedback"] !== null) {
            $this->CanFeedback = $param["CanFeedback"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new MsgRecordReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("IsLlmGenerated",$param) and $param["IsLlmGenerated"] !== null) {
            $this->IsLlmGenerated = $param["IsLlmGenerated"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("TokenStat",$param) and $param["TokenStat"] !== null) {
            $this->TokenStat = new TokenStat();
            $this->TokenStat->deserialize($param["TokenStat"]);
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("TaskFlow",$param) and $param["TaskFlow"] !== null) {
            $this->TaskFlow = new TaskFlowInfo();
            $this->TaskFlow->deserialize($param["TaskFlow"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new QuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("AgentThought",$param) and $param["AgentThought"] !== null) {
            $this->AgentThought = new AgentThought();
            $this->AgentThought->deserialize($param["AgentThought"]);
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = new ExtraInfo();
            $this->ExtraInfo->deserialize($param["ExtraInfo"]);
        }

        if (array_key_exists("WorkFlow",$param) and $param["WorkFlow"] !== null) {
            $this->WorkFlow = new WorkflowInfo();
            $this->WorkFlow->deserialize($param["WorkFlow"]);
        }

        if (array_key_exists("Widgets",$param) and $param["Widgets"] !== null) {
            $this->Widgets = [];
            foreach ($param["Widgets"] as $key => $value){
                $obj = new Widget();
                $obj->deserialize($value);
                array_push($this->Widgets, $obj);
            }
        }

        if (array_key_exists("WidgetAction",$param) and $param["WidgetAction"] !== null) {
            $this->WidgetAction = new WidgetAction();
            $this->WidgetAction->deserialize($param["WidgetAction"]);
        }
    }
}
