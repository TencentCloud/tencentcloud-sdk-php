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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 算法的名称 和 标识
 *
 * @method string getKeyUsage() 获取算法的标识
 * @method void setKeyUsage(string $KeyUsage) 设置算法的标识
 * @method string getAlgorithm() 获取算法的名称
 * @method void setAlgorithm(string $Algorithm) 设置算法的名称
 */
class AlgorithmInfo extends AbstractModel
{
    /**
     * @var string 算法的标识
     */
    public $KeyUsage;

    /**
     * @var string 算法的名称
     */
    public $Algorithm;

    /**
     * @param string $KeyUsage 算法的标识
     * @param string $Algorithm 算法的名称
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
        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }
    }
}
