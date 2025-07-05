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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetOverview返回参数结构体
 *
 * @method integer getDBInstanceNums() 获取数据库实例id
 * @method void setDBInstanceNums(integer $DBInstanceNums) 设置数据库实例id
 * @method integer getDBNums() 获取数据库个数
 * @method void setDBNums(integer $DBNums) 设置数据库个数
 * @method integer getTableNums() 获取表的个数
 * @method void setTableNums(integer $TableNums) 设置表的个数
 * @method integer getFieldNums() 获取字段个数
 * @method void setFieldNums(integer $FieldNums) 设置字段个数
 * @method array getDBInstanceDistribution() 获取数据库实例的分布情况
 * @method void setDBInstanceDistribution(array $DBInstanceDistribution) 设置数据库实例的分布情况
 * @method array getDBDistribution() 获取db分布情况
 * @method void setDBDistribution(array $DBDistribution) 设置db分布情况
 * @method integer getBucketNums() 获取cos桶的数量
 * @method void setBucketNums(integer $BucketNums) 设置cos桶的数量
 * @method integer getFileNums() 获取文件个数
 * @method void setFileNums(integer $FileNums) 设置文件个数
 * @method string getRemark() 获取用于对用户进行提示信息
 * @method void setRemark(string $Remark) 设置用于对用户进行提示信息
 * @method integer getEsInstanceNums() 获取es实例数量
 * @method void setEsInstanceNums(integer $EsInstanceNums) 设置es实例数量
 * @method integer getEsIndexNums() 获取es索引数量
 * @method void setEsIndexNums(integer $EsIndexNums) 设置es索引数量
 * @method integer getEsFieldNums() 获取es字段数量
 * @method void setEsFieldNums(integer $EsFieldNums) 设置es字段数量
 * @method integer getMongoInstanceNums() 获取mongo实例数量
 * @method void setMongoInstanceNums(integer $MongoInstanceNums) 设置mongo实例数量
 * @method integer getMongoDbNums() 获取mongo数据库数量
 * @method void setMongoDbNums(integer $MongoDbNums) 设置mongo数据库数量
 * @method integer getMongoColNums() 获取mongo集合数量
 * @method void setMongoColNums(integer $MongoColNums) 设置mongo集合数量
 * @method integer getMongoFieldNums() 获取mongo字段数量
 * @method void setMongoFieldNums(integer $MongoFieldNums) 设置mongo字段数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetOverviewResponse extends AbstractModel
{
    /**
     * @var integer 数据库实例id
     */
    public $DBInstanceNums;

    /**
     * @var integer 数据库个数
     */
    public $DBNums;

    /**
     * @var integer 表的个数
     */
    public $TableNums;

    /**
     * @var integer 字段个数
     */
    public $FieldNums;

    /**
     * @var array 数据库实例的分布情况
     */
    public $DBInstanceDistribution;

    /**
     * @var array db分布情况
     */
    public $DBDistribution;

    /**
     * @var integer cos桶的数量
     */
    public $BucketNums;

    /**
     * @var integer 文件个数
     */
    public $FileNums;

    /**
     * @var string 用于对用户进行提示信息
     */
    public $Remark;

    /**
     * @var integer es实例数量
     */
    public $EsInstanceNums;

    /**
     * @var integer es索引数量
     */
    public $EsIndexNums;

    /**
     * @var integer es字段数量
     */
    public $EsFieldNums;

    /**
     * @var integer mongo实例数量
     */
    public $MongoInstanceNums;

    /**
     * @var integer mongo数据库数量
     */
    public $MongoDbNums;

    /**
     * @var integer mongo集合数量
     */
    public $MongoColNums;

    /**
     * @var integer mongo字段数量
     */
    public $MongoFieldNums;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $DBInstanceNums 数据库实例id
     * @param integer $DBNums 数据库个数
     * @param integer $TableNums 表的个数
     * @param integer $FieldNums 字段个数
     * @param array $DBInstanceDistribution 数据库实例的分布情况
     * @param array $DBDistribution db分布情况
     * @param integer $BucketNums cos桶的数量
     * @param integer $FileNums 文件个数
     * @param string $Remark 用于对用户进行提示信息
     * @param integer $EsInstanceNums es实例数量
     * @param integer $EsIndexNums es索引数量
     * @param integer $EsFieldNums es字段数量
     * @param integer $MongoInstanceNums mongo实例数量
     * @param integer $MongoDbNums mongo数据库数量
     * @param integer $MongoColNums mongo集合数量
     * @param integer $MongoFieldNums mongo字段数量
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DBInstanceNums",$param) and $param["DBInstanceNums"] !== null) {
            $this->DBInstanceNums = $param["DBInstanceNums"];
        }

        if (array_key_exists("DBNums",$param) and $param["DBNums"] !== null) {
            $this->DBNums = $param["DBNums"];
        }

        if (array_key_exists("TableNums",$param) and $param["TableNums"] !== null) {
            $this->TableNums = $param["TableNums"];
        }

        if (array_key_exists("FieldNums",$param) and $param["FieldNums"] !== null) {
            $this->FieldNums = $param["FieldNums"];
        }

        if (array_key_exists("DBInstanceDistribution",$param) and $param["DBInstanceDistribution"] !== null) {
            $this->DBInstanceDistribution = [];
            foreach ($param["DBInstanceDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->DBInstanceDistribution, $obj);
            }
        }

        if (array_key_exists("DBDistribution",$param) and $param["DBDistribution"] !== null) {
            $this->DBDistribution = [];
            foreach ($param["DBDistribution"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->DBDistribution, $obj);
            }
        }

        if (array_key_exists("BucketNums",$param) and $param["BucketNums"] !== null) {
            $this->BucketNums = $param["BucketNums"];
        }

        if (array_key_exists("FileNums",$param) and $param["FileNums"] !== null) {
            $this->FileNums = $param["FileNums"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EsInstanceNums",$param) and $param["EsInstanceNums"] !== null) {
            $this->EsInstanceNums = $param["EsInstanceNums"];
        }

        if (array_key_exists("EsIndexNums",$param) and $param["EsIndexNums"] !== null) {
            $this->EsIndexNums = $param["EsIndexNums"];
        }

        if (array_key_exists("EsFieldNums",$param) and $param["EsFieldNums"] !== null) {
            $this->EsFieldNums = $param["EsFieldNums"];
        }

        if (array_key_exists("MongoInstanceNums",$param) and $param["MongoInstanceNums"] !== null) {
            $this->MongoInstanceNums = $param["MongoInstanceNums"];
        }

        if (array_key_exists("MongoDbNums",$param) and $param["MongoDbNums"] !== null) {
            $this->MongoDbNums = $param["MongoDbNums"];
        }

        if (array_key_exists("MongoColNums",$param) and $param["MongoColNums"] !== null) {
            $this->MongoColNums = $param["MongoColNums"];
        }

        if (array_key_exists("MongoFieldNums",$param) and $param["MongoFieldNums"] !== null) {
            $this->MongoFieldNums = $param["MongoFieldNums"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
