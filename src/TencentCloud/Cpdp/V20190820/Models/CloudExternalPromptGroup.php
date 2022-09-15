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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道扩展促销信息
 *
 * @method string getChannelName() 获取渠道名。
为米大师定义的枚举值：
wechat 微信渠道
 * @method void setChannelName(string $ChannelName) 设置渠道名。
为米大师定义的枚举值：
wechat 微信渠道
 * @method array getExternalPromptInfoList() 获取渠道扩展促销信息列表，由各个渠道自行定义。
ChannelName为wechat时，组成为 <Wechat-ExternalPromptInfo>
 * @method void setExternalPromptInfoList(array $ExternalPromptInfoList) 设置渠道扩展促销信息列表，由各个渠道自行定义。
ChannelName为wechat时，组成为 <Wechat-ExternalPromptInfo>
 */
class CloudExternalPromptGroup extends AbstractModel
{
    /**
     * @var string 渠道名。
为米大师定义的枚举值：
wechat 微信渠道
     */
    public $ChannelName;

    /**
     * @var array 渠道扩展促销信息列表，由各个渠道自行定义。
ChannelName为wechat时，组成为 <Wechat-ExternalPromptInfo>
     */
    public $ExternalPromptInfoList;

    /**
     * @param string $ChannelName 渠道名。
为米大师定义的枚举值：
wechat 微信渠道
     * @param array $ExternalPromptInfoList 渠道扩展促销信息列表，由各个渠道自行定义。
ChannelName为wechat时，组成为 <Wechat-ExternalPromptInfo>
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ExternalPromptInfoList",$param) and $param["ExternalPromptInfoList"] !== null) {
            $this->ExternalPromptInfoList = [];
            foreach ($param["ExternalPromptInfoList"] as $key => $value){
                $obj = new CloudExternalPromptInfo();
                $obj->deserialize($value);
                array_push($this->ExternalPromptInfoList, $obj);
            }
        }
    }
}
