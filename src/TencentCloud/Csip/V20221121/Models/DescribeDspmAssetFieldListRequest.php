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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmAssetFieldList请求参数结构体
 *
 * @method string getAssetId() 获取资产实例id
 * @method void setAssetId(string $AssetId) 设置资产实例id
 * @method string getDbName() 获取数据库名称
 * @method void setDbName(string $DbName) 设置数据库名称
 * @method string getTableName() 获取表名
 * @method void setTableName(string $TableName) 设置表名
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method Filter getFilter() 获取筛选项
 * @method void setFilter(Filter $Filter) 设置筛选项
 */
class DescribeDspmAssetFieldListRequest extends AbstractModel
{
    /**
     * @var string 资产实例id
     */
    public $AssetId;

    /**
     * @var string 数据库名称
     */
    public $DbName;

    /**
     * @var string 表名
     */
    public $TableName;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var Filter 筛选项
     */
    public $Filter;

    /**
     * @param string $AssetId 资产实例id
     * @param string $DbName 数据库名称
     * @param string $TableName 表名
     * @param array $MemberId 集团账号的成员id
     * @param Filter $Filter 筛选项
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
