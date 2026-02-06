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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBSCloneInstances请求参数结构体
 *
 * @method string getSourceInstanceId() 获取<p>源实例ID</p>
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置<p>源实例ID</p>
 * @method string getDBType() 获取<p>引擎类型</p>
 * @method void setDBType(string $DBType) 设置<p>引擎类型</p>
 * @method string getEndCreateTime() 获取<p>结束创建时间</p>
 * @method void setEndCreateTime(string $EndCreateTime) 设置<p>结束创建时间</p>
 * @method string getFilterCloneType() 获取<p>克隆类型: PITR 时间点 BackupSet 备份集</p>
 * @method void setFilterCloneType(string $FilterCloneType) 设置<p>克隆类型: PITR 时间点 BackupSet 备份集</p>
 * @method integer getLimit() 获取<p>查询数量[0,200]</p>
 * @method void setLimit(integer $Limit) 设置<p>查询数量[0,200]</p>
 * @method integer getOffset() 获取<p>查询偏移量[0,INF]</p>
 * @method void setOffset(integer $Offset) 设置<p>查询偏移量[0,INF]</p>
 * @method string getOrderBy() 获取<p>排序字段: CloneTime,CreateTime</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段: CloneTime,CreateTime</p>
 * @method string getOrderType() 获取<p>排序类型:ASC,DESC</p>
 * @method void setOrderType(string $OrderType) 设置<p>排序类型:ASC,DESC</p>
 * @method string getStartCreateTime() 获取<p>开始创建时间</p>
 * @method void setStartCreateTime(string $StartCreateTime) 设置<p>开始创建时间</p>
 */
class DescribeDBSCloneInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>源实例ID</p>
     */
    public $SourceInstanceId;

    /**
     * @var string <p>引擎类型</p>
     */
    public $DBType;

    /**
     * @var string <p>结束创建时间</p>
     */
    public $EndCreateTime;

    /**
     * @var string <p>克隆类型: PITR 时间点 BackupSet 备份集</p>
     */
    public $FilterCloneType;

    /**
     * @var integer <p>查询数量[0,200]</p>
     */
    public $Limit;

    /**
     * @var integer <p>查询偏移量[0,INF]</p>
     */
    public $Offset;

    /**
     * @var string <p>排序字段: CloneTime,CreateTime</p>
     */
    public $OrderBy;

    /**
     * @var string <p>排序类型:ASC,DESC</p>
     */
    public $OrderType;

    /**
     * @var string <p>开始创建时间</p>
     */
    public $StartCreateTime;

    /**
     * @param string $SourceInstanceId <p>源实例ID</p>
     * @param string $DBType <p>引擎类型</p>
     * @param string $EndCreateTime <p>结束创建时间</p>
     * @param string $FilterCloneType <p>克隆类型: PITR 时间点 BackupSet 备份集</p>
     * @param integer $Limit <p>查询数量[0,200]</p>
     * @param integer $Offset <p>查询偏移量[0,INF]</p>
     * @param string $OrderBy <p>排序字段: CloneTime,CreateTime</p>
     * @param string $OrderType <p>排序类型:ASC,DESC</p>
     * @param string $StartCreateTime <p>开始创建时间</p>
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
        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("EndCreateTime",$param) and $param["EndCreateTime"] !== null) {
            $this->EndCreateTime = $param["EndCreateTime"];
        }

        if (array_key_exists("FilterCloneType",$param) and $param["FilterCloneType"] !== null) {
            $this->FilterCloneType = $param["FilterCloneType"];
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

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("StartCreateTime",$param) and $param["StartCreateTime"] !== null) {
            $this->StartCreateTime = $param["StartCreateTime"];
        }
    }
}
