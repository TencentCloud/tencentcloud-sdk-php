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
 * DescribeStreamPackageLinearAssemblyUsage请求参数结构体
 *
 * @method string getStartTime() 获取查询开始时间
 * @method void setStartTime(string $StartTime) 设置查询开始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 * @method boolean getDimension() 获取维度，可选值：summary对应false；detail 对应true
 * @method void setDimension(boolean $Dimension) 设置维度，可选值：summary对应false；detail 对应true
 * @method array getChannelIds() 获取要查询的频道ID列表
 * @method void setChannelIds(array $ChannelIds) 设置要查询的频道ID列表
 * @method array getChannelTiers() 获取要查询的频道类型，可选Basic/Standard；若为空，默认查询所有类型
 * @method void setChannelTiers(array $ChannelTiers) 设置要查询的频道类型，可选Basic/Standard；若为空，默认查询所有类型
 */
class DescribeStreamPackageLinearAssemblyUsageRequest extends AbstractModel
{
    /**
     * @var string 查询开始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @var boolean 维度，可选值：summary对应false；detail 对应true
     */
    public $Dimension;

    /**
     * @var array 要查询的频道ID列表
     */
    public $ChannelIds;

    /**
     * @var array 要查询的频道类型，可选Basic/Standard；若为空，默认查询所有类型
     */
    public $ChannelTiers;

    /**
     * @param string $StartTime 查询开始时间
     * @param string $EndTime 查询结束时间
     * @param boolean $Dimension 维度，可选值：summary对应false；detail 对应true
     * @param array $ChannelIds 要查询的频道ID列表
     * @param array $ChannelTiers 要查询的频道类型，可选Basic/Standard；若为空，默认查询所有类型
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("ChannelTiers",$param) and $param["ChannelTiers"] !== null) {
            $this->ChannelTiers = $param["ChannelTiers"];
        }
    }
}
