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
 * 智能擦除模板隐私保护配置
 *
 * @method string getPrivacyModel() 获取隐私保护擦除方式。
- blur 模糊
- mosaic 马赛克
 * @method void setPrivacyModel(string $PrivacyModel) 设置隐私保护擦除方式。
- blur 模糊
- mosaic 马赛克
 * @method array getPrivacyTargets() 获取隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。
- face 人脸
- plate 车牌
 * @method void setPrivacyTargets(array $PrivacyTargets) 设置隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。
- face 人脸
- plate 车牌
 */
class UpdateSmartErasePrivacyConfig extends AbstractModel
{
    /**
     * @var string 隐私保护擦除方式。
- blur 模糊
- mosaic 马赛克
     */
    public $PrivacyModel;

    /**
     * @var array 隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。
- face 人脸
- plate 车牌
     */
    public $PrivacyTargets;

    /**
     * @param string $PrivacyModel 隐私保护擦除方式。
- blur 模糊
- mosaic 马赛克
     * @param array $PrivacyTargets 隐私保护目标，（在API Explorer上使用时无需传入数组，添加相应项并填入对应值即可）。
- face 人脸
- plate 车牌
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
