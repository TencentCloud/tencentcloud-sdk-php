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
 * ACL配置
 *
 * @method string getSwitch() 获取开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 * @method array getAclUserRules() 获取用户自定义规则。
 * @method void setAclUserRules(array $AclUserRules) 设置用户自定义规则。
 * @method array getCustomizes() 获取托管定制规则
 * @method void setCustomizes(array $Customizes) 设置托管定制规则
 */
class AclConfig extends AbstractModel
{
    /**
     * @var string 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 用户自定义规则。
     */
    public $AclUserRules;

    /**
     * @var array 托管定制规则
     */
    public $Customizes;

    /**
     * @param string $Switch 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
     * @param array $AclUserRules 用户自定义规则。
     * @param array $Customizes 托管定制规则
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

        if (array_key_exists("AclUserRules",$param) and $param["AclUserRules"] !== null) {
            $this->AclUserRules = [];
            foreach ($param["AclUserRules"] as $key => $value){
                $obj = new AclUserRule();
                $obj->deserialize($value);
                array_push($this->AclUserRules, $obj);
            }
        }

        if (array_key_exists("Customizes",$param) and $param["Customizes"] !== null) {
            $this->Customizes = [];
            foreach ($param["Customizes"] as $key => $value){
                $obj = new AclUserRule();
                $obj->deserialize($value);
                array_push($this->Customizes, $obj);
            }
        }
    }
}
