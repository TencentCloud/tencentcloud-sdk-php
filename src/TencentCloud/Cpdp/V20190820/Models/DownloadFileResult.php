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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上传下载响应对象
 *
 * @method string getContent() 获取文件内容（base64加密的二进制内容）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置文件内容（base64加密的二进制内容）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorage() 获取存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorage(string $Storage) 设置存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
注意：此字段可能返回 null，表示取不到有效值。
 */
class DownloadFileResult extends AbstractModel
{
    /**
     * @var string 文件内容（base64加密的二进制内容）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string 存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Storage;

    /**
     * @param string $Content 文件内容（base64加密的二进制内容）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Storage 存储区域（0私密区，1公共区），请严格按文件要求，上传到不同的区域
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }
    }
}
