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
 * 反弹shell白名单信息
 *
 * @method string getId() 获取白名单id
 * @method void setId(string $Id) 设置白名单id
 * @method integer getImageCount() 获取镜像数量
 * @method void setImageCount(integer $ImageCount) 设置镜像数量
 * @method string getProcessName() 获取连接进程名字
 * @method void setProcessName(string $ProcessName) 设置连接进程名字
 * @method string getDstIp() 获取目标地址ip
 * @method void setDstIp(string $DstIp) 设置目标地址ip
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getDstPort() 获取目标端口
 * @method void setDstPort(string $DstPort) 设置目标端口
 * @method boolean getIsGlobal() 获取是否是全局白名单，true全局
 * @method void setIsGlobal(boolean $IsGlobal) 设置是否是全局白名单，true全局
 * @method array getImageIds() 获取镜像id数组，为空代表全部
 * @method void setImageIds(array $ImageIds) 设置镜像id数组，为空代表全部
 */
class ReverseShellWhiteListBaseInfo extends AbstractModel
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
     * @var string 连接进程名字
     */
    public $ProcessName;

    /**
     * @var string 目标地址ip
     */
    public $DstIp;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 目标端口
     */
    public $DstPort;

    /**
     * @var boolean 是否是全局白名单，true全局
     */
    public $IsGlobal;

    /**
     * @var array 镜像id数组，为空代表全部
     */
    public $ImageIds;

    /**
     * @param string $Id 白名单id
     * @param integer $ImageCount 镜像数量
     * @param string $ProcessName 连接进程名字
     * @param string $DstIp 目标地址ip
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $DstPort 目标端口
     * @param boolean $IsGlobal 是否是全局白名单，true全局
     * @param array $ImageIds 镜像id数组，为空代表全部
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

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }
    }
}
