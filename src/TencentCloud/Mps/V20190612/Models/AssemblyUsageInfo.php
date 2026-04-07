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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 线性组装用量查询响应
 *
 * @method array getAssemblyUsageDetails() 获取频道线性组装用量明细
 * @method void setAssemblyUsageDetails(array $AssemblyUsageDetails) 设置频道线性组装用量明细
 * @method integer getSumBasicChannelDuration() 获取Basic频道类型总时长
 * @method void setSumBasicChannelDuration(integer $SumBasicChannelDuration) 设置Basic频道类型总时长
 * @method integer getSumStandardChannelDuration() 获取Standard频道类型总时长
 * @method void setSumStandardChannelDuration(integer $SumStandardChannelDuration) 设置Standard频道类型总时长
 */
class AssemblyUsageInfo extends AbstractModel
{
    /**
     * @var array 频道线性组装用量明细
     */
    public $AssemblyUsageDetails;

    /**
     * @var integer Basic频道类型总时长
     */
    public $SumBasicChannelDuration;

    /**
     * @var integer Standard频道类型总时长
     */
    public $SumStandardChannelDuration;

    /**
     * @param array $AssemblyUsageDetails 频道线性组装用量明细
     * @param integer $SumBasicChannelDuration Basic频道类型总时长
     * @param integer $SumStandardChannelDuration Standard频道类型总时长
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
        if (array_key_exists("AssemblyUsageDetails",$param) and $param["AssemblyUsageDetails"] !== null) {
            $this->AssemblyUsageDetails = [];
            foreach ($param["AssemblyUsageDetails"] as $key => $value){
                $obj = new AssemblyUsageDetail();
                $obj->deserialize($value);
                array_push($this->AssemblyUsageDetails, $obj);
            }
        }

        if (array_key_exists("SumBasicChannelDuration",$param) and $param["SumBasicChannelDuration"] !== null) {
            $this->SumBasicChannelDuration = $param["SumBasicChannelDuration"];
        }

        if (array_key_exists("SumStandardChannelDuration",$param) and $param["SumStandardChannelDuration"] !== null) {
            $this->SumStandardChannelDuration = $param["SumStandardChannelDuration"];
        }
    }
}
