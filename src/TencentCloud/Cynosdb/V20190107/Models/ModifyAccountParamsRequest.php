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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountParams请求参数结构体
 *
 * @method string getClusterId() 获取集群id，不超过32个字符
 * @method void setClusterId(string $ClusterId) 设置集群id，不超过32个字符
 * @method InputAccount getAccount() 获取账号信息
 * @method void setAccount(InputAccount $Account) 设置账号信息
 * @method array getAccountParams() 获取数据库表权限数组,当前仅支持参数：max_user_connections，max_user_connections不能大于10240
 * @method void setAccountParams(array $AccountParams) 设置数据库表权限数组,当前仅支持参数：max_user_connections，max_user_connections不能大于10240
 */
class ModifyAccountParamsRequest extends AbstractModel
{
    /**
     * @var string 集群id，不超过32个字符
     */
    public $ClusterId;

    /**
     * @var InputAccount 账号信息
     */
    public $Account;

    /**
     * @var array 数据库表权限数组,当前仅支持参数：max_user_connections，max_user_connections不能大于10240
     */
    public $AccountParams;

    /**
     * @param string $ClusterId 集群id，不超过32个字符
     * @param InputAccount $Account 账号信息
     * @param array $AccountParams 数据库表权限数组,当前仅支持参数：max_user_connections，max_user_connections不能大于10240
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

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = new InputAccount();
            $this->Account->deserialize($param["Account"]);
        }

        if (array_key_exists("AccountParams",$param) and $param["AccountParams"] !== null) {
            $this->AccountParams = [];
            foreach ($param["AccountParams"] as $key => $value){
                $obj = new AccountParam();
                $obj->deserialize($value);
                array_push($this->AccountParams, $obj);
            }
        }
    }
}
