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
 * 会话内容参考文献信息
 *
 * @method integer getIndex() 获取引用来源索引ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置引用来源索引ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取参考来源名称
 * @method void setName(string $Name) 设置参考来源名称
 * @method integer getType() 获取参考来源类型
1：问答
2：文档片段
4：联网检索到的内容
 * @method void setType(integer $Type) 设置参考来源类型
1：问答
2：文档片段
4：联网检索到的内容
 * @method DocReference getDocRefer() 获取文档片段参考信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocRefer(DocReference $DocRefer) 设置文档片段参考信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method QaReference getQaRefer() 获取问答参考信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaRefer(QaReference $QaRefer) 设置问答参考信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSearchReference getWebSearchRefer() 获取联网检索内容参考信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSearchRefer(WebSearchReference $WebSearchRefer) 设置联网检索内容参考信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContentReference extends AbstractModel
{
    /**
     * @var integer 引用来源索引ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 参考来源名称
     */
    public $Name;

    /**
     * @var integer 参考来源类型
1：问答
2：文档片段
4：联网检索到的内容
     */
    public $Type;

    /**
     * @var DocReference 文档片段参考信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocRefer;

    /**
     * @var QaReference 问答参考信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaRefer;

    /**
     * @var WebSearchReference 联网检索内容参考信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSearchRefer;

    /**
     * @param integer $Index 引用来源索引ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 参考来源名称
     * @param integer $Type 参考来源类型
1：问答
2：文档片段
4：联网检索到的内容
     * @param DocReference $DocRefer 文档片段参考信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param QaReference $QaRefer 问答参考信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSearchReference $WebSearchRefer 联网检索内容参考信息
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DocRefer",$param) and $param["DocRefer"] !== null) {
            $this->DocRefer = new DocReference();
            $this->DocRefer->deserialize($param["DocRefer"]);
        }

        if (array_key_exists("QaRefer",$param) and $param["QaRefer"] !== null) {
            $this->QaRefer = new QaReference();
            $this->QaRefer->deserialize($param["QaRefer"]);
        }

        if (array_key_exists("WebSearchRefer",$param) and $param["WebSearchRefer"] !== null) {
            $this->WebSearchRefer = new WebSearchReference();
            $this->WebSearchRefer->deserialize($param["WebSearchRefer"]);
        }
    }
}
