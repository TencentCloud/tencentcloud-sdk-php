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
 * 回复内容的详情
 *
 * @method string getType() 获取<p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
 * @method void setType(string $Type) 设置<p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
 * @method string getText() 获取<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(string $Text) 设置<p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOptionCardList() 获取<p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionCardList(array $OptionCardList) 设置<p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConversationFileCollection getFileCollection() 获取<p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCollection(ConversationFileCollection $FileCollection) 设置<p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConversationWidget getWidget() 获取<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidget(ConversationWidget $Widget) 设置<p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReplyContent extends AbstractModel
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
     * @var array <p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionCardList;

    /**
     * @var ConversationFileCollection <p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCollection;

    /**
     * @var ConversationWidget <p>Widget信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widget;

    /**
     * @param string $Type <p>消息内容类型<br>text：文本<br>image：图片<br>file：文件<br>option_cards：选项卡<br>custom_params：用户自定义业务参数<br>sandbox：云桌面<br>custom_variables：自定义输入参数<br>web_search: 网页搜索内容<br>file_collection：文件收集信息<br>widget：widget信息<br>widget_action：用户端widget动作信息</p>
     * @param string $Text <p>文本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OptionCardList <p>选项卡信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConversationFileCollection $FileCollection <p>文件收集信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConversationWidget $Widget <p>Widget信息</p>
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

        if (array_key_exists("OptionCardList",$param) and $param["OptionCardList"] !== null) {
            $this->OptionCardList = $param["OptionCardList"];
        }

        if (array_key_exists("FileCollection",$param) and $param["FileCollection"] !== null) {
            $this->FileCollection = new ConversationFileCollection();
            $this->FileCollection->deserialize($param["FileCollection"]);
        }

        if (array_key_exists("Widget",$param) and $param["Widget"] !== null) {
            $this->Widget = new ConversationWidget();
            $this->Widget->deserialize($param["Widget"]);
        }
    }
}
