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
 * 清理的企业认证流信息
 *
 * @method string getAuthorizationId() 获取认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。
 * @method void setAuthorizationId(string $AuthorizationId) 设置认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。
 * @method string getOrganizationName() 获取认证的企业名称
 * @method void setOrganizationName(string $OrganizationName) 设置认证的企业名称
 * @method string getErrormessage() 获取清除认证流产生的错误信息
 * @method void setErrormessage(string $Errormessage) 设置清除认证流产生的错误信息
 */
class DeleteOrganizationAuthorizationInfo extends AbstractModel
{
    /**
     * @var string 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。
     */
    public $AuthorizationId;

    /**
     * @var string 认证的企业名称
     */
    public $OrganizationName;

    /**
     * @var string 清除认证流产生的错误信息
     */
    public $Errormessage;

    /**
     * @param string $AuthorizationId 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。
     * @param string $OrganizationName 认证的企业名称
     * @param string $Errormessage 清除认证流产生的错误信息
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
        if (array_key_exists("AuthorizationId",$param) and $param["AuthorizationId"] !== null) {
            $this->AuthorizationId = $param["AuthorizationId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Errormessage",$param) and $param["Errormessage"] !== null) {
            $this->Errormessage = $param["Errormessage"];
        }
    }
}
