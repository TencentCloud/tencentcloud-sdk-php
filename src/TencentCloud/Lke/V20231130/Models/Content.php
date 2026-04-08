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
 * 对话记录内容详情
 *
 * @method string getType() 获取<p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
 * @method void setType(string $Type) 设置<p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
 * @method string getText() 获取<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfos() 获取<p>引用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuoteInfos(array $QuoteInfos) 设置<p>引用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReferences() 获取<p>参考文献信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(array $References) 设置<p>参考文献信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfoContent getImage() 获取<p>图片信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(ImageInfoContent $Image) 设置<p>图片信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfoContent getFile() 获取<p>文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFile(FileInfoContent $File) 设置<p>文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCards() 获取<p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCards(array $OptionCards) 设置<p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomParams() 获取<p>用户自定义业务参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomParams(array $CustomParams) 设置<p>用户自定义业务参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomVariables() 获取<p>自定义变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomVariables(array $CustomVariables) 设置<p>自定义变量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SandboxContent getSandbox() 获取<p>沙盒信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSandbox(SandboxContent $Sandbox) 设置<p>沙盒信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSearchContent getWebSearch() 获取<p>网页搜索内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSearch(WebSearchContent $WebSearch) 设置<p>网页搜索内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileCollection getFileCollection() 获取<p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCollection(FileCollection $FileCollection) 设置<p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Widget getWidget() 获取<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidget(Widget $Widget) 设置<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WidgetAction getWidgetAction() 获取<p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetAction(WidgetAction $WidgetAction) 设置<p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTasks() 获取<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTasks(array $Tasks) 设置<p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Questionnaire getQuestionnaire() 获取<p>问卷信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuestionnaire(Questionnaire $Questionnaire) 设置<p>问卷信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOptionMode() 获取<p>选项卡模式</p>
 * @method void setOptionMode(integer $OptionMode) 设置<p>选项卡模式</p>
 */
class Content extends AbstractModel
{
    /**
     * @var string <p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
     */
    public $Type;

    /**
     * @var string <p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array <p>引用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuoteInfos;

    /**
     * @var array <p>参考文献信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @var ImageInfoContent <p>图片信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var FileInfoContent <p>文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $File;

    /**
     * @var array <p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCards;

    /**
     * @var array <p>用户自定义业务参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomParams;

    /**
     * @var array <p>自定义变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomVariables;

    /**
     * @var SandboxContent <p>沙盒信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sandbox;

    /**
     * @var WebSearchContent <p>网页搜索内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSearch;

    /**
     * @var FileCollection <p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCollection;

    /**
     * @var Widget <p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widget;

    /**
     * @var WidgetAction <p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetAction;

    /**
     * @var array <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tasks;

    /**
     * @var Questionnaire <p>问卷信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Questionnaire;

    /**
     * @var integer <p>选项卡模式</p>
     */
    public $OptionMode;

    /**
     * @param string $Type <p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
     * @param string $Text <p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfos <p>引用信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $References <p>参考文献信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfoContent $Image <p>图片信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfoContent $File <p>文件信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCards <p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomParams <p>用户自定义业务参数信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomVariables <p>自定义变量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SandboxContent $Sandbox <p>沙盒信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSearchContent $WebSearch <p>网页搜索内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileCollection $FileCollection <p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Widget $Widget <p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WidgetAction $WidgetAction <p>Widget动作信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tasks <p>任务列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Questionnaire $Questionnaire <p>问卷信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OptionMode <p>选项卡模式</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("QuoteInfos",$param) and $param["QuoteInfos"] !== null) {
            $this->QuoteInfos = [];
            foreach ($param["QuoteInfos"] as $key => $value){
                $obj = new QuoteInfo();
                $obj->deserialize($value);
                array_push($this->QuoteInfos, $obj);
            }
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ContentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageInfoContent();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new FileInfoContent();
            $this->File->deserialize($param["File"]);
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("CustomParams",$param) and $param["CustomParams"] !== null) {
            $this->CustomParams = $param["CustomParams"];
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = $param["CustomVariables"];
        }

        if (array_key_exists("Sandbox",$param) and $param["Sandbox"] !== null) {
            $this->Sandbox = new SandboxContent();
            $this->Sandbox->deserialize($param["Sandbox"]);
        }

        if (array_key_exists("WebSearch",$param) and $param["WebSearch"] !== null) {
            $this->WebSearch = new WebSearchContent();
            $this->WebSearch->deserialize($param["WebSearch"]);
        }

        if (array_key_exists("FileCollection",$param) and $param["FileCollection"] !== null) {
            $this->FileCollection = new FileCollection();
            $this->FileCollection->deserialize($param["FileCollection"]);
        }

        if (array_key_exists("Widget",$param) and $param["Widget"] !== null) {
            $this->Widget = new Widget();
            $this->Widget->deserialize($param["Widget"]);
        }

        if (array_key_exists("WidgetAction",$param) and $param["WidgetAction"] !== null) {
            $this->WidgetAction = new WidgetAction();
            $this->WidgetAction->deserialize($param["WidgetAction"]);
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new AgentTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Questionnaire",$param) and $param["Questionnaire"] !== null) {
            $this->Questionnaire = new Questionnaire();
            $this->Questionnaire->deserialize($param["Questionnaire"]);
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }
    }
}
