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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAttackHistogram请求参数结构体
 *
 * @method string getDomain() 获取<p>查询的域名，所有域名使用all</p>
 * @method void setDomain(string $Domain) 设置<p>查询的域名，所有域名使用all</p>
 * @method string getStartTime() 获取<p>查询起始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间</p>
 * @method string getEndTime() 获取<p>查询结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间</p>
 * @method string getQueryString() 获取<p>Lucene语法</p>
 * @method void setQueryString(string $QueryString) 设置<p>Lucene语法</p>
 */
class GetAttackHistogramRequest extends AbstractModel
{
    /**
     * @var string <p>查询的域名，所有域名使用all</p>
     */
    public $Domain;

    /**
     * @var string <p>查询起始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>Lucene语法</p>
     */
    public $QueryString;

    /**
     * @param string $Domain <p>查询的域名，所有域名使用all</p>
     * @param string $StartTime <p>查询起始时间</p>
     * @param string $EndTime <p>查询结束时间</p>
     * @param string $QueryString <p>Lucene语法</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }
    }
}
