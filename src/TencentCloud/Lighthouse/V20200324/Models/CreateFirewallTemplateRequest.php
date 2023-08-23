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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFirewallTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
 * @method array getTemplateRules() 获取防火墙规则列表。
 * @method void setTemplateRules(array $TemplateRules) 设置防火墙规则列表。
 */
class CreateFirewallTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称。
     */
    public $TemplateName;

    /**
     * @var array 防火墙规则列表。
     */
    public $TemplateRules;

    /**
     * @param string $TemplateName 模板名称。
     * @param array $TemplateRules 防火墙规则列表。
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateRules",$param) and $param["TemplateRules"] !== null) {
            $this->TemplateRules = [];
            foreach ($param["TemplateRules"] as $key => $value){
                $obj = new FirewallRule();
                $obj->deserialize($value);
                array_push($this->TemplateRules, $obj);
            }
        }
    }
}
