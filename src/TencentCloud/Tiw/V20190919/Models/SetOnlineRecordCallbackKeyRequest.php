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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetOnlineRecordCallbackKey请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置应用的SdkAppId
 * @method string getCallbackKey() 获取设置实时录制回调鉴权密钥，最长64字符，如果传入空字符串，那么删除现有的鉴权回调密钥
 * @method void setCallbackKey(string $CallbackKey) 设置设置实时录制回调鉴权密钥，最长64字符，如果传入空字符串，那么删除现有的鉴权回调密钥
 */
class SetOnlineRecordCallbackKeyRequest extends AbstractModel
{
    /**
     * @var integer 应用的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 设置实时录制回调鉴权密钥，最长64字符，如果传入空字符串，那么删除现有的鉴权回调密钥
     */
    public $CallbackKey;

    /**
     * @param integer $SdkAppId 应用的SdkAppId
     * @param string $CallbackKey 设置实时录制回调鉴权密钥，最长64字符，如果传入空字符串，那么删除现有的鉴权回调密钥
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
        if (array_key_exists('SdkAppId',$param) and $param['SdkAppId'] !== null) {
            $this->SdkAppId = $param['SdkAppId'];
        }

        if (array_key_exists('CallbackKey',$param) and $param['CallbackKey'] !== null) {
            $this->CallbackKey = $param['CallbackKey'];
        }
    }
}
