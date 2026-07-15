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
 * ModifyOrganizationBusinessInfo请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code></p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code></p>
 * @method string getBizLicenseResourceId() 获取<p>企业营业执照或相关证照图片的 resourceId，需提前通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles">上传文件接口</a>获取后传入。<br>注意：电子签<b>不会</b>对上传的营业执照图片做 OCR 识别，该图片仅作为企业信息变更的凭证留存；企业最新的名称、法人、地址等信息仍需通过本接口的其它字段显式传入。</p>
 * @method void setBizLicenseResourceId(string $BizLicenseResourceId) 设置<p>企业营业执照或相关证照图片的 resourceId，需提前通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles">上传文件接口</a>获取后传入。<br>注意：电子签<b>不会</b>对上传的营业执照图片做 OCR 识别，该图片仅作为企业信息变更的凭证留存；企业最新的名称、法人、地址等信息仍需通过本接口的其它字段显式传入。</p>
 * @method string getOrganizationName() 获取<p>变更后的最新工商登记企业名称。<br>仅当企业名称发生变更时传入，未变更则不传（系统自动沿用电子签侧当前企业名称）。<br></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>变更后的最新工商登记企业名称。<br>仅当企业名称发生变更时传入，未变更则不传（系统自动沿用电子签侧当前企业名称）。<br></p>
 * @method string getAddress() 获取<p>变更后的企业注册地址。<br>仅当地址发生变更时传入，未变更则不传；传入后系统会自动解析省/市/区。<br></p>
 * @method void setAddress(string $Address) 设置<p>变更后的企业注册地址。<br>仅当地址发生变更时传入，未变更则不传；传入后系统会自动解析省/市/区。<br></p>
 * @method string getOrganizationType() 获取<p>变更后的企业类型。<br>仅当企业类型发生变更时传入，未变更则不传（沿用当前类型）。<br>目前仅支持个体工商户（INDIVIDUALBIZ）变更为企业（ENTERPRISE）。</p><p>枚举值：</p><ul><li>INDIVIDUALBIZ： 个体工商户</li><li>ENTERPRISE： 企业</li></ul>
 * @method void setOrganizationType(string $OrganizationType) 设置<p>变更后的企业类型。<br>仅当企业类型发生变更时传入，未变更则不传（沿用当前类型）。<br>目前仅支持个体工商户（INDIVIDUALBIZ）变更为企业（ENTERPRISE）。</p><p>枚举值：</p><ul><li>INDIVIDUALBIZ： 个体工商户</li><li>ENTERPRISE： 企业</li></ul>
 * @method string getLegalName() 获取<p>变更后的最新工商登记法人姓名。<br>仅当法人发生变更时传入，未变更则不传（系统自动沿用当前法人姓名）。</p>
 * @method void setLegalName(string $LegalName) 设置<p>变更后的最新工商登记法人姓名。<br>仅当法人发生变更时传入，未变更则不传（系统自动沿用当前法人姓名）。</p>
 * @method string getNewLegalMobile() 获取<p>新法人的手机号。<br>仅当法人发生变更时传入，用于向新法人发送短信通知。<br>需为合法的手机号或固定电话格式。</p>
 * @method void setNewLegalMobile(string $NewLegalMobile) 设置<p>新法人的手机号。<br>仅当法人发生变更时传入，用于向新法人发送短信通知。<br>需为合法的手机号或固定电话格式。</p>
 */
class ModifyOrganizationBusinessInfoRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code></p>
     */
    public $Agent;

    /**
     * @var string <p>企业营业执照或相关证照图片的 resourceId，需提前通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles">上传文件接口</a>获取后传入。<br>注意：电子签<b>不会</b>对上传的营业执照图片做 OCR 识别，该图片仅作为企业信息变更的凭证留存；企业最新的名称、法人、地址等信息仍需通过本接口的其它字段显式传入。</p>
     */
    public $BizLicenseResourceId;

    /**
     * @var string <p>变更后的最新工商登记企业名称。<br>仅当企业名称发生变更时传入，未变更则不传（系统自动沿用电子签侧当前企业名称）。<br></p>
     */
    public $OrganizationName;

    /**
     * @var string <p>变更后的企业注册地址。<br>仅当地址发生变更时传入，未变更则不传；传入后系统会自动解析省/市/区。<br></p>
     */
    public $Address;

    /**
     * @var string <p>变更后的企业类型。<br>仅当企业类型发生变更时传入，未变更则不传（沿用当前类型）。<br>目前仅支持个体工商户（INDIVIDUALBIZ）变更为企业（ENTERPRISE）。</p><p>枚举值：</p><ul><li>INDIVIDUALBIZ： 个体工商户</li><li>ENTERPRISE： 企业</li></ul>
     */
    public $OrganizationType;

    /**
     * @var string <p>变更后的最新工商登记法人姓名。<br>仅当法人发生变更时传入，未变更则不传（系统自动沿用当前法人姓名）。</p>
     */
    public $LegalName;

    /**
     * @var string <p>新法人的手机号。<br>仅当法人发生变更时传入，用于向新法人发送短信通知。<br>需为合法的手机号或固定电话格式。</p>
     */
    public $NewLegalMobile;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code></p>
     * @param string $BizLicenseResourceId <p>企业营业执照或相关证照图片的 resourceId，需提前通过<a href="https://qian.tencent.com/developers/partnerApis/files/UploadFiles">上传文件接口</a>获取后传入。<br>注意：电子签<b>不会</b>对上传的营业执照图片做 OCR 识别，该图片仅作为企业信息变更的凭证留存；企业最新的名称、法人、地址等信息仍需通过本接口的其它字段显式传入。</p>
     * @param string $OrganizationName <p>变更后的最新工商登记企业名称。<br>仅当企业名称发生变更时传入，未变更则不传（系统自动沿用电子签侧当前企业名称）。<br></p>
     * @param string $Address <p>变更后的企业注册地址。<br>仅当地址发生变更时传入，未变更则不传；传入后系统会自动解析省/市/区。<br></p>
     * @param string $OrganizationType <p>变更后的企业类型。<br>仅当企业类型发生变更时传入，未变更则不传（沿用当前类型）。<br>目前仅支持个体工商户（INDIVIDUALBIZ）变更为企业（ENTERPRISE）。</p><p>枚举值：</p><ul><li>INDIVIDUALBIZ： 个体工商户</li><li>ENTERPRISE： 企业</li></ul>
     * @param string $LegalName <p>变更后的最新工商登记法人姓名。<br>仅当法人发生变更时传入，未变更则不传（系统自动沿用当前法人姓名）。</p>
     * @param string $NewLegalMobile <p>新法人的手机号。<br>仅当法人发生变更时传入，用于向新法人发送短信通知。<br>需为合法的手机号或固定电话格式。</p>
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

        if (array_key_exists("BizLicenseResourceId",$param) and $param["BizLicenseResourceId"] !== null) {
            $this->BizLicenseResourceId = $param["BizLicenseResourceId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("OrganizationType",$param) and $param["OrganizationType"] !== null) {
            $this->OrganizationType = $param["OrganizationType"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("NewLegalMobile",$param) and $param["NewLegalMobile"] !== null) {
            $this->NewLegalMobile = $param["NewLegalMobile"];
        }
    }
}
