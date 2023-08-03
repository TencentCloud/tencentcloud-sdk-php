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
     * @param string $TopicId 目标主题id
     * @param string $Region 主题的地域信息
     * @param integer $BizType 主题类型：0为日志主题，1为指标主题
     * @param string $MetricName 指标名称
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
    }
}
