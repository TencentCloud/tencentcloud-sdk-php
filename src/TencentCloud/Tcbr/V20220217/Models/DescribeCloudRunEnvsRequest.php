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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudRunEnvs请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID，如果传了这个参数则只返回该环境的相关信息</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID，如果传了这个参数则只返回该环境的相关信息</p>
 * @method boolean getIsVisible() 获取<p>指定Channels字段为可见渠道列表或不可见渠道列表<br>如只想获取渠道A的环境 就填写IsVisible= true,Channels = [&quot;A&quot;], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = [&quot;A&quot;]</p>
 * @method void setIsVisible(boolean $IsVisible) 设置<p>指定Channels字段为可见渠道列表或不可见渠道列表<br>如只想获取渠道A的环境 就填写IsVisible= true,Channels = [&quot;A&quot;], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = [&quot;A&quot;]</p>
 * @method array getChannels() 获取<p>渠道列表，代表可见或不可见渠道由IsVisible参数指定</p>
 * @method void setChannels(array $Channels) 设置<p>渠道列表，代表可见或不可见渠道由IsVisible参数指定</p>
 */
class DescribeCloudRunEnvsRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID，如果传了这个参数则只返回该环境的相关信息</p>
     */
    public $EnvId;

    /**
     * @var boolean <p>指定Channels字段为可见渠道列表或不可见渠道列表<br>如只想获取渠道A的环境 就填写IsVisible= true,Channels = [&quot;A&quot;], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = [&quot;A&quot;]</p>
     */
    public $IsVisible;

    /**
     * @var array <p>渠道列表，代表可见或不可见渠道由IsVisible参数指定</p>
     */
    public $Channels;

    /**
     * @param string $EnvId <p>环境ID，如果传了这个参数则只返回该环境的相关信息</p>
     * @param boolean $IsVisible <p>指定Channels字段为可见渠道列表或不可见渠道列表<br>如只想获取渠道A的环境 就填写IsVisible= true,Channels = [&quot;A&quot;], 过滤渠道A拉取其他渠道环境时填写IsVisible= false,Channels = [&quot;A&quot;]</p>
     * @param array $Channels <p>渠道列表，代表可见或不可见渠道由IsVisible参数指定</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("IsVisible",$param) and $param["IsVisible"] !== null) {
            $this->IsVisible = $param["IsVisible"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = $param["Channels"];
        }
    }
}
