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
 * DescribeBackupOverviewGeneral返回参数结构体
 *
 * @method InstanceBackupOverview getInstanceBackupOverview() 获取<p>整机备份（CVM 备份组）概览数据</p>
 * @method void setInstanceBackupOverview(InstanceBackupOverview $InstanceBackupOverview) 设置<p>整机备份（CVM 备份组）概览数据</p>
 * @method FileBackupOverview getFileBackupOverview() 获取<p>文件备份概览数据</p>
 * @method void setFileBackupOverview(FileBackupOverview $FileBackupOverview) 设置<p>文件备份概览数据</p>
 * @method BackupPolicyOverview getBackupPolicyOverview() 获取<p>备份策略概览</p>
 * @method void setBackupPolicyOverview(BackupPolicyOverview $BackupPolicyOverview) 设置<p>备份策略概览</p>
 * @method BackupVaultOverview getBackupVaultOverview() 获取<p>备份库概览</p>
 * @method void setBackupVaultOverview(BackupVaultOverview $BackupVaultOverview) 设置<p>备份库概览</p>
 * @method ProtectedResourceOverview getProtectedResourceOverview() 获取<p>受保护资源概览</p>
 * @method void setProtectedResourceOverview(ProtectedResourceOverview $ProtectedResourceOverview) 设置<p>受保护资源概览</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupOverviewGeneralResponse extends AbstractModel
{
    /**
     * @var InstanceBackupOverview <p>整机备份（CVM 备份组）概览数据</p>
     */
    public $InstanceBackupOverview;

    /**
     * @var FileBackupOverview <p>文件备份概览数据</p>
     */
    public $FileBackupOverview;

    /**
     * @var BackupPolicyOverview <p>备份策略概览</p>
     */
    public $BackupPolicyOverview;

    /**
     * @var BackupVaultOverview <p>备份库概览</p>
     */
    public $BackupVaultOverview;

    /**
     * @var ProtectedResourceOverview <p>受保护资源概览</p>
     */
    public $ProtectedResourceOverview;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param InstanceBackupOverview $InstanceBackupOverview <p>整机备份（CVM 备份组）概览数据</p>
     * @param FileBackupOverview $FileBackupOverview <p>文件备份概览数据</p>
     * @param BackupPolicyOverview $BackupPolicyOverview <p>备份策略概览</p>
     * @param BackupVaultOverview $BackupVaultOverview <p>备份库概览</p>
     * @param ProtectedResourceOverview $ProtectedResourceOverview <p>受保护资源概览</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceBackupOverview",$param) and $param["InstanceBackupOverview"] !== null) {
            $this->InstanceBackupOverview = new InstanceBackupOverview();
            $this->InstanceBackupOverview->deserialize($param["InstanceBackupOverview"]);
        }

        if (array_key_exists("FileBackupOverview",$param) and $param["FileBackupOverview"] !== null) {
            $this->FileBackupOverview = new FileBackupOverview();
            $this->FileBackupOverview->deserialize($param["FileBackupOverview"]);
        }

        if (array_key_exists("BackupPolicyOverview",$param) and $param["BackupPolicyOverview"] !== null) {
            $this->BackupPolicyOverview = new BackupPolicyOverview();
            $this->BackupPolicyOverview->deserialize($param["BackupPolicyOverview"]);
        }

        if (array_key_exists("BackupVaultOverview",$param) and $param["BackupVaultOverview"] !== null) {
            $this->BackupVaultOverview = new BackupVaultOverview();
            $this->BackupVaultOverview->deserialize($param["BackupVaultOverview"]);
        }

        if (array_key_exists("ProtectedResourceOverview",$param) and $param["ProtectedResourceOverview"] !== null) {
            $this->ProtectedResourceOverview = new ProtectedResourceOverview();
            $this->ProtectedResourceOverview->deserialize($param["ProtectedResourceOverview"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
