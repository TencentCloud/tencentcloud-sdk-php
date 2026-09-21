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
 * 美颜配置
 *
 * @method array getBeautyEffectItems() 获取<p>美颜效果</p>
 * @method void setBeautyEffectItems(array $BeautyEffectItems) 设置<p>美颜效果</p>
 * @method array getBeautyFilterItems() 获取<p>美颜滤镜</p>
 * @method void setBeautyFilterItems(array $BeautyFilterItems) 设置<p>美颜滤镜</p>
 * @method string getType() 获取<p>美颜类型</p><p>枚举值：</p><ul><li>auto： 智能自动美颜</li></ul><p>传入美颜参数时，忽略该参数。</p>
 * @method void setType(string $Type) 设置<p>美颜类型</p><p>枚举值：</p><ul><li>auto： 智能自动美颜</li></ul><p>传入美颜参数时，忽略该参数。</p>
 */
class BeautyConfig extends AbstractModel
{
    /**
     * @var array <p>美颜效果</p>
     */
    public $BeautyEffectItems;

    /**
     * @var array <p>美颜滤镜</p>
     */
    public $BeautyFilterItems;

    /**
     * @var string <p>美颜类型</p><p>枚举值：</p><ul><li>auto： 智能自动美颜</li></ul><p>传入美颜参数时，忽略该参数。</p>
     */
    public $Type;

    /**
     * @param array $BeautyEffectItems <p>美颜效果</p>
     * @param array $BeautyFilterItems <p>美颜滤镜</p>
     * @param string $Type <p>美颜类型</p><p>枚举值：</p><ul><li>auto： 智能自动美颜</li></ul><p>传入美颜参数时，忽略该参数。</p>
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
        if (array_key_exists("BeautyEffectItems",$param) and $param["BeautyEffectItems"] !== null) {
            $this->BeautyEffectItems = [];
            foreach ($param["BeautyEffectItems"] as $key => $value){
                $obj = new BeautyEffectItemConfig();
                $obj->deserialize($value);
                array_push($this->BeautyEffectItems, $obj);
            }
        }

        if (array_key_exists("BeautyFilterItems",$param) and $param["BeautyFilterItems"] !== null) {
            $this->BeautyFilterItems = [];
            foreach ($param["BeautyFilterItems"] as $key => $value){
                $obj = new BeautyFilterItemConfig();
                $obj->deserialize($value);
                array_push($this->BeautyFilterItems, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
