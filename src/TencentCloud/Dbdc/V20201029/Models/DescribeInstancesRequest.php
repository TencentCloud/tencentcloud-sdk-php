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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceTypes() 获取集群类型: 0 一主一备, 1 一主两备...N-1 一主N备
 * @method void setInstanceTypes(array $InstanceTypes) 设置集群类型: 0 一主一备, 1 一主两备...N-1 一主N备
 * @method array getProductIds() 获取产品ID:  0 MYSQL，1 TDSQL
 * @method void setProductIds(array $ProductIds) 设置产品ID:  0 MYSQL，1 TDSQL
 * @method array getInstanceIds() 获取集群uuid: 如 dbdc-q810131s
 * @method void setInstanceIds(array $InstanceIds) 设置集群uuid: 如 dbdc-q810131s
 * @method boolean getFenceFlag() 获取是否按金融围笼标志搜索
 * @method void setFenceFlag(boolean $FenceFlag) 设置是否按金融围笼标志搜索
 * @method string getInstanceName() 获取按实例名字模糊匹配
 * @method void setInstanceName(string $InstanceName) 设置按实例名字模糊匹配
 * @method integer getPageSize() 获取每页数目, 整型
 * @method void setPageSize(integer $PageSize) 设置每页数目, 整型
 * @method integer getPageNumber() 获取页码, 整型
 * @method void setPageNumber(integer $PageNumber) 设置页码, 整型
 * @method string getOrderBy() 获取排序字段，枚举：createtime,groupname
 * @method void setOrderBy(string $OrderBy) 设置排序字段，枚举：createtime,groupname
 * @method string getOrderByType() 获取排序方式: asc升序, desc降序
 * @method void setOrderByType(string $OrderByType) 设置排序方式: asc升序, desc降序
 * @method integer getInstanceStatus() 获取集群状态: -2 已删除, -1 已隔离, 0 创建中, 1 运行中, 2 扩容中, 3 删除中
 * @method void setInstanceStatus(integer $InstanceStatus) 设置集群状态: -2 已删除, -1 已隔离, 0 创建中, 1 运行中, 2 扩容中, 3 删除中
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 集群类型: 0 一主一备, 1 一主两备...N-1 一主N备
     */
    public $InstanceTypes;

    /**
     * @var array 产品ID:  0 MYSQL，1 TDSQL
     */
    public $ProductIds;

    /**
     * @var array 集群uuid: 如 dbdc-q810131s
     */
    public $InstanceIds;

    /**
     * @var boolean 是否按金融围笼标志搜索
     */
    public $FenceFlag;

    /**
     * @var string 按实例名字模糊匹配
     */
    public $InstanceName;

    /**
     * @var integer 每页数目, 整型
     */
    public $PageSize;

    /**
     * @var integer 页码, 整型
     */
    public $PageNumber;

    /**
     * @var string 排序字段，枚举：createtime,groupname
     */
    public $OrderBy;

    /**
     * @var string 排序方式: asc升序, desc降序
     */
    public $OrderByType;

    /**
     * @var integer 集群状态: -2 已删除, -1 已隔离, 0 创建中, 1 运行中, 2 扩容中, 3 删除中
     */
    public $InstanceStatus;

    /**
     * @param array $InstanceTypes 集群类型: 0 一主一备, 1 一主两备...N-1 一主N备
     * @param array $ProductIds 产品ID:  0 MYSQL，1 TDSQL
     * @param array $InstanceIds 集群uuid: 如 dbdc-q810131s
     * @param boolean $FenceFlag 是否按金融围笼标志搜索
     * @param string $InstanceName 按实例名字模糊匹配
     * @param integer $PageSize 每页数目, 整型
     * @param integer $PageNumber 页码, 整型
     * @param string $OrderBy 排序字段，枚举：createtime,groupname
     * @param string $OrderByType 排序方式: asc升序, desc降序
     * @param integer $InstanceStatus 集群状态: -2 已删除, -1 已隔离, 0 创建中, 1 运行中, 2 扩容中, 3 删除中
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
        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("ProductIds",$param) and $param["ProductIds"] !== null) {
            $this->ProductIds = $param["ProductIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("FenceFlag",$param) and $param["FenceFlag"] !== null) {
            $this->FenceFlag = $param["FenceFlag"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
