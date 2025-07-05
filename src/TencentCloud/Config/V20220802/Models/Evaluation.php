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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义规则评估结果
 *
 * @method string getComplianceResourceId() 获取已评估资源ID。长度为0~256个字符
 * @method void setComplianceResourceId(string $ComplianceResourceId) 设置已评估资源ID。长度为0~256个字符
 * @method string getComplianceResourceType() 获取已评估资源类型。
支持:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
 * @method void setComplianceResourceType(string $ComplianceResourceType) 设置已评估资源类型。
支持:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
 * @method string getComplianceRegion() 获取已评估资源地域。
长度为0~32个字符
 * @method void setComplianceRegion(string $ComplianceRegion) 设置已评估资源地域。
长度为0~32个字符
 * @method string getComplianceType() 获取合规类型。取值：
COMPLIANT：合规、
NON_COMPLIANT：不合规
 * @method void setComplianceType(string $ComplianceType) 设置合规类型。取值：
COMPLIANT：合规、
NON_COMPLIANT：不合规
 * @method Annotation getAnnotation() 获取不合规资源的补充信息。
 * @method void setAnnotation(Annotation $Annotation) 设置不合规资源的补充信息。
 */
class Evaluation extends AbstractModel
{
    /**
     * @var string 已评估资源ID。长度为0~256个字符
     */
    public $ComplianceResourceId;

    /**
     * @var string 已评估资源类型。
支持:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
     */
    public $ComplianceResourceType;

    /**
     * @var string 已评估资源地域。
长度为0~32个字符
     */
    public $ComplianceRegion;

    /**
     * @var string 合规类型。取值：
COMPLIANT：合规、
NON_COMPLIANT：不合规
     */
    public $ComplianceType;

    /**
     * @var Annotation 不合规资源的补充信息。
     */
    public $Annotation;

    /**
     * @param string $ComplianceResourceId 已评估资源ID。长度为0~256个字符
     * @param string $ComplianceResourceType 已评估资源类型。
支持:
QCS::CVM::Instance、 QCS::CBS::Disk、QCS::VPC::Vpc、QCS::VPC::Subnet、QCS::VPC::SecurityGroup、 QCS::CAM::User、QCS::CAM::Group、QCS::CAM::Policy、QCS::CAM::Role、QCS::COS::Bucket
     * @param string $ComplianceRegion 已评估资源地域。
长度为0~32个字符
     * @param string $ComplianceType 合规类型。取值：
COMPLIANT：合规、
NON_COMPLIANT：不合规
     * @param Annotation $Annotation 不合规资源的补充信息。
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
        if (array_key_exists("ComplianceResourceId",$param) and $param["ComplianceResourceId"] !== null) {
            $this->ComplianceResourceId = $param["ComplianceResourceId"];
        }

        if (array_key_exists("ComplianceResourceType",$param) and $param["ComplianceResourceType"] !== null) {
            $this->ComplianceResourceType = $param["ComplianceResourceType"];
        }

        if (array_key_exists("ComplianceRegion",$param) and $param["ComplianceRegion"] !== null) {
            $this->ComplianceRegion = $param["ComplianceRegion"];
        }

        if (array_key_exists("ComplianceType",$param) and $param["ComplianceType"] !== null) {
            $this->ComplianceType = $param["ComplianceType"];
        }

        if (array_key_exists("Annotation",$param) and $param["Annotation"] !== null) {
            $this->Annotation = new Annotation();
            $this->Annotation->deserialize($param["Annotation"]);
        }
    }
}
