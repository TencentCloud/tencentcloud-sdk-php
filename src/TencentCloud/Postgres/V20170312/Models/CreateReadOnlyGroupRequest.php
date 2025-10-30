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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyGroup请求参数结构体
 *
 * @method string getMasterDBInstanceId() 获取主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) 设置主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getName() 获取只读组名称。仅支持长度小于60的中文/英文/数字/"_"/"-"。
 * @method void setName(string $Name) 设置只读组名称。仅支持长度小于60的中文/英文/数字/"_"/"-"。
 * @method integer getProjectId() 获取项目ID。默认值为0，表示归属于默认项目。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。默认值为0，表示归属于默认项目。
 * @method string getVpcId() 获取私有网络ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
 * @method void setVpcId(string $VpcId) 设置私有网络ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
 * @method string getSubnetId() 获取子网ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
 * @method integer getReplayLagEliminate() 获取延迟时间大小开关：0关、1开。该参数必填。
 * @method void setReplayLagEliminate(integer $ReplayLagEliminate) 设置延迟时间大小开关：0关、1开。该参数必填。
 * @method integer getReplayLatencyEliminate() 获取延迟空间大小开关： 0关、1开。该参数的填写需要与ReplayLagEliminate一致。
 * @method void setReplayLatencyEliminate(integer $ReplayLatencyEliminate) 设置延迟空间大小开关： 0关、1开。该参数的填写需要与ReplayLagEliminate一致。
 * @method integer getMaxReplayLag() 获取延迟时间大小阈值，取值为正整数，单位s。当ReplayLagEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数需填0。
 * @method void setMaxReplayLag(integer $MaxReplayLag) 设置延迟时间大小阈值，取值为正整数，单位s。当ReplayLagEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数需填0。
 * @method integer getMaxReplayLatency() 获取延迟空间大小阈值，取值为正整数，单位MB。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLatencyEliminate为0时，该参数需填0。
 * @method void setMaxReplayLatency(integer $MaxReplayLatency) 设置延迟空间大小阈值，取值为正整数，单位MB。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLatencyEliminate为0时，该参数需填0。
 * @method integer getMinDelayEliminateReserve() 获取延迟剔除最小保留实例数。取值范围[0,100]。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数无效。
 * @method void setMinDelayEliminateReserve(integer $MinDelayEliminateReserve) 设置延迟剔除最小保留实例数。取值范围[0,100]。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数无效。
 * @method array getSecurityGroupIds() 获取安全组id
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id
 */
class CreateReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string 主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $MasterDBInstanceId;

    /**
     * @var string 只读组名称。仅支持长度小于60的中文/英文/数字/"_"/"-"。
     */
    public $Name;

    /**
     * @var integer 项目ID。默认值为0，表示归属于默认项目。
     */
    public $ProjectId;

    /**
     * @var string 私有网络ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
     */
    public $VpcId;

    /**
     * @var string 子网ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
     */
    public $SubnetId;

    /**
     * @var integer 延迟时间大小开关：0关、1开。该参数必填。
     */
    public $ReplayLagEliminate;

    /**
     * @var integer 延迟空间大小开关： 0关、1开。该参数的填写需要与ReplayLagEliminate一致。
     */
    public $ReplayLatencyEliminate;

    /**
     * @var integer 延迟时间大小阈值，取值为正整数，单位s。当ReplayLagEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数需填0。
     */
    public $MaxReplayLag;

    /**
     * @var integer 延迟空间大小阈值，取值为正整数，单位MB。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLatencyEliminate为0时，该参数需填0。
     */
    public $MaxReplayLatency;

    /**
     * @var integer 延迟剔除最小保留实例数。取值范围[0,100]。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数无效。
     */
    public $MinDelayEliminateReserve;

    /**
     * @var array 安全组id
     */
    public $SecurityGroupIds;

    /**
     * @param string $MasterDBInstanceId 主实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $Name 只读组名称。仅支持长度小于60的中文/英文/数字/"_"/"-"。
     * @param integer $ProjectId 项目ID。默认值为0，表示归属于默认项目。
     * @param string $VpcId 私有网络ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
     * @param string $SubnetId 子网ID。注：默认使用基础网络，当前不支持基础网络，故该参数必填。
     * @param integer $ReplayLagEliminate 延迟时间大小开关：0关、1开。该参数必填。
     * @param integer $ReplayLatencyEliminate 延迟空间大小开关： 0关、1开。该参数的填写需要与ReplayLagEliminate一致。
     * @param integer $MaxReplayLag 延迟时间大小阈值，取值为正整数，单位s。当ReplayLagEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数需填0。
     * @param integer $MaxReplayLatency 延迟空间大小阈值，取值为正整数，单位MB。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLatencyEliminate为0时，该参数需填0。
     * @param integer $MinDelayEliminateReserve 延迟剔除最小保留实例数。取值范围[0,100]。当ReplayLatencyEliminate为1时，该参数必填；当ReplayLagEliminate为0时，该参数无效。
     * @param array $SecurityGroupIds 安全组id
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
        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ReplayLagEliminate",$param) and $param["ReplayLagEliminate"] !== null) {
            $this->ReplayLagEliminate = $param["ReplayLagEliminate"];
        }

        if (array_key_exists("ReplayLatencyEliminate",$param) and $param["ReplayLatencyEliminate"] !== null) {
            $this->ReplayLatencyEliminate = $param["ReplayLatencyEliminate"];
        }

        if (array_key_exists("MaxReplayLag",$param) and $param["MaxReplayLag"] !== null) {
            $this->MaxReplayLag = $param["MaxReplayLag"];
        }

        if (array_key_exists("MaxReplayLatency",$param) and $param["MaxReplayLatency"] !== null) {
            $this->MaxReplayLatency = $param["MaxReplayLatency"];
        }

        if (array_key_exists("MinDelayEliminateReserve",$param) and $param["MinDelayEliminateReserve"] !== null) {
            $this->MinDelayEliminateReserve = $param["MinDelayEliminateReserve"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
