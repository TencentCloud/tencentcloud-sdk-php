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
 * DescribeStreamPackageSSAIUsage请求参数结构体
 *
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getChannelIds() 获取需要查询的channel_id
 * @method void setChannelIds(array $ChannelIds) 设置需要查询的channel_id
 * @method array getTypes() 获取需要查询的广告类型。可选Pre-roll/Mid-roll/VOD；若为空，默认查询所有类型
 * @method void setTypes(array $Types) 设置需要查询的广告类型。可选Pre-roll/Mid-roll/VOD；若为空，默认查询所有类型
 * @method boolean getDimension() 获取维度，可选值：summary对应false；detail 对应true
 * @method void setDimension(boolean $Dimension) 设置维度，可选值：summary对应false；detail 对应true
 */
class DescribeStreamPackageSSAIUsageRequest extends AbstractModel
{
    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 需要查询的channel_id
     */
    public $ChannelIds;

    /**
     * @var array 需要查询的广告类型。可选Pre-roll/Mid-roll/VOD；若为空，默认查询所有类型
     */
    public $Types;

    /**
     * @var boolean 维度，可选值：summary对应false；detail 对应true
     */
    public $Dimension;

    /**
     * @param string $StartTime 起始时间
     * @param string $EndTime 结束时间
     * @param array $ChannelIds 需要查询的channel_id
     * @param array $Types 需要查询的广告类型。可选Pre-roll/Mid-roll/VOD；若为空，默认查询所有类型
     * @param boolean $Dimension 维度，可选值：summary对应false；detail 对应true
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

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
