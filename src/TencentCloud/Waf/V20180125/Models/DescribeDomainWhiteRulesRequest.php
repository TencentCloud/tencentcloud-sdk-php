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
 * DescribeDomainWhiteRules请求参数结构体
 *
 * @method string getDomain() 获取需要查询的域名
 * @method void setDomain(string $Domain) 设置需要查询的域名
 * @method string getUrl() 获取请求的白名单匹配路径
 * @method void setUrl(string $Url) 设置请求的白名单匹配路径
 * @method integer getPage() 获取翻到多少页
 * @method void setPage(integer $Page) 设置翻到多少页
 * @method integer getCount() 获取每页展示的条数
 * @method void setCount(integer $Count) 设置每页展示的条数
 * @method string getSort() 获取排序方式,desc表示降序，asc表示升序
 * @method void setSort(string $Sort) 设置排序方式,desc表示降序，asc表示升序
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 */
class DescribeDomainWhiteRulesRequest extends AbstractModel
{
    /**
     * @var string 需要查询的域名
     */
    public $Domain;

    /**
     * @var string 请求的白名单匹配路径
     */
    public $Url;

    /**
     * @var integer 翻到多少页
     */
    public $Page;

    /**
     * @var integer 每页展示的条数
     */
    public $Count;

    /**
     * @var string 排序方式,desc表示降序，asc表示升序
     */
    public $Sort;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @param string $Domain 需要查询的域名
     * @param string $Url 请求的白名单匹配路径
     * @param integer $Page 翻到多少页
     * @param integer $Count 每页展示的条数
     * @param string $Sort 排序方式,desc表示降序，asc表示升序
     * @param string $RuleId 规则ID
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
