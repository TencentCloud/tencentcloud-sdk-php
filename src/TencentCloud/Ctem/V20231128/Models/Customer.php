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
 * @method integer getId() 获取<p>企业ID</p>
 * @method void setId(integer $Id) 设置<p>企业ID</p>
 * @method string getName() 获取<p>企业名称</p>
 * @method void setName(string $Name) 设置<p>企业名称</p>
 * @method integer getPercent() 获取<p>股权占比</p>
 * @method void setPercent(integer $Percent) 设置<p>股权占比</p>
 * @method string getScanType() 获取<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method void setScanType(string $ScanType) 设置<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method string getCreator() 获取<p>创建账号</p>
 * @method void setCreator(string $Creator) 设置<p>创建账号</p>
 * @method integer getAppId() 获取<p>腾讯云客户AppId</p>
 * @method void setAppId(integer $AppId) 设置<p>腾讯云客户AppId</p>
 * @method string getUin() 获取<p>腾讯云客户Uin</p>
 * @method void setUin(string $Uin) 设置<p>腾讯云客户Uin</p>
 * @method string getCreateAt() 获取<p>创建时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p>
 * @method string getUpdateAt() 获取<p>更新时间</p>
 * @method void setUpdateAt(string $UpdateAt) 设置<p>更新时间</p>
 * @method string getScanCron() 获取<p>周期测绘时间</p>
 * @method void setScanCron(string $ScanCron) 设置<p>周期测绘时间</p>
 * @method boolean getEnableCron() 获取<p>是否启用周期测绘</p>
 * @method void setEnableCron(boolean $EnableCron) 设置<p>是否启用周期测绘</p>
 * @method boolean getEnableScanSubEnterprise() 获取<p>是否扫描子公司</p>
 * @method void setEnableScanSubEnterprise(boolean $EnableScanSubEnterprise) 设置<p>是否扫描子公司</p>
 * @method boolean getEnableAuth() 获取<p>是否授权</p>
 * @method void setEnableAuth(boolean $EnableAuth) 设置<p>是否授权</p>
 * @method string getAuthStartAt() 获取<p>授权开始时间</p>
 * @method void setAuthStartAt(string $AuthStartAt) 设置<p>授权开始时间</p>
 * @method string getAuthEndAt() 获取<p>授权结束时间</p>
 * @method void setAuthEndAt(string $AuthEndAt) 设置<p>授权结束时间</p>
 * @method string getAuthFile() 获取<p>授权文件id</p>
 * @method void setAuthFile(string $AuthFile) 设置<p>授权文件id</p>
 * @method string getScanTime() 获取<p>测绘时间配置项</p>
 * @method void setScanTime(string $ScanTime) 设置<p>测绘时间配置项</p>
 * @method string getIcon() 获取<p>图标</p>
 * @method void setIcon(string $Icon) 设置<p>图标</p>
 * @method string getKeywords() 获取<p>关键字</p>
 * @method void setKeywords(string $Keywords) 设置<p>关键字</p>
 * @method integer getQps() 获取<p>Qps设置，10-500，默认100</p>
 * @method void setQps(integer $Qps) 设置<p>Qps设置，10-500，默认100</p>
 * @method integer getSubCompanyLevel() 获取<p>子公司拓展层次</p>
 * @method void setSubCompanyLevel(integer $SubCompanyLevel) 设置<p>子公司拓展层次</p>
 * @method boolean getIsIncludeFullScan() 获取<p>是否包含完整扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIncludeFullScan(boolean $IsIncludeFullScan) 设置<p>是否包含完整扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableGroupMemberDiscovered() 获取<p>是否识别集团成员</p>
 * @method void setEnableGroupMemberDiscovered(boolean $EnableGroupMemberDiscovered) 设置<p>是否识别集团成员</p>
 * @method integer getSingleIPTaskLimit() 获取<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p>
 * @method void setSingleIPTaskLimit(integer $SingleIPTaskLimit) 设置<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p>
 * @method integer getPortScanQps() 获取<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p>
 * @method void setPortScanQps(integer $PortScanQps) 设置<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p>
 */
