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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceidRiskInfoToken请求参数结构体
 *
 * @method string getMeta() 获取SDK中生成的Meta字符串
 * @method void setMeta(string $Meta) 设置SDK中生成的Meta字符串
 * @method string getExtra() 获取透传参数 1000长度字符串
 * @method void setExtra(string $Extra) 设置透传参数 1000长度字符串
 */
class GetFaceidRiskInfoTokenRequest extends AbstractModel
{
    /**
     * @var string SDK中生成的Meta字符串
     */
    public $Meta;

    /**
     * @var string 透传参数 1000长度字符串
     */
    public $Extra;

    /**
     * @param string $Meta SDK中生成的Meta字符串
     * @param string $Extra 透传参数 1000长度字符串
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
        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
