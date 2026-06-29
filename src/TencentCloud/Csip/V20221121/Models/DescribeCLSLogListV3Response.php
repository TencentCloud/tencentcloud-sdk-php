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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSLogListV3返回参数结构体
 *
 * @method string getContext() 获取<p>上下文</p>
 * @method void setContext(string $Context) 设置<p>上下文</p>
 * @method boolean getListOver() 获取<p>listover</p>
 * @method void setListOver(boolean $ListOver) 设置<p>listover</p>
 * @method boolean getAnalysis() 获取<p>是否采用分析</p>
 * @method void setAnalysis(boolean $Analysis) 设置<p>是否采用分析</p>
 * @method array getResults() 获取<p>结果</p>
 * @method void setResults(array $Results) 设置<p>结果</p>
 * @method array getColNames() 获取<p>列名</p>
 * @method void setColNames(array $ColNames) 设置<p>列名</p>
 * @method array getAnalysisResults() 获取<p>分析结果</p>
 * @method void setAnalysisResults(array $AnalysisResults) 设置<p>分析结果</p>
 * @method array getAnalysisRecords() 获取<p>分析记录</p>
 * @method void setAnalysisRecords(array $AnalysisRecords) 设置<p>分析记录</p>
 * @method array getColumns() 获取<p>列名</p>
 * @method void setColumns(array $Columns) 设置<p>列名</p>
 * @method float getSamplingRate() 获取<p>采样</p>
 * @method void setSamplingRate(float $SamplingRate) 设置<p>采样</p>
 * @method LogSearchTopics getTopics() 获取<p>主题信息</p>
 * @method void setTopics(LogSearchTopics $Topics) 设置<p>主题信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCLSLogListV3Response extends AbstractModel
{
    /**
     * @var string <p>上下文</p>
     */
    public $Context;

    /**
     * @var boolean <p>listover</p>
     */
    public $ListOver;

    /**
     * @var boolean <p>是否采用分析</p>
     */
    public $Analysis;

    /**
     * @var array <p>结果</p>
     */
    public $Results;

    /**
     * @var array <p>列名</p>
     */
    public $ColNames;

    /**
     * @var array <p>分析结果</p>
     */
    public $AnalysisResults;

    /**
     * @var array <p>分析记录</p>
     */
    public $AnalysisRecords;

    /**
     * @var array <p>列名</p>
     */
    public $Columns;

    /**
     * @var float <p>采样</p>
     */
    public $SamplingRate;

    /**
     * @var LogSearchTopics <p>主题信息</p>
     */
    public $Topics;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context <p>上下文</p>
     * @param boolean $ListOver <p>listover</p>
     * @param boolean $Analysis <p>是否采用分析</p>
     * @param array $Results <p>结果</p>
     * @param array $ColNames <p>列名</p>
     * @param array $AnalysisResults <p>分析结果</p>
     * @param array $AnalysisRecords <p>分析记录</p>
     * @param array $Columns <p>列名</p>
     * @param float $SamplingRate <p>采样</p>
     * @param LogSearchTopics $Topics <p>主题信息</p>
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

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogSearchResult();
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
                $obj = new LogColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = new LogSearchTopics();
            $this->Topics->deserialize($param["Topics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
