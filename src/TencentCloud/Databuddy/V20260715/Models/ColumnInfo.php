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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段信息
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getType() 获取字段类型
 * @method void setType(string $Type) 设置字段类型
 * @method string getComment() 获取字段描述
 * @method void setComment(string $Comment) 设置字段描述
 * @method string getFieldSetting() 获取字段设置
 * @method void setFieldSetting(string $FieldSetting) 设置字段设置
 * @method boolean getIsPrimaryKey() 获取是否为主键
 * @method void setIsPrimaryKey(boolean $IsPrimaryKey) 设置是否为主键
 * @method DataMaskStrategyInfo getDataMaskStrategyInfo() 获取字段策略
 * @method void setDataMaskStrategyInfo(DataMaskStrategyInfo $DataMaskStrategyInfo) 设置字段策略
 * @method array getTags() 获取字段级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置字段级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method DictDimensionInfo getDictDimension() 获取字段关联的字典维度信息，仅当请求中FetchOption.FetchDictDimensions=true时返回，默认不返回；若该字段未关联任何字典维度则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictDimension(DictDimensionInfo $DictDimension) 设置字段关联的字典维度信息，仅当请求中FetchOption.FetchDictDimensions=true时返回，默认不返回；若该字段未关联任何字典维度则为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class ColumnInfo extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段类型
     */
    public $Type;

    /**
     * @var string 字段描述
     */
    public $Comment;

    /**
     * @var string 字段设置
     */
    public $FieldSetting;

    /**
     * @var boolean 是否为主键
     */
    public $IsPrimaryKey;

    /**
     * @var DataMaskStrategyInfo 字段策略
     */
    public $DataMaskStrategyInfo;

    /**
     * @var array 字段级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var DictDimensionInfo 字段关联的字典维度信息，仅当请求中FetchOption.FetchDictDimensions=true时返回，默认不返回；若该字段未关联任何字典维度则为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictDimension;

    /**
     * @param string $Name 字段名称
     * @param string $Type 字段类型
     * @param string $Comment 字段描述
     * @param string $FieldSetting 字段设置
     * @param boolean $IsPrimaryKey 是否为主键
     * @param DataMaskStrategyInfo $DataMaskStrategyInfo 字段策略
     * @param array $Tags 字段级标签列表，仅当请求中FetchOption.FetchTags=true时返回，默认不返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param DictDimensionInfo $DictDimension 字段关联的字典维度信息，仅当请求中FetchOption.FetchDictDimensions=true时返回，默认不返回；若该字段未关联任何字典维度则为空
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("FieldSetting",$param) and $param["FieldSetting"] !== null) {
            $this->FieldSetting = $param["FieldSetting"];
        }

        if (array_key_exists("IsPrimaryKey",$param) and $param["IsPrimaryKey"] !== null) {
            $this->IsPrimaryKey = $param["IsPrimaryKey"];
        }

        if (array_key_exists("DataMaskStrategyInfo",$param) and $param["DataMaskStrategyInfo"] !== null) {
            $this->DataMaskStrategyInfo = new DataMaskStrategyInfo();
            $this->DataMaskStrategyInfo->deserialize($param["DataMaskStrategyInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CommonTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DictDimension",$param) and $param["DictDimension"] !== null) {
            $this->DictDimension = new DictDimensionInfo();
            $this->DictDimension->deserialize($param["DictDimension"]);
        }
    }
}
