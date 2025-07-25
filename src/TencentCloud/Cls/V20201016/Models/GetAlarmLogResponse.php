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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAlarmLog返回参数结构体
 *
 * @method string getContext() 获取加载后续详情的Context
 * @method void setContext(string $Context) 设置加载后续详情的Context
 * @method boolean getListOver() 获取指定时间范围内的告警执行详情是否完整返回
 * @method void setListOver(boolean $ListOver) 设置指定时间范围内的告警执行详情是否完整返回
 * @method boolean getAnalysis() 获取返回的结果是否为SQL分析结果
 * @method void setAnalysis(boolean $Analysis) 设置返回的结果是否为SQL分析结果
 * @method array getColNames() 获取分析结果的列名，如果Query语句有SQL查询，则返回查询字段的列名；
否则为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColNames(array $ColNames) 设置分析结果的列名，如果Query语句有SQL查询，则返回查询字段的列名；
否则为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取执行详情查询结果。
当Query字段无SQL语句时，返回查询结果。
当Query字段有SQL语句时，可能返回null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置执行详情查询结果。
当Query字段无SQL语句时，返回查询结果。
当Query字段有SQL语句时，可能返回null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalysisResults() 获取执行详情统计分析结果。当Query字段有SQL语句时，返回SQL统计结果，否则可能返回null。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisResults(array $AnalysisResults) 设置执行详情统计分析结果。当Query字段有SQL语句时，返回SQL统计结果，否则可能返回null。

注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalysisRecords() 获取执行详情统计分析结果；UseNewAnalysis为true有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisRecords(array $AnalysisRecords) 设置执行详情统计分析结果；UseNewAnalysis为true有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取分析结果的列名， UseNewAnalysis为true有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置分析结果的列名， UseNewAnalysis为true有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAlarmLogResponse extends AbstractModel
{
    /**
     * @var string 加载后续详情的Context
     */
    public $Context;

    /**
     * @var boolean 指定时间范围内的告警执行详情是否完整返回
     */
    public $ListOver;

    /**
     * @var boolean 返回的结果是否为SQL分析结果
     */
    public $Analysis;

    /**
     * @var array 分析结果的列名，如果Query语句有SQL查询，则返回查询字段的列名；
否则为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColNames;

    /**
     * @var array 执行详情查询结果。
当Query字段无SQL语句时，返回查询结果。
当Query字段有SQL语句时，可能返回null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var array 执行详情统计分析结果。当Query字段有SQL语句时，返回SQL统计结果，否则可能返回null。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisResults;

    /**
     * @var array 执行详情统计分析结果；UseNewAnalysis为true有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisRecords;

    /**
     * @var array 分析结果的列名， UseNewAnalysis为true有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 加载后续详情的Context
     * @param boolean $ListOver 指定时间范围内的告警执行详情是否完整返回
     * @param boolean $Analysis 返回的结果是否为SQL分析结果
     * @param array $ColNames 分析结果的列名，如果Query语句有SQL查询，则返回查询字段的列名；
否则为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 执行详情查询结果。
当Query字段无SQL语句时，返回查询结果。
当Query字段有SQL语句时，可能返回null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalysisResults 执行详情统计分析结果。当Query字段有SQL语句时，返回SQL统计结果，否则可能返回null。

注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalysisRecords 执行详情统计分析结果；UseNewAnalysis为true有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 分析结果的列名， UseNewAnalysis为true有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = $param["Analysis"];
        }

        if (array_key_exists("ColNames",$param) and $param["ColNames"] !== null) {
            $this->ColNames = $param["ColNames"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("AnalysisResults",$param) and $param["AnalysisResults"] !== null) {
            $this->AnalysisResults = [];
            foreach ($param["AnalysisResults"] as $key => $value){
                $obj = new LogItems();
                $obj->deserialize($value);
                array_push($this->AnalysisResults, $obj);
            }
        }

        if (array_key_exists("AnalysisRecords",$param) and $param["AnalysisRecords"] !== null) {
            $this->AnalysisRecords = $param["AnalysisRecords"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new Column();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
