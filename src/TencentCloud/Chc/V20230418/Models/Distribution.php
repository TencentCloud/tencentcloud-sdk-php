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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机架用量分布
 *
 * @method string getRackNumber() 获取机架编号
 * @method void setRackNumber(string $RackNumber) 设置机架编号
 * @method array getRackUsageSet() 获取机架的用量分布
 * @method void setRackUsageSet(array $RackUsageSet) 设置机架的用量分布
 */
class Distribution extends AbstractModel
{
    /**
     * @var string 机架编号
     */
    public $RackNumber;

    /**
     * @var array 机架的用量分布
     */
    public $RackUsageSet;

    /**
     * @param string $RackNumber 机架编号
     * @param array $RackUsageSet 机架的用量分布
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
        if (array_key_exists("RackNumber",$param) and $param["RackNumber"] !== null) {
            $this->RackNumber = $param["RackNumber"];
        }

        if (array_key_exists("RackUsageSet",$param) and $param["RackUsageSet"] !== null) {
            $this->RackUsageSet = [];
            foreach ($param["RackUsageSet"] as $key => $value){
                $obj = new RackUsage();
                $obj->deserialize($value);
                array_push($this->RackUsageSet, $obj);
            }
        }
    }
}
