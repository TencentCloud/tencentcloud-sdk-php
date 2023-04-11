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
 * SearchLog返回参数结构体
 *
 * @method string getContext() 获取透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
 * @method void setContext(string $Context) 设置透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
 * @method boolean getListOver() 获取符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
注意：仅当检索分析语句(Query)不包含SQL时有效
 * @method void setListOver(boolean $ListOver) 设置符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
注意：仅当检索分析语句(Query)不包含SQL时有效
 * @method boolean getAnalysis() 获取返回的是否为统计分析（即SQL）结果
 * @method void setAnalysis(boolean $Analysis) 设置返回的是否为统计分析（即SQL）结果
 * @method array getResults() 获取匹配检索条件的原始日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置匹配检索条件的原始日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColNames() 获取日志统计分析结果的列名
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColNames(array $ColNames) 设置日志统计分析结果的列名
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalysisResults() 获取日志统计分析结果
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisResults(array $AnalysisResults) 设置日志统计分析结果
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnalysisRecords() 获取日志统计分析结果
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisRecords(array $AnalysisRecords) 设置日志统计分析结果
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getColumns() 获取日志统计分析结果的列属性
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置日志统计分析结果的列属性
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSamplingRate() 获取本次统计分析使用的采样率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSamplingRate(float $SamplingRate) 设置本次统计分析使用的采样率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SearchLogResponse extends AbstractModel
{
    /**
     * @var string 透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
     */
    public $Context;

    /**
     * @var boolean 符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
注意：仅当检索分析语句(Query)不包含SQL时有效
     */
    public $ListOver;

    /**
     * @var boolean 返回的是否为统计分析（即SQL）结果
     */
    public $Analysis;

    /**
     * @var array 匹配检索条件的原始日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @var array 日志统计分析结果的列名
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColNames;

    /**
     * @var array 日志统计分析结果
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisResults;

    /**
     * @var array 日志统计分析结果
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisRecords;

    /**
     * @var array 日志统计分析结果的列属性
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var float 本次统计分析使用的采样率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SamplingRate;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 透传本次接口返回的Context值，可获取后续更多日志，过期时间1小时
     * @param boolean $ListOver 符合检索条件的日志是否已全部返回，如未全部返回可使用Context参数获取后续更多日志
注意：仅当检索分析语句(Query)不包含SQL时有效
     * @param boolean $Analysis 返回的是否为统计分析（即SQL）结果
     * @param array $Results 匹配检索条件的原始日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ColNames 日志统计分析结果的列名
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalysisResults 日志统计分析结果
当UseNewAnalysis为false时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnalysisRecords 日志统计分析结果
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Columns 日志统计分析结果的列属性
当UseNewAnalysis为true时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SamplingRate 本次统计分析使用的采样率
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("ListOver",$param) and $param["ListOver"] !== null) {
            $this->ListOver = $param["ListOver"];
        }

        if (array_key_exists("Analysis",$param) and $param["Analysis"] !== null) {
            $this->Analysis = $param["Analysis"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("ColNames",$param) and $param["ColNames"] !== null) {
            $this->ColNames = $param["ColNames"];
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

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
