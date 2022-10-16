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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数提交版本信息
 *
 * @method string getTag() 获取版本号：V0 V1 V2
 * @method void setTag(string $Tag) 设置版本号：V0 V1 V2
 * @method string getUserId() 获取提交人 ID
 * @method void setUserId(string $UserId) 设置提交人 ID
 * @method string getType() 获取变更类型：ADD、MODIFY
 * @method void setType(string $Type) 设置变更类型：ADD、MODIFY
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method string getTimestamp() 获取提交时间: UTC 秒数
 * @method void setTimestamp(string $Timestamp) 设置提交时间: UTC 秒数
 * @method string getUserName() 获取提交人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置提交人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取版本内容：json string 格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置版本内容：json string 格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class FunctionVersion extends AbstractModel
{
    /**
     * @var string 版本号：V0 V1 V2
     */
    public $Tag;

    /**
     * @var string 提交人 ID
     */
    public $UserId;

    /**
     * @var string 变更类型：ADD、MODIFY
     */
    public $Type;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var string 提交时间: UTC 秒数
     */
    public $Timestamp;

    /**
     * @var string 提交人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 版本内容：json string 格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Tag 版本号：V0 V1 V2
     * @param string $UserId 提交人 ID
     * @param string $Type 变更类型：ADD、MODIFY
     * @param string $Comment 备注
     * @param string $Timestamp 提交时间: UTC 秒数
     * @param string $UserName 提交人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 版本内容：json string 格式
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
