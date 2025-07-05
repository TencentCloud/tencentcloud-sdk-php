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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管配置
 *
 * @method integer getReplaceTime() 获取托管资源替换时间， 默认为证书过期前30天存在续费证书则替换
 * @method void setReplaceTime(integer $ReplaceTime) 设置托管资源替换时间， 默认为证书过期前30天存在续费证书则替换
 * @method array getMessageTypes() 获取托管发送消息类型：0，托管开始前消息提醒（没有续费证书也会收到该提示消息）； 1， 托管开始消息提醒（存在续费证书才会收到消息提醒）； 2， 托管资源替换失败消息提醒； 3 托管资源替换成功消息提醒
 * @method void setMessageTypes(array $MessageTypes) 设置托管发送消息类型：0，托管开始前消息提醒（没有续费证书也会收到该提示消息）； 1， 托管开始消息提醒（存在续费证书才会收到消息提醒）； 2， 托管资源替换失败消息提醒； 3 托管资源替换成功消息提醒
 * @method string getReplaceStartTime() 获取资源替换开始时间
 * @method void setReplaceStartTime(string $ReplaceStartTime) 设置资源替换开始时间
 * @method string getReplaceEndTime() 获取资源替换结束时间
 * @method void setReplaceEndTime(string $ReplaceEndTime) 设置资源替换结束时间
 */
class HostingConfig extends AbstractModel
{
    /**
     * @var integer 托管资源替换时间， 默认为证书过期前30天存在续费证书则替换
     */
    public $ReplaceTime;

    /**
     * @var array 托管发送消息类型：0，托管开始前消息提醒（没有续费证书也会收到该提示消息）； 1， 托管开始消息提醒（存在续费证书才会收到消息提醒）； 2， 托管资源替换失败消息提醒； 3 托管资源替换成功消息提醒
     */
    public $MessageTypes;

    /**
     * @var string 资源替换开始时间
     */
    public $ReplaceStartTime;

    /**
     * @var string 资源替换结束时间
     */
    public $ReplaceEndTime;

    /**
     * @param integer $ReplaceTime 托管资源替换时间， 默认为证书过期前30天存在续费证书则替换
     * @param array $MessageTypes 托管发送消息类型：0，托管开始前消息提醒（没有续费证书也会收到该提示消息）； 1， 托管开始消息提醒（存在续费证书才会收到消息提醒）； 2， 托管资源替换失败消息提醒； 3 托管资源替换成功消息提醒
     * @param string $ReplaceStartTime 资源替换开始时间
     * @param string $ReplaceEndTime 资源替换结束时间
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
        if (array_key_exists("ReplaceTime",$param) and $param["ReplaceTime"] !== null) {
            $this->ReplaceTime = $param["ReplaceTime"];
        }

        if (array_key_exists("MessageTypes",$param) and $param["MessageTypes"] !== null) {
            $this->MessageTypes = $param["MessageTypes"];
        }

        if (array_key_exists("ReplaceStartTime",$param) and $param["ReplaceStartTime"] !== null) {
            $this->ReplaceStartTime = $param["ReplaceStartTime"];
        }

        if (array_key_exists("ReplaceEndTime",$param) and $param["ReplaceEndTime"] !== null) {
            $this->ReplaceEndTime = $param["ReplaceEndTime"];
        }
    }
}
