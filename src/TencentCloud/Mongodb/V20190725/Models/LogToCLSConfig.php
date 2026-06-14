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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递CLS配置
 *
 * @method string getCLSRegion() 获取<p>CLS服务所在地域</p>
 * @method void setCLSRegion(string $CLSRegion) 设置<p>CLS服务所在地域</p>
 * @method string getStatus() 获取<p>投递状态打开或者关闭</p>
 * @method void setStatus(string $Status) 设置<p>投递状态打开或者关闭</p>
 * @method string getLogSetId() 获取<p>CLS日志集ID</p>
 * @method void setLogSetId(string $LogSetId) 设置<p>CLS日志集ID</p>
 * @method string getLogTopicId() 获取<p>日志主题ID</p>
 * @method void setLogTopicId(string $LogTopicId) 设置<p>日志主题ID</p>
 */
class LogToCLSConfig extends AbstractModel
{
    /**
     * @var string <p>CLS服务所在地域</p>
     */
    public $CLSRegion;

    /**
     * @var string <p>投递状态打开或者关闭</p>
     */
    public $Status;

    /**
     * @var string <p>CLS日志集ID</p>
     */
    public $LogSetId;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $LogTopicId;

    /**
     * @param string $CLSRegion <p>CLS服务所在地域</p>
     * @param string $Status <p>投递状态打开或者关闭</p>
     * @param string $LogSetId <p>CLS日志集ID</p>
     * @param string $LogTopicId <p>日志主题ID</p>
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
        if (array_key_exists("CLSRegion",$param) and $param["CLSRegion"] !== null) {
            $this->CLSRegion = $param["CLSRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }
    }
}
