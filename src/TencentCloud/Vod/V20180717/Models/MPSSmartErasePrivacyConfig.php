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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除模板隐私保护配置
 *
 * @method string getPrivacyModel() 获取<p>隐私保护擦除方式。</p><p>枚举值：</p><ul><li>blur： 模糊</li><li>mosaic： 马赛克</li></ul>
 * @method void setPrivacyModel(string $PrivacyModel) 设置<p>隐私保护擦除方式。</p><p>枚举值：</p><ul><li>blur： 模糊</li><li>mosaic： 马赛克</li></ul>
 * @method array getPrivacyTargets() 获取<p>隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。</p><p>枚举值：</p><ul><li>face： 人脸</li><li>plate： 车牌</li></ul>
 * @method void setPrivacyTargets(array $PrivacyTargets) 设置<p>隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。</p><p>枚举值：</p><ul><li>face： 人脸</li><li>plate： 车牌</li></ul>
 */
class MPSSmartErasePrivacyConfig extends AbstractModel
{
    /**
     * @var string <p>隐私保护擦除方式。</p><p>枚举值：</p><ul><li>blur： 模糊</li><li>mosaic： 马赛克</li></ul>
     */
    public $PrivacyModel;

    /**
     * @var array <p>隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。</p><p>枚举值：</p><ul><li>face： 人脸</li><li>plate： 车牌</li></ul>
     */
    public $PrivacyTargets;

    /**
     * @param string $PrivacyModel <p>隐私保护擦除方式。</p><p>枚举值：</p><ul><li>blur： 模糊</li><li>mosaic： 马赛克</li></ul>
     * @param array $PrivacyTargets <p>隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。</p><p>枚举值：</p><ul><li>face： 人脸</li><li>plate： 车牌</li></ul>
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
        if (array_key_exists("PrivacyModel",$param) and $param["PrivacyModel"] !== null) {
            $this->PrivacyModel = $param["PrivacyModel"];
        }

        if (array_key_exists("PrivacyTargets",$param) and $param["PrivacyTargets"] !== null) {
            $this->PrivacyTargets = $param["PrivacyTargets"];
        }
    }
}
