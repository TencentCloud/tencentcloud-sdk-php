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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNatAclRule请求参数结构体
 *
 * @method string getGroupId() 获取规则组ID
 * @method void setGroupId(string $GroupId) 设置规则组ID
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 */
class CreateNatAclRuleRequest extends AbstractModel
{
    /**
     * @var string 规则组ID
     */
    public $GroupId;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @param string $GroupId 规则组ID
     * @param array $Rules 规则列表
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new NatAclRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
