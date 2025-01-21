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
 * Agent中的参考来源
 *
 * @method string getDocId() 获取来源文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置来源文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocBizId() 获取文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocName() 获取文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocName(string $DocName) 设置文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQaBizId() 获取问答业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaBizId(string $QaBizId) 设置问答业务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取搜索引擎索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置搜索引擎索引
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置标题
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentReference extends AbstractModel
{
    /**
     * @var string 来源文档ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocBizId;

    /**
     * @var string 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocName;

    /**
     * @var string 问答业务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaBizId;

    /**
     * @var integer 搜索引擎索引
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @var string 标题
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @param string $DocId 来源文档ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocBizId 文档业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocName 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QaBizId 问答业务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 搜索引擎索引
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 标题
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
        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
