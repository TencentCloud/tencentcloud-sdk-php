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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户特征规则描述
 *
 * @method string getID() 获取特征ID
 * @method void setID(string $ID) 设置特征ID
 * @method integer getStatus() 获取规则开关
 * @method void setStatus(integer $Status) 设置规则开关
 * @method string getMainClassID() 获取主类ID
 * @method void setMainClassID(string $MainClassID) 设置主类ID
 * @method string getSubClassID() 获取子类ID
 * @method void setSubClassID(string $SubClassID) 设置子类ID
 * @method string getCveID() 获取CVE ID
 * @method void setCveID(string $CveID) 设置CVE ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method string getMainClassName() 获取主类名字，根据Language字段输出中文/英文
 * @method void setMainClassName(string $MainClassName) 设置主类名字，根据Language字段输出中文/英文
 * @method string getSubClassName() 获取子类名字，根据Language字段输出中文/英文，若子类id为00000000，此字段为空
 * @method void setSubClassName(string $SubClassName) 设置子类名字，根据Language字段输出中文/英文，若子类id为00000000，此字段为空
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method integer getReason() 获取0/1
 * @method void setReason(integer $Reason) 设置0/1
 * @method integer getRiskLevel() 获取1: 高危 2:中危 3:低危
 * @method void setRiskLevel(integer $RiskLevel) 设置1: 高危 2:中危 3:低危
 */
class UserSignatureRule extends AbstractModel
{
    /**
     * @var string 特征ID
     */
    public $ID;

    /**
     * @var integer 规则开关
     */
    public $Status;

    /**
     * @var string 主类ID
     */
    public $MainClassID;

    /**
     * @var string 子类ID
     */
    public $SubClassID;

    /**
     * @var string CVE ID
     */
    public $CveID;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var string 主类名字，根据Language字段输出中文/英文
     */
    public $MainClassName;

    /**
     * @var string 子类名字，根据Language字段输出中文/英文，若子类id为00000000，此字段为空
     */
    public $SubClassName;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var integer 0/1
     */
    public $Reason;

    /**
     * @var integer 1: 高危 2:中危 3:低危
     */
    public $RiskLevel;

    /**
     * @param string $ID 特征ID
     * @param integer $Status 规则开关
     * @param string $MainClassID 主类ID
     * @param string $SubClassID 子类ID
     * @param string $CveID CVE ID
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 更新时间
     * @param string $MainClassName 主类名字，根据Language字段输出中文/英文
     * @param string $SubClassName 子类名字，根据Language字段输出中文/英文，若子类id为00000000，此字段为空
     * @param string $Description 规则描述
     * @param integer $Reason 0/1
     * @param integer $RiskLevel 1: 高危 2:中危 3:低危
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MainClassID",$param) and $param["MainClassID"] !== null) {
            $this->MainClassID = $param["MainClassID"];
        }

        if (array_key_exists("SubClassID",$param) and $param["SubClassID"] !== null) {
            $this->SubClassID = $param["SubClassID"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("MainClassName",$param) and $param["MainClassName"] !== null) {
            $this->MainClassName = $param["MainClassName"];
        }

        if (array_key_exists("SubClassName",$param) and $param["SubClassName"] !== null) {
            $this->SubClassName = $param["SubClassName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
