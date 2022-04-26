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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleWithWebIdentity请求参数结构体
 *
 * @method string getProviderId() 获取身份提供商名称
 * @method void setProviderId(string $ProviderId) 设置身份提供商名称
 * @method string getWebIdentityToken() 获取IdP签发的OIDC令牌
 * @method void setWebIdentityToken(string $WebIdentityToken) 设置IdP签发的OIDC令牌
 * @method string getRoleArn() 获取角色访问描述名
 * @method void setRoleArn(string $RoleArn) 设置角色访问描述名
 * @method string getRoleSessionName() 获取会话名称
 * @method void setRoleSessionName(string $RoleSessionName) 设置会话名称
 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
 */
class AssumeRoleWithWebIdentityRequest extends AbstractModel
{
    /**
     * @var string 身份提供商名称
     */
    public $ProviderId;

    /**
     * @var string IdP签发的OIDC令牌
     */
    public $WebIdentityToken;

    /**
     * @var string 角色访问描述名
     */
    public $RoleArn;

    /**
     * @var string 会话名称
     */
    public $RoleSessionName;

    /**
     * @var integer 指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
     */
    public $DurationSeconds;

    /**
     * @param string $ProviderId 身份提供商名称
     * @param string $WebIdentityToken IdP签发的OIDC令牌
     * @param string $RoleArn 角色访问描述名
     * @param string $RoleSessionName 会话名称
     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒，默认 7200 秒，最长可设定有效期为 43200 秒
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
        if (array_key_exists("ProviderId",$param) and $param["ProviderId"] !== null) {
            $this->ProviderId = $param["ProviderId"];
        }

        if (array_key_exists("WebIdentityToken",$param) and $param["WebIdentityToken"] !== null) {
            $this->WebIdentityToken = $param["WebIdentityToken"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RoleSessionName",$param) and $param["RoleSessionName"] !== null) {
            $this->RoleSessionName = $param["RoleSessionName"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
