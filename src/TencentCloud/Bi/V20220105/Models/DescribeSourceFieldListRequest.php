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
 * DescribeSourceFieldList请求参数结构体
 *
 * @method integer getDataSourceId() 获取数据源Id
 * @method void setDataSourceId(integer $DataSourceId) 设置数据源Id
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method string getSql() 获取sql内容
 * @method void setSql(string $Sql) 设置sql内容
 * @method integer getProjectId() 获取项目id
 * @method void setProjectId(integer $ProjectId) 设置项目id
 * @method boolean getAsyncRequest() 获取是否是异步
 * @method void setAsyncRequest(boolean $AsyncRequest) 设置是否是异步
 * @method string getTranId() 获取异步事务id
 * @method void setTranId(string $TranId) 设置异步事务id
 * @method array getParamList() 获取11
 * @method void setParamList(array $ParamList) 设置11
 * @method string getDlcExtInfo() 获取DLC扩展参数
 * @method void setDlcExtInfo(string $DlcExtInfo) 设置DLC扩展参数
 * @method string getQueryDbData() 获取是否查询数据库
 * @method void setQueryDbData(string $QueryDbData) 设置是否查询数据库
 * @method string getTableId() 获取数据表 Id
 * @method void setTableId(string $TableId) 设置数据表 Id
 * @method integer getTableType() 获取后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
 * @method void setTableType(integer $TableType) 设置后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
 */
class DescribeSourceFieldListRequest extends AbstractModel
{
    /**
     * @var integer 数据源Id
     */
    public $DataSourceId;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var string sql内容
     */
    public $Sql;

    /**
     * @var integer 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 是否是异步
     */
    public $AsyncRequest;

    /**
     * @var string 异步事务id
     */
    public $TranId;

    /**
     * @var array 11
     */
    public $ParamList;

    /**
     * @var string DLC扩展参数
     */
    public $DlcExtInfo;

    /**
     * @var string 是否查询数据库
     */
    public $QueryDbData;

    /**
     * @var string 数据表 Id
     */
    public $TableId;

    /**
     * @var integer 后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
     */
    public $TableType;

    /**
     * @param integer $DataSourceId 数据源Id
     * @param string $TableName 表名
     * @param string $Sql sql内容
     * @param integer $ProjectId 项目id
     * @param boolean $AsyncRequest 是否是异步
     * @param string $TranId 异步事务id
     * @param array $ParamList 11
     * @param string $DlcExtInfo DLC扩展参数
     * @param string $QueryDbData 是否查询数据库
     * @param string $TableId 数据表 Id
     * @param integer $TableType 后端提供字典：数据表类型，1、数据库建表，2、SQL建表，3、Excel上传，4、API接入，5、腾讯文档，6、云数据库，7、手工输入，8、关联查询
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
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

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }
    }
}
