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
 * @method array getPolicy() 获取定期快照的执行策略。
 * @method void setPolicy(array $policy) 设置定期快照的执行策略。
 * @method string getAutoSnapshotPolicyName() 获取要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method void setAutoSnapshotPolicyName(string $autoSnapshotPolicyName) 设置要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method boolean getIsActivated() 获取是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
 * @method void setIsActivated(boolean $isActivated) 设置是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
 * @method boolean getIsPermanent() 获取通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
 * @method void setIsPermanent(boolean $isPermanent) 设置通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
 * @method integer getRetentionDays() 获取通过该定期快照策略创建的快照保留天数，默认保留7天，该参数不可与`IsPermanent`参数冲突，即若定期快照策略设置为永久保留，本参数应置0。
 * @method void setRetentionDays(integer $retentionDays) 设置通过该定期快照策略创建的快照保留天数，默认保留7天，该参数不可与`IsPermanent`参数冲突，即若定期快照策略设置为永久保留，本参数应置0。
 */

/**
 *CreateAutoSnapshotPolicy请求参数结构体
 */
class CreateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var array 定期快照的执行策略。
     */
    public $policy;

    /**
     * @var string 要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
     */
    public $autoSnapshotPolicyName;

    /**
     * @var boolean 是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
     */
    public $isActivated;

    /**
     * @var boolean 通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
     */
    public $isPermanent;

    /**
     * @var integer 通过该定期快照策略创建的快照保留天数，默认保留7天，该参数不可与`IsPermanent`参数冲突，即若定期快照策略设置为永久保留，本参数应置0。
     */
    public $retentionDays;
    /**
     * @param array $policy 定期快照的执行策略。
     * @param string $autoSnapshotPolicyName 要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
     * @param boolean $isActivated 是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
     * @param boolean $isPermanent 通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
     * @param integer $retentionDays 通过该定期快照策略创建的快照保留天数，默认保留7天，该参数不可与`IsPermanent`参数冲突，即若定期快照策略设置为永久保留，本参数应置0。
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->policy, $obj);
            }
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->autoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
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
    }
}
