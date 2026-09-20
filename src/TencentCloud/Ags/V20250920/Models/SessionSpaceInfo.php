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
 * 描述会话空间的完整信息。会话空间是用户状态、会话和事件的上级资源及隔离边界，同一个会话只能属于一个会话空间。
 *
 * @method string getSpaceId() 获取<p>会话空间唯一标识，由服务端生成，最大长度为 128 个字符。调用方不应自行构造或解析。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>会话空间唯一标识，由服务端生成，最大长度为 128 个字符。调用方不应自行构造或解析。</p>
 * @method string getName() 获取<p>会话空间名称，用于标识会话空间的业务用途，最大长度为 128 个字符。</p>
 * @method void setName(string $Name) 设置<p>会话空间名称，用于标识会话空间的业务用途，最大长度为 128 个字符。</p>
 * @method string getDescription() 获取<p>会话空间描述，用于说明业务用途和使用范围，最大长度为 512 个字符。为空时该字段可能不返回</p>
 * @method void setDescription(string $Description) 设置<p>会话空间描述，用于说明业务用途和使用范围，最大长度为 512 个字符。为空时该字段可能不返回</p>
 * @method string getStatus() 获取<p>会话空间当前状态。</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Deleting： 正在删除</li></ul>
 * @method void setStatus(string $Status) 设置<p>会话空间当前状态。</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Deleting： 正在删除</li></ul>
 * @method boolean getDefault() 获取<p>是否为系统默认会话空间。true 表示默认会话空间，false 表示普通会话空间。默认会话空间不允许删除。</p>
 * @method void setDefault(boolean $Default) 设置<p>是否为系统默认会话空间。true 表示默认会话空间，false 表示普通会话空间。默认会话空间不允许删除。</p>
 * @method string getCreateTime() 获取<p>会话空间创建时间，采用 ISO 8601/RFC 3339 格式。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>会话空间创建时间，采用 ISO 8601/RFC 3339 格式。</p>
 * @method string getUpdateTime() 获取<p>会话空间最后更新时间，采用 ISO 8601/RFC 3339 格式。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>会话空间最后更新时间，采用 ISO 8601/RFC 3339 格式。</p>
 */
class SessionSpaceInfo extends AbstractModel
{
    /**
     * @var string <p>会话空间唯一标识，由服务端生成，最大长度为 128 个字符。调用方不应自行构造或解析。</p>
     */
    public $SpaceId;

    /**
     * @var string <p>会话空间名称，用于标识会话空间的业务用途，最大长度为 128 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>会话空间描述，用于说明业务用途和使用范围，最大长度为 512 个字符。为空时该字段可能不返回</p>
     */
    public $Description;

    /**
     * @var string <p>会话空间当前状态。</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Deleting： 正在删除</li></ul>
     */
    public $Status;

    /**
     * @var boolean <p>是否为系统默认会话空间。true 表示默认会话空间，false 表示普通会话空间。默认会话空间不允许删除。</p>
     */
    public $Default;

    /**
     * @var string <p>会话空间创建时间，采用 ISO 8601/RFC 3339 格式。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>会话空间最后更新时间，采用 ISO 8601/RFC 3339 格式。</p>
     */
    public $UpdateTime;

    /**
     * @param string $SpaceId <p>会话空间唯一标识，由服务端生成，最大长度为 128 个字符。调用方不应自行构造或解析。</p>
     * @param string $Name <p>会话空间名称，用于标识会话空间的业务用途，最大长度为 128 个字符。</p>
     * @param string $Description <p>会话空间描述，用于说明业务用途和使用范围，最大长度为 512 个字符。为空时该字段可能不返回</p>
     * @param string $Status <p>会话空间当前状态。</p><p>枚举值：</p><ul><li>Active： 正常可用</li><li>Deleting： 正在删除</li></ul>
     * @param boolean $Default <p>是否为系统默认会话空间。true 表示默认会话空间，false 表示普通会话空间。默认会话空间不允许删除。</p>
     * @param string $CreateTime <p>会话空间创建时间，采用 ISO 8601/RFC 3339 格式。</p>
     * @param string $UpdateTime <p>会话空间最后更新时间，采用 ISO 8601/RFC 3339 格式。</p>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
