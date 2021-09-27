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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 软件应用关联进程信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getStatus() 获取进程状态
 * @method void setStatus(string $Status) 设置进程状态
 * @method string getVersion() 获取进程版本
 * @method void setVersion(string $Version) 设置进程版本
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method string getStartTime() 获取启动时间
 * @method void setStartTime(string $StartTime) 设置启动时间
 */
class AssetAppProcessInfo extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 进程状态
     */
    public $Status;

    /**
     * @var string 进程版本
     */
    public $Version;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var string 启动时间
     */
    public $StartTime;

    /**
     * @param string $Name 名称
     * @param string $Status 进程状态
     * @param string $Version 进程版本
     * @param string $Path 路径
     * @param string $User 用户
     * @param string $StartTime 启动时间
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
