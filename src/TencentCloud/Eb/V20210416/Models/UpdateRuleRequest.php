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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateRule请求参数结构体
 *
 * @method string getRuleId() 获取事件规则ID
 * @method void setRuleId(string $RuleId) 设置事件规则ID
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method boolean getEnable() 获取使能开关。
 * @method void setEnable(boolean $Enable) 设置使能开关。
 * @method string getDescription() 获取规则描述，不限字符类型，200字符描述以内。
 * @method void setDescription(string $Description) 设置规则描述，不限字符类型，200字符描述以内。
 * @method string getEventPattern() 获取参考：[事件模式](https://cloud.tencent.com/document/product/1359/56084)
 * @method void setEventPattern(string $EventPattern) 设置参考：[事件模式](https://cloud.tencent.com/document/product/1359/56084)
 * @method string getRuleName() 获取事件规则名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 * @method void setRuleName(string $RuleName) 设置事件规则名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
 */
class UpdateRuleRequest extends AbstractModel
{
    /**
     * @var string 事件规则ID
     */
    public $RuleId;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var boolean 使能开关。
     */
    public $Enable;

    /**
     * @var string 规则描述，不限字符类型，200字符描述以内。
     */
    public $Description;

    /**
     * @var string 参考：[事件模式](https://cloud.tencent.com/document/product/1359/56084)
     */
    public $EventPattern;

    /**
     * @var string 事件规则名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
     */
    public $RuleName;

    /**
     * @param string $RuleId 事件规则ID
     * @param string $EventBusId 事件集ID
     * @param boolean $Enable 使能开关。
     * @param string $Description 规则描述，不限字符类型，200字符描述以内。
     * @param string $EventPattern 参考：[事件模式](https://cloud.tencent.com/document/product/1359/56084)
     * @param string $RuleName 事件规则名称，只能包含字母、数字、下划线、连字符，以字母开头，以数字或字母结尾，2~60个字符
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventPattern",$param) and $param["EventPattern"] !== null) {
            $this->EventPattern = $param["EventPattern"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }
    }
}
