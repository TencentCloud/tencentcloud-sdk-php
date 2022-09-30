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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasetDetailUnstructured返回参数结构体
 *
 * @method integer getAnnotatedTotalCount() 获取已标注数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnnotatedTotalCount(integer $AnnotatedTotalCount) 设置已标注数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNonAnnotatedTotalCount() 获取没有标注数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNonAnnotatedTotalCount(integer $NonAnnotatedTotalCount) 设置没有标注数据量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFilterTotalCount() 获取过滤数据总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterTotalCount(integer $FilterTotalCount) 设置过滤数据总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFilterLabelList() 获取过滤数据详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterLabelList(array $FilterLabelList) 设置过滤数据详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRowTexts() 获取数据文本行，默认返回前1000行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowTexts(array $RowTexts) 设置数据文本行，默认返回前1000行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDatasetDetailUnstructuredResponse extends AbstractModel
{
    /**
     * @var integer 已标注数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnnotatedTotalCount;

    /**
     * @var integer 没有标注数据量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NonAnnotatedTotalCount;

    /**
     * @var integer 过滤数据总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterTotalCount;

    /**
     * @var array 过滤数据详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterLabelList;

    /**
     * @var array 数据文本行，默认返回前1000行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowTexts;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AnnotatedTotalCount 已标注数据量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NonAnnotatedTotalCount 没有标注数据量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FilterTotalCount 过滤数据总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FilterLabelList 过滤数据详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RowTexts 数据文本行，默认返回前1000行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AnnotatedTotalCount",$param) and $param["AnnotatedTotalCount"] !== null) {
            $this->AnnotatedTotalCount = $param["AnnotatedTotalCount"];
        }

        if (array_key_exists("NonAnnotatedTotalCount",$param) and $param["NonAnnotatedTotalCount"] !== null) {
            $this->NonAnnotatedTotalCount = $param["NonAnnotatedTotalCount"];
        }

        if (array_key_exists("FilterTotalCount",$param) and $param["FilterTotalCount"] !== null) {
            $this->FilterTotalCount = $param["FilterTotalCount"];
        }

        if (array_key_exists("FilterLabelList",$param) and $param["FilterLabelList"] !== null) {
            $this->FilterLabelList = [];
            foreach ($param["FilterLabelList"] as $key => $value){
                $obj = new FilterLabelInfo();
                $obj->deserialize($value);
                array_push($this->FilterLabelList, $obj);
            }
        }

        if (array_key_exists("RowTexts",$param) and $param["RowTexts"] !== null) {
            $this->RowTexts = $param["RowTexts"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
