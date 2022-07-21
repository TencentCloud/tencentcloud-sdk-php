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
 * CreateFlySecMiniAppScanTask请求参数结构体
 *
 * @method string getMiniAppID() 获取小程序AppID
 * @method void setMiniAppID(string $MiniAppID) 设置小程序AppID
 * @method integer getMode() 获取诊断模式 1:基础诊断
 * @method void setMode(integer $Mode) 设置诊断模式 1:基础诊断
 * @method string getMiniAppTestAccount() 获取小程序测试账号(自有账号体系需提供,其他情况不需要)
 * @method void setMiniAppTestAccount(string $MiniAppTestAccount) 设置小程序测试账号(自有账号体系需提供,其他情况不需要)
 * @method string getMiniAppTestPwd() 获取小程序测试密码(自有账号体系需提供,其他情况不需要)
 * @method void setMiniAppTestPwd(string $MiniAppTestPwd) 设置小程序测试密码(自有账号体系需提供,其他情况不需要)
 * @method string getIndustry() 获取小程序所属行业
 * @method void setIndustry(string $Industry) 设置小程序所属行业
 * @method string getSurveyContent() 获取小程序调查问卷json字符串
 * @method void setSurveyContent(string $SurveyContent) 设置小程序调查问卷json字符串
 * @method string getMobile() 获取手机号码
 * @method void setMobile(string $Mobile) 设置手机号码
 * @method string getEmail() 获取邮箱地址
 * @method void setEmail(string $Email) 设置邮箱地址
 * @method string getSalesPerson() 获取商务合作接口人
 * @method void setSalesPerson(string $SalesPerson) 设置商务合作接口人
 * @method integer getScanVersion() 获取诊断扫描版本 0:正式版 1:体验版
 * @method void setScanVersion(integer $ScanVersion) 设置诊断扫描版本 0:正式版 1:体验版
 */
class CreateFlySecMiniAppScanTaskRequest extends AbstractModel
{
    /**
     * @var string 小程序AppID
     */
    public $MiniAppID;

    /**
     * @var integer 诊断模式 1:基础诊断
     */
    public $Mode;

    /**
     * @var string 小程序测试账号(自有账号体系需提供,其他情况不需要)
     */
    public $MiniAppTestAccount;

    /**
     * @var string 小程序测试密码(自有账号体系需提供,其他情况不需要)
     */
    public $MiniAppTestPwd;

    /**
     * @var string 小程序所属行业
     */
    public $Industry;

    /**
     * @var string 小程序调查问卷json字符串
     */
    public $SurveyContent;

    /**
     * @var string 手机号码
     */
    public $Mobile;

    /**
     * @var string 邮箱地址
     */
    public $Email;

    /**
     * @var string 商务合作接口人
     */
    public $SalesPerson;

    /**
     * @var integer 诊断扫描版本 0:正式版 1:体验版
     */
    public $ScanVersion;

    /**
     * @param string $MiniAppID 小程序AppID
     * @param integer $Mode 诊断模式 1:基础诊断
     * @param string $MiniAppTestAccount 小程序测试账号(自有账号体系需提供,其他情况不需要)
     * @param string $MiniAppTestPwd 小程序测试密码(自有账号体系需提供,其他情况不需要)
     * @param string $Industry 小程序所属行业
     * @param string $SurveyContent 小程序调查问卷json字符串
     * @param string $Mobile 手机号码
     * @param string $Email 邮箱地址
     * @param string $SalesPerson 商务合作接口人
     * @param integer $ScanVersion 诊断扫描版本 0:正式版 1:体验版
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
        if (array_key_exists("MiniAppID",$param) and $param["MiniAppID"] !== null) {
            $this->MiniAppID = $param["MiniAppID"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("MiniAppTestAccount",$param) and $param["MiniAppTestAccount"] !== null) {
            $this->MiniAppTestAccount = $param["MiniAppTestAccount"];
        }

        if (array_key_exists("MiniAppTestPwd",$param) and $param["MiniAppTestPwd"] !== null) {
            $this->MiniAppTestPwd = $param["MiniAppTestPwd"];
        }

        if (array_key_exists("Industry",$param) and $param["Industry"] !== null) {
            $this->Industry = $param["Industry"];
        }

        if (array_key_exists("SurveyContent",$param) and $param["SurveyContent"] !== null) {
            $this->SurveyContent = $param["SurveyContent"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("SalesPerson",$param) and $param["SalesPerson"] !== null) {
            $this->SalesPerson = $param["SalesPerson"];
        }

        if (array_key_exists("ScanVersion",$param) and $param["ScanVersion"] !== null) {
            $this->ScanVersion = $param["ScanVersion"];
        }
    }
}
