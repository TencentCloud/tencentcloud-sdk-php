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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartPublishStreamWithURL请求参数结构体
 *
 * @method string getUserId() 获取唯一用户身份标识，由业务方自定义，平台不予理解。
 * @method void setUserId(string $UserId) 设置唯一用户身份标识，由业务方自定义，平台不予理解。
 * @method string getPublishStreamURL() 获取推流地址，仅支持rtmp协议。
 * @method void setPublishStreamURL(string $PublishStreamURL) 设置推流地址，仅支持rtmp协议。
 */
class StartPublishStreamWithURLRequest extends AbstractModel
{
    /**
     * @var string 唯一用户身份标识，由业务方自定义，平台不予理解。
     */
    public $UserId;

    /**
     * @var string 推流地址，仅支持rtmp协议。
     */
    public $PublishStreamURL;

    /**
     * @param string $UserId 唯一用户身份标识，由业务方自定义，平台不予理解。
     * @param string $PublishStreamURL 推流地址，仅支持rtmp协议。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PublishStreamURL",$param) and $param["PublishStreamURL"] !== null) {
            $this->PublishStreamURL = $param["PublishStreamURL"];
        }
    }
}
