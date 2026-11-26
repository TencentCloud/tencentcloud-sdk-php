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
 * 内容过滤配置（图片名称正则/最小宽高），缺省时不启用过滤
 *
 * @method integer getImageMinHeight() 获取图片最小高度（像素），小于则过滤；<=0 表示不启用
 * @method void setImageMinHeight(integer $ImageMinHeight) 设置图片最小高度（像素），小于则过滤；<=0 表示不启用
 * @method integer getImageMinWidth() 获取图片最小宽度（像素），小于则过滤；<=0 表示不启用
 * @method void setImageMinWidth(integer $ImageMinWidth) 设置图片最小宽度（像素），小于则过滤；<=0 表示不启用
 * @method string getImageNamePatterns() 获取图片名称过滤规则（用分号 ';' 分隔的多条正则，如 'icon;notice;warning;info.*'）
 * @method void setImageNamePatterns(string $ImageNamePatterns) 设置图片名称过滤规则（用分号 ';' 分隔的多条正则，如 'icon;notice;warning;info.*'）
 */
class ContentFilter extends AbstractModel
{
    /**
     * @var integer 图片最小高度（像素），小于则过滤；<=0 表示不启用
     */
    public $ImageMinHeight;

    /**
     * @var integer 图片最小宽度（像素），小于则过滤；<=0 表示不启用
     */
    public $ImageMinWidth;

    /**
     * @var string 图片名称过滤规则（用分号 ';' 分隔的多条正则，如 'icon;notice;warning;info.*'）
     */
    public $ImageNamePatterns;

    /**
     * @param integer $ImageMinHeight 图片最小高度（像素），小于则过滤；<=0 表示不启用
     * @param integer $ImageMinWidth 图片最小宽度（像素），小于则过滤；<=0 表示不启用
     * @param string $ImageNamePatterns 图片名称过滤规则（用分号 ';' 分隔的多条正则，如 'icon;notice;warning;info.*'）
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
        if (array_key_exists("ImageMinHeight",$param) and $param["ImageMinHeight"] !== null) {
            $this->ImageMinHeight = $param["ImageMinHeight"];
        }

        if (array_key_exists("ImageMinWidth",$param) and $param["ImageMinWidth"] !== null) {
            $this->ImageMinWidth = $param["ImageMinWidth"];
        }

        if (array_key_exists("ImageNamePatterns",$param) and $param["ImageNamePatterns"] !== null) {
            $this->ImageNamePatterns = $param["ImageNamePatterns"];
        }
    }
}
