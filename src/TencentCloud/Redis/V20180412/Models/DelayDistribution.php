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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 延时分布详情
 *
 * @method integer getLadder() 获取指延时分布阶梯，其与延时区间的对应关系如下所示。
- 1：[0ms,1ms]。
- 5： [1ms,5ms]。
- 10： [5ms,10ms]。
- 50： [10ms,50ms]。
- 200：[50ms,200ms]。
- -1： [200ms,∞]。
 * @method void setLadder(integer $Ladder) 设置指延时分布阶梯，其与延时区间的对应关系如下所示。
- 1：[0ms,1ms]。
- 5： [1ms,5ms]。
- 10： [5ms,10ms]。
- 50： [10ms,50ms]。
- 200：[50ms,200ms]。
- -1： [200ms,∞]。
 * @method integer getSize() 获取延时处于当前分布阶梯的命令数量，单位：个。
 * @method void setSize(integer $Size) 设置延时处于当前分布阶梯的命令数量，单位：个。
 * @method integer getUpdatetime() 获取修改时间。
 * @method void setUpdatetime(integer $Updatetime) 设置修改时间。
 */
class DelayDistribution extends AbstractModel
{
    /**
     * @var integer 指延时分布阶梯，其与延时区间的对应关系如下所示。
- 1：[0ms,1ms]。
- 5： [1ms,5ms]。
- 10： [5ms,10ms]。
- 50： [10ms,50ms]。
- 200：[50ms,200ms]。
- -1： [200ms,∞]。
     */
    public $Ladder;

    /**
     * @var integer 延时处于当前分布阶梯的命令数量，单位：个。
     */
    public $Size;

    /**
     * @var integer 修改时间。
     */
    public $Updatetime;

    /**
     * @param integer $Ladder 指延时分布阶梯，其与延时区间的对应关系如下所示。
- 1：[0ms,1ms]。
- 5： [1ms,5ms]。
- 10： [5ms,10ms]。
- 50： [10ms,50ms]。
- 200：[50ms,200ms]。
- -1： [200ms,∞]。
     * @param integer $Size 延时处于当前分布阶梯的命令数量，单位：个。
     * @param integer $Updatetime 修改时间。
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
        if (array_key_exists("Ladder",$param) and $param["Ladder"] !== null) {
            $this->Ladder = $param["Ladder"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Updatetime",$param) and $param["Updatetime"] !== null) {
            $this->Updatetime = $param["Updatetime"];
        }
    }
}
