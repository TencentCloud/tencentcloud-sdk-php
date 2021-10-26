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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞影响主机列表
 *
 * @method integer getEventId() 获取事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventId(integer $EventId) 设置事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTime() 获取最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTime(string $LastTime) 设置最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUuid() 获取主机Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUuid(string $Uuid) 设置主机Uuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostIp() 获取主机HostIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIp(string $HostIp) 设置主机HostIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAliasName() 获取主机别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAliasName(string $AliasName) 设置主机别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置主机标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置说明
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulEffectHostList extends AbstractModel
{
    /**
     * @var integer 事件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventId;

    /**
     * @var integer 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTime;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var string 主机Uuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uuid;

    /**
     * @var string 主机HostIp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIp;

    /**
     * @var string 主机别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AliasName;

    /**
     * @var array 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param integer $EventId 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态：0: 待处理 1:忽略  3:已修复  5:检测中 6:修复中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTime 最后检测时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uuid 主机Uuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIp 主机HostIp
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AliasName 主机别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 主机标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 说明
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
