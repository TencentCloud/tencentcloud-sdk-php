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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云数据库资源项
 *
 * @method string getRegion() 获取资源所处地域。
 * @method void setRegion(string $Region) 设置资源所处地域。
 * @method array getItems() 获取	云上资源列表。
 * @method void setItems(array $Items) 设置	云上资源列表。
 */
class CloudResourceItem extends AbstractModel
{
    /**
     * @var string 资源所处地域。
     */
    public $Region;

    /**
     * @var array 	云上资源列表。
     */
    public $Items;

    /**
     * @param string $Region 资源所处地域。
     * @param array $Items 	云上资源列表。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DspaCloudResourceMeta();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
