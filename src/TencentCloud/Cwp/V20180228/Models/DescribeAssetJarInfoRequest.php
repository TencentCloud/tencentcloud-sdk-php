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
 * DescribeAssetJarInfo请求参数结构体
 *
 * @method string getQuuid() 获取服务器Quuid
 * @method void setQuuid(string $Quuid) 设置服务器Quuid
 * @method string getUuid() 获取服务器Uuid
 * @method void setUuid(string $Uuid) 设置服务器Uuid
 * @method string getId() 获取Jar包ID
 * @method void setId(string $Id) 设置Jar包ID
 */
class DescribeAssetJarInfoRequest extends AbstractModel
{
    /**
     * @var string 服务器Quuid
     */
    public $Quuid;

    /**
     * @var string 服务器Uuid
     */
    public $Uuid;

    /**
     * @var string Jar包ID
     */
    public $Id;

    /**
     * @param string $Quuid 服务器Quuid
     * @param string $Uuid 服务器Uuid
     * @param string $Id Jar包ID
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
