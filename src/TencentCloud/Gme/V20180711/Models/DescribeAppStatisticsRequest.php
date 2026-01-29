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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppStatistics请求参数结构体
 *
 * @method integer getBizId() 获取<p>GME应用ID</p>
 * @method void setBizId(integer $BizId) 设置<p>GME应用ID</p>
 * @method string getStartDate() 获取<p>数据开始时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
 * @method void setStartDate(string $StartDate) 设置<p>数据开始时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
 * @method string getEndDate() 获取<p>数据结束时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
 * @method void setEndDate(string $EndDate) 设置<p>数据结束时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
 * @method array getServices() 获取<p>要查询的服务列表，取值：RealTimeSpeech/VoiceMessage/VoiceFilter/SpeechToText</p>
 * @method void setServices(array $Services) 设置<p>要查询的服务列表，取值：RealTimeSpeech/VoiceMessage/VoiceFilter/SpeechToText</p>
 */
class DescribeAppStatisticsRequest extends AbstractModel
{
    /**
     * @var integer <p>GME应用ID</p>
     */
    public $BizId;

    /**
     * @var string <p>数据开始时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
     */
    public $StartDate;

    /**
     * @var string <p>数据结束时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
     */
    public $EndDate;

    /**
     * @var array <p>要查询的服务列表，取值：RealTimeSpeech/VoiceMessage/VoiceFilter/SpeechToText</p>
     */
    public $Services;

    /**
     * @param integer $BizId <p>GME应用ID</p>
     * @param string $StartDate <p>数据开始时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
     * @param string $EndDate <p>数据结束时间，东八区时间，格式: 年-月-日，如: 2018-07-13</p>
     * @param array $Services <p>要查询的服务列表，取值：RealTimeSpeech/VoiceMessage/VoiceFilter/SpeechToText</p>
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = $param["Services"];
        }
    }
}
