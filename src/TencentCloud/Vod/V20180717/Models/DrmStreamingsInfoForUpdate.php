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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DRM 自适应码流播放信息修改对象
 *
 * @method integer getSimpleAesDefinition() 获取保护类型为 SimpleAES 的转自适应码流模板 ID。
 * @method void setSimpleAesDefinition(integer $SimpleAesDefinition) 设置保护类型为 SimpleAES 的转自适应码流模板 ID。
 * @method integer getWidevineDefinition() 获取保护类型为 Widevine 的转自适应码流模板 ID。
 * @method void setWidevineDefinition(integer $WidevineDefinition) 设置保护类型为 Widevine 的转自适应码流模板 ID。
 * @method integer getFairPlayDefinition() 获取保护类型为 FairPlay 的转自适应码流模板 ID。
 * @method void setFairPlayDefinition(integer $FairPlayDefinition) 设置保护类型为 FairPlay 的转自适应码流模板 ID。
 */
class DrmStreamingsInfoForUpdate extends AbstractModel
{
    /**
     * @var integer 保护类型为 SimpleAES 的转自适应码流模板 ID。
     */
    public $SimpleAesDefinition;

    /**
     * @var integer 保护类型为 Widevine 的转自适应码流模板 ID。
     */
    public $WidevineDefinition;

    /**
     * @var integer 保护类型为 FairPlay 的转自适应码流模板 ID。
     */
    public $FairPlayDefinition;

    /**
     * @param integer $SimpleAesDefinition 保护类型为 SimpleAES 的转自适应码流模板 ID。
     * @param integer $WidevineDefinition 保护类型为 Widevine 的转自适应码流模板 ID。
     * @param integer $FairPlayDefinition 保护类型为 FairPlay 的转自适应码流模板 ID。
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
        if (array_key_exists("SimpleAesDefinition",$param) and $param["SimpleAesDefinition"] !== null) {
            $this->SimpleAesDefinition = $param["SimpleAesDefinition"];
        }

        if (array_key_exists("WidevineDefinition",$param) and $param["WidevineDefinition"] !== null) {
            $this->WidevineDefinition = $param["WidevineDefinition"];
        }

        if (array_key_exists("FairPlayDefinition",$param) and $param["FairPlayDefinition"] !== null) {
            $this->FairPlayDefinition = $param["FairPlayDefinition"];
        }
    }
}
