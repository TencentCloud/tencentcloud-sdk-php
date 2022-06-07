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
 * RateLimit配置
 *
 * @method string getSwitch() 获取开关
 * @method void setSwitch(string $Switch) 设置开关
 * @method array getUserRules() 获取用户规则
 * @method void setUserRules(array $UserRules) 设置用户规则
 * @method RateLimitTemplate getTemplate() 获取默认模板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplate(RateLimitTemplate $Template) 设置默认模板
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitConfig extends AbstractModel
{
    /**
     * @var string 开关
     */
    public $Switch;

    /**
     * @var array 用户规则
     */
    public $UserRules;

    /**
     * @var RateLimitTemplate 默认模板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Template;

    /**
     * @param string $Switch 开关
     * @param array $UserRules 用户规则
     * @param RateLimitTemplate $Template 默认模板
注意：此字段可能返回 null，表示取不到有效值。
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
                $obj = new RateLimitUserRule();
                $obj->deserialize($value);
                array_push($this->UserRules, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new RateLimitTemplate();
            $this->Template->deserialize($param["Template"]);
        }
    }
}
