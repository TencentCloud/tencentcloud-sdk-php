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
 * 规则白名单
 *
 * @method integer getId() 获取规则Id
 * @method void setId(integer $Id) 设置规则Id
 * @method array getRules() 获取规则列表的id
 * @method void setRules(array $Rules) 设置规则列表的id
 * @method string getUrl() 获取请求url
 * @method void setUrl(string $Url) 设置请求url
 * @method string getFunction() 获取请求的方法
 * @method void setFunction(string $Function) 设置请求的方法
 * @method string getTime() 获取时间戳
 * @method void setTime(string $Time) 设置时间戳
 * @method integer getStatus() 获取开关状态
 * @method void setStatus(integer $Status) 设置开关状态
 */
class RuleList extends AbstractModel
{
    /**
     * @var integer 规则Id
     */
    public $Id;

    /**
     * @var array 规则列表的id
     */
    public $Rules;

    /**
     * @var string 请求url
     */
    public $Url;

    /**
     * @var string 请求的方法
     */
    public $Function;

    /**
     * @var string 时间戳
     */
    public $Time;

    /**
     * @var integer 开关状态
     */
    public $Status;

    /**
     * @param integer $Id 规则Id
     * @param array $Rules 规则列表的id
     * @param string $Url 请求url
     * @param string $Function 请求的方法
     * @param string $Time 时间戳
     * @param integer $Status 开关状态
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

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
