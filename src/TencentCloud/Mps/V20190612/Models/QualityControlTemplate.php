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
 * @method integer getDefinition() 获取<p>媒体质检模板唯一标识。</p>
 * @method void setDefinition(integer $Definition) 设置<p>媒体质检模板唯一标识。</p>
 * @method string getName() 获取<p>媒体质检模板名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>媒体质检模板名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取<p>模板描述信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置<p>模板描述信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityControlItemSet() 获取<p>媒体质检配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlItemSet(array $QualityControlItemSet) 设置<p>媒体质检配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QualityControlStrategy getStrategy() 获取<p>媒体质检的抽检策略。</p>
 * @method void setStrategy(QualityControlStrategy $Strategy) 设置<p>媒体质检的抽检策略。</p>
 */
class QualityControlTemplate extends AbstractModel
{
    /**
     * @var integer <p>媒体质检模板唯一标识。</p>
     */
    public $Definition;

    /**
     * @var string <p>媒体质检模板名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>模板描述信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string <p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array <p>媒体质检配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlItemSet;

    /**
     * @var string <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var QualityControlStrategy <p>媒体质检的抽检策略。</p>
     */
    public $Strategy;

    /**
     * @param integer $Definition <p>媒体质检模板唯一标识。</p>
     * @param string $Name <p>媒体质检模板名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment <p>模板描述信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>模板类型，取值：</p><li>Preset：系统预置模板；</li><li>Custom：用户自定义模板。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityControlItemSet <p>媒体质检配置参数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>模板创建时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>模板最后修改时间，使用 <a href="https://cloud.tencent.com/document/product/862/37710#52">ISO 日期格式</a>。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QualityControlStrategy $Strategy <p>媒体质检的抽检策略。</p>
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

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = new QualityControlStrategy();
            $this->Strategy->deserialize($param["Strategy"]);
        }
    }
}
