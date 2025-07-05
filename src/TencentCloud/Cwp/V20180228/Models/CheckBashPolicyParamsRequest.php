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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckBashPolicyParams请求参数结构体
 *
 * @method string getCheckField() 获取校验内容字段,如果需要检测多个字段时,用逗号分割
<li>Name 策略名称</li>
<li>Process 进程</li>
<li>Name PProcess 父进程</li>
<li>Name AProcess 祖先进程</li>

 * @method void setCheckField(string $CheckField) 设置校验内容字段,如果需要检测多个字段时,用逗号分割
<li>Name 策略名称</li>
<li>Process 进程</li>
<li>Name PProcess 父进程</li>
<li>Name AProcess 祖先进程</li>

 * @method integer getEventId() 获取在事件列表中新增白名时需要提交事件ID
 * @method void setEventId(integer $EventId) 设置在事件列表中新增白名时需要提交事件ID
 * @method string getName() 获取填入的规则名称
 * @method void setName(string $Name) 设置填入的规则名称
 * @method string getRule() 获取该字段不在维护,如果填入该参数,自动替换到Rules.Process

 * @method void setRule(string $Rule) 设置该字段不在维护,如果填入该参数,自动替换到Rules.Process

 * @method integer getId() 获取编辑时传的规则id
 * @method void setId(integer $Id) 设置编辑时传的规则id
 * @method PolicyRules getRules() 获取规则表达式
 * @method void setRules(PolicyRules $Rules) 设置规则表达式
 */
class CheckBashPolicyParamsRequest extends AbstractModel
{
    /**
     * @var string 校验内容字段,如果需要检测多个字段时,用逗号分割
<li>Name 策略名称</li>
<li>Process 进程</li>
<li>Name PProcess 父进程</li>
<li>Name AProcess 祖先进程</li>

     */
    public $CheckField;

    /**
     * @var integer 在事件列表中新增白名时需要提交事件ID
     */
    public $EventId;

    /**
     * @var string 填入的规则名称
     */
    public $Name;

    /**
     * @var string 该字段不在维护,如果填入该参数,自动替换到Rules.Process

     */
    public $Rule;

    /**
     * @var integer 编辑时传的规则id
     */
    public $Id;

    /**
     * @var PolicyRules 规则表达式
     */
    public $Rules;

    /**
     * @param string $CheckField 校验内容字段,如果需要检测多个字段时,用逗号分割
<li>Name 策略名称</li>
<li>Process 进程</li>
<li>Name PProcess 父进程</li>
<li>Name AProcess 祖先进程</li>

     * @param integer $EventId 在事件列表中新增白名时需要提交事件ID
     * @param string $Name 填入的规则名称
     * @param string $Rule 该字段不在维护,如果填入该参数,自动替换到Rules.Process

     * @param integer $Id 编辑时传的规则id
     * @param PolicyRules $Rules 规则表达式
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
        if (array_key_exists("CheckField",$param) and $param["CheckField"] !== null) {
            $this->CheckField = $param["CheckField"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new PolicyRules();
            $this->Rules->deserialize($param["Rules"]);
        }
    }
}
