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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVpcFwGroup请求参数结构体
 *
 * @method string getFwGroupId() 获取防火墙(组)Id
 * @method void setFwGroupId(string $FwGroupId) 设置防火墙(组)Id
 * @method integer getDeleteFwGroup() 获取是否删除整个防火墙(组)
0：不删除防火墙(组)，只删除单独实例
1：删除整个防火墙(组)
 * @method void setDeleteFwGroup(integer $DeleteFwGroup) 设置是否删除整个防火墙(组)
0：不删除防火墙(组)，只删除单独实例
1：删除整个防火墙(组)
 * @method array getVpcFwInsList() 获取待删除的防火墙实例数组
 * @method void setVpcFwInsList(array $VpcFwInsList) 设置待删除的防火墙实例数组
 */
class DeleteVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string 防火墙(组)Id
     */
    public $FwGroupId;

    /**
     * @var integer 是否删除整个防火墙(组)
0：不删除防火墙(组)，只删除单独实例
1：删除整个防火墙(组)
     */
    public $DeleteFwGroup;

    /**
     * @var array 待删除的防火墙实例数组
     */
    public $VpcFwInsList;

    /**
     * @param string $FwGroupId 防火墙(组)Id
     * @param integer $DeleteFwGroup 是否删除整个防火墙(组)
0：不删除防火墙(组)，只删除单独实例
1：删除整个防火墙(组)
     * @param array $VpcFwInsList 待删除的防火墙实例数组
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
