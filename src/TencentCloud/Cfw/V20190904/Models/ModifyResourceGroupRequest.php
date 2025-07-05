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
 * ModifyResourceGroup请求参数结构体
 *
 * @method string getGroupId() 获取资产组id
 * @method void setGroupId(string $GroupId) 设置资产组id
 * @method string getGroupName() 获取组名称
 * @method void setGroupName(string $GroupName) 设置组名称
 * @method string getParentId() 获取上级组资产组id
 * @method void setParentId(string $ParentId) 设置上级组资产组id
 */
class ModifyResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 资产组id
     */
    public $GroupId;

    /**
     * @var string 组名称
     */
    public $GroupName;

    /**
     * @var string 上级组资产组id
     */
    public $ParentId;

    /**
     * @param string $GroupId 资产组id
     * @param string $GroupName 组名称
     * @param string $ParentId 上级组资产组id
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
