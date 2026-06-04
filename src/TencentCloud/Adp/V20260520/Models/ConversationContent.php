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
 * Content 消息内容信息
 *
 * @method string getText() 获取<p>文本内容</p>
 * @method void setText(string $Text) 设置<p>文本内容</p>
 * @method string getType() 获取<p>内容类型, text：文本,image：图片,file：文件,custom_variables：自定义输入参数信息,widget_action：widget动作信息</p>
 * @method void setType(string $Type) 设置<p>内容类型, text：文本,image：图片,file：文件,custom_variables：自定义输入参数信息,widget_action：widget动作信息</p>
 * @method array getCustomParamList() 获取<p>自定义参数数据</p>
 * @method void setCustomParamList(array $CustomParamList) 设置<p>自定义参数数据</p>
 * @method array getCustomParams() 获取<p>自定义参数数据</p>
 * @method void setCustomParams(array $CustomParams) 设置<p>自定义参数数据</p>
 * @method string getCustomVariablesData() 获取<p>自定义变量数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomVariablesData(string $CustomVariablesData) 设置<p>自定义变量数据</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnterpriseCharts() 获取<p>企业表单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseCharts(string $EnterpriseCharts) 设置<p>企业表单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCardList() 获取<p>选项卡列表</p>
 * @method void setOptionCardList(array $OptionCardList) 设置<p>选项卡列表</p>
 * @method array getOptionCards() 获取<p>选项卡列表</p>
 * @method void setOptionCards(array $OptionCards) 设置<p>选项卡列表</p>
 * @method integer getOptionMode() 获取<p>选项卡模式 枚举值: 0-OPTION_MODE_SINGLE(单选), 1-OPTION_MODE_MULTI(多选)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionMode(integer $OptionMode) 设置<p>选项卡模式 枚举值: 0-OPTION_MODE_SINGLE(单选), 1-OPTION_MODE_MULTI(多选)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfoList() 获取<p>引用角标信息列表</p>
 * @method void setQuoteInfoList(array $QuoteInfoList) 设置<p>引用角标信息列表</p>
 * @method array getQuoteInfos() 获取<p>引用角标信息列表</p>
 * @method void setQuoteInfos(array $QuoteInfos) 设置<p>引用角标信息列表</p>
 * @method array getReferenceList() 获取<p>参考来源列表</p>
 * @method void setReferenceList(array $ReferenceList) 设置<p>参考来源列表</p>
 * @method array getReferences() 获取<p>参考来源列表</p>
 * @method void setReferences(array $References) 设置<p>参考来源列表</p>
 * @method string getRelatedRecordId() 获取<p>关联记录 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedRecordId(string $RelatedRecordId) 设置<p>关联记录 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskList() 获取<p>智能体任务列表</p>
 * @method void setTaskList(array $TaskList) 设置<p>智能体任务列表</p>
 * @method array getTasks() 获取<p>智能体任务列表</p>
 * @method void setTasks(array $Tasks) 设置<p>智能体任务列表</p>
 * @method string getWorkflowInput() 获取<p>工作流输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkflowInput(string $WorkflowInput) 设置<p>工作流输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ConversationContent extends AbstractModel
{
    /**
     * @var string <p>文本内容</p>
     */
    public $Text;

    /**
     * @var string <p>内容类型, text：文本,image：图片,file：文件,custom_variables：自定义输入参数信息,widget_action：widget动作信息</p>
     */
    public $Type;

    /**
     * @var array <p>自定义参数数据</p>
     */
    public $CustomParamList;

    /**
     * @var array <p>自定义参数数据</p>
     */
    public $CustomParams;

    /**
     * @var string <p>自定义变量数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomVariablesData;

    /**
     * @var string <p>企业表单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseCharts;

    /**
     * @var array <p>选项卡列表</p>
     */
    public $OptionCardList;

    /**
     * @var array <p>选项卡列表</p>
     */
    public $OptionCards;

    /**
     * @var integer <p>选项卡模式 枚举值: 0-OPTION_MODE_SINGLE(单选), 1-OPTION_MODE_MULTI(多选)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionMode;

    /**
     * @var array <p>引用角标信息列表</p>
     */
    public $QuoteInfoList;

    /**
     * @var array <p>引用角标信息列表</p>
     */
    public $QuoteInfos;

    /**
     * @var array <p>参考来源列表</p>
     */
    public $ReferenceList;

    /**
     * @var array <p>参考来源列表</p>
     */
    public $References;

    /**
     * @var string <p>关联记录 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedRecordId;

    /**
     * @var array <p>智能体任务列表</p>
     */
    public $TaskList;

    /**
     * @var array <p>智能体任务列表</p>
     */
    public $Tasks;

    /**
     * @var string <p>工作流输入参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkflowInput;

    /**
     * @param string $Text <p>文本内容</p>
     * @param string $Type <p>内容类型, text：文本,image：图片,file：文件,custom_variables：自定义输入参数信息,widget_action：widget动作信息</p>
     * @param array $CustomParamList <p>自定义参数数据</p>
     * @param array $CustomParams <p>自定义参数数据</p>
     * @param string $CustomVariablesData <p>自定义变量数据</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnterpriseCharts <p>企业表单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCardList <p>选项卡列表</p>
     * @param array $OptionCards <p>选项卡列表</p>
     * @param integer $OptionMode <p>选项卡模式 枚举值: 0-OPTION_MODE_SINGLE(单选), 1-OPTION_MODE_MULTI(多选)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfoList <p>引用角标信息列表</p>
     * @param array $QuoteInfos <p>引用角标信息列表</p>
     * @param array $ReferenceList <p>参考来源列表</p>
     * @param array $References <p>参考来源列表</p>
     * @param string $RelatedRecordId <p>关联记录 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskList <p>智能体任务列表</p>
     * @param array $Tasks <p>智能体任务列表</p>
     * @param string $WorkflowInput <p>工作流输入参数</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CustomParamList",$param) and $param["CustomParamList"] !== null) {
            $this->CustomParamList = $param["CustomParamList"];
        }

        if (array_key_exists("CustomParams",$param) and $param["CustomParams"] !== null) {
            $this->CustomParams = $param["CustomParams"];
        }

        if (array_key_exists("CustomVariablesData",$param) and $param["CustomVariablesData"] !== null) {
            $this->CustomVariablesData = $param["CustomVariablesData"];
        }

        if (array_key_exists("EnterpriseCharts",$param) and $param["EnterpriseCharts"] !== null) {
            $this->EnterpriseCharts = $param["EnterpriseCharts"];
        }

        if (array_key_exists("OptionCardList",$param) and $param["OptionCardList"] !== null) {
            $this->OptionCardList = $param["OptionCardList"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }

        if (array_key_exists("QuoteInfoList",$param) and $param["QuoteInfoList"] !== null) {
            $this->QuoteInfoList = [];
            foreach ($param["QuoteInfoList"] as $key => $value){
                $obj = new ConversationQuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfoList, $obj);
            }
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new ConversationQuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("ReferenceList",$param) and $param["ReferenceList"] !== null) {
            $this->ReferenceList = [];
            foreach ($param["ReferenceList"] as $key => $value){
                $obj = new ConversationReference();
                $obj->deserialize($value);
                array_push($this->ReferenceList, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ConversationReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("RelatedRecordId",$param) and $param["RelatedRecordId"] !== null) {
            $this->RelatedRecordId = $param["RelatedRecordId"];
        }

        if (array_key_exists("TaskList",$param) and $param["TaskList"] !== null) {
            $this->TaskList = [];
            foreach ($param["TaskList"] as $key => $value){
                $obj = new ConversationAgentTask();
                $obj->deserialize($value);
                array_push($this->TaskList, $obj);
            }
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ConversationAgentTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("WorkflowInput",$param) and $param["WorkflowInput"] !== null) {
            $this->WorkflowInput = $param["WorkflowInput"];
        }
    }
}
