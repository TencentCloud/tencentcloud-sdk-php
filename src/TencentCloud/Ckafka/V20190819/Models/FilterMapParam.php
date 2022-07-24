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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤器参数
 *
 * @method string getKey() 获取Key值
 * @method void setKey(string $Key) 设置Key值
 * @method string getMatchMode() 获取匹配模式，前缀匹配PREFIX，后缀匹配SUFFIX，包含匹配CONTAINS，EXCEPT除外匹配，数值匹配NUMBER，IP匹配IP
 * @method void setMatchMode(string $MatchMode) 设置匹配模式，前缀匹配PREFIX，后缀匹配SUFFIX，包含匹配CONTAINS，EXCEPT除外匹配，数值匹配NUMBER，IP匹配IP
 * @method string getValue() 获取Value值
 * @method void setValue(string $Value) 设置Value值
 * @method string getType() 获取固定REGULAR
 * @method void setType(string $Type) 设置固定REGULAR
 */
class FilterMapParam extends AbstractModel
{
    /**
     * @var string Key值
     */
    public $Key;

    /**
     * @var string 匹配模式，前缀匹配PREFIX，后缀匹配SUFFIX，包含匹配CONTAINS，EXCEPT除外匹配，数值匹配NUMBER，IP匹配IP
     */
    public $MatchMode;

    /**
     * @var string Value值
     */
    public $Value;

    /**
     * @var string 固定REGULAR
     */
    public $Type;

    /**
     * @param string $Key Key值
     * @param string $MatchMode 匹配模式，前缀匹配PREFIX，后缀匹配SUFFIX，包含匹配CONTAINS，EXCEPT除外匹配，数值匹配NUMBER，IP匹配IP
     * @param string $Value Value值
     * @param string $Type 固定REGULAR
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("MatchMode",$param) and $param["MatchMode"] !== null) {
            $this->MatchMode = $param["MatchMode"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
