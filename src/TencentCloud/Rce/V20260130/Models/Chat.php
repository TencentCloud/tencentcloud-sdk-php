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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聊天信息
 *
 * @method string getChatText() 获取<p>聊天文本内容，不含HTML、不含昵称，限2000字符</p>
 * @method void setChatText(string $ChatText) 设置<p>聊天文本内容，不含HTML、不含昵称，限2000字符</p>
 * @method string getChannelType() 获取<p>频道类型，枚举值：world-世界 / guild-公会 / single-单聊 / other-其他</p>
 * @method void setChannelType(string $ChannelType) 设置<p>频道类型，枚举值：world-世界 / guild-公会 / single-单聊 / other-其他</p>
 * @method string getGroupId() 获取<p>群/频道唯一ID（单聊时为空）</p>
 * @method void setGroupId(string $GroupId) 设置<p>群/频道唯一ID（单聊时为空）</p>
 * @method string getGroupName() 获取<p>群/频道名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>群/频道名称</p>
 * @method string getGroupAdministrator() 获取<p>群主/管理员ID</p>
 * @method void setGroupAdministrator(string $GroupAdministrator) 设置<p>群主/管理员ID</p>
 */
class Chat extends AbstractModel
{
    /**
     * @var string <p>聊天文本内容，不含HTML、不含昵称，限2000字符</p>
     */
    public $ChatText;

    /**
     * @var string <p>频道类型，枚举值：world-世界 / guild-公会 / single-单聊 / other-其他</p>
     */
    public $ChannelType;

    /**
     * @var string <p>群/频道唯一ID（单聊时为空）</p>
     */
    public $GroupId;

    /**
     * @var string <p>群/频道名称</p>
     */
    public $GroupName;

    /**
     * @var string <p>群主/管理员ID</p>
     */
    public $GroupAdministrator;

    /**
     * @param string $ChatText <p>聊天文本内容，不含HTML、不含昵称，限2000字符</p>
     * @param string $ChannelType <p>频道类型，枚举值：world-世界 / guild-公会 / single-单聊 / other-其他</p>
     * @param string $GroupId <p>群/频道唯一ID（单聊时为空）</p>
     * @param string $GroupName <p>群/频道名称</p>
     * @param string $GroupAdministrator <p>群主/管理员ID</p>
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
        if (array_key_exists("ChatText",$param) and $param["ChatText"] !== null) {
            $this->ChatText = $param["ChatText"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupAdministrator",$param) and $param["GroupAdministrator"] !== null) {
            $this->GroupAdministrator = $param["GroupAdministrator"];
        }
    }
}
