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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsSnapshotAttribute请求参数结构体
 *
 * @method string getSnapshotId() 获取文件系统快照ID
 * @method void setSnapshotId(string $SnapshotId) 设置文件系统快照ID
 * @method string getSnapshotName() 获取文件系统快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置文件系统快照名称
 * @method integer getAliveDays() 获取文件系统快照保留天数
 * @method void setAliveDays(integer $AliveDays) 设置文件系统快照保留天数
 */
class UpdateCfsSnapshotAttributeRequest extends AbstractModel
{
    /**
     * @var string 文件系统快照ID
     */
    public $SnapshotId;

    /**
     * @var string 文件系统快照名称
     */
    public $SnapshotName;

    /**
     * @var integer 文件系统快照保留天数
     */
    public $AliveDays;

    /**
     * @param string $SnapshotId 文件系统快照ID
     * @param string $SnapshotName 文件系统快照名称
     * @param integer $AliveDays 文件系统快照保留天数
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
