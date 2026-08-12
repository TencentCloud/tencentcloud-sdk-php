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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号积分
 *
 * @method float getPoint() 获取<p>积分分值</p>
 * @method void setPoint(float $Point) 设置<p>积分分值</p>
 * @method string getPointType() 获取<p>积分类型</p>
 * @method void setPointType(string $PointType) 设置<p>积分类型</p>
 */
class CreditPoint extends AbstractModel
{
    /**
     * @var float <p>积分分值</p>
     */
    public $Point;

    /**
     * @var string <p>积分类型</p>
     */
    public $PointType;

    /**
     * @param float $Point <p>积分分值</p>
     * @param string $PointType <p>积分类型</p>
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
        if (array_key_exists("Point",$param) and $param["Point"] !== null) {
            $this->Point = $param["Point"];
        }

        if (array_key_exists("PointType",$param) and $param["PointType"] !== null) {
            $this->PointType = $param["PointType"];
        }
    }
}
