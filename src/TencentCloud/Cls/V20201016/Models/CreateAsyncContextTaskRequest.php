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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAsyncContextTask请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getTime() 获取日志时间，单位ms
 * @method void setTime(integer $Time) 设置日志时间，单位ms
 * @method string getPkgId() 获取日志包序号
 * @method void setPkgId(string $PkgId) 设置日志包序号
 * @method string getPkgLogId() 获取日志包内一条日志的序号
 * @method void setPkgLogId(string $PkgLogId) 设置日志包内一条日志的序号
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getAsyncSearchTaskId() 获取异步检索任务ID
 * @method void setAsyncSearchTaskId(string $AsyncSearchTaskId) 设置异步检索任务ID
 */
class CreateAsyncContextTaskRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 日志时间，单位ms
     */
    public $Time;

    /**
     * @var string 日志包序号
     */
    public $PkgId;

    /**
     * @var string 日志包内一条日志的序号
     */
    public $PkgLogId;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 异步检索任务ID
     */
    public $AsyncSearchTaskId;

    /**
     * @param string $TopicId 日志主题ID
     * @param integer $Time 日志时间，单位ms
     * @param string $PkgId 日志包序号
     * @param string $PkgLogId 日志包内一条日志的序号
     * @param string $LogsetId 日志集ID
     * @param string $AsyncSearchTaskId 异步检索任务ID
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("AsyncSearchTaskId",$param) and $param["AsyncSearchTaskId"] !== null) {
            $this->AsyncSearchTaskId = $param["AsyncSearchTaskId"];
        }
    }
}
