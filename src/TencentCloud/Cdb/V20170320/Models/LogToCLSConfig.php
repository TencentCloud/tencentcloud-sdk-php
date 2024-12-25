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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DB实例慢日志、错误日志投递CLS配置
 *
 * @method string getStatus() 获取投递状态打开或者关闭
 * @method void setStatus(string $Status) 设置投递状态打开或者关闭
 * @method string getLogSetId() 获取CLS日志集ID
 * @method void setLogSetId(string $LogSetId) 设置CLS日志集ID
 * @method string getLogTopicId() 获取日志主题ID
 * @method void setLogTopicId(string $LogTopicId) 设置日志主题ID
 * @method string getClsRegion() 获取CLS服务所在地域
 * @method void setClsRegion(string $ClsRegion) 设置CLS服务所在地域
 */
class LogToCLSConfig extends AbstractModel
{
    /**
     * @var string 投递状态打开或者关闭
     */
    public $Status;

    /**
     * @var string CLS日志集ID
     */
    public $LogSetId;

    /**
     * @var string 日志主题ID
     */
    public $LogTopicId;

    /**
     * @var string CLS服务所在地域
     */
    public $ClsRegion;

    /**
     * @param string $Status 投递状态打开或者关闭
     * @param string $LogSetId CLS日志集ID
     * @param string $LogTopicId 日志主题ID
     * @param string $ClsRegion CLS服务所在地域
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }
    }
}
