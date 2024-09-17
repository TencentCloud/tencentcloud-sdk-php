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
 * 图文并茂详情
 *
 * @method string getType() 获取多媒体类型，image：图片。
 * @method void setType(string $Type) 设置多媒体类型，image：图片。
 * @method string getUrl() 获取多媒体预览地址。
 * @method void setUrl(string $Url) 设置多媒体预览地址。
 * @method string getJumpUrl() 获取多媒体详情地址。
 * @method void setJumpUrl(string $JumpUrl) 设置多媒体详情地址。
 */
class Multimedia extends AbstractModel
{
    /**
     * @var string 多媒体类型，image：图片。
     */
    public $Type;

    /**
     * @var string 多媒体预览地址。
     */
    public $Url;

    /**
     * @var string 多媒体详情地址。
     */
    public $JumpUrl;

    /**
     * @param string $Type 多媒体类型，image：图片。
     * @param string $Url 多媒体预览地址。
     * @param string $JumpUrl 多媒体详情地址。
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

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
