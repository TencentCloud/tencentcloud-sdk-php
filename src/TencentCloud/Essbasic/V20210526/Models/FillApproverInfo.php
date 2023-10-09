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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定补充签署人信息
- RecipientId 必须指定
 *
 * @method string getRecipientId() 获取签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。

 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。

 * @method string getOpenId() 获取指定企业经办签署人OpenId
 * @method void setOpenId(string $OpenId) 设置指定企业经办签署人OpenId
 * @method string getApproverName() 获取签署人姓名
 * @method void setApproverName(string $ApproverName) 设置签署人姓名
 * @method string getApproverMobile() 获取签署人手机号码
 * @method void setApproverMobile(string $ApproverMobile) 设置签署人手机号码
 * @method string getOrganizationName() 获取企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置企业名称
 * @method string getOrganizationOpenId() 获取企业OpenId
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置企业OpenId
 * @method string getNotChannelOrganization() 获取签署企业非渠道子客，默认为false，即表示同一渠道下的企业；如果为true，则目前表示接收方企业为SaaS企业, 为渠道子客时，organization_open_id+open_id 必传
 * @method void setNotChannelOrganization(string $NotChannelOrganization) 设置签署企业非渠道子客，默认为false，即表示同一渠道下的企业；如果为true，则目前表示接收方企业为SaaS企业, 为渠道子客时，organization_open_id+open_id 必传
 */
class FillApproverInfo extends AbstractModel
{
    /**
     * @var string 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。

     */
    public $RecipientId;

    /**
     * @var string 指定企业经办签署人OpenId
     */
    public $OpenId;

    /**
     * @var string 签署人姓名
     */
    public $ApproverName;

    /**
     * @var string 签署人手机号码
     */
    public $ApproverMobile;

    /**
     * @var string 企业名称
     */
    public $OrganizationName;

    /**
     * @var string 企业OpenId
     */
    public $OrganizationOpenId;

    /**
     * @var string 签署企业非渠道子客，默认为false，即表示同一渠道下的企业；如果为true，则目前表示接收方企业为SaaS企业, 为渠道子客时，organization_open_id+open_id 必传
     */
    public $NotChannelOrganization;

    /**
     * @param string $RecipientId 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。

     * @param string $OpenId 指定企业经办签署人OpenId
     * @param string $ApproverName 签署人姓名
     * @param string $ApproverMobile 签署人手机号码
     * @param string $OrganizationName 企业名称
     * @param string $OrganizationOpenId 企业OpenId
     * @param string $NotChannelOrganization 签署企业非渠道子客，默认为false，即表示同一渠道下的企业；如果为true，则目前表示接收方企业为SaaS企业, 为渠道子客时，organization_open_id+open_id 必传
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

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
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

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("NotChannelOrganization",$param) and $param["NotChannelOrganization"] !== null) {
            $this->NotChannelOrganization = $param["NotChannelOrganization"];
        }
    }
}
