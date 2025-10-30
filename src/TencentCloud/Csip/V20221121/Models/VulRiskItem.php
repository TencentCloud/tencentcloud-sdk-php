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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机漏洞风险内容
 *
 * @method string getCloudAccountID() 获取云账号ID
 * @method void setCloudAccountID(string $CloudAccountID) 设置云账号ID
 * @method string getAssetID() 获取实例ID
 * @method void setAssetID(string $AssetID) 设置实例ID
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getVulCategory() 获取漏洞类型
 * @method void setVulCategory(string $VulCategory) 设置漏洞类型
 * @method string getVulLevel() 获取漏洞等级
 * @method void setVulLevel(string $VulLevel) 设置漏洞等级
 * @method string getCveID() 获取CVE编号
 * @method void setCveID(string $CveID) 设置CVE编号
 * @method string getDescription() 获取漏洞描述
 * @method void setDescription(string $Description) 设置漏洞描述
 * @method string getContainerID() 获取容器ID
 * @method void setContainerID(string $ContainerID) 设置容器ID
 * @method string getFix() 获取漏洞风险修复建议
 * @method void setFix(string $Fix) 设置漏洞风险修复建议
 * @method string getVulCategoryName() 获取Linux漏洞
 * @method void setVulCategoryName(string $VulCategoryName) 设置Linux漏洞
 * @method string getVulLevelName() 获取漏洞等级名称
 * @method void setVulLevelName(string $VulLevelName) 设置漏洞等级名称
 * @method string getInstanceStatusName() 获取实例状态中文信息
 * @method void setInstanceStatusName(string $InstanceStatusName) 设置实例状态中文信息
 * @method integer getAppID() 获取租户ID
 * @method void setAppID(integer $AppID) 设置租户ID
 */
class VulRiskItem extends AbstractModel
{
    /**
     * @var string 云账号ID
     */
    public $CloudAccountID;

    /**
     * @var string 实例ID
     */
    public $AssetID;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞类型
     */
    public $VulCategory;

    /**
     * @var string 漏洞等级
     */
    public $VulLevel;

    /**
     * @var string CVE编号
     */
    public $CveID;

    /**
     * @var string 漏洞描述
     */
    public $Description;

    /**
     * @var string 容器ID
     */
    public $ContainerID;

    /**
     * @var string 漏洞风险修复建议
     */
    public $Fix;

    /**
     * @var string Linux漏洞
     */
    public $VulCategoryName;

    /**
     * @var string 漏洞等级名称
     */
    public $VulLevelName;

    /**
     * @var string 实例状态中文信息
     */
    public $InstanceStatusName;

    /**
     * @var integer 租户ID
     */
    public $AppID;

    /**
     * @param string $CloudAccountID 云账号ID
     * @param string $AssetID 实例ID
     * @param string $InstanceStatus 实例状态
     * @param string $InstanceName 实例名称
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $VulName 漏洞名称
     * @param string $VulCategory 漏洞类型
     * @param string $VulLevel 漏洞等级
     * @param string $CveID CVE编号
     * @param string $Description 漏洞描述
     * @param string $ContainerID 容器ID
     * @param string $Fix 漏洞风险修复建议
     * @param string $VulCategoryName Linux漏洞
     * @param string $VulLevelName 漏洞等级名称
     * @param string $InstanceStatusName 实例状态中文信息
     * @param integer $AppID 租户ID
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
        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("CveID",$param) and $param["CveID"] !== null) {
            $this->CveID = $param["CveID"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("VulCategoryName",$param) and $param["VulCategoryName"] !== null) {
            $this->VulCategoryName = $param["VulCategoryName"];
        }

        if (array_key_exists("VulLevelName",$param) and $param["VulLevelName"] !== null) {
            $this->VulLevelName = $param["VulLevelName"];
        }

        if (array_key_exists("InstanceStatusName",$param) and $param["InstanceStatusName"] !== null) {
            $this->InstanceStatusName = $param["InstanceStatusName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }
    }
}
