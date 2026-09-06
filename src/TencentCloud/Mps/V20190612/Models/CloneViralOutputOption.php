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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 爆款复刻输出配置
 *
 * @method string getType() 获取<p>输出类型。默认url</p><p>枚举值：</p><ul><li>url： 临时链接，有效期24小时</li><li>cos： 指定cos桶和路径</li></ul>
 * @method void setType(string $Type) 设置<p>输出类型。默认url</p><p>枚举值：</p><ul><li>url： 临时链接，有效期24小时</li><li>cos： 指定cos桶和路径</li></ul>
 * @method CloneViralCosInfo getCosInfo() 获取<p>自定义cos信息</p>
 * @method void setCosInfo(CloneViralCosInfo $CosInfo) 设置<p>自定义cos信息</p>
 */
class CloneViralOutputOption extends AbstractModel
{
    /**
     * @var string <p>输出类型。默认url</p><p>枚举值：</p><ul><li>url： 临时链接，有效期24小时</li><li>cos： 指定cos桶和路径</li></ul>
     */
    public $Type;

    /**
     * @var CloneViralCosInfo <p>自定义cos信息</p>
     */
    public $CosInfo;

    /**
     * @param string $Type <p>输出类型。默认url</p><p>枚举值：</p><ul><li>url： 临时链接，有效期24小时</li><li>cos： 指定cos桶和路径</li></ul>
     * @param CloneViralCosInfo $CosInfo <p>自定义cos信息</p>
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

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CloneViralCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }
    }
}
