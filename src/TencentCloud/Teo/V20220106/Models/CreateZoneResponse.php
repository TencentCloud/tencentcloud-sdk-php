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
 * CreateZone返回参数结构体
 *
 * @method string getId() 获取站点ID
 * @method void setId(string $Id) 设置站点ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method string getType() 获取站点接入方式
 * @method void setType(string $Type) 设置站点接入方式
 * @method string getStatus() 获取站点状态
- pending 未切换NS
- active NS 已切换到分配的 NS
- moved NS 从腾讯云切走
 * @method void setStatus(string $Status) 设置站点状态
- pending 未切换NS
- active NS 已切换到分配的 NS
- moved NS 从腾讯云切走
 * @method array getOriginalNameServers() 获取当前使用的 NS 列表
 * @method void setOriginalNameServers(array $OriginalNameServers) 设置当前使用的 NS 列表
 * @method array getNameServers() 获取给用户分配的 NS 列表
 * @method void setNameServers(array $NameServers) 设置给用户分配的 NS 列表
 * @method string getCreatedOn() 获取站点创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置站点创建时间
 * @method string getModifiedOn() 获取站点更新时间
 * @method void setModifiedOn(string $ModifiedOn) 设置站点更新时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateZoneResponse extends AbstractModel
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
     * @var string 站点接入方式
     */
    public $Type;

    /**
     * @var string 站点状态
- pending 未切换NS
- active NS 已切换到分配的 NS
- moved NS 从腾讯云切走
     */
    public $Status;

    /**
     * @var array 当前使用的 NS 列表
     */
    public $OriginalNameServers;

    /**
     * @var array 给用户分配的 NS 列表
     */
    public $NameServers;

    /**
     * @var string 站点创建时间
     */
    public $CreatedOn;

    /**
     * @var string 站点更新时间
     */
    public $ModifiedOn;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id 站点ID
     * @param string $Name 站点名称
     * @param string $Type 站点接入方式
     * @param string $Status 站点状态
- pending 未切换NS
- active NS 已切换到分配的 NS
- moved NS 从腾讯云切走
     * @param array $OriginalNameServers 当前使用的 NS 列表
     * @param array $NameServers 给用户分配的 NS 列表
     * @param string $CreatedOn 站点创建时间
     * @param string $ModifiedOn 站点更新时间
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OriginalNameServers",$param) and $param["OriginalNameServers"] !== null) {
            $this->OriginalNameServers = $param["OriginalNameServers"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("ModifiedOn",$param) and $param["ModifiedOn"] !== null) {
            $this->ModifiedOn = $param["ModifiedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
