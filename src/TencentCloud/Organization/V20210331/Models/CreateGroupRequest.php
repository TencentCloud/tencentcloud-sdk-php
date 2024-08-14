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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateGroup请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getGroupName() 获取用户组的名称。  格式：允许英文字母、数字和特殊字符-。 长度：最大 128 个字符。
 * @method void setGroupName(string $GroupName) 设置用户组的名称。  格式：允许英文字母、数字和特殊字符-。 长度：最大 128 个字符。
 * @method string getDescription() 获取用户组的描述。  长度：最大 1024 个字符。
 * @method void setDescription(string $Description) 设置用户组的描述。  长度：最大 1024 个字符。
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户组的名称。  格式：允许英文字母、数字和特殊字符-。 长度：最大 128 个字符。
     */
    public $GroupName;

    /**
     * @var string 用户组的描述。  长度：最大 1024 个字符。
     */
    public $Description;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $GroupName 用户组的名称。  格式：允许英文字母、数字和特殊字符-。 长度：最大 128 个字符。
     * @param string $Description 用户组的描述。  长度：最大 1024 个字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
