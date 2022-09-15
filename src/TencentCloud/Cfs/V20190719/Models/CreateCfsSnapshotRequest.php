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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsSnapshot请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统id
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method array getResourceTags() 获取快照标签
 * @method void setResourceTags(array $ResourceTags) 设置快照标签
 */
class CreateCfsSnapshotRequest extends AbstractModel
{
    /**
     * @var string 文件系统id
     */
    public $FileSystemId;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var array 快照标签
     */
    public $ResourceTags;

    /**
     * @param string $FileSystemId 文件系统id
     * @param string $SnapshotName 快照名称
     * @param array $ResourceTags 快照标签
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
