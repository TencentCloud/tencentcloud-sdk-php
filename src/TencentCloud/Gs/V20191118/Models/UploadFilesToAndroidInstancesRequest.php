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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadFilesToAndroidInstances请求参数结构体
 *
 * @method array getFiles() 获取上传文件信息列表
 * @method void setFiles(array $Files) 设置上传文件信息列表
 */
class UploadFilesToAndroidInstancesRequest extends AbstractModel
{
    /**
     * @var array 上传文件信息列表
     */
    public $Files;

    /**
     * @param array $Files 上传文件信息列表
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
        if (array_key_exists("Files",$param) and $param["Files"] !== null) {
            $this->Files = [];
            foreach ($param["Files"] as $key => $value){
                $obj = new AndroidInstanceUploadFile();
                $obj->deserialize($value);
                array_push($this->Files, $obj);
            }
        }
    }
}
