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
 * ImportTableData请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getDatasourceId() 获取数据源id
 * @method void setDatasourceId(integer $DatasourceId) 设置数据源id
 * @method TableHybrisReq getTableRequest() 获取数据表基本信息
 * @method void setTableRequest(TableHybrisReq $TableRequest) 设置数据表基本信息
 * @method string getColumnDelimiter() 获取列分隔符
0， \u0001
1, |
2, 空格
3，分号
4，逗号 
 * @method void setColumnDelimiter(string $ColumnDelimiter) 设置列分隔符
0， \u0001
1, |
2, 空格
3，分号
4，逗号 
 * @method integer getHeaderLine() 获取1 是， 0 否
 * @method void setHeaderLine(integer $HeaderLine) 设置1 是， 0 否
 * @method string getQuote() 获取CSV序列化字段域符,列引号， 
0， 单引号
1，双引号
 * @method void setQuote(string $Quote) 设置CSV序列化字段域符,列引号， 
0， 单引号
1，双引号
 * @method string getDatasourcePath() 获取源数据存储路径(如cos，需带上桶名)
 * @method void setDatasourcePath(string $DatasourcePath) 设置源数据存储路径(如cos，需带上桶名)
 * @method string getStorageDataSourceType() 获取数据源存储类型（目前仅支持COS，CSP）
 * @method void setStorageDataSourceType(string $StorageDataSourceType) 设置数据源存储类型（目前仅支持COS，CSP）
 * @method string getFileFormat() 获取文件格式（目前仅支持CSV,TSV）
 * @method void setFileFormat(string $FileFormat) 设置文件格式（目前仅支持CSV,TSV）
 * @method string getImportTableType() 获取导入表类型（目前仅支持HIVE）
 * @method void setImportTableType(string $ImportTableType) 设置导入表类型（目前仅支持HIVE）
 * @method string getMsType() 获取数据源类型（目前仅支持HIVE）
 * @method void setMsType(string $MsType) 设置数据源类型（目前仅支持HIVE）
 * @method string getDescription() 获取表描述
 * @method void setDescription(string $Description) 设置表描述
 * @method string getNameCn() 获取nameCn中文名
 * @method void setNameCn(string $NameCn) 设置nameCn中文名
 * @method integer getPrivilege() 获取表权限类型：0: owner和项目所有成员都有权限 1: 仅owner和项目管理员有权限
 * @method void setPrivilege(integer $Privilege) 设置表权限类型：0: owner和项目所有成员都有权限 1: 仅owner和项目管理员有权限
 * @method string getEscape() 获取CSV序列化转义符
 * @method void setEscape(string $Escape) 设置CSV序列化转义符
 * @method string getNullFormat() 获取空值格式
 * @method void setNullFormat(string $NullFormat) 设置空值格式
 * @method string getFileEncode() 获取文件编码方式 UTF-8/GBK
 * @method void setFileEncode(string $FileEncode) 设置文件编码方式 UTF-8/GBK
 * @method string getBucketName() 获取桶名， cos存储是必传
 * @method void setBucketName(string $BucketName) 设置桶名， cos存储是必传
 */
class ImportTableDataRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 数据源id
     */
    public $DatasourceId;

    /**
     * @var TableHybrisReq 数据表基本信息
     */
    public $TableRequest;

    /**
     * @var string 列分隔符
0， \u0001
1, |
2, 空格
3，分号
4，逗号 
     */
    public $ColumnDelimiter;

    /**
     * @var integer 1 是， 0 否
     */
    public $HeaderLine;

    /**
     * @var string CSV序列化字段域符,列引号， 
0， 单引号
1，双引号
     */
    public $Quote;

    /**
     * @var string 源数据存储路径(如cos，需带上桶名)
     */
    public $DatasourcePath;

    /**
     * @var string 数据源存储类型（目前仅支持COS，CSP）
     */
    public $StorageDataSourceType;

    /**
     * @var string 文件格式（目前仅支持CSV,TSV）
     */
    public $FileFormat;

    /**
     * @var string 导入表类型（目前仅支持HIVE）
     */
    public $ImportTableType;

    /**
     * @var string 数据源类型（目前仅支持HIVE）
     */
    public $MsType;

    /**
     * @var string 表描述
     */
    public $Description;

    /**
     * @var string nameCn中文名
     */
    public $NameCn;

    /**
     * @var integer 表权限类型：0: owner和项目所有成员都有权限 1: 仅owner和项目管理员有权限
     */
    public $Privilege;

    /**
     * @var string CSV序列化转义符
     */
    public $Escape;

    /**
     * @var string 空值格式
     */
    public $NullFormat;

    /**
     * @var string 文件编码方式 UTF-8/GBK
     */
    public $FileEncode;

    /**
     * @var string 桶名， cos存储是必传
     */
    public $BucketName;

    /**
     * @param string $ProjectId 项目id
     * @param integer $DatasourceId 数据源id
     * @param TableHybrisReq $TableRequest 数据表基本信息
     * @param string $ColumnDelimiter 列分隔符
0， \u0001
1, |
2, 空格
3，分号
4，逗号 
     * @param integer $HeaderLine 1 是， 0 否
     * @param string $Quote CSV序列化字段域符,列引号， 
0， 单引号
1，双引号
     * @param string $DatasourcePath 源数据存储路径(如cos，需带上桶名)
     * @param string $StorageDataSourceType 数据源存储类型（目前仅支持COS，CSP）
     * @param string $FileFormat 文件格式（目前仅支持CSV,TSV）
     * @param string $ImportTableType 导入表类型（目前仅支持HIVE）
     * @param string $MsType 数据源类型（目前仅支持HIVE）
     * @param string $Description 表描述
     * @param string $NameCn nameCn中文名
     * @param integer $Privilege 表权限类型：0: owner和项目所有成员都有权限 1: 仅owner和项目管理员有权限
     * @param string $Escape CSV序列化转义符
     * @param string $NullFormat 空值格式
     * @param string $FileEncode 文件编码方式 UTF-8/GBK
     * @param string $BucketName 桶名， cos存储是必传
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DatasourceId",$param) and $param["DatasourceId"] !== null) {
            $this->DatasourceId = $param["DatasourceId"];
        }

        if (array_key_exists("TableRequest",$param) and $param["TableRequest"] !== null) {
            $this->TableRequest = new TableHybrisReq();
            $this->TableRequest->deserialize($param["TableRequest"]);
        }

        if (array_key_exists("ColumnDelimiter",$param) and $param["ColumnDelimiter"] !== null) {
            $this->ColumnDelimiter = $param["ColumnDelimiter"];
        }

        if (array_key_exists("HeaderLine",$param) and $param["HeaderLine"] !== null) {
            $this->HeaderLine = $param["HeaderLine"];
        }

        if (array_key_exists("Quote",$param) and $param["Quote"] !== null) {
            $this->Quote = $param["Quote"];
        }

        if (array_key_exists("DatasourcePath",$param) and $param["DatasourcePath"] !== null) {
            $this->DatasourcePath = $param["DatasourcePath"];
        }

        if (array_key_exists("StorageDataSourceType",$param) and $param["StorageDataSourceType"] !== null) {
            $this->StorageDataSourceType = $param["StorageDataSourceType"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("ImportTableType",$param) and $param["ImportTableType"] !== null) {
            $this->ImportTableType = $param["ImportTableType"];
        }

        if (array_key_exists("MsType",$param) and $param["MsType"] !== null) {
            $this->MsType = $param["MsType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NameCn",$param) and $param["NameCn"] !== null) {
            $this->NameCn = $param["NameCn"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("Escape",$param) and $param["Escape"] !== null) {
            $this->Escape = $param["Escape"];
        }

        if (array_key_exists("NullFormat",$param) and $param["NullFormat"] !== null) {
            $this->NullFormat = $param["NullFormat"];
        }

        if (array_key_exists("FileEncode",$param) and $param["FileEncode"] !== null) {
            $this->FileEncode = $param["FileEncode"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }
    }
}
