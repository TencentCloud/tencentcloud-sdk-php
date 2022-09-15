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
 * AddDomainWhiteRule请求参数结构体
 *
 * @method string getDomain() 获取需要添加的域名
 * @method void setDomain(string $Domain) 设置需要添加的域名
 * @method array getRules() 获取需要添加的规则
 * @method void setRules(array $Rules) 设置需要添加的规则
 * @method string getUrl() 获取需要添加的规则url
 * @method void setUrl(string $Url) 设置需要添加的规则url
 * @method string getFunction() 获取规则的方法
 * @method void setFunction(string $Function) 设置规则的方法
 * @method integer getStatus() 获取规则的开关
 * @method void setStatus(integer $Status) 设置规则的开关
 */
class AddDomainWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 需要添加的域名
     */
    public $Domain;

    /**
     * @var array 需要添加的规则
     */
    public $Rules;

    /**
     * @var string 需要添加的规则url
     */
    public $Url;

    /**
     * @var string 规则的方法
     */
    public $Function;

    /**
     * @var integer 规则的开关
     */
    public $Status;

    /**
     * @param string $Domain 需要添加的域名
     * @param array $Rules 需要添加的规则
     * @param string $Url 需要添加的规则url
     * @param string $Function 规则的方法
     * @param integer $Status 规则的开关
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
