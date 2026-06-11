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
 * 补充签署人信息
- RecipientId 必须指定
-  通过企业微信自定义账号ID补充签署人时，ApproverSource 和 CustomUserId 必填，ApproverSource取值：WEWORKAPP
- 通过二要素（姓名/手机号）补充签署人时，ApproverName 和 ApproverMobile 必填，ApproverSource设置为空
- 补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充
 *
 * @method string getRecipientId() 获取<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。<br>模板发起合同时，该参数为必填项。<br>文件发起合同时，该参数无需传值。<br>如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。<br>模板发起合同时，该参数为必填项。<br>文件发起合同时，该参数无需传值。<br>如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 * @method string getApproverSource() 获取<p>签署人来源<br>WEWORKAPP: 企业微信<br><br>仅【企微或签】时指定WEWORKAPP</p>
 * @method void setApproverSource(string $ApproverSource) 设置<p>签署人来源<br>WEWORKAPP: 企业微信<br><br>仅【企微或签】时指定WEWORKAPP</p>
 * @method string getCustomUserId() 获取<p>企业微信UserId<br><br>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId</p>
 * @method void setCustomUserId(string $CustomUserId) 设置<p>企业微信UserId<br><br>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId</p>
 * @method string getApproverName() 获取<p>企业签署人的员工姓名。除企业微信应用场景（ApproverSource设置为WEWORKAPP）外，本字段为必填。</p>
 * @method void setApproverName(string $ApproverName) 设置<p>企业签署人的员工姓名。除企业微信应用场景（ApproverSource设置为WEWORKAPP）外，本字段为必填。</p>
 * @method string getApproverMobile() 获取<p>补充企业签署人员工手机号</p><ul><li>ApproverSource!=WEWORKAPP时，必传</li></ul>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>补充企业签署人员工手机号</p><ul><li>ApproverSource!=WEWORKAPP时，必传</li></ul>
 * @method string getOrganizationName() 获取<p>补充企业动态签署人时，需要指定对应企业名称</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>补充企业动态签署人时，需要指定对应企业名称</p>
 * @method string getApproverIdCardType() 获取<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>注: 补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</p>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>注: 补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</p>
 * @method string getApproverIdCardNumber() 获取<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串</li></ul><p>注：<code>补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</code></p>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串</li></ul><p>注：<code>补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</code></p>
 * @method string getFlowId() 获取<p>合同流程ID</p><ul><li>补充合同组子合同动态签署人时必传。</li><li>补充普通合同时，请阅读：<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口</a>的接口使用说明</li></ul>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID</p><ul><li>补充合同组子合同动态签署人时必传。</li><li>补充普通合同时，请阅读：<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口</a>的接口使用说明</li></ul>
 * @method string getNotifyType() 获取<p>通知类型：</p><li>当FillApproverType =0，或签场景补充签署人时，指定是否发送或签领取短信</li><li>SMS：开启或签领取短信通知</li><li>NONE：关闭或签领取短信通知</li><li>当NotifyType=NONE时，可调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateSchemeUrl" target="_blank" rel="noopener noreferrer">获取跳转至腾讯电子签小程序的签署链接</a>接口生成签署链接来完成或签领取</li>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知类型：</p><li>当FillApproverType =0，或签场景补充签署人时，指定是否发送或签领取短信</li><li>SMS：开启或签领取短信通知</li><li>NONE：关闭或签领取短信通知</li><li>当NotifyType=NONE时，可调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateSchemeUrl" target="_blank" rel="noopener noreferrer">获取跳转至腾讯电子签小程序的签署链接</a>接口生成签署链接来完成或签领取</li>
 */
class FillApproverInfo extends AbstractModel
{
    /**
     * @var string <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。<br>模板发起合同时，该参数为必填项。<br>文件发起合同时，该参数无需传值。<br>如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
     */
    public $RecipientId;

    /**
     * @var string <p>签署人来源<br>WEWORKAPP: 企业微信<br><br>仅【企微或签】时指定WEWORKAPP</p>
     */
    public $ApproverSource;

    /**
     * @var string <p>企业微信UserId<br><br>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId</p>
     */
    public $CustomUserId;

    /**
     * @var string <p>企业签署人的员工姓名。除企业微信应用场景（ApproverSource设置为WEWORKAPP）外，本字段为必填。</p>
     */
    public $ApproverName;

    /**
     * @var string <p>补充企业签署人员工手机号</p><ul><li>ApproverSource!=WEWORKAPP时，必传</li></ul>
     */
    public $ApproverMobile;

    /**
     * @var string <p>补充企业动态签署人时，需要指定对应企业名称</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>注: 补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</p>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串</li></ul><p>注：<code>补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</code></p>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string <p>合同流程ID</p><ul><li>补充合同组子合同动态签署人时必传。</li><li>补充普通合同时，请阅读：<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口</a>的接口使用说明</li></ul>
     */
    public $FlowId;

    /**
     * @var string <p>通知类型：</p><li>当FillApproverType =0，或签场景补充签署人时，指定是否发送或签领取短信</li><li>SMS：开启或签领取短信通知</li><li>NONE：关闭或签领取短信通知</li><li>当NotifyType=NONE时，可调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateSchemeUrl" target="_blank" rel="noopener noreferrer">获取跳转至腾讯电子签小程序的签署链接</a>接口生成签署链接来完成或签领取</li>
     */
    public $NotifyType;

    /**
     * @param string $RecipientId <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。<br>模板发起合同时，该参数为必填项。<br>文件发起合同时，该参数无需传值。<br>如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
     * @param string $ApproverSource <p>签署人来源<br>WEWORKAPP: 企业微信<br><br>仅【企微或签】时指定WEWORKAPP</p>
     * @param string $CustomUserId <p>企业微信UserId<br><br>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId</p>
     * @param string $ApproverName <p>企业签署人的员工姓名。除企业微信应用场景（ApproverSource设置为WEWORKAPP）外，本字段为必填。</p>
     * @param string $ApproverMobile <p>补充企业签署人员工手机号</p><ul><li>ApproverSource!=WEWORKAPP时，必传</li></ul>
     * @param string $OrganizationName <p>补充企业动态签署人时，需要指定对应企业名称</p>
     * @param string $ApproverIdCardType <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p>注: 补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</p>
     * @param string $ApproverIdCardNumber <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串</li></ul><p>注：<code>补充个人签署方时，若该用户已在电子签完成实名则可通过指定姓名和证件类型、证件号码完成补充。</code></p>
     * @param string $FlowId <p>合同流程ID</p><ul><li>补充合同组子合同动态签署人时必传。</li><li>补充普通合同时，请阅读：<a href="https://qian.tencent.com/developers/companyApis/operateFlows/CreateFlowApprovers/" target="_blank">补充签署人接口</a>的接口使用说明</li></ul>
     * @param string $NotifyType <p>通知类型：</p><li>当FillApproverType =0，或签场景补充签署人时，指定是否发送或签领取短信</li><li>SMS：开启或签领取短信通知</li><li>NONE：关闭或签领取短信通知</li><li>当NotifyType=NONE时，可调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateSchemeUrl" target="_blank" rel="noopener noreferrer">获取跳转至腾讯电子签小程序的签署链接</a>接口生成签署链接来完成或签领取</li>
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("ApproverSource",$param) and $param["ApproverSource"] !== null) {
            $this->ApproverSource = $param["ApproverSource"];
        }

        if (array_key_exists("CustomUserId",$param) and $param["CustomUserId"] !== null) {
            $this->CustomUserId = $param["CustomUserId"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }
    }
}
