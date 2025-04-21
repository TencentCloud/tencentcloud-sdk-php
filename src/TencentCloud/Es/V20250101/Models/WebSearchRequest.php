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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WebSearch请求参数结构体
 *
 * @method string getQuery() 获取查询
 * @method void setQuery(string $Query) 设置查询
 * @method integer getCount() 获取搜索的网页数量，默认20
 * @method void setCount(integer $Count) 设置搜索的网页数量，默认20
 * @method string getSite() 获取指定域名，gov.cn 可匹配 *.gov.cn的域名。
 * @method void setSite(string $Site) 设置指定域名，gov.cn 可匹配 *.gov.cn的域名。
 * @method boolean getFetchContent() 获取是否获取返回网页全文，默认 false。
 * @method void setFetchContent(boolean $FetchContent) 设置是否获取返回网页全文，默认 false。
 * @method array getWhiteSites() 获取域名白名单，在不指定 Site 时，只保存匹配白名单域名的网页。
 * @method void setWhiteSites(array $WhiteSites) 设置域名白名单，在不指定 Site 时，只保存匹配白名单域名的网页。
 * @method array getBlackSites() 获取域名黑名单，在不指定 Site 和白名单时，过滤黑名单中的域名。
 * @method void setBlackSites(array $BlackSites) 设置域名黑名单，在不指定 Site 和白名单时，过滤黑名单中的域名。
 * @method integer getStartTime() 获取秒级时间戳，搜索网页的开始时间，默认不限制开始时间。
 * @method void setStartTime(integer $StartTime) 设置秒级时间戳，搜索网页的开始时间，默认不限制开始时间。
 * @method integer getEndTime() 获取秒级时间戳，搜索网页的结束时间，默认为现在。
 * @method void setEndTime(integer $EndTime) 设置秒级时间戳，搜索网页的结束时间，默认为现在。
 * @method string getSearchEngine() 获取指定搜索引擎，可选混合搜索 mixed，或 bing, baidu, sogou, 默认为 sogou
 * @method void setSearchEngine(string $SearchEngine) 设置指定搜索引擎，可选混合搜索 mixed，或 bing, baidu, sogou, 默认为 sogou
 */
class WebSearchRequest extends AbstractModel
{
    /**
     * @var string 查询
     */
    public $Query;

    /**
     * @var integer 搜索的网页数量，默认20
     */
    public $Count;

    /**
     * @var string 指定域名，gov.cn 可匹配 *.gov.cn的域名。
     */
    public $Site;

    /**
     * @var boolean 是否获取返回网页全文，默认 false。
     */
    public $FetchContent;

    /**
     * @var array 域名白名单，在不指定 Site 时，只保存匹配白名单域名的网页。
     */
    public $WhiteSites;

    /**
     * @var array 域名黑名单，在不指定 Site 和白名单时，过滤黑名单中的域名。
     */
    public $BlackSites;

    /**
     * @var integer 秒级时间戳，搜索网页的开始时间，默认不限制开始时间。
     */
    public $StartTime;

    /**
     * @var integer 秒级时间戳，搜索网页的结束时间，默认为现在。
     */
    public $EndTime;

    /**
     * @var string 指定搜索引擎，可选混合搜索 mixed，或 bing, baidu, sogou, 默认为 sogou
     */
    public $SearchEngine;

    /**
     * @param string $Query 查询
     * @param integer $Count 搜索的网页数量，默认20
     * @param string $Site 指定域名，gov.cn 可匹配 *.gov.cn的域名。
     * @param boolean $FetchContent 是否获取返回网页全文，默认 false。
     * @param array $WhiteSites 域名白名单，在不指定 Site 时，只保存匹配白名单域名的网页。
     * @param array $BlackSites 域名黑名单，在不指定 Site 和白名单时，过滤黑名单中的域名。
     * @param integer $StartTime 秒级时间戳，搜索网页的开始时间，默认不限制开始时间。
     * @param integer $EndTime 秒级时间戳，搜索网页的结束时间，默认为现在。
     * @param string $SearchEngine 指定搜索引擎，可选混合搜索 mixed，或 bing, baidu, sogou, 默认为 sogou
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = $param["Site"];
        }

        if (array_key_exists("FetchContent",$param) and $param["FetchContent"] !== null) {
            $this->FetchContent = $param["FetchContent"];
        }

        if (array_key_exists("WhiteSites",$param) and $param["WhiteSites"] !== null) {
            $this->WhiteSites = $param["WhiteSites"];
        }

        if (array_key_exists("BlackSites",$param) and $param["BlackSites"] !== null) {
            $this->BlackSites = $param["BlackSites"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SearchEngine",$param) and $param["SearchEngine"] !== null) {
            $this->SearchEngine = $param["SearchEngine"];
        }
    }
}
