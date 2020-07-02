<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Solar\V20181011\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTemplateHeaders请求参数结构体
 *
 * @method string getWxAppId() 获取微信公众号appId
 * @method void setWxAppId(string $WxAppId) 设置微信公众号appId
 */
class DescribeResourceTemplateHeadersRequest extends AbstractModel
{
    /**
     * @var string 微信公众号appId
     */
    public $WxAppId;

    /**
     * @param string $WxAppId 微信公众号appId
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
        if (array_key_exists('WxAppId',$param) and $param['WxAppId'] !== null) {
            $this->WxAppId = $param['WxAppId'];
        }
    }
}
