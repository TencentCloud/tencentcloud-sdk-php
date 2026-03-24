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
 * DescribeStreamPlayInfoList请求参数结构体
 *
 * @method string getStartTime() 获取<p>起始时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。</p>
 * @method void setStartTime(string $StartTime) 设置<p>起始时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。</p>
 * @method string getEndTime() 获取<p>结束时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。结束时间和开始时间跨度不支持超过24小时，支持距当前时间一个月内的数据查询。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。结束时间和开始时间跨度不支持超过24小时，支持距当前时间一个月内的数据查询。</p>
 * @method string getPlayDomain() 获取<p>播放域名，<br>若不填，则为查询所有播放域名的在线流数据。</p>
 * @method void setPlayDomain(string $PlayDomain) 设置<p>播放域名，<br>若不填，则为查询所有播放域名的在线流数据。</p>
 * @method string getStreamName() 获取<p>流名称，精确匹配。<br>若不填，则为查询总体播放数据。</p>
 * @method void setStreamName(string $StreamName) 设置<p>流名称，精确匹配。<br>若不填，则为查询总体播放数据。</p>
 * @method string getAppName() 获取<p>该参数暂不可用。</p>
 * @method void setAppName(string $AppName) 设置<p>该参数暂不可用。</p>
 * @method string getServiceName() 获取<p>服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。</p>
 */
class DescribeStreamPlayInfoListRequest extends AbstractModel
{
    /**
     * @var string <p>起始时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。结束时间和开始时间跨度不支持超过24小时，支持距当前时间一个月内的数据查询。</p>
     */
    public $EndTime;

    /**
     * @var string <p>播放域名，<br>若不填，则为查询所有播放域名的在线流数据。</p>
     */
    public $PlayDomain;

    /**
     * @var string <p>流名称，精确匹配。<br>若不填，则为查询总体播放数据。</p>
     */
    public $StreamName;

    /**
     * @var string <p>该参数暂不可用。</p>
     */
    public $AppName;

    /**
     * @var string <p>服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。</p>
     */
    public $ServiceName;

    /**
     * @param string $StartTime <p>起始时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。</p>
     * @param string $EndTime <p>结束时间点，接口查询支持两种时间格式：<br>1）YYYY-MM-DDThh:mm:ssZ：UTC时间格式，详见IOS日期格式说明文档: https://cloud.tencent.com/document/product/266/11732#I<br>2）yyyy-MM-dd HH:mm:ss：使用此格式时，默认代表北京时间。<br>开始时间和结束时间的格式需要保持一致。结束时间和开始时间跨度不支持超过24小时，支持距当前时间一个月内的数据查询。</p>
     * @param string $PlayDomain <p>播放域名，<br>若不填，则为查询所有播放域名的在线流数据。</p>
     * @param string $StreamName <p>流名称，精确匹配。<br>若不填，则为查询总体播放数据。</p>
     * @param string $AppName <p>该参数暂不可用。</p>
     * @param string $ServiceName <p>服务名称，可选值包括LVB(标准直播)，LEB(快直播)，不填则查LVB+LEB总值。</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PlayDomain",$param) and $param["PlayDomain"] !== null) {
            $this->PlayDomain = $param["PlayDomain"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
