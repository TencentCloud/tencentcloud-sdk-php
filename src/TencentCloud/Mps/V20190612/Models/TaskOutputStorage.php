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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体处理输出对象信息。
 *
 * @method string getType() 获取媒体处理输出对象存储位置的类型，支持：
<li>COS：COS存储</li>
<li>AWS-S3：AWS 存储，只适用于AWS任务，且要求同区域</li>
 * @method void setType(string $Type) 设置媒体处理输出对象存储位置的类型，支持：
<li>COS：COS存储</li>
<li>AWS-S3：AWS 存储，只适用于AWS任务，且要求同区域</li>
 * @method CosOutputStorage getCosOutputStorage() 获取当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosOutputStorage(CosOutputStorage $CosOutputStorage) 设置当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method S3OutputStorage getS3OutputStorage() 获取当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3OutputStorage(S3OutputStorage $S3OutputStorage) 设置当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskOutputStorage extends AbstractModel
{
    /**
     * @var string 媒体处理输出对象存储位置的类型，支持：
<li>COS：COS存储</li>
<li>AWS-S3：AWS 存储，只适用于AWS任务，且要求同区域</li>
     */
    public $Type;

    /**
     * @var CosOutputStorage 当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosOutputStorage;

    /**
     * @var S3OutputStorage 当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3OutputStorage;

    /**
     * @param string $Type 媒体处理输出对象存储位置的类型，支持：
<li>COS：COS存储</li>
<li>AWS-S3：AWS 存储，只适用于AWS任务，且要求同区域</li>
     * @param CosOutputStorage $CosOutputStorage 当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 输出位置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param S3OutputStorage $S3OutputStorage 当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 输出位置。
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

        if (array_key_exists("CosOutputStorage",$param) and $param["CosOutputStorage"] !== null) {
            $this->CosOutputStorage = new CosOutputStorage();
            $this->CosOutputStorage->deserialize($param["CosOutputStorage"]);
        }

        if (array_key_exists("S3OutputStorage",$param) and $param["S3OutputStorage"] !== null) {
            $this->S3OutputStorage = new S3OutputStorage();
            $this->S3OutputStorage->deserialize($param["S3OutputStorage"]);
        }
    }
}
