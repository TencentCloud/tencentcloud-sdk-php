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
 * ModifyAccountDescription请求参数结构体
 *
 * @method string getAccountName() 获取数据库账号名
 * @method void setAccountName(string $AccountName) 设置数据库账号名
 * @method string getDescription() 获取数据库账号描述信息
 * @method void setDescription(string $Description) 设置数据库账号描述信息
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getHost() 获取主机，默认为"%"
 * @method void setHost(string $Host) 设置主机，默认为"%"
 */
class ModifyAccountDescriptionRequest extends AbstractModel
{
    /**
     * @var string 数据库账号名
     */
    public $AccountName;

    /**
     * @var string 数据库账号描述信息
     */
    public $Description;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 主机，默认为"%"
     */
    public $Host;

    /**
     * @param string $AccountName 数据库账号名
     * @param string $Description 数据库账号描述信息
     * @param string $ClusterId 集群ID
     * @param string $Host 主机，默认为"%"
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
