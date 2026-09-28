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
 * 文件夹定位器
 *
 * @method string getFolderId() 获取<p>节点id</p>
 * @method void setFolderId(string $FolderId) 设置<p>节点id</p>
 * @method string getPathName() 获取<p>节点path</p>
 * @method void setPathName(string $PathName) 设置<p>节点path</p>
 */
class FolderLocator extends AbstractModel
{
    /**
     * @var string <p>节点id</p>
     */
    public $FolderId;

    /**
     * @var string <p>节点path</p>
     */
    public $PathName;

    /**
     * @param string $FolderId <p>节点id</p>
     * @param string $PathName <p>节点path</p>
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

        if (array_key_exists("PathName",$param) and $param["PathName"] !== null) {
            $this->PathName = $param["PathName"];
        }
    }
}
