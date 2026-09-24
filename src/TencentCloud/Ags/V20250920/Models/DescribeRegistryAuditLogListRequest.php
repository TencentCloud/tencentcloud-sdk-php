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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegistryAuditLogList请求参数结构体
 *
 * @method string getRegistryId() 获取<p>父 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method string getVersionId() 获取<p>Version ID；仅过滤 Version 维度动作，可选。</p>
 * @method void setVersionId(string $VersionId) 设置<p>Version ID；仅过滤 Version 维度动作，可选。</p>
 * @method string getActionFilter() 获取<p>Action 精确过滤（如 <code>record.version.create</code>），可选。</p>
 * @method void setActionFilter(string $ActionFilter) 设置<p>Action 精确过滤（如 <code>record.version.create</code>），可选。</p>
 * @method string getActor() 获取<p>发起者过滤（主账号 UIN 或子账号 UIN），可选。</p>
 * @method void setActor(string $Actor) 设置<p>发起者过滤（主账号 UIN 或子账号 UIN），可选。</p>
 * @method string getStartTime() 获取<p>起始时间；ISO 8601，可选。</p>
 * @method void setStartTime(string $StartTime) 设置<p>起始时间；ISO 8601，可选。</p>
 * @method string getEndTime() 获取<p>结束时间；ISO 8601，可选。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间；ISO 8601，可选。</p>
 * @method integer getOffset() 获取<p>分页起始偏移，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页起始偏移，默认 0。</p>
 * @method integer getLimit() 获取<p>分页条数，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页条数，默认 20，最大 100。</p>
 */
class DescribeRegistryAuditLogListRequest extends AbstractModel
{
    /**
     * @var string <p>父 Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。</p>
     */
    public $RecordId;

    /**
     * @var string <p>Version ID；仅过滤 Version 维度动作，可选。</p>
     */
    public $VersionId;

    /**
     * @var string <p>Action 精确过滤（如 <code>record.version.create</code>），可选。</p>
     */
    public $ActionFilter;

    /**
     * @var string <p>发起者过滤（主账号 UIN 或子账号 UIN），可选。</p>
     */
    public $Actor;

    /**
     * @var string <p>起始时间；ISO 8601，可选。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间；ISO 8601，可选。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页起始偏移，默认 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页条数，默认 20，最大 100。</p>
     */
    public $Limit;

    /**
     * @param string $RegistryId <p>父 Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param string $VersionId <p>Version ID；仅过滤 Version 维度动作，可选。</p>
     * @param string $ActionFilter <p>Action 精确过滤（如 <code>record.version.create</code>），可选。</p>
     * @param string $Actor <p>发起者过滤（主账号 UIN 或子账号 UIN），可选。</p>
     * @param string $StartTime <p>起始时间；ISO 8601，可选。</p>
     * @param string $EndTime <p>结束时间；ISO 8601，可选。</p>
     * @param integer $Offset <p>分页起始偏移，默认 0。</p>
     * @param integer $Limit <p>分页条数，默认 20，最大 100。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("ActionFilter",$param) and $param["ActionFilter"] !== null) {
            $this->ActionFilter = $param["ActionFilter"];
        }

        if (array_key_exists("Actor",$param) and $param["Actor"] !== null) {
            $this->Actor = $param["Actor"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
