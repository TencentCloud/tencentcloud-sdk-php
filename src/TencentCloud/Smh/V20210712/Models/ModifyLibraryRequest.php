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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLibrary请求参数结构体
 *
 * @method string getLibraryId() 获取媒体库 ID
 * @method void setLibraryId(string $LibraryId) 设置媒体库 ID
 * @method string getName() 获取媒体库名称，最多 50 个字符。如不传则不修改。
 * @method void setName(string $Name) 设置媒体库名称，最多 50 个字符。如不传则不修改。
 * @method string getRemark() 获取备注，最多 250 个字符。如不传则不修改。
 * @method void setRemark(string $Remark) 设置备注，最多 250 个字符。如不传则不修改。
 * @method LibraryExtension getLibraryExtension() 获取媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。
 * @method void setLibraryExtension(LibraryExtension $LibraryExtension) 设置媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。
 */
class ModifyLibraryRequest extends AbstractModel
{
    /**
     * @var string 媒体库 ID
     */
    public $LibraryId;

    /**
     * @var string 媒体库名称，最多 50 个字符。如不传则不修改。
     */
    public $Name;

    /**
     * @var string 备注，最多 250 个字符。如不传则不修改。
     */
    public $Remark;

    /**
     * @var LibraryExtension 媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。
     */
    public $LibraryExtension;

    /**
     * @param string $LibraryId 媒体库 ID
     * @param string $Name 媒体库名称，最多 50 个字符。如不传则不修改。
     * @param string $Remark 备注，最多 250 个字符。如不传则不修改。
     * @param LibraryExtension $LibraryExtension 媒体库配置项，部分参数在新建后不可更改，且仅修改传入的参数。如不传该参数则不修改任何配置项。
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
