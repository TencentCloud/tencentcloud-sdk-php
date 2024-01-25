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
 * 数据表导入记录ID
 *
 * @method integer getId() 获取导入记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置导入记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取导入进度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置导入进度信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getImportStatus() 获取导入状态（1：初始，2：建表中，3：建表成功，4：建表失败，5：导入数据中，6：导入数据成功，7：导入数据失败 8：回滚失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportStatus(integer $ImportStatus) 设置导入状态（1：初始，2：建表中，3：建表成功，4：建表失败，5：导入数据中，6：导入数据成功，7：导入数据失败 8：回滚失败)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceDataPath() 获取数据路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceDataPath(string $SourceDataPath) 设置数据路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceId() 获取数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceId(string $DatasourceId) 设置数据源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTenantId() 获取租户ID，即AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTenantId(integer $TenantId) 设置租户ID，即AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerUserId() 获取主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserId(integer $OwnerUserId) 设置主账号ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatasourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatasourceType(string $DatasourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImportTableDTO extends AbstractModel
{
    /**
     * @var integer 导入记录ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 导入进度信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 导入状态（1：初始，2：建表中，3：建表成功，4：建表失败，5：导入数据中，6：导入数据成功，7：导入数据失败 8：回滚失败)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportStatus;

    /**
     * @var string 数据路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceDataPath;

    /**
     * @var string 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var string 表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 租户ID，即AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TenantId;

    /**
     * @var integer 主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserId;

    /**
     * @var integer 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatasourceType;

    /**
     * @param integer $Id 导入记录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 导入进度信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ImportStatus 导入状态（1：初始，2：建表中，3：建表成功，4：建表失败，5：导入数据中，6：导入数据成功，7：导入数据失败 8：回滚失败)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceDataPath 数据路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceId 数据源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TenantId 租户ID，即AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerUserId 主账号ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatasourceType 数据源类型
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ImportStatus",$param) and $param["ImportStatus"] !== null) {
            $this->ImportStatus = $param["ImportStatus"];
        }

        if (array_key_exists("SourceDataPath",$param) and $param["SourceDataPath"] !== null) {
            $this->SourceDataPath = $param["SourceDataPath"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("OwnerUserId",$param) and $param["OwnerUserId"] !== null) {
            $this->OwnerUserId = $param["OwnerUserId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("DatasourceType",$param) and $param["DatasourceType"] !== null) {
            $this->DatasourceType = $param["DatasourceType"];
        }
    }
}
