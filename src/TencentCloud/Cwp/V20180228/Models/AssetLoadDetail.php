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
 * 资产管理负载信息
 *
 * @method string getMachineName() 获取主机名称
 * @method void setMachineName(string $MachineName) 设置主机名称
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method float getValue() 获取负载
 * @method void setValue(float $Value) 设置负载
 * @method string getQuuid() 获取主机Quuid
 * @method void setQuuid(string $Quuid) 设置主机Quuid
 * @method string getUuid() 获取主机Uuid
 * @method void setUuid(string $Uuid) 设置主机Uuid
 */
class AssetLoadDetail extends AbstractModel
{
    /**
     * @var string 主机名称
     */
    public $MachineName;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var float 负载
     */
    public $Value;

    /**
     * @var string 主机Quuid
     */
    public $Quuid;

    /**
     * @var string 主机Uuid
     */
    public $Uuid;

    /**
     * @param string $MachineName 主机名称
     * @param string $Desc 描述
     * @param float $Value 负载
     * @param string $Quuid 主机Quuid
     * @param string $Uuid 主机Uuid
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
