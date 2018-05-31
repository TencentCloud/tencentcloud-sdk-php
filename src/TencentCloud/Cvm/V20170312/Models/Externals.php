<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getReleaseAddress() 获取释放地址
 * @method void setReleaseAddress(boolean $ReleaseAddress) 设置释放地址
 * @method array getUnsupportNetworks() 获取不支持的网络类型
 * @method void setUnsupportNetworks(array $UnsupportNetworks) 设置不支持的网络类型
 * @method StorageBlock getStorageBlockAttr() 获取HDD本地存储属性
 * @method void setStorageBlockAttr(StorageBlock $StorageBlockAttr) 设置HDD本地存储属性
 */

/**
 *扩展数据
 */
class Externals extends AbstractModel
{
    /**
     * @var boolean 释放地址
     */
    public $ReleaseAddress;

    /**
     * @var array 不支持的网络类型
     */
    public $UnsupportNetworks;

    /**
     * @var StorageBlock HDD本地存储属性
     */
    public $StorageBlockAttr;
    /**
     * @param boolean $ReleaseAddress 释放地址
     * @param array $UnsupportNetworks 不支持的网络类型
     * @param StorageBlock $StorageBlockAttr HDD本地存储属性
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReleaseAddress",$param) and $param["ReleaseAddress"] !== null) {
            $this->ReleaseAddress = $param["ReleaseAddress"];
        }

        if (array_key_exists("UnsupportNetworks",$param) and $param["UnsupportNetworks"] !== null) {
            $this->UnsupportNetworks = $param["UnsupportNetworks"];
        }

        if (array_key_exists("StorageBlockAttr",$param) and $param["StorageBlockAttr"] !== null) {
            $this->StorageBlockAttr = new StorageBlock();
            $this->StorageBlockAttr->deserialize($param["StorageBlockAttr"]);
        }
    }
}
