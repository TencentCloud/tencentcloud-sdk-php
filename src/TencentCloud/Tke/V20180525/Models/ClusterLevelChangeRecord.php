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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群等级变配记录
 *
 * @method string getID() 获取记录ID
 * @method void setID(string $ID) 设置记录ID
 * @method string getClusterID() 获取集群ID
 * @method void setClusterID(string $ClusterID) 设置集群ID
 * @method string getStatus() 获取变配状态：trading 发货中,upgrading 变配中,success 变配成功,failed 变配失败。
 * @method void setStatus(string $Status) 设置变配状态：trading 发货中,upgrading 变配中,success 变配成功,failed 变配失败。
 * @method string getMessage() 获取状态描述
 * @method void setMessage(string $Message) 设置状态描述
 * @method string getOldLevel() 获取变配前规模
 * @method void setOldLevel(string $OldLevel) 设置变配前规模
 * @method string getNewLevel() 获取变配后规模
 * @method void setNewLevel(string $NewLevel) 设置变配后规模
 * @method string getTriggerType() 获取变配触发类型：manual 手动,auto 自动
 * @method void setTriggerType(string $TriggerType) 设置变配触发类型：manual 手动,auto 自动
 * @method string getStartedAt() 获取开始时间
 * @method void setStartedAt(string $StartedAt) 设置开始时间
 * @method string getEndedAt() 获取结束时间
 * @method void setEndedAt(string $EndedAt) 设置结束时间
 */
class ClusterLevelChangeRecord extends AbstractModel
{
    /**
     * @var string 记录ID
     */
    public $ID;

    /**
     * @var string 集群ID
     */
    public $ClusterID;

    /**
     * @var string 变配状态：trading 发货中,upgrading 变配中,success 变配成功,failed 变配失败。
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $Message;

    /**
     * @var string 变配前规模
     */
    public $OldLevel;

    /**
     * @var string 变配后规模
     */
    public $NewLevel;

    /**
     * @var string 变配触发类型：manual 手动,auto 自动
     */
    public $TriggerType;

    /**
     * @var string 开始时间
     */
    public $StartedAt;

    /**
     * @var string 结束时间
     */
    public $EndedAt;

    /**
     * @param string $ID 记录ID
     * @param string $ClusterID 集群ID
     * @param string $Status 变配状态：trading 发货中,upgrading 变配中,success 变配成功,failed 变配失败。
     * @param string $Message 状态描述
     * @param string $OldLevel 变配前规模
     * @param string $NewLevel 变配后规模
     * @param string $TriggerType 变配触发类型：manual 手动,auto 自动
     * @param string $StartedAt 开始时间
     * @param string $EndedAt 结束时间
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("OldLevel",$param) and $param["OldLevel"] !== null) {
            $this->OldLevel = $param["OldLevel"];
        }

        if (array_key_exists("NewLevel",$param) and $param["NewLevel"] !== null) {
            $this->NewLevel = $param["NewLevel"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("EndedAt",$param) and $param["EndedAt"] !== null) {
            $this->EndedAt = $param["EndedAt"];
        }
    }
}
