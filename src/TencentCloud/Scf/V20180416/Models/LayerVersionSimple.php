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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定某个Layer版本
 *
 * @method string getLayerName() 获取绑定的层名称。解绑层需传递空字符串。
 * @method void setLayerName(string $LayerName) 设置绑定的层名称。解绑层需传递空字符串。
 * @method integer getLayerVersion() 获取绑定或解绑层的版本号。解绑函数版本关联的最后一个层版本时，LayerVersion 填 0。
 * @method void setLayerVersion(integer $LayerVersion) 设置绑定或解绑层的版本号。解绑函数版本关联的最后一个层版本时，LayerVersion 填 0。
 */
class LayerVersionSimple extends AbstractModel
{
    /**
     * @var string 绑定的层名称。解绑层需传递空字符串。
     */
    public $LayerName;

    /**
     * @var integer 绑定或解绑层的版本号。解绑函数版本关联的最后一个层版本时，LayerVersion 填 0。
     */
    public $LayerVersion;

    /**
     * @param string $LayerName 绑定的层名称。解绑层需传递空字符串。
     * @param integer $LayerVersion 绑定或解绑层的版本号。解绑函数版本关联的最后一个层版本时，LayerVersion 填 0。
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("LayerVersion",$param) and $param["LayerVersion"] !== null) {
            $this->LayerVersion = $param["LayerVersion"];
        }
    }
}
