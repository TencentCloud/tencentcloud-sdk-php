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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。
 *
 * @method string getName() 获取预设参与方姓名。
 * @method void setName(string $Name) 设置预设参与方姓名。
 * @method string getMobile() 获取预设参与方手机号。
 * @method void setMobile(string $Mobile) 设置预设参与方手机号。
 * @method string getIdCardNumber() 获取预设参与方证件号，需要和IdCardType同时传入。

证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置预设参与方证件号，需要和IdCardType同时传入。

证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
 * @method string getIdCardType() 获取预设参与方的证件类型，需要与IdCardNumber同时传入。

证件类型，支持以下类型
<ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置预设参与方的证件类型，需要与IdCardNumber同时传入。

证件类型，支持以下类型
<ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
 */
class PresetApproverInfo extends AbstractModel
{
    /**
     * @var string 预设参与方姓名。
     */
    public $Name;

    /**
     * @var string 预设参与方手机号。
     */
    public $Mobile;

    /**
     * @var string 预设参与方证件号，需要和IdCardType同时传入。

证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string 预设参与方的证件类型，需要与IdCardNumber同时传入。

证件类型，支持以下类型
<ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
     */
    public $IdCardType;

    /**
     * @param string $Name 预设参与方姓名。
     * @param string $Mobile 预设参与方手机号。
     * @param string $IdCardNumber 预设参与方证件号，需要和IdCardType同时传入。

证件号码，应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
     * @param string $IdCardType 预设参与方的证件类型，需要与IdCardNumber同时传入。

证件类型，支持以下类型
<ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }
    }
}
