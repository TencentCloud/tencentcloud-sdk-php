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
 * 模型徽章
 *
 * @method string getText() 获取展示文案
 * @method void setText(string $Text) 设置展示文案
 * @method integer getTheme() 获取样式主题。1-信息（蓝色）, 2-成功（绿色）, 3-警告（橙色）, 4-危险（红色）
 * @method void setTheme(integer $Theme) 设置样式主题。1-信息（蓝色）, 2-成功（绿色）, 3-警告（橙色）, 4-危险（红色）
 * @method string getTips() 获取tooltip文案，为空则不展示
 * @method void setTips(string $Tips) 设置tooltip文案，为空则不展示
 * @method integer getType() 获取徽章类型。1-限时免费, 2-即将下线, 3-新模型, 4-热门
 * @method void setType(integer $Type) 设置徽章类型。1-限时免费, 2-即将下线, 3-新模型, 4-热门
 */
class ModelBadge extends AbstractModel
{
    /**
     * @var string 展示文案
     */
    public $Text;

    /**
     * @var integer 样式主题。1-信息（蓝色）, 2-成功（绿色）, 3-警告（橙色）, 4-危险（红色）
     */
    public $Theme;

    /**
     * @var string tooltip文案，为空则不展示
     */
    public $Tips;

    /**
     * @var integer 徽章类型。1-限时免费, 2-即将下线, 3-新模型, 4-热门
     */
    public $Type;

    /**
     * @param string $Text 展示文案
     * @param integer $Theme 样式主题。1-信息（蓝色）, 2-成功（绿色）, 3-警告（橙色）, 4-危险（红色）
     * @param string $Tips tooltip文案，为空则不展示
     * @param integer $Type 徽章类型。1-限时免费, 2-即将下线, 3-新模型, 4-热门
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Theme",$param) and $param["Theme"] !== null) {
            $this->Theme = $param["Theme"];
        }

        if (array_key_exists("Tips",$param) and $param["Tips"] !== null) {
            $this->Tips = $param["Tips"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
