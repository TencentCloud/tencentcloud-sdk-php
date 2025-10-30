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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateGroup请求参数结构体
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getDescription() 获取分组备注
 * @method void setDescription(string $Description) 设置分组备注
 */
class UpdateGroupRequest extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组备注
     */
    public $Description;

    /**
     * @param string $GroupId 分组ID
     * @param string $Description 分组备注
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
