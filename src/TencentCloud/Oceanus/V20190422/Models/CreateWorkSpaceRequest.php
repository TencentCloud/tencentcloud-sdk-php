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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkSpace请求参数结构体
 *
 * @method string getWorkSpaceName() 获取工作空间名称
 * @method void setWorkSpaceName(string $WorkSpaceName) 设置工作空间名称
 * @method string getDescription() 获取项目空间备注
 * @method void setDescription(string $Description) 设置项目空间备注
 */
class CreateWorkSpaceRequest extends AbstractModel
{
    /**
     * @var string 工作空间名称
     */
    public $WorkSpaceName;

    /**
     * @var string 项目空间备注
     */
    public $Description;

    /**
     * @param string $WorkSpaceName 工作空间名称
     * @param string $Description 项目空间备注
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
        if (array_key_exists("WorkSpaceName",$param) and $param["WorkSpaceName"] !== null) {
            $this->WorkSpaceName = $param["WorkSpaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
