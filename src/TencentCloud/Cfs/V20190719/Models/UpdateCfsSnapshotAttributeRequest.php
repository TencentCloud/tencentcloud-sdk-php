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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsSnapshotAttribute请求参数结构体
 *
 * @method string getSnapshotId() 获取快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method string getSnapshotName() 获取文件系统快照名称，与AliveDays 必须填一个，快照名称，支持不超过64字符长度，支持中文、数字、_、-
 * @method void setSnapshotName(string $SnapshotName) 设置文件系统快照名称，与AliveDays 必须填一个，快照名称，支持不超过64字符长度，支持中文、数字、_、-
 * @method integer getAliveDays() 获取文件系统快照保留天数，与SnapshotName必须填一个，如果原来是永久保留时间，不允许修改成短期有效期
 * @method void setAliveDays(integer $AliveDays) 设置文件系统快照保留天数，与SnapshotName必须填一个，如果原来是永久保留时间，不允许修改成短期有效期
 */
class UpdateCfsSnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     */
    public $SnapshotId;

    /**
     * @var string 文件系统快照名称，与AliveDays 必须填一个，快照名称，支持不超过64字符长度，支持中文、数字、_、-
     */
    public $SnapshotName;

    /**
     * @var integer 文件系统快照保留天数，与SnapshotName必须填一个，如果原来是永久保留时间，不允许修改成短期有效期
     */
    public $AliveDays;

    /**
     * @param string $SnapshotId 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     * @param string $SnapshotName 文件系统快照名称，与AliveDays 必须填一个，快照名称，支持不超过64字符长度，支持中文、数字、_、-
     * @param integer $AliveDays 文件系统快照保留天数，与SnapshotName必须填一个，如果原来是永久保留时间，不允许修改成短期有效期
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }
    }
}
