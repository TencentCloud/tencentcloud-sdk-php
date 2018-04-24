<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAutoSnapshotPolicyId() 获取定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $autoSnapshotPolicyId) 设置定期快照策略ID。
 * @method string getAutoSnapshotPolicyName() 获取定期快照策略名称。
 * @method void setAutoSnapshotPolicyName(string $autoSnapshotPolicyName) 设置定期快照策略名称。
 * @method string getAutoSnapshotPolicyState() 获取定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method void setAutoSnapshotPolicyState(string $autoSnapshotPolicyState) 设置定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method integer getIsActivated() 获取定期快照策略是否激活。
 * @method void setIsActivated(integer $isActivated) 设置定期快照策略是否激活。
 * @method integer getIsPermanent() 获取使用该定期快照策略创建出来的快照是否永久保留。
 * @method void setIsPermanent(integer $isPermanent) 设置使用该定期快照策略创建出来的快照是否永久保留。
 * @method integer getRetentionDays() 获取使用该定期快照策略创建出来的快照保留天数。
 * @method void setRetentionDays(integer $retentionDays) 设置使用该定期快照策略创建出来的快照保留天数。
 * @method string getCreateTime() 获取定期快照策略的创建时间。
 * @method void setCreateTime(string $createTime) 设置定期快照策略的创建时间。
 * @method string getNextTriggerTime() 获取定期快照下次触发的时间。
 * @method void setNextTriggerTime(string $nextTriggerTime) 设置定期快照下次触发的时间。
 * @method array getPolicy() 获取定期快照的执行策略。
 * @method void setPolicy(array $policy) 设置定期快照的执行策略。
 * @method array getDiskIdSet() 获取已绑定当前定期快照策略的云盘ID列表。
 * @method void setDiskIdSet(array $diskIdSet) 设置已绑定当前定期快照策略的云盘ID列表。
 */

/**
 *描述了定期快照策略的详细信息
 */
class AutoSnapshotPolicy extends AbstractModel
{
    /**
     * @var string 定期快照策略ID。
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string 定期快照策略名称。
     */
    public $autoSnapshotPolicyName;

    /**
     * @var string 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     */
    public $autoSnapshotPolicyState;

    /**
     * @var integer 定期快照策略是否激活。
     */
    public $isActivated;

    /**
     * @var integer 使用该定期快照策略创建出来的快照是否永久保留。
     */
    public $isPermanent;

    /**
     * @var integer 使用该定期快照策略创建出来的快照保留天数。
     */
    public $retentionDays;

    /**
     * @var string 定期快照策略的创建时间。
     */
    public $createTime;

    /**
     * @var string 定期快照下次触发的时间。
     */
    public $nextTriggerTime;

    /**
     * @var array 定期快照的执行策略。
     */
    public $policy;

    /**
     * @var array 已绑定当前定期快照策略的云盘ID列表。
     */
    public $diskIdSet;
    /**
     * @param string $autoSnapshotPolicyId 定期快照策略ID。
     * @param string $autoSnapshotPolicyName 定期快照策略名称。
     * @param string $autoSnapshotPolicyState 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     * @param integer $isActivated 定期快照策略是否激活。
     * @param integer $isPermanent 使用该定期快照策略创建出来的快照是否永久保留。
     * @param integer $retentionDays 使用该定期快照策略创建出来的快照保留天数。
     * @param string $createTime 定期快照策略的创建时间。
     * @param string $nextTriggerTime 定期快照下次触发的时间。
     * @param array $policy 定期快照的执行策略。
     * @param array $diskIdSet 已绑定当前定期快照策略的云盘ID列表。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->autoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->autoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("AutoSnapshotPolicyState",$param) and $param["AutoSnapshotPolicyState"] !== null) {
            $this->autoSnapshotPolicyState = $param["AutoSnapshotPolicyState"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->isActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->isPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->retentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->createTime = $param["CreateTime"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->nextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->policy, $obj);
            }
        }

        if (array_key_exists("DiskIdSet",$param) and $param["DiskIdSet"] !== null) {
            $this->diskIdSet = $param["DiskIdSet"];
        }
    }
}
