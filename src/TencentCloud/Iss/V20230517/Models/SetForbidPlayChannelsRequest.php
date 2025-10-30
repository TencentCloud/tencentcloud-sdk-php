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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetForbidPlayChannels请求参数结构体
 *
 * @method array getChannels() 获取要禁播的通道参数，一次最多可以设置200个通道
 * @method void setChannels(array $Channels) 设置要禁播的通道参数，一次最多可以设置200个通道
 * @method string getUserId() 获取用户uin，可以是子用户的也可以是主用户的uin
 * @method void setUserId(string $UserId) 设置用户uin，可以是子用户的也可以是主用户的uin
 */
class SetForbidPlayChannelsRequest extends AbstractModel
{
    /**
     * @var array 要禁播的通道参数，一次最多可以设置200个通道
     */
    public $Channels;

    /**
     * @var string 用户uin，可以是子用户的也可以是主用户的uin
     */
    public $UserId;

    /**
     * @param array $Channels 要禁播的通道参数，一次最多可以设置200个通道
     * @param string $UserId 用户uin，可以是子用户的也可以是主用户的uin
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
        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new SetForbidplayChannelParam();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
