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
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getClusterName() 获取集群name
 * @method void setClusterName(string $ClusterName) 设置集群name
 * @method BackupFileInfo getBackupFileInfo() 获取备份信息
 * @method void setBackupFileInfo(BackupFileInfo $BackupFileInfo) 设置备份信息
 */
class DescribeBackupListByVaultItem extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 集群name
     */
    public $ClusterName;

    /**
     * @var BackupFileInfo 备份信息
     */
    public $BackupFileInfo;

    /**
     * @param string $ClusterId 集群id
     * @param string $ClusterName 集群name
     * @param BackupFileInfo $BackupFileInfo 备份信息
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
