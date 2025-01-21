<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Agent思考过程调试信息
 *
 * @method string getContent() 获取模型思考内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置模型思考内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayContent() 获取展示的具体文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayContent(string $DisplayContent) 设置展示的具体文本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisplayType() 获取展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayType(integer $DisplayType) 设置展示类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuoteInfos() 获取搜索引擎展示的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuoteInfos(array $QuoteInfos) 设置搜索引擎展示的索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReferences() 获取具体的参考来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(array $References) 设置具体的参考来源
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentProcedureDebugging extends AbstractModel
{
    /**
     * @var string 模型思考内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 展示的具体文本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayContent;

    /**
     * @var integer 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayType;

    /**
     * @var array 搜索引擎展示的索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuoteInfos;

    /**
     * @var array 具体的参考来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @param string $Content 模型思考内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayContent 展示的具体文本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DisplayType 展示类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QuoteInfos 搜索引擎展示的索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $References 具体的参考来源
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

        if (array_key_exists("DisplayContent",$param) and $param["DisplayContent"] !== null) {
            $this->DisplayContent = $param["DisplayContent"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
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
                $obj = new AgentReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
