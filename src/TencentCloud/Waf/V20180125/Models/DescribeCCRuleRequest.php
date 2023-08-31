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
 * DescribeCCRule请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取页的数目
 * @method void setLimit(integer $Limit) 设置页的数目
 * @method string getSort() 获取排序参数
 * @method void setSort(string $Sort) 设置排序参数
 * @method string getEdition() 获取clb-waf 或者 sparta-waf
 * @method void setEdition(string $Edition) 设置clb-waf 或者 sparta-waf
 * @method string getName() 获取过滤条件
 * @method void setName(string $Name) 设置过滤条件
 */
class DescribeCCRuleRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 页的数目
     */
    public $Limit;

    /**
     * @var string 排序参数
     */
    public $Sort;

    /**
     * @var string clb-waf 或者 sparta-waf
     */
    public $Edition;

    /**
     * @var string 过滤条件
     */
    public $Name;

    /**
     * @param string $Domain 域名
     * @param integer $Offset 页码
     * @param integer $Limit 页的数目
     * @param string $Sort 排序参数
     * @param string $Edition clb-waf 或者 sparta-waf
     * @param string $Name 过滤条件
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
