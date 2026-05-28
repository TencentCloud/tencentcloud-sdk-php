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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * migration 执行计划冲突项
 *
 * @method string getVersion() 获取<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method void setVersion(string $Version) 设置<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method string getName() 获取<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method string getRemoteName() 获取<p>数据库已应用migration的版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method void setRemoteName(string $RemoteName) 设置<p>数据库已应用migration的版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method string getLocalChecksum() 获取<p>本次sql计算出来的checksum</p>
 * @method void setLocalChecksum(string $LocalChecksum) 设置<p>本次sql计算出来的checksum</p>
 * @method string getRemoteChecksum() 获取<p>已应用的migration，数据库存储的checksum</p>
 * @method void setRemoteChecksum(string $RemoteChecksum) 设置<p>已应用的migration，数据库存储的checksum</p>
 * @method string getReason() 获取<p>归入该分组的原因</p>
 * @method void setReason(string $Reason) 设置<p>归入该分组的原因</p>
 * @method string getMessage() 获取<p>冲突信息</p>
 * @method void setMessage(string $Message) 设置<p>冲突信息</p>
 */
class MigrationConflict extends AbstractModel
{
    /**
     * @var string <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     */
    public $Version;

    /**
     * @var string <p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     */
    public $Name;

    /**
     * @var string <p>数据库已应用migration的版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     */
    public $RemoteName;

    /**
     * @var string <p>本次sql计算出来的checksum</p>
     */
    public $LocalChecksum;

    /**
     * @var string <p>已应用的migration，数据库存储的checksum</p>
     */
    public $RemoteChecksum;

    /**
     * @var string <p>归入该分组的原因</p>
     */
    public $Reason;

    /**
     * @var string <p>冲突信息</p>
     */
    public $Message;

    /**
     * @param string $Version <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     * @param string $Name <p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     * @param string $RemoteName <p>数据库已应用migration的版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     * @param string $LocalChecksum <p>本次sql计算出来的checksum</p>
     * @param string $RemoteChecksum <p>已应用的migration，数据库存储的checksum</p>
     * @param string $Reason <p>归入该分组的原因</p>
     * @param string $Message <p>冲突信息</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RemoteName",$param) and $param["RemoteName"] !== null) {
            $this->RemoteName = $param["RemoteName"];
        }

        if (array_key_exists("LocalChecksum",$param) and $param["LocalChecksum"] !== null) {
            $this->LocalChecksum = $param["LocalChecksum"];
        }

        if (array_key_exists("RemoteChecksum",$param) and $param["RemoteChecksum"] !== null) {
            $this->RemoteChecksum = $param["RemoteChecksum"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
