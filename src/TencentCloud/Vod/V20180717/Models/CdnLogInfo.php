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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDN 日志信息
 *
 * @method string getDate() 获取<p>日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。</p>
 * @method void setDate(string $Date) 设置<p>日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。</p>
 * @method string getName() 获取<p>日志名称，格式为：日期小时-域名<br>如 example.com。</p>
 * @method void setName(string $Name) 设置<p>日志名称，格式为：日期小时-域名<br>如 example.com。</p>
 * @method string getUrl() 获取<p>日志下载链接，24小时内下载有效。</p>
 * @method void setUrl(string $Url) 设置<p>日志下载链接，24小时内下载有效。</p>
 * @method string getStartTime() 获取<p>日志起始时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setStartTime(string $StartTime) 设置<p>日志起始时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getEndTime() 获取<p>日志结束时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setEndTime(string $EndTime) 设置<p>日志结束时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class CdnLogInfo extends AbstractModel
{
    /**
     * @var string <p>日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。</p>
     */
    public $Date;

    /**
     * @var string <p>日志名称，格式为：日期小时-域名<br>如 example.com。</p>
     */
    public $Name;

    /**
     * @var string <p>日志下载链接，24小时内下载有效。</p>
     */
    public $Url;

    /**
     * @var string <p>日志起始时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $StartTime;

    /**
     * @var string <p>日志结束时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $EndTime;

    /**
     * @param string $Date <p>日志所属日期， 格式为：yyyy-MM-dd ，如2018-03-01。</p>
     * @param string $Name <p>日志名称，格式为：日期小时-域名<br>如 example.com。</p>
     * @param string $Url <p>日志下载链接，24小时内下载有效。</p>
     * @param string $StartTime <p>日志起始时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $EndTime <p>日志结束时间，使用 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
