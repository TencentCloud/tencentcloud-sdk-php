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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseObjects请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例 ID，形如：tdsql3-42f40429.</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID，形如：tdsql3-42f40429.</p>
 * @method string getDbName() 获取<p>数据库名称，通过 DescribeDatabases 接口获取。</p>
 * @method void setDbName(string $DbName) 设置<p>数据库名称，通过 DescribeDatabases 接口获取。</p>
 * @method integer getOffset() 获取<p>分页索引</p>
 * @method void setOffset(integer $Offset) 设置<p>分页索引</p>
 * @method integer getLimit() 获取<p>每页数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p>
 * @method string getTableRegexp() 获取<p>数据表名称匹配表达式</p>
 * @method void setTableRegexp(string $TableRegexp) 设置<p>数据表名称匹配表达式</p>
 */
class DescribeDatabaseObjectsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，形如：tdsql3-42f40429.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>数据库名称，通过 DescribeDatabases 接口获取。</p>
     */
    public $DbName;

    /**
     * @var integer <p>分页索引</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量</p>
     */
    public $Limit;

    /**
     * @var string <p>数据表名称匹配表达式</p>
     */
    public $TableRegexp;

    /**
     * @param string $InstanceId <p>实例 ID，形如：tdsql3-42f40429.</p>
     * @param string $DbName <p>数据库名称，通过 DescribeDatabases 接口获取。</p>
     * @param integer $Offset <p>分页索引</p>
     * @param integer $Limit <p>每页数量</p>
     * @param string $TableRegexp <p>数据表名称匹配表达式</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TableRegexp",$param) and $param["TableRegexp"] !== null) {
            $this->TableRegexp = $param["TableRegexp"];
        }
    }
}
