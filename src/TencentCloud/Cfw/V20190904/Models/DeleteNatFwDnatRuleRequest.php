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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteNatFwDnatRule请求参数结构体
 *
 * @method integer getMode() 获取0：cfw新增模式，1：cfw接入模式。
 * @method void setMode(integer $Mode) 设置0：cfw新增模式，1：cfw接入模式。
 * @method string getCfwInstance() 获取防火墙实例id，该字段必须传递。
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id，该字段必须传递。
 * @method array getDnatRules() 获取添加或删除操作的Dnat规则列表。
 * @method void setDnatRules(array $DnatRules) 设置添加或删除操作的Dnat规则列表。
 */
class DeleteNatFwDnatRuleRequest extends AbstractModel
{
    /**
     * @var integer 0：cfw新增模式，1：cfw接入模式。
     */
    public $Mode;

    /**
     * @var string 防火墙实例id，该字段必须传递。
     */
    public $CfwInstance;

    /**
     * @var array 添加或删除操作的Dnat规则列表。
     */
    public $DnatRules;

    /**
     * @param integer $Mode 0：cfw新增模式，1：cfw接入模式。
     * @param string $CfwInstance 防火墙实例id，该字段必须传递。
     * @param array $DnatRules 添加或删除操作的Dnat规则列表。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("DnatRules",$param) and $param["DnatRules"] !== null) {
            $this->DnatRules = [];
            foreach ($param["DnatRules"] as $key => $value){
                $obj = new CfwNatDnatRule();
                $obj->deserialize($value);
                array_push($this->DnatRules, $obj);
            }
        }
    }
}
