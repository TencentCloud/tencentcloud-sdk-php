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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotViews请求参数结构体
 *
 * @method array getInstanceId() 获取<p>集群实例ID</p>
 * @method void setInstanceId(array $InstanceId) 设置<p>集群实例ID</p>
 * @method array getState() 获取<p>快照状态，IN_PROGRESS,SUCCESS,FAILED,PARTIAL</p>
 * @method void setState(array $State) 设置<p>快照状态，IN_PROGRESS,SUCCESS,FAILED,PARTIAL</p>
 * @method string getUserBackUp() 获取<p>创建方式: true(手动备份); false(自动备份); 空字符串表示全部</p>
 * @method void setUserBackUp(string $UserBackUp) 设置<p>创建方式: true(手动备份); false(自动备份); 空字符串表示全部</p>
 * @method integer getDuration() 获取<p>时间范围, 最近多少天, 0表示查询所有时间范围</p>
 * @method void setDuration(integer $Duration) 设置<p>时间范围, 最近多少天, 0表示查询所有时间范围</p>
 */
class DescribeSnapshotViewsRequest extends AbstractModel
{
    /**
     * @var array <p>集群实例ID</p>
     */
    public $InstanceId;

    /**
     * @var array <p>快照状态，IN_PROGRESS,SUCCESS,FAILED,PARTIAL</p>
     */
    public $State;

    /**
     * @var string <p>创建方式: true(手动备份); false(自动备份); 空字符串表示全部</p>
     */
    public $UserBackUp;

    /**
     * @var integer <p>时间范围, 最近多少天, 0表示查询所有时间范围</p>
     */
    public $Duration;

    /**
     * @param array $InstanceId <p>集群实例ID</p>
     * @param array $State <p>快照状态，IN_PROGRESS,SUCCESS,FAILED,PARTIAL</p>
     * @param string $UserBackUp <p>创建方式: true(手动备份); false(自动备份); 空字符串表示全部</p>
     * @param integer $Duration <p>时间范围, 最近多少天, 0表示查询所有时间范围</p>
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("UserBackUp",$param) and $param["UserBackUp"] !== null) {
            $this->UserBackUp = $param["UserBackUp"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
