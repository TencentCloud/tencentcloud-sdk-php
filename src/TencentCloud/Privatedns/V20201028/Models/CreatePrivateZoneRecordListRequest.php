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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrivateZoneRecordList请求参数结构体
 *
 * @method array getZoneIds() 获取私有域ID数组
 * @method void setZoneIds(array $ZoneIds) 设置私有域ID数组
 * @method array getRecordsInfo() 获取私有域解析记录数据
 * @method void setRecordsInfo(array $RecordsInfo) 设置私有域解析记录数据
 */
class CreatePrivateZoneRecordListRequest extends AbstractModel
{
    /**
     * @var array 私有域ID数组
     */
    public $ZoneIds;

    /**
     * @var array 私有域解析记录数据
     */
    public $RecordsInfo;

    /**
     * @param array $ZoneIds 私有域ID数组
     * @param array $RecordsInfo 私有域解析记录数据
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
        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("RecordsInfo",$param) and $param["RecordsInfo"] !== null) {
            $this->RecordsInfo = [];
            foreach ($param["RecordsInfo"] as $key => $value){
                $obj = new RecordsInfo();
                $obj->deserialize($value);
                array_push($this->RecordsInfo, $obj);
            }
        }
    }
}
