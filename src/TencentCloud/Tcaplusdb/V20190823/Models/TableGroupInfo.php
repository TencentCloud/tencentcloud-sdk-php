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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表格组详细信息
 *
 * @method string getTableGroupId() 获取表格组ID
 * @method void setTableGroupId(string $TableGroupId) 设置表格组ID
 * @method string getTableGroupName() 获取表格组名称
 * @method void setTableGroupName(string $TableGroupName) 设置表格组名称
 * @method string getCreatedTime() 获取表格组创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置表格组创建时间
 * @method integer getTableCount() 获取表格组包含的表格数量
 * @method void setTableCount(integer $TableCount) 设置表格组包含的表格数量
 * @method integer getTotalSize() 获取表格组包含的表格存储总量（MB）
 * @method void setTotalSize(integer $TotalSize) 设置表格组包含的表格存储总量（MB）
 * @method integer getTxhBackupExpireDay() 获取表格Txh备份文件多少天后过期删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTxhBackupExpireDay(integer $TxhBackupExpireDay) 设置表格Txh备份文件多少天后过期删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnableMysql() 获取是否开启mysql负载均衡,0未开启 1开启中 2已开启
 * @method void setEnableMysql(integer $EnableMysql) 设置是否开启mysql负载均衡,0未开启 1开启中 2已开启
 * @method string getMysqlConnIp() 获取mysql负载均衡vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysqlConnIp(string $MysqlConnIp) 设置mysql负载均衡vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMysqlConnPort() 获取mysql负载均衡vport
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysqlConnPort(integer $MysqlConnPort) 设置mysql负载均衡vport
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableGroupInfo extends AbstractModel
{
    /**
     * @var string 表格组ID
     */
    public $TableGroupId;

    /**
     * @var string 表格组名称
     */
    public $TableGroupName;

    /**
     * @var string 表格组创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 表格组包含的表格数量
     */
    public $TableCount;

    /**
     * @var integer 表格组包含的表格存储总量（MB）
     */
    public $TotalSize;

    /**
     * @var integer 表格Txh备份文件多少天后过期删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TxhBackupExpireDay;

    /**
     * @var integer 是否开启mysql负载均衡,0未开启 1开启中 2已开启
     */
    public $EnableMysql;

    /**
     * @var string mysql负载均衡vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MysqlConnIp;

    /**
     * @var integer mysql负载均衡vport
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MysqlConnPort;

    /**
     * @param string $TableGroupId 表格组ID
     * @param string $TableGroupName 表格组名称
     * @param string $CreatedTime 表格组创建时间
     * @param integer $TableCount 表格组包含的表格数量
     * @param integer $TotalSize 表格组包含的表格存储总量（MB）
     * @param integer $TxhBackupExpireDay 表格Txh备份文件多少天后过期删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnableMysql 是否开启mysql负载均衡,0未开启 1开启中 2已开启
     * @param string $MysqlConnIp mysql负载均衡vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MysqlConnPort mysql负载均衡vport
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
        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("TxhBackupExpireDay",$param) and $param["TxhBackupExpireDay"] !== null) {
            $this->TxhBackupExpireDay = $param["TxhBackupExpireDay"];
        }

        if (array_key_exists("EnableMysql",$param) and $param["EnableMysql"] !== null) {
            $this->EnableMysql = $param["EnableMysql"];
        }

        if (array_key_exists("MysqlConnIp",$param) and $param["MysqlConnIp"] !== null) {
            $this->MysqlConnIp = $param["MysqlConnIp"];
        }

        if (array_key_exists("MysqlConnPort",$param) and $param["MysqlConnPort"] !== null) {
            $this->MysqlConnPort = $param["MysqlConnPort"];
        }
    }
}