class Customer extends AbstractModel
{
    /**
     * @var integer <p>企业ID</p>
     */
    public $Id;

    /**
     * @var string <p>企业名称</p>
     */
    public $Name;

    /**
     * @var integer <p>股权占比</p>
     */
    public $Percent;

    /**
     * @var string <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     */
    public $ScanType;

    /**
     * @var string <p>创建账号</p>
     */
    public $Creator;

    /**
     * @var integer <p>腾讯云客户AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>腾讯云客户Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateAt;

    /**
     * @var string <p>周期测绘时间</p>
     */
    public $ScanCron;

    /**
     * @var boolean <p>是否启用周期测绘</p>
     */
    public $EnableCron;

    /**
     * @var boolean <p>是否扫描子公司</p>
     */
    public $EnableScanSubEnterprise;

    /**
     * @var boolean <p>是否授权</p>
     */
    public $EnableAuth;

    /**
     * @var string <p>授权开始时间</p>
     */
    public $AuthStartAt;

    /**
     * @var string <p>授权结束时间</p>
     */
    public $AuthEndAt;

    /**
     * @var string <p>授权文件id</p>
     */
    public $AuthFile;

    /**
     * @var string <p>测绘时间配置项</p>
     */
    public $ScanTime;

    /**
     * @var string <p>图标</p>
     */
    public $Icon;

    /**
     * @var string <p>关键字</p>
     */
    public $Keywords;

    /**
     * @var integer <p>Qps设置，10-500，默认100</p>
     */
    public $Qps;

    /**
     * @var integer <p>子公司拓展层次</p>
     */
    public $SubCompanyLevel;

    /**
     * @var boolean <p>是否包含完整扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIncludeFullScan;

    /**
     * @var boolean <p>是否识别集团成员</p>
     */
    public $EnableGroupMemberDiscovered;

    /**
     * @var integer <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p>
     */
    public $SingleIPTaskLimit;

    /**
     * @var integer <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p>
     */
    public $PortScanQps;

    /**
     * @param integer $Id <p>企业ID</p>
     * @param string $Name <p>企业名称</p>
     * @param integer $Percent <p>股权占比</p>
     * @param string $ScanType <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     * @param string $Creator <p>创建账号</p>
     * @param integer $AppId <p>腾讯云客户AppId</p>
     * @param string $Uin <p>腾讯云客户Uin</p>
     * @param string $CreateAt <p>创建时间</p>
     * @param string $UpdateAt <p>更新时间</p>
     * @param string $ScanCron <p>周期测绘时间</p>
     * @param boolean $EnableCron <p>是否启用周期测绘</p>
     * @param boolean $EnableScanSubEnterprise <p>是否扫描子公司</p>
     * @param boolean $EnableAuth <p>是否授权</p>
     * @param string $AuthStartAt <p>授权开始时间</p>
     * @param string $AuthEndAt <p>授权结束时间</p>
     * @param string $AuthFile <p>授权文件id</p>
     * @param string $ScanTime <p>测绘时间配置项</p>
     * @param string $Icon <p>图标</p>
     * @param string $Keywords <p>关键字</p>
     * @param integer $Qps <p>Qps设置，10-500，默认100</p>
     * @param integer $SubCompanyLevel <p>子公司拓展层次</p>
     * @param boolean $IsIncludeFullScan <p>是否包含完整扫描</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableGroupMemberDiscovered <p>是否识别集团成员</p>
     * @param integer $SingleIPTaskLimit <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p>
     * @param integer $PortScanQps <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p>
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

        if (array_key_exists("SingleIPTaskLimit",$param) and $param["SingleIPTaskLimit"] !== null) {
            $this->SingleIPTaskLimit = $param["SingleIPTaskLimit"];
        }

        if (array_key_exists("PortScanQps",$param) and $param["PortScanQps"] !== null) {
            $this->PortScanQps = $param["PortScanQps"];
        }
    }
}
