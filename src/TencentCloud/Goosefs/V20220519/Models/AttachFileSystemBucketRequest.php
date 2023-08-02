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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachFileSystemBucket请求参数结构体
 *
 * @method string getFileSystemId() 获取无
 * @method void setFileSystemId(string $FileSystemId) 设置无
 * @method MappedBucket getBucket() 获取关联新Bucket
 * @method void setBucket(MappedBucket $Bucket) 设置关联新Bucket
 */
class AttachFileSystemBucketRequest extends AbstractModel
{
    /**
     * @var string 无
     */
    public $FileSystemId;

    /**
     * @var MappedBucket 关联新Bucket
     */
    public $Bucket;

    /**
     * @param string $FileSystemId 无
     * @param MappedBucket $Bucket 关联新Bucket
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

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = new MappedBucket();
            $this->Bucket->deserialize($param["Bucket"]);
        }
    }
}
