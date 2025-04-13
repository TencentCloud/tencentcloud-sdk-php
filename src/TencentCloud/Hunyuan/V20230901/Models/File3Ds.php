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
 * 3D文件列表
 *
 * @method array getFile3D() 获取3D文件列表
 * @method void setFile3D(array $File3D) 设置3D文件列表
 */
class File3Ds extends AbstractModel
{
    /**
     * @var array 3D文件列表
     */
    public $File3D;

    /**
     * @param array $File3D 3D文件列表
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
        if (array_key_exists("File3D",$param) and $param["File3D"] !== null) {
            $this->File3D = [];
            foreach ($param["File3D"] as $key => $value){
                $obj = new File3D();
                $obj->deserialize($value);
                array_push($this->File3D, $obj);
            }
        }
    }
}
