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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupUrl返回参数结构体
 *
 * @method array getDownloadUrl() 获取外网下载地址（6小时内链接有效），该字段正在逐步废弃中。
 * @method void setDownloadUrl(array $DownloadUrl) 设置外网下载地址（6小时内链接有效），该字段正在逐步废弃中。
 * @method array getInnerDownloadUrl() 获取内网下载地址（6小时内链接有效），该字段正在逐步废弃中。
 * @method void setInnerDownloadUrl(array $InnerDownloadUrl) 设置内网下载地址（6小时内链接有效），该字段正在逐步废弃中。
 * @method array getFilenames() 获取文件名称，该字段正在逐步废弃中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilenames(array $Filenames) 设置文件名称，该字段正在逐步废弃中。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupInfos() 获取备份文件信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupInfos(array $BackupInfos) 设置备份文件信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupUrlResponse extends AbstractModel
{
    /**
     * @var array 外网下载地址（6小时内链接有效），该字段正在逐步废弃中。
     */
    public $DownloadUrl;

    /**
     * @var array 内网下载地址（6小时内链接有效），该字段正在逐步废弃中。
     */
    public $InnerDownloadUrl;

    /**
     * @var array 文件名称，该字段正在逐步废弃中。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filenames;

    /**
     * @var array 备份文件信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupInfos;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DownloadUrl 外网下载地址（6小时内链接有效），该字段正在逐步废弃中。
     * @param array $InnerDownloadUrl 内网下载地址（6小时内链接有效），该字段正在逐步废弃中。
     * @param array $Filenames 文件名称，该字段正在逐步废弃中。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupInfos 备份文件信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("InnerDownloadUrl",$param) and $param["InnerDownloadUrl"] !== null) {
            $this->InnerDownloadUrl = $param["InnerDownloadUrl"];
        }

        if (array_key_exists("Filenames",$param) and $param["Filenames"] !== null) {
            $this->Filenames = $param["Filenames"];
        }

        if (array_key_exists("BackupInfos",$param) and $param["BackupInfos"] !== null) {
            $this->BackupInfos = [];
            foreach ($param["BackupInfos"] as $key => $value){
                $obj = new BackupDownloadInfo();
                $obj->deserialize($value);
                array_push($this->BackupInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
