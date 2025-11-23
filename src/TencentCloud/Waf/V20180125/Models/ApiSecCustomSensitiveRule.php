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
 * api安全客户自定义敏感检测规则
 *
 * @method array getPosition() 获取参数位置
 * @method void setPosition(array $Position) 设置参数位置
 * @method string getMatchKey() 获取匹配条件
 * @method void setMatchKey(string $MatchKey) 设置匹配条件
 * @method array getMatchValue() 获取匹配值
 * @method void setMatchValue(array $MatchValue) 设置匹配值
 * @method string getLevel() 获取风险等级
 * @method void setLevel(string $Level) 设置风险等级
 * @method array getMatchCond() 获取匹配符号，当匹配条件为关键字匹配和字符匹配的时候传该值,可传多个
 * @method void setMatchCond(array $MatchCond) 设置匹配符号，当匹配条件为关键字匹配和字符匹配的时候传该值,可传多个
 * @method integer getIsPan() 获取规则是否泛化，默认0表示不泛化
 * @method void setIsPan(integer $IsPan) 设置规则是否泛化，默认0表示不泛化
 */
class ApiSecCustomSensitiveRule extends AbstractModel
{
    /**
     * @var array 参数位置
     */
    public $Position;

    /**
     * @var string 匹配条件
     */
    public $MatchKey;

    /**
     * @var array 匹配值
     */
    public $MatchValue;

    /**
     * @var string 风险等级
     */
    public $Level;

    /**
     * @var array 匹配符号，当匹配条件为关键字匹配和字符匹配的时候传该值,可传多个
     */
    public $MatchCond;

    /**
     * @var integer 规则是否泛化，默认0表示不泛化
     */
    public $IsPan;

    /**
     * @param array $Position 参数位置
     * @param string $MatchKey 匹配条件
     * @param array $MatchValue 匹配值
     * @param string $Level 风险等级
     * @param array $MatchCond 匹配符号，当匹配条件为关键字匹配和字符匹配的时候传该值,可传多个
     * @param integer $IsPan 规则是否泛化，默认0表示不泛化
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
        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("MatchKey",$param) and $param["MatchKey"] !== null) {
            $this->MatchKey = $param["MatchKey"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("MatchCond",$param) and $param["MatchCond"] !== null) {
            $this->MatchCond = $param["MatchCond"];
        }

        if (array_key_exists("IsPan",$param) and $param["IsPan"] !== null) {
            $this->IsPan = $param["IsPan"];
        }
    }
}
