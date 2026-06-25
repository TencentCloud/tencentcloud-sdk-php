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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关 A 层转发脱敏配置（请求转发到 LLM 供应商前对 messages 替换为占位符）
 *
 * @method boolean getEnabled() 获取<p>转发脱敏开关</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>转发脱敏开关</p>
 * @method array getPredefinedRuleTypes() 获取<p>预定义规则类型</p><p>枚举值：</p><ul><li>Phone： 电话号码</li><li>IdCard： 身份证号</li><li>BankCard： 银行卡号</li><li>Email： 电子邮箱地址</li><li>IP： IP地址</li><li>Name： 姓名</li></ul>
 * @method void setPredefinedRuleTypes(array $PredefinedRuleTypes) 设置<p>预定义规则类型</p><p>枚举值：</p><ul><li>Phone： 电话号码</li><li>IdCard： 身份证号</li><li>BankCard： 银行卡号</li><li>Email： 电子邮箱地址</li><li>IP： IP地址</li><li>Name： 姓名</li></ul>
 * @method array getCustomRules() 获取<p>自定义脱敏规则</p>
 * @method void setCustomRules(array $CustomRules) 设置<p>自定义脱敏规则</p>
 * @method string getPlaceholderFormat() 获取<p>掩码</p>
 * @method void setPlaceholderFormat(string $PlaceholderFormat) 设置<p>掩码</p>
 * @method string getOnFailure() 获取<p>脱敏异常处理</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>Skip： 跳过</li></ul>
 * @method void setOnFailure(string $OnFailure) 设置<p>脱敏异常处理</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>Skip： 跳过</li></ul>
 */
class AIGWForwardDesensitizeConfig extends AbstractModel
{
    /**
     * @var boolean <p>转发脱敏开关</p>
     */
    public $Enabled;

    /**
     * @var array <p>预定义规则类型</p><p>枚举值：</p><ul><li>Phone： 电话号码</li><li>IdCard： 身份证号</li><li>BankCard： 银行卡号</li><li>Email： 电子邮箱地址</li><li>IP： IP地址</li><li>Name： 姓名</li></ul>
     */
    public $PredefinedRuleTypes;

    /**
     * @var array <p>自定义脱敏规则</p>
     */
    public $CustomRules;

    /**
     * @var string <p>掩码</p>
     */
    public $PlaceholderFormat;

    /**
     * @var string <p>脱敏异常处理</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>Skip： 跳过</li></ul>
     */
    public $OnFailure;

    /**
     * @param boolean $Enabled <p>转发脱敏开关</p>
     * @param array $PredefinedRuleTypes <p>预定义规则类型</p><p>枚举值：</p><ul><li>Phone： 电话号码</li><li>IdCard： 身份证号</li><li>BankCard： 银行卡号</li><li>Email： 电子邮箱地址</li><li>IP： IP地址</li><li>Name： 姓名</li></ul>
     * @param array $CustomRules <p>自定义脱敏规则</p>
     * @param string $PlaceholderFormat <p>掩码</p>
     * @param string $OnFailure <p>脱敏异常处理</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>Skip： 跳过</li></ul>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("PredefinedRuleTypes",$param) and $param["PredefinedRuleTypes"] !== null) {
            $this->PredefinedRuleTypes = $param["PredefinedRuleTypes"];
        }

        if (array_key_exists("CustomRules",$param) and $param["CustomRules"] !== null) {
            $this->CustomRules = [];
            foreach ($param["CustomRules"] as $key => $value){
                $obj = new AIGWCustomDesensitizeRule();
                $obj->deserialize($value);
                array_push($this->CustomRules, $obj);
            }
        }

        if (array_key_exists("PlaceholderFormat",$param) and $param["PlaceholderFormat"] !== null) {
            $this->PlaceholderFormat = $param["PlaceholderFormat"];
        }

        if (array_key_exists("OnFailure",$param) and $param["OnFailure"] !== null) {
            $this->OnFailure = $param["OnFailure"];
        }
    }
}
