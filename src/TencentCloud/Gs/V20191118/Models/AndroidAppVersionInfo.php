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
 * @method string getAndroidAppVersion() 获取<p>安卓应用版本</p>
 * @method void setAndroidAppVersion(string $AndroidAppVersion) 设置<p>安卓应用版本</p>
 * @method string getState() 获取<p>安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功</p>
 * @method void setState(string $State) 设置<p>安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功</p>
 * @method string getCreateTime() 获取<p>安卓应用版本创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>安卓应用版本创建时间</p>
 * @method string getCommand() 获取<p>shell 安装命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
 * @method void setCommand(string $Command) 设置<p>shell 安装命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
 * @method string getUninstallCommand() 获取<p>shell 卸载命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
 * @method void setUninstallCommand(string $UninstallCommand) 设置<p>shell 卸载命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
 * @method string getCleanupMode() 获取<p>应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。</p>
 * @method void setCleanupMode(string $CleanupMode) 设置<p>应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。</p>
 * @method string getAndroidAppVersionName() 获取<p>安卓应用版本名称（版本描述、备注）</p>
 * @method void setAndroidAppVersionName(string $AndroidAppVersionName) 设置<p>安卓应用版本名称（版本描述、备注）</p>
 * @method string getActivity() 获取<p>安卓应用启动页</p>
 * @method void setActivity(string $Activity) 设置<p>安卓应用启动页</p>
 * @method string getVersionName() 获取<p>应用版本号（Version Name）</p>
 * @method void setVersionName(string $VersionName) 设置<p>应用版本号（Version Name）</p>
 * @method string getMD5() 获取<p>应用包 MD5</p>
 * @method void setMD5(string $MD5) 设置<p>应用包 MD5</p>
 * @method integer getFileSize() 获取<p>应用包文件大小（字节）</p>
 * @method void setFileSize(integer $FileSize) 设置<p>应用包文件大小（字节）</p>
 * @method string getPackageName() 获取<p>安卓应用包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>安卓应用包名</p>
 */
class AndroidAppVersionInfo extends AbstractModel
{
    /**
     * @var string <p>安卓应用版本</p>
     */
    public $AndroidAppVersion;

    /**
     * @var string <p>安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功</p>
     */
    public $State;

    /**
     * @var string <p>安卓应用版本创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>shell 安装命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
     */
    public $Command;

    /**
     * @var string <p>shell 卸载命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
     */
    public $UninstallCommand;

    /**
     * @var string <p>应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。</p>
     */
    public $CleanupMode;

    /**
     * @var string <p>安卓应用版本名称（版本描述、备注）</p>
     */
    public $AndroidAppVersionName;

    /**
     * @var string <p>安卓应用启动页</p>
     */
    public $Activity;

    /**
     * @var string <p>应用版本号（Version Name）</p>
     */
    public $VersionName;

    /**
     * @var string <p>应用包 MD5</p>
     */
    public $MD5;

    /**
     * @var integer <p>应用包文件大小（字节）</p>
     */
    public $FileSize;

    /**
     * @var string <p>安卓应用包名</p>
     */
    public $PackageName;

    /**
     * @param string $AndroidAppVersion <p>安卓应用版本</p>
     * @param string $State <p>安卓应用版本创建状态，取值：NORMAL：无（默认）、UPLOADING：上传中、CREATING： 创建中、CREATE_FAIL：创建失败、PACKAGE_NAME_MISMATCH：包名不匹配、VERSION_ALREADY_EXISTS：版本已存在、APP_PARSE_FAIL： app 解析失败、APP_EXISTS_SECURITY_RISK：app 存在安全风险、CREATE_SUCCESS：创建成功</p>
     * @param string $CreateTime <p>安卓应用版本创建时间</p>
     * @param string $Command <p>shell 安装命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
     * @param string $UninstallCommand <p>shell 卸载命令（支持多条命令执行，通过 &amp;&amp; 组合；只在应用 AppMode 为 ADVANCED 高级模式下 才会生效）</p>
     * @param string $CleanupMode <p>应用资源清理模式（实例安装应用所用资源），取值：CLEANUP_ON_UNINSTALL（默认值），卸载 App 时清理；CLEANUP_AFTER_INSTALL，安装 App 后立即清理。普通应用只有 CLEANUP_AFTER_INSTALL 模式。</p>
     * @param string $AndroidAppVersionName <p>安卓应用版本名称（版本描述、备注）</p>
     * @param string $Activity <p>安卓应用启动页</p>
     * @param string $VersionName <p>应用版本号（Version Name）</p>
     * @param string $MD5 <p>应用包 MD5</p>
     * @param integer $FileSize <p>应用包文件大小（字节）</p>
     * @param string $PackageName <p>安卓应用包名</p>
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
