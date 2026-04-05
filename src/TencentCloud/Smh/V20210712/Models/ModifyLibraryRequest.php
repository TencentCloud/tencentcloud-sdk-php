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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibrary请求参数结构体
 *
 * @method string getLibraryId() 获取<p>媒体库 ID</p>
 * @method void setLibraryId(string $LibraryId) 设置<p>媒体库 ID</p>
 * @method string getName() 获取<p>媒体库名称，最多 50 个字符。如不传则不修改。</p>
 * @method void setName(string $Name) 设置<p>媒体库名称，最多 50 个字符。如不传则不修改。</p>
 * @method string getRemark() 获取<p>备注，最多 250 个字符。如不传则不修改。</p>
 * @method void setRemark(string $Remark) 设置<p>备注，最多 250 个字符。如不传则不修改。</p>
 * @method LibraryExtension getLibraryExtension() 获取<p>媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。</p>
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置<p>媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。</p>
 */
class ModifyLibraryRequest extends AbstractModel
{
    /**
     * @var string <p>媒体库 ID</p>
     */
    public $LibraryId;

    /**
     * @var string <p>媒体库名称，最多 50 个字符。如不传则不修改。</p>
     */
    public $Name;

    /**
     * @var string <p>备注，最多 250 个字符。如不传则不修改。</p>
     */
    public $Remark;

    /**
     * @var LibraryExtension <p>媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。</p>
     */
    public $LibraryExtension;

    /**
     * @param string $LibraryId <p>媒体库 ID</p>
     * @param string $Name <p>媒体库名称，最多 50 个字符。如不传则不修改。</p>
     * @param string $Remark <p>备注，最多 250 个字符。如不传则不修改。</p>
     * @param LibraryExtension $LibraryExtension <p>媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。</p>
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
        if (array_key_exists("LibraryId",$param) and $param["LibraryId"] !== null) {
            $this->LibraryId = $param["LibraryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("LibraryExtension",$param) and $param["LibraryExtension"] !== null) {
            $this->LibraryExtension = new LibraryExtension();
            $this->LibraryExtension->deserialize($param["LibraryExtension"]);
        }
    }
}
