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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包含了视图中节点组件类型的数量
 *
 * @method integer getService() 获取服务纬度的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setService(integer $Service) 设置服务纬度的节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatabase() 获取数据库节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(integer $Database) 设置数据库节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMQ() 获取消息队列节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMQ(integer $MQ) 设置消息队列节点数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComponentTopologyView extends AbstractModel
{
    /**
     * @var integer 服务纬度的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Service;

    /**
     * @var integer 数据库节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var integer 消息队列节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MQ;

    /**
     * @param integer $Service 服务纬度的节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Database 数据库节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MQ 消息队列节点数量
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("MQ",$param) and $param["MQ"] !== null) {
            $this->MQ = $param["MQ"];
        }
    }
}
