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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTranscodeDetailInfo请求参数结构体
 *
 * @method string getPushDomain() 获取<p>推流域名。</p>
 * @method void setPushDomain(string $PushDomain) 设置<p>推流域名。</p>
 * @method string getStreamName() 获取<p>流名称。</p>
 * @method void setStreamName(string $StreamName) 设置<p>流名称。</p>
 * @method string getDayTime() 获取<p>查询时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内某天的详细数据，截止到昨天。</p>
 * @method void setDayTime(string $DayTime) 设置<p>查询时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内某天的详细数据，截止到昨天。</p>
 * @method integer getPageNum() 获取<p>页数，默认1，<br>不超过100页。</p>
 * @method void setPageNum(integer $PageNum) 设置<p>页数，默认1，<br>不超过100页。</p>
 * @method integer getPageSize() 获取<p>每页个数，默认20，<br>范围：[10,1000]。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页个数，默认20，<br>范围：[10,1000]。</p>
 * @method string getStartDayTime() 获取<p>起始天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据。</p>
 * @method void setStartDayTime(string $StartDayTime) 设置<p>起始天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据。</p>
 * @method string getEndDayTime() 获取<p>结束天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据，截止到昨天，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。</p>
 * @method void setEndDayTime(string $EndDayTime) 设置<p>结束天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据，截止到昨天，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。</p>
 */
class DescribeLiveTranscodeDetailInfoRequest extends AbstractModel
{
    /**
     * @var string <p>推流域名。</p>
     */
    public $PushDomain;

    /**
     * @var string <p>流名称。</p>
     */
    public $StreamName;

    /**
     * @var string <p>查询时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内某天的详细数据，截止到昨天。</p>
     */
    public $DayTime;

    /**
     * @var integer <p>页数，默认1，<br>不超过100页。</p>
     */
    public $PageNum;

    /**
     * @var integer <p>每页个数，默认20，<br>范围：[10,1000]。</p>
     */
    public $PageSize;

    /**
     * @var string <p>起始天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据。</p>
     */
    public $StartDayTime;

    /**
     * @var string <p>结束天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据，截止到昨天，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。</p>
     */
    public $EndDayTime;

    /**
     * @param string $PushDomain <p>推流域名。</p>
     * @param string $StreamName <p>流名称。</p>
     * @param string $DayTime <p>查询时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内某天的详细数据，截止到昨天。</p>
     * @param integer $PageNum <p>页数，默认1，<br>不超过100页。</p>
     * @param integer $PageSize <p>每页个数，默认20，<br>范围：[10,1000]。</p>
     * @param string $StartDayTime <p>起始天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据。</p>
     * @param string $EndDayTime <p>结束天时间，北京时间，<br>格式：yyyymmdd。<br>注意：支持查询近1个月内的详细数据，截止到昨天，注意DayTime 与（StartDayTime，EndDayTime）必须要传一个，如果都传，会以DayTime为准 。</p>
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
        if (array_key_exists("PushDomain",$param) and $param["PushDomain"] !== null) {
            $this->PushDomain = $param["PushDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("StartDayTime",$param) and $param["StartDayTime"] !== null) {
            $this->StartDayTime = $param["StartDayTime"];
        }

        if (array_key_exists("EndDayTime",$param) and $param["EndDayTime"] !== null) {
            $this->EndDayTime = $param["EndDayTime"];
        }
    }
}
