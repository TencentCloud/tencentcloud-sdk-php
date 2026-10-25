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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据卷返回信息
 *
 * @method array getItems() 获取数据卷信息
 * @method void setItems(array $Items) 设置数据卷信息
 * @method string getTotalCount() 获取总数据卷数量
 * @method void setTotalCount(string $TotalCount) 设置总数据卷数量
 * @method string getNextPageToken() 获取分页信息
 * @method void setNextPageToken(string $NextPageToken) 设置分页信息
 */
class ListVolumesRsp extends AbstractModel
{
    /**
     * @var array 数据卷信息
     */
    public $Items;

    /**
     * @var string 总数据卷数量
     */
    public $TotalCount;

    /**
     * @var string 分页信息
     */
    public $NextPageToken;

    /**
     * @param array $Items 数据卷信息
     * @param string $TotalCount 总数据卷数量
     * @param string $NextPageToken 分页信息
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Volume();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("NextPageToken",$param) and $param["NextPageToken"] !== null) {
            $this->NextPageToken = $param["NextPageToken"];
        }
    }
}
