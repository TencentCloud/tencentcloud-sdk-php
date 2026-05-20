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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 源站故障转移配置参数。
 *
 * @method array getSiteFailoverStatusCodes() 获取源站故障转移条件状态码。当源站返回的响应状态码命中本字段返回时，才会按照SiteFailoverParams执行源站转移。该参数取值为 4xx、5xx 之一。
 * @method void setSiteFailoverStatusCodes(array $SiteFailoverStatusCodes) 设置源站故障转移条件状态码。当源站返回的响应状态码命中本字段返回时，才会按照SiteFailoverParams执行源站转移。该参数取值为 4xx、5xx 之一。
 * @method array getSiteFailoverParams() 获取源站故障转移配置参数列表。最小长度为1，最大长度为2。
 * @method void setSiteFailoverParams(array $SiteFailoverParams) 设置源站故障转移配置参数列表。最小长度为1，最大长度为2。
 */
class SiteFailoverParameters extends AbstractModel
{
    /**
     * @var array 源站故障转移条件状态码。当源站返回的响应状态码命中本字段返回时，才会按照SiteFailoverParams执行源站转移。该参数取值为 4xx、5xx 之一。
     */
    public $SiteFailoverStatusCodes;

    /**
     * @var array 源站故障转移配置参数列表。最小长度为1，最大长度为2。
     */
    public $SiteFailoverParams;

    /**
     * @param array $SiteFailoverStatusCodes 源站故障转移条件状态码。当源站返回的响应状态码命中本字段返回时，才会按照SiteFailoverParams执行源站转移。该参数取值为 4xx、5xx 之一。
     * @param array $SiteFailoverParams 源站故障转移配置参数列表。最小长度为1，最大长度为2。
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
        if (array_key_exists("SiteFailoverStatusCodes",$param) and $param["SiteFailoverStatusCodes"] !== null) {
            $this->SiteFailoverStatusCodes = $param["SiteFailoverStatusCodes"];
        }

        if (array_key_exists("SiteFailoverParams",$param) and $param["SiteFailoverParams"] !== null) {
            $this->SiteFailoverParams = [];
            foreach ($param["SiteFailoverParams"] as $key => $value){
                $obj = new SiteFailover();
                $obj->deserialize($value);
                array_push($this->SiteFailoverParams, $obj);
            }
        }
    }
}
