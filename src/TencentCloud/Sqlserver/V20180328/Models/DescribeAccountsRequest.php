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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method string getName() 获取账号名称
 * @method void setName(string $Name) 设置账号名称
 * @method string getOrderBy() 获取createTime,updateTime,passTime" note:"排序字段，默认按照账号创建时间倒序
 * @method void setOrderBy(string $OrderBy) 设置createTime,updateTime,passTime" note:"排序字段，默认按照账号创建时间倒序
 * @method string getOrderByType() 获取排序规则（desc-降序，asc-升序），默认desc
 * @method void setOrderByType(string $OrderByType) 设置排序规则（desc-降序，asc-升序），默认desc
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为20
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var string 账号名称
     */
    public $Name;

    /**
     * @var string createTime,updateTime,passTime" note:"排序字段，默认按照账号创建时间倒序
     */
    public $OrderBy;

    /**
     * @var string 排序规则（desc-降序，asc-升序），默认desc
     */
    public $OrderByType;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为20
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param string $Name 账号名称
     * @param string $OrderBy createTime,updateTime,passTime" note:"排序字段，默认按照账号创建时间倒序
     * @param string $OrderByType 排序规则（desc-降序，asc-升序），默认desc
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
