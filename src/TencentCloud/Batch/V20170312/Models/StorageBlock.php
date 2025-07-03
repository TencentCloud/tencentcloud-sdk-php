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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HDD的本地存储信息
 *
 * @method string getType() 获取HDD本地存储类型，值为：LOCAL_PRO.
 * @method void setType(string $Type) 设置HDD本地存储类型，值为：LOCAL_PRO.
 * @method integer getMinSize() 获取HDD本地存储的最小容量。单位：GiB。
 * @method void setMinSize(integer $MinSize) 设置HDD本地存储的最小容量。单位：GiB。
 * @method integer getMaxSize() 获取HDD本地存储的最大容量。单位：GiB。
 * @method void setMaxSize(integer $MaxSize) 设置HDD本地存储的最大容量。单位：GiB。
 */
class StorageBlock extends AbstractModel
{
    /**
     * @var string HDD本地存储类型，值为：LOCAL_PRO.
     */
    public $Type;

    /**
     * @var integer HDD本地存储的最小容量。单位：GiB。
     */
    public $MinSize;

    /**
     * @var integer HDD本地存储的最大容量。单位：GiB。
     */
    public $MaxSize;

    /**
     * @param string $Type HDD本地存储类型，值为：LOCAL_PRO.
     * @param integer $MinSize HDD本地存储的最小容量。单位：GiB。
     * @param integer $MaxSize HDD本地存储的最大容量。单位：GiB。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
