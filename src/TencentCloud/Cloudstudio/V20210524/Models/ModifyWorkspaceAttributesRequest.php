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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWorkspaceAttributes请求参数结构体
 *
 * @method string getCloudStudioSessionTeam() 获取用户所属组
 * @method void setCloudStudioSessionTeam(string $CloudStudioSessionTeam) 设置用户所属组
 * @method integer getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间ID
 * @method string getName() 获取工作空间名称
 * @method void setName(string $Name) 设置工作空间名称
 * @method string getDescription() 获取工作空间描述
 * @method void setDescription(string $Description) 设置工作空间描述
 * @method integer getPriceId() 获取xxx
 * @method void setPriceId(integer $PriceId) 设置xxx
 */
class ModifyWorkspaceAttributesRequest extends AbstractModel
{
    /**
     * @var string 用户所属组
     */
    public $CloudStudioSessionTeam;

    /**
     * @var integer 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var string 工作空间名称
     */
    public $Name;

    /**
     * @var string 工作空间描述
     */
    public $Description;

    /**
     * @var integer xxx
     */
    public $PriceId;

    /**
     * @param string $CloudStudioSessionTeam 用户所属组
     * @param integer $WorkspaceId 工作空间ID
     * @param string $Name 工作空间名称
     * @param string $Description 工作空间描述
     * @param integer $PriceId xxx
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
        if (array_key_exists("CloudStudioSessionTeam",$param) and $param["CloudStudioSessionTeam"] !== null) {
            $this->CloudStudioSessionTeam = $param["CloudStudioSessionTeam"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PriceId",$param) and $param["PriceId"] !== null) {
            $this->PriceId = $param["PriceId"];
        }
    }
}
