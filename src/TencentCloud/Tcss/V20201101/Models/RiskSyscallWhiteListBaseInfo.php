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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高危系统调用白名单信息
 *
 * @method string getId() 获取白名单id
 * @method void setId(string $Id) 设置白名单id
 * @method integer getImageCount() 获取镜像数量
 * @method void setImageCount(integer $ImageCount) 设置镜像数量
 * @method string getProcessPath() 获取连接进程路径
 * @method void setProcessPath(string $ProcessPath) 设置连接进程路径
 * @method array getSyscallNames() 获取系统调用名称列表
 * @method void setSyscallNames(array $SyscallNames) 设置系统调用名称列表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method boolean getIsGlobal() 获取是否是全局白名单，true全局
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否是全局白名单，true全局
 * @method array getImageIds() 获取镜像id数组
 * @method void setImageIds(array $ImageIds) 设置镜像id数组
 */
class RiskSyscallWhiteListBaseInfo extends AbstractModel
{
    /**
     * @var string 白名单id
     */
    public $Id;

    /**
     * @var integer 镜像数量
     */
    public $ImageCount;

    /**
     * @var string 连接进程路径
     */
    public $ProcessPath;

    /**
     * @var array 系统调用名称列表
     */
    public $SyscallNames;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var boolean 是否是全局白名单，true全局
     */
    public $IsGlobal;

    /**
     * @var array 镜像id数组
     */
    public $ImageIds;

    /**
     * @param string $Id 白名单id
     * @param integer $ImageCount 镜像数量
     * @param string $ProcessPath 连接进程路径
     * @param array $SyscallNames 系统调用名称列表
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param boolean $IsGlobal 是否是全局白名单，true全局
     * @param array $ImageIds 镜像id数组
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ImageCount",$param) and $param["ImageCount"] !== null) {
            $this->ImageCount = $param["ImageCount"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("SyscallNames",$param) and $param["SyscallNames"] !== null) {
            $this->SyscallNames = $param["SyscallNames"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }
    }
}
