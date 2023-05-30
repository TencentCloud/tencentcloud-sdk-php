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
 * 直播流质检结果
 *
 * @method array getQualityControlResults() 获取质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityControlResults(array $QualityControlResults) 设置质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDiagnoseResults() 获取格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiagnoseResults(array $DiagnoseResults) 设置格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamAiQualityControlResultInfo extends AbstractModel
{
    /**
     * @var array 质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityControlResults;

    /**
     * @var array 格式诊断结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiagnoseResults;

    /**
     * @param array $QualityControlResults 质检结果列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DiagnoseResults 格式诊断结果列表。
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
    }
}
