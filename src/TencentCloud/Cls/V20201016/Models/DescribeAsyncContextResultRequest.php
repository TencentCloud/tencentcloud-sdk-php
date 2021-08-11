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
 * DescribeAsyncContextResult请求参数结构体
 *
 * @method string getAsyncContextTaskId() 获取异步检索任务ID
 * @method void setAsyncContextTaskId(string $AsyncContextTaskId) 设置异步检索任务ID
 * @method string getPkgId() 获取日志包序号
 * @method void setPkgId(string $PkgId) 设置日志包序号
 * @method string getPkgLogId() 获取日志在日志包内的序号
 * @method void setPkgLogId(string $PkgLogId) 设置日志在日志包内的序号
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getPrevLogs() 获取上文日志条数，默认值10
 * @method void setPrevLogs(integer $PrevLogs) 设置上文日志条数，默认值10
 * @method integer getNextLogs() 获取下文日志条数，默认值10
 * @method void setNextLogs(integer $NextLogs) 设置下文日志条数，默认值10
 */
class DescribeAsyncContextResultRequest extends AbstractModel
{
    /**
     * @var string 异步检索任务ID
     */
    public $AsyncContextTaskId;

    /**
     * @var string 日志包序号
     */
    public $PkgId;

    /**
     * @var string 日志在日志包内的序号
     */
    public $PkgLogId;

    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 上文日志条数，默认值10
     */
    public $PrevLogs;

    /**
     * @var integer 下文日志条数，默认值10
     */
    public $NextLogs;

    /**
     * @param string $AsyncContextTaskId 异步检索任务ID
     * @param string $PkgId 日志包序号
     * @param string $PkgLogId 日志在日志包内的序号
     * @param string $TopicId 日志主题ID
     * @param integer $PrevLogs 上文日志条数，默认值10
     * @param integer $NextLogs 下文日志条数，默认值10
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
        if (array_key_exists("AsyncContextTaskId",$param) and $param["AsyncContextTaskId"] !== null) {
            $this->AsyncContextTaskId = $param["AsyncContextTaskId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
        }
    }
}
