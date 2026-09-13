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
 * 创建流程的签署方信息
 *
 * @method integer getApproverType() 获取<p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：<ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，“授权签”可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">“授权签”使用说明</a>文档。</li><li> <b>7</b> :个人C端“授权签”，适用于个人“授权签”场景。注: <b>个人“授权签”场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul></p>
 * @method void setApproverType(integer $ApproverType) 设置<p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：<ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，“授权签”可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">“授权签”使用说明</a>文档。</li><li> <b>7</b> :个人C端“授权签”，适用于个人“授权签”场景。注: <b>个人“授权签”场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul></p>
 * @method string getOrganizationName() 获取<p>组织机构名称。请确认该名称与企业营业执照中注册的名称一致。如果名称中包含英文括号()，请使用中文括号（）代替。注: <code>当approverType=0(企业签署方) 或 approverType=3(企业“授权签”)时，必须指定</code></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>组织机构名称。请确认该名称与企业营业执照中注册的名称一致。如果名称中包含英文括号()，请使用中文括号（）代替。注: <code>当approverType=0(企业签署方) 或 approverType=3(企业“授权签”)时，必须指定</code></p>
 * @method string getApproverName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
 * @method void setApproverName(string $ApproverName) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
 * @method string getApproverMobile() 获取<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
 * @method string getApproverIdCardType() 获取<p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method string getApproverIdCardNumber() 获取<p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getRecipientId() 获取<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 */
class MiniAppCreateApproverInfo extends AbstractModel
{
    /**
     * @var integer <p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：<ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，“授权签”可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">“授权签”使用说明</a>文档。</li><li> <b>7</b> :个人C端“授权签”，适用于个人“授权签”场景。注: <b>个人“授权签”场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul></p>
     */
    public $ApproverType;

    /**
     * @var string <p>组织机构名称。请确认该名称与企业营业执照中注册的名称一致。如果名称中包含英文括号()，请使用中文括号（）代替。注: <code>当approverType=0(企业签署方) 或 approverType=3(企业“授权签”)时，必须指定</code></p>
     */
    public $OrganizationName;

    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
     */
    public $ApproverName;

    /**
     * @var string <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
     */
    public $ApproverMobile;

    /**
     * @var string <p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
     */
    public $RecipientId;

    /**
     * @param integer $ApproverType <p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：<ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，“授权签”可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">“授权签”使用说明</a>文档。</li><li> <b>7</b> :个人C端“授权签”，适用于个人“授权签”场景。注: <b>个人“授权签”场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul></p>
     * @param string $OrganizationName <p>组织机构名称。请确认该名称与企业营业执照中注册的名称一致。如果名称中包含英文括号()，请使用中文括号（）代替。注: <code>当approverType=0(企业签署方) 或 approverType=3(企业“授权签”)时，必须指定</code></p>
     * @param string $ApproverName <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
     * @param string $ApproverMobile <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
     * @param string $ApproverIdCardType <p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
     * @param string $ApproverIdCardNumber <p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $RecipientId <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
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
        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
