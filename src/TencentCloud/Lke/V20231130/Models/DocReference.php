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
 * 文档类参考来源信息
 *
 * @method integer getDocBizId() 获取文档业务ID
 * @method void setDocBizId(integer $DocBizId) 设置文档业务ID
 * @method integer getReferBizId() 获取文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferBizId(integer $ReferBizId) 设置文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocName() 获取文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocName(string $DocName) 设置文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKnowledgeBizId() 获取文档所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeBizId(integer $KnowledgeBizId) 设置文档所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKnowledgeName() 获取文档所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledgeName(string $KnowledgeName) 设置文档所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取文档访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置文档访问地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class DocReference extends AbstractModel
{
    /**
     * @var integer 文档业务ID
     */
    public $DocBizId;

    /**
     * @var integer 文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReferBizId;

    /**
     * @var string 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocName;

    /**
     * @var integer 文档所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeBizId;

    /**
     * @var string 文档所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KnowledgeName;

    /**
     * @var string 文档访问地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param integer $DocBizId 文档业务ID
     * @param integer $ReferBizId 文档片段参考ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocName 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KnowledgeBizId 文档所在知识库业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KnowledgeName 文档所在知识库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 文档访问地址
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("ReferBizId",$param) and $param["ReferBizId"] !== null) {
            $this->ReferBizId = $param["ReferBizId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("KnowledgeBizId",$param) and $param["KnowledgeBizId"] !== null) {
            $this->KnowledgeBizId = $param["KnowledgeBizId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
