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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO 组的配置信息
 *
 * @method string getRoGroupName() 获取<p>RO 组名称。</p>
 * @method void setRoGroupName(string $RoGroupName) 设置<p>RO 组名称。</p>
 * @method integer getRoMaxDelayTime() 获取<p>RO 实例最大延迟阈值。单位为秒，最小值为 1。范围：[1,10000]，整数。<br>注意：RO 组必须设置了开启实例延迟剔除策略，该值才有效。</p>
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) 设置<p>RO 实例最大延迟阈值。单位为秒，最小值为 1。范围：[1,10000]，整数。<br>注意：RO 组必须设置了开启实例延迟剔除策略，该值才有效。</p>
 * @method integer getRoOfflineDelay() 获取<p>是否开启实例延迟剔除。支持的值包括：1 - 开启；0 - 不开启。注意，若设置开启实例延迟剔除，则必须设置延迟阈值（RoMaxDelayTime）参数。</p>
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) 设置<p>是否开启实例延迟剔除。支持的值包括：1 - 开启；0 - 不开启。注意，若设置开启实例延迟剔除，则必须设置延迟阈值（RoMaxDelayTime）参数。</p>
 * @method integer getMinRoInGroup() 获取<p>最少保留实例数。可设置为小于或等于该 RO 组下 RO 实例个数的任意值。默认值为1。<br>注意：若设置值大于 RO 实例数量将不做剔除；若设置为 0，所有实例延迟超限都会被剔除。</p>
 * @method void setMinRoInGroup(integer $MinRoInGroup) 设置<p>最少保留实例数。可设置为小于或等于该 RO 组下 RO 实例个数的任意值。默认值为1。<br>注意：若设置值大于 RO 实例数量将不做剔除；若设置为 0，所有实例延迟超限都会被剔除。</p>
 * @method string getWeightMode() 获取<p>权重模式。支持值包括：&quot;system&quot; - 系统自动分配； &quot;custom&quot; - 用户自定义设置。注意，若设置 &quot;custom&quot; 模式，则必须设置 RO 实例权重配置（RoWeightValues）参数。</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式。支持值包括：&quot;system&quot; - 系统自动分配； &quot;custom&quot; - 用户自定义设置。注意，若设置 &quot;custom&quot; 模式，则必须设置 RO 实例权重配置（RoWeightValues）参数。</p>
 * @method integer getReplicationDelayTime() 获取<p>延迟复制时间。单位：秒，范围：1 - 259200秒，不传此参数表示不开启实例延迟复制。</p>
 * @method void setReplicationDelayTime(integer $ReplicationDelayTime) 设置<p>延迟复制时间。单位：秒，范围：1 - 259200秒，不传此参数表示不开启实例延迟复制。</p>
 */
class RoGroupAttr extends AbstractModel
{
    /**
     * @var string <p>RO 组名称。</p>
     */
    public $RoGroupName;

    /**
     * @var integer <p>RO 实例最大延迟阈值。单位为秒，最小值为 1。范围：[1,10000]，整数。<br>注意：RO 组必须设置了开启实例延迟剔除策略，该值才有效。</p>
     */
    public $RoMaxDelayTime;

    /**
     * @var integer <p>是否开启实例延迟剔除。支持的值包括：1 - 开启；0 - 不开启。注意，若设置开启实例延迟剔除，则必须设置延迟阈值（RoMaxDelayTime）参数。</p>
     */
    public $RoOfflineDelay;

    /**
     * @var integer <p>最少保留实例数。可设置为小于或等于该 RO 组下 RO 实例个数的任意值。默认值为1。<br>注意：若设置值大于 RO 实例数量将不做剔除；若设置为 0，所有实例延迟超限都会被剔除。</p>
     */
    public $MinRoInGroup;

    /**
     * @var string <p>权重模式。支持值包括：&quot;system&quot; - 系统自动分配； &quot;custom&quot; - 用户自定义设置。注意，若设置 &quot;custom&quot; 模式，则必须设置 RO 实例权重配置（RoWeightValues）参数。</p>
     */
    public $WeightMode;

    /**
     * @var integer <p>延迟复制时间。单位：秒，范围：1 - 259200秒，不传此参数表示不开启实例延迟复制。</p>
     */
    public $ReplicationDelayTime;

    /**
     * @param string $RoGroupName <p>RO 组名称。</p>
     * @param integer $RoMaxDelayTime <p>RO 实例最大延迟阈值。单位为秒，最小值为 1。范围：[1,10000]，整数。<br>注意：RO 组必须设置了开启实例延迟剔除策略，该值才有效。</p>
     * @param integer $RoOfflineDelay <p>是否开启实例延迟剔除。支持的值包括：1 - 开启；0 - 不开启。注意，若设置开启实例延迟剔除，则必须设置延迟阈值（RoMaxDelayTime）参数。</p>
     * @param integer $MinRoInGroup <p>最少保留实例数。可设置为小于或等于该 RO 组下 RO 实例个数的任意值。默认值为1。<br>注意：若设置值大于 RO 实例数量将不做剔除；若设置为 0，所有实例延迟超限都会被剔除。</p>
     * @param string $WeightMode <p>权重模式。支持值包括：&quot;system&quot; - 系统自动分配； &quot;custom&quot; - 用户自定义设置。注意，若设置 &quot;custom&quot; 模式，则必须设置 RO 实例权重配置（RoWeightValues）参数。</p>
     * @param integer $ReplicationDelayTime <p>延迟复制时间。单位：秒，范围：1 - 259200秒，不传此参数表示不开启实例延迟复制。</p>
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
        if (array_key_exists("RoGroupName",$param) and $param["RoGroupName"] !== null) {
            $this->RoGroupName = $param["RoGroupName"];
        }

        if (array_key_exists("RoMaxDelayTime",$param) and $param["RoMaxDelayTime"] !== null) {
            $this->RoMaxDelayTime = $param["RoMaxDelayTime"];
        }

        if (array_key_exists("RoOfflineDelay",$param) and $param["RoOfflineDelay"] !== null) {
            $this->RoOfflineDelay = $param["RoOfflineDelay"];
        }

        if (array_key_exists("MinRoInGroup",$param) and $param["MinRoInGroup"] !== null) {
            $this->MinRoInGroup = $param["MinRoInGroup"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("ReplicationDelayTime",$param) and $param["ReplicationDelayTime"] !== null) {
            $this->ReplicationDelayTime = $param["ReplicationDelayTime"];
        }
    }
}
