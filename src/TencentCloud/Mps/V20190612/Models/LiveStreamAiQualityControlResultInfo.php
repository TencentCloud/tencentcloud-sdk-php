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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播流媒体质检结果
 *
 * @method array getQualityControlResults() 获取内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlResults(array $QualityControlResults) 设置内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagnoseResults() 获取格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseResults(array $DiagnoseResults) 设置格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQualityControlResultSet() 获取内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlResultSet(array $QualityControlResultSet) 设置内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagnoseResultSet() 获取格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseResultSet(array $DiagnoseResultSet) 设置格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamAiQualityControlResultInfo extends AbstractModel
{
    /**
     * @var array 内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $QualityControlResults;

    /**
     * @var array 格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DiagnoseResults;

    /**
     * @var array 内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlResultSet;

    /**
     * @var array 格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseResultSet;

    /**
     * @param array $QualityControlResults 内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiagnoseResults 格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $QualityControlResultSet 内容质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiagnoseResultSet 格式诊断结果列表。
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
        if (array_key_exists("QualityControlResults",$param) and $param["QualityControlResults"] !== null) {
            $this->QualityControlResults = [];
            foreach ($param["QualityControlResults"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResults, $obj);
            }
        }

        if (array_key_exists("DiagnoseResults",$param) and $param["DiagnoseResults"] !== null) {
            $this->DiagnoseResults = [];
            foreach ($param["DiagnoseResults"] as $key => $value){
                $obj = new DiagnoseResult();
                $obj->deserialize($value);
                array_push($this->DiagnoseResults, $obj);
            }
        }

        if (array_key_exists("QualityControlResultSet",$param) and $param["QualityControlResultSet"] !== null) {
            $this->QualityControlResultSet = [];
            foreach ($param["QualityControlResultSet"] as $key => $value){
                $obj = new QualityControlResult();
                $obj->deserialize($value);
                array_push($this->QualityControlResultSet, $obj);
            }
        }

        if (array_key_exists("DiagnoseResultSet",$param) and $param["DiagnoseResultSet"] !== null) {
            $this->DiagnoseResultSet = [];
            foreach ($param["DiagnoseResultSet"] as $key => $value){
                $obj = new DiagnoseResult();
                $obj->deserialize($value);
                array_push($this->DiagnoseResultSet, $obj);
            }
        }
    }
}
