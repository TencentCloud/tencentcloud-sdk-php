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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限对象
 *
 * @method string getDatabase() 获取需要授权的数据库名，填*代表当前Catalog下所有数据库。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定数据库。
 * @method void setDatabase(string $Database) 设置需要授权的数据库名，填*代表当前Catalog下所有数据库。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定数据库。
 * @method string getCatalog() 获取需要授权的数据源名称，管理员级别下只支持填*（代表该级别全部资源）；数据源级别和数据库级别鉴权的情况下，只支持填COSDataCatalog或者*；在数据表级别鉴权下可以填写用户自定义数据源。不填情况下默认为DataLakeCatalog。注意：如果是对用户自定义数据源进行鉴权，DLC能够管理的权限是用户接入数据源的时候提供的账户的子集。
 * @method void setCatalog(string $Catalog) 设置需要授权的数据源名称，管理员级别下只支持填*（代表该级别全部资源）；数据源级别和数据库级别鉴权的情况下，只支持填COSDataCatalog或者*；在数据表级别鉴权下可以填写用户自定义数据源。不填情况下默认为DataLakeCatalog。注意：如果是对用户自定义数据源进行鉴权，DLC能够管理的权限是用户接入数据源的时候提供的账户的子集。
 * @method string getTable() 获取需要授权的表名，填*代表当前Database下所有表。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定数据表。
 * @method void setTable(string $Table) 设置需要授权的表名，填*代表当前Database下所有表。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定数据表。
 * @method string getOperation() 获取授权的权限操作，对于不同级别的鉴权提供不同操作。管理员权限：ALL，不填默认为ALL；数据连接级鉴权：CREATE；数据库级别鉴权：ALL、CREATE、ALTER、DROP；数据表权限：ALL、SELECT、INSERT、ALTER、DELETE、DROP、UPDATE。注意：在数据表权限下，指定的数据源不为COSDataCatalog的时候，只支持SELECT操作。
 * @method void setOperation(string $Operation) 设置授权的权限操作，对于不同级别的鉴权提供不同操作。管理员权限：ALL，不填默认为ALL；数据连接级鉴权：CREATE；数据库级别鉴权：ALL、CREATE、ALTER、DROP；数据表权限：ALL、SELECT、INSERT、ALTER、DELETE、DROP、UPDATE。注意：在数据表权限下，指定的数据源不为COSDataCatalog的时候，只支持SELECT操作。
 * @method string getPolicyType() 获取授权类型，现在支持八种授权类型：ADMIN:管理员级别鉴权 DATASOURCE：数据连接级别鉴权 DATABASE：数据库级别鉴权 TABLE：表级别鉴权 VIEW：视图级别鉴权 FUNCTION：函数级别鉴权 COLUMN：列级别鉴权 ENGINE：数据引擎鉴权。不填默认为管理员级别鉴权。
 * @method void setPolicyType(string $PolicyType) 设置授权类型，现在支持八种授权类型：ADMIN:管理员级别鉴权 DATASOURCE：数据连接级别鉴权 DATABASE：数据库级别鉴权 TABLE：表级别鉴权 VIEW：视图级别鉴权 FUNCTION：函数级别鉴权 COLUMN：列级别鉴权 ENGINE：数据引擎鉴权。不填默认为管理员级别鉴权。
 * @method string getFunction() 获取需要授权的函数名，填*代表当前Catalog下所有函数。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定函数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunction(string $Function) 设置需要授权的函数名，填*代表当前Catalog下所有函数。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定函数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getView() 获取需要授权的视图，填*代表当前Database下所有视图。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定视图。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setView(string $View) 设置需要授权的视图，填*代表当前Database下所有视图。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定视图。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColumn() 获取需要授权的列，填*代表当前所有列。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumn(string $Column) 设置需要授权的列，填*代表当前所有列。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngine() 获取需要授权的数据引擎，填*代表当前所有引擎。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngine(string $DataEngine) 设置需要授权的数据引擎，填*代表当前所有引擎。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReAuth() 获取用户是否可以进行二次授权。当为true的时候，被授权的用户可以将本次获取的权限再次授权给其他子用户。默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReAuth(boolean $ReAuth) 设置用户是否可以进行二次授权。当为true的时候，被授权的用户可以将本次获取的权限再次授权给其他子用户。默认为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取权限来源，入参不填。USER：权限来自用户本身；WORKGROUP：权限来自绑定的工作组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置权限来源，入参不填。USER：权限来自用户本身；WORKGROUP：权限来自绑定的工作组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取授权模式，入参不填。COMMON：普通模式；SENIOR：高级模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置授权模式，入参不填。COMMON：普通模式；SENIOR：高级模式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取操作者，入参不填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作者，入参不填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取权限创建的时间，入参不填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置权限创建的时间，入参不填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceId() 获取权限所属工作组的ID，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceId(integer $SourceId) 设置权限所属工作组的ID，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceName() 获取权限所属工作组的名称，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceName(string $SourceName) 设置权限所属工作组的名称，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Policy extends AbstractModel
{
    /**
     * @var string 需要授权的数据库名，填*代表当前Catalog下所有数据库。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定数据库。
     */
    public $Database;

    /**
     * @var string 需要授权的数据源名称，管理员级别下只支持填*（代表该级别全部资源）；数据源级别和数据库级别鉴权的情况下，只支持填COSDataCatalog或者*；在数据表级别鉴权下可以填写用户自定义数据源。不填情况下默认为DataLakeCatalog。注意：如果是对用户自定义数据源进行鉴权，DLC能够管理的权限是用户接入数据源的时候提供的账户的子集。
     */
    public $Catalog;

    /**
     * @var string 需要授权的表名，填*代表当前Database下所有表。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定数据表。
     */
    public $Table;

    /**
     * @var string 授权的权限操作，对于不同级别的鉴权提供不同操作。管理员权限：ALL，不填默认为ALL；数据连接级鉴权：CREATE；数据库级别鉴权：ALL、CREATE、ALTER、DROP；数据表权限：ALL、SELECT、INSERT、ALTER、DELETE、DROP、UPDATE。注意：在数据表权限下，指定的数据源不为COSDataCatalog的时候，只支持SELECT操作。
     */
    public $Operation;

    /**
     * @var string 授权类型，现在支持八种授权类型：ADMIN:管理员级别鉴权 DATASOURCE：数据连接级别鉴权 DATABASE：数据库级别鉴权 TABLE：表级别鉴权 VIEW：视图级别鉴权 FUNCTION：函数级别鉴权 COLUMN：列级别鉴权 ENGINE：数据引擎鉴权。不填默认为管理员级别鉴权。
     */
    public $PolicyType;

    /**
     * @var string 需要授权的函数名，填*代表当前Catalog下所有函数。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定函数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Function;

    /**
     * @var string 需要授权的视图，填*代表当前Database下所有视图。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定视图。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $View;

    /**
     * @var string 需要授权的列，填*代表当前所有列。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Column;

    /**
     * @var string 需要授权的数据引擎，填*代表当前所有引擎。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngine;

    /**
     * @var boolean 用户是否可以进行二次授权。当为true的时候，被授权的用户可以将本次获取的权限再次授权给其他子用户。默认为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReAuth;

    /**
     * @var string 权限来源，入参不填。USER：权限来自用户本身；WORKGROUP：权限来自绑定的工作组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string 授权模式，入参不填。COMMON：普通模式；SENIOR：高级模式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var string 操作者，入参不填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 权限创建的时间，入参不填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 权限所属工作组的ID，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceId;

    /**
     * @var string 权限所属工作组的名称，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceName;

    /**
     * @param string $Database 需要授权的数据库名，填*代表当前Catalog下所有数据库。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定数据库。
     * @param string $Catalog 需要授权的数据源名称，管理员级别下只支持填*（代表该级别全部资源）；数据源级别和数据库级别鉴权的情况下，只支持填COSDataCatalog或者*；在数据表级别鉴权下可以填写用户自定义数据源。不填情况下默认为DataLakeCatalog。注意：如果是对用户自定义数据源进行鉴权，DLC能够管理的权限是用户接入数据源的时候提供的账户的子集。
     * @param string $Table 需要授权的表名，填*代表当前Database下所有表。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定数据表。
     * @param string $Operation 授权的权限操作，对于不同级别的鉴权提供不同操作。管理员权限：ALL，不填默认为ALL；数据连接级鉴权：CREATE；数据库级别鉴权：ALL、CREATE、ALTER、DROP；数据表权限：ALL、SELECT、INSERT、ALTER、DELETE、DROP、UPDATE。注意：在数据表权限下，指定的数据源不为COSDataCatalog的时候，只支持SELECT操作。
     * @param string $PolicyType 授权类型，现在支持八种授权类型：ADMIN:管理员级别鉴权 DATASOURCE：数据连接级别鉴权 DATABASE：数据库级别鉴权 TABLE：表级别鉴权 VIEW：视图级别鉴权 FUNCTION：函数级别鉴权 COLUMN：列级别鉴权 ENGINE：数据引擎鉴权。不填默认为管理员级别鉴权。
     * @param string $Function 需要授权的函数名，填*代表当前Catalog下所有函数。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别时只允许填空，其他类型下可以任意指定函数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $View 需要授权的视图，填*代表当前Database下所有视图。当授权类型为管理员级别时，只允许填“*”，当授权类型为数据连接级别、数据库级别时只允许填空，其他类型下可以任意指定视图。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Column 需要授权的列，填*代表当前所有列。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngine 需要授权的数据引擎，填*代表当前所有引擎。当授权类型为管理员级别时，只允许填“*”
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReAuth 用户是否可以进行二次授权。当为true的时候，被授权的用户可以将本次获取的权限再次授权给其他子用户。默认为false
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 权限来源，入参不填。USER：权限来自用户本身；WORKGROUP：权限来自绑定的工作组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 授权模式，入参不填。COMMON：普通模式；SENIOR：高级模式。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 操作者，入参不填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 权限创建的时间，入参不填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceId 权限所属工作组的ID，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceName 权限所属工作组的名称，只有当该权限的来源为工作组时才会有值。即仅当Source字段的值为WORKGROUP时该字段才有值。
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("Function",$param) and $param["Function"] !== null) {
            $this->Function = $param["Function"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Column",$param) and $param["Column"] !== null) {
            $this->Column = $param["Column"];
        }

        if (array_key_exists("DataEngine",$param) and $param["DataEngine"] !== null) {
            $this->DataEngine = $param["DataEngine"];
        }

        if (array_key_exists("ReAuth",$param) and $param["ReAuth"] !== null) {
            $this->ReAuth = $param["ReAuth"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }
    }
}
