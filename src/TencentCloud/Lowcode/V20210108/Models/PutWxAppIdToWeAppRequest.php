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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PutWxAppIdToWeApp请求参数结构体
 *
 * @method string getWeAppId() 获取应用ID
 * @method void setWeAppId(string $WeAppId) 设置应用ID
 * @method string getWxAppId() 获取微信AppId
 * @method void setWxAppId(string $WxAppId) 设置微信AppId
 */
class PutWxAppIdToWeAppRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $WeAppId;

    /**
     * @var string 微信AppId
     */
    public $WxAppId;

    /**
     * @param string $WeAppId 应用ID
     * @param string $WxAppId 微信AppId
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
        if (array_key_exists("WeAppId",$param) and $param["WeAppId"] !== null) {
            $this->WeAppId = $param["WeAppId"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }
    }
}
