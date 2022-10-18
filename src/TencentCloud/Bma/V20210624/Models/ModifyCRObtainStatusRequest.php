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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCRObtainStatus请求参数结构体
 *
 * @method integer getTortId() 获取侵权ID
 * @method void setTortId(integer $TortId) 设置侵权ID
 * @method integer getObtainType() 获取取证类型：1-网页取证 2-过程取证(暂不提供)
 * @method void setObtainType(integer $ObtainType) 设置取证类型：1-网页取证 2-过程取证(暂不提供)
 * @method integer getObtainDuration() 获取过程取证的取证时长，单位分钟，范围0-120
 * @method void setObtainDuration(integer $ObtainDuration) 设置过程取证的取证时长，单位分钟，范围0-120
 * @method string getObtainUrl() 获取取证结果回调地址
 * @method void setObtainUrl(string $ObtainUrl) 设置取证结果回调地址
 */
class ModifyCRObtainStatusRequest extends AbstractModel
{
    /**
     * @var integer 侵权ID
     */
    public $TortId;

    /**
     * @var integer 取证类型：1-网页取证 2-过程取证(暂不提供)
     */
    public $ObtainType;

    /**
     * @var integer 过程取证的取证时长，单位分钟，范围0-120
     */
    public $ObtainDuration;

    /**
     * @var string 取证结果回调地址
     */
    public $ObtainUrl;

    /**
     * @param integer $TortId 侵权ID
     * @param integer $ObtainType 取证类型：1-网页取证 2-过程取证(暂不提供)
     * @param integer $ObtainDuration 过程取证的取证时长，单位分钟，范围0-120
     * @param string $ObtainUrl 取证结果回调地址
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
        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("ObtainType",$param) and $param["ObtainType"] !== null) {
            $this->ObtainType = $param["ObtainType"];
        }

        if (array_key_exists("ObtainDuration",$param) and $param["ObtainDuration"] !== null) {
            $this->ObtainDuration = $param["ObtainDuration"];
        }

        if (array_key_exists("ObtainUrl",$param) and $param["ObtainUrl"] !== null) {
            $this->ObtainUrl = $param["ObtainUrl"];
        }
    }
}
