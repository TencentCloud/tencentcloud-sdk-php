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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL配置
 *
 * @method string getSwitch() 获取开关。
1. on 开启
2. off 关闭
 * @method void setSwitch(string $Switch) 设置开关。
1. on 开启
2. off 关闭
 * @method array getUserRules() 获取自定义-用户规则。
 * @method void setUserRules(array $UserRules) 设置自定义-用户规则。
 */
class AclConfig extends AbstractModel
{
    /**
     * @var string 开关。
1. on 开启
2. off 关闭
     */
    public $Switch;

    /**
     * @var array 自定义-用户规则。
     */
    public $UserRules;

    /**
     * @param string $Switch 开关。
1. on 开启
2. off 关闭
     * @param array $UserRules 自定义-用户规则。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("UserRules",$param) and $param["UserRules"] !== null) {
            $this->UserRules = [];
            foreach ($param["UserRules"] as $key => $value){
                $obj = new ACLUserRule();
                $obj->deserialize($value);
                array_push($this->UserRules, $obj);
            }
        }
    }
}
