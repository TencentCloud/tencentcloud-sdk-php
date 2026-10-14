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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多张截图模式
 *
 * @method boolean getEnable() 获取<p>是否启用多张模式</p><p>false时为单张模式，忽略Interval、Total参数</p><p>默认值：false</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否启用多张模式</p><p>false时为单张模式，忽略Interval、Total参数</p><p>默认值：false</p>
 * @method integer getInterval() 获取<p>截帧间隔</p><p>取值范围：[10, 600]</p><p>单位：秒</p>
 * @method void setInterval(integer $Interval) 设置<p>截帧间隔</p><p>取值范围：[10, 600]</p><p>单位：秒</p>
 * @method integer getTotal() 获取<p>截帧张数</p><p>取值范围：[1, 10]</p>
 * @method void setTotal(integer $Total) 设置<p>截帧张数</p><p>取值范围：[1, 10]</p>
 */
class MultiSnapshotMode extends AbstractModel
{
    /**
     * @var boolean <p>是否启用多张模式</p><p>false时为单张模式，忽略Interval、Total参数</p><p>默认值：false</p>
     */
    public $Enable;

    /**
     * @var integer <p>截帧间隔</p><p>取值范围：[10, 600]</p><p>单位：秒</p>
     */
    public $Interval;

    /**
     * @var integer <p>截帧张数</p><p>取值范围：[1, 10]</p>
     */
    public $Total;

    /**
     * @param boolean $Enable <p>是否启用多张模式</p><p>false时为单张模式，忽略Interval、Total参数</p><p>默认值：false</p>
     * @param integer $Interval <p>截帧间隔</p><p>取值范围：[10, 600]</p><p>单位：秒</p>
     * @param integer $Total <p>截帧张数</p><p>取值范围：[1, 10]</p>
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
