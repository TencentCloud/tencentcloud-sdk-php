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
 * 补充签署人信息
- RecipientId 必须指定
-  通过企业微信自定义账号ID补充签署人时，ApproverSource 和 CustomUserId 必填，ApproverSource取值：WEWORKAPP
- 通过二要素（姓名/手机号）补充签署人时，ApproverName 和 ApproverMobile 必填，ApproverSource设置为空
 *
 * @method string getRecipientId() 获取签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
模板发起合同时，该参数为必填项。
文件发起合同是，该参数无需传值。
如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。
 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
模板发起合同时，该参数为必填项。
文件发起合同是，该参数无需传值。
如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。
 * @method string getApproverSource() 获取签署人来源
WEWORKAPP: 企业微信
<br/>仅【企微或签】时指定WEWORKAPP
 * @method void setApproverSource(string $ApproverSource) 设置签署人来源
WEWORKAPP: 企业微信
<br/>仅【企微或签】时指定WEWORKAPP
 * @method string getCustomUserId() 获取企业微信UserId
<br/>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId
 * @method void setCustomUserId(string $CustomUserId) 设置企业微信UserId
<br/>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId
 * @method string getApproverName() 获取补充企业签署人员工姓名
 * @method void setApproverName(string $ApproverName) 设置补充企业签署人员工姓名
 * @method string getApproverMobile() 获取补充企业签署人员工手机号
 * @method void setApproverMobile(string $ApproverMobile) 设置补充企业签署人员工手机号
 */
class FillApproverInfo extends AbstractModel
{
    /**
     * @var string 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
模板发起合同时，该参数为必填项。
文件发起合同是，该参数无需传值。
如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。
     */
    public $RecipientId;

    /**
     * @var string 签署人来源
WEWORKAPP: 企业微信
<br/>仅【企微或签】时指定WEWORKAPP
     */
    public $ApproverSource;

    /**
     * @var string 企业微信UserId
<br/>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId
     */
    public $CustomUserId;

    /**
     * @var string 补充企业签署人员工姓名
     */
    public $ApproverName;

    /**
     * @var string 补充企业签署人员工手机号
     */
    public $ApproverMobile;

    /**
     * @param string $RecipientId 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
模板发起合同时，该参数为必填项。
文件发起合同是，该参数无需传值。
如果开发者后序用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。
     * @param string $ApproverSource 签署人来源
WEWORKAPP: 企业微信
<br/>仅【企微或签】时指定WEWORKAPP
     * @param string $CustomUserId 企业微信UserId
<br/>当ApproverSource为WEWORKAPP的企微或签场景下，必须指企业自有应用获取企业微信的UserId
     * @param string $ApproverName 补充企业签署人员工姓名
     * @param string $ApproverMobile 补充企业签署人员工手机号
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
    }
}
