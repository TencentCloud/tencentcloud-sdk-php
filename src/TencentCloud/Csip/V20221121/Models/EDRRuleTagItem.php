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
 * 安全中心标签
 *
 * @method integer getID() 获取<p>安全中心标签ID</p>
 * @method void setID(integer $ID) 设置<p>安全中心标签ID</p>
 * @method string getTagKey() 获取<p>标签中文Key</p>
 * @method void setTagKey(string $TagKey) 设置<p>标签中文Key</p>
 * @method string getTagKeyEn() 获取<p>标签英文key</p>
 * @method void setTagKeyEn(string $TagKeyEn) 设置<p>标签英文key</p>
 * @method string getTagValue() 获取<p>标签中文值</p>
 * @method void setTagValue(string $TagValue) 设置<p>标签中文值</p>
 * @method string getTagValueEn() 获取<p>标签英文值</p>
 * @method void setTagValueEn(string $TagValueEn) 设置<p>标签英文值</p>
 * @method string getDescription() 获取<p>标签描述</p>
 * @method void setDescription(string $Description) 设置<p>标签描述</p>
 * @method string getColor() 获取<p>标签颜色</p>
 * @method void setColor(string $Color) 设置<p>标签颜色</p>
 */
class EDRRuleTagItem extends AbstractModel
{
    /**
     * @var integer <p>安全中心标签ID</p>
     */
    public $ID;

    /**
     * @var string <p>标签中文Key</p>
     */
    public $TagKey;

    /**
     * @var string <p>标签英文key</p>
     */
    public $TagKeyEn;

    /**
     * @var string <p>标签中文值</p>
     */
    public $TagValue;

    /**
     * @var string <p>标签英文值</p>
     */
    public $TagValueEn;

    /**
     * @var string <p>标签描述</p>
     */
    public $Description;

    /**
     * @var string <p>标签颜色</p>
     */
    public $Color;

    /**
     * @param integer $ID <p>安全中心标签ID</p>
     * @param string $TagKey <p>标签中文Key</p>
     * @param string $TagKeyEn <p>标签英文key</p>
     * @param string $TagValue <p>标签中文值</p>
     * @param string $TagValueEn <p>标签英文值</p>
     * @param string $Description <p>标签描述</p>
     * @param string $Color <p>标签颜色</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagKeyEn",$param) and $param["TagKeyEn"] !== null) {
            $this->TagKeyEn = $param["TagKeyEn"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagValueEn",$param) and $param["TagValueEn"] !== null) {
            $this->TagValueEn = $param["TagValueEn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
