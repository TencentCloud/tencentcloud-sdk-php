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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * databuddy 产物json 响应
 *
 * @method string getPath() 获取<p>文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSize() 获取<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(string $Size) 设置<p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取<p>文件内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>文件内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultCode() 获取<p>请求状态码 0-成功，其他-异常</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultCode(integer $ResultCode) 设置<p>请求状态码 0-成功，其他-异常</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>返回结果提示信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>返回结果提示信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReadProductJsonRsp extends AbstractModel
{
    /**
     * @var string <p>文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string <p>文件内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer <p>请求状态码 0-成功，其他-异常</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultCode;

    /**
     * @var string <p>返回结果提示信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Path <p>文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Size <p>文件大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content <p>文件内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultCode <p>请求状态码 0-成功，其他-异常</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>返回结果提示信息</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
