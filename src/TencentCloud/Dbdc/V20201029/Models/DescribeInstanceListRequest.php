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
 * DescribeInstanceList请求参数结构体
 *
 * @method integer getLimit() 获取分页返回数量
 * @method void setLimit(integer $Limit) 设置分页返回数量
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getOrderBy() 获取排序字段，createTime,instancename两者之一
 * @method void setOrderBy(string $OrderBy) 设置排序字段，createTime,instancename两者之一
 * @method string getSortBy() 获取排序规则，desc,asc两者之一
 * @method void setSortBy(string $SortBy) 设置排序规则，desc,asc两者之一
 * @method array getProductId() 获取按产品过滤，0:CDB, 1:TDSQL
 * @method void setProductId(array $ProductId) 设置按产品过滤，0:CDB, 1:TDSQL
 * @method array getInstanceId() 获取按实例ID过滤
 * @method void setInstanceId(array $InstanceId) 设置按实例ID过滤
 * @method array getInstanceName() 获取按实例名称过滤
 * @method void setInstanceName(array $InstanceName) 设置按实例名称过滤
 * @method array getFenceId() 获取按金融围笼ID过滤
 * @method void setFenceId(array $FenceId) 设置按金融围笼ID过滤
 * @method array getStatus() 获取按实例状态过滤, -1:已隔离, 0:创建中, 1:运行中, 2:扩容中, 3:删除中
 * @method void setStatus(array $Status) 设置按实例状态过滤, -1:已隔离, 0:创建中, 1:运行中, 2:扩容中, 3:删除中
 * @method array getClusterId() 获取按所属集群ID过滤
 * @method void setClusterId(array $ClusterId) 设置按所属集群ID过滤
 */
class DescribeInstanceListRequest extends AbstractModel
{
    /**
     * @var integer 分页返回数量
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string 排序字段，createTime,instancename两者之一
     */
    public $OrderBy;

    /**
     * @var string 排序规则，desc,asc两者之一
     */
    public $SortBy;

    /**
     * @var array 按产品过滤，0:CDB, 1:TDSQL
     */
    public $ProductId;

    /**
     * @var array 按实例ID过滤
     */
    public $InstanceId;

    /**
     * @var array 按实例名称过滤
     */
    public $InstanceName;

    /**
     * @var array 按金融围笼ID过滤
     */
    public $FenceId;

    /**
     * @var array 按实例状态过滤, -1:已隔离, 0:创建中, 1:运行中, 2:扩容中, 3:删除中
     */
    public $Status;

    /**
     * @var array 按所属集群ID过滤
     */
    public $ClusterId;

    /**
     * @param integer $Limit 分页返回数量
     * @param integer $Offset 分页偏移量
     * @param string $OrderBy 排序字段，createTime,instancename两者之一
     * @param string $SortBy 排序规则，desc,asc两者之一
     * @param array $ProductId 按产品过滤，0:CDB, 1:TDSQL
     * @param array $InstanceId 按实例ID过滤
     * @param array $InstanceName 按实例名称过滤
     * @param array $FenceId 按金融围笼ID过滤
     * @param array $Status 按实例状态过滤, -1:已隔离, 0:创建中, 1:运行中, 2:扩容中, 3:删除中
     * @param array $ClusterId 按所属集群ID过滤
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
