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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES 配置
 *
 * @method boolean getCanModify() 获取<p>是否支持修改存储方式</p>
 * @method void setCanModify(boolean $CanModify) 设置<p>是否支持修改存储方式</p>
 * @method string getEncryptedPassword() 获取<p>ES 密码（加密后）</p>
 * @method void setEncryptedPassword(string $EncryptedPassword) 设置<p>ES 密码（加密后）</p>
 * @method string getInstanceId() 获取<p>ES 集群 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES 集群 ID</p>
 * @method integer getStorageType() 获取<p>存储类型：1=默认存储，2=自定义存储<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>默认存储</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>自定义存储</td></tr></tbody></table></p>
 * @method void setStorageType(integer $StorageType) 设置<p>存储类型：1=默认存储，2=自定义存储<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>默认存储</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>自定义存储</td></tr></tbody></table></p>
 * @method string getUserName() 获取<p>ES 用户名</p>
 * @method void setUserName(string $UserName) 设置<p>ES 用户名</p>
 */
class ESConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否支持修改存储方式</p>
     */
    public $CanModify;

    /**
     * @var string <p>ES 密码（加密后）</p>
     */
    public $EncryptedPassword;

    /**
     * @var string <p>ES 集群 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>存储类型：1=默认存储，2=自定义存储<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>默认存储</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>自定义存储</td></tr></tbody></table></p>
     */
    public $StorageType;

    /**
     * @var string <p>ES 用户名</p>
     */
    public $UserName;

    /**
     * @param boolean $CanModify <p>是否支持修改存储方式</p>
     * @param string $EncryptedPassword <p>ES 密码（加密后）</p>
     * @param string $InstanceId <p>ES 集群 ID</p>
     * @param integer $StorageType <p>存储类型：1=默认存储，2=自定义存储<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>ES_STORAGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>ES_STORAGE_TYPE_DEFAULT</td><td>1</td><td>默认存储</td></tr><tr><td>ES_STORAGE_TYPE_CUSTOM</td><td>2</td><td>自定义存储</td></tr></tbody></table></p>
     * @param string $UserName <p>ES 用户名</p>
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
        if (array_key_exists("CanModify",$param) and $param["CanModify"] !== null) {
            $this->CanModify = $param["CanModify"];
        }

        if (array_key_exists("EncryptedPassword",$param) and $param["EncryptedPassword"] !== null) {
            $this->EncryptedPassword = $param["EncryptedPassword"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
