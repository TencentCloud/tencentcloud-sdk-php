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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例备份总大小
 *
 * @method integer getSnapshotSize() 获取全量备份总大小，单位字节
 * @method void setSnapshotSize(integer $SnapshotSize) 设置全量备份总大小，单位字节
 * @method integer getOplogSize() 获取增量备份总大小
 * @method void setOplogSize(integer $OplogSize) 设置增量备份总大小
 * @method integer getFreeQuota() 获取免费额度
 * @method void setFreeQuota(integer $FreeQuota) 设置免费额度
 */
class BackupTotalSize extends AbstractModel
{
    /**
     * @var integer 全量备份总大小，单位字节
     */
    public $SnapshotSize;

    /**
     * @var integer 增量备份总大小
     */
    public $OplogSize;

    /**
     * @var integer 免费额度
     */
    public $FreeQuota;

    /**
     * @param integer $SnapshotSize 全量备份总大小，单位字节
     * @param integer $OplogSize 增量备份总大小
     * @param integer $FreeQuota 免费额度
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
        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("OplogSize",$param) and $param["OplogSize"] !== null) {
            $this->OplogSize = $param["OplogSize"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }
    }
}
