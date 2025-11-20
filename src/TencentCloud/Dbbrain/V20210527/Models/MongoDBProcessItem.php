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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb会话详情
 *
 * @method boolean getIsInternalIp() 获取是否内部IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsInternalIp(boolean $IsInternalIp) 设置是否内部IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取语句类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置语句类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommand() 获取语句详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommand(string $Command) 设置语句详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceNodeId() 获取节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceNodeId(string $InstanceNodeId) 设置节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置客户端ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTime() 获取运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(float $Time) 设置运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取会话ID

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置会话ID

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardName() 获取分片名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardName(string $ShardName) 设置分片名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDB() 获取数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDB(string $DB) 设置数据库
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoDBProcessItem extends AbstractModel
{
    /**
     * @var boolean 是否内部IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsInternalIp;

    /**
     * @var string 语句类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 语句详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Command;

    /**
     * @var string 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceNodeId;

    /**
     * @var string 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var float 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var integer 会话ID

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 分片名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardName;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DB;

    /**
     * @param boolean $IsInternalIp 是否内部IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 语句类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Command 语句详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceNodeId 节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host 客户端ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Time 运行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID 会话ID

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardName 分片名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DB 数据库
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
        if (array_key_exists("IsInternalIp",$param) and $param["IsInternalIp"] !== null) {
            $this->IsInternalIp = $param["IsInternalIp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("InstanceNodeId",$param) and $param["InstanceNodeId"] !== null) {
            $this->InstanceNodeId = $param["InstanceNodeId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("ShardName",$param) and $param["ShardName"] !== null) {
            $this->ShardName = $param["ShardName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DB",$param) and $param["DB"] !== null) {
            $this->DB = $param["DB"];
        }
    }
}
