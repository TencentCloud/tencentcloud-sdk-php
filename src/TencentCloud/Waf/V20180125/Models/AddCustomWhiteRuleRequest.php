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
 * AddCustomWhiteRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getSortId() 获取优先级
 * @method void setSortId(string $SortId) 设置优先级
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method array getStrategies() 获取策略详情
 * @method void setStrategies(array $Strategies) 设置策略详情
 * @method string getDomain() 获取需要添加策略的域名
 * @method void setDomain(string $Domain) 设置需要添加策略的域名
 * @method string getBypass() 获取放行的详情
 * @method void setBypass(string $Bypass) 设置放行的详情
 */
class AddCustomWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 优先级
     */
    public $SortId;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var array 策略详情
     */
    public $Strategies;

    /**
     * @var string 需要添加策略的域名
     */
    public $Domain;

    /**
     * @var string 放行的详情
     */
    public $Bypass;

    /**
     * @param string $Name 规则名称
     * @param string $SortId 优先级
     * @param string $ExpireTime 过期时间
     * @param array $Strategies 策略详情
     * @param string $Domain 需要添加策略的域名
     * @param string $Bypass 放行的详情
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
            $this->Strategies = [];
            foreach ($param["Strategies"] as $key => $value){
                $obj = new Strategy();
                $obj->deserialize($value);
                array_push($this->Strategies, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Bypass",$param) and $param["Bypass"] !== null) {
            $this->Bypass = $param["Bypass"];
        }
    }
}
