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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCertificateByPackage请求参数结构体
 *
 * @method integer getProductPid() 获取证书产品PID。
 * @method void setProductPid(integer $ProductPid) 设置证书产品PID。
 * @method array getPackageIds() 获取要消耗的权益包ID。
 * @method void setPackageIds(array $PackageIds) 设置要消耗的权益包ID。
 * @method string getDomainCount() 获取证书域名数量。
 * @method void setDomainCount(string $DomainCount) 设置证书域名数量。
 * @method integer getPeriod() 获取多年期证书年限。
 * @method void setPeriod(integer $Period) 设置多年期证书年限。
 * @method string getOldCertificateId() 获取要续费的原证书ID（续费时填写）。
 * @method void setOldCertificateId(string $OldCertificateId) 设置要续费的原证书ID（续费时填写）。
 * @method string getRenewGenCsrMethod() 获取续费时CSR生成方式（original、upload、online）。
 * @method void setRenewGenCsrMethod(string $RenewGenCsrMethod) 设置续费时CSR生成方式（original、upload、online）。
 * @method string getRenewCsr() 获取续费时选择上传CSR时填写CSR。
 * @method void setRenewCsr(string $RenewCsr) 设置续费时选择上传CSR时填写CSR。
 * @method string getRenewAlgorithmType() 获取续费证书CSR的算法类型。
 * @method void setRenewAlgorithmType(string $RenewAlgorithmType) 设置续费证书CSR的算法类型。
 * @method string getRenewAlgorithmParam() 获取续费证书CSR的算法参数。
 * @method void setRenewAlgorithmParam(string $RenewAlgorithmParam) 设置续费证书CSR的算法参数。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getRenewKeyPass() 获取续费证书的私钥密码。
 * @method void setRenewKeyPass(string $RenewKeyPass) 设置续费证书的私钥密码。
 * @method string getDomainNames() 获取批量购买证书时预填写的域名。
 * @method void setDomainNames(string $DomainNames) 设置批量购买证书时预填写的域名。
 * @method integer getCertificateCount() 获取批量购买证书数量。
 * @method void setCertificateCount(integer $CertificateCount) 设置批量购买证书数量。
 * @method integer getManagerId() 获取预填写的管理人ID。
 * @method void setManagerId(integer $ManagerId) 设置预填写的管理人ID。
 * @method integer getCompanyId() 获取预填写的公司ID。
 * @method void setCompanyId(integer $CompanyId) 设置预填写的公司ID。
 * @method string getVerifyType() 获取验证方式
 * @method void setVerifyType(string $VerifyType) 设置验证方式
 */
class CreateCertificateByPackageRequest extends AbstractModel
{
    /**
     * @var integer 证书产品PID。
     */
    public $ProductPid;

    /**
     * @var array 要消耗的权益包ID。
     */
    public $PackageIds;

    /**
     * @var string 证书域名数量。
     */
    public $DomainCount;

    /**
     * @var integer 多年期证书年限。
     */
    public $Period;

    /**
     * @var string 要续费的原证书ID（续费时填写）。
     */
    public $OldCertificateId;

    /**
     * @var string 续费时CSR生成方式（original、upload、online）。
     */
    public $RenewGenCsrMethod;

    /**
     * @var string 续费时选择上传CSR时填写CSR。
     */
    public $RenewCsr;

    /**
     * @var string 续费证书CSR的算法类型。
     */
    public $RenewAlgorithmType;

    /**
     * @var string 续费证书CSR的算法参数。
     */
    public $RenewAlgorithmParam;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 续费证书的私钥密码。
     */
    public $RenewKeyPass;

    /**
     * @var string 批量购买证书时预填写的域名。
     */
    public $DomainNames;

    /**
     * @var integer 批量购买证书数量。
     */
    public $CertificateCount;

    /**
     * @var integer 预填写的管理人ID。
     */
    public $ManagerId;

    /**
     * @var integer 预填写的公司ID。
     */
    public $CompanyId;

    /**
     * @var string 验证方式
     */
    public $VerifyType;

    /**
     * @param integer $ProductPid 证书产品PID。
     * @param array $PackageIds 要消耗的权益包ID。
     * @param string $DomainCount 证书域名数量。
     * @param integer $Period 多年期证书年限。
     * @param string $OldCertificateId 要续费的原证书ID（续费时填写）。
     * @param string $RenewGenCsrMethod 续费时CSR生成方式（original、upload、online）。
     * @param string $RenewCsr 续费时选择上传CSR时填写CSR。
     * @param string $RenewAlgorithmType 续费证书CSR的算法类型。
     * @param string $RenewAlgorithmParam 续费证书CSR的算法参数。
     * @param integer $ProjectId 项目ID。
     * @param array $Tags 标签。
     * @param string $RenewKeyPass 续费证书的私钥密码。
     * @param string $DomainNames 批量购买证书时预填写的域名。
     * @param integer $CertificateCount 批量购买证书数量。
     * @param integer $ManagerId 预填写的管理人ID。
     * @param integer $CompanyId 预填写的公司ID。
     * @param string $VerifyType 验证方式
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
        if (array_key_exists("ProductPid",$param) and $param["ProductPid"] !== null) {
            $this->ProductPid = $param["ProductPid"];
        }

        if (array_key_exists("PackageIds",$param) and $param["PackageIds"] !== null) {
            $this->PackageIds = $param["PackageIds"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("RenewGenCsrMethod",$param) and $param["RenewGenCsrMethod"] !== null) {
            $this->RenewGenCsrMethod = $param["RenewGenCsrMethod"];
        }

        if (array_key_exists("RenewCsr",$param) and $param["RenewCsr"] !== null) {
            $this->RenewCsr = $param["RenewCsr"];
        }

        if (array_key_exists("RenewAlgorithmType",$param) and $param["RenewAlgorithmType"] !== null) {
            $this->RenewAlgorithmType = $param["RenewAlgorithmType"];
        }

        if (array_key_exists("RenewAlgorithmParam",$param) and $param["RenewAlgorithmParam"] !== null) {
            $this->RenewAlgorithmParam = $param["RenewAlgorithmParam"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RenewKeyPass",$param) and $param["RenewKeyPass"] !== null) {
            $this->RenewKeyPass = $param["RenewKeyPass"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("CertificateCount",$param) and $param["CertificateCount"] !== null) {
            $this->CertificateCount = $param["CertificateCount"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
