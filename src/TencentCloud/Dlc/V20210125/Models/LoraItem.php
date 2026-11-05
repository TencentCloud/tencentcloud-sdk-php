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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个 LoRA Adapter（LoRA 模型版本）绑定项.
 *
 * @method string getModelVersionUid() 获取<p>模型版本 UID</p>
 * @method void setModelVersionUid(string $ModelVersionUid) 设置<p>模型版本 UID</p>
 * @method string getModelUid() 获取<p>模型 UID</p>
 * @method void setModelUid(string $ModelUid) 设置<p>模型 UID</p>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getVersion() 获取<p>模型版本</p>
 * @method void setVersion(string $Version) 设置<p>模型版本</p>
 * @method string getAlias() 获取<p>别名</p>
 * @method void setAlias(string $Alias) 设置<p>别名</p>
 * @method integer getAdapterRank() 获取<p>Lora Rank</p>
 * @method void setAdapterRank(integer $AdapterRank) 设置<p>Lora Rank</p>
 */
class LoraItem extends AbstractModel
{
    /**
     * @var string <p>模型版本 UID</p>
     */
    public $ModelVersionUid;

    /**
     * @var string <p>模型 UID</p>
     */
    public $ModelUid;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本</p>
     */
    public $Version;

    /**
     * @var string <p>别名</p>
     */
    public $Alias;

    /**
     * @var integer <p>Lora Rank</p>
     */
    public $AdapterRank;

    /**
     * @param string $ModelVersionUid <p>模型版本 UID</p>
     * @param string $ModelUid <p>模型 UID</p>
     * @param string $ModelName <p>模型名称</p>
     * @param string $Version <p>模型版本</p>
     * @param string $Alias <p>别名</p>
     * @param integer $AdapterRank <p>Lora Rank</p>
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
        if (array_key_exists("ModelVersionUid",$param) and $param["ModelVersionUid"] !== null) {
            $this->ModelVersionUid = $param["ModelVersionUid"];
        }

        if (array_key_exists("ModelUid",$param) and $param["ModelUid"] !== null) {
            $this->ModelUid = $param["ModelUid"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("AdapterRank",$param) and $param["AdapterRank"] !== null) {
            $this->AdapterRank = $param["AdapterRank"];
        }
    }
}
