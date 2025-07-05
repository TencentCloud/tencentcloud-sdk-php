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
 * DescribeVcubeApplicationAndPlayList请求参数结构体
 *
 * @method string getBizType() 获取查询对应业务方的license，直播:live 点播：vod
 * @method void setBizType(string $BizType) 设置查询对应业务方的license，直播:live 点播：vod
 * @method string getAppType() 获取应用类型测试：test，正式：formal
 * @method void setAppType(string $AppType) 设置应用类型测试：test，正式：formal
 * @method string getAppName() 获取应用名称，模糊查询
 * @method void setAppName(string $AppName) 设置应用名称，模糊查询
 * @method string getBundleId() 获取Ios包名，模糊查询
 * @method void setBundleId(string $BundleId) 设置Ios包名，模糊查询
 * @method string getPackageName() 获取Android 包名，模糊查询
 * @method void setPackageName(string $PackageName) 设置Android 包名，模糊查询
 * @method string getPlatform() 获取平台信息，pc 或者 mobile
 * @method void setPlatform(string $Platform) 设置平台信息，pc 或者 mobile
 * @method string getMacBundleId() 获取Mac 进程名
 * @method void setMacBundleId(string $MacBundleId) 设置Mac 进程名
 * @method string getWinProcessName() 获取Windows 进程名
 * @method void setWinProcessName(string $WinProcessName) 设置Windows 进程名
 */
class DescribeVcubeApplicationAndPlayListRequest extends AbstractModel
{
    /**
     * @var string 查询对应业务方的license，直播:live 点播：vod
     */
    public $BizType;

    /**
     * @var string 应用类型测试：test，正式：formal
     */
    public $AppType;

    /**
     * @var string 应用名称，模糊查询
     */
    public $AppName;

    /**
     * @var string Ios包名，模糊查询
     */
    public $BundleId;

    /**
     * @var string Android 包名，模糊查询
     */
    public $PackageName;

    /**
     * @var string 平台信息，pc 或者 mobile
     */
    public $Platform;

    /**
     * @var string Mac 进程名
     */
    public $MacBundleId;

    /**
     * @var string Windows 进程名
     */
    public $WinProcessName;

    /**
     * @param string $BizType 查询对应业务方的license，直播:live 点播：vod
     * @param string $AppType 应用类型测试：test，正式：formal
     * @param string $AppName 应用名称，模糊查询
     * @param string $BundleId Ios包名，模糊查询
     * @param string $PackageName Android 包名，模糊查询
     * @param string $Platform 平台信息，pc 或者 mobile
     * @param string $MacBundleId Mac 进程名
     * @param string $WinProcessName Windows 进程名
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
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

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("MacBundleId",$param) and $param["MacBundleId"] !== null) {
            $this->MacBundleId = $param["MacBundleId"];
        }

        if (array_key_exists("WinProcessName",$param) and $param["WinProcessName"] !== null) {
            $this->WinProcessName = $param["WinProcessName"];
        }
    }
}
