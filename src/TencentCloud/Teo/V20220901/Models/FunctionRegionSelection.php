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
 * @method string getFunctionId() 获取函数 ID 。
 * @method void setFunctionId(string $FunctionId) 设置函数 ID 。
 * @method array getRegions() 获取国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：[国家/地区及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 * @method void setRegions(array $Regions) 设置国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：[国家/地区及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
 */
class FunctionRegionSelection extends AbstractModel
{
    /**
     * @var string 函数 ID 。
     */
    public $FunctionId;

    /**
     * @var array 国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：[国家/地区及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
     */
    public $Regions;

    /**
     * @param string $FunctionId 函数 ID 。
     * @param array $Regions 国家/地区列表。示例值：CN：中国，CN.GD：中国广东。取值请参考：[国家/地区及对应代码枚举](https://cloud.tencent.com/document/product/1552/112542)。
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            $this->FunctionId = $param["FunctionId"];
        }

        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
    }
}
