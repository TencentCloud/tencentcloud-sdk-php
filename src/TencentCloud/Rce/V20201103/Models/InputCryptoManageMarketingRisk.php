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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全栈式风控引擎入参
 *
 * @method string getIsAuthorized() 获取是否授权
 * @method void setIsAuthorized(string $IsAuthorized) 设置是否授权
 * @method string getCryptoType() 获取加密类型
 * @method void setCryptoType(string $CryptoType) 设置加密类型
 * @method string getCryptoContent() 获取加密内容
 * @method void setCryptoContent(string $CryptoContent) 设置加密内容
 */
class InputCryptoManageMarketingRisk extends AbstractModel
{
    /**
     * @var string 是否授权
     */
    public $IsAuthorized;

    /**
     * @var string 加密类型
     */
    public $CryptoType;

    /**
     * @var string 加密内容
     */
    public $CryptoContent;

    /**
     * @param string $IsAuthorized 是否授权
     * @param string $CryptoType 加密类型
     * @param string $CryptoContent 加密内容
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
        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("CryptoType",$param) and $param["CryptoType"] !== null) {
            $this->CryptoType = $param["CryptoType"];
        }

        if (array_key_exists("CryptoContent",$param) and $param["CryptoContent"] !== null) {
            $this->CryptoContent = $param["CryptoContent"];
        }
    }
}
