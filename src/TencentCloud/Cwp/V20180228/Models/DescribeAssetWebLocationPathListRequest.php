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
 * DescribeAssetWebLocationPathList请求参数结构体
 *
 * @method string getQuuid() 获取服务器Quuid
 * @method void setQuuid(string $Quuid) 设置服务器Quuid
 * @method string getUuid() 获取服务器Uuid
 * @method void setUuid(string $Uuid) 设置服务器Uuid
 * @method string getId() 获取Web站点Id
 * @method void setId(string $Id) 设置Web站点Id
 * @method integer getLimit() 获取返回列表数量，最多100，默认10
 * @method void setLimit(integer $Limit) 设置返回列表数量，最多100，默认10
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 */
class DescribeAssetWebLocationPathListRequest extends AbstractModel
{
    /**
     * @var string 服务器Quuid
     */
    public $Quuid;

    /**
     * @var string 服务器Uuid
     */
    public $Uuid;

    /**
     * @var string Web站点Id
     */
    public $Id;

    /**
     * @var integer 返回列表数量，最多100，默认10
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @param string $Quuid 服务器Quuid
     * @param string $Uuid 服务器Uuid
     * @param string $Id Web站点Id
     * @param integer $Limit 返回列表数量，最多100，默认10
     * @param integer $Offset 偏移量，默认为0
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
