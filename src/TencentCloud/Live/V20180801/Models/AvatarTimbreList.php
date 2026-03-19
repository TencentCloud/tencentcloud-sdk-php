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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数字人音色信息列表。
 *
 * @method string getTimbreType() 获取音色 类型。
 * @method void setTimbreType(string $TimbreType) 设置音色 类型。
 * @method array getTimbreInfoList() 获取音色信息列表。
 * @method void setTimbreInfoList(array $TimbreInfoList) 设置音色信息列表。
 */
class AvatarTimbreList extends AbstractModel
{
    /**
     * @var string 音色 类型。
     */
    public $TimbreType;

    /**
     * @var array 音色信息列表。
     */
    public $TimbreInfoList;

    /**
     * @param string $TimbreType 音色 类型。
     * @param array $TimbreInfoList 音色信息列表。
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
        if (array_key_exists("TimbreType",$param) and $param["TimbreType"] !== null) {
            $this->TimbreType = $param["TimbreType"];
        }

        if (array_key_exists("TimbreInfoList",$param) and $param["TimbreInfoList"] !== null) {
            $this->TimbreInfoList = [];
            foreach ($param["TimbreInfoList"] as $key => $value){
                $obj = new AvatarTimbreInfo();
                $obj->deserialize($value);
                array_push($this->TimbreInfoList, $obj);
            }
        }
    }
}
