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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 各地域实例个数信息
 *
 * @method string getRegion() 获取<p>地域描述</p>
 * @method void setRegion(string $Region) 设置<p>地域描述</p>
 * @method integer getCount() 获取<p>实例个数</p>
 * @method void setCount(integer $Count) 设置<p>实例个数</p>
 */
class DistributionInfo extends AbstractModel
{
    /**
     * @var string <p>地域描述</p>
     */
    public $Region;

    /**
     * @var integer <p>实例个数</p>
     */
    public $Count;

    /**
     * @param string $Region <p>地域描述</p>
     * @param integer $Count <p>实例个数</p>
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
