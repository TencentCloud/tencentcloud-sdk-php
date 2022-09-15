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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMediaStorageClass请求参数结构体
 *
 * @method array getFileIds() 获取媒体文件唯一标识列表。
 * @method void setFileIds(array $FileIds) 设置媒体文件唯一标识列表。
 * @method string getStorageClass() 获取目标存储类型。可选值有：
<li> STANDARD：标准存储。</li>
<li> STANDARD_IA：低频存储。</li>
<li> ARCHIVE：归档存储。</li>
<li> DEEP_ARCHIVE：深度归档存储。</li>
 * @method void setStorageClass(string $StorageClass) 设置目标存储类型。可选值有：
<li> STANDARD：标准存储。</li>
<li> STANDARD_IA：低频存储。</li>
<li> ARCHIVE：归档存储。</li>
<li> DEEP_ARCHIVE：深度归档存储。</li>
 * @method integer getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getRestoreTier() 获取取回模式。当文件的存储类型从归档或深度归档转换为标准存储时，需要指定取回（也称为解冻）操作的模式，具体说明请参考[数据取回及取回模式](https://cloud.tencent.com/document/product/266/56196#retake)。
当媒体文件目前的存储类型为归档存储时，有以下取值：
<li>Expedited：极速模式。</li>
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
当媒体文件目前的存储类型为深度归档存储时，有以下取值：
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
 * @method void setRestoreTier(string $RestoreTier) 设置取回模式。当文件的存储类型从归档或深度归档转换为标准存储时，需要指定取回（也称为解冻）操作的模式，具体说明请参考[数据取回及取回模式](https://cloud.tencent.com/document/product/266/56196#retake)。
当媒体文件目前的存储类型为归档存储时，有以下取值：
<li>Expedited：极速模式。</li>
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
当媒体文件目前的存储类型为深度归档存储时，有以下取值：
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
 */
class ModifyMediaStorageClassRequest extends AbstractModel
{
    /**
     * @var array 媒体文件唯一标识列表。
     */
    public $FileIds;

    /**
     * @var string 目标存储类型。可选值有：
<li> STANDARD：标准存储。</li>
<li> STANDARD_IA：低频存储。</li>
<li> ARCHIVE：归档存储。</li>
<li> DEEP_ARCHIVE：深度归档存储。</li>
     */
    public $StorageClass;

    /**
     * @var integer <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 取回模式。当文件的存储类型从归档或深度归档转换为标准存储时，需要指定取回（也称为解冻）操作的模式，具体说明请参考[数据取回及取回模式](https://cloud.tencent.com/document/product/266/56196#retake)。
当媒体文件目前的存储类型为归档存储时，有以下取值：
<li>Expedited：极速模式。</li>
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
当媒体文件目前的存储类型为深度归档存储时，有以下取值：
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
     */
    public $RestoreTier;

    /**
     * @param array $FileIds 媒体文件唯一标识列表。
     * @param string $StorageClass 目标存储类型。可选值有：
<li> STANDARD：标准存储。</li>
<li> STANDARD_IA：低频存储。</li>
<li> ARCHIVE：归档存储。</li>
<li> DEEP_ARCHIVE：深度归档存储。</li>
     * @param integer $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $RestoreTier 取回模式。当文件的存储类型从归档或深度归档转换为标准存储时，需要指定取回（也称为解冻）操作的模式，具体说明请参考[数据取回及取回模式](https://cloud.tencent.com/document/product/266/56196#retake)。
当媒体文件目前的存储类型为归档存储时，有以下取值：
<li>Expedited：极速模式。</li>
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
当媒体文件目前的存储类型为深度归档存储时，有以下取值：
<li>Standard：标准模式。</li>
<li>Bulk：批量模式。</li>
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }
    }
}
