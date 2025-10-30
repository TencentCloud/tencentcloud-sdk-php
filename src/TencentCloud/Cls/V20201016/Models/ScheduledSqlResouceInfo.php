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
 * ScheduledSql的资源信息
 *
 * @method string getTopicId() 获取通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
 * @method string getRegion() 获取主题的地域信息，当前不支持跨地域，支持地域参考 [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档。
 * @method void setRegion(string $Region) 设置主题的地域信息，当前不支持跨地域，支持地域参考 [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档。
 * @method integer getBizType() 获取主题类型：0为日志主题，1为指标主题
 * @method void setBizType(integer $BizType) 设置主题类型：0为日志主题，1为指标主题
 * @method string getMetricName() 获取指标名称。当BizType为1时，MetricName需要填写
 * @method void setMetricName(string $MetricName) 设置指标名称。当BizType为1时，MetricName需要填写
 * @method array getMetricNames() 获取指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
 * @method void setMetricNames(array $MetricNames) 设置指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
 * @method array getMetricLabels() 获取指标维度，不接受时间类型。
 * @method void setMetricLabels(array $MetricLabels) 设置指标维度，不接受时间类型。
 * @method string getCustomTime() 获取指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间、TimeStamp，精度毫秒）为指标时间戳。
 * @method void setCustomTime(string $CustomTime) 设置指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间、TimeStamp，精度毫秒）为指标时间戳。
 * @method array getCustomMetricLabels() 获取除了MetricLabels，您还可以使用该参数，为指标补充静态的维度。
维度名以字母或下划线开头，后面可以跟字母、数字或下划线，长度小于等于1024 字节
 * @method void setCustomMetricLabels(array $CustomMetricLabels) 设置除了MetricLabels，您还可以使用该参数，为指标补充静态的维度。
维度名以字母或下划线开头，后面可以跟字母、数字或下划线，长度小于等于1024 字节
 */
class ScheduledSqlResouceInfo extends AbstractModel
{
    /**
     * @var string 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 主题的地域信息，当前不支持跨地域，支持地域参考 [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档。
     */
    public $Region;

    /**
     * @var integer 主题类型：0为日志主题，1为指标主题
     */
    public $BizType;

    /**
     * @var string 指标名称。当BizType为1时，MetricName需要填写
     */
    public $MetricName;

    /**
     * @var array 指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
     */
    public $MetricNames;

    /**
     * @var array 指标维度，不接受时间类型。
     */
    public $MetricLabels;

    /**
     * @var string 指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间、TimeStamp，精度毫秒）为指标时间戳。
     */
    public $CustomTime;

    /**
     * @var array 除了MetricLabels，您还可以使用该参数，为指标补充静态的维度。
维度名以字母或下划线开头，后面可以跟字母、数字或下划线，长度小于等于1024 字节
     */
    public $CustomMetricLabels;

    /**
     * @param string $TopicId 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
     * @param string $Region 主题的地域信息，当前不支持跨地域，支持地域参考 [地域列表](https://cloud.tencent.com/document/api/614/56474#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8) 文档。
     * @param integer $BizType 主题类型：0为日志主题，1为指标主题
     * @param string $MetricName 指标名称。当BizType为1时，MetricName需要填写
     * @param array $MetricNames 指标名称
BizType为1时，优先使用MetricNames字段多指标只能填充到MetricNames字段，单指标建议填充到MetricName字段
     * @param array $MetricLabels 指标维度，不接受时间类型。
     * @param string $CustomTime 指标时间戳，默认值为SQL查询时间范围的左侧时间点，您也可以指定其他字段（类型为uinx时间、TimeStamp，精度毫秒）为指标时间戳。
     * @param array $CustomMetricLabels 除了MetricLabels，您还可以使用该参数，为指标补充静态的维度。
维度名以字母或下划线开头，后面可以跟字母、数字或下划线，长度小于等于1024 字节
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
