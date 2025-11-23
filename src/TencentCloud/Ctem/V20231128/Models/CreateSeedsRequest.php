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
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method array getIps() 获取ip种子数组
 * @method void setIps(array $Ips) 设置ip种子数组
 * @method array getIcons() 获取icon种子数组
 * @method void setIcons(array $Icons) 设置icon种子数组
 * @method array getDomains() 获取主域名种子数组
 * @method void setDomains(array $Domains) 设置主域名种子数组
 * @method array getTitles() 获取title种子数组
 * @method void setTitles(array $Titles) 设置title种子数组
 * @method array getSubDomains() 获取子域名种子数组
 * @method void setSubDomains(array $SubDomains) 设置子域名种子数组
 * @method array getKeywords() 获取关键词种子数组
 * @method void setKeywords(array $Keywords) 设置关键词种子数组
 * @method array getParentCompanies() 获取母公司种子数组
 * @method void setParentCompanies(array $ParentCompanies) 设置母公司种子数组
 */
class CreateSeedsRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var array ip种子数组
     */
    public $Ips;

    /**
     * @var array icon种子数组
     */
    public $Icons;

    /**
     * @var array 主域名种子数组
     */
    public $Domains;

    /**
     * @var array title种子数组
     */
    public $Titles;

    /**
     * @var array 子域名种子数组
     */
    public $SubDomains;

    /**
     * @var array 关键词种子数组
     */
    public $Keywords;

    /**
     * @var array 母公司种子数组
     */
    public $ParentCompanies;

    /**
     * @param integer $CustomerId 企业ID
     * @param array $Ips ip种子数组
     * @param array $Icons icon种子数组
     * @param array $Domains 主域名种子数组
     * @param array $Titles title种子数组
     * @param array $SubDomains 子域名种子数组
     * @param array $Keywords 关键词种子数组
     * @param array $ParentCompanies 母公司种子数组
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
    }
}
