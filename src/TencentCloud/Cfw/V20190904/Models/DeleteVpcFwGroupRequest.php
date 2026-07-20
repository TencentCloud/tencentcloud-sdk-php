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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVpcFwGroup请求参数结构体
 *
 * @method string getFwGroupId() 获取<p>防火墙(组)Id</p>
 * @method void setFwGroupId(string $FwGroupId) 设置<p>防火墙(组)Id</p>
 * @method integer getDeleteFwGroup() 获取<p>是否删除整个防火墙(组)<br>0：不删除防火墙(组)，只删除单独实例<br>1：删除整个防火墙(组)</p>
 * @method void setDeleteFwGroup(integer $DeleteFwGroup) 设置<p>是否删除整个防火墙(组)<br>0：不删除防火墙(组)，只删除单独实例<br>1：删除整个防火墙(组)</p>
 * @method array getVpcFwInsList() 获取<p>待删除的防火墙实例数组</p>
 * @method void setVpcFwInsList(array $VpcFwInsList) 设置<p>待删除的防火墙实例数组</p>
 */
class DeleteVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string <p>防火墙(组)Id</p>
     */
    public $FwGroupId;

    /**
     * @var integer <p>是否删除整个防火墙(组)<br>0：不删除防火墙(组)，只删除单独实例<br>1：删除整个防火墙(组)</p>
     */
    public $DeleteFwGroup;

    /**
     * @var array <p>待删除的防火墙实例数组</p>
     */
    public $VpcFwInsList;

    /**
     * @param string $FwGroupId <p>防火墙(组)Id</p>
     * @param integer $DeleteFwGroup <p>是否删除整个防火墙(组)<br>0：不删除防火墙(组)，只删除单独实例<br>1：删除整个防火墙(组)</p>
     * @param array $VpcFwInsList <p>待删除的防火墙实例数组</p>
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
        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("DeleteFwGroup",$param) and $param["DeleteFwGroup"] !== null) {
            $this->DeleteFwGroup = $param["DeleteFwGroup"];
        }

        if (array_key_exists("VpcFwInsList",$param) and $param["VpcFwInsList"] !== null) {
            $this->VpcFwInsList = $param["VpcFwInsList"];
        }
    }
}
