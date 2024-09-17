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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图文并茂占位符替换信息
 *
 * @method string getId() 获取占位符序号
 * @method void setId(string $Id) 设置占位符序号
 * @method array getMultimedia() 获取多媒体详情
 * @method void setMultimedia(array $Multimedia) 设置多媒体详情
 */
class Replace extends AbstractModel
{
    /**
     * @var string 占位符序号
     */
    public $Id;

    /**
     * @var array 多媒体详情
     */
    public $Multimedia;

    /**
     * @param string $Id 占位符序号
     * @param array $Multimedia 多媒体详情
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Multimedia",$param) and $param["Multimedia"] !== null) {
            $this->Multimedia = [];
            foreach ($param["Multimedia"] as $key => $value){
                $obj = new Multimedia();
                $obj->deserialize($value);
                array_push($this->Multimedia, $obj);
            }
        }
    }
}
