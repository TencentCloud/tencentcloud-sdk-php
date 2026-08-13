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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地区策略配置。
 *
 * @method string getFunction() 获取<p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
 * @method void setFunction(string $Function) 设置<p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
 * @method array getRegions() 获取<p>国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：<a href="https://cloud.tencent.com/document/product/1552/112542">国家/地区及对应代码枚举</a>。</p>
 * @method void setRegions(array $Regions) 设置<p>国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：<a href="https://cloud.tencent.com/document/product/1552/112542">国家/地区及对应代码枚举</a>。</p>
 */
class ConfigGroupFunctionRegionSelection extends AbstractModel
{
    /**
     * @var string <p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
     */
    public $Function;

    /**
     * @var array <p>国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：<a href="https://cloud.tencent.com/document/product/1552/112542">国家/地区及对应代码枚举</a>。</p>
     */
    public $Regions;

    /**
     * @param string $Function <p>指定执行的函数，取值为函数在站点内的唯一标识。当 TriggerType 为 direct 时生效。</p>
     * @param array $Regions <p>国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：<a href="https://cloud.tencent.com/document/product/1552/112542">国家/地区及对应代码枚举</a>。</p>
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
        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
