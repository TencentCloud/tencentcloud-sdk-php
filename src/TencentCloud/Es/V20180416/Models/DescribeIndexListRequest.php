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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIndexList请求参数结构体
 *
 * @method string getIndexType() 获取索引类型。auto：自治索引；normal：普通索引
 * @method void setIndexType(string $IndexType) 设置索引类型。auto：自治索引；normal：普通索引
 * @method string getInstanceId() 获取ES集群ID
 * @method void setInstanceId(string $InstanceId) 设置ES集群ID
 * @method string getIndexName() 获取索引名，若填空则获取所有索引
 * @method void setIndexName(string $IndexName) 设置索引名，若填空则获取所有索引
 * @method string getUsername() 获取集群访问用户名
 * @method void setUsername(string $Username) 设置集群访问用户名
 * @method string getPassword() 获取集群访问密码
 * @method void setPassword(string $Password) 设置集群访问密码
 * @method integer getOffset() 获取分页起始位置
 * @method void setOffset(integer $Offset) 设置分页起始位置
 * @method integer getLimit() 获取一页展示数量
 * @method void setLimit(integer $Limit) 设置一页展示数量
 * @method string getOrderBy() 获取排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
 * @method void setOrderBy(string $OrderBy) 设置排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
 * @method array getIndexStatusList() 获取过滤索引状态
 * @method void setIndexStatusList(array $IndexStatusList) 设置过滤索引状态
 * @method string getOrder() 获取排序顺序，支持asc、desc
 * @method void setOrder(string $Order) 设置排序顺序，支持asc、desc
 */
class DescribeIndexListRequest extends AbstractModel
{
    /**
     * @var string 索引类型。auto：自治索引；normal：普通索引
     */
    public $IndexType;

    /**
     * @var string ES集群ID
     */
    public $InstanceId;

    /**
     * @var string 索引名，若填空则获取所有索引
     */
    public $IndexName;

    /**
     * @var string 集群访问用户名
     */
    public $Username;

    /**
     * @var string 集群访问密码
     */
    public $Password;

    /**
     * @var integer 分页起始位置
     */
    public $Offset;

    /**
     * @var integer 一页展示数量
     */
    public $Limit;

    /**
     * @var string 排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
     */
    public $OrderBy;

    /**
     * @var array 过滤索引状态
     */
    public $IndexStatusList;

    /**
     * @var string 排序顺序，支持asc、desc
     */
    public $Order;

    /**
     * @param string $IndexType 索引类型。auto：自治索引；normal：普通索引
     * @param string $InstanceId ES集群ID
     * @param string $IndexName 索引名，若填空则获取所有索引
     * @param string $Username 集群访问用户名
     * @param string $Password 集群访问密码
     * @param integer $Offset 分页起始位置
     * @param integer $Limit 一页展示数量
     * @param string $OrderBy 排序字段，支持索引名：IndexName、索引存储量：IndexStorage、索引创建时间：IndexCreateTime
     * @param array $IndexStatusList 过滤索引状态
     * @param string $Order 排序顺序，支持asc、desc
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
        if (array_key_exists("IndexType",$param) and $param["IndexType"] !== null) {
            $this->IndexType = $param["IndexType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IndexName",$param) and $param["IndexName"] !== null) {
            $this->IndexName = $param["IndexName"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("IndexStatusList",$param) and $param["IndexStatusList"] !== null) {
            $this->IndexStatusList = $param["IndexStatusList"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
