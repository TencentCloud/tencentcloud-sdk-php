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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevicePriceInfo请求参数结构体
 *
 * @method array getInstanceIds() 获取需要查询的实例列表
 * @method void setInstanceIds(array $InstanceIds) 设置需要查询的实例列表
 * @method string getTimeUnit() 获取购买时长单位，当前只支持取值为m
 * @method void setTimeUnit(string $TimeUnit) 设置购买时长单位，当前只支持取值为m
 * @method integer getTimeSpan() 获取购买时长
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长
 */
class DescribeDevicePriceInfoRequest extends AbstractModel
{
    /**
     * @var array 需要查询的实例列表
     */
    public $InstanceIds;

    /**
     * @var string 购买时长单位，当前只支持取值为m
     */
    public $TimeUnit;

    /**
     * @var integer 购买时长
     */
    public $TimeSpan;

    /**
     * @param array $InstanceIds 需要查询的实例列表
     * @param string $TimeUnit 购买时长单位，当前只支持取值为m
     * @param integer $TimeSpan 购买时长
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
