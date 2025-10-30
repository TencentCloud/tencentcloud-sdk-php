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
 * @method string getAndroidAppId() 获取安卓应用 Id
 * @method void setAndroidAppId(string $AndroidAppId) 设置安卓应用 Id
 * @method string getName() 获取安卓应用名称
 * @method void setName(string $Name) 设置安卓应用名称
 * @method string getState() 获取安卓应用状态（上架、下架）
 * @method void setState(string $State) 设置安卓应用状态（上架、下架）
 * @method array getAndroidAppVersionInfo() 获取安卓应用版本列表
 * @method void setAndroidAppVersionInfo(array $AndroidAppVersionInfo) 设置安卓应用版本列表
 * @method string getCreateTime() 获取安卓应用创建时间
 * @method void setCreateTime(string $CreateTime) 设置安卓应用创建时间
 * @method string getUserId() 获取用户 Id
 * @method void setUserId(string $UserId) 设置用户 Id
 * @method string getAppMode() 获取应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）
 * @method void setAppMode(string $AppMode) 设置应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）
 * @method string getUpdateState() 获取应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态
 * @method void setUpdateState(string $UpdateState) 设置应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态
 * @method string getPackageName() 获取安卓应用包名
 * @method void setPackageName(string $PackageName) 设置安卓应用包名
 */
class AndroidApp extends AbstractModel
{
    /**
     * @var string 安卓应用 Id
     */
    public $AndroidAppId;

    /**
     * @var string 安卓应用名称
     */
    public $Name;

    /**
     * @var string 安卓应用状态（上架、下架）
     */
    public $State;

    /**
     * @var array 安卓应用版本列表
     */
    public $AndroidAppVersionInfo;

    /**
     * @var string 安卓应用创建时间
     */
    public $CreateTime;

    /**
     * @var string 用户 Id
     */
    public $UserId;

    /**
     * @var string 应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）
     */
    public $AppMode;

    /**
     * @var string 应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态
     */
    public $UpdateState;

    /**
     * @var string 安卓应用包名
     */
    public $PackageName;

    /**
     * @param string $AndroidAppId 安卓应用 Id
     * @param string $Name 安卓应用名称
     * @param string $State 安卓应用状态（上架、下架）
     * @param array $AndroidAppVersionInfo 安卓应用版本列表
     * @param string $CreateTime 安卓应用创建时间
     * @param string $UserId 用户 Id
     * @param string $AppMode 应用模式（NORMAL : 普通模式；ADVANCED : 高级模式）
     * @param string $UpdateState 应用更新状态，取值：UPLOADING 上传中、CREATING 创建中、CREATE_FAIL 创建失败、CREATE_SUCCESS 创建成功、PACKAGE_NAME_MISMATCH 包名不匹配、VERSION_ALREADY_EXISTS 版本已存在、APP_PARSE_FAIL app 解析失败、APP_EXISTS_SECURITY_RISK app 存在安全风险、NORMAL 默认状态
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
