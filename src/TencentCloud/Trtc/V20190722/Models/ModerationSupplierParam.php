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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 送审到第三方审核供应商需要参数
 *
 * @method string getAppID() 获取供应审核商账号id，数美天御不为空，易盾为空
 * @method void setAppID(string $AppID) 设置供应审核商账号id，数美天御不为空，易盾为空
 * @method string getSecretId() 获取供应审核商秘钥id
 * @method void setSecretId(string $SecretId) 设置供应审核商秘钥id
 * @method string getSecretKey() 获取供应审核商秘钥key
 * @method void setSecretKey(string $SecretKey) 设置供应审核商秘钥key
 * @method string getAudioBizType() 获取音频场景，策略id或者businessId
 * @method void setAudioBizType(string $AudioBizType) 设置音频场景，策略id或者businessId
 * @method string getImageBizType() 获取图片场景，策略id或者businessId
 * @method void setImageBizType(string $ImageBizType) 设置图片场景，策略id或者businessId
 */
class ModerationSupplierParam extends AbstractModel
{
    /**
     * @var string 供应审核商账号id，数美天御不为空，易盾为空
     */
    public $AppID;

    /**
     * @var string 供应审核商秘钥id
     */
    public $SecretId;

    /**
     * @var string 供应审核商秘钥key
     */
    public $SecretKey;

    /**
     * @var string 音频场景，策略id或者businessId
     */
    public $AudioBizType;

    /**
     * @var string 图片场景，策略id或者businessId
     */
    public $ImageBizType;

    /**
     * @param string $AppID 供应审核商账号id，数美天御不为空，易盾为空
     * @param string $SecretId 供应审核商秘钥id
     * @param string $SecretKey 供应审核商秘钥key
     * @param string $AudioBizType 音频场景，策略id或者businessId
     * @param string $ImageBizType 图片场景，策略id或者businessId
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("AudioBizType",$param) and $param["AudioBizType"] !== null) {
            $this->AudioBizType = $param["AudioBizType"];
        }

        if (array_key_exists("ImageBizType",$param) and $param["ImageBizType"] !== null) {
            $this->ImageBizType = $param["ImageBizType"];
        }
    }
}
