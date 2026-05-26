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
 * DescribeDBSBackupSets请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getBackupSetId() 获取<p>实例备份集ID</p>
 * @method void setBackupSetId(integer $BackupSetId) 设置<p>实例备份集ID</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method BackupSetsReqFilter getFilterBy() 获取<p>过滤条件</p>
 * @method void setFilterBy(BackupSetsReqFilter $FilterBy) 设置<p>过滤条件</p>
 * @method integer getLimit() 获取<p>单次查询数量[0,200]</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询数量[0,200]</p>
 * @method integer getOffset() 获取<p>本次查询偏移[0,INF]</p>
 * @method void setOffset(integer $Offset) 设置<p>本次查询偏移[0,INF]</p>
 * @method string getOrderBy() 获取<p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
 * @method string getOrderType() 获取<p>ASC,DESC</p>
 * @method void setOrderType(string $OrderType) 设置<p>ASC,DESC</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 */
class DescribeDBSBackupSetsRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>实例备份集ID</p>
     */
    public $BackupSetId;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var BackupSetsReqFilter <p>过滤条件</p>
     */
    public $FilterBy;

    /**
     * @var integer <p>单次查询数量[0,200]</p>
     */
    public $Limit;

    /**
     * @var integer <p>本次查询偏移[0,INF]</p>
     */
    public $Offset;

    /**
     * @var string <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
     */
    public $OrderBy;

    /**
     * @var string <p>ASC,DESC</p>
     */
    public $OrderType;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $BackupSetId <p>实例备份集ID</p>
     * @param string $EndTime <p>结束时间</p>
     * @param BackupSetsReqFilter $FilterBy <p>过滤条件</p>
     * @param integer $Limit <p>单次查询数量[0,200]</p>
     * @param integer $Offset <p>本次查询偏移[0,INF]</p>
     * @param string $OrderBy <p>StartTime,EndTime,ExpiredTime,BackupSetId,BackupDuration</p>
     * @param string $OrderType <p>ASC,DESC</p>
     * @param string $StartTime <p>开始时间</p>
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

        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FilterBy",$param) and $param["FilterBy"] !== null) {
            $this->FilterBy = new BackupSetsReqFilter();
            $this->FilterBy->deserialize($param["FilterBy"]);
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
    }
}
