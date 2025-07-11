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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableScoreTrend请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getStatisticsStartDate() 获取开始时间 秒级时间戳
 * @method void setStatisticsStartDate(integer $StatisticsStartDate) 设置开始时间 秒级时间戳
 * @method integer getStatisticsEndDate() 获取结束时间 秒级时间戳
 * @method void setStatisticsEndDate(integer $StatisticsEndDate) 设置结束时间 秒级时间戳
 * @method string getTableId() 获取表id
 * @method void setTableId(string $TableId) 设置表id
 * @method string getScoreType() 获取1:按全维度权重计算,2:按已配置维度权重计算,3:不按维度权重计算,默认1
 * @method void setScoreType(string $ScoreType) 设置1:按全维度权重计算,2:按已配置维度权重计算,3:不按维度权重计算,默认1
 */
class DescribeTableScoreTrendRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 开始时间 秒级时间戳
     */
    public $StatisticsStartDate;

    /**
     * @var integer 结束时间 秒级时间戳
     */
    public $StatisticsEndDate;

    /**
     * @var string 表id
     */
    public $TableId;

    /**
     * @var string 1:按全维度权重计算,2:按已配置维度权重计算,3:不按维度权重计算,默认1
     */
    public $ScoreType;

    /**
     * @param string $ProjectId 项目id
     * @param integer $StatisticsStartDate 开始时间 秒级时间戳
     * @param integer $StatisticsEndDate 结束时间 秒级时间戳
     * @param string $TableId 表id
     * @param string $ScoreType 1:按全维度权重计算,2:按已配置维度权重计算,3:不按维度权重计算,默认1
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("StatisticsStartDate",$param) and $param["StatisticsStartDate"] !== null) {
            $this->StatisticsStartDate = $param["StatisticsStartDate"];
        }

        if (array_key_exists("StatisticsEndDate",$param) and $param["StatisticsEndDate"] !== null) {
            $this->StatisticsEndDate = $param["StatisticsEndDate"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("ScoreType",$param) and $param["ScoreType"] !== null) {
            $this->ScoreType = $param["ScoreType"];
        }
    }
}
