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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAppScanTask请求参数结构体
 *
 * @method integer getTaskType() 获取任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method void setTaskType(integer $TaskType) 设置任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method integer getSource() 获取任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method void setSource(integer $Source) 设置任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method string getAppPackage() 获取App包名
 * @method void setAppPackage(string $AppPackage) 设置App包名
 * @method string getAppName() 获取App名称(任务来源为2时必填)
 * @method void setAppName(string $AppName) 设置App名称(任务来源为2时必填)
 * @method string getAppVersion() 获取App版本
 * @method void setAppVersion(string $AppVersion) 设置App版本
 * @method string getFileID() 获取上传的软件文件ID(任务来源为1时必填)
 * @method void setFileID(string $FileID) 设置上传的软件文件ID(任务来源为1时必填)
 * @method string getAppDownloadUrl() 获取软件下载链接地址(任务来源为2时必填)
 * @method void setAppDownloadUrl(string $AppDownloadUrl) 设置软件下载链接地址(任务来源为2时必填)
 * @method string getPrivacyTextUrl() 获取隐私文本下载地址(任务来源为2时必填)
 * @method void setPrivacyTextUrl(string $PrivacyTextUrl) 设置隐私文本下载地址(任务来源为2时必填)
 * @method string getContactName() 获取联系人信息
 * @method void setContactName(string $ContactName) 设置联系人信息
 * @method string getTelNumber() 获取联系电话
 * @method void setTelNumber(string $TelNumber) 设置联系电话
 * @method string getEmail() 获取公司邮箱
 * @method void setEmail(string $Email) 设置公司邮箱
 * @method string getCorpName() 获取公司名称
 * @method void setCorpName(string $CorpName) 设置公司名称
 * @method string getSalesPerson() 获取商务对接人员
 * @method void setSalesPerson(string $SalesPerson) 设置商务对接人员
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getIsAgreePrivacy() 获取是否同意隐私条款，0:不同意(默认), 1:同意
 * @method void setIsAgreePrivacy(integer $IsAgreePrivacy) 设置是否同意隐私条款，0:不同意(默认), 1:同意
 * @method string getPrivacyTextName() 获取隐私申明文件名称
 * @method void setPrivacyTextName(string $PrivacyTextName) 设置隐私申明文件名称
 * @method string getAppSha1() 获取软件Sha1值(PrivacyTextMD5不为空时必填)
 * @method void setAppSha1(string $AppSha1) 设置软件Sha1值(PrivacyTextMD5不为空时必填)
 * @method string getPrivacyTextMD5() 获取隐私申明文本md5(AppSha1不为空时必填)
 * @method void setPrivacyTextMD5(string $PrivacyTextMD5) 设置隐私申明文本md5(AppSha1不为空时必填)
 */
class CreateAppScanTaskRequest extends AbstractModel
{
    /**
     * @var integer 任务类型, 0:基础版, 1:专家版, 2:本地化
     */
    public $TaskType;

    /**
     * @var integer 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     */
    public $Source;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var string App包名
     */
    public $AppPackage;

    /**
     * @var string App名称(任务来源为2时必填)
     */
    public $AppName;

    /**
     * @var string App版本
     */
    public $AppVersion;

    /**
     * @var string 上传的软件文件ID(任务来源为1时必填)
     */
    public $FileID;

    /**
     * @var string 软件下载链接地址(任务来源为2时必填)
     */
    public $AppDownloadUrl;

    /**
     * @var string 隐私文本下载地址(任务来源为2时必填)
     */
    public $PrivacyTextUrl;

    /**
     * @var string 联系人信息
     */
    public $ContactName;

    /**
     * @var string 联系电话
     */
    public $TelNumber;

    /**
     * @var string 公司邮箱
     */
    public $Email;

    /**
     * @var string 公司名称
     */
    public $CorpName;

    /**
     * @var string 商务对接人员
     */
    public $SalesPerson;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 是否同意隐私条款，0:不同意(默认), 1:同意
     */
    public $IsAgreePrivacy;

    /**
     * @var string 隐私申明文件名称
     */
    public $PrivacyTextName;

    /**
     * @var string 软件Sha1值(PrivacyTextMD5不为空时必填)
     */
    public $AppSha1;

    /**
     * @var string 隐私申明文本md5(AppSha1不为空时必填)
     */
    public $PrivacyTextMD5;

    /**
     * @param integer $TaskType 任务类型, 0:基础版, 1:专家版, 2:本地化
     * @param integer $Source 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param string $AppPackage App包名
     * @param string $AppName App名称(任务来源为2时必填)
     * @param string $AppVersion App版本
     * @param string $FileID 上传的软件文件ID(任务来源为1时必填)
     * @param string $AppDownloadUrl 软件下载链接地址(任务来源为2时必填)
     * @param string $PrivacyTextUrl 隐私文本下载地址(任务来源为2时必填)
     * @param string $ContactName 联系人信息
     * @param string $TelNumber 联系电话
     * @param string $Email 公司邮箱
     * @param string $CorpName 公司名称
     * @param string $SalesPerson 商务对接人员
     * @param string $Remark 备注信息
     * @param integer $IsAgreePrivacy 是否同意隐私条款，0:不同意(默认), 1:同意
     * @param string $PrivacyTextName 隐私申明文件名称
     * @param string $AppSha1 软件Sha1值(PrivacyTextMD5不为空时必填)
     * @param string $PrivacyTextMD5 隐私申明文本md5(AppSha1不为空时必填)
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
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

        if (array_key_exists("FileID",$param) and $param["FileID"] !== null) {
            $this->FileID = $param["FileID"];
        }

        if (array_key_exists("AppDownloadUrl",$param) and $param["AppDownloadUrl"] !== null) {
            $this->AppDownloadUrl = $param["AppDownloadUrl"];
        }

        if (array_key_exists("PrivacyTextUrl",$param) and $param["PrivacyTextUrl"] !== null) {
            $this->PrivacyTextUrl = $param["PrivacyTextUrl"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("TelNumber",$param) and $param["TelNumber"] !== null) {
            $this->TelNumber = $param["TelNumber"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("SalesPerson",$param) and $param["SalesPerson"] !== null) {
            $this->SalesPerson = $param["SalesPerson"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IsAgreePrivacy",$param) and $param["IsAgreePrivacy"] !== null) {
            $this->IsAgreePrivacy = $param["IsAgreePrivacy"];
        }

        if (array_key_exists("PrivacyTextName",$param) and $param["PrivacyTextName"] !== null) {
            $this->PrivacyTextName = $param["PrivacyTextName"];
        }

        if (array_key_exists("AppSha1",$param) and $param["AppSha1"] !== null) {
            $this->AppSha1 = $param["AppSha1"];
        }

        if (array_key_exists("PrivacyTextMD5",$param) and $param["PrivacyTextMD5"] !== null) {
            $this->PrivacyTextMD5 = $param["PrivacyTextMD5"];
        }
    }
}
