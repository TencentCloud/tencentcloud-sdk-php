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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 隐私合规应用信息
 *
 * @method string getAppPackage() 获取小程序apiiid
 * @method void setAppPackage(string $AppPackage) 设置小程序apiiid
 * @method string getAppName() 获取小程序应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置小程序应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppVersion() 获取小程序应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppVersion(string $AppVersion) 设置小程序应用版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method string getReportUrl() 获取小程序隐私诊断报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportUrl(string $ReportUrl) 设置小程序隐私诊断报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReportTitle() 获取小程序隐私诊断报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportTitle(string $ReportTitle) 设置小程序隐私诊断报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBehaviorUrl() 获取小程序隐私诊断堆栈报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBehaviorUrl(string $BehaviorUrl) 设置小程序隐私诊断堆栈报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBehaviorTitle() 获取小程序隐私诊断堆栈报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBehaviorTitle(string $BehaviorTitle) 设置小程序隐私诊断堆栈报告名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHighRiskCount() 获取诊断风险项数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighRiskCount(integer $HighRiskCount) 设置诊断风险项数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivacyTextName() 获取隐私申明文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivacyTextName(string $PrivacyTextName) 设置隐私申明文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSoftwareMD5() 获取软件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftwareMD5(string $SoftwareMD5) 设置软件MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPrivacyTextMD5() 获取隐私文本MD5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivacyTextMD5(string $PrivacyTextMD5) 设置隐私文本MD5
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppInfoItem extends AbstractModel
{
    /**
     * @var string 小程序apiiid
     */
    public $AppPackage;

    /**
     * @var string 小程序应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string 小程序应用版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppVersion;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var string 小程序隐私诊断报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportUrl;

    /**
     * @var string 小程序隐私诊断报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportTitle;

    /**
     * @var string 小程序隐私诊断堆栈报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BehaviorUrl;

    /**
     * @var string 小程序隐私诊断堆栈报告名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BehaviorTitle;

    /**
     * @var integer 诊断风险项数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighRiskCount;

    /**
     * @var string 隐私申明文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivacyTextName;

    /**
     * @var string 软件MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftwareMD5;

    /**
     * @var string 隐私文本MD5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivacyTextMD5;

    /**
     * @param string $AppPackage 小程序apiiid
     * @param string $AppName 小程序应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppVersion 小程序应用版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param string $ReportUrl 小程序隐私诊断报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReportTitle 小程序隐私诊断报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BehaviorUrl 小程序隐私诊断堆栈报告下载链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BehaviorTitle 小程序隐私诊断堆栈报告名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HighRiskCount 诊断风险项数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivacyTextName 隐私申明文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SoftwareMD5 软件MD5
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PrivacyTextMD5 隐私文本MD5
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AppPackage",$param) and $param["AppPackage"] !== null) {
            $this->AppPackage = $param["AppPackage"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
        }

        if (array_key_exists("ReportTitle",$param) and $param["ReportTitle"] !== null) {
            $this->ReportTitle = $param["ReportTitle"];
        }

        if (array_key_exists("BehaviorUrl",$param) and $param["BehaviorUrl"] !== null) {
            $this->BehaviorUrl = $param["BehaviorUrl"];
        }

        if (array_key_exists("BehaviorTitle",$param) and $param["BehaviorTitle"] !== null) {
            $this->BehaviorTitle = $param["BehaviorTitle"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("PrivacyTextName",$param) and $param["PrivacyTextName"] !== null) {
            $this->PrivacyTextName = $param["PrivacyTextName"];
        }

        if (array_key_exists("SoftwareMD5",$param) and $param["SoftwareMD5"] !== null) {
            $this->SoftwareMD5 = $param["SoftwareMD5"];
        }

        if (array_key_exists("PrivacyTextMD5",$param) and $param["PrivacyTextMD5"] !== null) {
            $this->PrivacyTextMD5 = $param["PrivacyTextMD5"];
        }
    }
}
