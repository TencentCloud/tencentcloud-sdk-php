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
 * CreateAndroidApp请求参数结构体
 *
 * @method string getName() 获取安卓应用名字
 * @method void setName(string $Name) 设置安卓应用名字
 * @method string getUserId() 获取用户 Id
 * @method void setUserId(string $UserId) 设置用户 Id
 * @method string getAppMode() 获取应用模式（NORMAL : 普通模式、只支持 apk 文件上传，为默认值；ADVANCED : 高级模式、只支持上传 tgz 文件 和 自定义 shell 命令执行）
 * @method void setAppMode(string $AppMode) 设置应用模式（NORMAL : 普通模式、只支持 apk 文件上传，为默认值；ADVANCED : 高级模式、只支持上传 tgz 文件 和 自定义 shell 命令执行）
 */
class CreateAndroidAppRequest extends AbstractModel
{
    /**
     * @var string 安卓应用名字
     */
    public $Name;

    /**
     * @var string 用户 Id
     */
    public $UserId;

    /**
     * @var string 应用模式（NORMAL : 普通模式、只支持 apk 文件上传，为默认值；ADVANCED : 高级模式、只支持上传 tgz 文件 和 自定义 shell 命令执行）
     */
    public $AppMode;

    /**
     * @param string $Name 安卓应用名字
     * @param string $UserId 用户 Id
     * @param string $AppMode 应用模式（NORMAL : 普通模式、只支持 apk 文件上传，为默认值；ADVANCED : 高级模式、只支持上传 tgz 文件 和 自定义 shell 命令执行）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("AppMode",$param) and $param["AppMode"] !== null) {
            $this->AppMode = $param["AppMode"];
        }
    }
}
