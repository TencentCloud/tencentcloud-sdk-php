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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSeeds请求参数结构体
 *
 * @method integer getCustomerId() 获取<p>企业ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业ID</p>
 * @method array getIps() 获取<p>ip种子数组</p>
 * @method void setIps(array $Ips) 设置<p>ip种子数组</p>
 * @method array getIcons() 获取<p>icon种子数组</p>
 * @method void setIcons(array $Icons) 设置<p>icon种子数组</p>
 * @method array getDomains() 获取<p>主域名种子数组</p>
 * @method void setDomains(array $Domains) 设置<p>主域名种子数组</p>
 * @method array getTitles() 获取<p>title种子数组</p>
 * @method void setTitles(array $Titles) 设置<p>title种子数组</p>
 * @method array getSubDomains() 获取<p>子域名种子数组</p>
 * @method void setSubDomains(array $SubDomains) 设置<p>子域名种子数组</p>
 * @method array getKeywords() 获取<p>关键词种子数组</p>
 * @method void setKeywords(array $Keywords) 设置<p>关键词种子数组</p>
 * @method array getParentCompanies() 获取<p>母公司种子数组</p>
 * @method void setParentCompanies(array $ParentCompanies) 设置<p>母公司种子数组</p>
 * @method array getKeywordPurposes() 获取<p>关键词用途：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号，不填=全部用途</p>
 * @method void setKeywordPurposes(array $KeywordPurposes) 设置<p>关键词用途：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号，不填=全部用途</p>
 */
class CreateSeedsRequest extends AbstractModel
{
    /**
     * @var integer <p>企业ID</p>
     */
    public $CustomerId;

    /**
     * @var array <p>ip种子数组</p>
     */
    public $Ips;

    /**
     * @var array <p>icon种子数组</p>
     */
    public $Icons;

    /**
     * @var array <p>主域名种子数组</p>
     */
    public $Domains;

    /**
     * @var array <p>title种子数组</p>
     */
    public $Titles;

    /**
     * @var array <p>子域名种子数组</p>
     */
    public $SubDomains;

    /**
     * @var array <p>关键词种子数组</p>
     */
    public $Keywords;

    /**
     * @var array <p>母公司种子数组</p>
     */
    public $ParentCompanies;

    /**
     * @var array <p>关键词用途：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号，不填=全部用途</p>
     */
    public $KeywordPurposes;

    /**
     * @param integer $CustomerId <p>企业ID</p>
     * @param array $Ips <p>ip种子数组</p>
     * @param array $Icons <p>icon种子数组</p>
     * @param array $Domains <p>主域名种子数组</p>
     * @param array $Titles <p>title种子数组</p>
     * @param array $SubDomains <p>子域名种子数组</p>
     * @param array $Keywords <p>关键词种子数组</p>
     * @param array $ParentCompanies <p>母公司种子数组</p>
     * @param array $KeywordPurposes <p>关键词用途：leakage_code代码泄露/leakage_data其他泄露/wechat_applet微信小程序/wechat_official_account微信公众号，不填=全部用途</p>
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Ips",$param) and $param["Ips"] !== null) {
            $this->Ips = $param["Ips"];
        }

        if (array_key_exists("Icons",$param) and $param["Icons"] !== null) {
            $this->Icons = $param["Icons"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Titles",$param) and $param["Titles"] !== null) {
            $this->Titles = $param["Titles"];
        }

        if (array_key_exists("SubDomains",$param) and $param["SubDomains"] !== null) {
            $this->SubDomains = $param["SubDomains"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("ParentCompanies",$param) and $param["ParentCompanies"] !== null) {
            $this->ParentCompanies = $param["ParentCompanies"];
        }

        if (array_key_exists("KeywordPurposes",$param) and $param["KeywordPurposes"] !== null) {
            $this->KeywordPurposes = $param["KeywordPurposes"];
        }
    }
}
