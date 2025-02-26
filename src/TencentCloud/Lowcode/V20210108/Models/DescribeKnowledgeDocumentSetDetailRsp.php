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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上传知识库文档返回结果
 *
 * @method integer getCount() 获取获取的数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置获取的数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method KnowledgeDocumentSet getDocumentSet() 获取文档信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocumentSet(KnowledgeDocumentSet $DocumentSet) 设置文档信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeKnowledgeDocumentSetDetailRsp extends AbstractModel
{
    /**
     * @var integer 获取的数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @var KnowledgeDocumentSet 文档信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocumentSet;

    /**
     * @param integer $Count 获取的数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param KnowledgeDocumentSet $DocumentSet 文档信息
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("DocumentSet",$param) and $param["DocumentSet"] !== null) {
            $this->DocumentSet = new KnowledgeDocumentSet();
            $this->DocumentSet->deserialize($param["DocumentSet"]);
        }
    }
}
