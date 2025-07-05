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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePersonAuthCertificateImage请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
 * @method string getUserName() 获取个人用户名称
 * @method void setUserName(string $UserName) 设置个人用户名称
 * @method string getIdCardType() 获取证件类型，支持以下类型<ul><li> ID_CARD  : 中国大陆居民身份证 (默认值)</li><li> HONGKONG_AND_MACAO  : 中国港澳居民来往内地通行证</li><li> HONGKONG_MACAO_AND_TAIWAN  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method void setIdCardType(string $IdCardType) 设置证件类型，支持以下类型<ul><li> ID_CARD  : 中国大陆居民身份证 (默认值)</li><li> HONGKONG_AND_MACAO  : 中国港澳居民来往内地通行证</li><li> HONGKONG_MACAO_AND_TAIWAN  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method string getIdCardNumber() 获取证件号码，应符合以下规则<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置证件号码，应符合以下规则<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getSceneKey() 获取自动签使用的场景值, 可以选择的场景值如下:<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
 * @method void setSceneKey(string $SceneKey) 设置自动签使用的场景值, 可以选择的场景值如下:<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
 */
class CreatePersonAuthCertificateImageRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     */
    public $Agent;

    /**
     * @var string 个人用户名称
     */
    public $UserName;

    /**
     * @var string 证件类型，支持以下类型<ul><li> ID_CARD  : 中国大陆居民身份证 (默认值)</li><li> HONGKONG_AND_MACAO  : 中国港澳居民来往内地通行证</li><li> HONGKONG_MACAO_AND_TAIWAN  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     */
    public $IdCardType;

    /**
     * @var string 证件号码，应符合以下规则<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string 自动签使用的场景值, 可以选择的场景值如下:<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
     */
    public $SceneKey;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。
     * @param string $UserName 个人用户名称
     * @param string $IdCardType 证件类型，支持以下类型<ul><li> ID_CARD  : 中国大陆居民身份证 (默认值)</li><li> HONGKONG_AND_MACAO  : 中国港澳居民来往内地通行证</li><li> HONGKONG_MACAO_AND_TAIWAN  : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     * @param string $IdCardNumber 证件号码，应符合以下规则<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $SceneKey 自动签使用的场景值, 可以选择的场景值如下:<ul><li> **E_PRESCRIPTION_AUTO_SIGN** :  电子处方场景</li><li> **OTHER** :  通用场景</li></ul>注: `不传默认为处方单场景，即E_PRESCRIPTION_AUTO_SIGN`
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("SceneKey",$param) and $param["SceneKey"] !== null) {
            $this->SceneKey = $param["SceneKey"];
        }
    }
}
