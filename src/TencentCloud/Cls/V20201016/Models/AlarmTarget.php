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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警对象
 *
 * @method string getTopicId() 获取日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicId(string $TopicId) 设置日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuery() 获取查询语句。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuery(string $Query) 设置查询语句。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumber() 获取告警对象序号；从1开始递增。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(integer $Number) 设置告警对象序号；从1开始递增。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartTimeOffset() 获取查询范围起始时间相对于告警执行时间的偏移，单位为分钟，取值为非正，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTimeOffset(integer $StartTimeOffset) 设置查询范围起始时间相对于告警执行时间的偏移，单位为分钟，取值为非正，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTimeOffset() 获取查询范围终止时间相对于告警执行时间的偏移，单位为分钟，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTimeOffset(integer $EndTimeOffset) 设置查询范围终止时间相对于告警执行时间的偏移，单位为分钟，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogsetId() 获取日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogsetId(string $LogsetId) 设置日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSyntaxRule() 获取检索语法规则，默认值为0。
0：Lucene语法，1：CQL语法。
详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSyntaxRule(integer $SyntaxRule) 设置检索语法规则，默认值为0。
0：Lucene语法，1：CQL语法。
详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmTarget extends AbstractModel
{
    /**
     * @var string 日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicId;

    /**
     * @var string 查询语句。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Query;

    /**
     * @var integer 告警对象序号；从1开始递增。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @var integer 查询范围起始时间相对于告警执行时间的偏移，单位为分钟，取值为非正，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTimeOffset;

    /**
     * @var integer 查询范围终止时间相对于告警执行时间的偏移，单位为分钟，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTimeOffset;

    /**
     * @var string 日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogsetId;

    /**
     * @var integer 检索语法规则，默认值为0。
0：Lucene语法，1：CQL语法。
详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SyntaxRule;

    /**
     * @param string $TopicId 日志主题ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Query 查询语句。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Number 告警对象序号；从1开始递增。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartTimeOffset 查询范围起始时间相对于告警执行时间的偏移，单位为分钟，取值为非正，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTimeOffset 查询范围终止时间相对于告警执行时间的偏移，单位为分钟，取值为非正，须大于StartTimeOffset，最大值为0，最小值为-1440。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogsetId 日志集ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SyntaxRule 检索语法规则，默认值为0。
0：Lucene语法，1：CQL语法。
详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}
