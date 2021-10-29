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
namespace TencentCloud\Taf\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务入参
 *
 * @method string getTaskId() 获取投放任务ID
 * @method void setTaskId(string $TaskId) 设置投放任务ID
 * @method array getMobiles() 获取手机号码列表（号码量<=200）
 * @method void setMobiles(array $Mobiles) 设置手机号码列表（号码量<=200）
 * @method integer getIsAuthorized() 获取是否授权，1：已授权
 * @method void setIsAuthorized(integer $IsAuthorized) 设置是否授权，1：已授权
 * @method integer getEncryptMethod() 获取加密方式，0：AES加密；1：DES加密
 * @method void setEncryptMethod(integer $EncryptMethod) 设置加密方式，0：AES加密；1：DES加密
 * @method integer getEncryptMode() 获取加密算法中的块处理模式，0：ECB模式；1：CBC模式；2：CTR模式；3：CFB模式；4：OFB模式；
 * @method void setEncryptMode(integer $EncryptMode) 设置加密算法中的块处理模式，0：ECB模式；1：CBC模式；2：CTR模式；3：CFB模式；4：OFB模式；
 * @method integer getPaddingType() 获取填充模式，0：ZeroPadding；1：PKCS5Padding；2：PKCS7Padding；
 * @method void setPaddingType(integer $PaddingType) 设置填充模式，0：ZeroPadding；1：PKCS5Padding；2：PKCS7Padding；
 * @method string getEncryptData() 获取加密数据
 * @method void setEncryptData(string $EncryptData) 设置加密数据
 */
class InputSendTrafficSecuritySmsMsg extends AbstractModel
{
    /**
     * @var string 投放任务ID
     */
    public $TaskId;

    /**
     * @var array 手机号码列表（号码量<=200）
     */
    public $Mobiles;

    /**
     * @var integer 是否授权，1：已授权
     */
    public $IsAuthorized;

    /**
     * @var integer 加密方式，0：AES加密；1：DES加密
     */
    public $EncryptMethod;

    /**
     * @var integer 加密算法中的块处理模式，0：ECB模式；1：CBC模式；2：CTR模式；3：CFB模式；4：OFB模式；
     */
    public $EncryptMode;

    /**
     * @var integer 填充模式，0：ZeroPadding；1：PKCS5Padding；2：PKCS7Padding；
     */
    public $PaddingType;

    /**
     * @var string 加密数据
     */
    public $EncryptData;

    /**
     * @param string $TaskId 投放任务ID
     * @param array $Mobiles 手机号码列表（号码量<=200）
     * @param integer $IsAuthorized 是否授权，1：已授权
     * @param integer $EncryptMethod 加密方式，0：AES加密；1：DES加密
     * @param integer $EncryptMode 加密算法中的块处理模式，0：ECB模式；1：CBC模式；2：CTR模式；3：CFB模式；4：OFB模式；
     * @param integer $PaddingType 填充模式，0：ZeroPadding；1：PKCS5Padding；2：PKCS7Padding；
     * @param string $EncryptData 加密数据
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Mobiles",$param) and $param["Mobiles"] !== null) {
            $this->Mobiles = $param["Mobiles"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }

        if (array_key_exists("EncryptMode",$param) and $param["EncryptMode"] !== null) {
            $this->EncryptMode = $param["EncryptMode"];
        }

        if (array_key_exists("PaddingType",$param) and $param["PaddingType"] !== null) {
            $this->PaddingType = $param["PaddingType"];
        }

        if (array_key_exists("EncryptData",$param) and $param["EncryptData"] !== null) {
            $this->EncryptData = $param["EncryptData"];
        }
    }
}
