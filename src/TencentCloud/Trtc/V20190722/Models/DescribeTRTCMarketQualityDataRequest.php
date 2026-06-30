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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTRTCMarketQualityData请求参数结构体
 *
 * @method string getSdkAppId() 获取<p>用户SdkAppId（如：1400xxxxxx）</p>
 * @method void setSdkAppId(string $SdkAppId) 设置<p>用户SdkAppId（如：1400xxxxxx）</p>
 * @method string getStartTime() 获取<p>查询开始时间，格式为YYYY-MM-DD。（查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天）</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间，格式为YYYY-MM-DD。（查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天）</p>
 * @method string getEndTime() 获取<p>查询结束时间，格式为YYYY-MM-DD。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，格式为YYYY-MM-DD。</p>
 * @method string getPeriod() 获取<p>返回数据的粒度，支持设为以下值：<br>d：按天。此时返回查询时间范围内 UTC 时间为零点的数据。<br>h：按小时。此时返回查询时间范围内 UTC 时间为整小时的数据。</p>
 * @method void setPeriod(string $Period) 设置<p>返回数据的粒度，支持设为以下值：<br>d：按天。此时返回查询时间范围内 UTC 时间为零点的数据。<br>h：按小时。此时返回查询时间范围内 UTC 时间为整小时的数据。</p>
 * @method boolean getIsFloat() 获取<p>返回数据是否为小数</p>
 * @method void setIsFloat(boolean $IsFloat) 设置<p>返回数据是否为小数</p>
 */
class DescribeTRTCMarketQualityDataRequest extends AbstractModel
{
    /**
     * @var string <p>用户SdkAppId（如：1400xxxxxx）</p>
     */
    public $SdkAppId;

    /**
     * @var string <p>查询开始时间，格式为YYYY-MM-DD。（查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天）</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，格式为YYYY-MM-DD。</p>
     */
    public $EndTime;

    /**
     * @var string <p>返回数据的粒度，支持设为以下值：<br>d：按天。此时返回查询时间范围内 UTC 时间为零点的数据。<br>h：按小时。此时返回查询时间范围内 UTC 时间为整小时的数据。</p>
     */
    public $Period;

    /**
     * @var boolean <p>返回数据是否为小数</p>
     */
    public $IsFloat;

    /**
     * @param string $SdkAppId <p>用户SdkAppId（如：1400xxxxxx）</p>
     * @param string $StartTime <p>查询开始时间，格式为YYYY-MM-DD。（查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天）</p>
     * @param string $EndTime <p>查询结束时间，格式为YYYY-MM-DD。</p>
     * @param string $Period <p>返回数据的粒度，支持设为以下值：<br>d：按天。此时返回查询时间范围内 UTC 时间为零点的数据。<br>h：按小时。此时返回查询时间范围内 UTC 时间为整小时的数据。</p>
     * @param boolean $IsFloat <p>返回数据是否为小数</p>
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("IsFloat",$param) and $param["IsFloat"] !== null) {
            $this->IsFloat = $param["IsFloat"];
        }
    }
}
