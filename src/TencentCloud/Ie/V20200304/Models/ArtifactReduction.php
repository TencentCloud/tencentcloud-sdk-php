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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 去编码毛刺、伪影参数
 *
 * @method string getType() 获取去毛刺方式：weak,,strong
 * @method void setType(string $Type) 设置去毛刺方式：weak,,strong
 * @method string getAlgorithm() 获取去毛刺算法，可选项：
edaf,
wdaf，
默认edaf。
注意：此参数已经弃用
 * @method void setAlgorithm(string $Algorithm) 设置去毛刺算法，可选项：
edaf,
wdaf，
默认edaf。
注意：此参数已经弃用
 */
class ArtifactReduction extends AbstractModel
{
    /**
     * @var string 去毛刺方式：weak,,strong
     */
    public $Type;

    /**
     * @var string 去毛刺算法，可选项：
edaf,
wdaf，
默认edaf。
注意：此参数已经弃用
     */
    public $Algorithm;

    /**
     * @param string $Type 去毛刺方式：weak,,strong
     * @param string $Algorithm 去毛刺算法，可选项：
edaf,
wdaf，
默认edaf。
注意：此参数已经弃用
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

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }
    }
}
