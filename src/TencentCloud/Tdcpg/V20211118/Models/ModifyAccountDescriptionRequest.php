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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountDescription请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getAccountName() 获取账号名字
 * @method void setAccountName(string $AccountName) 设置账号名字
 * @method string getAccountDescription() 获取账号描述，0-256个字符
 * @method void setAccountDescription(string $AccountDescription) 设置账号描述，0-256个字符
 */
class ModifyAccountDescriptionRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 账号名字
     */
    public $AccountName;

    /**
     * @var string 账号描述，0-256个字符
     */
    public $AccountDescription;

    /**
     * @param string $ClusterId 集群ID
     * @param string $AccountName 账号名字
     * @param string $AccountDescription 账号描述，0-256个字符
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

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountDescription",$param) and $param["AccountDescription"] !== null) {
            $this->AccountDescription = $param["AccountDescription"];
        }
    }
}
