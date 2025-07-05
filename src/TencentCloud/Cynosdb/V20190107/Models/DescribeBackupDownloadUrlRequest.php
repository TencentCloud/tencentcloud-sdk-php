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
 * DescribeBackupDownloadUrl请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getBackupId() 获取备份ID
 * @method void setBackupId(integer $BackupId) 设置备份ID
 * @method BackupLimitRestriction getDownloadRestriction() 获取备份下载来源限制条件
 * @method void setDownloadRestriction(BackupLimitRestriction $DownloadRestriction) 设置备份下载来源限制条件
 */
class DescribeBackupDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 备份ID
     */
    public $BackupId;

    /**
     * @var BackupLimitRestriction 备份下载来源限制条件
     */
    public $DownloadRestriction;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $BackupId 备份ID
     * @param BackupLimitRestriction $DownloadRestriction 备份下载来源限制条件
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

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("DownloadRestriction",$param) and $param["DownloadRestriction"] !== null) {
            $this->DownloadRestriction = new BackupLimitRestriction();
            $this->DownloadRestriction->deserialize($param["DownloadRestriction"]);
        }
    }
}
