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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchAttackLog请求参数结构体
 *
 * @method string getDomain() 获取查询的域名，所有域名使用all
 * @method void setDomain(string $Domain) 设置查询的域名，所有域名使用all
 * @method string getStartTime() 获取查询起始时间
 * @method void setStartTime(string $StartTime) 设置查询起始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 * @method string getContext() 获取查询的游标。第一次请求使用空字符串即可，后续请求使用上一次请求返回的最后一条记录的context的值即可。
 * @method void setContext(string $Context) 设置查询的游标。第一次请求使用空字符串即可，后续请求使用上一次请求返回的最后一条记录的context的值即可。
 * @method string getQueryString() 获取Lucene语法
 * @method void setQueryString(string $QueryString) 设置Lucene语法
 * @method integer getCount() 获取查询的数量，默认10条，最多100条
 * @method void setCount(integer $Count) 设置查询的数量，默认10条，最多100条
 * @method string getSort() 获取默认为desc，可以取值desc和asc
 * @method void setSort(string $Sort) 设置默认为desc，可以取值desc和asc
 */
class SearchAttackLogRequest extends AbstractModel
{
    /**
     * @var string 查询的域名，所有域名使用all
     */
    public $Domain;

    /**
     * @var string 查询起始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @var string 查询的游标。第一次请求使用空字符串即可，后续请求使用上一次请求返回的最后一条记录的context的值即可。
     */
    public $Context;

    /**
     * @var string Lucene语法
     */
    public $QueryString;

    /**
     * @var integer 查询的数量，默认10条，最多100条
     */
    public $Count;

    /**
     * @var string 默认为desc，可以取值desc和asc
     */
    public $Sort;

    /**
     * @param string $Domain 查询的域名，所有域名使用all
     * @param string $StartTime 查询起始时间
     * @param string $EndTime 查询结束时间
     * @param string $Context 查询的游标。第一次请求使用空字符串即可，后续请求使用上一次请求返回的最后一条记录的context的值即可。
     * @param string $QueryString Lucene语法
     * @param integer $Count 查询的数量，默认10条，最多100条
     * @param string $Sort 默认为desc，可以取值desc和asc
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

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
