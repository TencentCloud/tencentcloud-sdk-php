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
 * migration 执行计划
 *
 * @method string getVersion() 获取<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method void setVersion(string $Version) 设置<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method string getName() 获取<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method string getChecksum() 获取<p>migration query sql checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
 * @method void setChecksum(string $Checksum) 设置<p>migration query sql checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>pending： 待执行</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>pending： 待执行</li></ul>
 * @method string getSource() 获取<p>标记请求来源</p>
 * @method void setSource(string $Source) 设置<p>标记请求来源</p>
 * @method string getReason() 获取<p>被归入该分组的原因，比如not_applied、checksum_matched</p>
 * @method void setReason(string $Reason) 设置<p>被归入该分组的原因，比如not_applied、checksum_matched</p>
 */
class MigrationPlanItem extends AbstractModel
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
     * @var string <p>migration query sql checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
     */
    public $Checksum;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>pending： 待执行</li></ul>
     */
    public $Status;

    /**
     * @var string <p>标记请求来源</p>
     */
    public $Source;

    /**
     * @var string <p>被归入该分组的原因，比如not_applied、checksum_matched</p>
     */
    public $Reason;

    /**
     * @param string $Version <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     * @param string $Name <p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     * @param string $Checksum <p>migration query sql checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>pending： 待执行</li></ul>
     * @param string $Source <p>标记请求来源</p>
     * @param string $Reason <p>被归入该分组的原因，比如not_applied、checksum_matched</p>
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

        if (array_key_exists("Checksum",$param) and $param["Checksum"] !== null) {
            $this->Checksum = $param["Checksum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
