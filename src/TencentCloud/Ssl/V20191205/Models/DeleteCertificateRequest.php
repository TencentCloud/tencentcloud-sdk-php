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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCertificate请求参数结构体
 *
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method boolean getIsCheckResource() 获取删除时是否检查证书关联了云资源。默认不检查。如选择检查(需要授权服务角色SSL_QCSLinkedRoleInReplaceLoadCertificate)删除将变成异步,接口会返回异步任务ID。需使用DescribeDeleteCertificatesTaskResult接口查询删除是否成功。
 * @method void setIsCheckResource(boolean $IsCheckResource) 设置删除时是否检查证书关联了云资源。默认不检查。如选择检查(需要授权服务角色SSL_QCSLinkedRoleInReplaceLoadCertificate)删除将变成异步,接口会返回异步任务ID。需使用DescribeDeleteCertificatesTaskResult接口查询删除是否成功。
 */
class DeleteCertificateRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var boolean 删除时是否检查证书关联了云资源。默认不检查。如选择检查(需要授权服务角色SSL_QCSLinkedRoleInReplaceLoadCertificate)删除将变成异步,接口会返回异步任务ID。需使用DescribeDeleteCertificatesTaskResult接口查询删除是否成功。
     */
    public $IsCheckResource;

    /**
     * @param string $CertificateId 证书 ID。
     * @param boolean $IsCheckResource 删除时是否检查证书关联了云资源。默认不检查。如选择检查(需要授权服务角色SSL_QCSLinkedRoleInReplaceLoadCertificate)删除将变成异步,接口会返回异步任务ID。需使用DescribeDeleteCertificatesTaskResult接口查询删除是否成功。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("IsCheckResource",$param) and $param["IsCheckResource"] !== null) {
            $this->IsCheckResource = $param["IsCheckResource"];
        }
    }
}
