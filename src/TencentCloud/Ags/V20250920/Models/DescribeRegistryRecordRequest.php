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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRegistryRecord请求参数结构体
 *
 * @method string getRegistryId() 获取<p>父 Registry ID。</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>父 Registry ID。</p>
 * @method string getRecordId() 获取<p>Record ID。</p>
 * @method void setRecordId(string $RecordId) 设置<p>Record ID。</p>
 * @method string getVersionId() 获取<p>Version ID，与 Label 互斥。指定时返回该 Version；均省略时等价于 Label=stable。</p>
 * @method void setVersionId(string $VersionId) 设置<p>Version ID，与 Label 互斥。指定时返回该 Version；均省略时等价于 Label=stable。</p>
 * @method string getLabel() 获取<p>Label 名称，与 VersionId 互斥。指定时返回 Label 当前指向的 Version；均省略时等价于 stable。</p>
 * @method void setLabel(string $Label) 设置<p>Label 名称，与 VersionId 互斥。指定时返回 Label 当前指向的 Version；均省略时等价于 stable。</p>
 */
class DescribeRegistryRecordRequest extends AbstractModel
{
    /**
     * @var string <p>父 Registry ID。</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Record ID。</p>
     */
    public $RecordId;

    /**
     * @var string <p>Version ID，与 Label 互斥。指定时返回该 Version；均省略时等价于 Label=stable。</p>
     */
    public $VersionId;

    /**
     * @var string <p>Label 名称，与 VersionId 互斥。指定时返回 Label 当前指向的 Version；均省略时等价于 stable。</p>
     */
    public $Label;

    /**
     * @param string $RegistryId <p>父 Registry ID。</p>
     * @param string $RecordId <p>Record ID。</p>
     * @param string $VersionId <p>Version ID，与 Label 互斥。指定时返回该 Version；均省略时等价于 Label=stable。</p>
     * @param string $Label <p>Label 名称，与 VersionId 互斥。指定时返回 Label 当前指向的 Version；均省略时等价于 stable。</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
