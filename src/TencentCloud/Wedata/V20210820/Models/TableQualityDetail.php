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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表质量详情
 *
 * @method string getDatabaseId() 获取数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(string $DatabaseId) 设置数据库id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableId() 获取表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableId(string $TableId) 设置表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerUserId() 获取表责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(integer $OwnerUserId) 设置表责任人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUserName() 获取表责任人名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserName(string $OwnerUserName) 设置表责任人名
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDatabaseScore() 获取库得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseScore(float $DatabaseScore) 设置库得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTableScore() 获取表得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableScore(float $TableScore) 设置表得分
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLastPeriodRatio() 获取表环比
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastPeriodRatio(float $LastPeriodRatio) 设置表环比
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableQualityDetail extends AbstractModel
{
    /**
     * @var string 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableId;

    /**
     * @var string 表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var integer 表责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var string 表责任人名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserName;

    /**
     * @var float 库得分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseScore;

    /**
     * @var float 表得分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableScore;

    /**
     * @var float 表环比
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastPeriodRatio;

    /**
     * @param string $DatabaseId 数据库id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableId 表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerUserId 表责任人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUserName 表责任人名
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DatabaseScore 库得分
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TableScore 表得分
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LastPeriodRatio 表环比
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
        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("OwnerUserName",$param) and $param["OwnerUserName"] !== null) {
            $this->OwnerUserName = $param["OwnerUserName"];
        }

        if (array_key_exists("DatabaseScore",$param) and $param["DatabaseScore"] !== null) {
            $this->DatabaseScore = $param["DatabaseScore"];
        }

        if (array_key_exists("TableScore",$param) and $param["TableScore"] !== null) {
            $this->TableScore = $param["TableScore"];
        }

        if (array_key_exists("LastPeriodRatio",$param) and $param["LastPeriodRatio"] !== null) {
            $this->LastPeriodRatio = $param["LastPeriodRatio"];
        }
    }
}
