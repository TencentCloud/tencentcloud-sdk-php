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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。
 *
 * @method string getName() 获取<p>预设参与方姓名。</p>
 * @method void setName(string $Name) 设置<p>预设参与方姓名。</p>
 * @method string getMobile() 获取<p>预设参与方手机号。</p>
 * @method void setMobile(string $Mobile) 设置<p>预设参与方手机号。</p>
 * @method string getIdCardNumber() 获取<p>预设参与方证件号，需要和IdCardType同时传入。</p><p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置<p>预设参与方证件号，需要和IdCardType同时传入。</p><p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
 * @method string getIdCardType() 获取<p>预设参与方的证件类型，需要与IdCardNumber同时传入。</p><p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置<p>预设参与方的证件类型，需要与IdCardNumber同时传入。</p><p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
 * @method string getOrganizationName() 获取<p>企业用户动态签署方场景指定预设企业名称。</p><p><code>注意：1. 若为企业动态签署方场景，此参数必须要指定。2. 企业动态签署方场景暂不支持指定姓名证件手机号等参数，仅支持指定企业名称。</code></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>企业用户动态签署方场景指定预设企业名称。</p><p><code>注意：1. 若为企业动态签署方场景，此参数必须要指定。2. 企业动态签署方场景暂不支持指定姓名证件手机号等参数，仅支持指定企业名称。</code></p>
 */
class PresetApproverInfo extends AbstractModel
{
    /**
     * @var string <p>预设参与方姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>预设参与方手机号。</p>
     */
    public $Mobile;

    /**
     * @var string <p>预设参与方证件号，需要和IdCardType同时传入。</p><p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string <p>预设参与方的证件类型，需要与IdCardNumber同时传入。</p><p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
     */
    public $IdCardType;

    /**
     * @var string <p>企业用户动态签署方场景指定预设企业名称。</p><p><code>注意：1. 若为企业动态签署方场景，此参数必须要指定。2. 企业动态签署方场景暂不支持指定姓名证件手机号等参数，仅支持指定企业名称。</code></p>
     */
    public $OrganizationName;

    /**
     * @param string $Name <p>预设参与方姓名。</p>
     * @param string $Mobile <p>预设参与方手机号。</p>
     * @param string $IdCardNumber <p>预设参与方证件号，需要和IdCardType同时传入。</p><p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li></ul>
     * @param string $IdCardType <p>预设参与方的证件类型，需要与IdCardNumber同时传入。</p><p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证</li></ul>
     * @param string $OrganizationName <p>企业用户动态签署方场景指定预设企业名称。</p><p><code>注意：1. 若为企业动态签署方场景，此参数必须要指定。2. 企业动态签署方场景暂不支持指定姓名证件手机号等参数，仅支持指定企业名称。</code></p>
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

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}
