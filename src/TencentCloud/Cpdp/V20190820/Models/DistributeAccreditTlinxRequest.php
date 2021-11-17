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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DistributeAccreditTlinx请求参数结构体
 *
 * @method string getOpenId() 获取收单系统分配的开放ID
 * @method void setOpenId(string $OpenId) 设置收单系统分配的开放ID
 * @method string getAuthType() 获取验证方式，传1手机验证(验证码时效60S)传2结算卡验证(时效6小时)，多种方式用逗号隔开
 * @method void setAuthType(string $AuthType) 设置验证方式，传1手机验证(验证码时效60S)传2结算卡验证(时效6小时)，多种方式用逗号隔开
 * @method string getOpenKey() 获取收单系统分配的密钥
 * @method void setOpenKey(string $OpenKey) 设置收单系统分配的密钥
 * @method string getProfile() 获取沙箱环境填sandbox，正式环境不填
 * @method void setProfile(string $Profile) 设置沙箱环境填sandbox，正式环境不填
 * @method string getPercent() 获取分账比例（500=5%）不传默认百分之10
 * @method void setPercent(string $Percent) 设置分账比例（500=5%）不传默认百分之10
 * @method string getFullName() 获取营业执照商户全称
 * @method void setFullName(string $FullName) 设置营业执照商户全称
 */
class DistributeAccreditTlinxRequest extends AbstractModel
{
    /**
     * @var string 收单系统分配的开放ID
     */
    public $OpenId;

    /**
     * @var string 验证方式，传1手机验证(验证码时效60S)传2结算卡验证(时效6小时)，多种方式用逗号隔开
     */
    public $AuthType;

    /**
     * @var string 收单系统分配的密钥
     */
    public $OpenKey;

    /**
     * @var string 沙箱环境填sandbox，正式环境不填
     */
    public $Profile;

    /**
     * @var string 分账比例（500=5%）不传默认百分之10
     */
    public $Percent;

    /**
     * @var string 营业执照商户全称
     */
    public $FullName;

    /**
     * @param string $OpenId 收单系统分配的开放ID
     * @param string $AuthType 验证方式，传1手机验证(验证码时效60S)传2结算卡验证(时效6小时)，多种方式用逗号隔开
     * @param string $OpenKey 收单系统分配的密钥
     * @param string $Profile 沙箱环境填sandbox，正式环境不填
     * @param string $Percent 分账比例（500=5%）不传默认百分之10
     * @param string $FullName 营业执照商户全称
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("OpenKey",$param) and $param["OpenKey"] !== null) {
            $this->OpenKey = $param["OpenKey"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }
    }
}
