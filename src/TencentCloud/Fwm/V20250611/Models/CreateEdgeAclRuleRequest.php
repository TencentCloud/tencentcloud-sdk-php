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
 * CreateEdgeAclRule请求参数结构体
 *
 * @method string getGroupId() 获取<p>规则组ID</p>
 * @method void setGroupId(string $GroupId) 设置<p>规则组ID</p>
 * @method array getRules() 获取<p>规则列表</p>
 * @method void setRules(array $Rules) 设置<p>规则列表</p>
 */
class CreateEdgeAclRuleRequest extends AbstractModel
{
    /**
     * @var string <p>规则组ID</p>
     */
    public $GroupId;

    /**
     * @var array <p>规则列表</p>
     */
    public $Rules;

    /**
     * @param string $GroupId <p>规则组ID</p>
     * @param array $Rules <p>规则列表</p>
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
                $obj = new EdgeAclRuleInfo();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
