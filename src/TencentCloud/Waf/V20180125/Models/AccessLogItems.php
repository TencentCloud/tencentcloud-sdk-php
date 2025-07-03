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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志KeyValue对数组，用于搜索访问日志
 *
 * @method array getData() 获取分析结果返回的KV数据对
 * @method void setData(array $Data) 设置分析结果返回的KV数据对
 */
class AccessLogItems extends AbstractModel
{
    /**
     * @var array 分析结果返回的KV数据对
     */
    public $Data;

    /**
     * @param array $Data 分析结果返回的KV数据对
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AccessLogItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
