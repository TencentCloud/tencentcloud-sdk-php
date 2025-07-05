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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseInfoList请求参数结构体
 *
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 * @method string getConnectionType() 获取连接类型
 * @method void setConnectionType(string $ConnectionType) 设置连接类型
 */
class DescribeDatabaseInfoListRequest extends AbstractModel
{
    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @var string 连接类型
     */
    public $ConnectionType;

    /**
     * @param array $Filters 过滤参数
     * @param string $ConnectionType 连接类型
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }
    }
}
