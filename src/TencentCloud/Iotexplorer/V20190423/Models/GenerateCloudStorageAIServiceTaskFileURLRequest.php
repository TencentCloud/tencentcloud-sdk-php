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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateCloudStorageAIServiceTaskFileURL请求参数结构体
 *
 * @method string getTaskId() 获取产品 ID
 * @method void setTaskId(string $TaskId) 设置产品 ID
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method integer getExpireTime() 获取过期时间 UNIX 时间戳（默认值为当前时间 1 小时后，最大不超过文件所属任务的过期时间）
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间 UNIX 时间戳（默认值为当前时间 1 小时后，最大不超过文件所属任务的过期时间）
 */
class GenerateCloudStorageAIServiceTaskFileURLRequest extends AbstractModel
{
    /**
     * @var string 产品 ID
     */
    public $TaskId;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var integer 过期时间 UNIX 时间戳（默认值为当前时间 1 小时后，最大不超过文件所属任务的过期时间）
     */
    public $ExpireTime;

    /**
     * @param string $TaskId 产品 ID
     * @param string $FileName 文件名
     * @param integer $ExpireTime 过期时间 UNIX 时间戳（默认值为当前时间 1 小时后，最大不超过文件所属任务的过期时间）
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
