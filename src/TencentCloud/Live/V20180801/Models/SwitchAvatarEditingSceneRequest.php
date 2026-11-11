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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchAvatarEditingScene请求参数结构体
 *
 * @method string getChannelId() 获取<p>通道ID，通常是待编辑的直播流的源ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>通道ID，通常是待编辑的直播流的源ID</p>
 * @method string getEditingType() 获取<p>支持的编辑类型</p><p>枚举值：</p><ul><li>style_transfer： 整体风格迁移</li><li>virtual_tryon： 虚拟试穿</li><li>subject_replacement： 主体替换</li><li>background_replacement： 背景替换</li></ul>
 * @method void setEditingType(string $EditingType) 设置<p>支持的编辑类型</p><p>枚举值：</p><ul><li>style_transfer： 整体风格迁移</li><li>virtual_tryon： 虚拟试穿</li><li>subject_replacement： 主体替换</li><li>background_replacement： 背景替换</li></ul>
 * @method string getImageUrl() 获取<p>各种编辑场景的参考图</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>各种编辑场景的参考图</p>
 */
class SwitchAvatarEditingSceneRequest extends AbstractModel
{
    /**
     * @var string <p>通道ID，通常是待编辑的直播流的源ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>支持的编辑类型</p><p>枚举值：</p><ul><li>style_transfer： 整体风格迁移</li><li>virtual_tryon： 虚拟试穿</li><li>subject_replacement： 主体替换</li><li>background_replacement： 背景替换</li></ul>
     */
    public $EditingType;

    /**
     * @var string <p>各种编辑场景的参考图</p>
     */
    public $ImageUrl;

    /**
     * @param string $ChannelId <p>通道ID，通常是待编辑的直播流的源ID</p>
     * @param string $EditingType <p>支持的编辑类型</p><p>枚举值：</p><ul><li>style_transfer： 整体风格迁移</li><li>virtual_tryon： 虚拟试穿</li><li>subject_replacement： 主体替换</li><li>background_replacement： 背景替换</li></ul>
     * @param string $ImageUrl <p>各种编辑场景的参考图</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("EditingType",$param) and $param["EditingType"] !== null) {
            $this->EditingType = $param["EditingType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }
    }
}
