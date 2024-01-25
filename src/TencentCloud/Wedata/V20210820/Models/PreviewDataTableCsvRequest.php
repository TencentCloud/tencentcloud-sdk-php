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
 * PreviewDataTableCsv请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getBucketName() 获取Cos 存储桶名称
 * @method void setBucketName(string $BucketName) 设置Cos 存储桶名称
 * @method string getFilePath() 获取文件在cos上的存储路径，该路径有固定前缀，/datastudio/data_manage/import/项目ID，example: /datastudio/data_manage/import/1460947878944567296/demo_2.csv
 * @method void setFilePath(string $FilePath) 设置文件在cos上的存储路径，该路径有固定前缀，/datastudio/data_manage/import/项目ID，example: /datastudio/data_manage/import/1460947878944567296/demo_2.csv
 * @method boolean getHeaderLine() 获取首行是否为字段名，默认为 false，如果选择 true，会将首行解析成列名，且在数据中会跳过第一行
 * @method void setHeaderLine(boolean $HeaderLine) 设置首行是否为字段名，默认为 false，如果选择 true，会将首行解析成列名，且在数据中会跳过第一行
 * @method string getColumnDelimiter() 获取字段分隔符，取值为 0,1,2,3,4,5，各值含义为0: \u0001(hive默认)，1: 竖线 （ | ） ，2: 空格，3: 分号，4: 英文逗号，5: 制表符 \t，如果没填或填错，默认为英文逗号
 * @method void setColumnDelimiter(string $ColumnDelimiter) 设置字段分隔符，取值为 0,1,2,3,4,5，各值含义为0: \u0001(hive默认)，1: 竖线 （ | ） ，2: 空格，3: 分号，4: 英文逗号，5: 制表符 \t，如果没填或填错，默认为英文逗号
 * @method string getEscape() 获取转义符，char 类型，只取当前参数的第一个字符，如果不传，默认为 \
 * @method void setEscape(string $Escape) 设置转义符，char 类型，只取当前参数的第一个字符，如果不传，默认为 \
 * @method string getQuote() 获取引号符，取值为 0、1，各个值的含义为 0: 英文单引号，1: 英文双引号，如果没填或填错，默认为英文双引号
 * @method void setQuote(string $Quote) 设置引号符，取值为 0、1，各个值的含义为 0: 英文单引号，1: 英文双引号，如果没填或填错，默认为英文双引号
 */
class PreviewDataTableCsvRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string Cos 存储桶名称
     */
    public $BucketName;

    /**
     * @var string 文件在cos上的存储路径，该路径有固定前缀，/datastudio/data_manage/import/项目ID，example: /datastudio/data_manage/import/1460947878944567296/demo_2.csv
     */
    public $FilePath;

    /**
     * @var boolean 首行是否为字段名，默认为 false，如果选择 true，会将首行解析成列名，且在数据中会跳过第一行
     */
    public $HeaderLine;

    /**
     * @var string 字段分隔符，取值为 0,1,2,3,4,5，各值含义为0: \u0001(hive默认)，1: 竖线 （ | ） ，2: 空格，3: 分号，4: 英文逗号，5: 制表符 \t，如果没填或填错，默认为英文逗号
     */
    public $ColumnDelimiter;

    /**
     * @var string 转义符，char 类型，只取当前参数的第一个字符，如果不传，默认为 \
     */
    public $Escape;

    /**
     * @var string 引号符，取值为 0、1，各个值的含义为 0: 英文单引号，1: 英文双引号，如果没填或填错，默认为英文双引号
     */
    public $Quote;

    /**
     * @param string $ProjectId 项目ID
     * @param string $BucketName Cos 存储桶名称
     * @param string $FilePath 文件在cos上的存储路径，该路径有固定前缀，/datastudio/data_manage/import/项目ID，example: /datastudio/data_manage/import/1460947878944567296/demo_2.csv
     * @param boolean $HeaderLine 首行是否为字段名，默认为 false，如果选择 true，会将首行解析成列名，且在数据中会跳过第一行
     * @param string $ColumnDelimiter 字段分隔符，取值为 0,1,2,3,4,5，各值含义为0: \u0001(hive默认)，1: 竖线 （ | ） ，2: 空格，3: 分号，4: 英文逗号，5: 制表符 \t，如果没填或填错，默认为英文逗号
     * @param string $Escape 转义符，char 类型，只取当前参数的第一个字符，如果不传，默认为 \
     * @param string $Quote 引号符，取值为 0、1，各个值的含义为 0: 英文单引号，1: 英文双引号，如果没填或填错，默认为英文双引号
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

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("HeaderLine",$param) and $param["HeaderLine"] !== null) {
            $this->HeaderLine = $param["HeaderLine"];
        }

        if (array_key_exists("ColumnDelimiter",$param) and $param["ColumnDelimiter"] !== null) {
            $this->ColumnDelimiter = $param["ColumnDelimiter"];
        }

        if (array_key_exists("Escape",$param) and $param["Escape"] !== null) {
            $this->Escape = $param["Escape"];
        }

        if (array_key_exists("Quote",$param) and $param["Quote"] !== null) {
            $this->Quote = $param["Quote"];
        }
    }
}
