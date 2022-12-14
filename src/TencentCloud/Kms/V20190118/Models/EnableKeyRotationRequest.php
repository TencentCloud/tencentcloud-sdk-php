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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableKeyRotation请求参数结构体
 *
 * @method string getKeyId() 获取CMK唯一标识符
 * @method void setKeyId(string $KeyId) 设置CMK唯一标识符
 * @method integer getRotateDays() 获取密钥轮转周期，单位天，允许范围 7 ~ 365，默认值 365。
 * @method void setRotateDays(integer $RotateDays) 设置密钥轮转周期，单位天，允许范围 7 ~ 365，默认值 365。
 */
class EnableKeyRotationRequest extends AbstractModel
{
    /**
     * @var string CMK唯一标识符
     */
    public $KeyId;

    /**
     * @var integer 密钥轮转周期，单位天，允许范围 7 ~ 365，默认值 365。
     */
    public $RotateDays;

    /**
     * @param string $KeyId CMK唯一标识符
     * @param integer $RotateDays 密钥轮转周期，单位天，允许范围 7 ~ 365，默认值 365。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("RotateDays",$param) and $param["RotateDays"] !== null) {
            $this->RotateDays = $param["RotateDays"];
        }
    }
}
