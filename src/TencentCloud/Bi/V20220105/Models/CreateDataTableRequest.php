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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataTable请求参数结构体
 *
 * @method integer getType() 获取后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
 * @method void setType(integer $Type) 设置后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
 * @method string getName() 获取数据表名称
 * @method void setName(string $Name) 设置数据表名称
 * @method integer getProjectId() 获取无
 * @method void setProjectId(integer $ProjectId) 设置无
 * @method integer getFoldId() 获取所属文件夹
 * @method void setFoldId(integer $FoldId) 设置所属文件夹
 * @method string getDatasourceId() 获取数据源Id
 * @method void setDatasourceId(string $DatasourceId) 设置数据源Id
 * @method string getTableName() 获取物理表名
 * @method void setTableName(string $TableName) 设置物理表名
 * @method string getSql() 获取sql语句
 * @method void setSql(string $Sql) 设置sql语句
 * @method string getExcelUrl() 获取excel地址
 * @method void setExcelUrl(string $ExcelUrl) 设置excel地址
 * @method array getFields() 获取字段配置
 * @method void setFields(array $Fields) 设置字段配置
 * @method integer getTableNodeType() 获取多表关联使用: 1:数据源原表,2:本地表,3:Excel表,4:API表
 * @method void setTableNodeType(integer $TableNodeType) 设置多表关联使用: 1:数据源原表,2:本地表,3:Excel表,4:API表
 * @method array getTables() 获取多表关联的原始表信息
 * @method void setTables(array $Tables) 设置多表关联的原始表信息
 * @method array getJoins() 获取多表关联的关联信息
 * @method void setJoins(array $Joins) 设置多表关联的关联信息
 * @method string getExtInfo() 获取补充信息，如api数据源信息，腾讯文档接入信息等
 * @method void setExtInfo(string $ExtInfo) 设置补充信息，如api数据源信息，腾讯文档接入信息等
 * @method boolean getAsyncRequest() 获取是否是异步
 * @method void setAsyncRequest(boolean $AsyncRequest) 设置是否是异步
 * @method string getParentTranId() 获取依赖的异步事务id
 * @method void setParentTranId(string $ParentTranId) 设置依赖的异步事务id
 * @method ApiDatasourceConfig getApiDatasourceConfig() 获取API数据源配置
 * @method void setApiDatasourceConfig(ApiDatasourceConfig $ApiDatasourceConfig) 设置API数据源配置
 * @method array getParamList() 获取1
 * @method void setParamList(array $ParamList) 设置1
 * @method string getDlcExtInfo() 获取dlc高级参数
 * @method void setDlcExtInfo(string $DlcExtInfo) 设置dlc高级参数
 * @method string getQueryDbData() 获取是否查询数据库
 * @method void setQueryDbData(string $QueryDbData) 设置是否查询数据库
 * @method string getTableComment() 获取数据表备注
 * @method void setTableComment(string $TableComment) 设置数据表备注
 * @method integer getQueryFieldRemark() 获取是否查询字段备注
 * @method void setQueryFieldRemark(integer $QueryFieldRemark) 设置是否查询字段备注
 * @method array getFieldRemarkList() 获取字段备注列表
 * @method void setFieldRemarkList(array $FieldRemarkList) 设置字段备注列表
 */
class CreateDataTableRequest extends AbstractModel
{
    /**
     * @var integer 后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
     */
    public $Type;

    /**
     * @var string 数据表名称
     */
    public $Name;

    /**
     * @var integer 无
     */
    public $ProjectId;

    /**
     * @var integer 所属文件夹
     */
    public $FoldId;

    /**
     * @var string 数据源Id
     */
    public $DatasourceId;

    /**
     * @var string 物理表名
     */
    public $TableName;

    /**
     * @var string sql语句
     */
    public $Sql;

    /**
     * @var string excel地址
     */
    public $ExcelUrl;

    /**
     * @var array 字段配置
     */
    public $Fields;

    /**
     * @var integer 多表关联使用: 1:数据源原表,2:本地表,3:Excel表,4:API表
     */
    public $TableNodeType;

    /**
     * @var array 多表关联的原始表信息
     */
    public $Tables;

    /**
     * @var array 多表关联的关联信息
     */
    public $Joins;

