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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间绑定的资源组信息
 *
 * @method string getResourceGroupId() 获取<p>资源组ID</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组ID</p>
 * @method string getResourceGroupName() 获取<p>资源组名称</p>
 * @method void setResourceGroupName(string $ResourceGroupName) 设置<p>资源组名称</p>
 * @method string getRegion() 获取<p>地域</p>
 * @method void setRegion(string $Region) 设置<p>地域</p>
 * @method boolean getOccupied() 获取<p>是否有运行中的任务/服务占用</p>
 * @method void setOccupied(boolean $Occupied) 设置<p>是否有运行中的任务/服务占用</p>
 */
class ResourceGroupInWorkspace extends AbstractModel
{
    /**
     * @var string <p>资源组ID</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>资源组名称</p>
     */
    public $ResourceGroupName;

    /**
     * @var string <p>地域</p>
     */
    public $Region;

    /**
     * @var boolean <p>是否有运行中的任务/服务占用</p>
     */
    public $Occupied;

    /**
     * @param string $ResourceGroupId <p>资源组ID</p>
     * @param string $ResourceGroupName <p>资源组名称</p>
     * @param string $Region <p>地域</p>
     * @param boolean $Occupied <p>是否有运行中的任务/服务占用</p>
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Occupied",$param) and $param["Occupied"] !== null) {
            $this->Occupied = $param["Occupied"];
        }
    }
}
