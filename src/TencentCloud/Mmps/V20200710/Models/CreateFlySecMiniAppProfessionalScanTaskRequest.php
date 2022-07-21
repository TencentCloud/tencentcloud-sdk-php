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
 * CreateFlySecMiniAppProfessionalScanTask请求参数结构体
 *
 * @method string getMiniAppID() 获取小程序AppID
 * @method void setMiniAppID(string $MiniAppID) 设置小程序AppID
 * @method string getMiniAppName() 获取小程序名称
 * @method void setMiniAppName(string $MiniAppName) 设置小程序名称
 * @method integer getMode() 获取诊断模式 2:深度诊断
 * @method void setMode(integer $Mode) 设置诊断模式 2:深度诊断
 * @method string getCorpName() 获取公司名称
 * @method void setCorpName(string $CorpName) 设置公司名称
 * @method string getMobile() 获取手机号码
 * @method void setMobile(string $Mobile) 设置手机号码
 * @method string getEmail() 获取电子邮箱
 * @method void setEmail(string $Email) 设置电子邮箱
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class CreateFlySecMiniAppProfessionalScanTaskRequest extends AbstractModel
{
    /**
     * @var string 小程序AppID
     */
    public $MiniAppID;

    /**
     * @var string 小程序名称
     */
    public $MiniAppName;

    /**
     * @var integer 诊断模式 2:深度诊断
     */
    public $Mode;

    /**
     * @var string 公司名称
     */
    public $CorpName;

    /**
     * @var string 手机号码
     */
    public $Mobile;

    /**
     * @var string 电子邮箱
     */
    public $Email;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param string $MiniAppID 小程序AppID
     * @param string $MiniAppName 小程序名称
     * @param integer $Mode 诊断模式 2:深度诊断
     * @param string $CorpName 公司名称
     * @param string $Mobile 手机号码
     * @param string $Email 电子邮箱
     * @param string $Remark 备注信息
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

        if (array_key_exists("MiniAppName",$param) and $param["MiniAppName"] !== null) {
            $this->MiniAppName = $param["MiniAppName"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
