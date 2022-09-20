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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Top类数据记录
 *
 * @method string getTypeKey() 获取查询维度值。
 * @method void setTypeKey(string $TypeKey) 设置查询维度值。
 * @method array getDetailData() 获取top数据排行。
 * @method void setDetailData(array $DetailData) 设置top数据排行。
 */
class TopDataRecord extends AbstractModel
{
    /**
     * @var string 查询维度值。
     */
    public $TypeKey;

    /**
     * @var array top数据排行。
     */
    public $DetailData;

    /**
     * @param string $TypeKey 查询维度值。
     * @param array $DetailData top数据排行。
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
        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new TopDetailData();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}
