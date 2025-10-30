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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 插件信息
 *
 * @method string getPluginName() 获取插件名
 * @method void setPluginName(string $PluginName) 设置插件名
 * @method string getPluginVersion() 获取插件版本
 * @method void setPluginVersion(string $PluginVersion) 设置插件版本
 * @method string getPluginDesc() 获取插件描述
 * @method void setPluginDesc(string $PluginDesc) 设置插件描述
 * @method integer getStatus() 获取插件状态：-2 已卸载 -1 卸载中 0 安装中 1 已安装
 * @method void setStatus(integer $Status) 设置插件状态：-2 已卸载 -1 卸载中 0 安装中 1 已安装
 * @method boolean getRemovable() 获取插件是否可卸载
 * @method void setRemovable(boolean $Removable) 设置插件是否可卸载
 * @method integer getPluginType() 获取0：系统插件
 * @method void setPluginType(integer $PluginType) 设置0：系统插件
 * @method string getPluginUpdateTime() 获取插件变更时间
 * @method void setPluginUpdateTime(string $PluginUpdateTime) 设置插件变更时间
 */
class DescribeInstancePluginInfo extends AbstractModel
{
    /**
     * @var string 插件名
     */
    public $PluginName;

    /**
     * @var string 插件版本
     */
    public $PluginVersion;

    /**
     * @var string 插件描述
     */
    public $PluginDesc;

    /**
     * @var integer 插件状态：-2 已卸载 -1 卸载中 0 安装中 1 已安装
     */
    public $Status;

    /**
     * @var boolean 插件是否可卸载
     */
    public $Removable;

    /**
     * @var integer 0：系统插件
     */
    public $PluginType;

    /**
     * @var string 插件变更时间
     */
    public $PluginUpdateTime;

    /**
     * @param string $PluginName 插件名
     * @param string $PluginVersion 插件版本
     * @param string $PluginDesc 插件描述
     * @param integer $Status 插件状态：-2 已卸载 -1 卸载中 0 安装中 1 已安装
     * @param boolean $Removable 插件是否可卸载
     * @param integer $PluginType 0：系统插件
     * @param string $PluginUpdateTime 插件变更时间
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
        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("PluginVersion",$param) and $param["PluginVersion"] !== null) {
            $this->PluginVersion = $param["PluginVersion"];
        }

        if (array_key_exists("PluginDesc",$param) and $param["PluginDesc"] !== null) {
            $this->PluginDesc = $param["PluginDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Removable",$param) and $param["Removable"] !== null) {
            $this->Removable = $param["Removable"];
        }

        if (array_key_exists("PluginType",$param) and $param["PluginType"] !== null) {
            $this->PluginType = $param["PluginType"];
        }

        if (array_key_exists("PluginUpdateTime",$param) and $param["PluginUpdateTime"] !== null) {
            $this->PluginUpdateTime = $param["PluginUpdateTime"];
        }
    }
}
