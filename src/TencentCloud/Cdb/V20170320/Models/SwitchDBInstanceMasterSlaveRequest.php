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
 * SwitchDBInstanceMasterSlave请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。</p>
 * @method string getDstSlave() 获取<p>目标从实例。可选值：&quot;first&quot; - 第一备机；&quot;second&quot; - 第二备机；&quot;third&quot; - 第三备机。默认值为 &quot;first&quot;，仅多可用区实例支持设置为 &quot;second&quot;。</p>
 * @method void setDstSlave(string $DstSlave) 设置<p>目标从实例。可选值：&quot;first&quot; - 第一备机；&quot;second&quot; - 第二备机；&quot;third&quot; - 第三备机。默认值为 &quot;first&quot;，仅多可用区实例支持设置为 &quot;second&quot;。</p>
 * @method boolean getForceSwitch() 获取<p>是否强制切换。默认为 False。注意，若设置强制切换为 True，实例存在丢失数据的风险，请谨慎使用。</p>
 * @method void setForceSwitch(boolean $ForceSwitch) 设置<p>是否强制切换。默认为 False。注意，若设置强制切换为 True，实例存在丢失数据的风险，请谨慎使用。</p>
 * @method boolean getWaitSwitch() 获取<p>是否时间窗内切换。默认为 False，即不在时间窗内切换。注意，如果设置了 ForceSwitch 参数为 True，则该参数不生效。</p>
 * @method void setWaitSwitch(boolean $WaitSwitch) 设置<p>是否时间窗内切换。默认为 False，即不在时间窗内切换。注意，如果设置了 ForceSwitch 参数为 True，则该参数不生效。</p>
 * @method string getDstNodeId() 获取<p>集群版实例指定节点 ID 发起主从切换。</p>
 * @method void setDstNodeId(string $DstNodeId) 设置<p>集群版实例指定节点 ID 发起主从切换。</p>
 * @method integer getSyncTimeout() 获取<p>等待主备位点差收敛到阈值以内的最长时间,范围：30s-3600s</p>
 * @method void setSyncTimeout(integer $SyncTimeout) 设置<p>等待主备位点差收敛到阈值以内的最长时间,范围：30s-3600s</p>
 * @method string getSyncDistance() 获取<p>slave 执行位点和读到位点差值，在最长等待时间内，位点差需小于该值才启动切换</p>
 * @method void setSyncDistance(string $SyncDistance) 设置<p>slave 执行位点和读到位点差值，在最长等待时间内，位点差需小于该值才启动切换</p>
 */
class SwitchDBInstanceMasterSlaveRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>目标从实例。可选值：&quot;first&quot; - 第一备机；&quot;second&quot; - 第二备机；&quot;third&quot; - 第三备机。默认值为 &quot;first&quot;，仅多可用区实例支持设置为 &quot;second&quot;。</p>
     */
    public $DstSlave;

    /**
     * @var boolean <p>是否强制切换。默认为 False。注意，若设置强制切换为 True，实例存在丢失数据的风险，请谨慎使用。</p>
     * @deprecated
     */
    public $ForceSwitch;

    /**
     * @var boolean <p>是否时间窗内切换。默认为 False，即不在时间窗内切换。注意，如果设置了 ForceSwitch 参数为 True，则该参数不生效。</p>
     */
    public $WaitSwitch;

    /**
     * @var string <p>集群版实例指定节点 ID 发起主从切换。</p>
     */
    public $DstNodeId;

    /**
     * @var integer <p>等待主备位点差收敛到阈值以内的最长时间,范围：30s-3600s</p>
     */
    public $SyncTimeout;

    /**
     * @var string <p>slave 执行位点和读到位点差值，在最长等待时间内，位点差需小于该值才启动切换</p>
     */
    public $SyncDistance;

    /**
     * @param string $InstanceId <p>实例 ID。</p>
     * @param string $DstSlave <p>目标从实例。可选值：&quot;first&quot; - 第一备机；&quot;second&quot; - 第二备机；&quot;third&quot; - 第三备机。默认值为 &quot;first&quot;，仅多可用区实例支持设置为 &quot;second&quot;。</p>
     * @param boolean $ForceSwitch <p>是否强制切换。默认为 False。注意，若设置强制切换为 True，实例存在丢失数据的风险，请谨慎使用。</p>
     * @param boolean $WaitSwitch <p>是否时间窗内切换。默认为 False，即不在时间窗内切换。注意，如果设置了 ForceSwitch 参数为 True，则该参数不生效。</p>
     * @param string $DstNodeId <p>集群版实例指定节点 ID 发起主从切换。</p>
     * @param integer $SyncTimeout <p>等待主备位点差收敛到阈值以内的最长时间,范围：30s-3600s</p>
     * @param string $SyncDistance <p>slave 执行位点和读到位点差值，在最长等待时间内，位点差需小于该值才启动切换</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DstSlave",$param) and $param["DstSlave"] !== null) {
            $this->DstSlave = $param["DstSlave"];
        }

        if (array_key_exists("ForceSwitch",$param) and $param["ForceSwitch"] !== null) {
            $this->ForceSwitch = $param["ForceSwitch"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("DstNodeId",$param) and $param["DstNodeId"] !== null) {
            $this->DstNodeId = $param["DstNodeId"];
        }

        if (array_key_exists("SyncTimeout",$param) and $param["SyncTimeout"] !== null) {
            $this->SyncTimeout = $param["SyncTimeout"];
        }

        if (array_key_exists("SyncDistance",$param) and $param["SyncDistance"] !== null) {
            $this->SyncDistance = $param["SyncDistance"];
        }
    }
}
