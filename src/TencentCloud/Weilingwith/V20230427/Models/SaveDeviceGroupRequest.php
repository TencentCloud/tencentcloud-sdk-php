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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SaveDeviceGroup请求参数结构体
 *
 * @method string getName() 获取分组名称
 * @method void setName(string $Name) 设置分组名称
 * @method string getDescription() 获取分组描述
 * @method void setDescription(string $Description) 设置分组描述
 * @method integer getWorkspaceId() 获取空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getId() 获取分组id, 携带则为修改, 不携带则为新增
 * @method void setId(integer $Id) 设置分组id, 携带则为修改, 不携带则为新增
 * @method integer getParentId() 获取分组父级id
 * @method void setParentId(integer $ParentId) 设置分组父级id
 */
class SaveDeviceGroupRequest extends AbstractModel
{
    /**
     * @var string 分组名称
     */
    public $Name;

    /**
     * @var string 分组描述
     */
    public $Description;

    /**
     * @var integer 空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 分组id, 携带则为修改, 不携带则为新增
     */
    public $Id;

    /**
     * @var integer 分组父级id
     */
    public $ParentId;

    /**
     * @param string $Name 分组名称
     * @param string $Description 分组描述
     * @param integer $WorkspaceId 空间id
     * @param string $ApplicationToken 应用token
     * @param integer $Id 分组id, 携带则为修改, 不携带则为新增
     * @param integer $ParentId 分组父级id
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
