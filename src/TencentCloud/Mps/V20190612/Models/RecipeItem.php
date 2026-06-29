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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套图图片信息
 *
 * @method string getTheme() 获取<p>子图类型</p><p>枚举值：</p><ul><li>hero： 商品主图</li><li>detail： 商品细节图</li><li>selling： 核心卖点图</li><li>atmosphere： 场景氛围图</li><li>angles： 多角度图</li><li>scene： 使用场景图</li></ul>
 * @method void setTheme(string $Theme) 设置<p>子图类型</p><p>枚举值：</p><ul><li>hero： 商品主图</li><li>detail： 商品细节图</li><li>selling： 核心卖点图</li><li>atmosphere： 场景氛围图</li><li>angles： 多角度图</li><li>scene： 使用场景图</li></ul>
 * @method integer getNum() 获取<p>对应子图数量。</p><p>取值范围：[1, 4]</p><p>单位：张</p><p>单种子图最多4张，子图总数必须在4-12张范围内。</p>
 * @method void setNum(integer $Num) 设置<p>对应子图数量。</p><p>取值范围：[1, 4]</p><p>单位：张</p><p>单种子图最多4张，子图总数必须在4-12张范围内。</p>
 */
class RecipeItem extends AbstractModel
{
    /**
     * @var string <p>子图类型</p><p>枚举值：</p><ul><li>hero： 商品主图</li><li>detail： 商品细节图</li><li>selling： 核心卖点图</li><li>atmosphere： 场景氛围图</li><li>angles： 多角度图</li><li>scene： 使用场景图</li></ul>
     */
    public $Theme;

    /**
     * @var integer <p>对应子图数量。</p><p>取值范围：[1, 4]</p><p>单位：张</p><p>单种子图最多4张，子图总数必须在4-12张范围内。</p>
     */
    public $Num;

    /**
     * @param string $Theme <p>子图类型</p><p>枚举值：</p><ul><li>hero： 商品主图</li><li>detail： 商品细节图</li><li>selling： 核心卖点图</li><li>atmosphere： 场景氛围图</li><li>angles： 多角度图</li><li>scene： 使用场景图</li></ul>
     * @param integer $Num <p>对应子图数量。</p><p>取值范围：[1, 4]</p><p>单位：张</p><p>单种子图最多4张，子图总数必须在4-12张范围内。</p>
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
        if (array_key_exists("Theme",$param) and $param["Theme"] !== null) {
            $this->Theme = $param["Theme"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
