<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片模糊处理。
 *
 * @method string getType() 获取图片模糊的操作类型。可选模式有：
<li>Gaussian : 高斯模糊。</li>
 * @method void setType(string $Type) 设置图片模糊的操作类型。可选模式有：
<li>Gaussian : 高斯模糊。</li>
 * @method integer getRadius() 获取模糊半径，取值范围为1 - 50。当 Type 取值为 Gaussian 时此字段有效。
 * @method void setRadius(integer $Radius) 设置模糊半径，取值范围为1 - 50。当 Type 取值为 Gaussian 时此字段有效。
 * @method integer getSigma() 获取正态分布的标准差，必须大于0。当 Type 取值为 Gaussian 时此字段有效。
 * @method void setSigma(integer $Sigma) 设置正态分布的标准差，必须大于0。当 Type 取值为 Gaussian 时此字段有效。
 */
class ImageBlur extends AbstractModel
{
    /**
     * @var string 图片模糊的操作类型。可选模式有：
<li>Gaussian : 高斯模糊。</li>
     */
    public $Type;

    /**
     * @var integer 模糊半径，取值范围为1 - 50。当 Type 取值为 Gaussian 时此字段有效。
     */
    public $Radius;

    /**
     * @var integer 正态分布的标准差，必须大于0。当 Type 取值为 Gaussian 时此字段有效。
     */
    public $Sigma;

    /**
     * @param string $Type 图片模糊的操作类型。可选模式有：
<li>Gaussian : 高斯模糊。</li>
     * @param integer $Radius 模糊半径，取值范围为1 - 50。当 Type 取值为 Gaussian 时此字段有效。
     * @param integer $Sigma 正态分布的标准差，必须大于0。当 Type 取值为 Gaussian 时此字段有效。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Radius",$param) and $param["Radius"] !== null) {
            $this->Radius = $param["Radius"];
        }

        if (array_key_exists("Sigma",$param) and $param["Sigma"] !== null) {
            $this->Sigma = $param["Sigma"];
        }
    }
}
