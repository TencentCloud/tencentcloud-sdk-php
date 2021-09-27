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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理账号key详情
 *
 * @method string getValue() 获取公钥值
 * @method void setValue(string $Value) 设置公钥值
 * @method string getComment() 获取公钥备注
 * @method void setComment(string $Comment) 设置公钥备注
 * @method string getEncryptType() 获取加密方式
 * @method void setEncryptType(string $EncryptType) 设置加密方式
 */
class AssetUserKeyInfo extends AbstractModel
{
    /**
     * @var string 公钥值
     */
    public $Value;

    /**
     * @var string 公钥备注
     */
    public $Comment;

    /**
     * @var string 加密方式
     */
    public $EncryptType;

    /**
     * @param string $Value 公钥值
     * @param string $Comment 公钥备注
     * @param string $EncryptType 加密方式
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
