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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业详情
 *
 * @method integer getId() 获取企业ID
 * @method void setId(integer $Id) 设置企业ID
 * @method string getName() 获取企业名称
 * @method void setName(string $Name) 设置企业名称
 * @method integer getPercent() 获取股权占比
 * @method void setPercent(integer $Percent) 设置股权占比
 * @method string getScanType() 获取资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息
 * @method void setScanType(string $ScanType) 设置资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息
 * @method string getCreator() 获取创建账号
 * @method void setCreator(string $Creator) 设置创建账号
 * @method integer getAppId() 获取腾讯云客户AppId
 * @method void setAppId(integer $AppId) 设置腾讯云客户AppId
 * @method string getUin() 获取腾讯云客户Uin
 * @method void setUin(string $Uin) 设置腾讯云客户Uin
 * @method string getCreateAt() 获取创建时间
 * @method void setCreateAt(string $CreateAt) 设置创建时间
 * @method string getUpdateAt() 获取更新时间
 * @method void setUpdateAt(string $UpdateAt) 设置更新时间
 * @method string getScanCron() 获取周期测绘时间
 * @method void setScanCron(string $ScanCron) 设置周期测绘时间
 * @method boolean getEnableCron() 获取是否启用周期测绘
 * @method void setEnableCron(boolean $EnableCron) 设置是否启用周期测绘
 * @method boolean getEnableScanSubEnterprise() 获取是否扫描子公司
 * @method void setEnableScanSubEnterprise(boolean $EnableScanSubEnterprise) 设置是否扫描子公司
 * @method boolean getEnableAuth() 获取是否授权
 * @method void setEnableAuth(boolean $EnableAuth) 设置是否授权
 * @method string getAuthStartAt() 获取授权开始时间
 * @method void setAuthStartAt(string $AuthStartAt) 设置授权开始时间
 * @method string getAuthEndAt() 获取授权结束时间
 * @method void setAuthEndAt(string $AuthEndAt) 设置授权结束时间
 * @method string getAuthFile() 获取授权文件id
 * @method void setAuthFile(string $AuthFile) 设置授权文件id
 * @method string getScanTime() 获取测绘时间配置项
 * @method void setScanTime(string $ScanTime) 设置测绘时间配置项
 * @method string getIcon() 获取图标
 * @method void setIcon(string $Icon) 设置图标
 * @method string getKeywords() 获取关键字
 * @method void setKeywords(string $Keywords) 设置关键字
 * @method integer getQps() 获取Qps设置，10-500，默认100
 * @method void setQps(integer $Qps) 设置Qps设置，10-500，默认100
 * @method integer getSubCompanyLevel() 获取子公司拓展层次
 * @method void setSubCompanyLevel(integer $SubCompanyLevel) 设置子公司拓展层次
 * @method boolean getIsIncludeFullScan() 获取是否包含完整扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIncludeFullScan(boolean $IsIncludeFullScan) 设置是否包含完整扫描
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableGroupMemberDiscovered() 获取是否识别集团成员
 * @method void setEnableGroupMemberDiscovered(boolean $EnableGroupMemberDiscovered) 设置是否识别集团成员
 */
