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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>触发器绑定凭证的摘要，不包含授权密钥</p>
 *
 * @method string getCredentialId() 获取<p>凭证ID</p>
 * @method void setCredentialId(string $CredentialId) 设置<p>凭证ID</p>
 * @method string getName() 获取<p>凭证名称；凭证不存在时为空</p>
 * @method void setName(string $Name) 设置<p>凭证名称；凭证不存在时为空</p>
 * @method integer getStatus() 获取<p>授权状态；0：未指定，凭证不存在或状态未知；1：未授权；2：已授权；3：已失效</p>
 * @method void setStatus(integer $Status) 设置<p>授权状态；0：未指定，凭证不存在或状态未知；1：未授权；2：已授权；3：已失效</p>
 */
class AppTriggerWebhookCredential extends AbstractModel
{
    /**
     * @var string <p>凭证ID</p>
     */
    public $CredentialId;

    /**
     * @var string <p>凭证名称；凭证不存在时为空</p>
     */
    public $Name;

    /**
     * @var integer <p>授权状态；0：未指定，凭证不存在或状态未知；1：未授权；2：已授权；3：已失效</p>
     */
    public $Status;

    /**
     * @param string $CredentialId <p>凭证ID</p>
     * @param string $Name <p>凭证名称；凭证不存在时为空</p>
     * @param integer $Status <p>授权状态；0：未指定，凭证不存在或状态未知；1：未授权；2：已授权；3：已失效</p>
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
