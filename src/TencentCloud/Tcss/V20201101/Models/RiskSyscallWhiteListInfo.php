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
 * @method array getImageIds() 获取镜像id数组，为空代表全部
 * @method void setImageIds(array $ImageIds) 设置镜像id数组，为空代表全部
 * @method array getSyscallNames() 获取系统调用名称，通过DescribeRiskSyscallNames接口获取枚举列表
 * @method void setSyscallNames(array $SyscallNames) 设置系统调用名称，通过DescribeRiskSyscallNames接口获取枚举列表
 * @method string getProcessPath() 获取目标进程
 * @method void setProcessPath(string $ProcessPath) 设置目标进程
 * @method string getId() 获取白名单id，如果新建则id为空
 * @method void setId(string $Id) 设置白名单id，如果新建则id为空
 */
class RiskSyscallWhiteListInfo extends AbstractModel
{
    /**
     * @var array 镜像id数组，为空代表全部
     */
    public $ImageIds;

    /**
     * @var array 系统调用名称，通过DescribeRiskSyscallNames接口获取枚举列表
     */
    public $SyscallNames;

    /**
     * @var string 目标进程
     */
    public $ProcessPath;

    /**
     * @var string 白名单id，如果新建则id为空
     */
    public $Id;

    /**
     * @param array $ImageIds 镜像id数组，为空代表全部
     * @param array $SyscallNames 系统调用名称，通过DescribeRiskSyscallNames接口获取枚举列表
     * @param string $ProcessPath 目标进程
     * @param string $Id 白名单id，如果新建则id为空
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("SyscallNames",$param) and $param["SyscallNames"] !== null) {
            $this->SyscallNames = $param["SyscallNames"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
