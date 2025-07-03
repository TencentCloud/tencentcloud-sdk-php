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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数智人配置
 *
 * @method string getAssetKey() 获取数智人资产key
 * @method void setAssetKey(string $AssetKey) 设置数智人资产key
 * @method string getName() 获取数智人名称
 * @method void setName(string $Name) 设置数智人名称
 * @method string getAvatar() 获取图像
 * @method void setAvatar(string $Avatar) 设置图像
 * @method string getPreviewUrl() 获取预览图
 * @method void setPreviewUrl(string $PreviewUrl) 设置预览图
 */
class DigitalHumanConfig extends AbstractModel
{
    /**
     * @var string 数智人资产key
     */
    public $AssetKey;

    /**
     * @var string 数智人名称
     */
    public $Name;

    /**
     * @var string 图像
     */
    public $Avatar;

    /**
     * @var string 预览图
     */
    public $PreviewUrl;

    /**
     * @param string $AssetKey 数智人资产key
     * @param string $Name 数智人名称
     * @param string $Avatar 图像
     * @param string $PreviewUrl 预览图
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
