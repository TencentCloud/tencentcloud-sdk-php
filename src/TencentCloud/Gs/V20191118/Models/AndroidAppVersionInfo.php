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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓应用版本信息
 *
 * @method string getAndroidAppVersion() 获取安卓应用版本
 * @method void setAndroidAppVersion(string $AndroidAppVersion) 设置安卓应用版本
 * @method string getState() 获取安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功
 * @method void setState(string $State) 设置安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功
 * @method string getCreateTime() 获取安卓应用版本创建时间
 * @method void setCreateTime(string $CreateTime) 设置安卓应用版本创建时间
 * @method string getCommand() 获取shell 安装命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
 * @method void setCommand(string $Command) 设置shell 安装命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
 * @method string getUninstallCommand() 获取shell 卸载命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
 * @method void setUninstallCommand(string $UninstallCommand) 设置shell 卸载命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
 * @method string getCleanupMode() 获取应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。
 * @method void setCleanupMode(string $CleanupMode) 设置应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。
 * @method string getAndroidAppVersionName() 获取安卓应用版本名称（版本描述、备注）
 * @method void setAndroidAppVersionName(string $AndroidAppVersionName) 设置安卓应用版本名称（版本描述、备注）
 * @method string getActivity() 获取安卓应用启动页
 * @method void setActivity(string $Activity) 设置安卓应用启动页
 * @method string getVersionName() 获取应用版本号（Version Name）
 * @method void setVersionName(string $VersionName) 设置应用版本号（Version Name）
 * @method string getMD5() 获取应用包 MD5
 * @method void setMD5(string $MD5) 设置应用包 MD5
 * @method integer getFileSize() 获取应用包文件大小（字节）
 * @method void setFileSize(integer $FileSize) 设置应用包文件大小（字节）
 * @method string getPackageName() 获取安卓应用包名
 * @method void setPackageName(string $PackageName) 设置安卓应用包名
 */
class AndroidAppVersionInfo extends AbstractModel
{
    /**
     * @var string 安卓应用版本
     */
    public $AndroidAppVersion;

    /**
     * @var string 安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功
     */
    public $State;

    /**
     * @var string 安卓应用版本创建时间
     */
    public $CreateTime;

    /**
     * @var string shell 安装命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
     */
    public $Command;

    /**
     * @var string shell 卸载命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
     */
    public $UninstallCommand;

    /**
     * @var string 应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。
     */
    public $CleanupMode;

    /**
     * @var string 安卓应用版本名称（版本描述、备注）
     */
    public $AndroidAppVersionName;

    /**
     * @var string 安卓应用启动页
     */
    public $Activity;

    /**
     * @var string 应用版本号（Version Name）
     */
    public $VersionName;

    /**
     * @var string 应用包 MD5
     */
    public $MD5;

    /**
     * @var integer 应用包文件大小（字节）
     */
    public $FileSize;

    /**
     * @var string 安卓应用包名
     */
    public $PackageName;

    /**
     * @param string $AndroidAppVersion 安卓应用版本
     * @param string $State 安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功
     * @param string $CreateTime 安卓应用版本创建时间
     * @param string $Command shell 安装命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
     * @param string $UninstallCommand shell 卸载命令（支持多条命令执行，通过 && 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）
     * @param string $CleanupMode 应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。
     * @param string $AndroidAppVersionName 安卓应用版本名称（版本描述、备注）
     * @param string $Activity 安卓应用启动页
     * @param string $VersionName 应用版本号（Version Name）
     * @param string $MD5 应用包 MD5
     * @param integer $FileSize 应用包文件大小（字节）
     * @param string $PackageName 安卓应用包名
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
        if (array_key_exists("AndroidAppVersion",$param) and $param["AndroidAppVersion"] !== null) {
            $this->AndroidAppVersion = $param["AndroidAppVersion"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("UninstallCommand",$param) and $param["UninstallCommand"] !== null) {
            $this->UninstallCommand = $param["UninstallCommand"];
        }

        if (array_key_exists("CleanupMode",$param) and $param["CleanupMode"] !== null) {
            $this->CleanupMode = $param["CleanupMode"];
        }

        if (array_key_exists("AndroidAppVersionName",$param) and $param["AndroidAppVersionName"] !== null) {
            $this->AndroidAppVersionName = $param["AndroidAppVersionName"];
        }

        if (array_key_exists("Activity",$param) and $param["Activity"] !== null) {
            $this->Activity = $param["Activity"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("MD5",$param) and $param["MD5"] !== null) {
            $this->MD5 = $param["MD5"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
