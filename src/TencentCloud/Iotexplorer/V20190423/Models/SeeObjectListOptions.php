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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 直传对象列举选项
 *
 * @method string getDelimiter() 获取目录分隔符
 * @method void setDelimiter(string $Delimiter) 设置目录分隔符
 * @method string getMarker() 获取分页标记
 * @method void setMarker(string $Marker) 设置分页标记
 * @method integer getMaxKeys() 获取单页返回的最大对象数量
 * @method void setMaxKeys(integer $MaxKeys) 设置单页返回的最大对象数量
 */
class SeeObjectListOptions extends AbstractModel
{
    /**
     * @var string 目录分隔符
     */
    public $Delimiter;

    /**
     * @var string 分页标记
     */
    public $Marker;

    /**
     * @var integer 单页返回的最大对象数量
     */
    public $MaxKeys;

    /**
     * @param string $Delimiter 目录分隔符
     * @param string $Marker 分页标记
     * @param integer $MaxKeys 单页返回的最大对象数量
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
        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }

        if (array_key_exists("MaxKeys",$param) and $param["MaxKeys"] !== null) {
            $this->MaxKeys = $param["MaxKeys"];
        }
    }
}
