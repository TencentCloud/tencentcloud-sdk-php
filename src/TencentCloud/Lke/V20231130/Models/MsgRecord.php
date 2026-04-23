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
 * @method string getContent() 获取<p>内容</p>
 * @method void setContent(string $Content) 设置<p>内容</p>
 * @method string getSessionId() 获取<p>当前记录所对应的 Session ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>当前记录所对应的 Session ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取<p>记录ID</p>
 * @method void setRecordId(string $RecordId) 设置<p>记录ID</p>
 * @method string getRelatedRecordId() 获取<p>关联记录ID</p>
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置<p>关联记录ID</p>
 * @method boolean getIsFromSelf() 获取<p>是否来自自己</p>
 * @method void setIsFromSelf(boolean $IsFromSelf) 设置<p>是否来自自己</p>
 * @method string getFromName() 获取<p>发送者名称</p>
 * @method void setFromName(string $FromName) 设置<p>发送者名称</p>
 * @method string getFromAvatar() 获取<p>发送者头像</p>
 * @method void setFromAvatar(string $FromAvatar) 设置<p>发送者头像</p>
 * @method string getTimestamp() 获取<p>时间戳</p>
 * @method void setTimestamp(string $Timestamp) 设置<p>时间戳</p>
 * @method boolean getHasRead() 获取<p>是否已读</p>
 * @method void setHasRead(boolean $HasRead) 设置<p>是否已读</p>
 * @method integer getScore() 获取<p>评价</p>
 * @method void setScore(integer $Score) 设置<p>评价</p>
 * @method boolean getCanRating() 获取<p>是否评分</p>
 * @method void setCanRating(boolean $CanRating) 设置<p>是否评分</p>
 * @method boolean getCanFeedback() 获取<p>是否展示反馈按钮</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanFeedback(boolean $CanFeedback) 设置<p>是否展示反馈按钮</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取<p>记录类型</p>
 * @method void setType(integer $Type) 设置<p>记录类型</p>
 * @method array getReferences() 获取<p>引用来源</p>
 * @method void setReferences(array $References) 设置<p>引用来源</p>
 * @method array getReasons() 获取<p>评价原因</p>
 * @method void setReasons(array $Reasons) 设置<p>评价原因</p>
 * @method boolean getIsLlmGenerated() 获取<p>是否大模型</p>
 * @method void setIsLlmGenerated(boolean $IsLlmGenerated) 设置<p>是否大模型</p>
 * @method array getImageUrls() 获取<p>图片链接，可公有读</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageUrls(array $ImageUrls) 设置<p>图片链接，可公有读</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TokenStat getTokenStat() 获取<p>当次 token 统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenStat(TokenStat $TokenStat) 设置<p>当次 token 统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyMethod() 获取<p>回复方式<br>1:大模型直接回复;<br>2:保守回复, 未知问题回复;<br>3:拒答问题回复;<br>4:敏感回复;<br>5:问答对直接回复, 已采纳问答对优先回复;<br>6:欢迎语回复;<br>7:并发超限回复;<br>8:全局干预知识;<br>9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;<br>10:任务流程答案回复;<br>11:搜索引擎回复;<br>12:知识润色后回复;<br>13:图片理解回复;<br>14:实时文档回复;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyMethod(integer $ReplyMethod) 设置<p>回复方式<br>1:大模型直接回复;<br>2:保守回复, 未知问题回复;<br>3:拒答问题回复;<br>4:敏感回复;<br>5:问答对直接回复, 已采纳问答对优先回复;<br>6:欢迎语回复;<br>7:并发超限回复;<br>8:全局干预知识;<br>9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;<br>10:任务流程答案回复;<br>11:搜索引擎回复;<br>12:知识润色后回复;<br>13:图片理解回复;<br>14:实时文档回复;</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCards() 获取<p>选项卡, 用于多轮对话</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCards(array $OptionCards) 设置<p>选项卡, 用于多轮对话</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskFlowInfo getTaskFlow() 获取<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskFlow(TaskFlowInfo $TaskFlow) 设置<p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileInfos() 获取<p>用户传入的文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileInfos(array $FileInfos) 设置<p>用户传入的文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfos() 获取<p>参考来源引用位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuoteInfos(array $QuoteInfos) 设置<p>参考来源引用位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentThought getAgentThought() 获取<p>Agent的思考过程信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAgentThought(AgentThought $AgentThought) 设置<p>Agent的思考过程信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExtraInfo getExtraInfo() 获取<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(ExtraInfo $ExtraInfo) 设置<p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkflowInfo getWorkFlow() 获取<p>工作流信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkFlow(WorkflowInfo $WorkFlow) 设置<p>工作流信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWidgets() 获取<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgets(array $Widgets) 设置<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WidgetAction getWidgetAction() 获取<p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetAction(WidgetAction $WidgetAction) 设置<p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAudios() 获取<p>音频信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudios(array $Audios) 设置<p>音频信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOptionMode() 获取<p>标识选项卡为单选还是双选</p><p>枚举值：</p><ul><li>0： 单选</li><li>1： 双选</li></ul>
 * @method void setOptionMode(integer $OptionMode) 设置<p>标识选项卡为单选还是双选</p><p>枚举值：</p><ul><li>0： 单选</li><li>1： 双选</li></ul>
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string <p>内容</p>
     */
    public $Content;

    /**
     * @var string <p>当前记录所对应的 Session ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>记录ID</p>
     */
    public $RecordId;

    /**
     * @var string <p>关联记录ID</p>
     */
    public $RelatedRecordId;

    /**
     * @var boolean <p>是否来自自己</p>
     */
    public $IsFromSelf;

    /**
     * @var string <p>发送者名称</p>
     */
    public $FromName;

    /**
     * @var string <p>发送者头像</p>
     */
    public $FromAvatar;

    /**
     * @var string <p>时间戳</p>
     */
    public $Timestamp;

    /**
     * @var boolean <p>是否已读</p>
     */
    public $HasRead;

    /**
     * @var integer <p>评价</p>
     */
    public $Score;

    /**
     * @var boolean <p>是否评分</p>
     */
    public $CanRating;

    /**
     * @var boolean <p>是否展示反馈按钮</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanFeedback;

    /**
     * @var integer <p>记录类型</p>
     */
    public $Type;

    /**
     * @var array <p>引用来源</p>
     */
    public $References;

    /**
     * @var array <p>评价原因</p>
     */
    public $Reasons;

    /**
     * @var boolean <p>是否大模型</p>
     */
    public $IsLlmGenerated;

    /**
     * @var array <p>图片链接，可公有读</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageUrls;

    /**
     * @var TokenStat <p>当次 token 统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenStat;

    /**
     * @var integer <p>回复方式<br>1:大模型直接回复;<br>2:保守回复, 未知问题回复;<br>3:拒答问题回复;<br>4:敏感回复;<br>5:问答对直接回复, 已采纳问答对优先回复;<br>6:欢迎语回复;<br>7:并发超限回复;<br>8:全局干预知识;<br>9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;<br>10:任务流程答案回复;<br>11:搜索引擎回复;<br>12:知识润色后回复;<br>13:图片理解回复;<br>14:实时文档回复;</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyMethod;

    /**
     * @var array <p>选项卡, 用于多轮对话</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCards;

    /**
     * @var TaskFlowInfo <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskFlow;

    /**
     * @var array <p>用户传入的文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileInfos;

    /**
     * @var array <p>参考来源引用位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuoteInfos;

    /**
     * @var AgentThought <p>Agent的思考过程信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AgentThought;

    /**
     * @var ExtraInfo <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var WorkflowInfo <p>工作流信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkFlow;

    /**
     * @var array <p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widgets;

    /**
     * @var WidgetAction <p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetAction;

    /**
     * @var array <p>音频信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Audios;

    /**
     * @var integer <p>标识选项卡为单选还是双选</p><p>枚举值：</p><ul><li>0： 单选</li><li>1： 双选</li></ul>
     */
    public $OptionMode;

    /**
     * @param string $Content <p>内容</p>
     * @param string $SessionId <p>当前记录所对应的 Session ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId <p>记录ID</p>
     * @param string $RelatedRecordId <p>关联记录ID</p>
     * @param boolean $IsFromSelf <p>是否来自自己</p>
     * @param string $FromName <p>发送者名称</p>
     * @param string $FromAvatar <p>发送者头像</p>
     * @param string $Timestamp <p>时间戳</p>
     * @param boolean $HasRead <p>是否已读</p>
     * @param integer $Score <p>评价</p>
     * @param boolean $CanRating <p>是否评分</p>
     * @param boolean $CanFeedback <p>是否展示反馈按钮</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type <p>记录类型</p>
     * @param array $References <p>引用来源</p>
     * @param array $Reasons <p>评价原因</p>
     * @param boolean $IsLlmGenerated <p>是否大模型</p>
     * @param array $ImageUrls <p>图片链接，可公有读</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TokenStat $TokenStat <p>当次 token 统计信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyMethod <p>回复方式<br>1:大模型直接回复;<br>2:保守回复, 未知问题回复;<br>3:拒答问题回复;<br>4:敏感回复;<br>5:问答对直接回复, 已采纳问答对优先回复;<br>6:欢迎语回复;<br>7:并发超限回复;<br>8:全局干预知识;<br>9:任务流程过程回复, 当历史记录中 task_flow.type = 0 时, 为大模型回复;<br>10:任务流程答案回复;<br>11:搜索引擎回复;<br>12:知识润色后回复;<br>13:图片理解回复;<br>14:实时文档回复;</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCards <p>选项卡, 用于多轮对话</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskFlowInfo $TaskFlow <p>任务信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileInfos <p>用户传入的文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfos <p>参考来源引用位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentThought $AgentThought <p>Agent的思考过程信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExtraInfo $ExtraInfo <p>扩展信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkflowInfo $WorkFlow <p>工作流信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Widgets <p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WidgetAction $WidgetAction <p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Audios <p>音频信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OptionMode <p>标识选项卡为单选还是双选</p><p>枚举值：</p><ul><li>0： 单选</li><li>1： 双选</li></ul>
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

        if (array_key_exists("Audios",$param) and $param["Audios"] !== null) {
            $this->Audios = [];
            foreach ($param["Audios"] as $key => $value){
                $obj = new Audio();
                $obj->deserialize($value);
                array_push($this->Audios, $obj);
            }
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }
    }
}
