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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取云录像下载URL返回的数据
 *
 * @method string getUrl() 获取录像文件下载 URL
注意：
URL 有效期是10分钟，过期后将拒绝访问，若需再用请重新获取 
录像文件下载采用分块传输编码，响应头Transfer-Encoding:chunked 
下载文件命名格式为{ChannelId}-{BeginTime}-{EndTime}.{FileType} 
 * @method void setUrl(string $Url) 设置录像文件下载 URL
注意：
URL 有效期是10分钟，过期后将拒绝访问，若需再用请重新获取 
录像文件下载采用分块传输编码，响应头Transfer-Encoding:chunked 
下载文件命名格式为{ChannelId}-{BeginTime}-{EndTime}.{FileType} 
 * @method string getActualBeginTime() 获取实际下载录像的开始时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
 * @method void setActualBeginTime(string $ActualBeginTime) 设置实际下载录像的开始时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
 * @method string getActualEndTime() 获取实际下载录像的结束时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
 * @method void setActualEndTime(string $ActualEndTime) 设置实际下载录像的结束时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
 */
class DescribeVideoDownloadUrlData extends AbstractModel
{
    /**
     * @var string 录像文件下载 URL
注意：
URL 有效期是10分钟，过期后将拒绝访问，若需再用请重新获取 
录像文件下载采用分块传输编码，响应头Transfer-Encoding:chunked 
下载文件命名格式为{ChannelId}-{BeginTime}-{EndTime}.{FileType} 
     */
    public $Url;

    /**
     * @var string 实际下载录像的开始时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
     */
    public $ActualBeginTime;

    /**
     * @var string 实际下载录像的结束时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
     */
    public $ActualEndTime;

    /**
     * @param string $Url 录像文件下载 URL
注意：
URL 有效期是10分钟，过期后将拒绝访问，若需再用请重新获取 
录像文件下载采用分块传输编码，响应头Transfer-Encoding:chunked 
下载文件命名格式为{ChannelId}-{BeginTime}-{EndTime}.{FileType} 
     * @param string $ActualBeginTime 实际下载录像的开始时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
     * @param string $ActualEndTime 实际下载录像的结束时间
注意：当请求中指定IsRespActualTime参数为true时，才有该字段
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ActualBeginTime",$param) and $param["ActualBeginTime"] !== null) {
            $this->ActualBeginTime = $param["ActualBeginTime"];
        }

        if (array_key_exists("ActualEndTime",$param) and $param["ActualEndTime"] !== null) {
            $this->ActualEndTime = $param["ActualEndTime"];
        }
    }
}
