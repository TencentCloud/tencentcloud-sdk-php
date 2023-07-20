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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务运维数据源类型信息
 *
 * @method integer getTypeId() 获取类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeId(integer $TypeId) 设置类型id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCandidateTexts() 获取可选数据源列表文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidateTexts(string $CandidateTexts) 设置可选数据源列表文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCandidateValues() 获取可选数据源列表取值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidateValues(string $CandidateValues) 设置可选数据源列表取值
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatasourceTypeByTaskType extends AbstractModel
{
    /**
     * @var integer 类型id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeId;

    /**
     * @var string 可选数据源列表文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CandidateTexts;

    /**
     * @var string 可选数据源列表取值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CandidateValues;

    /**
     * @param integer $TypeId 类型id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CandidateTexts 可选数据源列表文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CandidateValues 可选数据源列表取值
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("CandidateTexts",$param) and $param["CandidateTexts"] !== null) {
            $this->CandidateTexts = $param["CandidateTexts"];
        }

        if (array_key_exists("CandidateValues",$param) and $param["CandidateValues"] !== null) {
            $this->CandidateValues = $param["CandidateValues"];
        }
    }
}
