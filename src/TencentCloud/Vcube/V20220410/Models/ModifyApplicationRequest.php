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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplication请求参数结构体
 *
 * @method integer getApplicationId() 获取应用ID
 * @method void setApplicationId(integer $ApplicationId) 设置应用ID
 * @method string getAppName() 获取应用名
 * @method void setAppName(string $AppName) 设置应用名
 * @method string getBundleId() 获取应用ID
 * @method void setBundleId(string $BundleId) 设置应用ID
 * @method string getPackageName() 获取包名
 * @method void setPackageName(string $PackageName) 设置包名
 * @method string getWinProcessName() 获取Windows 进程名
 * @method void setWinProcessName(string $WinProcessName) 设置Windows 进程名
 * @method string getMacBundleId() 获取Mac 进程名
 * @method void setMacBundleId(string $MacBundleId) 设置Mac 进程名
 * @method array getDomainList() 获取要追加的web域名列表
 * @method void setDomainList(array $DomainList) 设置要追加的web域名列表
 */
class ModifyApplicationRequest extends AbstractModel
{
    /**
     * @var integer 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 应用名
     */
    public $AppName;

    /**
     * @var string 应用ID
     */
    public $BundleId;

    /**
     * @var string 包名
     */
    public $PackageName;

    /**
     * @var string Windows 进程名
     */
    public $WinProcessName;

    /**
     * @var string Mac 进程名
     */
    public $MacBundleId;

    /**
     * @var array 要追加的web域名列表
     */
    public $DomainList;

    /**
     * @param integer $ApplicationId 应用ID
     * @param string $AppName 应用名
     * @param string $BundleId 应用ID
     * @param string $PackageName 包名
     * @param string $WinProcessName Windows 进程名
     * @param string $MacBundleId Mac 进程名
     * @param array $DomainList 要追加的web域名列表
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("WinProcessName",$param) and $param["WinProcessName"] !== null) {
            $this->WinProcessName = $param["WinProcessName"];
        }

        if (array_key_exists("MacBundleId",$param) and $param["MacBundleId"] !== null) {
            $this->MacBundleId = $param["MacBundleId"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}
