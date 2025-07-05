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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体质检模板详情
 *
 * @method integer getDefinition() 获取媒体质检模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置媒体质检模板唯一标识。
 * @method string getName() 获取媒体质检模板名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置媒体质检模板名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取模板描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置模板描述信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityControlItemSet() 获取媒体质检配置参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlItemSet(array $QualityControlItemSet) 设置媒体质检配置参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QualityControlTemplate extends AbstractModel
{
    /**
     * @var integer 媒体质检模板唯一标识。
     */
    public $Definition;

    /**
     * @var string 媒体质检模板名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 模板描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 媒体质检配置参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlItemSet;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param integer $Definition 媒体质检模板唯一标识。
     * @param string $Name 媒体质检模板名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 模板描述信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 模板类型，取值：
<li>Preset：系统预置模板；</li>
<li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityControlItemSet 媒体质检配置参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("QualityControlItemSet",$param) and $param["QualityControlItemSet"] !== null) {
            $this->QualityControlItemSet = [];
            foreach ($param["QualityControlItemSet"] as $key => $value){
                $obj = new QualityControlItemConfig();
                $obj->deserialize($value);
                array_push($this->QualityControlItemSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
