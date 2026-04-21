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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourceUserGroupResource请求参数结构体
 *
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method integer getUserGroupId() 获取用户id
 * @method void setUserGroupId(integer $UserGroupId) 设置用户id
 * @method UserResourceDTO getResource() 获取资源
 * @method void setResource(UserResourceDTO $Resource) 设置资源
 * @method array getEntityIds() 获取实体类
 * @method void setEntityIds(array $EntityIds) 设置实体类
 * @method string getResourceType() 获取资源类型
 * @method void setResourceType(string $ResourceType) 设置资源类型
 */
class ModifyResourceUserGroupResourceRequest extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 用户id
     */
    public $UserGroupId;

    /**
     * @var UserResourceDTO 资源
     */
    public $Resource;

    /**
     * @var array 实体类
     */
    public $EntityIds;

    /**
     * @var string 资源类型
     */
    public $ResourceType;

    /**
     * @param integer $ProjectId 项目Id
     * @param integer $UserGroupId 用户id
     * @param UserResourceDTO $Resource 资源
     * @param array $EntityIds 实体类
     * @param string $ResourceType 资源类型
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new UserResourceDTO();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("EntityIds",$param) and $param["EntityIds"] !== null) {
            $this->EntityIds = $param["EntityIds"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
