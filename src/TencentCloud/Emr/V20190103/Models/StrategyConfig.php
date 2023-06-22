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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重启/停止/启动服务/监控的配置
 *
 * @method integer getRollingRestartSwitch() 获取0:关闭滚动重启
1:开启滚动启动
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollingRestartSwitch(integer $RollingRestartSwitch) 设置0:关闭滚动重启
1:开启滚动启动
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchSize() 获取滚动重启每批次的重启数量，最大重启台数为 99999 台
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchSize(integer $BatchSize) 设置滚动重启每批次的重启数量，最大重启台数为 99999 台
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeWait() 获取滚动重启每批停止等待时间 ,最大间隔为 5 分钟 单位是秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeWait(integer $TimeWait) 设置滚动重启每批停止等待时间 ,最大间隔为 5 分钟 单位是秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDealOnFail() 获取操作失败处理策略，0:失败阻塞, 1:失败自动跳过
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealOnFail(integer $DealOnFail) 设置操作失败处理策略，0:失败阻塞, 1:失败自动跳过
注意：此字段可能返回 null，表示取不到有效值。
 */
class StrategyConfig extends AbstractModel
{
    /**
     * @var integer 0:关闭滚动重启
1:开启滚动启动
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollingRestartSwitch;

    /**
     * @var integer 滚动重启每批次的重启数量，最大重启台数为 99999 台
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchSize;

    /**
     * @var integer 滚动重启每批停止等待时间 ,最大间隔为 5 分钟 单位是秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeWait;

    /**
     * @var integer 操作失败处理策略，0:失败阻塞, 1:失败自动跳过
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealOnFail;

    /**
     * @param integer $RollingRestartSwitch 0:关闭滚动重启
1:开启滚动启动
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchSize 滚动重启每批次的重启数量，最大重启台数为 99999 台
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeWait 滚动重启每批停止等待时间 ,最大间隔为 5 分钟 单位是秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DealOnFail 操作失败处理策略，0:失败阻塞, 1:失败自动跳过
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RollingRestartSwitch",$param) and $param["RollingRestartSwitch"] !== null) {
            $this->RollingRestartSwitch = $param["RollingRestartSwitch"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("TimeWait",$param) and $param["TimeWait"] !== null) {
            $this->TimeWait = $param["TimeWait"];
        }

        if (array_key_exists("DealOnFail",$param) and $param["DealOnFail"] !== null) {
            $this->DealOnFail = $param["DealOnFail"];
        }
    }
}
