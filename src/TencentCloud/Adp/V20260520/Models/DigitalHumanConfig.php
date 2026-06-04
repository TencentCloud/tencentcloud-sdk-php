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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数智人配置
 *
 * @method string getAssetKey() 获取数智人形象资产id
 * @method void setAssetKey(string $AssetKey) 设置数智人形象资产id
 * @method string getAvatar() 获取数智人图片
 * @method void setAvatar(string $Avatar) 设置数智人图片
 * @method string getName() 获取数智人形象名称
 * @method void setName(string $Name) 设置数智人形象名称
 * @method string getPreviewUrl() 获取数智人预览地址
 * @method void setPreviewUrl(string $PreviewUrl) 设置数智人预览地址
 */
class DigitalHumanConfig extends AbstractModel
{
    /**
     * @var string 数智人形象资产id
     */
    public $AssetKey;

    /**
     * @var string 数智人图片
     */
    public $Avatar;

    /**
     * @var string 数智人形象名称
     */
    public $Name;

    /**
     * @var string 数智人预览地址
     */
    public $PreviewUrl;

    /**
     * @param string $AssetKey 数智人形象资产id
     * @param string $Avatar 数智人图片
     * @param string $Name 数智人形象名称
     * @param string $PreviewUrl 数智人预览地址
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
        if (array_key_exists("AssetKey",$param) and $param["AssetKey"] !== null) {
            $this->AssetKey = $param["AssetKey"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
