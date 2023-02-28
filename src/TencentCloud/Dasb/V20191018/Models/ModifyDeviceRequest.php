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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDevice请求参数结构体
 *
 * @method integer getId() 获取资产记录ID
 * @method void setId(integer $Id) 设置资产记录ID
 * @method integer getPort() 获取管理端口
 * @method void setPort(integer $Port) 设置管理端口
 * @method array getGroupIdSet() 获取资产所属组ID集合
 * @method void setGroupIdSet(array $GroupIdSet) 设置资产所属组ID集合
 * @method string getDepartmentId() 获取资产所属部门ID
 * @method void setDepartmentId(string $DepartmentId) 设置资产所属部门ID
 */
class ModifyDeviceRequest extends AbstractModel
{
    /**
     * @var integer 资产记录ID
     */
    public $Id;

    /**
     * @var integer 管理端口
     */
    public $Port;

    /**
     * @var array 资产所属组ID集合
     */
    public $GroupIdSet;

    /**
     * @var string 资产所属部门ID
     */
    public $DepartmentId;

    /**
     * @param integer $Id 资产记录ID
     * @param integer $Port 管理端口
     * @param array $GroupIdSet 资产所属组ID集合
     * @param string $DepartmentId 资产所属部门ID
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

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("GroupIdSet",$param) and $param["GroupIdSet"] !== null) {
            $this->GroupIdSet = $param["GroupIdSet"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
