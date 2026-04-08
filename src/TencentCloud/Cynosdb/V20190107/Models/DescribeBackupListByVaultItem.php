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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupListByVaultItem
 *
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群name</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群name</p>
 * @method BackupFileInfo getBackupFileInfo() 获取<p>备份信息</p>
 * @method void setBackupFileInfo(BackupFileInfo $BackupFileInfo) 设置<p>备份信息</p>
 */
class DescribeBackupListByVaultItem extends AbstractModel
{
    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群name</p>
     */
    public $ClusterName;

    /**
     * @var BackupFileInfo <p>备份信息</p>
     */
    public $BackupFileInfo;

    /**
     * @param string $ClusterId <p>集群id</p>
     * @param string $ClusterName <p>集群name</p>
     * @param BackupFileInfo $BackupFileInfo <p>备份信息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("BackupFileInfo",$param) and $param["BackupFileInfo"] !== null) {
            $this->BackupFileInfo = new BackupFileInfo();
            $this->BackupFileInfo->deserialize($param["BackupFileInfo"]);
        }
    }
}
