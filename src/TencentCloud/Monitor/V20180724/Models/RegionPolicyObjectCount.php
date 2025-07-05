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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyObjectCount接口返回的地域统计
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getCount() 获取绑定的实例数量
 * @method void setCount(integer $Count) 设置绑定的实例数量
 */
class RegionPolicyObjectCount extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 绑定的实例数量
     */
    public $Count;

    /**
     * @param string $Region 地域
     * @param integer $Count 绑定的实例数量
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