    /**
     * @var string 补充信息，如api数据源信息，腾讯文档接入信息等
     */
    public $ExtInfo;

    /**
     * @var boolean 是否是异步
     */
    public $AsyncRequest;

    /**
     * @var string 依赖的异步事务id
     */
    public $ParentTranId;

    /**
     * @var ApiDatasourceConfig API数据源配置
     */
    public $ApiDatasourceConfig;

    /**
     * @var array 1
     */
    public $ParamList;

    /**
     * @var string dlc高级参数
     */
    public $DlcExtInfo;

    /**
     * @var string 是否查询数据库
     */
    public $QueryDbData;

    /**
     * @var string 数据表备注
     */
    public $TableComment;

    /**
     * @var integer 是否查询字段备注
     */
    public $QueryFieldRemark;

    /**
     * @var array 字段备注列表
     */
    public $FieldRemarkList;

    /**
     * @param integer $Type 后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
     * @param string $Name 数据表名称
     * @param integer $ProjectId 无
     * @param integer $FoldId 所属文件夹
     * @param string $DatasourceId 数据源Id
     * @param string $TableName 物理表名
     * @param string $Sql sql语句
     * @param string $ExcelUrl excel地址
     * @param array $Fields 字段配置
     * @param integer $TableNodeType 多表关联使用: 1:数据源原表,2:本地表,3:Excel表,4:API表
     * @param array $Tables 多表关联的原始表信息
     * @param array $Joins 多表关联的关联信息
     * @param string $ExtInfo 补充信息，如api数据源信息，腾讯文档接入信息等
     * @param boolean $AsyncRequest 是否是异步
     * @param string $ParentTranId 依赖的异步事务id
     * @param ApiDatasourceConfig $ApiDatasourceConfig API数据源配置
     * @param array $ParamList 1
     * @param string $DlcExtInfo dlc高级参数
     * @param string $QueryDbData 是否查询数据库
     * @param string $TableComment 数据表备注
     * @param integer $QueryFieldRemark 是否查询字段备注
     * @param array $FieldRemarkList 字段备注列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FoldId",$param) and $param["FoldId"] !== null) {
            $this->FoldId = $param["FoldId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ExcelUrl",$param) and $param["ExcelUrl"] !== null) {
            $this->ExcelUrl = $param["ExcelUrl"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new TableField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("TableNodeType",$param) and $param["TableNodeType"] !== null) {
            $this->TableNodeType = $param["TableNodeType"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new JoinSourceTable();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Joins",$param) and $param["Joins"] !== null) {
            $this->Joins = [];
            foreach ($param["Joins"] as $key => $value){
                $obj = new JoinRelation();
                $obj->deserialize($value);
                array_push($this->Joins, $obj);
            }
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("ParentTranId",$param) and $param["ParentTranId"] !== null) {
            $this->ParentTranId = $param["ParentTranId"];
        }

        if (array_key_exists("ApiDatasourceConfig",$param) and $param["ApiDatasourceConfig"] !== null) {
            $this->ApiDatasourceConfig = new ApiDatasourceConfig();
            $this->ApiDatasourceConfig->deserialize($param["ApiDatasourceConfig"]);
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamCreateDTO();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("DlcExtInfo",$param) and $param["DlcExtInfo"] !== null) {
            $this->DlcExtInfo = $param["DlcExtInfo"];
        }

        if (array_key_exists("QueryDbData",$param) and $param["QueryDbData"] !== null) {
            $this->QueryDbData = $param["QueryDbData"];
        }

        if (array_key_exists("TableComment",$param) and $param["TableComment"] !== null) {
            $this->TableComment = $param["TableComment"];
        }

        if (array_key_exists("QueryFieldRemark",$param) and $param["QueryFieldRemark"] !== null) {
            $this->QueryFieldRemark = $param["QueryFieldRemark"];
        }

        if (array_key_exists("FieldRemarkList",$param) and $param["FieldRemarkList"] !== null) {
            $this->FieldRemarkList = [];
            foreach ($param["FieldRemarkList"] as $key => $value){
                $obj = new FieldRemarkDTO();
                $obj->deserialize($value);
                array_push($this->FieldRemarkList, $obj);
            }
        }
    }
}
