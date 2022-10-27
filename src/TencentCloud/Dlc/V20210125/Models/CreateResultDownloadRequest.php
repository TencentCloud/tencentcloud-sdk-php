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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResultDownload请求参数结构体
 *
 * @method string getTaskId() 获取查询结果任务Id
 * @method void setTaskId(string $TaskId) 设置查询结果任务Id
 * @method string getFormat() 获取下载格式
 * @method void setFormat(string $Format) 设置下载格式
 * @method boolean getForce() 获取是否重新生成下载文件，仅当之前任务为 Timout | Error 时有效
 * @method void setForce(boolean $Force) 设置是否重新生成下载文件，仅当之前任务为 Timout | Error 时有效
 */
class CreateResultDownloadRequest extends AbstractModel
{
    /**
     * @var string 查询结果任务Id
     */
    public $TaskId;

    /**
     * @var string 下载格式
     */
    public $Format;

    /**
     * @var boolean 是否重新生成下载文件，仅当之前任务为 Timout | Error 时有效
     */
    public $Force;

    /**
     * @param string $TaskId 查询结果任务Id
     * @param string $Format 下载格式
     * @param boolean $Force 是否重新生成下载文件，仅当之前任务为 Timout | Error 时有效
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

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
