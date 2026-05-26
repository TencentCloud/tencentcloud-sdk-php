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
 * 抄送信息
 *
 * @method string getMobile() 获取<p>被抄送方手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此业务通知方。</p>
 * @method void setMobile(string $Mobile) 设置<p>被抄送方手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此业务通知方。</p>
 * @method string getName() 获取<p>被抄送方姓名。<br>抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。</p>
 * @method void setName(string $Name) 设置<p>被抄送方姓名。<br>抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。</p>
 * @method integer getCcType() 获取<p>被抄送方类型, 可设置以下类型:</p><ul><li> **0** :个人抄送方</li><li> **1** :企业员工抄送方</li></ul>
 * @method void setCcType(integer $CcType) 设置<p>被抄送方类型, 可设置以下类型:</p><ul><li> **0** :个人抄送方</li><li> **1** :企业员工抄送方</li></ul>
 * @method integer getCcPermission() 获取<p>被抄送方权限, 可设置如下权限:</p><ul><li> **0** :可查看合同内容</li><li> **1** :可查看合同内容也可下载原文</li></ul>
 * @method void setCcPermission(integer $CcPermission) 设置<p>被抄送方权限, 可设置如下权限:</p><ul><li> **0** :可查看合同内容</li><li> **1** :可查看合同内容也可下载原文</li></ul>
 * @method string getNotifyType() 获取<p>通知签署方经办人的方式,  有以下途径:</p><ul><li> **sms** :  (默认)短信</li><li> **none** : 不通知</li></ul>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知签署方经办人的方式,  有以下途径:</p><ul><li> **sms** :  (默认)短信</li><li> **none** : 不通知</li></ul>
 * @method string getOrganizationName() 获取<p>被抄送方企业名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注意:<br><font color="red">此为白名单功能，需要联系客户经理，开通白名单后才能使用。</font><br>使用文档 <a href="https://qian.tencent.com/developers/company/enterprise_inbox">签署方/抄送方仅指定企业名称发起合同</a></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>被抄送方企业名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注意:<br><font color="red">此为白名单功能，需要联系客户经理，开通白名单后才能使用。</font><br>使用文档 <a href="https://qian.tencent.com/developers/company/enterprise_inbox">签署方/抄送方仅指定企业名称发起合同</a></p>
 */
class CcInfo extends AbstractModel
{
    /**
     * @var string <p>被抄送方手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此业务通知方。</p>
     */
    public $Mobile;

    /**
     * @var string <p>被抄送方姓名。<br>抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。</p>
     */
    public $Name;

    /**
     * @var integer <p>被抄送方类型, 可设置以下类型:</p><ul><li> **0** :个人抄送方</li><li> **1** :企业员工抄送方</li></ul>
     */
    public $CcType;

    /**
     * @var integer <p>被抄送方权限, 可设置如下权限:</p><ul><li> **0** :可查看合同内容</li><li> **1** :可查看合同内容也可下载原文</li></ul>
     */
    public $CcPermission;

    /**
     * @var string <p>通知签署方经办人的方式,  有以下途径:</p><ul><li> **sms** :  (默认)短信</li><li> **none** : 不通知</li></ul>
     */
    public $NotifyType;

    /**
     * @var string <p>被抄送方企业名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注意:<br><font color="red">此为白名单功能，需要联系客户经理，开通白名单后才能使用。</font><br>使用文档 <a href="https://qian.tencent.com/developers/company/enterprise_inbox">签署方/抄送方仅指定企业名称发起合同</a></p>
     */
    public $OrganizationName;

    /**
     * @param string $Mobile <p>被抄送方手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此业务通知方。</p>
     * @param string $Name <p>被抄送方姓名。<br>抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。</p>
     * @param integer $CcType <p>被抄送方类型, 可设置以下类型:</p><ul><li> **0** :个人抄送方</li><li> **1** :企业员工抄送方</li></ul>
     * @param integer $CcPermission <p>被抄送方权限, 可设置如下权限:</p><ul><li> **0** :可查看合同内容</li><li> **1** :可查看合同内容也可下载原文</li></ul>
     * @param string $NotifyType <p>通知签署方经办人的方式,  有以下途径:</p><ul><li> **sms** :  (默认)短信</li><li> **none** : 不通知</li></ul>
     * @param string $OrganizationName <p>被抄送方企业名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注意:<br><font color="red">此为白名单功能，需要联系客户经理，开通白名单后才能使用。</font><br>使用文档 <a href="https://qian.tencent.com/developers/company/enterprise_inbox">签署方/抄送方仅指定企业名称发起合同</a></p>
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
        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CcType",$param) and $param["CcType"] !== null) {
            $this->CcType = $param["CcType"];
        }

        if (array_key_exists("CcPermission",$param) and $param["CcPermission"] !== null) {
            $this->CcPermission = $param["CcPermission"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }
    }
}
