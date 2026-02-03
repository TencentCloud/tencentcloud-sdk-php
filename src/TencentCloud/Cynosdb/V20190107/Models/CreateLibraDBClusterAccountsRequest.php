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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLibraDBClusterAccounts请求参数结构体
 *
 * @method string getClusterId() 获取分析集群id
 * @method void setClusterId(string $ClusterId) 设置分析集群id
 * @method array getAccounts() 获取账户信息
 * @method void setAccounts(array $Accounts) 设置账户信息
 * @method string getEncryptMethod() 获取加密方式
 * @method void setEncryptMethod(string $EncryptMethod) 设置加密方式
 */
class CreateLibraDBClusterAccountsRequest extends AbstractModel
{
    /**
     * @var string 分析集群id
     */
    public $ClusterId;

    /**
     * @var array 账户信息
     */
    public $Accounts;

    /**
     * @var string 加密方式
     */
    public $EncryptMethod;

    /**
     * @param string $ClusterId 分析集群id
     * @param array $Accounts 账户信息
     * @param string $EncryptMethod 加密方式
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new NewAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("EncryptMethod",$param) and $param["EncryptMethod"] !== null) {
            $this->EncryptMethod = $param["EncryptMethod"];
        }
    }
}
