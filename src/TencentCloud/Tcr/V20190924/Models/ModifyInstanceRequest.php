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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstance请求参数结构体
 *
 * @method string getRegistryId() 获取<p>实例ID</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>实例ID</p>
 * @method string getRegistryType() 获取<p>实例的规格,<br>基础版：basic<br>标准版：standard<br>高级版：premium</p>
 * @method void setRegistryType(string $RegistryType) 设置<p>实例的规格,<br>基础版：basic<br>标准版：standard<br>高级版：premium</p>
 * @method boolean getDeletionProtection() 获取<p>实例删除保护，false为关闭</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>实例删除保护，false为关闭</p>
 * @method boolean getEnableCosVersioning() 获取<p>实例是否开启多版本控制，false为关闭</p>
 * @method void setEnableCosVersioning(boolean $EnableCosVersioning) 设置<p>实例是否开启多版本控制，false为关闭</p>
 */
class ModifyInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $RegistryId;

    /**
     * @var string <p>实例的规格,<br>基础版：basic<br>标准版：standard<br>高级版：premium</p>
     */
    public $RegistryType;

    /**
     * @var boolean <p>实例删除保护，false为关闭</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>实例是否开启多版本控制，false为关闭</p>
     */
    public $EnableCosVersioning;

    /**
     * @param string $RegistryId <p>实例ID</p>
     * @param string $RegistryType <p>实例的规格,<br>基础版：basic<br>标准版：standard<br>高级版：premium</p>
     * @param boolean $DeletionProtection <p>实例删除保护，false为关闭</p>
     * @param boolean $EnableCosVersioning <p>实例是否开启多版本控制，false为关闭</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("EnableCosVersioning",$param) and $param["EnableCosVersioning"] !== null) {
            $this->EnableCosVersioning = $param["EnableCosVersioning"];
        }
    }
}
