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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建文件夹结果
 *
 * @method string getFolderId() 获取创建成功的文件夹ID。如果创建失败则报错。
 * @method void setFolderId(string $FolderId) 设置创建成功的文件夹ID。如果创建失败则报错。
 */
class CreateFolderResult extends AbstractModel
{
    /**
     * @var string 创建成功的文件夹ID。如果创建失败则报错。
     */
    public $FolderId;

    /**
     * @param string $FolderId 创建成功的文件夹ID。如果创建失败则报错。
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
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }
    }
}
