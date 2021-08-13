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
 * ModifyResourceGroup请求参数结构体
 *
 * @method string getGroupId() 获取组id
 * @method void setGroupId(string $GroupId) 设置组id
 * @method string getGroupName() 获取组名称
 * @method void setGroupName(string $GroupName) 设置组名称
 * @method string getParentId() 获取上级组id
 * @method void setParentId(string $ParentId) 设置上级组id
 */
class ModifyResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 组id
     */
    public $GroupId;

    /**
     * @var string 组名称
     */
    public $GroupName;

    /**
     * @var string 上级组id
     */
    public $ParentId;

    /**
     * @param string $GroupId 组id
     * @param string $GroupName 组名称
     * @param string $ParentId 上级组id
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
