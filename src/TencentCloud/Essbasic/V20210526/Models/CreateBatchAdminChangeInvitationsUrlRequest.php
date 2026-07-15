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
 * CreateBatchAdminChangeInvitationsUrl请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>
 * @method string getNewAdminName() 获取<p>组织机构要变更的超管姓名。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的姓名保持一致。</p>
 * @method void setNewAdminName(string $NewAdminName) 设置<p>组织机构要变更的超管姓名。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的姓名保持一致。</p>
 * @method string getNewAdminMobile() 获取<p>组织机构要变更的超管手机号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的手机号保持一致。 超管手机号 和超管证件号 二选一 必填。 注意： 1. 如果新超管的个人身份在电子签进行了手机号的变更，之前提交的超管变更任务将无法获取。</p>
 * @method void setNewAdminMobile(string $NewAdminMobile) 设置<p>组织机构要变更的超管手机号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的手机号保持一致。 超管手机号 和超管证件号 二选一 必填。 注意： 1. 如果新超管的个人身份在电子签进行了手机号的变更，之前提交的超管变更任务将无法获取。</p>
 * @method string getNewAdminIdCardType() 获取<p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)<br>需要更当前操作人的证件类型保持一致。</li></ul><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>默认值：ID_CARD</p>
 * @method void setNewAdminIdCardType(string $NewAdminIdCardType) 设置<p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)<br>需要更当前操作人的证件类型保持一致。</li></ul><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>默认值：ID_CARD</p>
 * @method string getNewAdminIdCardNumber() 获取<p>组织机构要变更的超管证件号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的证件号保持一致。 超管手机号和超管证件号 二选一必填。</p>
 * @method void setNewAdminIdCardNumber(string $NewAdminIdCardNumber) 设置<p>组织机构要变更的超管证件号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的证件号保持一致。 超管手机号和超管证件号 二选一必填。</p>
 * @method string getEndpoint() 获取<p>要跳转的链接类型</p><ul><li> **HTTP**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>**QR_CODE**： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>枚举值：</p><ul><li>HTTP： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>HTTP_SHORT_URL： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>APP： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>QR_CODE： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>默认值：HTTP</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>要跳转的链接类型</p><ul><li> **HTTP**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>**QR_CODE**： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>枚举值：</p><ul><li>HTTP： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>HTTP_SHORT_URL： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>APP： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>QR_CODE： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>默认值：HTTP</p>
 */
class CreateBatchAdminChangeInvitationsUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>
     */
    public $Agent;

    /**
     * @var string <p>组织机构要变更的超管姓名。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的姓名保持一致。</p>
     */
    public $NewAdminName;

    /**
     * @var string <p>组织机构要变更的超管手机号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的手机号保持一致。 超管手机号 和超管证件号 二选一 必填。 注意： 1. 如果新超管的个人身份在电子签进行了手机号的变更，之前提交的超管变更任务将无法获取。</p>
     */
    public $NewAdminMobile;

    /**
     * @var string <p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)<br>需要更当前操作人的证件类型保持一致。</li></ul><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>默认值：ID_CARD</p>
     */
    public $NewAdminIdCardType;

    /**
     * @var string <p>组织机构要变更的超管证件号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的证件号保持一致。 超管手机号和超管证件号 二选一必填。</p>
     */
    public $NewAdminIdCardNumber;

    /**
     * @var string <p>要跳转的链接类型</p><ul><li> **HTTP**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>**QR_CODE**： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>枚举值：</p><ul><li>HTTP： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>HTTP_SHORT_URL： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>APP： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>QR_CODE： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>默认值：HTTP</p>
     */
    public $Endpoint;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li></ul>
     * @param string $NewAdminName <p>组织机构要变更的超管姓名。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的姓名保持一致。</p>
     * @param string $NewAdminMobile <p>组织机构要变更的超管手机号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的手机号保持一致。 超管手机号 和超管证件号 二选一 必填。 注意： 1. 如果新超管的个人身份在电子签进行了手机号的变更，之前提交的超管变更任务将无法获取。</p>
     * @param string $NewAdminIdCardType <p>组织机构要变更的超管证件类型支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)<br>需要更当前操作人的证件类型保持一致。</li></ul><p>枚举值：</p><ul><li>ID_CARD： 中国大陆居民身份证 (默认值)</li><li>HONGKONG_AND_MACAO： 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN： 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>默认值：ID_CARD</p>
     * @param string $NewAdminIdCardNumber <p>组织机构要变更的超管证件号。 在超管变更流程中，必须是超管本人进行操作，需要更当前操作人的证件号保持一致。 超管手机号和超管证件号 二选一必填。</p>
     * @param string $Endpoint <p>要跳转的链接类型</p><ul><li> **HTTP**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>**HTTP_SHORT_URL**：跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>**APP**： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>**QR_CODE**： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>枚举值：</p><ul><li>HTTP： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型 ，此时返回长链 （默认类型）。</li><li>HTTP_SHORT_URL： 跳转电子签小程序的http_url，短信通知或者H5跳转适合此类型，此时返回短链。</li><li>APP： 第三方APP或小程序跳转电子签小程序的path，APP或者小程序跳转适合此类型。</li><li>QR_CODE： 跳转电子签小程序的http_url的二维码形式，可以在页面展示适合此类型。</li></ul><p>默认值：HTTP</p>
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

        if (array_key_exists("NewAdminName",$param) and $param["NewAdminName"] !== null) {
            $this->NewAdminName = $param["NewAdminName"];
        }

        if (array_key_exists("NewAdminMobile",$param) and $param["NewAdminMobile"] !== null) {
            $this->NewAdminMobile = $param["NewAdminMobile"];
        }

        if (array_key_exists("NewAdminIdCardType",$param) and $param["NewAdminIdCardType"] !== null) {
            $this->NewAdminIdCardType = $param["NewAdminIdCardType"];
        }

        if (array_key_exists("NewAdminIdCardNumber",$param) and $param["NewAdminIdCardNumber"] !== null) {
            $this->NewAdminIdCardNumber = $param["NewAdminIdCardNumber"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
