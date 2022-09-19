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
 * CreateAppScanTaskRepeat请求参数结构体
 *
 * @method integer getSource() 获取任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method void setSource(integer $Source) 设置任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method integer getTaskType() 获取任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method void setTaskType(integer $TaskType) 设置任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method string getOrgTaskID() 获取原诊断任务ID
 * @method void setOrgTaskID(string $OrgTaskID) 设置原诊断任务ID
 * @method string getAppPackage() 获取App包名
 * @method void setAppPackage(string $AppPackage) 设置App包名
 * @method string getFileID() 获取上传的文件ID(任务来源为1时必填)
 * @method void setFileID(string $FileID) 设置上传的文件ID(任务来源为1时必填)
 * @method string getAppDownloadUrl() 获取软件下载链接地址(任务来源为2时必填)
 * @method void setAppDownloadUrl(string $AppDownloadUrl) 设置软件下载链接地址(任务来源为2时必填)
 * @method string getPrivacyTextUrl() 获取隐私文本下载地址(任务来源为2时必填)
 * @method void setPrivacyTextUrl(string $PrivacyTextUrl) 设置隐私文本下载地址(任务来源为2时必填)
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method string getPrivacyTextName() 获取隐私申明文件名称
 * @method void setPrivacyTextName(string $PrivacyTextName) 设置隐私申明文件名称
 * @method string getAppSha1() 获取软件Sha1值(PrivacyTextMD5不为空时必填)
 * @method void setAppSha1(string $AppSha1) 设置软件Sha1值(PrivacyTextMD5不为空时必填)
 * @method string getPrivacyTextMD5() 获取隐私申明文本md5(AppSha1不为空时必填)
 * @method void setPrivacyTextMD5(string $PrivacyTextMD5) 设置隐私申明文本md5(AppSha1不为空时必填)
 */
class CreateAppScanTaskRepeatRequest extends AbstractModel
{
    /**
     * @var integer 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     */
    public $Source;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var integer 任务类型, 0:基础版, 1:专家版, 2:本地化
     */
    public $TaskType;

    /**
     * @var string 原诊断任务ID
     */
    public $OrgTaskID;

    /**
     * @var string App包名
     */
    public $AppPackage;

    /**
     * @var string 上传的文件ID(任务来源为1时必填)
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
     * @var string 应用名称
     */
    public $AppName;

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
     * @param integer $Source 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android), 3:app漏洞扫描;
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param integer $TaskType 任务类型, 0:基础版, 1:专家版, 2:本地化
     * @param string $OrgTaskID 原诊断任务ID
     * @param string $AppPackage App包名
     * @param string $FileID 上传的文件ID(任务来源为1时必填)
     * @param string $AppDownloadUrl 软件下载链接地址(任务来源为2时必填)
     * @param string $PrivacyTextUrl 隐私文本下载地址(任务来源为2时必填)
     * @param string $AppName 应用名称
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("OrgTaskID",$param) and $param["OrgTaskID"] !== null) {
            $this->OrgTaskID = $param["OrgTaskID"];
        }

        if (array_key_exists("AppPackage",$param) and $param["AppPackage"] !== null) {
            $this->AppPackage = $param["AppPackage"];
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

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
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
