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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接口参数列表
 *
 * @method array getSeries() 获取<p>接口参数id列表</p>
 * @method void setSeries(array $Series) 设置<p>接口参数id列表</p>
 * @method array getYAxis() 获取<p>接口参数列表</p>
 * @method void setYAxis(array $YAxis) 设置<p>接口参数列表</p>
 */
class ChartData extends AbstractModel
{
    /**
     * @var array <p>接口参数id列表</p>
     */
    public $Series;

    /**
     * @var array <p>接口参数列表</p>
     */
    public $YAxis;

    /**
     * @param array $Series <p>接口参数id列表</p>
     * @param array $YAxis <p>接口参数列表</p>
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
        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new Series();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("YAxis",$param) and $param["YAxis"] !== null) {
            $this->YAxis = [];
            foreach ($param["YAxis"] as $key => $value){
                $obj = new YAxis();
                $obj->deserialize($value);
                array_push($this->YAxis, $obj);
            }
        }
    }
}
