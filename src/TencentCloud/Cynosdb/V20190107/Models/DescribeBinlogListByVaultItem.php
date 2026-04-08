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
 * binlog备份信息
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method BinlogItem getBinlogFileInfo() 获取<p>Binlog文件信息</p>
 * @method void setBinlogFileInfo(BinlogItem $BinlogFileInfo) 设置<p>Binlog文件信息</p>
 */
class DescribeBinlogListByVaultItem extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var BinlogItem <p>Binlog文件信息</p>
     */
    public $BinlogFileInfo;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param BinlogItem $BinlogFileInfo <p>Binlog文件信息</p>
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

        if (array_key_exists("BinlogFileInfo",$param) and $param["BinlogFileInfo"] !== null) {
            $this->BinlogFileInfo = new BinlogItem();
            $this->BinlogFileInfo->deserialize($param["BinlogFileInfo"]);
        }
    }
}
