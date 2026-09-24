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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AGM 记忆服务开通信息
 *
 * @method string getMemInstanceId() 获取<p>Memory实例ID</p>
 * @method void setMemInstanceId(string $MemInstanceId) 设置<p>Memory实例ID</p>
 * @method integer getStatus() 获取<p>1=active, 0=disabled（软删/关闭/下线历史行）</p>
 * @method void setStatus(integer $Status) 设置<p>1=active, 0=disabled（软删/关闭/下线历史行）</p>
 * @method integer getInstallStatus() 获取<p>0=待安装,1=成功,2=失败待重试,3=开启中,4=关闭中/已关闭</p>
 * @method void setInstallStatus(integer $InstallStatus) 设置<p>0=待安装,1=成功,2=失败待重试,3=开启中,4=关闭中/已关闭</p>
 * @method string getMemStatus() 获取<p>creating/online/isolated/error/</p>
 * @method void setMemStatus(string $MemStatus) 设置<p>creating/online/isolated/error/</p>
 */
class AgentMemInfo extends AbstractModel
{
    /**
     * @var string <p>Memory实例ID</p>
     */
    public $MemInstanceId;

    /**
     * @var integer <p>1=active, 0=disabled（软删/关闭/下线历史行）</p>
     */
    public $Status;

    /**
     * @var integer <p>0=待安装,1=成功,2=失败待重试,3=开启中,4=关闭中/已关闭</p>
     */
    public $InstallStatus;

    /**
     * @var string <p>creating/online/isolated/error/</p>
     */
    public $MemStatus;

    /**
     * @param string $MemInstanceId <p>Memory实例ID</p>
     * @param integer $Status <p>1=active, 0=disabled（软删/关闭/下线历史行）</p>
     * @param integer $InstallStatus <p>0=待安装,1=成功,2=失败待重试,3=开启中,4=关闭中/已关闭</p>
     * @param string $MemStatus <p>creating/online/isolated/error/</p>
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
        if (array_key_exists("MemInstanceId",$param) and $param["MemInstanceId"] !== null) {
            $this->MemInstanceId = $param["MemInstanceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstallStatus",$param) and $param["InstallStatus"] !== null) {
            $this->InstallStatus = $param["InstallStatus"];
        }

        if (array_key_exists("MemStatus",$param) and $param["MemStatus"] !== null) {
            $this->MemStatus = $param["MemStatus"];
        }
    }
}
