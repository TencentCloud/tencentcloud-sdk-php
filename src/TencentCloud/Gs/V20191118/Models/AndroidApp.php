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
 * 安卓应用
 *
 * @method string getAndroidAppId() 获取<p>安卓应用 Id</p>
 * @method void setAndroidAppId(string $AndroidAppId) 设置<p>安卓应用 Id</p>
 * @method string getName() 获取<p>安卓应用名称</p>
 * @method void setName(string $Name) 设置<p>安卓应用名称</p>
 * @method string getState() 获取<p>安卓应用状态（上架、下架）</p>
 * @method void setState(string $State) 设置<p>安卓应用状态（上架、下架）</p>
 * @method array getAndroidAppVersionInfo() 获取<p>安卓应用版本列表</p>
 * @method void setAndroidAppVersionInfo(array $AndroidAppVersionInfo) 设置<p>安卓应用版本列表</p>
 * @method string getCreateTime() 获取<p>安卓应用创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>安卓应用创建时间</p>
 * @method string getUserId() 获取<p>用户 Id</p>
 * @method void setUserId(string $UserId) 设置<p>用户 Id</p>
 * @method string getAppMode() 获取<p>应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）</p>
 * @method void setAppMode(string $AppMode) 设置<p>应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）</p>
 * @method string getUpdateState() 获取<p>应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态</p>
 * @method void setUpdateState(string $UpdateState) 设置<p>应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态</p>
 * @method string getPackageName() 获取<p>安卓应用包名</p>
 * @method void setPackageName(string $PackageName) 设置<p>安卓应用包名</p>
 */
class AndroidApp extends AbstractModel
{
    /**
     * @var string <p>安卓应用 Id</p>
     */
    public $AndroidAppId;

    /**
     * @var string <p>安卓应用名称</p>
     */
    public $Name;

    /**
     * @var string <p>安卓应用状态（上架、下架）</p>
     */
    public $State;

    /**
     * @var array <p>安卓应用版本列表</p>
     */
    public $AndroidAppVersionInfo;

    /**
     * @var string <p>安卓应用创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>用户 Id</p>
     */
    public $UserId;

    /**
     * @var string <p>应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）</p>
     */
    public $AppMode;

    /**
     * @var string <p>应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态</p>
     */
    public $UpdateState;

    /**
     * @var string <p>安卓应用包名</p>
     */
    public $PackageName;

    /**
     * @param string $AndroidAppId <p>安卓应用 Id</p>
     * @param string $Name <p>安卓应用名称</p>
     * @param string $State <p>安卓应用状态（上架、下架）</p>
     * @param array $AndroidAppVersionInfo <p>安卓应用版本列表</p>
     * @param string $CreateTime <p>安卓应用创建时间</p>
     * @param string $UserId <p>用户 Id</p>
     * @param string $AppMode <p>应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）</p>
     * @param string $UpdateState <p>应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态</p>
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
        if (array_key_exists("AndroidAppId",$param) and $param["AndroidAppId"] !== null) {
            $this->AndroidAppId = $param["AndroidAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AndroidAppVersionInfo",$param) and $param["AndroidAppVersionInfo"] !== null) {
            $this->AndroidAppVersionInfo = [];
            foreach ($param["AndroidAppVersionInfo"] as $key => $value){
                $obj = new AndroidAppVersionInfo();
                $obj->deserialize($value);
                array_push($this->AndroidAppVersionInfo, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }

        if (array_key_exists("UpdateState",$param) and $param["UpdateState"] !== null) {
            $this->UpdateState = $param["UpdateState"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }
    }
}
