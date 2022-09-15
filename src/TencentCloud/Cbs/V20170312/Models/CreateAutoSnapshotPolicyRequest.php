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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAutoSnapshotPolicy请求参数结构体
 *
 * @method array getPolicy() 获取定期快照的执行策略。
 * @method void setPolicy(array $Policy) 设置定期快照的执行策略。
 * @method boolean getDryRun() 获取是否创建定期快照的执行策略。TRUE表示只需获取首次开始备份的时间，不实际创建定期快照策略，FALSE表示创建，默认为FALSE。
 * @method void setDryRun(boolean $DryRun) 设置是否创建定期快照的执行策略。TRUE表示只需获取首次开始备份的时间，不实际创建定期快照策略，FALSE表示创建，默认为FALSE。
 * @method boolean getIsActivated() 获取是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
 * @method void setIsActivated(boolean $IsActivated) 设置是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
 * @method string getAutoSnapshotPolicyName() 获取要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) 设置要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
 * @method boolean getIsPermanent() 获取通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
 * @method void setIsPermanent(boolean $IsPermanent) 设置通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
 * @method integer getRetentionDays() 获取通过该定期快照策略创建的快照保留天数，默认保留7天。如果指定本参数，则IsPermanent入参不可指定为TRUE，否则会产生冲突。
 * @method void setRetentionDays(integer $RetentionDays) 设置通过该定期快照策略创建的快照保留天数，默认保留7天。如果指定本参数，则IsPermanent入参不可指定为TRUE，否则会产生冲突。
 */
class CreateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var array 定期快照的执行策略。
     */
    public $Policy;

    /**
     * @var boolean 是否创建定期快照的执行策略。TRUE表示只需获取首次开始备份的时间，不实际创建定期快照策略，FALSE表示创建，默认为FALSE。
     */
    public $DryRun;

    /**
     * @var boolean 是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
     */
    public $IsActivated;

    /**
     * @var string 要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var boolean 通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
     */
    public $IsPermanent;

    /**
     * @var integer 通过该定期快照策略创建的快照保留天数，默认保留7天。如果指定本参数，则IsPermanent入参不可指定为TRUE，否则会产生冲突。
     */
    public $RetentionDays;

    /**
     * @param array $Policy 定期快照的执行策略。
     * @param boolean $DryRun 是否创建定期快照的执行策略。TRUE表示只需获取首次开始备份的时间，不实际创建定期快照策略，FALSE表示创建，默认为FALSE。
     * @param boolean $IsActivated 是否激活定期快照策略，FALSE表示未激活，TRUE表示激活，默认为TRUE。
     * @param string $AutoSnapshotPolicyName 要创建的定期快照策略名。不传则默认为“未命名”。最大长度不能超60个字节。
     * @param boolean $IsPermanent 通过该定期快照策略创建的快照是否永久保留。FALSE表示非永久保留，TRUE表示永久保留，默认为FALSE。
     * @param integer $RetentionDays 通过该定期快照策略创建的快照保留天数，默认保留7天。如果指定本参数，则IsPermanent入参不可指定为TRUE，否则会产生冲突。
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }
    }
}
