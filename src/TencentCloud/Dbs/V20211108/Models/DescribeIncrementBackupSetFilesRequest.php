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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIncrementBackupSetFiles请求参数结构体
 *
 * @method string getBackupSetId() 获取增量备份集 ID。可通过 DescribeIncrementBackupSets 接口获取。
 * @method void setBackupSetId(string $BackupSetId) 设置增量备份集 ID。可通过 DescribeIncrementBackupSets 接口获取。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 10。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 10。
 */
class DescribeIncrementBackupSetFilesRequest extends AbstractModel
{
    /**
     * @var string 增量备份集 ID。可通过 DescribeIncrementBackupSets 接口获取。
     */
    public $BackupSetId;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 10。
     */
    public $Limit;

    /**
     * @param string $BackupSetId 增量备份集 ID。可通过 DescribeIncrementBackupSets 接口获取。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 10。
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
        if (array_key_exists("BackupSetId",$param) and $param["BackupSetId"] !== null) {
            $this->BackupSetId = $param["BackupSetId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
