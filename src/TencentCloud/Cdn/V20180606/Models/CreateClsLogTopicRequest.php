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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClsLogTopic请求参数结构体
 *
 * @method string getTopicName() 获取日志主题名称
 * @method void setTopicName(string $TopicName) 设置日志主题名称
 * @method string getLogsetId() 获取日志集ID
 * @method void setLogsetId(string $LogsetId) 设置日志集ID
 * @method string getChannel() 获取接入渠道，cdn或者ecdn，默认值为cdn
 * @method void setChannel(string $Channel) 设置接入渠道，cdn或者ecdn，默认值为cdn
 * @method array getDomainAreaConfigs() 获取域名区域信息
 * @method void setDomainAreaConfigs(array $DomainAreaConfigs) 设置域名区域信息
 * @method boolean getInheritDomainTags() 获取是否继承域名标签，默认为false
 * @method void setInheritDomainTags(boolean $InheritDomainTags) 设置是否继承域名标签，默认为false
 */
class CreateClsLogTopicRequest extends AbstractModel
{
    /**
     * @var string 日志主题名称
     */
    public $TopicName;

    /**
     * @var string 日志集ID
     */
    public $LogsetId;

    /**
     * @var string 接入渠道，cdn或者ecdn，默认值为cdn
     */
    public $Channel;

    /**
     * @var array 域名区域信息
     */
    public $DomainAreaConfigs;

    /**
     * @var boolean 是否继承域名标签，默认为false
     */
    public $InheritDomainTags;

    /**
     * @param string $TopicName 日志主题名称
     * @param string $LogsetId 日志集ID
     * @param string $Channel 接入渠道，cdn或者ecdn，默认值为cdn
     * @param array $DomainAreaConfigs 域名区域信息
     * @param boolean $InheritDomainTags 是否继承域名标签，默认为false
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("DomainAreaConfigs",$param) and $param["DomainAreaConfigs"] !== null) {
            $this->DomainAreaConfigs = [];
            foreach ($param["DomainAreaConfigs"] as $key => $value){
                $obj = new DomainAreaConfig();
                $obj->deserialize($value);
                array_push($this->DomainAreaConfigs, $obj);
            }
        }

        if (array_key_exists("InheritDomainTags",$param) and $param["InheritDomainTags"] !== null) {
            $this->InheritDomainTags = $param["InheritDomainTags"];
        }
    }
}
