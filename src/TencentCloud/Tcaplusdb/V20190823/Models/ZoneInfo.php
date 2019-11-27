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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getLogicZoneId() 获取大区ID
 * @method void setLogicZoneId(string $LogicZoneId) 设置大区ID
 * @method string getZoneName() 获取大区名称
 * @method void setZoneName(string $ZoneName) 设置大区名称
 * @method string getCreatedTime() 获取大区创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置大区创建时间
 * @method integer getTableCount() 获取大区表格数量
 * @method void setTableCount(integer $TableCount) 设置大区表格数量
 * @method integer getTotalSize() 获取大区表格存储总量（MB）
 * @method void setTotalSize(integer $TotalSize) 设置大区表格存储总量（MB）
 */

/**
 *大区详细信息
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 大区ID
     */
    public $LogicZoneId;

    /**
     * @var string 大区名称
     */
    public $ZoneName;

    /**
     * @var string 大区创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 大区表格数量
     */
    public $TableCount;

    /**
     * @var integer 大区表格存储总量（MB）
     */
    public $TotalSize;
    /**
     * @param string $LogicZoneId 大区ID
     * @param string $ZoneName 大区名称
     * @param string $CreatedTime 大区创建时间
     * @param integer $TableCount 大区表格数量
     * @param integer $TotalSize 大区表格存储总量（MB）
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LogicZoneId",$param) and $param["LogicZoneId"] !== null) {
            $this->LogicZoneId = $param["LogicZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TableCount",$param) and $param["TableCount"] !== null) {
            $this->TableCount = $param["TableCount"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }
    }
}
