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
 * DescribeSecurityScoreOverview返回参数结构体
 *
 * @method integer getScore() 获取<p>安全评分<br>取值范围：[0, 100]</p>
 * @method void setScore(integer $Score) 设置<p>安全评分<br>取值范围：[0, 100]</p>
 * @method string getLevel() 获取<p>安全等级<br>枚举值：<br>safe：安全(90-100分)<br>good：良好(70-89分)<br>medium：一般(40-69分)<br>danger：危险(0-39分)</p>
 * @method void setLevel(string $Level) 设置<p>安全等级<br>枚举值：<br>safe：安全(90-100分)<br>good：良好(70-89分)<br>medium：一般(40-69分)<br>danger：危险(0-39分)</p>
 * @method string getScoreStatus() 获取<p>评分状态<br>枚举值：<br>success：全部数据源正常<br>partial_error：部分数据源使用了缓存<br>stale：使用上次完整快照<br>error：无法计算</p>
 * @method void setScoreStatus(string $ScoreStatus) 设置<p>评分状态<br>枚举值：<br>success：全部数据源正常<br>partial_error：部分数据源使用了缓存<br>stale：使用上次完整快照<br>error：无法计算</p>
 * @method integer getInitialScore() 获取<p>初始分<br>默认值：100</p>
 * @method void setInitialScore(integer $InitialScore) 设置<p>初始分<br>默认值：100</p>
 * @method integer getRiskCategoryCount() 获取<p>存在风险的分类数量（X类风险建议尽快处理）</p>
 * @method void setRiskCategoryCount(integer $RiskCategoryCount) 设置<p>存在风险的分类数量（X类风险建议尽快处理）</p>
 * @method integer getDeductScore() 获取<p>总扣分</p>
 * @method void setDeductScore(integer $DeductScore) 设置<p>总扣分</p>
 * @method string getCalculatedAt() 获取<p>计算时间<br>参数格式：YYYY-MM-DDTHH:mm:ss+08:00</p>
 * @method void setCalculatedAt(string $CalculatedAt) 设置<p>计算时间<br>参数格式：YYYY-MM-DDTHH:mm:ss+08:00</p>
 * @method array getDimensions() 获取<p>维度明细，含子项扣分和待办</p>
 * @method void setDimensions(array $Dimensions) 设置<p>维度明细，含子项扣分和待办</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecurityScoreOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>安全评分<br>取值范围：[0, 100]</p>
     */
    public $Score;

    /**
     * @var string <p>安全等级<br>枚举值：<br>safe：安全(90-100分)<br>good：良好(70-89分)<br>medium：一般(40-69分)<br>danger：危险(0-39分)</p>
     */
    public $Level;

    /**
     * @var string <p>评分状态<br>枚举值：<br>success：全部数据源正常<br>partial_error：部分数据源使用了缓存<br>stale：使用上次完整快照<br>error：无法计算</p>
     */
    public $ScoreStatus;

    /**
     * @var integer <p>初始分<br>默认值：100</p>
     */
    public $InitialScore;

    /**
     * @var integer <p>存在风险的分类数量（X类风险建议尽快处理）</p>
     */
    public $RiskCategoryCount;

    /**
     * @var integer <p>总扣分</p>
     */
    public $DeductScore;

    /**
     * @var string <p>计算时间<br>参数格式：YYYY-MM-DDTHH:mm:ss+08:00</p>
     */
    public $CalculatedAt;

    /**
     * @var array <p>维度明细，含子项扣分和待办</p>
     */
    public $Dimensions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Score <p>安全评分<br>取值范围：[0, 100]</p>
     * @param string $Level <p>安全等级<br>枚举值：<br>safe：安全(90-100分)<br>good：良好(70-89分)<br>medium：一般(40-69分)<br>danger：危险(0-39分)</p>
     * @param string $ScoreStatus <p>评分状态<br>枚举值：<br>success：全部数据源正常<br>partial_error：部分数据源使用了缓存<br>stale：使用上次完整快照<br>error：无法计算</p>
     * @param integer $InitialScore <p>初始分<br>默认值：100</p>
     * @param integer $RiskCategoryCount <p>存在风险的分类数量（X类风险建议尽快处理）</p>
     * @param integer $DeductScore <p>总扣分</p>
     * @param string $CalculatedAt <p>计算时间<br>参数格式：YYYY-MM-DDTHH:mm:ss+08:00</p>
     * @param array $Dimensions <p>维度明细，含子项扣分和待办</p>
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ScoreStatus",$param) and $param["ScoreStatus"] !== null) {
            $this->ScoreStatus = $param["ScoreStatus"];
        }

        if (array_key_exists("InitialScore",$param) and $param["InitialScore"] !== null) {
            $this->InitialScore = $param["InitialScore"];
        }

        if (array_key_exists("RiskCategoryCount",$param) and $param["RiskCategoryCount"] !== null) {
            $this->RiskCategoryCount = $param["RiskCategoryCount"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }

        if (array_key_exists("CalculatedAt",$param) and $param["CalculatedAt"] !== null) {
            $this->CalculatedAt = $param["CalculatedAt"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DimensionItem();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
