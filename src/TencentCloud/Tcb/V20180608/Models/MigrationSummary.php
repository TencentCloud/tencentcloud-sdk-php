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
 * migration 列表
 *
 * @method string getVersion() 获取<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method void setVersion(string $Version) 设置<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method string getName() 获取<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
 * @method string getChecksum() 获取<p>migration query sql 语句checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
 * @method void setChecksum(string $Checksum) 设置<p>migration query sql 语句checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
 * @method string getAppliedAt() 获取<p>应用时间</p>
 * @method void setAppliedAt(string $AppliedAt) 设置<p>应用时间</p>
 * @method string getSource() 获取<p>请求来源</p>
 * @method void setSource(string $Source) 设置<p>请求来源</p>
 * @method string getCreatedBy() 获取<p>migration 创建时间</p>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>migration 创建时间</p>
 */
class MigrationSummary extends AbstractModel
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
     * @var string <p>migration query sql 语句checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
     */
    public $Checksum;

    /**
     * @var string <p>应用时间</p>
     */
    public $AppliedAt;

    /**
     * @var string <p>请求来源</p>
     */
    public $Source;

    /**
     * @var string <p>migration 创建时间</p>
     */
    public $CreatedBy;

    /**
     * @param string $Version <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     * @param string $Name <p>migration 版本名</p><p>参数格式：仅允许小写字母和下划线</p>
     * @param string $Checksum <p>migration query sql 语句checksum</p><p>服务端自动生成，同版本不同checksum会拒绝执行</p>
     * @param string $AppliedAt <p>应用时间</p>
     * @param string $Source <p>请求来源</p>
     * @param string $CreatedBy <p>migration 创建时间</p>
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

        if (array_key_exists("AppliedAt",$param) and $param["AppliedAt"] !== null) {
            $this->AppliedAt = $param["AppliedAt"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }
    }
}
