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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileBackupObjects请求参数结构体
 *
 * @method string getBackupId() 获取<p>备份实例ID</p>
 * @method void setBackupId(string $BackupId) 设置<p>备份实例ID</p>
 * @method string getPath() 获取<p>浏览路径</p>
 * @method void setPath(string $Path) 设置<p>浏览路径</p>
 * @method integer getOffset() 获取<p>偏移量，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0</p>
 * @method integer getLimit() 获取<p>返回数量，默认50，最大1000</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认50，最大1000</p>
 * @method string getOrderField() 获取<p>排序字段</p><p>枚举值：</p><ul><li>name： 文件名称</li></ul><p>默认值：name</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段</p><p>枚举值：</p><ul><li>name： 文件名称</li></ul><p>默认值：name</p>
 * @method string getOrder() 获取<p>排序方式</p><p>枚举值：</p><ul><li>asc： 升序排序</li><li>desc： 降序排序</li></ul><p>默认值：asc</p>
 * @method void setOrder(string $Order) 设置<p>排序方式</p><p>枚举值：</p><ul><li>asc： 升序排序</li><li>desc： 降序排序</li></ul><p>默认值：asc</p>
 * @method string getObjectType() 获取<p>返回模式</p><p>枚举值：</p><ul><li>all： 返回目录和文件</li><li>dir： 仅返回目录</li><li>file： 仅返回文件（含符号连接）</li></ul>
 * @method void setObjectType(string $ObjectType) 设置<p>返回模式</p><p>枚举值：</p><ul><li>all： 返回目录和文件</li><li>dir： 仅返回目录</li><li>file： 仅返回文件（含符号连接）</li></ul>
 */
class DescribeFileBackupObjectsRequest extends AbstractModel
{
    /**
     * @var string <p>备份实例ID</p>
     */
    public $BackupId;

    /**
     * @var string <p>浏览路径</p>
     */
    public $Path;

    /**
     * @var integer <p>偏移量，默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认50，最大1000</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段</p><p>枚举值：</p><ul><li>name： 文件名称</li></ul><p>默认值：name</p>
     */
    public $OrderField;

    /**
     * @var string <p>排序方式</p><p>枚举值：</p><ul><li>asc： 升序排序</li><li>desc： 降序排序</li></ul><p>默认值：asc</p>
     */
    public $Order;

    /**
     * @var string <p>返回模式</p><p>枚举值：</p><ul><li>all： 返回目录和文件</li><li>dir： 仅返回目录</li><li>file： 仅返回文件（含符号连接）</li></ul>
     */
    public $ObjectType;

    /**
     * @param string $BackupId <p>备份实例ID</p>
     * @param string $Path <p>浏览路径</p>
     * @param integer $Offset <p>偏移量，默认0</p>
     * @param integer $Limit <p>返回数量，默认50，最大1000</p>
     * @param string $OrderField <p>排序字段</p><p>枚举值：</p><ul><li>name： 文件名称</li></ul><p>默认值：name</p>
     * @param string $Order <p>排序方式</p><p>枚举值：</p><ul><li>asc： 升序排序</li><li>desc： 降序排序</li></ul><p>默认值：asc</p>
     * @param string $ObjectType <p>返回模式</p><p>枚举值：</p><ul><li>all： 返回目录和文件</li><li>dir： 仅返回目录</li><li>file： 仅返回文件（含符号连接）</li></ul>
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }
    }
}
