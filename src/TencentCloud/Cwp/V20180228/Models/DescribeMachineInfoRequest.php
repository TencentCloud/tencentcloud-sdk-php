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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineInfo请求参数结构体
 *
 * @method string getUuid() 获取主机安全客户端唯一Uuid。
 * @method void setUuid(string $Uuid) 设置主机安全客户端唯一Uuid。
 * @method string getQuuid() 获取Quuid , Uuid 必填一项
 * @method void setQuuid(string $Quuid) 设置Quuid , Uuid 必填一项
 */
class DescribeMachineInfoRequest extends AbstractModel
{
    /**
     * @var string 主机安全客户端唯一Uuid。
     */
    public $Uuid;

    /**
     * @var string Quuid , Uuid 必填一项
     */
    public $Quuid;

    /**
     * @param string $Uuid 主机安全客户端唯一Uuid。
     * @param string $Quuid Quuid , Uuid 必填一项
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }
    }
}
