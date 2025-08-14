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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VolumeClaim模板项
 *
 * @method string getStorageClass() 获取StorageClass名称
 * @method void setStorageClass(string $StorageClass) 设置StorageClass名称
 * @method array getAccessModes() 获取访问模式
 * @method void setAccessModes(array $AccessModes) 设置访问模式
 * @method integer getStorageRequest() 获取卷空间的预占声明
 * @method void setStorageRequest(integer $StorageRequest) 设置卷空间的预占声明
 */
class VolumeClaimTemplatesOption extends AbstractModel
{
    /**
     * @var string StorageClass名称
     */
    public $StorageClass;

    /**
     * @var array 访问模式
     */
    public $AccessModes;

    /**
     * @var integer 卷空间的预占声明
     */
    public $StorageRequest;

    /**
     * @param string $StorageClass StorageClass名称
     * @param array $AccessModes 访问模式
     * @param integer $StorageRequest 卷空间的预占声明
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
        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("AccessModes",$param) and $param["AccessModes"] !== null) {
            $this->AccessModes = $param["AccessModes"];
        }

        if (array_key_exists("StorageRequest",$param) and $param["StorageRequest"] !== null) {
            $this->StorageRequest = $param["StorageRequest"];
        }
    }
}
