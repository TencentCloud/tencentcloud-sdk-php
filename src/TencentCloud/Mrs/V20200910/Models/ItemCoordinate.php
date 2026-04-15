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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验指标内容坐标
 *
 * @method Coordinate getName() 获取<p>指标项名称坐标</p>
 * @method void setName(Coordinate $Name) 设置<p>指标项名称坐标</p>
 * @method Coordinate getResult() 获取<p>指标结果称坐标</p>
 * @method void setResult(Coordinate $Result) 设置<p>指标结果称坐标</p>
 * @method Coordinate getRange() 获取<p>指标项范围坐标</p>
 * @method void setRange(Coordinate $Range) 设置<p>指标项范围坐标</p>
 */
class ItemCoordinate extends AbstractModel
{
    /**
     * @var Coordinate <p>指标项名称坐标</p>
     */
    public $Name;

    /**
     * @var Coordinate <p>指标结果称坐标</p>
     */
    public $Result;

    /**
     * @var Coordinate <p>指标项范围坐标</p>
     */
    public $Range;

    /**
     * @param Coordinate $Name <p>指标项名称坐标</p>
     * @param Coordinate $Result <p>指标结果称坐标</p>
     * @param Coordinate $Range <p>指标项范围坐标</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new Coordinate();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new Coordinate();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new Coordinate();
            $this->Range->deserialize($param["Range"]);
        }
    }
}
