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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsSnapshots请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getSnapshotId() 获取快照ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID
 * @method integer getOffset() 获取分页起始位置
 * @method void setOffset(integer $Offset) 设置分页起始位置
 * @method integer getLimit() 获取页面长度
 * @method void setLimit(integer $Limit) 设置页面长度
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method string getOrderField() 获取排序取值
 * @method void setOrderField(string $OrderField) 设置排序取值
 * @method string getOrder() 获取排序 升序或者降序
 * @method void setOrder(string $Order) 设置排序 升序或者降序
 */
class DescribeCfsSnapshotsRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 快照ID
     */
    public $SnapshotId;

    /**
     * @var integer 分页起始位置
     */
    public $Offset;

    /**
     * @var integer 页面长度
     */
    public $Limit;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var string 排序取值
     */
    public $OrderField;

    /**
     * @var string 排序 升序或者降序
     */
    public $Order;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param string $SnapshotId 快照ID
     * @param integer $Offset 分页起始位置
     * @param integer $Limit 页面长度
     * @param array $Filters 过滤条件
     * @param string $OrderField 排序取值
     * @param string $Order 排序 升序或者降序
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
