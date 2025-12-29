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
 * @method string getType() 获取消息内容类型
text：文本
image：图片
file：文件
option_cards：选项卡
custom_params：用户自定义业务参数
sandbox：云桌面
custom_variables：自定义输入参数
web_search: 网页搜索内容
file_collection：文件收集信息
widget：widget信息
widget_action：用户端widget动作信息
 * @method void setType(string $Type) 设置消息内容类型
text：文本
image：图片
file：文件
option_cards：选项卡
custom_params：用户自定义业务参数
sandbox：云桌面
custom_variables：自定义输入参数
web_search: 网页搜索内容
file_collection：文件收集信息
widget：widget信息
widget_action：用户端widget动作信息
 * @method string getText() 获取文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfos() 获取引用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuoteInfos(array $QuoteInfos) 设置引用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReferences() 获取参考文献信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(array $References) 设置参考文献信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageInfoContent getImage() 获取图片信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(ImageInfoContent $Image) 设置图片信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfoContent getFile() 获取文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFile(FileInfoContent $File) 设置文件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCards() 获取选项卡信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCards(array $OptionCards) 设置选项卡信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomParams() 获取用户自定义业务参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomParams(array $CustomParams) 设置用户自定义业务参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomVariables() 获取自定义变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomVariables(array $CustomVariables) 设置自定义变量
注意：此字段可能返回 null，表示取不到有效值。
 * @method SandboxContent getSandbox() 获取沙盒信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSandbox(SandboxContent $Sandbox) 设置沙盒信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSearchContent getWebSearch() 获取网页搜索内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSearch(WebSearchContent $WebSearch) 设置网页搜索内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileCollection getFileCollection() 获取文件收集信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCollection(FileCollection $FileCollection) 设置文件收集信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Widget getWidget() 获取Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidget(Widget $Widget) 设置Widget信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method WidgetAction getWidgetAction() 获取Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgetAction(WidgetAction $WidgetAction) 设置Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Content extends AbstractModel
{
    /**
     * @var string 消息内容类型
text：文本
image：图片
file：文件
option_cards：选项卡
custom_params：用户自定义业务参数
sandbox：云桌面
custom_variables：自定义输入参数
web_search: 网页搜索内容
file_collection：文件收集信息
widget：widget信息
widget_action：用户端widget动作信息
     */
    public $Type;

    /**
     * @var string 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 引用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuoteInfos;

    /**
     * @var array 参考文献信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @var ImageInfoContent 图片信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var FileInfoContent 文件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $File;

    /**
     * @var array 选项卡信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCards;

    /**
     * @var array 用户自定义业务参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomParams;

    /**
     * @var array 自定义变量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomVariables;

    /**
     * @var SandboxContent 沙盒信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sandbox;

    /**
     * @var WebSearchContent 网页搜索内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSearch;

    /**
     * @var FileCollection 文件收集信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCollection;

    /**
     * @var Widget Widget信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widget;

    /**
     * @var WidgetAction Widget动作信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WidgetAction;

    /**
     * @param string $Type 消息内容类型
text：文本
image：图片
file：文件
option_cards：选项卡
custom_params：用户自定义业务参数
sandbox：云桌面
custom_variables：自定义输入参数
web_search: 网页搜索内容
file_collection：文件收集信息
widget：widget信息
widget_action：用户端widget动作信息
     * @param string $Text 文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfos 引用信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $References 参考文献信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageInfoContent $Image 图片信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfoContent $File 文件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCards 选项卡信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomParams 用户自定义业务参数信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomVariables 自定义变量
注意：此字段可能返回 null，表示取不到有效值。
     * @param SandboxContent $Sandbox 沙盒信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSearchContent $WebSearch 网页搜索内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileCollection $FileCollection 文件收集信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Widget $Widget Widget信息
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
    }
}
