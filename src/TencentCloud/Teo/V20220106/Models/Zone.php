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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点信息
 *
 * @method string getId() 获取站点ID
 * @method void setId(string $Id) 设置站点ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method array getOriginalNameServers() 获取站点当前使用的 NS 列表
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置站点当前使用的 NS 列表
 * @method array getNameServers() 获取腾讯云分配的 NS 列表
 * @method void setNameServers(array $NameServers) 设置腾讯云分配的 NS 列表
 * @method string getStatus() 获取站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
 * @method void setStatus(string $Status) 设置站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
 * @method string getType() 获取站点接入方式
- full：NS 接入
- partial：CNAME 接入
 * @method void setType(string $Type) 设置站点接入方式
- full：NS 接入
- partial：CNAME 接入
 * @method boolean getPaused() 获取站点是否关闭
 * @method void setPaused(boolean $Paused) 设置站点是否关闭
 * @method string getCreatedOn() 获取站点创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置站点创建时间
 * @method string getModifiedOn() 获取站点修改时间
 * @method void setModifiedOn(string $ModifiedOn) 设置站点修改时间
 */
class Zone extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $Id;

    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var array 站点当前使用的 NS 列表
     */
    public $OriginalNameServers;

    /**
     * @var array 腾讯云分配的 NS 列表
     */
    public $NameServers;

    /**
     * @var string 站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
     */
    public $Status;

    /**
     * @var string 站点接入方式
- full：NS 接入
- partial：CNAME 接入
     */
    public $Type;

    /**
     * @var boolean 站点是否关闭
     */
    public $Paused;

    /**
     * @var string 站点创建时间
     */
    public $CreatedOn;

    /**
     * @var string 站点修改时间
     */
    public $ModifiedOn;

    /**
     * @param string $Id 站点ID
     * @param string $Name 站点名称
     * @param array $OriginalNameServers 站点当前使用的 NS 列表
     * @param array $NameServers 腾讯云分配的 NS 列表
     * @param string $Status 站点状态
- active：NS 已切换
- pending：NS 未切换
- moved：NS 已切走
- deactivated：被封禁
     * @param string $Type 站点接入方式
- full：NS 接入
- partial：CNAME 接入
     * @param boolean $Paused 站点是否关闭
     * @param string $CreatedOn 站点创建时间
     * @param string $ModifiedOn 站点修改时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }
    }
}
