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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入信息详情
 *
 * @method string getType() 获取该字段表示文件访问类型，取值为**URL**（资源链接）和**COS** (腾讯云对象存储)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置该字段表示文件访问类型，取值为**URL**（资源链接）和**COS** (腾讯云对象存储)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketInfo() 获取该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketInfo(string $BucketInfo) 设置该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string 该字段表示文件访问类型，取值为**URL**（资源链接）和**COS** (腾讯云对象存储)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketInfo;

    /**
     * @param string $Type 该字段表示文件访问类型，取值为**URL**（资源链接）和**COS** (腾讯云对象存储)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 该字段表示文件访问的链接地址，格式为标准URL格式。<br> 备注：当Type为URL时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketInfo 该字段表示文件访问的腾讯云存储桶信息。<br> 备注：当Type为COS时此字段不为空。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("BucketInfo",$param) and $param["BucketInfo"] !== null) {
            $this->BucketInfo = $param["BucketInfo"];
        }
    }
}
