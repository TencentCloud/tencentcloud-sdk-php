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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全网关自定义日志配置
 *
 * @method boolean getNeedReqBodyLog() 获取是否需要请求体
 * @method void setNeedReqBodyLog(boolean $NeedReqBodyLog) 设置是否需要请求体
 * @method boolean getNeedReqHeaderLog() 获取是否需要请求头
 * @method void setNeedReqHeaderLog(boolean $NeedReqHeaderLog) 设置是否需要请求头
 * @method boolean getNeedRspBodyLog() 获取是否需要回包体
 * @method void setNeedRspBodyLog(boolean $NeedRspBodyLog) 设置是否需要回包体
 * @method boolean getNeedRspHeaderLog() 获取是否需要回包头部信息
 * @method void setNeedRspHeaderLog(boolean $NeedRspHeaderLog) 设置是否需要回包头部信息
 * @method string getLogSetId() 获取cls set信息
 * @method void setLogSetId(string $LogSetId) 设置cls set信息
 * @method string getLogTopicId() 获取cls topicId
 * @method void setLogTopicId(string $LogTopicId) 设置cls topicId
 */
class CustomLogConfig extends AbstractModel
{
    /**
     * @var boolean 是否需要请求体
     */
    public $NeedReqBodyLog;

    /**
     * @var boolean 是否需要请求头
     */
    public $NeedReqHeaderLog;

    /**
     * @var boolean 是否需要回包体
     */
    public $NeedRspBodyLog;

    /**
     * @var boolean 是否需要回包头部信息
     */
    public $NeedRspHeaderLog;

    /**
     * @var string cls set信息
     */
    public $LogSetId;

    /**
     * @var string cls topicId
     */
    public $LogTopicId;

    /**
     * @param boolean $NeedReqBodyLog 是否需要请求体
     * @param boolean $NeedReqHeaderLog 是否需要请求头
     * @param boolean $NeedRspBodyLog 是否需要回包体
     * @param boolean $NeedRspHeaderLog 是否需要回包头部信息
     * @param string $LogSetId cls set信息
     * @param string $LogTopicId cls topicId
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
        if (array_key_exists("NeedReqBodyLog",$param) and $param["NeedReqBodyLog"] !== null) {
            $this->NeedReqBodyLog = $param["NeedReqBodyLog"];
        }

        if (array_key_exists("NeedReqHeaderLog",$param) and $param["NeedReqHeaderLog"] !== null) {
            $this->NeedReqHeaderLog = $param["NeedReqHeaderLog"];
        }

        if (array_key_exists("NeedRspBodyLog",$param) and $param["NeedRspBodyLog"] !== null) {
            $this->NeedRspBodyLog = $param["NeedRspBodyLog"];
        }

        if (array_key_exists("NeedRspHeaderLog",$param) and $param["NeedRspHeaderLog"] !== null) {
            $this->NeedRspHeaderLog = $param["NeedRspHeaderLog"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
