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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDevices请求参数结构体
 *
 * @method integer getPageSize() 获取每页显示记录数，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
 * @method void setPageSize(integer $PageSize) 设置每页显示记录数，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
 * @method integer getPageNumber() 获取当前查看页码，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
 * @method void setPageNumber(integer $PageNumber) 设置当前查看页码，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
 * @method string getKeyword() 获取搜索设备的关键字（ID或者设备名），为空时匹配所有设备
 * @method void setKeyword(string $Keyword) 设置搜索设备的关键字（ID或者设备名），为空时匹配所有设备
 */
class GetDevicesRequest extends AbstractModel
{
    /**
     * @var integer 每页显示记录数，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
     */
    public $PageSize;

    /**
     * @var integer 当前查看页码，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
     */
    public $PageNumber;

    /**
     * @var string 搜索设备的关键字（ID或者设备名），为空时匹配所有设备
     */
    public $Keyword;

    /**
     * @param integer $PageSize 每页显示记录数，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
     * @param integer $PageNumber 当前查看页码，PageSize、PageNumber值均为-1 时，按照1页无限制条数匹配所有设备
     * @param string $Keyword 搜索设备的关键字（ID或者设备名），为空时匹配所有设备
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
