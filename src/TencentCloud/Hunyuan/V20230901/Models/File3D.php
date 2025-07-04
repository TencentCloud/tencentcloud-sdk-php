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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 3D文件
 *
 * @method string getType() 获取3D文件的格式。取值范围：GIF, OBJ
 * @method void setType(string $Type) 设置3D文件的格式。取值范围：GIF, OBJ
 * @method string getUrl() 获取文件的Url（有效期24小时）
 * @method void setUrl(string $Url) 设置文件的Url（有效期24小时）
 */
class File3D extends AbstractModel
{
    /**
     * @var string 3D文件的格式。取值范围：GIF, OBJ
     */
    public $Type;

    /**
     * @var string 文件的Url（有效期24小时）
     */
    public $Url;

    /**
     * @param string $Type 3D文件的格式。取值范围：GIF, OBJ
     * @param string $Url 文件的Url（有效期24小时）
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
