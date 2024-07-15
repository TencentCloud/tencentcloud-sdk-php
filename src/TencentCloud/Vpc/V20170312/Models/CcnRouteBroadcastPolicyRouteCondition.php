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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由传播策略之路由条件
 *
 * @method string getName() 获取条件类型
 * @method void setName(string $Name) 设置条件类型
 * @method array getValues() 获取条件值列表
 * @method void setValues(array $Values) 设置条件值列表
 * @method integer getMatchPattern() 获取匹配模式，`1` 精确匹配，`0` 模糊匹配
 * @method void setMatchPattern(integer $MatchPattern) 设置匹配模式，`1` 精确匹配，`0` 模糊匹配
 */
class CcnRouteBroadcastPolicyRouteCondition extends AbstractModel
{
    /**
     * @var string 条件类型
     */
    public $Name;

    /**
     * @var array 条件值列表
     */
    public $Values;

    /**
     * @var integer 匹配模式，`1` 精确匹配，`0` 模糊匹配
     */
    public $MatchPattern;

    /**
     * @param string $Name 条件类型
     * @param array $Values 条件值列表
     * @param integer $MatchPattern 匹配模式，`1` 精确匹配，`0` 模糊匹配
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("MatchPattern",$param) and $param["MatchPattern"] !== null) {
            $this->MatchPattern = $param["MatchPattern"];
        }
    }
}
