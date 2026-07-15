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
 * ModifyCustomer请求参数结构体
 *
 * @method string getName() 获取<p>企业名称</p>
 * @method void setName(string $Name) 设置<p>企业名称</p>
 * @method integer getPercent() 获取<p>百分比取值范围为30-100</p>
 * @method void setPercent(integer $Percent) 设置<p>百分比取值范围为30-100</p>
 * @method string getScanType() 获取<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method void setScanType(string $ScanType) 设置<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method integer getId() 获取<p>企业ID</p>
 * @method void setId(integer $Id) 设置<p>企业ID</p>
 * @method string getScanCron() 获取<p>周期测绘时间</p>
 * @method void setScanCron(string $ScanCron) 设置<p>周期测绘时间</p>
 * @method boolean getIsScanNow() 获取<p>是否立即启动</p>
 * @method void setIsScanNow(boolean $IsScanNow) 设置<p>是否立即启动</p>
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
 * @method string getScanTime() 获取<p>测绘时间配置项，采用json字符串格式</p>
 * @method void setScanTime(string $ScanTime) 设置<p>测绘时间配置项，采用json字符串格式</p>
 * @method string getIcon() 获取<p>企业图标</p>
 * @method void setIcon(string $Icon) 设置<p>企业图标</p>
 * @method integer getQps() 获取<p>并发</p>
 * @method void setQps(integer $Qps) 设置<p>并发</p>
 * @method integer getSubCompanyLevel() 获取<p>子公司拓展层次</p>
 * @method void setSubCompanyLevel(integer $SubCompanyLevel) 设置<p>子公司拓展层次</p>
 * @method boolean getIsIncludeFullScan() 获取<p>是否包含完整的扫描</p>
 * @method void setIsIncludeFullScan(boolean $IsIncludeFullScan) 设置<p>是否包含完整的扫描</p>
 * @method integer getPortScanQps() 获取<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
 * @method void setPortScanQps(integer $PortScanQps) 设置<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
 * @method integer getSingleIPTaskLimit() 获取<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
 * @method void setSingleIPTaskLimit(integer $SingleIPTaskLimit) 设置<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
 * @method boolean getHighRiskAck() 获取<p>任一速率超过保守值时必须为 true，否则参数错误</p>
 * @method void setHighRiskAck(boolean $HighRiskAck) 设置<p>任一速率超过保守值时必须为 true，否则参数错误</p>
 * @method array getScanRateAckChecklist() 获取<p>知情同意勾选清单，用于审计回放</p>
 * @method void setScanRateAckChecklist(array $ScanRateAckChecklist) 设置<p>知情同意勾选清单，用于审计回放</p>
 * @method ScanPriorityReq getScanPriority() 获取<p>扫描优先级配置</p>
 * @method void setScanPriority(ScanPriorityReq $ScanPriority) 设置<p>扫描优先级配置</p>
 */
class ModifyCustomerRequest extends AbstractModel
{
    /**
     * @var string <p>企业名称</p>
     */
    public $Name;

    /**
     * @var integer <p>百分比取值范围为30-100</p>
     */
    public $Percent;

    /**
     * @var string <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     */
    public $ScanType;

    /**
     * @var integer <p>企业ID</p>
     */
    public $Id;

    /**
     * @var string <p>周期测绘时间</p>
     */
    public $ScanCron;

    /**
     * @var boolean <p>是否立即启动</p>
     */
    public $IsScanNow;

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
     * @var string <p>测绘时间配置项，采用json字符串格式</p>
     */
    public $ScanTime;

    /**
     * @var string <p>企业图标</p>
     */
    public $Icon;

    /**
     * @var integer <p>并发</p>
     */
    public $Qps;

    /**
     * @var integer <p>子公司拓展层次</p>
     */
    public $SubCompanyLevel;

    /**
     * @var boolean <p>是否包含完整的扫描</p>
     */
    public $IsIncludeFullScan;

    /**
     * @var integer <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
     */
    public $PortScanQps;

    /**
     * @var integer <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
     */
    public $SingleIPTaskLimit;

    /**
     * @var boolean <p>任一速率超过保守值时必须为 true，否则参数错误</p>
     */
    public $HighRiskAck;

    /**
     * @var array <p>知情同意勾选清单，用于审计回放</p>
     */
    public $ScanRateAckChecklist;

    /**
     * @var ScanPriorityReq <p>扫描优先级配置</p>
     */
    public $ScanPriority;

    /**
     * @param string $Name <p>企业名称</p>
     * @param integer $Percent <p>百分比取值范围为30-100</p>
     * @param string $ScanType <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     * @param integer $Id <p>企业ID</p>
     * @param string $ScanCron <p>周期测绘时间</p>
     * @param boolean $IsScanNow <p>是否立即启动</p>
     * @param boolean $EnableCron <p>是否启用周期测绘</p>
     * @param boolean $EnableScanSubEnterprise <p>是否扫描子公司</p>
     * @param boolean $EnableAuth <p>是否授权</p>
     * @param string $AuthStartAt <p>授权开始时间</p>
     * @param string $AuthEndAt <p>授权结束时间</p>
     * @param string $AuthFile <p>授权文件id</p>
     * @param string $ScanTime <p>测绘时间配置项，采用json字符串格式</p>
     * @param string $Icon <p>企业图标</p>
     * @param integer $Qps <p>并发</p>
     * @param integer $SubCompanyLevel <p>子公司拓展层次</p>
     * @param boolean $IsIncludeFullScan <p>是否包含完整的扫描</p>
     * @param integer $PortScanQps <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
     * @param integer $SingleIPTaskLimit <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
     * @param boolean $HighRiskAck <p>任一速率超过保守值时必须为 true，否则参数错误</p>
     * @param array $ScanRateAckChecklist <p>知情同意勾选清单，用于审计回放</p>
     * @param ScanPriorityReq $ScanPriority <p>扫描优先级配置</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ScanCron",$param) and $param["ScanCron"] !== null) {
            $this->ScanCron = $param["ScanCron"];
        }

        if (array_key_exists("IsScanNow",$param) and $param["IsScanNow"] !== null) {
            $this->IsScanNow = $param["IsScanNow"];
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

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("SubCompanyLevel",$param) and $param["SubCompanyLevel"] !== null) {
            $this->SubCompanyLevel = $param["SubCompanyLevel"];
        }

        if (array_key_exists("IsIncludeFullScan",$param) and $param["IsIncludeFullScan"] !== null) {
            $this->IsIncludeFullScan = $param["IsIncludeFullScan"];
        }

        if (array_key_exists("PortScanQps",$param) and $param["PortScanQps"] !== null) {
            $this->PortScanQps = $param["PortScanQps"];
        }

        if (array_key_exists("SingleIPTaskLimit",$param) and $param["SingleIPTaskLimit"] !== null) {
            $this->SingleIPTaskLimit = $param["SingleIPTaskLimit"];
        }

        if (array_key_exists("HighRiskAck",$param) and $param["HighRiskAck"] !== null) {
            $this->HighRiskAck = $param["HighRiskAck"];
        }

        if (array_key_exists("ScanRateAckChecklist",$param) and $param["ScanRateAckChecklist"] !== null) {
            $this->ScanRateAckChecklist = $param["ScanRateAckChecklist"];
        }

        if (array_key_exists("ScanPriority",$param) and $param["ScanPriority"] !== null) {
            $this->ScanPriority = new ScanPriorityReq();
            $this->ScanPriority->deserialize($param["ScanPriority"]);
        }
    }
}
