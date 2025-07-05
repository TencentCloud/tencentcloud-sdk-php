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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobSavepoint请求参数结构体
 *
 * @method string getJobId() 获取作业 SerialId
 * @method void setJobId(string $JobId) 设置作业 SerialId
 * @method integer getLimit() 获取分页参数，单页总数
 * @method void setLimit(integer $Limit) 设置分页参数，单页总数
 * @method integer getOffset() 获取分页参数，偏移量
 * @method void setOffset(integer $Offset) 设置分页参数，偏移量
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 * @method array getRecordTypes() 获取2 是checkpoint
1 是触发savepoint
3 停止触发的savepoint
 * @method void setRecordTypes(array $RecordTypes) 设置2 是checkpoint
1 是触发savepoint
3 停止触发的savepoint
 */
class DescribeJobSavepointRequest extends AbstractModel
{
    /**
     * @var string 作业 SerialId
     */
    public $JobId;

    /**
     * @var integer 分页参数，单页总数
     */
    public $Limit;

    /**
     * @var integer 分页参数，偏移量
     */
    public $Offset;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @var array 2 是checkpoint
1 是触发savepoint
3 停止触发的savepoint
     */
    public $RecordTypes;

    /**
     * @param string $JobId 作业 SerialId
     * @param integer $Limit 分页参数，单页总数
     * @param integer $Offset 分页参数，偏移量
     * @param string $WorkSpaceId 工作空间 SerialId
     * @param array $RecordTypes 2 是checkpoint
1 是触发savepoint
3 停止触发的savepoint
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("RecordTypes",$param) and $param["RecordTypes"] !== null) {
            $this->RecordTypes = $param["RecordTypes"];
        }
    }
}
