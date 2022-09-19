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
 * 工作空间基本信息描述
 *
 * @method string getCreateDate() 获取工作空间创建时间
 * @method void setCreateDate(string $CreateDate) 设置工作空间创建时间
 * @method string getSpaceKey() 获取空间key
 * @method void setSpaceKey(string $SpaceKey) 设置空间key
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 */
class WorkspaceInfoDTO extends AbstractModel
{
    /**
     * @var string 工作空间创建时间
     */
    public $CreateDate;

    /**
     * @var string 空间key
     */
    public $SpaceKey;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @param string $CreateDate 工作空间创建时间
     * @param string $SpaceKey 空间key
     * @param integer $WorkspaceId 工作空间id
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
        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }
    }
}
