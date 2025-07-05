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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防勒索机器硬盘配置
 *
 * @method string getUuid() 获取主机uuid
 * @method void setUuid(string $Uuid) 设置主机uuid
 * @method string getDiskInfo() 获取指定硬盘列表，为空时表示所有硬盘：disk_id1|disk_name1;disk_id2|disk_name2
 * @method void setDiskInfo(string $DiskInfo) 设置指定硬盘列表，为空时表示所有硬盘：disk_id1|disk_name1;disk_id2|disk_name2
 */
class RansomDefenseStrategyMachineInfo extends AbstractModel
{
    /**
     * @var string 主机uuid
     */
    public $Uuid;

    /**
     * @var string 指定硬盘列表，为空时表示所有硬盘：disk_id1|disk_name1;disk_id2|disk_name2
     */
    public $DiskInfo;

    /**
     * @param string $Uuid 主机uuid
     * @param string $DiskInfo 指定硬盘列表，为空时表示所有硬盘：disk_id1|disk_name1;disk_id2|disk_name2
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DiskInfo",$param) and $param["DiskInfo"] !== null) {
            $this->DiskInfo = $param["DiskInfo"];
        }
    }
}
