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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 回调目标信息
 *
 * @method string getCallbackId() 获取回调目标 ID
 * @method void setCallbackId(string $CallbackId) 设置回调目标 ID
 * @method string getCallbackToken() 获取回调签名 token
 * @method void setCallbackToken(string $CallbackToken) 设置回调签名 token
 * @method string getCallbackUrl() 获取回调 URL
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调 URL
 * @method integer getCreateTime() 获取创建时间（秒级时间戳）
 * @method void setCreateTime(integer $CreateTime) 设置创建时间（秒级时间戳）
 * @method string getType() 获取回调类型
 * @method void setType(string $Type) 设置回调类型
 * @method integer getUpdateTime() 获取更新时间（秒级时间戳）
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间（秒级时间戳）
 */
class SeeCallbackInfo extends AbstractModel
{
    /**
     * @var string 回调目标 ID
     */
    public $CallbackId;

    /**
     * @var string 回调签名 token
     */
    public $CallbackToken;

    /**
     * @var string 回调 URL
     */
    public $CallbackUrl;

    /**
     * @var integer 创建时间（秒级时间戳）
     */
    public $CreateTime;

    /**
     * @var string 回调类型
     */
    public $Type;

    /**
     * @var integer 更新时间（秒级时间戳）
     */
    public $UpdateTime;

    /**
     * @param string $CallbackId 回调目标 ID
     * @param string $CallbackToken 回调签名 token
     * @param string $CallbackUrl 回调 URL
     * @param integer $CreateTime 创建时间（秒级时间戳）
     * @param string $Type 回调类型
     * @param integer $UpdateTime 更新时间（秒级时间戳）
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
        if (array_key_exists("CallbackId",$param) and $param["CallbackId"] !== null) {
            $this->CallbackId = $param["CallbackId"];
        }

        if (array_key_exists("CallbackToken",$param) and $param["CallbackToken"] !== null) {
            $this->CallbackToken = $param["CallbackToken"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
