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
 * 标签摘要
 *
 * @method string getLabelId() 获取<p>标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>标签 ID</p>
 * @method MetaValue getMetaValue() 获取<p>元数据配置（该标签被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaValue(MetaValue $MetaValue) 设置<p>元数据配置（该标签被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>标签名称</p>
 * @method void setName(string $Name) 设置<p>标签名称</p>
 * @method integer getRefCount() 获取<p>引用该标签的资源数</p>
 * @method void setRefCount(integer $RefCount) 设置<p>引用该标签的资源数</p>
 * @method array getTermList() 获取<p>标签值（标准词 + 同义词列表）</p>
 * @method void setTermList(array $TermList) 设置<p>标签值（标准词 + 同义词列表）</p>
 * @method integer getTermTotalCount() 获取<p>标签值总数</p>
 * @method void setTermTotalCount(integer $TermTotalCount) 设置<p>标签值总数</p>
 */
class LabelSummary extends AbstractModel
{
    /**
     * @var string <p>标签 ID</p>
     */
    public $LabelId;

    /**
     * @var MetaValue <p>元数据配置（该标签被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaValue;

    /**
     * @var string <p>标签名称</p>
     */
    public $Name;

    /**
     * @var integer <p>引用该标签的资源数</p>
     */
    public $RefCount;

    /**
     * @var array <p>标签值（标准词 + 同义词列表）</p>
     */
    public $TermList;

    /**
     * @var integer <p>标签值总数</p>
     */
    public $TermTotalCount;

    /**
     * @param string $LabelId <p>标签 ID</p>
     * @param MetaValue $MetaValue <p>元数据配置（该标签被设置为元数据时的配置信息）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>标签名称</p>
     * @param integer $RefCount <p>引用该标签的资源数</p>
     * @param array $TermList <p>标签值（标准词 + 同义词列表）</p>
     * @param integer $TermTotalCount <p>标签值总数</p>
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("MetaValue",$param) and $param["MetaValue"] !== null) {
            $this->MetaValue = new MetaValue();
            $this->MetaValue->deserialize($param["MetaValue"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RefCount",$param) and $param["RefCount"] !== null) {
            $this->RefCount = $param["RefCount"];
        }

        if (array_key_exists("TermList",$param) and $param["TermList"] !== null) {
            $this->TermList = [];
            foreach ($param["TermList"] as $key => $value){
                $obj = new LabelTerm();
                $obj->deserialize($value);
                array_push($this->TermList, $obj);
            }
        }

        if (array_key_exists("TermTotalCount",$param) and $param["TermTotalCount"] !== null) {
            $this->TermTotalCount = $param["TermTotalCount"];
        }
    }
}
