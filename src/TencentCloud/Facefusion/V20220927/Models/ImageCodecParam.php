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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片编码参数
 *
 * @method array getMetaData() 获取元数据
 * @method void setMetaData(array $MetaData) 设置元数据
 */
class ImageCodecParam extends AbstractModel
{
    /**
     * @var array 元数据
     */
    public $MetaData;

    /**
     * @param array $MetaData 元数据
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
        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = [];
            foreach ($param["MetaData"] as $key => $value){
                $obj = new MetaData();
                $obj->deserialize($value);
                array_push($this->MetaData, $obj);
            }
        }
    }
}
