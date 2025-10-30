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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输入信息详情
 *
 * @method string getType() 获取传入的类型可选：URL，COS
 * @method void setType(string $Type) 设置传入的类型可选：URL，COS
 * @method string getUrl() 获取Url地址
 * @method void setUrl(string $Url) 设置Url地址
 * @method string getBucketInfo() 获取桶信息。当输入当时COS时，该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketInfo(string $BucketInfo) 设置桶信息。当输入当时COS时，该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
 */
class InputInfo extends AbstractModel
{
    /**
     * @var string 传入的类型可选：URL，COS
     */
    public $Type;

    /**
     * @var string Url地址
     */
    public $Url;

    /**
     * @var string 桶信息。当输入当时COS时，该字段不为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketInfo;

    /**
     * @param string $Type 传入的类型可选：URL，COS
     * @param string $Url Url地址
     * @param string $BucketInfo 桶信息。当输入当时COS时，该字段不为空
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
