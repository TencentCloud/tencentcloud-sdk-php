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
 * 用于AIGC视频生成的参考视频素材。
 *
 * @method string getVideoUrl() 获取参考视频url。需要外网可访问。
可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声
通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频
参考视频为待编辑视频时，不能定义视频首尾帧。
 * @method void setVideoUrl(string $VideoUrl) 设置参考视频url。需要外网可访问。
可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声
通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频
参考视频为待编辑视频时，不能定义视频首尾帧。
 * @method string getReferType() 获取通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频。
 * @method void setReferType(string $ReferType) 设置通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频。
 * @method string getKeepOriginalSound() 获取通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效。
 * @method void setKeepOriginalSound(string $KeepOriginalSound) 设置通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效。
 */
class AigcVideoReferenceVideoInfo extends AbstractModel
{
    /**
     * @var string 参考视频url。需要外网可访问。
可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声
通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频
参考视频为待编辑视频时，不能定义视频首尾帧。
     */
    public $VideoUrl;

    /**
     * @var string 通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频。
     */
    public $ReferType;

    /**
     * @var string 通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效。
     */
    public $KeepOriginalSound;

    /**
     * @param string $VideoUrl 参考视频url。需要外网可访问。
可作为特征参考视频，也可作为待编辑视频，默认为待编辑视频；可选择性保留视频原声
通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频
参考视频为待编辑视频时，不能定义视频首尾帧。
     * @param string $ReferType 通过ReferType参数区分参考视频类型：feature为特征参考视频，base为待编辑视频。
     * @param string $KeepOriginalSound 通过KeepOriginalSound参数选择是否保留视频原声，yes为保留，no为不保留；当前参数对特征参考视频（feature）也生效。
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("ReferType",$param) and $param["ReferType"] !== null) {
            $this->ReferType = $param["ReferType"];
        }

        if (array_key_exists("KeepOriginalSound",$param) and $param["KeepOriginalSound"] !== null) {
            $this->KeepOriginalSound = $param["KeepOriginalSound"];
        }
    }
}
