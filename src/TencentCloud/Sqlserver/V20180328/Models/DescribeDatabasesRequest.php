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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases请求参数结构体
 *
 * @method array getInstanceIdSet() 获取实例ID
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置实例ID
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 * @method string getOrderByType() 获取排序规则（desc-降序，asc-升序），默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序规则（desc-降序，asc-升序），默认desc
 * @method string getEncryption() 获取是否已开启TDE加密，enable-已加密，disable-未加密
 * @method void setEncryption(string $Encryption) 设置是否已开启TDE加密，enable-已加密，disable-未加密
 * @method string getOrderBy() 获取排序字段（Name-按名称排序，CreateTime-按创建时间排序），默认CreateTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段（Name-按名称排序，CreateTime-按创建时间排序），默认CreateTime
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var array 实例ID
     */
    public $InstanceIdSet;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为20
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @var string 排序规则（desc-降序，asc-升序），默认desc
     */
    public $OrderByType;

    /**
     * @var string 是否已开启TDE加密，enable-已加密，disable-未加密
     */
    public $Encryption;

    /**
     * @var string 排序字段（Name-按名称排序，CreateTime-按创建时间排序），默认CreateTime
     */
    public $OrderBy;

    /**
     * @param array $InstanceIdSet 实例ID
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为20
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param string $Name 数据库名称
     * @param string $OrderByType 排序规则（desc-降序，asc-升序），默认desc
     * @param string $Encryption 是否已开启TDE加密，enable-已加密，disable-未加密
     * @param string $OrderBy 排序字段（Name-按名称排序，CreateTime-按创建时间排序），默认CreateTime
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
