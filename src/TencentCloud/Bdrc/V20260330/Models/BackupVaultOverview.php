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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份库概览
 *
 * @method integer getTotalCount() 获取备份库总数
 * @method void setTotalCount(integer $TotalCount) 设置备份库总数
 * @method integer getTotalSizeMb() 获取备份库总存储量（已用容量），单位 MB
 * @method void setTotalSizeMb(integer $TotalSizeMb) 设置备份库总存储量（已用容量），单位 MB
 */
class BackupVaultOverview extends AbstractModel
{
    /**
     * @var integer 备份库总数
     */
    public $TotalCount;

    /**
     * @var integer 备份库总存储量（已用容量），单位 MB
     */
    public $TotalSizeMb;

    /**
     * @param integer $TotalCount 备份库总数
     * @param integer $TotalSizeMb 备份库总存储量（已用容量），单位 MB
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalSizeMb",$param) and $param["TotalSizeMb"] !== null) {
            $this->TotalSizeMb = $param["TotalSizeMb"];
        }
    }
}
