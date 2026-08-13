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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点完整配置结构。
 *
 * @method string getFormatVersion() 获取<p>语法版本，当前默认为 1.0，输入其他值将会报错。</p>
 * @method void setFormatVersion(string $FormatVersion) 设置<p>语法版本，当前默认为 1.0，输入其他值将会报错。</p>
 * @method ZoneConfig getZoneConfig() 获取<p>站点级配置，包含「站点加速」中所有配置项，且所有项均为必选，否则配置无效。</p>
 * @method void setZoneConfig(ZoneConfig $ZoneConfig) 设置<p>站点级配置，包含「站点加速」中所有配置项，且所有项均为必选，否则配置无效。</p>
 * @method array getRules() 获取<p>规则级配置，包含「规则引擎」中所有规则，且数组可为空，表示不启用任何规则。</p>
 * @method void setRules(array $Rules) 设置<p>规则级配置，包含「规则引擎」中所有规则，且数组可为空，表示不启用任何规则。</p>
 * @method WebSecurity getWebSecurity() 获取<p>Web 安全防护配置，对应控制台中「安全防护 - Web 防护」里支持的功能。</p>
 * @method void setWebSecurity(WebSecurity $WebSecurity) 设置<p>Web 安全防护配置，对应控制台中「安全防护 - Web 防护」里支持的功能。</p>
 * @method array getFunctionTriggers() 获取<p>边缘函数触发规则配置，包含触发「边缘函数」中所有规则，且数组可为空，表示不启用任何规则。</p>
 * @method void setFunctionTriggers(array $FunctionTriggers) 设置<p>边缘函数触发规则配置，包含触发「边缘函数」中所有规则，且数组可为空，表示不启用任何规则。</p>
 */
class ZoneFullConfig extends AbstractModel
{
    /**
     * @var string <p>语法版本，当前默认为 1.0，输入其他值将会报错。</p>
     */
    public $FormatVersion;

    /**
     * @var ZoneConfig <p>站点级配置，包含「站点加速」中所有配置项，且所有项均为必选，否则配置无效。</p>
     */
    public $ZoneConfig;

    /**
     * @var array <p>规则级配置，包含「规则引擎」中所有规则，且数组可为空，表示不启用任何规则。</p>
     */
    public $Rules;

    /**
     * @var WebSecurity <p>Web 安全防护配置，对应控制台中「安全防护 - Web 防护」里支持的功能。</p>
     */
    public $WebSecurity;

    /**
     * @var array <p>边缘函数触发规则配置，包含触发「边缘函数」中所有规则，且数组可为空，表示不启用任何规则。</p>
     */
    public $FunctionTriggers;

    /**
     * @param string $FormatVersion <p>语法版本，当前默认为 1.0，输入其他值将会报错。</p>
     * @param ZoneConfig $ZoneConfig <p>站点级配置，包含「站点加速」中所有配置项，且所有项均为必选，否则配置无效。</p>
     * @param array $Rules <p>规则级配置，包含「规则引擎」中所有规则，且数组可为空，表示不启用任何规则。</p>
     * @param WebSecurity $WebSecurity <p>Web 安全防护配置，对应控制台中「安全防护 - Web 防护」里支持的功能。</p>
     * @param array $FunctionTriggers <p>边缘函数触发规则配置，包含触发「边缘函数」中所有规则，且数组可为空，表示不启用任何规则。</p>
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
        if (array_key_exists("FormatVersion",$param) and $param["FormatVersion"] !== null) {
            $this->FormatVersion = $param["FormatVersion"];
        }

        if (array_key_exists("ZoneConfig",$param) and $param["ZoneConfig"] !== null) {
            $this->ZoneConfig = new ZoneConfig();
            $this->ZoneConfig->deserialize($param["ZoneConfig"]);
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ConfigGroupRuleEngineItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("WebSecurity",$param) and $param["WebSecurity"] !== null) {
            $this->WebSecurity = new WebSecurity();
            $this->WebSecurity->deserialize($param["WebSecurity"]);
        }

        if (array_key_exists("FunctionTriggers",$param) and $param["FunctionTriggers"] !== null) {
            $this->FunctionTriggers = [];
            foreach ($param["FunctionTriggers"] as $key => $value){
                $obj = new ConfigGroupFunctionTrigger();
                $obj->deserialize($value);
                array_push($this->FunctionTriggers, $obj);
            }
        }
    }
}
