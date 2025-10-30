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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权小程序信息
 *
 * @method string getMiniProgramAppId() 获取小程序APPID
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置小程序APPID
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method string getMiniProgramName() 获取小程序名称
 * @method void setMiniProgramName(string $MiniProgramName) 设置小程序名称
 * @method integer getLicenseNum() 获取激活码数
 * @method void setLicenseNum(integer $LicenseNum) 设置激活码数
 * @method string getIotAppId() 获取应用ID 
 * @method void setIotAppId(string $IotAppId) 设置应用ID 
 * @method string getIotAppName() 获取应用名称
 * @method void setIotAppName(string $IotAppName) 设置应用名称
 */
class AuthMiniProgramAppInfo extends AbstractModel
{
    /**
     * @var string 小程序APPID
     */
    public $MiniProgramAppId;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var string 小程序名称
     */
    public $MiniProgramName;

    /**
     * @var integer 激活码数
     */
    public $LicenseNum;

    /**
     * @var string 应用ID 
     */
    public $IotAppId;

    /**
     * @var string 应用名称
     */
    public $IotAppName;

    /**
     * @param string $MiniProgramAppId 小程序APPID
     * @param integer $CreateTime 创建时间
     * @param string $MiniProgramName 小程序名称
     * @param integer $LicenseNum 激活码数
     * @param string $IotAppId 应用ID 
     * @param string $IotAppName 应用名称
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
        if (array_key_exists("MiniProgramAppId",$param) and $param["MiniProgramAppId"] !== null) {
            $this->MiniProgramAppId = $param["MiniProgramAppId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("MiniProgramName",$param) and $param["MiniProgramName"] !== null) {
            $this->MiniProgramName = $param["MiniProgramName"];
        }

        if (array_key_exists("LicenseNum",$param) and $param["LicenseNum"] !== null) {
            $this->LicenseNum = $param["LicenseNum"];
        }

        if (array_key_exists("IotAppId",$param) and $param["IotAppId"] !== null) {
            $this->IotAppId = $param["IotAppId"];
        }

        if (array_key_exists("IotAppName",$param) and $param["IotAppName"] !== null) {
            $this->IotAppName = $param["IotAppName"];
        }
    }
}
