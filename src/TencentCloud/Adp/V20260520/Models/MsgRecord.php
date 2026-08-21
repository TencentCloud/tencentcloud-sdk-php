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
 * MsgRecord
 *
 * @method string getAnswer() 获取答案
 * @method void setAnswer(string $Answer) 设置答案
 * @method string getAppId() 获取应用ID
 * @method void setAppId(string $AppId) 设置应用ID
 * @method string getCategoryId() 获取分类ID
 * @method void setCategoryId(string $CategoryId) 设置分类ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getIntent() 获取意图
 * @method void setIntent(string $Intent) 设置意图
 * @method string getIntentCategory() 获取意图分类
 * @method void setIntentCategory(string $IntentCategory) 设置意图分类
 * @method boolean getIsSmart() 获取是否是智能分类
 * @method void setIsSmart(boolean $IsSmart) 设置是否是智能分类
 * @method string getQuestion() 获取问题
 * @method void setQuestion(string $Question) 设置问题
 * @method string getRecordId() 获取记录ID
 * @method void setRecordId(string $RecordId) 设置记录ID
 * @method integer getReplyMethod() 获取表示消息的回复方式，枚举 ReplyMethod：0=未指定, 1=大模型直接回复, 2=保守回复, 3=拒答, 4=敏感回复, 5=问答对优先回复, 6=欢迎语, 7=并发超限, 8=全局干预知识, 9=任务流程过程回复, 10=任务流程答案, 11=搜索引擎, 12=知识润色, 13=图片理解, 14=实时文档, 15=澄清确认, 16=工作流回复, 17=工作流结束, 18=智能体回复, 19=多意图, 20=中断, 21=智能体计划预览, 22=智能体计划结果, 23=智能体结构化输出。
 * @method void setReplyMethod(integer $ReplyMethod) 设置表示消息的回复方式，枚举 ReplyMethod：0=未指定, 1=大模型直接回复, 2=保守回复, 3=拒答, 4=敏感回复, 5=问答对优先回复, 6=欢迎语, 7=并发超限, 8=全局干预知识, 9=任务流程过程回复, 10=任务流程答案, 11=搜索引擎, 12=知识润色, 13=图片理解, 14=实时文档, 15=澄清确认, 16=工作流回复, 17=工作流结束, 18=智能体回复, 19=多意图, 20=中断, 21=智能体计划预览, 22=智能体计划结果, 23=智能体结构化输出。
 * @method MsgRecordResult getResult() 获取返回结果
 * @method void setResult(MsgRecordResult $Result) 设置返回结果
 * @method integer getScore() 获取分数
 * @method void setScore(integer $Score) 设置分数
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method MsgRecordSource getSource() 获取来源
 * @method void setSource(MsgRecordSource $Source) 设置来源
 * @method string getTraceId() 获取trace_id
 * @method void setTraceId(string $TraceId) 设置trace_id
 */
class MsgRecord extends AbstractModel
{
    /**
     * @var string 答案
     */
    public $Answer;

    /**
     * @var string 应用ID
     */
    public $AppId;

    /**
     * @var string 分类ID
     */
    public $CategoryId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 意图
     */
    public $Intent;

    /**
     * @var string 意图分类
     */
    public $IntentCategory;

    /**
     * @var boolean 是否是智能分类
     */
    public $IsSmart;

    /**
     * @var string 问题
     */
    public $Question;

    /**
     * @var string 记录ID
     */
    public $RecordId;

    /**
     * @var integer 表示消息的回复方式，枚举 ReplyMethod：0=未指定, 1=大模型直接回复, 2=保守回复, 3=拒答, 4=敏感回复, 5=问答对优先回复, 6=欢迎语, 7=并发超限, 8=全局干预知识, 9=任务流程过程回复, 10=任务流程答案, 11=搜索引擎, 12=知识润色, 13=图片理解, 14=实时文档, 15=澄清确认, 16=工作流回复, 17=工作流结束, 18=智能体回复, 19=多意图, 20=中断, 21=智能体计划预览, 22=智能体计划结果, 23=智能体结构化输出。
     */
    public $ReplyMethod;

    /**
     * @var MsgRecordResult 返回结果
     */
    public $Result;

    /**
     * @var integer 分数
     */
    public $Score;

    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var MsgRecordSource 来源
     */
    public $Source;

    /**
     * @var string trace_id
     */
    public $TraceId;

    /**
     * @param string $Answer 答案
     * @param string $AppId 应用ID
     * @param string $CategoryId 分类ID
     * @param string $CreateTime 创建时间
     * @param string $Intent 意图
     * @param string $IntentCategory 意图分类
     * @param boolean $IsSmart 是否是智能分类
     * @param string $Question 问题
     * @param string $RecordId 记录ID
     * @param integer $ReplyMethod 表示消息的回复方式，枚举 ReplyMethod：0=未指定, 1=大模型直接回复, 2=保守回复, 3=拒答, 4=敏感回复, 5=问答对优先回复, 6=欢迎语, 7=并发超限, 8=全局干预知识, 9=任务流程过程回复, 10=任务流程答案, 11=搜索引擎, 12=知识润色, 13=图片理解, 14=实时文档, 15=澄清确认, 16=工作流回复, 17=工作流结束, 18=智能体回复, 19=多意图, 20=中断, 21=智能体计划预览, 22=智能体计划结果, 23=智能体结构化输出。
     * @param MsgRecordResult $Result 返回结果
     * @param integer $Score 分数
     * @param string $SessionId 会话ID
     * @param MsgRecordSource $Source 来源
     * @param string $TraceId trace_id
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Intent",$param) and $param["Intent"] !== null) {
            $this->Intent = $param["Intent"];
        }

        if (array_key_exists("IntentCategory",$param) and $param["IntentCategory"] !== null) {
            $this->IntentCategory = $param["IntentCategory"];
        }

        if (array_key_exists("IsSmart",$param) and $param["IsSmart"] !== null) {
            $this->IsSmart = $param["IsSmart"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("ReplyMethod",$param) and $param["ReplyMethod"] !== null) {
            $this->ReplyMethod = $param["ReplyMethod"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new MsgRecordResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new MsgRecordSource();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }
    }
}
