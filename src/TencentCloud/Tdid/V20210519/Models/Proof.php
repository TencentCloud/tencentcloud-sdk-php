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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证凭证签名
 *
 * @method integer getCreated() 获取创建时间
 * @method void setCreated(integer $Created) 设置创建时间
 * @method string getCreator() 获取创建着did
 * @method void setCreator(string $Creator) 设置创建着did
 * @method string getSaltJson() 获取salt值
 * @method void setSaltJson(string $SaltJson) 设置salt值
 * @method string getSignatureValue() 获取签名
 * @method void setSignatureValue(string $SignatureValue) 设置签名
 * @method string getType() 获取type类型
 * @method void setType(string $Type) 设置type类型
 */
class Proof extends AbstractModel
{
    /**
     * @var integer 创建时间
     */
    public $Created;

    /**
     * @var string 创建着did
     */
    public $Creator;

    /**
     * @var string salt值
     */
    public $SaltJson;

    /**
     * @var string 签名
     */
    public $SignatureValue;

    /**
     * @var string type类型
     */
    public $Type;

    /**
     * @param integer $Created 创建时间
     * @param string $Creator 创建着did
     * @param string $SaltJson salt值
     * @param string $SignatureValue 签名
     * @param string $Type type类型
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
        if (array_key_exists("Created",$param) and $param["Created"] !== null) {
            $this->Created = $param["Created"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("SaltJson",$param) and $param["SaltJson"] !== null) {
            $this->SaltJson = $param["SaltJson"];
        }

        if (array_key_exists("SignatureValue",$param) and $param["SignatureValue"] !== null) {
            $this->SignatureValue = $param["SignatureValue"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
