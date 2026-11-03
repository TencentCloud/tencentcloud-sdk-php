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
 * DescribeCSR返回参数结构体
 *
 * @method integer getId() 获取<p>CSR Id标识</p>
 * @method void setId(integer $Id) 设置<p>CSR Id标识</p>
 * @method string getOwnerUin() 获取<p>账号</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>账号</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getOrganization() 获取<p>企业/单位名称</p>
 * @method void setOrganization(string $Organization) 设置<p>企业/单位名称</p>
 * @method string getDepartment() 获取<p>部门</p>
 * @method void setDepartment(string $Department) 设置<p>部门</p>
 * @method string getEmail() 获取<p>邮箱</p>
 * @method void setEmail(string $Email) 设置<p>邮箱</p>
 * @method string getProvince() 获取<p>省份</p>
 * @method void setProvince(string $Province) 设置<p>省份</p>
 * @method string getCity() 获取<p>城市</p>
 * @method void setCity(string $City) 设置<p>城市</p>
 * @method string getCountry() 获取<p>国家</p>
 * @method void setCountry(string $Country) 设置<p>国家</p>
 * @method string getEncryptAlgo() 获取<p>密钥算法</p>
 * @method void setEncryptAlgo(string $EncryptAlgo) 设置<p>密钥算法</p>
 * @method string getKeyParameter() 获取<p>算法参数</p>
 * @method void setKeyParameter(string $KeyParameter) 设置<p>算法参数</p>
 * @method string getRemarks() 获取<p>备注</p>
 * @method void setRemarks(string $Remarks) 设置<p>备注</p>
 * @method integer getStatus() 获取<p>状态</p>
 * @method void setStatus(integer $Status) 设置<p>状态</p>
 * @method string getKeyPassword() 获取<p>私钥密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyPassword(string $KeyPassword) 设置<p>私钥密码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getCSR() 获取<p>CSR内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCSR(string $CSR) 设置<p>CSR内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivateKey() 获取<p>私钥内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivateKey(string $PrivateKey) 设置<p>私钥内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubjectAltName() 获取<p>SAN域名</p>
 * @method void setSubjectAltName(array $SubjectAltName) 设置<p>SAN域名</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCSRResponse extends AbstractModel
{
    /**
     * @var integer <p>CSR Id标识</p>
     */
    public $Id;

    /**
     * @var string <p>账号</p>
     */
    public $OwnerUin;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>企业/单位名称</p>
     */
    public $Organization;

    /**
     * @var string <p>部门</p>
     */
    public $Department;

    /**
     * @var string <p>邮箱</p>
     */
    public $Email;

    /**
     * @var string <p>省份</p>
     */
    public $Province;

    /**
     * @var string <p>城市</p>
     */
    public $City;

    /**
     * @var string <p>国家</p>
     */
    public $Country;

    /**
     * @var string <p>密钥算法</p>
     */
    public $EncryptAlgo;

    /**
     * @var string <p>算法参数</p>
     */
    public $KeyParameter;

    /**
     * @var string <p>备注</p>
     */
    public $Remarks;

    /**
     * @var integer <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>私钥密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyPassword;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>CSR内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CSR;

    /**
     * @var string <p>私钥内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivateKey;

    /**
     * @var array <p>SAN域名</p>
     */
    public $SubjectAltName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>CSR Id标识</p>
     * @param string $OwnerUin <p>账号</p>
     * @param string $Domain <p>域名</p>
     * @param string $Organization <p>企业/单位名称</p>
     * @param string $Department <p>部门</p>
     * @param string $Email <p>邮箱</p>
     * @param string $Province <p>省份</p>
     * @param string $City <p>城市</p>
     * @param string $Country <p>国家</p>
     * @param string $EncryptAlgo <p>密钥算法</p>
     * @param string $KeyParameter <p>算法参数</p>
     * @param string $Remarks <p>备注</p>
     * @param integer $Status <p>状态</p>
     * @param string $KeyPassword <p>私钥密码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $CSR <p>CSR内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivateKey <p>私钥内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubjectAltName <p>SAN域名</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = $param["Department"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("EncryptAlgo",$param) and $param["EncryptAlgo"] !== null) {
            $this->EncryptAlgo = $param["EncryptAlgo"];
        }

        if (array_key_exists("KeyParameter",$param) and $param["KeyParameter"] !== null) {
            $this->KeyParameter = $param["KeyParameter"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KeyPassword",$param) and $param["KeyPassword"] !== null) {
            $this->KeyPassword = $param["KeyPassword"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CSR",$param) and $param["CSR"] !== null) {
            $this->CSR = $param["CSR"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
