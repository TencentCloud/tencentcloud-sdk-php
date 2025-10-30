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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业认证信息
 *
 * @method string getOperatorName() 获取经办人姓名。
 * @method void setOperatorName(string $OperatorName) 设置经办人姓名。
 * @method string getOperatorMobile() 获取经办人手机号。
 * @method void setOperatorMobile(string $OperatorMobile) 设置经办人手机号。
 * @method integer getAuthType() 获取认证授权方式：
<ul><li> **0**：未选择授权方式（默认值）</li>
<li> **1**：上传授权书</li>
<li> **2**：法人授权</li>
<li> **3**：法人认证</li></ul>
 * @method void setAuthType(integer $AuthType) 设置认证授权方式：
<ul><li> **0**：未选择授权方式（默认值）</li>
<li> **1**：上传授权书</li>
<li> **2**：法人授权</li>
<li> **3**：法人认证</li></ul>
 * @method integer getAuditStatus() 获取企业认证授权书审核状态：
<ul><li> **0**：未提交授权书（默认值）</li>
<li> **1**：审核通过</li>
<li> **2**：审核驳回</li>
<li> **3**：审核中</li>
<li> **4**：AI识别中</li>
<li> **5**：客户确认AI信息</li></ul>
 * @method void setAuditStatus(integer $AuditStatus) 设置企业认证授权书审核状态：
<ul><li> **0**：未提交授权书（默认值）</li>
<li> **1**：审核通过</li>
<li> **2**：审核驳回</li>
<li> **3**：审核中</li>
<li> **4**：AI识别中</li>
<li> **5**：客户确认AI信息</li></ul>
 */
class AuthRecord extends AbstractModel
{
    /**
     * @var string 经办人姓名。
     */
    public $OperatorName;

    /**
     * @var string 经办人手机号。
     */
    public $OperatorMobile;

    /**
     * @var integer 认证授权方式：
<ul><li> **0**：未选择授权方式（默认值）</li>
<li> **1**：上传授权书</li>
<li> **2**：法人授权</li>
<li> **3**：法人认证</li></ul>
     */
    public $AuthType;

    /**
     * @var integer 企业认证授权书审核状态：
<ul><li> **0**：未提交授权书（默认值）</li>
<li> **1**：审核通过</li>
<li> **2**：审核驳回</li>
<li> **3**：审核中</li>
<li> **4**：AI识别中</li>
<li> **5**：客户确认AI信息</li></ul>
     */
    public $AuditStatus;

    /**
     * @param string $OperatorName 经办人姓名。
     * @param string $OperatorMobile 经办人手机号。
     * @param integer $AuthType 认证授权方式：
<ul><li> **0**：未选择授权方式（默认值）</li>
<li> **1**：上传授权书</li>
<li> **2**：法人授权</li>
<li> **3**：法人认证</li></ul>
     * @param integer $AuditStatus 企业认证授权书审核状态：
<ul><li> **0**：未提交授权书（默认值）</li>
<li> **1**：审核通过</li>
<li> **2**：审核驳回</li>
<li> **3**：审核中</li>
<li> **4**：AI识别中</li>
<li> **5**：客户确认AI信息</li></ul>
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
        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorMobile",$param) and $param["OperatorMobile"] !== null) {
            $this->OperatorMobile = $param["OperatorMobile"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }
    }
}
