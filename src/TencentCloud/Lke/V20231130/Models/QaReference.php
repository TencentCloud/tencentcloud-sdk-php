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
 * 问答对参考信息
 *
 * @method integer getQaBizId() 获取问答业务ID
 * @method void setQaBizId(integer $QaBizId) 设置问答业务ID
 * @method integer getReferBizId() 获取文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferBizId(integer $ReferBizId) 设置文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKnowledgeBizId() 获取问答所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeBizId(integer $KnowledgeBizId) 设置问答所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeName() 获取问答所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeName(string $KnowledgeName) 设置问答所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class QaReference extends AbstractModel
{
    /**
     * @var integer 问答业务ID
     */
    public $QaBizId;

    /**
     * @var integer 文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferBizId;

    /**
     * @var integer 问答所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeBizId;

    /**
     * @var string 问答所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeName;

    /**
     * @param integer $QaBizId 问答业务ID
     * @param integer $ReferBizId 文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KnowledgeBizId 问答所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeName 问答所在知识库名称
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }
    }
}
