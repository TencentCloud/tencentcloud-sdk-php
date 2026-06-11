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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群周期弹性策略
 *
 * @method string getPolicyId() 获取<p>策略ID</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>策略ID</p>
 * @method string getInstanceType() 获取<p>实例类型。rw-读写类型，ro-只读类型。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型。rw-读写类型，ro-只读类型。</p>
 * @method float getMinCpu() 获取<p>弹性下限, 后续废弃, 请使用MinCcu</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>弹性下限, 后续废弃, 请使用MinCcu</p>
 * @method float getMaxCpu() 获取<p>弹性上限,后续废弃，请使用MaxCcu</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>弹性上限,后续废弃，请使用MaxCcu</p>
 * @method string getScaleStartTime() 获取<p>弹性开始时间</p>
 * @method void setScaleStartTime(string $ScaleStartTime) 设置<p>弹性开始时间</p>
 * @method string getScaleEndTime() 获取<p>弹性结束时间</p>
 * @method void setScaleEndTime(string $ScaleEndTime) 设置<p>弹性结束时间</p>
 * @method string getPolicyStartTime() 获取<p>策略有效起始日期时间</p>
 * @method void setPolicyStartTime(string $PolicyStartTime) 设置<p>策略有效起始日期时间</p>
 * @method string getPolicyEndTime() 获取<p>策略有效截止日期时间</p>
 * @method void setPolicyEndTime(string $PolicyEndTime) 设置<p>策略有效截止日期时间</p>
 * @method string getPeriodType() 获取<p>周期类型。day-天， week-星期，month-月</p>
 * @method void setPeriodType(string $PeriodType) 设置<p>周期类型。day-天， week-星期，month-月</p>
 * @method array getPeriodConfig() 获取<p>在周期内的时间配置。对于week，表示星期几；对于month，表示几号。对于day，此参数不生效。</p>
 * @method void setPeriodConfig(array $PeriodConfig) 设置<p>在周期内的时间配置。对于week，表示星期几；对于month，表示几号。对于day，此参数不生效。</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getStatus() 获取<p>策略状态。normal-正常，expired-过期, deleted-删除</p>
 * @method void setStatus(string $Status) 设置<p>策略状态。normal-正常，expired-过期, deleted-删除</p>
 */
class ClusterPeriodScalePolicy extends AbstractModel
{
    /**
     * @var string <p>策略ID</p>
     */
    public $PolicyId;

    /**
     * @var string <p>实例类型。rw-读写类型，ro-只读类型。</p>
     */
    public $InstanceType;

    /**
     * @var float <p>弹性下限, 后续废弃, 请使用MinCcu</p>
     */
    public $MinCpu;

    /**
     * @var float <p>弹性上限,后续废弃，请使用MaxCcu</p>
     */
    public $MaxCpu;

    /**
     * @var string <p>弹性开始时间</p>
     */
    public $ScaleStartTime;

    /**
     * @var string <p>弹性结束时间</p>
     */
    public $ScaleEndTime;

    /**
     * @var string <p>策略有效起始日期时间</p>
     */
    public $PolicyStartTime;

    /**
     * @var string <p>策略有效截止日期时间</p>
     */
    public $PolicyEndTime;

    /**
     * @var string <p>周期类型。day-天， week-星期，month-月</p>
     */
    public $PeriodType;

    /**
     * @var array <p>在周期内的时间配置。对于week，表示星期几；对于month，表示几号。对于day，此参数不生效。</p>
     */
    public $PeriodConfig;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>策略状态。normal-正常，expired-过期, deleted-删除</p>
     */
    public $Status;

    /**
     * @param string $PolicyId <p>策略ID</p>
     * @param string $InstanceType <p>实例类型。rw-读写类型，ro-只读类型。</p>
     * @param float $MinCpu <p>弹性下限, 后续废弃, 请使用MinCcu</p>
     * @param float $MaxCpu <p>弹性上限,后续废弃，请使用MaxCcu</p>
     * @param string $ScaleStartTime <p>弹性开始时间</p>
     * @param string $ScaleEndTime <p>弹性结束时间</p>
     * @param string $PolicyStartTime <p>策略有效起始日期时间</p>
     * @param string $PolicyEndTime <p>策略有效截止日期时间</p>
     * @param string $PeriodType <p>周期类型。day-天， week-星期，month-月</p>
     * @param array $PeriodConfig <p>在周期内的时间配置。对于week，表示星期几；对于month，表示几号。对于day，此参数不生效。</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Status <p>策略状态。normal-正常，expired-过期, deleted-删除</p>
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("ScaleStartTime",$param) and $param["ScaleStartTime"] !== null) {
            $this->ScaleStartTime = $param["ScaleStartTime"];
        }

        if (array_key_exists("ScaleEndTime",$param) and $param["ScaleEndTime"] !== null) {
            $this->ScaleEndTime = $param["ScaleEndTime"];
        }

        if (array_key_exists("PolicyStartTime",$param) and $param["PolicyStartTime"] !== null) {
            $this->PolicyStartTime = $param["PolicyStartTime"];
        }

        if (array_key_exists("PolicyEndTime",$param) and $param["PolicyEndTime"] !== null) {
            $this->PolicyEndTime = $param["PolicyEndTime"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("PeriodConfig",$param) and $param["PeriodConfig"] !== null) {
            $this->PeriodConfig = $param["PeriodConfig"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
