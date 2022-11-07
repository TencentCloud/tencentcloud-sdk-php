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
 * DescribeTableInfoList请求参数结构体
 *
 * @method array getFilters() 获取表名
 * @method void setFilters(array $Filters) 设置表名
 * @method string getConnectionType() 获取如果是hive这里写rpc，如果是其他类型不传
 * @method void setConnectionType(string $ConnectionType) 设置如果是hive这里写rpc，如果是其他类型不传
 * @method string getCatalog() 获取数据库源类型
 * @method void setCatalog(string $Catalog) 设置数据库源类型
 */
class DescribeTableInfoListRequest extends AbstractModel
{
    /**
     * @var array 表名
     */
    public $Filters;

    /**
     * @var string 如果是hive这里写rpc，如果是其他类型不传
     */
    public $ConnectionType;

    /**
     * @var string 数据库源类型
     */
    public $Catalog;

    /**
     * @param array $Filters 表名
     * @param string $ConnectionType 如果是hive这里写rpc，如果是其他类型不传
     * @param string $Catalog 数据库源类型
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }
    }
}
