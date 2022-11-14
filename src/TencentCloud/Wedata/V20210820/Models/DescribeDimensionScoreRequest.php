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
 * DescribeDimensionScore请求参数结构体
 *
 * @method integer getStatisticsDate() 获取统计日期 时间戳
 * @method void setStatisticsDate(integer $StatisticsDate) 设置统计日期 时间戳
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getDatasourceId() 获取数据来源id
 * @method void setDatasourceId(string $DatasourceId) 设置数据来源id
 */
class DescribeDimensionScoreRequest extends AbstractModel
{
    /**
     * @var integer 统计日期 时间戳
     */
    public $StatisticsDate;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 数据来源id
     */
    public $DatasourceId;

    /**
     * @param integer $StatisticsDate 统计日期 时间戳
     * @param string $ProjectId 项目id
     * @param string $DatasourceId 数据来源id
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
        if (array_key_exists("StatisticsDate",$param) and $param["StatisticsDate"] !== null) {
            $this->StatisticsDate = $param["StatisticsDate"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }
    }
}
