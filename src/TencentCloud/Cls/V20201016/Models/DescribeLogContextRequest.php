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
 * DescribeLogContext请求参数结构体
 *
 * @method string getTopicId() 获取要查询的日志主题ID
 * @method void setTopicId(string $TopicId) 设置要查询的日志主题ID
 * @method string getBTime() 获取日志时间,  格式: YYYY-mm-dd HH:MM:SS.FFF
 * @method void setBTime(string $BTime) 设置日志时间,  格式: YYYY-mm-dd HH:MM:SS.FFF
 * @method string getPkgId() 获取日志包序号。SearchLog接口返回信息中Results结构体中的PkgId。
 * @method void setPkgId(string $PkgId) 设置日志包序号。SearchLog接口返回信息中Results结构体中的PkgId。
 * @method integer getPkgLogId() 获取日志包内一条日志的序号。
SearchLog接口返回信息中Results结构中的PkgLogId。
 * @method void setPkgLogId(integer $PkgLogId) 设置日志包内一条日志的序号。
SearchLog接口返回信息中Results结构中的PkgLogId。
 * @method integer getPrevLogs() 获取前${PrevLogs}条日志，默认值10。
 * @method void setPrevLogs(integer $PrevLogs) 设置前${PrevLogs}条日志，默认值10。
 * @method integer getNextLogs() 获取后${NextLogs}条日志，默认值10。
 * @method void setNextLogs(integer $NextLogs) 设置后${NextLogs}条日志，默认值10。
 */
class DescribeLogContextRequest extends AbstractModel
{
    /**
     * @var string 要查询的日志主题ID
     */
    public $TopicId;

    /**
     * @var string 日志时间,  格式: YYYY-mm-dd HH:MM:SS.FFF
     */
    public $BTime;

    /**
     * @var string 日志包序号。SearchLog接口返回信息中Results结构体中的PkgId。
     */
    public $PkgId;

    /**
     * @var integer 日志包内一条日志的序号。
SearchLog接口返回信息中Results结构中的PkgLogId。
     */
    public $PkgLogId;

    /**
     * @var integer 前${PrevLogs}条日志，默认值10。
     */
    public $PrevLogs;

    /**
     * @var integer 后${NextLogs}条日志，默认值10。
     */
    public $NextLogs;

    /**
     * @param string $TopicId 要查询的日志主题ID
     * @param string $BTime 日志时间,  格式: YYYY-mm-dd HH:MM:SS.FFF
     * @param string $PkgId 日志包序号。SearchLog接口返回信息中Results结构体中的PkgId。
     * @param integer $PkgLogId 日志包内一条日志的序号。
SearchLog接口返回信息中Results结构中的PkgLogId。
     * @param integer $PrevLogs 前${PrevLogs}条日志，默认值10。
     * @param integer $NextLogs 后${NextLogs}条日志，默认值10。
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

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
        }
    }
}
