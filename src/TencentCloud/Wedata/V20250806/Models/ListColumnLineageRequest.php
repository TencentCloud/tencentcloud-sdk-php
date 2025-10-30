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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListColumnLineage请求参数结构体
 *
 * @method string getTableUniqueId() 获取表唯一ID
 * @method void setTableUniqueId(string $TableUniqueId) 设置表唯一ID
 * @method string getDirection() 获取血缘方向 INPUT｜OUTPUT
 * @method void setDirection(string $Direction) 设置血缘方向 INPUT｜OUTPUT
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getColumnName() 获取列名称
 * @method void setColumnName(string $ColumnName) 设置列名称
 * @method string getPlatform() 获取来源：WEDATA|THIRD 默认WEDATA
 * @method void setPlatform(string $Platform) 设置来源：WEDATA|THIRD 默认WEDATA
 */
class ListColumnLineageRequest extends AbstractModel
{
    /**
     * @var string 表唯一ID
     */
    public $TableUniqueId;

    /**
     * @var string 血缘方向 INPUT｜OUTPUT
     */
    public $Direction;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 列名称
     */
    public $ColumnName;

    /**
     * @var string 来源：WEDATA|THIRD 默认WEDATA
     */
    public $Platform;

    /**
     * @param string $TableUniqueId 表唯一ID
     * @param string $Direction 血缘方向 INPUT｜OUTPUT
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页大小
     * @param string $ColumnName 列名称
     * @param string $Platform 来源：WEDATA|THIRD 默认WEDATA
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
        if (array_key_exists("TableUniqueId",$param) and $param["TableUniqueId"] !== null) {
            $this->TableUniqueId = $param["TableUniqueId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ColumnName",$param) and $param["ColumnName"] !== null) {
            $this->ColumnName = $param["ColumnName"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
