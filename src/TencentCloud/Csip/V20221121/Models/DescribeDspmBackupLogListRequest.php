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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmBackupLogList请求参数结构体
 *
 * @method integer getLimit() 获取<p>限制数目</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getSort() 获取<p>排序方式(desc=倒叙,asc=升序)</p>
 * @method void setSort(string $Sort) 设置<p>排序方式(desc=倒叙,asc=升序)</p>
 * @method string getField() 获取<p>排序字段(支持&#39;StartTime&#39;)</p>
 * @method void setField(string $Field) 设置<p>排序字段(支持&#39;StartTime&#39;)</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getStatus() 获取<p>备份日志状态0未完成的,1备份文件，2恢复中，3已恢复，4.已删除,全部查询-1</p>
 * @method void setStatus(integer $Status) 设置<p>备份日志状态0未完成的,1备份文件，2恢复中，3已恢复，4.已删除,全部查询-1</p>
 * @method array getDbTypes() 获取<p>数据库类型,如：cdb, mariadb</p>
 * @method void setDbTypes(array $DbTypes) 设置<p>数据库类型,如：cdb, mariadb</p>
 */
class DescribeDspmBackupLogListRequest extends AbstractModel
{
    /**
     * @var integer <p>限制数目</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>排序方式(desc=倒叙,asc=升序)</p>
     */
    public $Sort;

    /**
     * @var string <p>排序字段(支持&#39;StartTime&#39;)</p>
     */
    public $Field;

    /**
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>备份日志状态0未完成的,1备份文件，2恢复中，3已恢复，4.已删除,全部查询-1</p>
     */
    public $Status;

    /**
     * @var array <p>数据库类型,如：cdb, mariadb</p>
     */
    public $DbTypes;

    /**
     * @param integer $Limit <p>限制数目</p>
     * @param integer $Offset <p>偏移量</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Sort <p>排序方式(desc=倒叙,asc=升序)</p>
     * @param string $Field <p>排序字段(支持&#39;StartTime&#39;)</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $Status <p>备份日志状态0未完成的,1备份文件，2恢复中，3已恢复，4.已删除,全部查询-1</p>
     * @param array $DbTypes <p>数据库类型,如：cdb, mariadb</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
