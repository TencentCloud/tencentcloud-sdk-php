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
 * CreateAppScanTask请求参数结构体
 *
 * @method integer getTaskType() 获取任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method void setTaskType(integer $TaskType) 设置任务类型, 0:基础版, 1:专家版, 2:本地化
 * @method integer getSource() 获取任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
 * @method void setSource(integer $Source) 设置任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
 * @method string getAppPackage() 获取小程序AppID
 * @method void setAppPackage(string $AppPackage) 设置小程序AppID
 * @method integer getPlatform() 获取应用平台, 0:android, 1:ios, 2:小程序
 * @method void setPlatform(integer $Platform) 设置应用平台, 0:android, 1:ios, 2:小程序
 * @method string getAppName() 获取小程序名称
 * @method void setAppName(string $AppName) 设置小程序名称
 * @method string getAppVersion() 获取小程序版本
 * @method void setAppVersion(string $AppVersion) 设置小程序版本
 * @method string getContactName() 获取联系人信息
 * @method void setContactName(string $ContactName) 设置联系人信息
 * @method string getTelNumber() 获取联系电话
 * @method void setTelNumber(string $TelNumber) 设置联系电话
 * @method string getCorpName() 获取公司名称
 * @method void setCorpName(string $CorpName) 设置公司名称
 * @method string getSalesPerson() 获取商务对接人员
 * @method void setSalesPerson(string $SalesPerson) 设置商务对接人员
 * @method string getEmail() 获取公司邮箱
 * @method void setEmail(string $Email) 设置公司邮箱
 */
class CreateAppScanTaskRequest extends AbstractModel
{
    /**
     * @var integer 任务类型, 0:基础版, 1:专家版, 2:本地化
     */
    public $TaskType;

    /**
     * @var integer 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
     */
    public $Source;

    /**
     * @var string 小程序AppID
     */
    public $AppPackage;

    /**
     * @var integer 应用平台, 0:android, 1:ios, 2:小程序
     */
    public $Platform;

    /**
     * @var string 小程序名称
     */
    public $AppName;

    /**
     * @var string 小程序版本
     */
    public $AppVersion;

    /**
     * @var string 联系人信息
     */
    public $ContactName;

    /**
     * @var string 联系电话
     */
    public $TelNumber;

    /**
     * @var string 公司名称
     */
    public $CorpName;

    /**
     * @var string 商务对接人员
     */
    public $SalesPerson;

    /**
     * @var string 公司邮箱
     */
    public $Email;

    /**
     * @param integer $TaskType 任务类型, 0:基础版, 1:专家版, 2:本地化
     * @param integer $Source 任务来源, 0:小程序诊断, 1:预留字段(暂未使用), 2:app诊断(android);
     * @param string $AppPackage 小程序AppID
     * @param integer $Platform 应用平台, 0:android, 1:ios, 2:小程序
     * @param string $AppName 小程序名称
     * @param string $AppVersion 小程序版本
     * @param string $ContactName 联系人信息
     * @param string $TelNumber 联系电话
     * @param string $CorpName 公司名称
     * @param string $SalesPerson 商务对接人员
     * @param string $Email 公司邮箱
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

        if (array_key_exists("AppPackage",$param) and $param["AppPackage"] !== null) {
            $this->AppPackage = $param["AppPackage"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("AppVersion",$param) and $param["AppVersion"] !== null) {
            $this->AppVersion = $param["AppVersion"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("TelNumber",$param) and $param["TelNumber"] !== null) {
            $this->TelNumber = $param["TelNumber"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("SalesPerson",$param) and $param["SalesPerson"] !== null) {
            $this->SalesPerson = $param["SalesPerson"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}
