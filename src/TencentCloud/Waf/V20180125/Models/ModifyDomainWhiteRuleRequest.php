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
 * ModifyDomainWhiteRule请求参数结构体
 *
 * @method string getDomain() 获取需要更改的规则的域名
 * @method void setDomain(string $Domain) 设置需要更改的规则的域名
 * @method integer getId() 获取白名单id
 * @method void setId(integer $Id) 设置白名单id
 * @method array getRules() 获取规则的id列表
 * @method void setRules(array $Rules) 设置规则的id列表
 * @method string getUrl() 获取规则匹配路径
 * @method void setUrl(string $Url) 设置规则匹配路径
 * @method string getFunction() 获取规则匹配方法
 * @method void setFunction(string $Function) 设置规则匹配方法
 * @method integer getStatus() 获取规则的开关状态
 * @method void setStatus(integer $Status) 设置规则的开关状态
 */
class ModifyDomainWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 需要更改的规则的域名
     */
    public $Domain;

    /**
     * @var integer 白名单id
     */
    public $Id;

    /**
     * @var array 规则的id列表
     */
    public $Rules;

    /**
     * @var string 规则匹配路径
     */
    public $Url;

    /**
     * @var string 规则匹配方法
     */
    public $Function;

    /**
     * @var integer 规则的开关状态
     */
    public $Status;

    /**
     * @param string $Domain 需要更改的规则的域名
     * @param integer $Id 白名单id
     * @param array $Rules 规则的id列表
     * @param string $Url 规则匹配路径
     * @param string $Function 规则匹配方法
     * @param integer $Status 规则的开关状态
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = $param["Rules"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
