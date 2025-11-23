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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api提取规则内容
 *
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getApiName() 获取api名称
 * @method void setApiName(string $ApiName) 设置api名称
 * @method array getMethods() 获取请求方法列表
 * @method void setMethods(array $Methods) 设置请求方法列表
 * @method integer getStatus() 获取开关状态，0是关，1是开
 * @method void setStatus(integer $Status) 设置开关状态，0是关，1是开
 * @method string getRegex() 获取正则匹配内容
 * @method void setRegex(string $Regex) 设置正则匹配内容
 * @method integer getUpdateTime() 获取10更新时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置10更新时间戳
 */
class ApiSecExtractRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string api名称
     */
    public $ApiName;

    /**
     * @var array 请求方法列表
     */
    public $Methods;

    /**
     * @var integer 开关状态，0是关，1是开
     */
    public $Status;

    /**
     * @var string 正则匹配内容
     */
    public $Regex;

    /**
     * @var integer 10更新时间戳
     */
    public $UpdateTime;

    /**
     * @param string $RuleName 规则名称
     * @param string $ApiName api名称
     * @param array $Methods 请求方法列表
     * @param integer $Status 开关状态，0是关，1是开
     * @param string $Regex 正则匹配内容
     * @param integer $UpdateTime 10更新时间戳
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ApiName",$param) and $param["ApiName"] !== null) {
            $this->ApiName = $param["ApiName"];
        }

        if (array_key_exists("Methods",$param) and $param["Methods"] !== null) {
            $this->Methods = $param["Methods"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
