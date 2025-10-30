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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主备流分组信息。
 *
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method array getBackupList() 获取主备流信息。
 * @method void setBackupList(array $BackupList) 设置主备流信息。
 * @method integer getOptimalEnable() 获取是否对该流开启了择优调度。
0 - 未开启。
1 - 已开启。
 * @method void setOptimalEnable(integer $OptimalEnable) 设置是否对该流开启了择优调度。
0 - 未开启。
1 - 已开启。
 * @method string getHostGroupName() 获取域名分组的分组名称。
 * @method void setHostGroupName(string $HostGroupName) 设置域名分组的分组名称。
 */
class BackupStreamGroupInfo extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var array 主备流信息。
     */
    public $BackupList;

    /**
     * @var integer 是否对该流开启了择优调度。
0 - 未开启。
1 - 已开启。
     */
    public $OptimalEnable;

    /**
     * @var string 域名分组的分组名称。
     */
    public $HostGroupName;

    /**
     * @param string $StreamName 流名称。
     * @param array $BackupList 主备流信息。
     * @param integer $OptimalEnable 是否对该流开启了择优调度。
0 - 未开启。
1 - 已开启。
     * @param string $HostGroupName 域名分组的分组名称。
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
        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("BackupList",$param) and $param["BackupList"] !== null) {
            $this->BackupList = [];
            foreach ($param["BackupList"] as $key => $value){
                $obj = new BackupStreamDetailData();
                $obj->deserialize($value);
                array_push($this->BackupList, $obj);
            }
        }

        if (array_key_exists("OptimalEnable",$param) and $param["OptimalEnable"] !== null) {
            $this->OptimalEnable = $param["OptimalEnable"];
        }

        if (array_key_exists("HostGroupName",$param) and $param["HostGroupName"] !== null) {
            $this->HostGroupName = $param["HostGroupName"];
        }
    }
}
