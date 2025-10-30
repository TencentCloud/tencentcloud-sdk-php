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
 * Location信息结构
 *
 * @method string getBucket() 获取桶名称
 * @method void setBucket(string $Bucket) 设置桶名称
 * @method string getDataLocation() 获取location路径
 * @method void setDataLocation(string $DataLocation) 设置location路径
 */
class LocationInfo extends AbstractModel
{
    /**
     * @var string 桶名称
     */
    public $Bucket;

    /**
     * @var string location路径
     */
    public $DataLocation;

    /**
     * @param string $Bucket 桶名称
     * @param string $DataLocation location路径
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("DataLocation",$param) and $param["DataLocation"] !== null) {
            $this->DataLocation = $param["DataLocation"];
        }
    }
}
