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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDispenseExternalRuleList请求参数结构体
 *
 * @method integer getPage() 获取页数
 * @method void setPage(integer $Page) 设置页数
 * @method integer getPageSize() 获取页面大小
 * @method void setPageSize(integer $PageSize) 设置页面大小
 * @method array getDispenseRegions() 获取转发部署地域
 * @method void setDispenseRegions(array $DispenseRegions) 设置转发部署地域
 * @method string getKeyword() 获取关键字搜索规则名
 * @method void setKeyword(string $Keyword) 设置关键字搜索规则名
 */
class DescribeDispenseExternalRuleListRequest extends AbstractModel
{
    /**
     * @var integer 页数
     */
    public $Page;

    /**
     * @var integer 页面大小
     */
    public $PageSize;

    /**
     * @var array 转发部署地域
     */
    public $DispenseRegions;

    /**
     * @var string 关键字搜索规则名
     */
    public $Keyword;

    /**
     * @param integer $Page 页数
     * @param integer $PageSize 页面大小
     * @param array $DispenseRegions 转发部署地域
     * @param string $Keyword 关键字搜索规则名
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("DispenseRegions",$param) and $param["DispenseRegions"] !== null) {
            $this->DispenseRegions = $param["DispenseRegions"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
