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
 * 归档合同的参与人信息
 *
 * @method string getApproverName() 获取<p>个人签署人姓名，如果传入，必须是证件上的真实中文名；中文名最长 25 个字符；</p>
 * @method void setApproverName(string $ApproverName) 设置<p>个人签署人姓名，如果传入，必须是证件上的真实中文名；中文名最长 25 个字符；</p>
 * @method integer getApproverType() 获取<p>参与者类型，用于区分个人或企业，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人</p>
 * @method void setApproverType(integer $ApproverType) 设置<p>参与者类型，用于区分个人或企业，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人</p>
 * @method string getOrganizationName() 获取<p>企业签署方名称。长度不超过 200 个字符。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 )， 则企业名称必填。</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>企业签署方名称。长度不超过 200 个字符。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 )， 则企业名称必填。</p>
 * @method string getApproverMobile() 获取<p>签署人手机号，必须是合法手机号。</p>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>签署人手机号，必须是合法手机号。</p>
 * @method string getApproverEmail() 获取<p>签署人邮箱， 必须是合法邮箱格式。</p>
 * @method void setApproverEmail(string $ApproverEmail) 设置<p>签署人邮箱， 必须是合法邮箱格式。</p>
 * @method string getApproverIdCardType() 获取<p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul>
 * @method string getApproverIdCardNumber() 获取<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method integer getApproveTime() 获取<p>当前参与者的签署时间，Unix 秒级时间戳。</p>
 * @method void setApproveTime(integer $ApproveTime) 设置<p>当前参与者的签署时间，Unix 秒级时间戳。</p>
 */
class ArchiveFlowApproverInfo extends AbstractModel
{
    /**
     * @var string <p>个人签署人姓名，如果传入，必须是证件上的真实中文名；中文名最长 25 个字符；</p>
     */
    public $ApproverName;

    /**
     * @var integer <p>参与者类型，用于区分个人或企业，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人</p>
     */
    public $ApproverType;

    /**
     * @var string <p>企业签署方名称。长度不超过 200 个字符。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 )， 则企业名称必填。</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>签署人手机号，必须是合法手机号。</p>
     */
    public $ApproverMobile;

    /**
     * @var string <p>签署人邮箱， 必须是合法邮箱格式。</p>
     */
    public $ApproverEmail;

    /**
     * @var string <p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var integer <p>当前参与者的签署时间，Unix 秒级时间戳。</p>
     */
    public $ApproveTime;

    /**
     * @param string $ApproverName <p>个人签署人姓名，如果传入，必须是证件上的真实中文名；中文名最长 25 个字符；</p>
     * @param integer $ApproverType <p>参与者类型，用于区分个人或企业，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人</p>
     * @param string $OrganizationName <p>企业签署方名称。长度不超过 200 个字符。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 )， 则企业名称必填。</p>
     * @param string $ApproverMobile <p>签署人手机号，必须是合法手机号。</p>
     * @param string $ApproverEmail <p>签署人邮箱， 必须是合法邮箱格式。</p>
     * @param string $ApproverIdCardType <p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul>
     * @param string $ApproverIdCardNumber <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param integer $ApproveTime <p>当前参与者的签署时间，Unix 秒级时间戳。</p>
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
        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("ApproverEmail",$param) and $param["ApproverEmail"] !== null) {
            $this->ApproverEmail = $param["ApproverEmail"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("ApproveTime",$param) and $param["ApproveTime"] !== null) {
            $this->ApproveTime = $param["ApproveTime"];
        }
    }
}
