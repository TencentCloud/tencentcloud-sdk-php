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
 * 简要的资产标签元素，CSIP 内部使用。
 *
 * @method string getColor() 获取标签展示颜色。
 * @method void setColor(string $Color) 设置标签展示颜色。
 * @method string getDescription() 获取标签描述。
 * @method void setDescription(string $Description) 设置标签描述。
 * @method integer getID() 获取标签 ID。
 * @method void setID(integer $ID) 设置标签 ID。
 * @method string getTagKey() 获取标签键（中文）。
 * @method void setTagKey(string $TagKey) 设置标签键（中文）。
 * @method string getTagValue() 获取标签值（中文）。
 * @method void setTagValue(string $TagValue) 设置标签值（中文）。
 * @method string getTagKeyEn() 获取标签键（英文）。
 * @method void setTagKeyEn(string $TagKeyEn) 设置标签键（英文）。
 * @method string getTagValueEn() 获取标签值（英文）。
 * @method void setTagValueEn(string $TagValueEn) 设置标签值（英文）。
 */
class MiniTagItem extends AbstractModel
{
    /**
     * @var string 标签展示颜色。
     */
    public $Color;

    /**
     * @var string 标签描述。
     */
    public $Description;

    /**
     * @var integer 标签 ID。
     */
    public $ID;

    /**
     * @var string 标签键（中文）。
     */
    public $TagKey;

    /**
     * @var string 标签值（中文）。
     */
    public $TagValue;

    /**
     * @var string 标签键（英文）。
     */
    public $TagKeyEn;

    /**
     * @var string 标签值（英文）。
     */
    public $TagValueEn;

    /**
     * @param string $Color 标签展示颜色。
     * @param string $Description 标签描述。
     * @param integer $ID 标签 ID。
     * @param string $TagKey 标签键（中文）。
     * @param string $TagValue 标签值（中文）。
     * @param string $TagKeyEn 标签键（英文）。
     * @param string $TagValueEn 标签值（英文）。
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagKeyEn",$param) and $param["TagKeyEn"] !== null) {
            $this->TagKeyEn = $param["TagKeyEn"];
        }

        if (array_key_exists("TagValueEn",$param) and $param["TagValueEn"] !== null) {
            $this->TagValueEn = $param["TagValueEn"];
        }
    }
}
