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
 * ScheduledSql的资源信息
 *
 * @method string getTopicId() 获取目标主题id
 * @method void setTopicId(string $TopicId) 设置目标主题id
 * @method string getRegion() 获取主题的地域信息
 * @method void setRegion(string $Region) 设置主题的地域信息
 * @method integer getBizType() 获取主题类型：0为日志主题，1为指标主题
 * @method void setBizType(integer $BizType) 设置主题类型：0为日志主题，1为指标主题
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getMetricNames() 获取指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
 * @method void setMetricNames(array $MetricNames) 设置指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
 * @method array getMetricLabels() 获取指标标签，从SQL结果字段中选择，一般是分组(group by) 的字段。
 * @method void setMetricLabels(array $MetricLabels) 设置指标标签，从SQL结果字段中选择，一般是分组(group by) 的字段。
 * @method string getCustomTime() 获取指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间，精度毫秒）为指标时间戳。
 * @method void setCustomTime(string $CustomTime) 设置指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间，精度毫秒）为指标时间戳。
 * @method array getCustomMetricLabels() 获取除了MetricLabels，您还可以使用该参数，为指标补充静态的标签。
 * @method void setCustomMetricLabels(array $CustomMetricLabels) 设置除了MetricLabels，您还可以使用该参数，为指标补充静态的标签。
 */
class ScheduledSqlResouceInfo extends AbstractModel
{
    /**
     * @var string 目标主题id
     */
    public $TopicId;

    /**
     * @var string 主题的地域信息
     */
    public $Region;

    /**
     * @var integer 主题类型：0为日志主题，1为指标主题
     */
    public $BizType;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
     */
    public $MetricNames;

    /**
     * @var array 指标标签，从SQL结果字段中选择，一般是分组(group by) 的字段。
     */
    public $MetricLabels;

    /**
     * @var string 指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间，精度毫秒）为指标时间戳。
     */
    public $CustomTime;

    /**
     * @var array 除了MetricLabels，您还可以使用该参数，为指标补充静态的标签。
     */
    public $CustomMetricLabels;

    /**
     * @param string $TopicId 目标主题id
     * @param string $Region 主题的地域信息
     * @param integer $BizType 主题类型：0为日志主题，1为指标主题
     * @param string $MetricName 指标名称
     * @param array $MetricNames 指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
     * @param array $MetricLabels 指标标签，从SQL结果字段中选择，一般是分组(group by) 的字段。
     * @param string $CustomTime 指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间，精度毫秒）为指标时间戳。
     * @param array $CustomMetricLabels 除了MetricLabels，您还可以使用该参数，为指标补充静态的标签。
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("MetricLabels",$param) and $param["MetricLabels"] !== null) {
            $this->MetricLabels = $param["MetricLabels"];
        }

        if (array_key_exists("CustomTime",$param) and $param["CustomTime"] !== null) {
            $this->CustomTime = $param["CustomTime"];
        }

        if (array_key_exists("CustomMetricLabels",$param) and $param["CustomMetricLabels"] !== null) {
            $this->CustomMetricLabels = [];
            foreach ($param["CustomMetricLabels"] as $key => $value){
                $obj = new MetricLabel();
                $obj->deserialize($value);
                array_push($this->CustomMetricLabels, $obj);
            }
        }
    }
}
