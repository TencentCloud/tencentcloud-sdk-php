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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWorkSpace请求参数结构体
 *
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 * @method string getWorkSpaceName() 获取待修改的工作空间名称
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置待修改的工作空间名称
 * @method string getDescription() 获取待修改的工作空间备注
 * @method void setDescription(string $Description) 设置待修改的工作空间备注
 */
class ModifyWorkSpaceRequest extends AbstractModel
{
    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @var string 待修改的工作空间名称
     */
    public $WorkSpaceName;

    /**
     * @var string 待修改的工作空间备注
     */
    public $Description;

    /**
     * @param string $WorkSpaceId 工作空间 SerialId
     * @param string $WorkSpaceName 待修改的工作空间名称
     * @param string $Description 待修改的工作空间备注
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
        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
