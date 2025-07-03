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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAccessLog返回参数结构体
 *
 * @method string getContext() 获取新接口此字段失效，默认返回空字符串
 * @method void setContext(string $Context) 设置新接口此字段失效，默认返回空字符串
 * @method boolean getListOver() 获取日志查询结果是否全部返回，其中，“true”表示结果返回，“false”表示结果为返回
 * @method void setListOver(boolean $ListOver) 设置日志查询结果是否全部返回，其中，“true”表示结果返回，“false”表示结果为返回
 * @method boolean getAnalysis() 获取返回的是否为分析结果，其中，“true”表示返回分析结果，“false”表示未返回分析结果
 * @method void setAnalysis(boolean $Analysis) 设置返回的是否为分析结果，其中，“true”表示返回分析结果，“false”表示未返回分析结果
 * @method array getColNames() 获取如果Analysis为True，则返回分析结果的列名，否则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColNames(array $ColNames) 设置如果Analysis为True，则返回分析结果的列名，否则为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取日志查询结果；当Analysis为True时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
 * @method void setResults(array $Results) 设置日志查询结果；当Analysis为True时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
 * @method array getAnalysisResults() 获取日志分析结果；当Analysis为False时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
 * @method void setAnalysisResults(array $AnalysisResults) 设置日志分析结果；当Analysis为False时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchAccessLogResponse extends AbstractModel
{
    /**
     * @var string 新接口此字段失效，默认返回空字符串
     */
    public $Context;

    /**
     * @var boolean 日志查询结果是否全部返回，其中，“true”表示结果返回，“false”表示结果为返回
     */
    public $ListOver;

    /**
     * @var boolean 返回的是否为分析结果，其中，“true”表示返回分析结果，“false”表示未返回分析结果
     */
    public $Analysis;

    /**
     * @var array 如果Analysis为True，则返回分析结果的列名，否则为空
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $ColNames;

    /**
     * @var array 日志查询结果；当Analysis为True时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
     */
    public $Results;

    /**
     * @var array 日志分析结果；当Analysis为False时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
     * @deprecated
     */
    public $AnalysisResults;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 新接口此字段失效，默认返回空字符串
     * @param boolean $ListOver 日志查询结果是否全部返回，其中，“true”表示结果返回，“false”表示结果为返回
     * @param boolean $Analysis 返回的是否为分析结果，其中，“true”表示返回分析结果，“false”表示未返回分析结果
     * @param array $ColNames 如果Analysis为True，则返回分析结果的列名，否则为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 日志查询结果；当Analysis为True时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
     * @param array $AnalysisResults 日志分析结果；当Analysis为False时，可能返回为null
注意：此字段可能返回 null，表示取不到有效值
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
                $obj = new AccessLogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("AnalysisResults",$param) and $param["AnalysisResults"] !== null) {
            $this->AnalysisResults = [];
            foreach ($param["AnalysisResults"] as $key => $value){
                $obj = new AccessLogItems();
                $obj->deserialize($value);
                array_push($this->AnalysisResults, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
