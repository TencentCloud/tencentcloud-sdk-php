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
 * 应用相关信息
 *
 * @method string getAppId() 获取腾讯电子签颁发给渠道的应用ID，32位字符串
 * @method void setAppId(string $AppId) 设置腾讯电子签颁发给渠道的应用ID，32位字符串
 * @method string getProxyOrganizationId() 获取腾讯电子签颁发给渠道侧合作企业的企业ID
 * @method void setProxyOrganizationId(string $ProxyOrganizationId) 设置腾讯电子签颁发给渠道侧合作企业的企业ID
 * @method string getProxyAppId() 获取腾讯电子签颁发给渠道侧合作企业的应用ID
 * @method void setProxyAppId(string $ProxyAppId) 设置腾讯电子签颁发给渠道侧合作企业的应用ID
 * @method UserInfo getProxyOperator() 获取渠道/平台合作企业经办人（操作员）
 * @method void setProxyOperator(UserInfo $ProxyOperator) 设置渠道/平台合作企业经办人（操作员）
 * @method string getProxyOrganizationOpenId() 获取渠道/平台合作企业的企业ID
 * @method void setProxyOrganizationOpenId(string $ProxyOrganizationOpenId) 设置渠道/平台合作企业的企业ID
 */
class Agent extends AbstractModel
{
    /**
     * @var string 腾讯电子签颁发给渠道的应用ID，32位字符串
     */
    public $AppId;

    /**
     * @var string 腾讯电子签颁发给渠道侧合作企业的企业ID
     */
    public $ProxyOrganizationId;

    /**
     * @var string 腾讯电子签颁发给渠道侧合作企业的应用ID
     */
    public $ProxyAppId;

    /**
     * @var UserInfo 渠道/平台合作企业经办人（操作员）
     */
    public $ProxyOperator;

    /**
     * @var string 渠道/平台合作企业的企业ID
     */
    public $ProxyOrganizationOpenId;

    /**
     * @param string $AppId 腾讯电子签颁发给渠道的应用ID，32位字符串
     * @param string $ProxyOrganizationId 腾讯电子签颁发给渠道侧合作企业的企业ID
     * @param string $ProxyAppId 腾讯电子签颁发给渠道侧合作企业的应用ID
     * @param UserInfo $ProxyOperator 渠道/平台合作企业经办人（操作员）
     * @param string $ProxyOrganizationOpenId 渠道/平台合作企业的企业ID
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProxyOrganizationId",$param) and $param["ProxyOrganizationId"] !== null) {
            $this->ProxyOrganizationId = $param["ProxyOrganizationId"];
        }

        if (array_key_exists("ProxyAppId",$param) and $param["ProxyAppId"] !== null) {
            $this->ProxyAppId = $param["ProxyAppId"];
        }

        if (array_key_exists("ProxyOperator",$param) and $param["ProxyOperator"] !== null) {
            $this->ProxyOperator = new UserInfo();
            $this->ProxyOperator->deserialize($param["ProxyOperator"]);
        }

        if (array_key_exists("ProxyOrganizationOpenId",$param) and $param["ProxyOrganizationOpenId"] !== null) {
            $this->ProxyOrganizationOpenId = $param["ProxyOrganizationOpenId"];
        }
    }
}
