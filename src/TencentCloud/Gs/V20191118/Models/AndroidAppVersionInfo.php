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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓应用版本信息
 *
 * @method string getAndroidAppVersion() 获取安卓应用版本
 * @method void setAndroidAppVersion(string $AndroidAppVersion) 设置安卓应用版本
 * @method string getState() 获取安卓应用版本创建状态（NORMAL：无、UPLOADING：上传中、
CREATING： 创建中、
CREATE_FAIL：创建失败、CREATE_SUCCESS：创建成功）
 * @method void setState(string $State) 设置安卓应用版本创建状态（NORMAL：无、UPLOADING：上传中、
CREATING： 创建中、
CREATE_FAIL：创建失败、CREATE_SUCCESS：创建成功）
 * @method string getCreateTime() 获取安卓应用版本创建时间
 * @method void setCreateTime(string $CreateTime) 设置安卓应用版本创建时间
 */
class AndroidAppVersionInfo extends AbstractModel
{
    /**
     * @var string 安卓应用版本
     */
    public $AndroidAppVersion;

    /**
     * @var string 安卓应用版本创建状态（NORMAL：无、UPLOADING：上传中、
CREATING： 创建中、
CREATE_FAIL：创建失败、CREATE_SUCCESS：创建成功）
     */
    public $State;

    /**
     * @var string 安卓应用版本创建时间
     */
    public $CreateTime;

    /**
     * @param string $AndroidAppVersion 安卓应用版本
     * @param string $State 安卓应用版本创建状态（NORMAL：无、UPLOADING：上传中、
CREATING： 创建中、
CREATE_FAIL：创建失败、CREATE_SUCCESS：创建成功）
     * @param string $CreateTime 安卓应用版本创建时间
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
    }
}