class Customer extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $Id;

    /**
     * @var string 企业名称
     */
    public $Name;

    /**
     * @var integer 股权占比
     */
    public $Percent;

    /**
     * @var string 资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息
     */
    public $ScanType;

    /**
     * @var string 创建账号
     */
    public $Creator;

    /**
     * @var integer 腾讯云客户AppId
     */
    public $AppId;

    /**
     * @var string 腾讯云客户Uin
     */
    public $Uin;

    /**
     * @var string 创建时间
     */
    public $CreateAt;

    /**
     * @var string 更新时间
     */
    public $UpdateAt;

    /**
     * @var string 周期测绘时间
     */
    public $ScanCron;

    /**
     * @var boolean 是否启用周期测绘
     */
    public $EnableCron;

    /**
     * @var boolean 是否扫描子公司
     */
    public $EnableScanSubEnterprise;

    /**
     * @var boolean 是否授权
     */
    public $EnableAuth;

    /**
     * @var string 授权开始时间
     */
    public $AuthStartAt;

    /**
     * @var string 授权结束时间
     */
    public $AuthEndAt;

    /**
     * @var string 授权文件id
     */
    public $AuthFile;

    /**
     * @var string 测绘时间配置项
     */
    public $ScanTime;

    /**
     * @var string 图标
     */
    public $Icon;

    /**
     * @var string 关键字
     */
    public $Keywords;

    /**
     * @var integer Qps设置，10-500，默认100
     */
    public $Qps;

    /**
     * @var integer 子公司拓展层次
     */
    public $SubCompanyLevel;

    /**
     * @var boolean 是否包含完整扫描
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIncludeFullScan;

    /**
     * @var boolean 是否识别集团成员
     */
    public $EnableGroupMemberDiscovered;

    /**
     * @param integer $Id 企业ID
     * @param string $Name 企业名称
     * @param integer $Percent 股权占比
     * @param string $ScanType 资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息
     * @param string $Creator 创建账号
     * @param integer $AppId 腾讯云客户AppId
     * @param string $Uin 腾讯云客户Uin
     * @param string $CreateAt 创建时间
     * @param string $UpdateAt 更新时间
     * @param string $ScanCron 周期测绘时间
     * @param boolean $EnableCron 是否启用周期测绘
     * @param boolean $EnableScanSubEnterprise 是否扫描子公司
     * @param boolean $EnableAuth 是否授权
     * @param string $AuthStartAt 授权开始时间
     * @param string $AuthEndAt 授权结束时间
     * @param string $AuthFile 授权文件id
     * @param string $ScanTime 测绘时间配置项
     * @param string $Icon 图标
     * @param string $Keywords 关键字
     * @param integer $Qps Qps设置，10-500，默认100
     * @param integer $SubCompanyLevel 子公司拓展层次
     * @param boolean $IsIncludeFullScan 是否包含完整扫描
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableGroupMemberDiscovered 是否识别集团成员
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }

        if (array_key_exists("ScanCron",$param) and $param["ScanCron"] !== null) {
            $this->ScanCron = $param["ScanCron"];
        }

        if (array_key_exists("EnableCron",$param) and $param["EnableCron"] !== null) {
            $this->EnableCron = $param["EnableCron"];
        }

        if (array_key_exists("EnableScanSubEnterprise",$param) and $param["EnableScanSubEnterprise"] !== null) {
            $this->EnableScanSubEnterprise = $param["EnableScanSubEnterprise"];
        }

        if (array_key_exists("EnableAuth",$param) and $param["EnableAuth"] !== null) {
            $this->EnableAuth = $param["EnableAuth"];
        }

        if (array_key_exists("AuthStartAt",$param) and $param["AuthStartAt"] !== null) {
            $this->AuthStartAt = $param["AuthStartAt"];
        }

        if (array_key_exists("AuthEndAt",$param) and $param["AuthEndAt"] !== null) {
            $this->AuthEndAt = $param["AuthEndAt"];
        }

        if (array_key_exists("AuthFile",$param) and $param["AuthFile"] !== null) {
            $this->AuthFile = $param["AuthFile"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("SubCompanyLevel",$param) and $param["SubCompanyLevel"] !== null) {
            $this->SubCompanyLevel = $param["SubCompanyLevel"];
        }

        if (array_key_exists("IsIncludeFullScan",$param) and $param["IsIncludeFullScan"] !== null) {
            $this->IsIncludeFullScan = $param["IsIncludeFullScan"];
        }

        if (array_key_exists("EnableGroupMemberDiscovered",$param) and $param["EnableGroupMemberDiscovered"] !== null) {
            $this->EnableGroupMemberDiscovered = $param["EnableGroupMemberDiscovered"];
        }
    }
}
