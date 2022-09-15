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
 * DescribeAssetUserInfo请求参数结构体
 *
 * @method string getQuuid() 获取云服务器UUID
 * @method void setQuuid(string $Quuid) 设置云服务器UUID
 * @method string getUuid() 获取主机安全UUID
 * @method void setUuid(string $Uuid) 设置主机安全UUID
 * @method string getName() 获取账户名
 * @method void setName(string $Name) 设置账户名
 */
class DescribeAssetUserInfoRequest extends AbstractModel
{
    /**
     * @var string 云服务器UUID
     */
    public $Quuid;

    /**
     * @var string 主机安全UUID
     */
    public $Uuid;

    /**
     * @var string 账户名
     */
    public $Name;

    /**
     * @param string $Quuid 云服务器UUID
     * @param string $Uuid 主机安全UUID
     * @param string $Name 账户名
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
