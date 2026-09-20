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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySessionSpace请求参数结构体
 *
 * @method string getSpaceId() 获取<p>需要修改的会话空间唯一标识。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>需要修改的会话空间唯一标识。</p>
 * @method string getName() 获取<p>修改后的会话空间名称。</p>
 * @method void setName(string $Name) 设置<p>修改后的会话空间名称。</p>
 * @method string getDescription() 获取<p>修改后的会话空间描述。</p>
 * @method void setDescription(string $Description) 设置<p>修改后的会话空间描述。</p>
 */
class ModifySessionSpaceRequest extends AbstractModel
{
    /**
     * @var string <p>需要修改的会话空间唯一标识。</p>
     */
    public $SpaceId;

    /**
     * @var string <p>修改后的会话空间名称。</p>
     */
    public $Name;

    /**
     * @var string <p>修改后的会话空间描述。</p>
     */
    public $Description;

    /**
     * @param string $SpaceId <p>需要修改的会话空间唯一标识。</p>
     * @param string $Name <p>修改后的会话空间名称。</p>
     * @param string $Description <p>修改后的会话空间描述。</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
