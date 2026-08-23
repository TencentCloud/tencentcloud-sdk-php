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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像扫描镜像匹配配置
 *
 * @method string getMode() 获取<p>目标镜像匹配模式</p><p>枚举值：</p><ul><li>ALL： 全部镜像</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
 * @method void setMode(string $Mode) 设置<p>目标镜像匹配模式</p><p>枚举值：</p><ul><li>ALL： 全部镜像</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
 * @method array getExcludeImages() 获取<p>全部镜像模式下扫描排除的镜像id</p>
 * @method void setExcludeImages(array $ExcludeImages) 设置<p>全部镜像模式下扫描排除的镜像id</p>
 * @method array getImages() 获取<p>手动选择模式下需要扫描的镜像id</p>
 * @method void setImages(array $Images) 设置<p>手动选择模式下需要扫描的镜像id</p>
 * @method ImageScanAutoMatchConfig getAutoMatch() 获取<p>自动匹配模式下匹配配置</p>
 * @method void setAutoMatch(ImageScanAutoMatchConfig $AutoMatch) 设置<p>自动匹配模式下匹配配置</p>
 */
class ImageScanAssetTarget extends AbstractModel
{
    /**
     * @var string <p>目标镜像匹配模式</p><p>枚举值：</p><ul><li>ALL： 全部镜像</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
     */
    public $Mode;

    /**
     * @var array <p>全部镜像模式下扫描排除的镜像id</p>
     */
    public $ExcludeImages;

    /**
     * @var array <p>手动选择模式下需要扫描的镜像id</p>
     */
    public $Images;

    /**
     * @var ImageScanAutoMatchConfig <p>自动匹配模式下匹配配置</p>
     */
    public $AutoMatch;

    /**
     * @param string $Mode <p>目标镜像匹配模式</p><p>枚举值：</p><ul><li>ALL： 全部镜像</li><li>MANUAL： 手动选择</li><li>AUTO_MATCH： 自动匹配</li></ul>
     * @param array $ExcludeImages <p>全部镜像模式下扫描排除的镜像id</p>
     * @param array $Images <p>手动选择模式下需要扫描的镜像id</p>
     * @param ImageScanAutoMatchConfig $AutoMatch <p>自动匹配模式下匹配配置</p>
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ExcludeImages",$param) and $param["ExcludeImages"] !== null) {
            $this->ExcludeImages = $param["ExcludeImages"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("AutoMatch",$param) and $param["AutoMatch"] !== null) {
            $this->AutoMatch = new ImageScanAutoMatchConfig();
            $this->AutoMatch->deserialize($param["AutoMatch"]);
        }
    }
}
