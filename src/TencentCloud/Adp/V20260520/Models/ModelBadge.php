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
 * <p>模型徽章（对外，用户端可见）：所有文案已渲染为最终展示内容，不暴露模板参数</p>
 *
 * @method string getText() 获取<p>展示文案（已渲染为最终文案）</p>
 * @method void setText(string $Text) 设置<p>展示文案（已渲染为最终文案）</p>
 * @method integer getTheme() 获取<p>样式主题</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>信息（蓝色）</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>成功（绿色）</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>警告（橙色）</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>危险（红色）</td></tr></table>
 * @method void setTheme(integer $Theme) 设置<p>样式主题</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>信息（蓝色）</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>成功（绿色）</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>警告（橙色）</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>危险（红色）</td></tr></table>
 * @method string getTips() 获取<p>tooltip 文案（已渲染为最终文案），为空则不展示</p>
 * @method void setTips(string $Tips) 设置<p>tooltip 文案（已渲染为最终文案），为空则不展示</p>
 * @method integer getType() 获取<p>徽章类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>限时免费</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>即将下线</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>新模型</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>热门</td></tr></table>
 * @method void setType(integer $Type) 设置<p>徽章类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>限时免费</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>即将下线</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>新模型</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>热门</td></tr></table>
 */
class ModelBadge extends AbstractModel
{
    /**
     * @var string <p>展示文案（已渲染为最终文案）</p>
     */
    public $Text;

    /**
     * @var integer <p>样式主题</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>信息（蓝色）</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>成功（绿色）</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>警告（橙色）</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>危险（红色）</td></tr></table>
     */
    public $Theme;

    /**
     * @var string <p>tooltip 文案（已渲染为最终文案），为空则不展示</p>
     */
    public $Tips;

    /**
     * @var integer <p>徽章类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>限时免费</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>即将下线</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>新模型</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>热门</td></tr></table>
     */
    public $Type;

    /**
     * @param string $Text <p>展示文案（已渲染为最终文案）</p>
     * @param integer $Theme <p>样式主题</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_THEME_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_THEME_INFO</td><td>1</td><td>信息（蓝色）</td></tr><tr><td>MODEL_BADGE_THEME_SUCCESS</td><td>2</td><td>成功（绿色）</td></tr><tr><td>MODEL_BADGE_THEME_WARNING</td><td>3</td><td>警告（橙色）</td></tr><tr><td>MODEL_BADGE_THEME_DANGER</td><td>4</td><td>危险（红色）</td></tr></table>
     * @param string $Tips <p>tooltip 文案（已渲染为最终文案），为空则不展示</p>
     * @param integer $Type <p>徽章类型</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>MODEL_BADGE_TYPE_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>MODEL_BADGE_TYPE_FREE_TRIAL</td><td>1</td><td>限时免费</td></tr><tr><td>MODEL_BADGE_TYPE_DEPRECATING</td><td>2</td><td>即将下线</td></tr><tr><td>MODEL_BADGE_TYPE_NEW</td><td>3</td><td>新模型</td></tr><tr><td>MODEL_BADGE_TYPE_HOT</td><td>4</td><td>热门</td></tr></table>
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
