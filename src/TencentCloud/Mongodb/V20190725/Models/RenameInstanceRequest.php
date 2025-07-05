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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenameInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，格式如：cmgo-p8vnipr5。请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cmgo-p8vnipr5。请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
 * @method string getNewName() 获取自定义实例名称，要求为1～128 长度的任意字符。
 * @method void setNewName(string $NewName) 设置自定义实例名称，要求为1～128 长度的任意字符。
 */
class RenameInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cmgo-p8vnipr5。请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 自定义实例名称，要求为1～128 长度的任意字符。
     */
    public $NewName;

    /**
     * @param string $InstanceId 实例ID，格式如：cmgo-p8vnipr5。请登录[MongoDB 控制台](https://console.cloud.tencent.com/mongodb#/)在实例列表复制实例 ID。
     * @param string $NewName 自定义实例名称，要求为1～128 长度的任意字符。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NewName",$param) and $param["NewName"] !== null) {
            $this->NewName = $param["NewName"];
        }
    }
}
